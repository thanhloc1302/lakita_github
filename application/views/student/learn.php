<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/style.bootstrap12.lakita.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>plugin/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>styles/v2.0/js/swfobject.js" ></script>
<style>
    .event2011{
        display: none;
    }
    #try_learn{
        display: none;
    }
</style>
<?php if (!$this->agent->is_mobile()) { ?>

    <header>
        <div class="row header-row-1">
            <div class="col-md-5">
                <a href="khoa-hoc-cua-toi.html" class="back"><i class="fa fa-reply" aria-hidden="true"></i> Trở lại  </a>
            </div>
            <div class="col-md-6">

            </div>
            <div class="col-md-1" id="ring">
                <i class="fa fa-bell" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row header-row-2">
            <h3> <?php echo $course_name; ?></h3>
            <div class="row">
                <div class="col-md-3">
                    <p id="head-text1">Tổng số <?php echo $total_video; ?> bài học</p>
                    <p id="head-text1">Bạn đã hoàn thành:</p>
                </div>
                <div class="col-md-6">
                    <p id="head-text2"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $count_all_learn; ?>/ <?php echo $total_video; ?> </p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar"
                             aria-valuenow="<?php echo 100 * $count_all_learn / $total_video; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo 100 * $count_all_learn / $total_video; ?>%">
                            <?php echo round(100 * $count_all_learn / $total_video); ?>%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php } else { ?>
    <?php $this->load->view('mobile/navbar'); ?>
<?php } ?>

<!---->

<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div  style="background-color: #2c944a; color: #FFF;text-align: center; font-size: 30px;" class="modal-header">
                <p>Chúng tôi nhận thấy trình duyệt của bạn chưa<strong> Bật Flash</strong> có thể dẫn đến <b style="color: #ffff66">KHÔNG XEM ĐƯỢC VIDEO</b>. Vì vậy mời bạn làm theo hướng dẫn dưới đây để<strong> Bật Flash</strong> nhé!</p>
            </div>
            <div class="modal-body" id="noti">
                <p style="font-size: 20px; color: #5d92ff"><strong>I. Cách bật Flash trên trình duyệt chorme:</strong></p>
                <p><strong>1. Cách 1: Bật Flash trên thanh địa chỉ của trình duyệt: </strong></p>
                <p>Kích chuột trái vào chữ (i) (hoặc <b>Bảo mật</b> hoặc <b>Secure</b>) trên thanh địa chỉ</p>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img class="img img-responsive" src="https://lakita.vn/styles/images/flash-tutor-1.png">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img class="img img-responsive" src="https://lakita.vn/styles/images/flash-tutor-8.png">
                </div>
                <div class="clearfix"></div>
                <p></p><br>
                <p>Ta thấy ô màu đỏ Flash, tại chọn mũi tên Cho phép và chọn : <b>"Luôn cho phép trên trang web này"</b> hoặc<b>"Always allow on this site".</b> Và sau đó tải lại trình duyệt </p>

                <img style="margin-left: auto; margin-right: auto; display: block" class="img img-reponsive" src="https://lakita.vn/styles/images/flash-tutor-2.png">
                <p></p>
                <p><strong>2. Cách 2: Truy cập địa chỉ: <span style="color: red">chrome://settings/content</span> </strong></p>
                <p>Ta copy địa chỉ vào thanh địa chỉ của trình duyệt.</p>

                <img class="img img-reponsive" src="https://lakita.vn/styles/images/flash-tutor-3.png">
                <p></p>
                <p>Tại giao diện của web ta nhìn thấy ô đỏ; kích vào mũi tên của ô đỏ, ta được giao diện như hình sau. </p>
                <img class="img img-reponsive" src="https://lakita.vn/styles/images/flash-tutor-4.png">
                <p></p>
                <p>Tại mục cho phép, kích vào chữ <strong>“Thêm”</strong>, rồi điền tên trang web như sau: </p>
                <img class="img img-reponsive" src="https://lakita.vn/styles/images/flash-tutor-5.png">
                <p></p>
                <p>Tuy nhiên cách này không phải lúc nào cũng bật đối với mọi trình duyệt, nên mình khuyên lên sử dụng cách 1. </p>
                <p>Vậy là hoàn thành. Chúc bạn thành công. </p>

                <p style="font-size: 20px; color: #5d92ff">II. Bật Flash trên trình duyệt Cốc cốc: </p>
                <p><strong>1. Bật Flash trên thanh địa chỉ: </strong></p>
                <img class="img img-reponsive" src="https://lakita.vn/styles/images/flash-tutor-6.png">
                <p></p>
                <p>Tại thanh địa chỉ, kích chuột vào chữ (i)(hoặc <b>Bảo mật</b> hoặc <b>Secure</b>) , tại ô flash, kích vào ô mặc định, và làm tương tự như Chorme. </p>
                <p><strong>2. Cài đặt trình duyệt: </strong></p>
                <p>Bạn copy đường link: <strong><span style="color:red">coccoc://settings/content</span></strong> vào thanh địa chỉ, ta được hình sau: </p>
                <img class="img img-reponsive" src="https://lakita.vn/styles/images/flash-tutor-7.png">
                <p></p>
                <p>Ta chọn vào ô:” Phát hiện và chạy nội dung Flash quan trọng” </p>
                <p>Vậy là hoàn thành. </p>
                <p>Theo mình lên áp dụng cách 1, dễ sử dụng, còn cách 2 do Flash không tự bật cho tất cả các web. </p>
                <p>Chúc bạn thành công!!! </p>
                <p>Trân trọng,</p>
                <p><b>Lakita Team.</b></p>
            </div> 
        </div>
    </div>
