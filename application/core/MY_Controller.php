<?php

class MY_Controller extends CI_Controller {

    var $data = array();

    function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
        $user_id = $this->session->userdata('user_id');
        $token = $this->session->userdata('token');
        if (!isset($token)) {
            $token_str = md5(uniqid() . microtime() . rand());
            $this->session->set_userdata('token', $token_str);
        }
        if (!isset($user_id)) {
            $this->load->model('facebook_model');
            $this->data['facebook_login_url'] = $this->facebook_model->loginUrl();
        }
        if (isset($user_id)) {
            $this->_check_exist_login($user_id);
            //$table, $select, $where, $limit, $offset, $order, $group_by=''
            $student_ids1 = $this->lib_mod->load_all('student_courses', 'student_id', array('courses_id' => 37, 'trial_learn' => 0));
            $flag1 = false;
            foreach ($student_ids1 as $value) {
                if ($value['student_id'] == $user_id) {
                    $flag1 = true;
                }
            }
            if ($flag1) {
                $this->data['have_news2'] = '2';
            }

            //$table, $select, $where, $where_in, $where_not_in, $limit, $offset, $order
            $student_ids2 = $this->lib_mod->load_all_wheres('student_courses', 'student_id', array('trial_learn' => 0), array('courses_id' => array(37, 10, 41, 16)), '', '', '', '');
            // print_r($student_ids2);

            $flag2 = false;
            foreach ($student_ids2 as $value) {
                if ($value['student_id'] == $user_id) {
                    $flag2 = true;
                }
            }
            if ($flag2) {
                $this->data['have_news3'] = '3';
            }


            //locnt 
            set_cookie('first_time_login', time(), 92536000);
            if (!is_null(get_cookie('first_time_login')) && !is_null(get_cookie('date_read_noti'))) {
                $last_read_noti = get_cookie('date_read_noti');
                $this->data['have_news'] = $this->lib_mod->count_in('notification', 'student_id', array(0, $user_id), array('time >' => $last_read_noti, 'time <=' => time()));
            } else {
                $this->load->helper('cookie');
                $cookie = array(
                    'name' => 'date_read_noti',
                    'value' => time(),
                    'expire' => 92536000,
                    'secure' => TRUE
                );
                set_cookie($cookie);
                $this->data['have_news'] = '1';
            }

            if ($this->data['have_news'] != 0) {
                $this->data['noti'] = $this->lib_mod->load_all_wheres('notification', '', '', array('student_id' => array(0, $user_id)), '', $this->data['have_news'], '', array('time' => 'DESC'));

                $list_creator = array();
                foreach ($this->data['noti'] as $key1 => $value1) {
                    if (!in_array($value1['creator'], $list_creator)) {
                        array_push($list_creator, $value1['creator']);
                    }
                }
                if (empty($list_creator)) {
                    $list_creator = '2626';
                }
                $this->data['creator_infor'] = $this->lib_mod->load_all_wheres('student', '', '', array('id' => $list_creator), '', '', '', '');
                $this->data['creator_infor1'] = $this->lib_mod->load_all_wheres('student', '', '', array('id' => $list_creator), '', '', '', '');
            }
            //hết locnt
        }
        $this->data['setting'] = $this->lib_mod->detail('setting', array('id' => 1));
        $this->data['category_news'] = $this->lib_mod->load_all('category_3s', '', array('status' => 1, 'type_id' => 4, 'parent' => 0), '', '', array('sort' => 'desc'));
        $this->data['courses_right'] = $this->lib_mod->load_all('courses', '', array('status' => 1, 'hot' => 1), 8, '', array('sort' => 'desc'));
        $this->data['courses_top'] = $this->lib_mod->load_all('courses', '', array('status' => 1), '', '', array('sort' => 'desc'));

        /*
         * Campaign giờ vàng giá sốc
         */

