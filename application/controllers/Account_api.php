<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Account
 *
 * @author chuyenpn
 */
require_once APPPATH . 'libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Account_api extends REST_Controller {

    function create_new_account_post() {
        $post = $this->input->post();
        $this->load->model('student_model');
        $this->load->model('student_courses_model');
        $this->load->model('courses_model');
        $course_id = $this->courses_model->find_course_id($post['course_code']);
        $result = array('success' => '1', 'message' => '');

        $input = array();
        $input['select'] = 'id';
        $input['where'] = array('email' => $post['email']);
        $studentExits = $this->student_model->load_all($input);
        if (empty($studentExits)) {
            $studentInsertArr = array(
                'name' => $post['name'],
                'email' => $post['email'],
                'phone' => $post['phone'],
                'password' => md5(md5('lakita')),
                'createdate' => time(),
                'balance' => 0,
                'status' => 1
            );
            $student_id = $this->student_model->insert_return_id($studentInsertArr, 'id');
            $studentCourseInsertArr = array(
                'student_id' => $student_id,
                'courses_id' => $course_id,
                'status' => 1,
                'cod' => '',
                'create_date' => time()
            );
            $this->student_courses_model->insert($studentCourseInsertArr);
            $result['message'] = 'Tạo tài khoản thành công cho khách hàng!';
            $result['password'] = 'new';
        } else {
            $student_id = $studentExits[0]['id'];
            $input2 = array();
            $input2['select'] = 'id';
            $input2['where'] = array('student_id' => $student_id, 'courses_id' => $course_id);
            $studentCourseExist = $this->student_courses_model->load_all($input2);
            if (empty($studentCourseExist)) {
                $studentCourseInsertArr = array(
                    'student_id' => $student_id,
                    'courses_id' => $course_id,
                    'status' => 1,
                    'cod' => '',
                    'create_date' => time()
                );
                $this->student_courses_model->insert($studentCourseInsertArr);
                $result['message'] = 'Tài khoản của khách hàng đã tồn tại (mật khẩu như cũ), đã thêm khóa học cho khách hàng!';
                $result['password'] = 'old';
            } else {
                $result['success'] = '0';
                $result['message'] = 'Tài khoản đã tồn tại, và đã có khóa học này rồi!';
            }
        }
        $this->response($result, REST_Controller::HTTP_OK);
    }

}