</div>


<!---->

<div class="row" <?php if ($this->agent->is_mobile()) echo 'style="margin-top: -20px;"'; ?>>
    <div class="col-md-8 col-xs-12 col-sm-12" style="font-size: 16px">
        <div class="row gr1-row-1">
            <div class="st-pusher" id="content">
                <div class="st-content">
                    <div class="st-content-inner padding-none">
                        <div class="container-fluid">
                            <div class="js-video widescreen">
                                <?php
                                if (!empty($curr_learn[0]['video_file'])) {
                                    $value = $curr_learn[0]['id'];
//Detect special conditions devices
                                    $iPod = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");
                                    $iPhone = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
                                    $iPad = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
                                    $Android = stripos($_SERVER['HTTP_USER_AGENT'], "Android");
                                    // $webOS = stripos($_SERVER['HTTP_USER_AGENT'], "webOS");
//do something with this information
                                    if ($iPod || $iPhone || $iPad) {
                                        ?>
                                        <input type="hidden" id="lakitaid" value="<?php echo md5(time()) . '$&((_GNSDADFHGD@!$^&%#' . time() . ')*&^%$@' . time() . '#' . $value . '#' . time() . '_+1357$*^())!%*$$&' . md5('lakita.vn') . '+135+1357$*^())!%*$$7$*^())!%*$$+1+1357$*^())!%*$$357$*^())!%*$$'; ?>" /><div id="mediaspace"></div>
                                        <?php
                                    } else if ($Android) {
                                        ?>
                                        <div class="text-center">
                                            <a href="
                                            <?php
                                            $primary_video = $this->lib_mod->detail('learn', array('id' => $value), '');
                                            echo "rtsp://lakita.vn:1935/vod/mp4://" . str_replace('data/source/video_source/', '', $primary_video[0]['video_file']);
                                            ?>
                                               ">
                                                <img src="<?php echo base_url(); ?>styles/v2.0/img/mobi/player.png" style="max-width: 100%"/>
                                            </a>
                                        </div>
                                        <?php
                                    } else {
                                        ?>
                                        <input type="hidden" id="lakitaid" value="<?php echo md5(time()) . '$&((_GNSDADFHGD@!$^&%#' . time() . ')*&^%$@' . time() . '#' . $value . '#' . time() . '_+1357$*^())!%*$$&' . md5('lakita.vn') . '+135+1357$*^())!%*$$7$*^())!%*$$+1+1357$*^())!%*$$357$*^())!%*$$'; ?>" /><div id="mediaspace"></div>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <input type="hidden" id="lakitaid" value="<?php echo md5(time()) . '$&((_GNSDADFHGD@!$^&%#' . time() . ')*&^%$@' . time() . '#' . 612 . '#' . time() . '_+1357$*^())!%*$$&' . md5('lakita.vn') . '+135+1357$*^())!%*$$7$*^())!%*$$+1+1357$*^())!%*$$357$*^())!%*$$'; ?>" /><div id="mediaspace"></div>
                                <?php } ?>
                                <script type="text/javascript" src="<?php echo base_url(); ?>plugin/jwplayer/jwplayer.js"></script>
                                <script type="text/javascript" src="<?php echo base_url(); ?>plugin/jwplayer/jwplayer.html5.js"></script>
                                <script type="text/javascript">jwplayer.key = "N8zhkmYvvRwOhz4aTGkySoEri4x+9pQwR7GHIQ==";</script>
                                <input type="hidden" id="auto_next" value="1" />
                                <input type="hidden" id="curr_learn_id" value="<?php echo $curr_id; ?>" />
                                <?php $this->session->set_tempdata('is_playable', $curr_id, 3600); ?>
                            </div>
                            <div style="color :red; text-align: center; font-weight: bold">
                                <p>Nếu bạn gặp sự cố, vui lòng cài đặt <a href="https://www.youtube.com/watch?v=HjZU99M7398" target="blank">Teamview</a> và liên hệ tới số điện thoại 1900 6361 95 để được hỗ trợ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (!$this->agent->is_mobile()) { ?>
            <div class="row gr1-row-2">
                <div class="col-md-5 gr1-col-1">
                    <p><i class="fa fa-toggle-on" aria-hidden="true"></i><strong> Giảng viên</strong></p>
                </div>
                <div class="col-md-3 gr1-col-2">
                    <img src="<?php echo base_url(); ?>styles/v2.0/dungtt/img/bootstrap/12/gr2-img2.png"> &nbsp;&nbsp;
                    <a class="love_link">
                        <?php if (!count($love_course)) { ?>
                            <i class="fa fa-heart-o red" aria-hidden="true"></i>  Tôi thích khóa học này
                        <?php } else { ?>
                            <i class="fa fa-heart red" aria-hidden="true"></i>  Tôi thích khóa học này
                        <?php } ?>
                    </a> &nbsp;&nbsp;
                    <img src="<?php echo base_url(); ?>styles/v2.0/dungtt/img/bootstrap/12/gr2-img2.png">
                </div>
                <div class="col-md-2 gr1-col-3">
                    <a ><strong>Đánh giá &nbsp;&nbsp;</strong></a>
                    <i class="fa fa-star-o vote_icon_click" aria-hidden="true" style="color: red;"></i>
                    <i class="fa fa-star-o vote_icon_click" aria-hidden="true" style="color: red;"></i>
                    <i class="fa fa-star-o vote_icon_click" aria-hidden="true" style="color: red;"></i>
                    <i class="fa fa-star-o vote_icon_click" aria-hidden="true" style="color: red;"></i>
                    <i class="fa fa-star-o vote_icon_click" aria-hidden="true" style="color: red;"></i>
                    <a href="#click_to_vote" data-toggle="modal" class="hidden vote_link"> 
                    </a> 

                </div>
                <div class="col-md-2 gr1-col-4">
                    <img src="<?php echo base_url(); ?>styles/v2.0/dungtt/img/bootstrap/12/gr2-img3.png">
                    <a> Nhấn vào đây để đánh giá  </a>
                </div>
            </div>
            <hr style="margin-top: 0px; width: 93%;">
            <div class="row gr1-row-3">
                <div class="col-md-3">
                    <img src="<?php echo 'https://lakita.vn/' . $speaker[0]['image']; ?>" class="avatar">
                    <strong> <?php echo $speaker[0]['name']; ?> </strong>
                </div>
                <div class="col-md-3">
                    <p><i class="fa fa-envelope" aria-hidden="true" style="color: green;"></i><i style="font-style: normal;"> <?php echo $speaker[0]['name']; ?></i></p>
                </div>
                <div class="col-md-2">
                    <p><i class="fa fa-facebook" aria-hidden="true" style="color: green;"></i><i style="font-style: normal;"> <?php echo $speaker[0]['name']; ?></i></p>
                </div>
                <div class="col-md-4">
                    <p><i class="fa fa-twitter" aria-hidden="true" style="color: green;"></i><i style="font-style: normal;"> <?php echo $speaker[0]['name']; ?></i></p>
                </div>
            </div>
            <hr style="margin-top: 20px; width: 93%;">
            <div id="browser_name" style="display:none">
                <p style="margin-left: 25px">Bạn nên đăng nhập bằng trình duyệt Chrome hoặc Cốc Cốc để có trải nghiệm tốt nhất</p>
                <hr style="margin-top: 20px; width: 93%;">
            </div>
            <div class="row gr1-row-4">
                <div class="row gr1-row4-1">
                    <p><i class="fa fa-comments" aria-hidden="true"></i></i><b> Thảo luận</b></p>
                </div>
                <div class="row gr1-row4-2">
                    <div class="col-md-2">
                        <img src="<?php
                        if (!empty($student[0]['id_fb']))
                            echo 'https://graph.facebook.com/' . $student[0]['id_fb'] . '/picture?type=large';
                        else {
                            if (!empty($student[0]['thumbnail']))
                                echo 'https://lakita.vn/' . $student[0]['thumbnail'];
                            else
                                echo base_url() . 'styles/images/people/110/user.png';
                        }
                        ?>" alt="" class="img-circle avatar" />
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Tiêu đề</label>
                            <input type="text" class="form-control" id="content_cmt" style="padding: 23px 12px;" placeholder="Nhập nội dung tiêu đề cần thảo luận">
                        </div>
                        <textarea style="width:100%" name="editor1" class="form-control" rows="5" cols="120" required placeholder="Thảo luận về những thắc mắc, khó khăn khi bạn xem video bài giảng. Không đăng thảo luận không liên quan đến chủ đề học. Cảm ơn bạn!"></textarea>
                        <script>
                            CKEDITOR.replace('editor1', {width: '567px', height: '200px'});
                            CKEDITOR.add;
                        </script>
                        <div class="input-group-btn1 text-center margintop10">
                            <button class="btn btn-primary my-btn" id="save_cmt">Đăng thảo luận</button>

                        </div>
                    </div>
                </div>
            </div>
            <hr style="margin: 20px 15px; width: 95%;">

            <!--============================thảo luận ================================================-->
            <div id="list_cmt">
                <?php $this->load->view('course/load_cmt'); ?>
            </div>
            <!--============================thảo luận (hết) ==========================================-->
        <?php } ?>
    </div>
    <?php if (!$this->agent->is_mobile()) { ?>
        <div class="col-md-4">
            <div role="tabpanel" class="panel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#dsbaihoc" aria-controls="home" role="tab" data-toggle="tab">
                            <i class="fa fa-list" aria-hidden="true"></i></br>
                            DS bài học
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#taitailieu" aria-controls="tab" role="tab" data-toggle="tab">
                            <i class="fa fa-download" aria-hidden="true"></i></br>
                            Tải tài liệu
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#ghichu" aria-controls="tab" role="tab" data-toggle="tab">
                            <i class="fa fa-sticky-note-o" aria-hidden="true"></i> <br/>
                            Ghi chú
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#nopbai" aria-controls="tab" role="tab" data-toggle="tab">
                            <i class="fa fa-level-up" aria-hidden="true"></i></br>
                            Nộp bài
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="dsbaihoc">
                        <?php foreach ($chapter as $key => $value) { ?>
                            <p class="category"><?php echo $value['name']; ?></p>
                            <?php if ($trial_learn == 1 && $value['id'] != 17) { ?>
                                <a class="btn btn-success" href="<?php echo base_url() . $curr_course[0]['slug'] . '-3' . $curr_course[0]['id']; ?>.html"> Nâng cấp </a>
                            <?php } ?>
                            <ul class="sidebar-block list-group list-group-menu list-group-minimal">
                                <?php
                                foreach ($all_learn[$key] as $key2 => $lvalue) {
                                    ?>
                                    <li id = "scroll<?php echo $lvalue['sort']; ?>" class="list-group-item <?php if ($curr_id == $lvalue['id']) echo 'active'; ?>">
                                        <a 
                                        <?php if ($trial_learn == 1 && !in_array($lvalue['id'], [269, 270, 271, 272, 273, 274, 275])) { ?>
                                                style="text-decoration: none; color: #989898;"
                                                <?php
                                            } else {
                                                ?>
                                                href="<?php echo base_url() . $lvalue['slug'] . '-4' . $lvalue['id']; ?>.html" 
                                            <?php } ?>
                                            title="<?php echo $lvalue['name']; ?>"><?php
                                                if (!isset($lvalue['learn_status']))
                                                    echo "<i class='fa fa-circle-o'></i>";
                                                else {
                                                    switch ($lvalue['learn_status']) {
                                                        case 0:
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
                                        <?php if ($trial_learn == 1 && !in_array($lvalue['id'], [269, 270, 271, 272, 273, 274, 275])) { ?>
                                            <i class="fa fa-lock" aria-hidden="true" style="font-size: 20px; color: #989898;"></i>
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="taitailieu">
                        <?php
                        if ($trial_learn == 1)
                            echo '<p class="margintop10"> Bạn cần đăng ký khóa học để tải tài liệu! </p>';
                        else {
                            if (isset($curr_learn[0])) {
                                $attach_file = array_filter(explode('@', $curr_learn[0]['attach_file']));
                                if (count($attach_file)) {
                                    $attach_desc = array_filter(explode('@', $curr_learn[0]['attach_desc']));
                                    ?>
                                    <ul class="sidebar-block list-group list-group-menu list-group-minimal">
                                        <?php
                                        foreach ($attach_file as $fkey => $file) {
                                            $filename = explode('/', $file);
                                            $filename = end($filename);
                                            ?>
                                            <li class="list-group-item">
                                                <a href="<?php echo base_url() . 'tai-ve.html/' . str_replace("=", "", base64_encode($file)); ?>">
                                                    <i class="fa fa-file-text"></i>&nbsp;&nbsp;
                                                    <?php
                                                    if (!empty($attach_desc[$fkey]))
                                                        echo $attach_desc[$fkey];
                                                    else
                                                        echo $filename;
                                                    ?>
                                                    <span class="badge"><i class="fa fa-download"></i></span>
                                                </a>
                                                <?php $this->session->set_tempdata('is_downloadable', $curr_id, 3600); ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php }else { ?>
                                    <p class="category">Không có file đính kèm</p>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="ghichu">
                        <?php
                        if ($trial_learn == 1)
                            echo '<p class="margintop10"> Bạn cần đăng ký khóa học để viết ghi chú! </p>';
                        else {
                            ?>
                            <div class="form-group" style="height:200px !important; margin-top: 10px;">
                                <textarea id="learn_note" rows="18" style="height:200px !important;color: #858585;" class="form-control" placeholder="Ghi chú của bạn"><?php if (isset($learn_note[0])) echo preg_replace("/<br[^>]*>\s*\r*\n*/is", "\n", $learn_note[0]['note']); ?></textarea>

                            </div>
                            <br>
                            <button class="btn btn-primary pull-right" type="button" id="save_note">Lưu ghi chú <i class="fa fa-plus"></i></button>
                        <?php } ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="nopbai">
                        <?php
                        if ($trial_learn == 1)
                            echo '<p class="margintop10"> Bạn cần đăng ký khóa học để nộp bài tập! </p>';
                        else {
                            ?>


                            <!--modal de up file-->
                            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#upload_file">
                                Tải bài tập bạn đã làm
                            </button>

                            <div class="modal fade" id="upload_file" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Tải bài tập</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>student2/studying/action_upload" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                                                <div class="gr5-row-2 margintop22" role="tabpanel">
                                                    <div class="gr5-form">
                                                        <div class="row gr5-row2-form2">
                                                            <div class="col-md-3 gr5-name-form">
                                                                <p><strong>Khóa học: </strong></p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <label>Chọn file: </label>
                                                                <input type="file" name="excel" size="25">
                                                            </div>
                                                        </div>
                                                        <div class="row gr5-row2-form2 hidden">
                                                            <div class="col-md-3 gr5-name-form">
                                                                <p><strong>Khóa học: </strong></p>
                                                            </div>
                                                            <div class="col-md-9">

                                                                <select class="form-control" name="course_id_input">


                                                                    <option value="<?php echo $course_id; ?>"> <?php echo $course_name ?></option>

                                                                </select>


                                                            </div>
                                                        </div>
                                                        <div class="row gr5-row2-form2 hidden">
                                                            <div class="col-md-3 gr5-name-form">
                                                                <p><strong>Bài học: </strong></p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <select  class="form-control" name="learn_id_input">
                                                                    <option value="<?php echo $curr_id; ?>">
                                                                        <?php echo $curr_learn[0]["name"]; ?>

                                                                    </option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row gr5-row2-form2">
                                                            <div class="col-md-3 gr5-name-form">
                                                                <p><strong>Ghi chú: </strong></p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <textarea class="form-control" rows="3" name="note"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group4 text-center marginbottom15">
                                                            <button id="nap" class="margintop20 type_submit" type="submit" name="ok" value="Upload">  TẢI BÀI TẬP  <i class="fa fa-sign-out" aria-hidden="true"></i>  </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php if ($this->agent->is_mobile()) { ?>
    <div class="row">
        <div class="col-xs-12">
            <div role="tabpanel" class="panel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#dsbaihoc" aria-controls="home" role="tab" data-toggle="tab">
                            <i class="fa fa-list" aria-hidden="true"></i></br>
                            DS bài học
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#taitailieu" aria-controls="tab" role="tab" data-toggle="tab">
                            <i class="fa fa-download" aria-hidden="true"></i></br>
                            Tải tài liệu
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#ghichu" aria-controls="tab" role="tab" data-toggle="tab">
                            <i class="fa fa-sticky-note-o" aria-hidden="true"></i> <br/>
                            Ghi chú
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#nopbai" aria-controls="tab" role="tab" data-toggle="tab">
                            <i class="fa fa-level-up" aria-hidden="true"></i></br>
                            Nộp bài
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="dsbaihoc">
                        <?php foreach ($chapter as $key => $value) { ?>
                            <p class="category"><?php echo $value['name']; ?></p>
                            <ul class="sidebar-block list-group list-group-menu list-group-minimal">
                                <?php
                                foreach ($all_learn[$key] as $key2 => $lvalue) {
                                    ?>
                                    <li id = "scroll<?php echo $lvalue['sort']; ?>" class="list-group-item <?php if ($curr_id == $lvalue['id']) echo 'active'; ?>">
                                        <a 
                                        <?php if ($trial_learn == 1 && !in_array($lvalue['id'], [269, 270, 271, 272, 273, 274, 275])) { ?>
                                                style="text-decoration: none;"
                                                <?php
                                            } else {
                                                ?>
                                                href="<?php echo base_url() . $lvalue['slug'] . '-4' . $lvalue['id']; ?>.html" 
                                            <?php } ?>
                                            title="<?php echo $lvalue['name']; ?>"><?php
                                                if (!isset($lvalue['learn_status']))
                                                    echo "<i class='fa fa-circle-o'></i>";
                                                else {
                                                    switch ($lvalue['learn_status']) {
                                                        case 0:
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
                                        </a></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="taitailieu">
                        <?php
                        if ($trial_learn == 1)
                            echo '<p class="margintop10"> Bạn cần đăng ký khóa học để tải tài liệu! </p>';
                        else {
                            if (isset($curr_learn[0])) {
                                $attach_file = array_filter(explode('@', $curr_learn[0]['attach_file']));
                                if (count($attach_file)) {
                                    $attach_desc = array_filter(explode('@', $curr_learn[0]['attach_desc']));
                                    ?>
                                    <ul class="sidebar-block list-group list-group-menu list-group-minimal">
                                        <?php
                                        foreach ($attach_file as $fkey => $file) {
                                            $filename = explode('/', $file);
                                            $filename = end($filename);
                                            ?>
                                            <li class="list-group-item">
                                                <a href="<?php echo base_url() . 'tai-ve.html/' . str_replace("=", "", base64_encode($file)); ?>">
                                                    <i class="fa fa-file-text"></i>&nbsp;&nbsp;
                                                    <?php
                                                    if (!empty($attach_desc[$fkey]))
                                                        echo $attach_desc[$fkey];
                                                    else
                                                        echo $filename;
                                                    ?>
                                                    <span class="badge"><i class="fa fa-download"></i></span>
                                                </a>
                                                <?php $this->session->set_tempdata('is_downloadable', $curr_id, 3600); ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php }else { ?>
                                    <p class="category">Không có file đính kèm</p>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="ghichu">
                        <?php
                        if ($trial_learn == 1)
                            echo '<p class="margintop10"> Bạn cần đăng ký khóa học để viết ghi chú! </p>';
                        else {
                            ?>
                            <div class="form-group" style="height:200px !important; margin-top: 10px;">
                                <textarea id="learn_note" rows="18" style="height:200px !important;color: #858585;" class="form-control" placeholder="Ghi chú của bạn"><?php if (isset($learn_note[0])) echo preg_replace("/<br[^>]*>\s*\r*\n*/is", "\n", $learn_note[0]['note']); ?></textarea>

                            </div>
                            <br>
                            <button class="btn btn-primary pull-right" type="button" id="save_note">Lưu ghi chú <i class="fa fa-plus"></i></button>
                        <?php } ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="nopbai">
                        <?php
                        if ($trial_learn == 1)
                            echo '<p class="margintop10"> Bạn cần đăng ký khóa học để nộp bài tập! </p>';
                        else {
                            ?>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<div>
    <?php $this->load->view('course/detail/vote_modal'); ?>
</div>




<script src="<?php echo base_url(); ?>styles/v2.0/js/learn.js"></script>
<script src="<?php echo base_url(); ?>styles/v2.0/js/lktlayer.min.js"></script>
<!--<script src="<?php echo base_url(); ?>styles/v2.0/js/scrt.js"></script>  -->
<?php $this->load->view('student/action_comment'); ?>
<?php
if ($trial_learn == 1) {
    $this->session->set_tempdata('curr_course_id', $course_id, 3600 * 12);
    ?>
    <a href="<?php echo base_url() . $curr_course[0]['slug'] . '-3' . $curr_course[0]['id']; ?>.html">
        <img src="https://lakita.vn/styles/v2.0/img/event/hoc-thu.gif" class="img-responsive" style="position: fixed; bottom: 0; z-index: 100000000000;" />
    </a>
    <?php
}
    