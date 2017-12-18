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
class Download extends CI_Controller {

    public function index($id = 0) {
        switch ($id) {
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
    }

}
