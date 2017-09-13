<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Test
 *
 * @author Beto
 */
class Test extends CI_Controller {

    function index() {
        
        echo date('D');
//        $a1 = 'SELECT id,price_root2,price_root FROM `tbl_courses`';
//        $a2 = $this->db->query($a1); 
//        $a3= $a2->result_array();
//        
//        foreach ($a3 as $key => $value){
//            $c = 'UPDATE tbl_courses
//SET tbl_courses.price_root = 245000
//WHERE tbl_courses.id = '.$value['id'];
//         $c1 = $this->db->query($c);    
//        }
//        
//         $b1 = 'SELECT id,price_root2,price_root FROM `tbl_courses`';
//        $b2 = $this->db->query($b1); 
//        $b3= $b2->result_array();
//        var_dump($b3);
    }

}
