<?php

class Player extends MY_Controller {

    function index() {
        $input = $this->input->post('video_id');
        if (empty($input))
            die;
        $arr_id = explode('#', $input);
        $id = $arr_id[2];
        if ($id == 0) {
            echo 'https://lakita.vn/data/source/video/intro.mp4';
            die;
        }
        if (!isset($arr_id[2]) || empty($arr_id[2]))
            die;
        $primary_video = $this->lib_mod->detail('learn', array('id' => $id));
        if (!count($primary_video))
            die;
        $is_playable = $this->session->tempdata('is_playable');
        if (!isset($is_playable) || $primary_video[0]['id'] != $is_playable)
            die;
        /*         * *****************for member has not flash player ****************************** */
        $student_id = $this->session->userdata('user_id');
        $is_trial_view = $this->session->tempdata('is_trial_view');

        if (in_array($student_id, array('573', '4117', '4514', '5234',

                    '5387', '5391', '5528', '5755', '5770', '6784', '15566')) || 

                (isset($is_trial_view) && $is_trial_view == 'yes')) {
            echo 'https://lakita.vn/' . $primary_video[0]['video_file'];
            die;
        }
        $iPod = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");
        $iPhone = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
        $iPad = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
        $Android = stripos($_SERVER['HTTP_USER_AGENT'], "Android");
        $webOS = stripos($_SERVER['HTTP_USER_AGENT'], "webOS");
        if ($iPod || $iPhone || $iPad) {
            echo "http://lakita.vn:1935/vod/mp4://" . str_replace('data/source/video_source/', '', $primary_video[0]['video_file']) . "/playlist.m3u8";
            die;
        } else if ($Android) {
            echo "rtsp://lakita.vn:1935/vod/mp4:" . str_replace('data/source/video_source/', '', $primary_video[0]['video_file']);
            die;
        } else {
           // if ($this->input->post('hayFlash') == 'yes')
                echo "rtmpt://lakita.vn:1935/vod/mp4:" . str_replace('data/source/video_source/', '', $primary_video[0]['video_file']);
           // else
             //   echo 'https://lakita.vn/' . $primary_video[0]['video_file'];
            //  echo "rtmpt://video.lakita.com.vn:1935/vod/mp4:" . str_replace('data/source/video_source/', '', $primary_video[0]['video_file']);
            die;
        }
    }

    function next_learn() {
        $user_id = $this->session->userdata('user_id');
        if (!isset($user_id)) {
            echo '0';
            die;
        }
        $id = $this->input->post('curr_learn_id');
        $curr_learn = $this->lib_mod->detail('learn', array('id' => $id));
        $next_learn = $this->lib_mod->detail('learn', array('sort' => $curr_learn[0]['sort'] + 1, 'courses_id' => $curr_learn[0]['courses_id']));
        if (count($next_learn)) {
            echo base_url() . $next_learn[0]['slug'] . '-4' . $next_learn[0]['id'] . '.html';
        }
    }

}
