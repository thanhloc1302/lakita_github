<?php

class About extends MY_Controller {
  
    public function __construct() {
        parent::__construct();
    }


    function tuyendung($id) {
        $data = $this->data;
        $user_id = $this->session->userdata('user_id');
        if (isset($user_id)) {
            $data['student'] = $this->lib_mod->load_all('student', '', array('id' => $user_id), '', '', '');
        }
        $data['tuyendung'] = $id;
//        $data['banner_main'] = $this->lib_mod->load_all('banner', '', array('status' => 1, 'type_id' => 0), 1, '', array('sort' => 'desc'));
//        $data['banner_1'] = $this->lib_mod->load_all('banner', '', array('status' => 1, 'type_id' => 1), 1, '', array('sort' => 'desc'));
//        $data['banner_2'] = $this->lib_mod->load_all('banner', '', array('status' => 1, 'type_id' => 2), 2, '', array('sort' => 'desc'));
//        $data['client'] = $this->lib_mod->load_all('client', '', array('status' => 1), '', '', array('sort' => 'desc'));
//        $data['rate'] = $this->lib_mod->load_all('rate', '', array('status' => 1), '3', '', array('id' => 'RAND()'));
        $data['title'] = "Thông tin tuyển dụng - lakita.vn";
        $data['content'] = 'about/tuyendung';
        $this->load->view('template', $data);
    }

}
