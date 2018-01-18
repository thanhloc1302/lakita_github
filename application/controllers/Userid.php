<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Userid
 *
 * @author phong
 */
class Userid extends CI_Controller {

    public function index() {
        $user_id = $this->session->userdata('user_id');
        if (!isset($user_id)) {
            redirect(base_url());
        } else {
            $tokenStr = '';
            $token = $this->session->userdata('token_video');
            $tokenStr = isset($token) ? $token : 0;
            $token_login = $this->session->userdata('token');
            redirect('http://video.lakita.vn/login?token=' . $tokenStr . '&access_token=' . md5('lakita2017') . '&token_login=' . $token_login);
        }
    }

}
