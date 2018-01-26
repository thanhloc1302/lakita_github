<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/student.css?ver=<?php echo _VER_CACHED_ ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/style.bootstrap12.lakita.css?ver=<?php echo _VER_CACHED_ ?>" />
<script type="text/javascript" src="https://bitmovin-a.akamaihd.net/bitmovin-player/stable/7.5/bitmovinplayer.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>plugin/ckeditor/ckeditor.js?ver=<?php echo _VER_CACHED_ ?>"></script>
<style>
    #list_cmt{
        font-family: RobotoCondensed-Regular;
        font-size: 14px;
    }
    .category{
        background-color: #ccc;
        padding: 10px;
    }
    .list-group-item {
        padding: 0px;
    }

    .list-group-item:hover {
        background-color: #2c944a;
        color: #FFF !important
    }
    .list-group-item:hover a{
        color: #FFF
    }
    .list-group-item a{
        color: #2c944a;
        font-weight: bold;
        display: block;
        padding: 10px 15px;
    }
    .sidebar-block li.active:hover a {
        color: #fff;
    }
</style>
<div class="header">
    <?php $this->load->view('home/navbar'); ?>
</div>
<div class="clearfix"></div>
<div class="dir" style="padding-left: 5%; font-size: 15px;"> 
    <img alt="học excel, hoc excel, học excel cơ bản, tự học excel" title="học excel, hoc excel, học excel cơ bản, tự học excel" src="<?php echo base_url(); ?>styles/v2.0/img/course-detail/excel.png">
    <a href="https://lakita.vn"> Trang chủ </a> / 
    <a href="<?php echo base_url(); ?>khoa-hoc-cua-toi.html"> Khóa học của tôi </a> / 
    <a href="<?php echo substr($_SERVER['REQUEST_URI'], 1); ?>"> <?php echo $course_name; ?> </a>
</div>
<div class="row" style="margin-top:20px">
    <div class="col-md-6 col-sm-12-sol-xs-12">
        <div class="col-md-11 col-md-offset-1 col-sm-12 col-sx-12">
            <div class="js-video widescreen">
                <input type="hidden" id="lakitaid" value="<?php echo $current_course_id ?>" /><div id="mediaspace"></div>
                <div id="player"></div>
                <script src="<?php echo base_url(); ?>styles/v2.0/js/lktlayer-trial.min.js?ver=<?php echo _VER_CACHED_ ?>"></script>
            </div>
        </div>
        <div class="col-md-11 col-md-offset-1 col-sm-12 col-sx-12" id="dsbaihoc">
            <div class="tab-content" data-step="2" data-intro="Sau khi chọn khóa học sẽ tới trang <b>Tổng quan khóa học.</b> Trong trang này bạn có thể chọn danh sách bài học hoặc Đăng cũng như trả lời các thảo luận">
                <div role="tabpanel" class="tab-pane active" id="dsbaihoc">
                    <?php foreach ($chapter as $key => $value) { ?>
                        <p class="category"><?php echo $value['name']; ?></p>
                        <ul class="sidebar-block list-group list-group-menu list-group-minimal">
                            <?php
                            foreach ($all_learn[$key] as $key2 => $lvalue) {
                                ?>
                                <li id="scroll<?php echo $lvalue['sort']; ?>" class="list-group-item">
                                    <a href="<?php echo base_url() . $lvalue['slug'] . '-4' . $lvalue['id']; ?>.html" 
                                       title="<?php echo $lvalue['name']; ?>"><?php
                                           if (!isset($lvalue['learn_status'])) {
                                               echo "<i class='fa fa-circle-o'></i>";
                                           } else {
                                               switch ($lvalue['learn_status']) {
                                                   case 1:
                                                       echo "<i class='fa fa-check-circle lakita'></i>";
                                                       break;
                                                   default:
                                                       echo "<i class='fa fa-circle-o lakita'></i>";
                                                       break;
                                               }
                                           }
                                           ?>
                                           <?php echo 'Bài ' . $lvalue['sort'] . ': ' . $lvalue['name']; ?>
                                        <span class="badge"><?php echo $lvalue['length']; ?></span>
                                    </a> 
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5 col-sm-12-sol-xs-12">
        <div class="row gr1-row4-2">
            <div class="col-md-12" data-step="1" data-intro="Bạn có thể để lại bình luận về bài giảng ở đây. ">
                <div class="form-group">
                    <label for=""><h3><?php echo $total_cmt; ?> Bình luận</h3></label>
                    <input type="text" class="form-control" id="content_cmt" style="padding: 23px 12px;" placeholder="Nhập nội dung tiêu đề cần thảo luận">
                </div>
                <textarea style="width:100%" name="editor1" class="form-control" rows="5" cols="120" required placeholder="Thảo luận về những thắc mắc, khó khăn khi bạn xem video bài giảng. Không đăng thảo luận không liên quan đến chủ đề học. Cảm ơn bạn!"></textarea>
                <script>
                    CKEDITOR.replace('editor1', {width: '100%', height: '200px'});
                    CKEDITOR.add;
                </script>
                <div class="input-group-btn1 text-center margintop10">
                    <button class="btn btn-primary my-btn" id="save_cmt">Đăng thảo luận</button>
                </div>
            </div>
        </div>
        <hr style="margin: 20px 15px; width: 95%;">
        <div id="list_cmt">
            <?php $this->load->view('course/load_cmt'); ?>
        </div>
        <?php $this->load->view('student/action_comment'); ?>
        <div class="col-md-offset-1">
            <a href="#" class="load_more_cmt" >Tải bình luận cũ hơn</a>
        </div>
    </div>
</div>

