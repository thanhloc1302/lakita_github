<?php

class MY_Controller extends CI_Controller {

    var $data = array();
    var $controller = '';
    var $method = '';

    function __construct() {
        parent::__construct();
        //echo time(); die;
        $this->controller = $this->router->fetch_class();
        $this->method = $this->router->fetch_method();

        $this->load->helper('cookie');
        $user_id = $this->session->userdata('user_id');
        $token = $this->session->userdata('token');
        if (!isset($token)) {
            $token_str = md5(uniqid() . microtime() . rand());
            $this->session->set_userdata('token', $token_str);
        }
        if (!isset($user_id)) {
            //  $this->load->model('facebook_model');
            //  $this->data['facebook_login_url'] = $this->facebook_model->loginUrl();
            $this->data['facebook_login_url'] = 'https://www.facebook.com/v2.11/dialog/oauth?client_id=315347858825221&response_type=code&sdk=php-sdk-5.4.4&redirect_uri=https%3A%2F%2Flakita.vn%2Fguest%2Flogin_via_fb2&scope=email%2Cuser_friends';
            //$user_id = $this->session->userdata('user_id');

            $a = get_cookie('tk_lkt_n');
            if ($a != '') {
                $this->load->model('remember_login_model');
                $token = get_cookie('tk_lkt_n');
                $input = array();
                $input['where'] = ['token' => $token];
                $uid = $this->remember_login_model->load_all($input);
                if (!empty($uid)) {
                    $member = $this->student_model->load_all(array('where' => array('id' => $uid[0]['uid'])));
                    if (!empty($member)) {
                        $this->session->set_userdata('user_id', $member[0]['id']);
                        $this->session->set_userdata('user_name', $member[0]['name']);
                        $user_id = $this->session->userdata('user_id');
                    }
                }
            }
        }



        if (isset($user_id)) {
            $input = [];
            $input['where'] = array('id' => $user_id);
            $student = $this->student_model->load_all($input);
            $student = array('student' => $student);
            $this->load->vars($student);
            if ($this->controller != 'event' && $this->method != 'get_full_infor_student' && $student['student'][0]['birthday'] == '' && $this->controller != 'student' && $this->method != 'logout') {
                redirect('event/get_full_infor_student');
            }
            $tokenStr = md5(uniqid() . microtime() . rand());
            $this->session->set_userdata('token_video', $tokenStr);
            $this->load->model('uid_model');
            $input = [];
            $input['select'] = 'uid';
            $input['where'] = array('uid' => $user_id);
            $uid = $this->uid_model->load_all($input);
            if (empty($uid)) {
                $this->uid_model->insert(['token' => $tokenStr, 'uid' => $user_id, 'time' => time()]);
            } else {
                $where = array('uid' => $user_id);
                $data = array('token' => $tokenStr);
                $this->uid_model->update($where, $data);
            }

            // BEGIN popup HuyNV

            if ($student['student'][0]['createdate'] + 259200 <= time()) {
                $notify_cookie = get_cookie('notify_day_quantity');
                if (!isset($notify_cookie)) {
                    $this->data['notify'] = true;
                    $this->set_date_notify();
                }
            }
            // END HuyNV

            $last_page = $this->session->userdata('last_page');
            if (isset($last_page)) {
                $this->session->unset_userdata('last_page');
                redirect($last_page);
            }
//            $this->_check_exist_login($user_id);
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
        $input1 = array();
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
        // return true;
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

    // BEGIN function set notify_day_quantity 15 days to cookie by HuyNV
    private function set_date_notify() {
        $this->load->helper('cookie');
        $name = "notify_day_quantity";
        $value = '15';
        $expire = 15 * 24 * 60 * 60;
        $domain = "";

        set_cookie($name, $value, $expire, $domain);
    }

    // END function
}
