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

    var $timeout = 10;
    var $domain_rules = array("aol.com", "bigfoot.com", "brain.net.pk", "breathemail.net",
        "compuserve.com", "dialnet.co.uk", "glocksoft.com", "home.com",
        "msn.com", "rocketmail.com", "uu.net", "yahoo.de");

    function _is_valid_email($email = "") {
        return preg_match('/^[.\w-]+@([\w-]+\.)+[a-zA-Z]{2,6}$/', $email);
    }

    function _check_domain_rules($domain = "") {
        return in_array(strtolower($domain), $this->domain_rules);
    }

    function execute($email = "") {
        if (!$this->_is_valid_email($email)) {
            return false;
        }

        $host = substr(strstr($email, '@'), 1);

        if ($this->_check_domain_rules($host)) {
            return false;
        }

        $host .= ".";

        if (getmxrr($host, $mxhosts[0], $mxhosts[1]) == true) {
            array_multisort($mxhosts[1], $mxhosts[0]);
        } else {
            $mxhosts[0] = $host;
            $mxhosts[1] = 10;
        }
        //if (DEBUG_OK) { print_r ($mxhosts); }

        $port = 25;
        $localhost = $_SERVER['HTTP_HOST'];
        $sender = 'info@' . $localhost;

        $result = false;
        $id = 0;
        while (!$result && $id < count($mxhosts[0])) {
            if (function_exists("fsockopen")) {
                //	if (DEBUG_OK) { print_r ($id . " " . $mxhosts[0][$id]); }
                if ($connection = fsockopen($mxhosts[0][$id], $port, $errno, $error, $this->timeout)) {
                    fputs($connection, "HELO $localhost\r\n"); // 250
                    $data = fgets($connection, 1024);
                    $response = substr($data, 0, 1);
                    //if (DEBUG_OK) { print_r ($data); }

                    if ($response == '2') { // 200, 250 etc.
                        fputs($connection, "MAIL FROM:<$sender>\r\n");
                        $data = fgets($connection, 1024);
                        $response = substr($data, 0, 1);
                        //if (DEBUG_OK) { print_r ($data); }

                        if ($response == '2') { // 200, 250 etc.
                            fputs($connection, "RCPT TO:<$email>\r\n");
                            $data = fgets($connection, 1024);
                            $response = substr($data, 0, 1);
                            //if (DEBUG_OK) { print_r ($data); }

                            if ($response == '2') { // 200, 250 etc.
                                fputs($connection, "data\r\n");
                                $data = fgets($connection, 1024);
                                $response = substr($data, 0, 1);
                                //if (DEBUG_OK) { print_r ($data); }

                                if ($response == '2') { // 200, 250 etc.
                                    $result = true;
                                }
                            }
                        }
                    }

                    fputs($connection, "QUIT\r\n");
                    fclose($connection);
                    if ($result) {
                        return true;
                    }
                }
            } else {
                break;
            }
            $id++;
        }
        return false;
    }

    function index() {

        $emails = array("thanhloc1302@gmail.com");
        foreach ($emails as $email) {
            if ($this->execute($email)) {
                print ("The email address $email exists!<br>");
            } else {
                print ("The email address $email <strong>doesn't</strong> exists!<br>");
            }
        }
    }

    function index2() {
        $data['content'] = 'test/index';
        $data['title'] = 'Đăng nhập';
        $this->load->view('template', $data);
        // $this->load->view('test/index');
    }
    
    

}
