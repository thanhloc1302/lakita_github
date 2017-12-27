<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Download
 *
 * @author phong
 */
class Download extends MY_Controller {

    public function index($id = 0) {
        $post = $this->input->get();
        if (empty($post)) {
            $data = $this->data;
            $data['content'] = 'download/download_page';
            $data['title'] = 'Tải tài liệu';
            $data['id'] = $id;
            $this->load->view('template', $data);
        } else {
            $idPost = $post['id'];
            switch ($idPost) {
                case 1:
                    $this->load->helper('download');
                    force_download(FCPATH . 'public/tai-lieu/file-dau-vao-dau-ra-tham-khao.xlsx', NULL);
                    break;
                case 2:
                    $this->load->helper('download');
                    force_download(FCPATH . 'public/tai-lieu/bo-tai-lieu-ke-toan.rar', NULL);
                    break;
                case 3:
                    $this->load->helper('download');
                    force_download(FCPATH . 'public/tai-lieu/theo-doi-dinh-muc-xang-xe-chi-tiet.xlsx', NULL);
                    break;
            }
            redirect('https://lakita.vn');
        }
    }

}
