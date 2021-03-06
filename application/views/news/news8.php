<?php ?>
<!--    <script src="<?php echo base_url(); ?>styles/v2.0/js/home.js"></script>-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/view_all.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>styles/v2.0/js/view_all.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>styles/v2.0/js/login.min.js"></script>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php if (!$this->agent->is_mobile()) { ?>
    <div class="header">
        <?php $this->load->view('home/navbar'); ?>
        <div class="row">
            <div class="col-md-6  my-row-1">
                <h1> <strong> KHẢO SÁT THÔNG TIN KHÁCH HÀNG – NÂNG CẤP HỆ THỐNG </strong></h1>
            </div>
            <div class="col-md-6 searchBox">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <label for="exampleInputEmail1" class="sr-only">Search</label>
                        <form action="<?php echo base_url(); ?>tim-kiem.html" method="post" id="searchForm">
                            <input type="text" class="form-control" id="key_word" name="key_word" value="Tìm các khóa học bạn quan tâm...">
                            <img alt="học excel cơ bản, excel cho kế toán, tự học excel" class="searchIcon"src="<?php echo base_url(); ?>styles/v2.0/img/icon_seach.png" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    ?>
    <?php $this->load->view('mobile/navbar'); ?>
    <div class="container" style="margin-top: -22px; overflow: hidden">
        <div class="row searchBox" style="background: url(http://lakita.com.vn/styles/v2.0/img/banner-1.jpg); padding-top: 9px; height: 70px">
            <div class="col-md-12">
                <label for="exampleInputEmail1" class="sr-only">Search</label>
                <form action="<?php echo base_url(); ?>tim-kiem.html" method="post" id="searchForm">
                    <input type="text" class="form-control" id="key_word" name="key_word" value="Tìm các khóa học bạn quan tâm...">
                    <img alt="học excel cơ bản, excel cho kế toán, tự học excel" class="searchIcon"src="<?php echo base_url(); ?>styles/v2.0/img/icon_seach.png" style="width:25px; top:10px"/>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<div class="container text-justify" style="font-family: Roboto; font-size: 16px">
    <div class="row">
        <div class="col-md-6 col-md-push-3">
            <h3> Bạn <?php echo $this->session->userdata('user_name'); ?> thân mến </h3>
            <p>Nhằm mục đích cung cấp dịch vụ học tập và nội dung kiến thức ngày càng tốt hơn cho bạn, Lakita sẽ tiến hành nâng cấp học khóa học <strong>"Hướng dẫn lập BCTC hợp lý theo chính sách thuế mới và phân tích BCTC"</strong> của Tiến sĩ Hoàng Quang Trung.</p>
            <p>Cụ thể là, trong hôm nay ngày 07/07/2017, Lakita sẽ cập nhật nội dung bài học của bạn và đổi tên khóa học từ <strong>"Hướng dẫn lập BCTC hợp lý theo chính sách thuế mới và phân tích BCTC"<strong> và chuyển tên khóa học thành <strong>"Hướng Dẫn Lập Báo Cáo Tài Chính Hợp Lý Và Phân Tích Các Chỉ Số Hỗ Trợ Dự Thầu, Vay Vốn Ngân Hàng".</strong></p> 
            <p>Rất mong nhận được nhận xét của bạn về chất lượng của khóa học này.</p>
            <p>Chúc bạn có thời gian học tập vui vẻ và hiệu quả trên hệ thống của Lakita.vn.</p>
            <p class="text-right"> Trân trọng cảm ơn. </p>
            <p class="text-right"> <strong> Lakita team. </strong>  </p>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6 col-md-push-3">
            <div id="fb-root"></div> 
            <div  class="fb-comments" data-href="https://lakita.vn/tri-an-hoc-vien-008.html" data-width="100%" data-numposts="7" data-order-by="reverse_time"></div>
        </div>
    </div>
</div>


