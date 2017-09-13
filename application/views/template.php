<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="vi"> 
    <?php $this->load->view('head') ?>
    <body style="overflow-x: hidden;">
        <!--ghi thời gian học viên đang đăng nhâp-->
        <?php $this->load->view('student/watching_video') ?>

        <?php $this->load->view('home/event'); ?>
        <?php $this->load->view('home/try_learn'); ?>
        <?php //$this->load->view('home/event2'); ?>
        <?php
        if (isset($content)) {
            $this->load->view($content);
        }
        $this->load->view('home/footer');
        ?>
         <?php $this->load->view('footer')?>
    </body>
</html>