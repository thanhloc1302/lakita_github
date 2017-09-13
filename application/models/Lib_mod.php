<?php

/**
 * Created by JetBrains PhpStorm.
 * User: ACETIENDUNG
 * Date: 7/18/13
 * Time: 9:09 AM
 * To change this template use File | Settings | File Templates.
 */
class Lib_mod extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function load_all($table, $select, $where, $limit='', $offset='', $order='', $group_by='') {
        if (isset($select) && !empty($select)) {
            $this->db->select("$select");
        }
        if (isset($where) && !empty($where)) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        if (isset($limit) && !empty($limit)) {
            if (isset($offset) && !empty($offset)) {
                $this->db->limit($limit, $offset);
            } else {
                $this->db->limit($limit);
            }
        }
        if (isset($order) && !empty($order)) {
            foreach ($order as $key => $value) {
                $this->db->order_by($key, $value);
            }
        }
        if (isset($group_by) && !empty($group_by)) {
            $this->db->group_by($group_by);
        }
        return $this->db->get("$table")->result_array();
    }

      function load_all_where_not_in($table, $select, $where, $limit, $offset, $order) {
        if (isset($select) && !empty($select)) {
            $this->db->select("$select");
        }
        if (isset($where) && !empty($where)) {
            foreach ($where as $key => $value) {
                $this->db->where_not_in($key, $value);
            }
        }
        if (isset($limit) && !empty($limit)) {
            if (isset($offset) && !empty($offset)) {
                $this->db->limit($limit, $offset);
            } else {
                $this->db->limit($limit);
            }
        }
        if (isset($order) && !empty($order)) {
            foreach ($order as $key => $value) {
                $this->db->order_by($key, $value);
            }
        }
        return $this->db->get("$table")->result_array();
    }
    
     function load_all_wheres($table, $select, $where, $where_in, $where_not_in, $limit, $offset, $order) {
        if (isset($select) && !empty($select)) {
            $this->db->select("$select");
        }
        if (isset($where) && !empty($where)) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }
         if (isset($where_in) && !empty($where_in)) {
            foreach ($where_in as $key => $value) {
                $this->db->where_in($key, $value);
            }
        }
        if (isset($where_not_in) && !empty($where_not_in)) {
            foreach ($where_not_in as $key => $value) {
                $this->db->where_not_in($key, $value);
            }
        }
        if (isset($limit) && !empty($limit)) {
            if (isset($offset) && !empty($offset)) {
                $this->db->limit($limit, $offset);
            } else {
                $this->db->limit($limit);
            }
        }
        if (isset($order) && !empty($order)) {
            foreach ($order as $key => $value) {
                $this->db->order_by($key, $value);
            }
        }
        return $this->db->get("$table")->result_array();
    }

    function load_all_where_in($table, $select, $where, $like, $limit, $offset, $order) {
        if (isset($select) && !empty($select)) {
            $this->db->select("$select");
        }
        if (isset($where) && !empty($where)) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        if (isset($like) && !empty($like)) {
            foreach ($like as $key => $value) {
                $this->db->where_in($key, $value);
            }
        }
        if (isset($limit) && !empty($limit)) {
            if (isset($offset) && !empty($offset)) {
                $this->db->limit($limit, $offset);
            } else {
                $this->db->limit($limit);
            }
        }
        if (isset($order) && !empty($order)) {
            foreach ($order as $key => $value) {
                $this->db->order_by($key, $value);
            }
        }
        return $this->db->get("$table")->result_array();
    }

    function count($table, $where = array()) {
        $this->db->from($table);
        if (isset($where) && !empty($where)) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        return $this->db->count_all_results();
    }

    function insert($table, $data) {
        $this->db->insert($table, $data);
    }
    
    function repair_cmt($table, $where, $data){
        foreach ($where as $key => $value){
        $this->db->where($key, $value);
        }
        $this->db->update($table, $data); 
    }
    
    function del_cmt($id){
        $this->db->delete('comment', array('id'=>$id));
    }
            
    
    function insert_return_id($table, $data, $field) {
        $this->db->insert($table, $data);
        $sql = "SELECT MAX($field) AS id FROM tbl_" . $table;
        $admin = $this->db->query($sql)->result();
        return $admin[0]->id;
    }

    function insert_log($action) {
        $admin_id = $this->session->userdata('admin_id');
        $data = array(
            'log_action' => $action,
            'log_time' => time(),
            'log_ip' => $this->input->ip_address(),
            'admin_id' => $admin_id
        );
        $this->db->insert('log', $data);
    }

    function delete($table, $id) {
        foreach ($id as $key => $value) {
            $this->db->where($key, $value);
        }
        $this->db->delete($table);
    }

    function delete_where($table, $where) {
        if (isset($where) && !empty($where)) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        $this->db->delete($table);
    }

    function detail_my_courses($table, $where = array()) {
        $this->db->select('courses_id');
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get($table)->result_array();
    }

    function detail($table, $where = array()) {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->get($table)->result_array();
    }

    function update($table, $where = array(), $data) {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        $this->db->update($table, $data);
    }

    function load_all_join($table, $select, $where = array(), $join = array(), $group_by, $limit, $offset, $order = array()) {
        if (isset($select) && !empty($select)) {
            $this->db->select("$select");
        }
        if (isset($where) && !empty($where)) {
            if (is_string($where)) {
                $this->db->where($where);
            } else {
                foreach ($where as $key => $value) {
                    if (is_array($value)) {
                        if ($value[1] == 'and') {
                            $this->db->where($key, $value[0]);
                        } elseif ($value[1] == 'or') {
                            $this->db->or_where($key, $value[0]);
                        }
                    } else {
                        $this->db->where($key, $value);
                    }
                }
            }
        }
        if (isset($join) && !empty($join)) {
            foreach ($join as $key => $value) {
                if (is_array($value))
                    $this->db->join($key, $value[0], $value[1]);
                else
                    $this->db->join($key, $value);
            }
        }
        if (isset($group_by) && !empty($group_by)) {
            $this->db->group_by($group_by);
        }

        if (isset($limit) && !empty($limit)) {
            if (isset($offset) && !empty($offset)) {
                $this->db->limit($limit, $offset);
            } else {
                $this->db->limit($limit);
            }
        }
        if (isset($order) && !empty($order)) {
            foreach ($order as $key => $value) {
                $this->db->order_by($key, $value);
            }
        }
        return $this->db->get("$table")->result_array();
    }

    function make_dir($target) {
        $target = str_replace('//', '/', $target);
        if (file_exists($target))
            return @is_dir($target);
        if (@mkdir($target)) {
            $stat = @stat(dirname($target));
            $dir_perms = $stat['mode'] & 0007777;
            @chmod($target, $dir_perms);
            return true;
        } elseif (is_dir(dirname($target))) {
            return false;
        }
        if (($target != '/') && (make_dir(dirname($target))))
            return make_dir($target);
        return false;
    }

    function count_search_join($table, $like = array(), $where = array(), $join = array()) {
        $this->db->from($table);
        if (isset($where) && !empty($where)) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        if (isset($like) && !empty($like)) {
            foreach ($like as $key => $value) {
                $this->db->like($key, $value);
            }
        }
        if (isset($join) && !empty($join)) {
            foreach ($join as $key => $value) {
                $this->db->join($key, $value);
            }
        }
        return $this->db->count_all_results();
    }

    function load_all_search_join($table, $select, $where = array(), $like = array(), $join = array(), $limit, $offset, $order = array()) {
        if (isset($select) && !empty($select)) {
            $this->db->select("$select");
        }
        if (isset($where) && !empty($where)) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        if (isset($like) && !empty($like)) {
            foreach ($like as $key => $value) {
                $this->db->like($key, $value);
            }
        }
        if (isset($limit) && !empty($limit)) {
            if (isset($offset) && !empty($offset)) {
                $this->db->limit($limit, $offset);
            } else {
                $this->db->limit($limit);
            }
        }
        if (isset($order) && !empty($order)) {
            foreach ($order as $key => $value) {
                $this->db->order_by($key, $value);
            }
        }
        if (isset($join) && !empty($join)) {
            foreach ($join as $key => $value) {
                $this->db->join($key, $value);
            }
        }
        return $this->db->get("$table")->result_array();
    }

    public function action_upload($path, $file_name) {
        $config = array(
            'upload_path' => $path,
            'allowed_types' => 'gif|jpg|png|txt|pdf|doc|docx|ppt',
            'max_size' => '4000');
        $this->load->library("upload", $config);
        if (!$this->upload->do_upload($file_name)) {
            $error = array($this->upload->display_errors());
            return 0;
        } else {
            $image_data = $this->upload->data();
            if (isset($image_data)) {
                $config = array(
                    "source_image" => $image_data['full_path'],
                    "new_image" => $path . "/thumbs",
                    "maintain_ratio" => true,
                    "width" => '100',
                    "height" => "100");
                $this->load->library("image_lib", $config);
                $this->image_lib->resize();
            }
            return $image_data;
        }
    }

    public function get_money($value) {
        return str_replace(',', '', $value);
    }

    public function get_money2($value) {
        $value = str_replace(',', '', $value);
        $value = str_replace('.00', '', $value);
        return $value;
    }

    public function convert_number_to_words($number) {
        $hyphen = ' ';
        $conjunction = '  ';
        $separator = ' ';
        $negative = 'negative ';
        $decimal = ' point ';
        $dictionary = array(
            0 => 'Không',
            1 => 'Một',
            2 => 'Hai',
            3 => 'Ba',
            4 => 'Bốn',
            5 => 'Năm',
            6 => 'Sáu',
            7 => 'Bảy',
            8 => 'Tám',
            9 => 'Chín',
            10 => 'Mười',
            11 => 'Mười một',
            12 => 'Mười hai',
            13 => 'Mười ba',
            14 => 'Mười bốn',
            15 => 'Mười năm',
            16 => 'Mười sáu',
            17 => 'Mười bảy',
            18 => 'Mười tám',
            19 => 'Mười chín',
            20 => 'Hai mươi',
            30 => 'Ba mươi',
            40 => 'Bốn mươi',
            50 => 'Năm mươi',
            60 => 'Sáu mươi',
            70 => 'Bảy mươi',
            80 => 'Tám mươi',
            90 => 'Chín mươi',
            100 => 'trăm',
            1000 => 'ngàn',
            1000000 => 'triệu',
            1000000000 => 'tỷ',
            1000000000000 => 'nghìn tỷ',
            1000000000000000 => 'ngàn triệu triệu',
            1000000000000000000 => 'tỷ tỷ'
        );
        if (!is_numeric($number)) {
            return false;
        }

        if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
            // overflow
            trigger_error(
                    'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX, E_USER_WARNING
            );
            return false;
        }
        if ($number < 0) {
            return $negative . convert_number_to_words(abs($number));
        }
        $string = $fraction = null;

        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }

        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;

            case $number < 100:
                $tens = ((int) ($number / 10)) * 10;
                $units = $number % 10;
                $string = $dictionary[$tens];

                if ($units) {
                    $string .= $hyphen . $dictionary[$units];
                }
                break;

            case $number < 1000:
                $hundreds = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder) {
                    $string .= $conjunction . $this->convert_number_to_words($remainder);
                }
                break;

            default:
                $baseUnit = pow(1000, floor(log($number, 1000)));
                $numBaseUnits = (int) ($number / $baseUnit);
                $remainder = $number % $baseUnit;
                $string = $this->convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
                if ($remainder) {
                    $string .= $remainder < 100 ? $conjunction : $separator;
                    $string .= $this->convert_number_to_words($remainder);
                }
                break;
        }

        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal;
            $words = array();
            foreach (str_split((string) $fraction) as $number) {
                $words[] = $dictionary[$number];
            }
            $string .= implode(' ', $words);
        }
        return $string;
    }

    function duration($start, $end = null) {
        $end = is_null($end) ? time() : $end;

        $seconds = $end - $start;

        $days = floor($seconds / 60 / 60 / 24);
        return intval($days);
    }

    function create_code($id) {
        if ($id < 10)
            $id = '0000' . $id;
        elseif ($id > 9 && $id < 100)
            $id = '000' . $id;
        elseif ($id > 99 && $id < 1000)
            $id = '000' . $id;
        elseif ($id > 1000)
            $id = $id;
        return $id;
    }

    public function is_mobile() {
        $user_agents = array('iphone', 'android', 'webos', 'blackberry', 'ipod', 'nokia', 'bb10');
        //$user_agents = array('iphone', 'android', 'blackberry', 'ipod', 'nokia', 'webkit');
        foreach ($user_agents as $user_agent) {
            if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), $user_agent) !== false) {
                return true;
            }
        }
        return false;
    }

    function get_number_item($mobi, $pc) {
        if ($this->is_mobile())
            return $mobi;
        return $pc;
    }

    public function thumyou($code = '') {
        return 'https://i.ytimg.com/vi/' . $code . '/mqdefault.jpg';
    }

    function make_url($string) {
        $search = array(
            '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
            '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
            '#(ì|í|ị|ỉ|ĩ)#',
            '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
            '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
            '#(ỳ|ý|ỵ|ỷ|ỹ)#',
            '#(đ)#',
            '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
            '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
            '#(Ì|Í|Ị|Ỉ|Ĩ)#',
            '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
            '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
            '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
            '#(Đ)#',
            "/[^a-zA-Z0-9\-\_]/",
        );

        $replace = array(
            'a',
            'e',
            'i',
            'o',
            'u',
            'y',
            'd',
            'A',
            'E',
            'I',
            'O',
            'U',
            'Y',
            'D',
            '-',
        );
        $string = preg_replace($search, $replace, $string);
        $string = preg_replace('/(-)+/', '-', $string);
        $string = strtolower($string);
        return $string;
    }

    function get_image($file_name, $module, $size) {
        $path_to_file = 'data/source/' . $module . '/' . $size . '/' . $file_name;

        if (empty($file_name) || empty($file_name) || !is_file(UPLOAD . $path_to_file)) {
            $path_to_file = 'data/no-image.png';
        }

        return base_url() . $path_to_file;
    }

    function get_numb_item($mobi, $pc) {
        if ($this->is_mobile())
            return $mobi;
        return $pc;
    }

    function select_sort_id($table) {
        $this->db->select('*');
        $this->db->where('courses_id', 41);
        $this->db->order_by('sort', 'asc');
        return $this->db->get("$table")->result_array();
    }
    function load_courses($key_word) {
        if ($key_word != 'empty') {
            $key_word = str_replace('-', ' ', $key_word);
            $this->db->where("`search` LIKE '%$key_word%'");
            
        }
        $this->db->where('status', 1);
        return $this->db->get('courses')->result_array();
    }
     function get_other_courses($table, $select, $where, $not_where, $limit, $offset, $order) {
        if (isset($select) && !empty($select)) {
            $this->db->select("$select");
        }
        if (isset($where) && !empty($where)) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }
         if (isset($not_where) && !empty($not_where)) {
              $this->db->where_not_in('id',$not_where);
        }
        if (isset($limit) && !empty($limit)) {
            if (isset($offset) && !empty($offset)) {
                $this->db->limit($limit, $offset);
            } else {
                $this->db->limit($limit);
            }
        }
        if (isset($order) && !empty($order)) {
            foreach ($order as $key => $value) {
                $this->db->order_by($key, $value);
            }
        }
        return $this->db->get("$table")->result_array();
    }
    function load_all_like($table, $select, $like, $limit, $offset, $order) {
        if (isset($select) && !empty($select)) {
            $this->db->select("$select");
        }
        if (isset($like) && !empty($like)) {
            foreach ($like as $key => $value) {
                $this->db->like($key, $value);
            }
        }
        if (isset($limit) && !empty($limit)) {
            if (isset($offset) && !empty($offset)) {
                $this->db->limit($limit, $offset);
            } else {
                $this->db->limit($limit);
            }
        }
        if (isset($order) && !empty($order)) {
            foreach ($order as $key => $value) {
                $this->db->order_by($key, $value);
            }
        }
        return $this->db->get("$table")->result_array();
    }
    
 
    function count_in($table, $where_in, $in, $where){
        $this->db->from($table);
        $this->db->where_in($where_in, $in);
        if (isset($where) && !empty($where)) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        return $this->db->count_all_results();
    }
    
}
