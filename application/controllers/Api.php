<?php

class Api extends Ci_Controller {

    public function __construct() {
        parent::__construct();
    }

    function check_exit_email() {
        $this->load->model('student_model');
        $this->load->model('courses_model');
        $this->load->model('student_courses_model');

        $get = $this->input->get();
        $email = $get['email'];
        $phone = $get['phone'];
        $course_code = $get['course_code'];
        $input = [];
        $input['select'] = 'id';
        $input['where'] = array('course_code' => $course_code);
        $course_id = $this->courses_model->load_all($input);
        $course_id = $course_id[0]['id'];


        $input = [];
        if (!empty($email)) {
            $input['where'] = array('email' => $email, 'phone' => $phone);
        } else {
            $input['where'] = array('phone' => $phone);
        }
        $student = $this->student_model->load_all($input);

        if (empty($student)) {
            $input = [];
            $input['or_where'] = array('email' => $email, 'phone' => $phone);
            $student = $this->student_model->load_all($input);
        }



        $a = [];
        if (!empty($student)) {
            foreach ($student as $value) {
                $input = [];
                $input['select'] = 'id';
                $input['where'] = array('student_id' => $value['id'], 'courses_id' => $course_id);
                $student_courses = $this->student_courses_model->load_all($input);
                if (!empty($student_courses)) {
                    $a[] = array('id' => $value['id'],'create_date' => $value['createdate']);
                }else{
                    $a[] = 0; 
                }
            }
        }else{
            $a[] = 0; 
        }

        echo json_encode($a[0]);
        die;
//        echo '<pre>';
//        print_r($a);
//         print_r($student);
    }

}