        if (filter_has_var(INPUT_GET, 'link')) {
            set_cookie('link_id', filter_input(INPUT_GET, 'link'), 3600 * 2);
            $this->save_c2();
        }

        $this->_get_course_sale();
        $this->_get_time_sale();
    }

    private function _get_course_sale() {
        $courses_sale = array();
        $this->load->model('courses_model');
        $input = array();
        $input['select'] = 'course_code, name, price_sale';
        $input['where'] = array('status' => 1);
        $input['order'] = array('price_sale' => 'DECR', 'time_start_sale' => 'DECR');
        $courses = $this->courses_model->load_all($input);
        foreach ($courses as $key => $value) {
            $courses_sale[$key]['course_code'] = $value['course_code'];
            $courses_sale[$key]['name'] = $value['name'] . ' - ' . substr($value['price_sale'], 0, 3) . 'K';
            $courses_sale[$key]['price_sale'] = str_replace('.', '', $value['price_sale']);
        }
        $this->load->vars(array('courses_sale' => $courses_sale));
        // print_arr($courses_sale);
    }

    private function _get_time_sale() {
        $this->load->model('courses_model');
        $input = array();
        $input1['select_max'] = 'time_start_sale';
        $time_start_sale = $this->courses_model->load_all($input1);

        $input2['select_max'] = 'time_end_sale';
        $time_end_sale = $this->courses_model->load_all($input2);
        $time_sale = array('time_start_sale' => $time_start_sale[0]['time_start_sale'],
            'time_end_sale' => $time_end_sale[0]['time_end_sale']);
        $this->load->vars($time_sale);
        //  print_arr($time_sale);
//        print_arr($this->load->vars(array('time_sale' => array($time_start_sale[0],$time_end_sale[0]))));
    }

    private function save_c2() {
        require_once APPPATH . "../public/lakita/Rest_client/Rest_Client.php";
        $get = $this->input->get();
        if (isset($get['link'])) {
            $post = array();
            $post['link_id'] = $get['link'];
            $post['ip'] = $this->input->ip_address();
            $config = array(
                'server' => 'https://crm2.lakita.vn/',
                'api_key' => 'RrF3rcmYdWQbviO5tuki3fdgfgr4',
                'api_name' => 'lakita-key'
            );
            $restClient = new Rest_Client($config);
            $uri = "contact_api/add_c2";
            $restClient->post($uri, $post);
        }
    }

    protected function _getUserIP() {
        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;
    }

    protected function _check_exist_login($id, $load_from_ajax = true) {
        // kiểm tra tài khoản có đăng nhập từ máy tính khác không
        $check_watching = $this->lib_mod->load_all('watching_time', 'time, token', array('student_id' => $id), '', '', '');
        //   echo  (!empty($check_watching) && abs($check_watching[0]['time'] - time()) < 60);die;
        if (!empty($check_watching) && abs($check_watching[0]['time'] - time()) < 60) {
            $token = $this->session->userdata('token');
            if ($token != $check_watching[0]['token']) {
                if (!$load_from_ajax) {
                    echo '<script> var notify = "";
                            notify = new Notification(
                            "Có lỗi xảy ra!", 
                            {
                                body: "Tài khoản của bạn đang được đăng nhập ở nơi khác. Hãy đăng xuất và đăng nhập lại!",
                                icon: "https://lakita.vn/styles/v2.0/img/logo2.png", 
                                image: "https://openclipart.org/image/2400px/svg_to_png/200369/primary-logout.png"
                            }
                    );
                     setTimeout(function(){
                            alert("Tài khoản của bạn đã được đăng nhập từ máy tính khác !! Hãy đăng xuất và đăng nhập lại. "); 
                        },100);
                   </script>';
                    die;
                } else {
                    echo 'Tài khoản của bạn đã được đăng nhập từ máy tính khác !! Hãy đăng xuất và đăng nhập lại.';
                    die;
                }
            }
        }
        //  hết kiểm tra
    }

}
