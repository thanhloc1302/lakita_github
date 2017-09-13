<?php

$CI = & get_instance();
$buffer = $CI->output->get_output();
if (base_url() == 'http://chuyenpn.com/lakita/' || base_url() == 'http://localhost/CRM-FTP/') {
    $search = array(
        '/\n/',	
        '/\>[^\S ]+/s', //strip whitespaces after tags, except space
        '/[^\S ]+\</s', //strip whitespaces before tags, except space
        //'/(\s)+/s',    // shorten multiple whitespace sequences
        '/<!--(.*)-->/Uis'
    );
    $replace = array(
        ' ',
        '>',
        '<',
        //'\\1',
        ''
    );
} else {
    $search = array(
        '/\n/',	
        '/\>[^\S ]+/s', //strip whitespaces after tags, except space
        '/[^\S ]+\</s', //strip whitespaces before tags, except space
        '/(\s)+/s', // shorten multiple whitespace sequences
        '/<!--(.*)-->/Uis'
    );
    $replace = array(
        ' ',
        '>',
        '<',
        '\\1',
        ''
    );
}
$buffer = preg_replace($search, $replace, $buffer);

$CI->output->set_output($buffer);
$CI->output->_display();
