
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/course_detail.css" />
<style>
    .content{
        font-size: 20px;
        background-color: #FFF;
        padding-top: 30px;
        padding-bottom: 30px
    }
    .content ol li b{
        margin-top: 20px;
        color: #396;
        margin-left: 20px
    }
    .content ol li ul{
        margin-left: 20px

    }
    .content ol li ul li ul li{
        margin-left: 20px;
        list-style-type: disc;
    }
    .content ol li p{
        margin-left: 40px;
    }
</style>
<div class="header">
    <?php $this->load->view('home/navbar'); ?>
    <div class="row">
        <div class="col-md-6  my-row-1">
            <h2 style="font-family: OpenSans-Bold"> <strong> <?php echo $title ?> </h2> </strong>
        </div>
        <div class="col-md-6 searchBox">
            <form action="<?php echo base_url(); ?>tim-kiem.html" method="post" id="searchForm">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <label for="exampleInputEmail1" class="sr-only">Search</label>
                        <input type="text" class="form-control" id="key_word" name="key_word" value="Tìm các khóa học bạn quan tâm...">
                        <img alt="học excel, hoc excel, học excel cơ bản, tự học excel" title="học excel, hoc excel, học excel cơ bản, tự học excel" class="searchIcon" src="<?php echo base_url(); ?>styles/v2.0/img/icon_seach.png" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="course-summary paddingbottom30">
    <div class="container">
        <div class="dir"> <img alt="học excel, hoc excel, học excel cơ bản, tự học excel" title="học excel, hoc excel, học excel cơ bản, tự học excel" src="<?php echo base_url(); ?>styles/v2.0/img/course-detail/excel.png">
            <a href="https://lakita.vn"> Trang chủ </a> / 
            <a href="<?php echo base_url(); ?>dich-vu-excel.html"> Dịch vụ Excel  </a>
        </div>
        <div class="row col-md-11 col-md-offset-1 content">
            <b>Bạn thân mến</b>
            <br>
            <p><b>Hệ thống Đào tạo Trực Tuyến Lakita.vn</b> xin được thông báo đến toàn thể các bạn học viên của <b>Lakita.vn</b> thông tin hiện nay <b>Lakita.vn</b> đã mở dịch vụ tư vấn, nâng cấp hệ thống và xây dựng phát triển phần mềm Excel phục vụ cho công việc của bạn.</p>
            <br>
            <p>Nội dung chi tiết:</p>
            <ol>
                <li>
                    <b>1. NÂNG CẤP HỆ THỐNG</b>
                    <ul>
                        <li><b>A. AI LÀ NGƯỜI CẦN DỊCH VỤ NÀY?</b>
                            <ul>
                                <li>
                                    Là những người đã có hệ thống quản trị trên file Excel mà không làm chủ được nó, không sử dụng được nó hiệu quả.

                                </li>
                                <li>
                                    Là những người có nhu cầu mở rộng hệ thống có sẵn để giải quyết thêm các nhu cầu phát sinh.

                                </li>
                            </ul>
                        </li>

                        <li> <b>B. GIÁ TRỊ MANG LẠI </b>
                            <ul>
                                <li>
                                    Giúp bạn hiểu rõ, sử dụng tốt hệ thống của mình.
                                </li>
                                <li>
                                    Nâng cấp hệ thống dễ sử dụng và phục vụ mục đích làm việc của bạn.
                                </li>
                                <li>
                                    Giảm thời gian làm việc.
                                </li>
                                <li>
                                    Tăng năng suất lao động.
                                </li>
                                <li>
                                    Quản trị dữ liệu rõ ràng, chuẩn xác.
                                </li>
                                <li>
                                    Báo cáo trực quan, sinh động. Hỗ trợ ra quyết định tốt.
                                </li>
                            </ul>
                    </ul>
                </li>
                <li><b>2. XÂY DỰNG HỆ THỐNG</b>
                    <ul>
                        <li><b>B. AI LÀ NGƯỜI CẦN DỊCH VỤ NÀY?</b>
                            <ul>
                                <li>
                                    Là những người đã có hệ thống nhưng hệ thống này không dùng được, hoặc không áp dụng vào công việc được.
                                </li>
                                <li>
                                    Là những người đang gặp khó khăn, đau khổ với công việc (liên quan excel) vì phải thao tác thủ công, tốn thời gian.
                                </li>
                                <li>
                                    Là những người có nhu cầu xây dựng hệ thống quản lý khoa học trên Excel cho công việc.
                                </li>
                            </ul>
                        </li>
                        <li><b>B. SẢN PHẨM SẼ MANG LẠI ĐIỀU GÌ CHO BẠN?</b>
                            <ul>
                                <li>
                                    Giảm thời gian làm việc.
                                </li>
                                <li>
                                    Tăng năng suất lao động.
                                </li>
                                <li>
                                    Quản trị dữ liệu rõ ràng, chuẩn xác.
                                </li>
                                <li>
                                    Báo cáo trực quan, sinh động. Hỗ trợ ra quyết định tốt.
                                </li>
                            </ul>
                        </li>
                        <li><b>C.CHI PHÍ</b>
                            <p>Từ 0 VNĐ trở lên theo khối lượng cũng như tính chất công việc. Nội dung này sẽ được bàn cụ thể trong quá trình tư vấn</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <b>3. CAM KẾT TỪ LAKITA.VN</b>
                    <p>Bảo hành trọn đời Sử dụng tốt mới phải thanh toán cũng như cho CẢM NHẬN về sản phẩm</p>
                </li>
                <li>
                <li>    
                    <b>4. HÌNH THỨC ĐĂNG KÝ</b>
                    <p>Các bạn sẽ đăng ký tư vấn bằng cách điền thông tin vào link sau</p>
                    <p><a href="https://goo.gl/forms/yiZDYnIzzy2pg6Ep1" target="blank" >https://goo.gl/forms/yiZDYnIzzy2pg6Ep1</a></p>
                </li>
            </ol>
            Chúc bạn có thời gian học tập vui vẻ và hiệu quả trên hệ thống của Lakita.vn!

            Trân trọng,
            Lakita team.

            <div class="clearfix"></div>
            <div class="col-md-6 col-md-offset-3">
            <img style="width:100%; margin-top: 30px" class="img-reponsive" src="http://lakita.vn/data/source/BQLCE2017-tep-dinh-kem/dich-vu-bao-hanh.jpg">
        </div>
        </div>
        
    </div>
