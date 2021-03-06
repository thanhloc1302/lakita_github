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
            $data['courses'] = $this->lib_mod->load_all('courses', '', array('status' => 1), 36, '', array('sort' => 'desc'));
            $data['content'] = 'download/download_page';
            $data['title'] = 'Tải tài liệu quà tặng lakita.vn';
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
                case 4:
                    $this->load->helper('download');
                    force_download(FCPATH . 'public/tai-lieu/slide-cach-xac-dinh-chi-phi-hop-ly.rar', NULL);
                    break;
                case 5:
                    $this->load->helper('download');
                    force_download(FCPATH . 'public/tai-lieu/tinh-huong-ke-toan-thuc-te.rar', NULL);
                    break;
                case 6:
                    $this->load->helper('download');
                    force_download(FCPATH . 'public/tai-lieu/bo-tai-lieu-yoga.rar', NULL);
                    break;
                case 7:
                    $this->load->helper('download');
                    force_download(FCPATH . 'public/tai-lieu/phu-cap-bao-hiem-xa-hoi.docx', NULL);
                    break;
                case 8:
                    $this->load->helper('download');
                    force_download(FCPATH . 'public/tai-lieu/cac-doi-tuong-bat-buoc-tham-gia-bhxh.docx', NULL);
                    break;
                case 9:
                    $this->load->helper('download');
                    force_download(FCPATH . 'public/tai-lieu/11-dieu-luu-y-de-giam-chi-phi-bhxh.docx', NULL);
                    break;
            }
            redirect('https://lakita.vn');
        }
    }

}
