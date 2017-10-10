<?php

class Excel extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $data = $this->data;
        $data['title'] = 'Dịch vụ Excel';
        $data['content'] = 'excel/index';
        
        $this->load->view('template', $data);
    }
    
    
}

