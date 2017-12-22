<?php
$code_ladingpage = str_replace('.html', '', str_replace('https://lakita.vn/', '', current_url()));
$config = array(
    'server' => 'https://crm2.lakita.vn/',
    'api_key' => 'RrF3rcmYdWQbviO5tuki3fdgfgr4',
    'api_name' => 'lakita-key',
);
$restClient = new Rest_Client($config);
$uri = "landingpage_api/price/" . $code_ladingpage;
$result = $restClient->get($uri);
$rs = json_decode($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>COMBO KẾ TOÁN EXCEL TIN HỌC VĂN PHÒNG SIÊU KHUYẾN MÃI</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="fb:admins" content="100001432238036"/>
        <meta property="fb:app_id" content="315347858825221" />
        <meta property="og:type"   content="website" /> 
        <meta property="og:url" content="https://lakita.vn/combo-ke-toan-excel-van-phong-2017.html" />
        <meta property="og:title" content="COMBO KẾ TOÁN EXCEL TIN HỌC VĂN PHÒNG SIÊU KHUYẾN MÃI" />
        <meta property="og:image" content="https://lakita.vn/public/cb110/img-ladipage/rgt-cover.png" />
        <meta property="og:description" content="GIỎI NGHIỆP VỤ KẾ TOÁN - THÀNH THẠO KỸ NĂNG VĂN PHÒNG CHỈ 545K" />
        <link rel="icon" href="https://lakita.vn/data/source/setting/favicon.png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/cb110/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>public/my.js?ver=<?php echo _VER_CACHED_ ?>" type="text/javascript"></script>
        <?php include_once("plugin/analyticstracking.php") ?>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=315347858825221";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <section id="slider" class="slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div><H1><img src="<?php echo base_url() ?>public/cb110/img-ladipage/logo-slogan-lakita-co-may-bay.png" class="img-slogan" title="LAKITA.VN Học kế toán online"></H1></div>
                        <h2 class="text-center">Combo kế toán excel tin học văn phòng siêu khuyến mãi</h2>
                        <p class="title-slider">Giỏi nghiệp vụ kế toán - thành thạo kỹ năng văn phòng chỉ 545K</p>
                        <a href="#register-area" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">Đăng ký ngay</a>

                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #5cb85c; color: #fff">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title"> Đăng ký khóa học </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="pop-up-register" >
                                            <h4 class="text-center" style="line-height: 25px; text-align: left; padding: 5px;">Quý khách vui lòng điền đầy đủ thông tin cá nhân để nhân viên gọi điện tư vấn cho quý khách. Chân thành cảm ơn. </h4>
                                            <form class="LeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                                <div class="form-group">
                                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                                        <input class="form-control" type="text" name="name" required="" placeholder="Họ và tên:">
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                                        <input class="form-control" type="tel" name="phone" required="" placeholder="Điện thoại: ">
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                                        <input class="form-control" type="text" name="email" placeholder="Email:">
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                                        <input class="form-control" type="text" name="dia_chi" placeholder="Địa chỉ:">
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                                        <select class="form-control type-combo" name="type-combo">
                                                            <option value="0"> Mời bạn chọn khóa học kế toán cần đăng ký </option>
                                                            <option value="CBKT210"> Kế toán thuế cho người mới bắt đầu </option>
                                                            <option value="CBKT400"> Hướng dẫn lập báo cáo tài chính </option>
                                                            <option value="CBKT800"> Kế toán thuế nâng cao </option>
                                                            <option value="CBKT110"> Cách xác định chi phí hợp lý, công cụ bảo vệ về thanh tra thuế</option>
                                                            <option value="CBKT130"> Hướng dẫn phân tích các chỉ số hỗ trợ dự thầu vay vốn </option>
                                                        </select>
                                                    </div>
                                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                                    <button type="submit" 
                                                            class="btn btn-register btn-success LeadPanel_action button radius e_btn_submit reg_bt btn-rgt"
                                                            style="background-color: #5cb85c; border: 2px solid #5cb85c;">
                                                        Đăng ký ngay
                                                    </button>
                                                </div>
                                                <div class="col-md-12">

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-bottom: 0px">Close</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="info-combo" class="info-combo">
            <div class="container" style="width: 80%;">
                <div class="row text-center">
                    <div class="combo">
                        <span class="warning">Bạn sẽ bỏ lỡ điều gì nếu không đăng ký</span>		
                        <p class="price">Combo 3 khóa học chỉ <span>545K</span></p>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="#courses" id="go-to-course">
                                <img class="img-item" src="<?php echo base_url() ?>public/cb110/img-ladipage/600811.png">
                            </a>
                            <p class="title-course">
                                <a href="#courses"> 
                                    Tất cả các nghiệp vụ kế toán hóa đơn chứng từ, kế toán thuế, báo cáo tài chính 
                                </a>
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="https://lakita.vn/bi-quyet-lam-chu-excel-2017.html?link=199" target="_blank">
                                <img class="img-item" src="<?php echo base_url() ?>public/cb110/img-ladipage/excel-file.png" />
                            </a>
                            <p class="title-course">
                                <a href="https://lakita.vn/bi-quyet-lam-chu-excel-2017.html?link=199" target="_blank">
                                    Trọn bộ kiến thức về Excel dành cho kế toán mới nhất
                                </a>
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="https://lakita.vn/nhom-khoa-hoc/hanh-chinh-22.html" target="_blank">
                                <img class="img-item" src="<?php echo base_url() ?>public/cb110/img-ladipage/265695.png">
                            </a>
                            <p class="title-course">
                                <a href="https://lakita.vn/nhom-khoa-hoc/hanh-chinh-22.html" target="_blank">
                                    Kỹ năng tin học văn phòng
                                </a>    
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="courses" class="courses">
            <div class="container">
                <div class="row">
                    <h3 class="text-center"><span>Các khóa học kế toán</span></h3>
                    <div class="list-courses col-sm-offset-3 col-md-6 col-sm-offset-3 col-ms-6">
                        <div class="row item-course">
                            <div class="col-md-1">  <img src="<?php echo base_url() ?>public/cb110/img-ladipage/checked.png"> </div>
                            <div class="col-md-10 col-md-offset-1" style="line-height: 64px;">
                                <span><a href="https://lakita.vn/quyet-toan-thue-tu-a-den-z.html?link=164" target="_blank">Kế toán thuế cho người mới bắt đầu</a></span>
                            </div>
                        </div>
                        <div class="row item-course">
                            <div class="col-md-1">  <img src="<?php echo base_url() ?>public/cb110/img-ladipage/checked.png"> </div>
                            <div class="col-md-10 col-md-offset-1" style="line-height: 64px;">
                                <span><a href="https://lakita.vn/lap-bao-cao-tai-chinh-2017.html?link=165" target="_blank">Hướng dẫn lập báo cáo tài chính</a></span>
                            </div>
                        </div>
                        <div class="row item-course">
                            <div class="col-md-1">  <img src="<?php echo base_url() ?>public/cb110/img-ladipage/checked.png"> </div>
                            <div class="col-md-10 col-md-offset-1" style="line-height: 64px;">
                                <span><a href="https://lakita.vn/ky-thuat-quyet-toan-thue.html?link=169" target="_blank">Kế toán thuế nâng cao</a></span>
                            </div>
                        </div>
                        <div class="row item-course">
                            <div class="col-md-1">  <img src="<?php echo base_url() ?>public/cb110/img-ladipage/checked.png"> </div>
                            <div class="col-md-10 col-md-offset-1">
                                <span><a href="https://lakita.vn/cach-xac-dinh-chi-phi-hop-ly.html?link=166" target="_blank">Cách xác định chi phí hợp lý công cụ bảo vệ về thanh tra thuế</a></span>
                            </div>
                        </div>
                        <div class="row item-course">
                            <div class="col-md-1">  <img src="<?php echo base_url() ?>public/cb110/img-ladipage/checked.png"> </div>
                            <div class="col-md-10 col-md-offset-1">
                                <span><a href="https://lakita.vn/bao-cao-tai-chinh-nang-cao.html?link=168" target="_blank">Hướng dẫn phân tích các chỉ số hỗ trợ dự thầu vay vốn</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- --> <section id="feedback" class="feedback">

            <div class="container">

                <p class="feedback-title">Cảm nhận học viên</p>
                <div class="row">
                    <div class="screen-Apple col-md-6 col-sm-6 col-xs-12 text-center">
                        <img src="<?php echo base_url() ?>public/cb110/img-ladipage/Apple-Mac-Computer-Screen-PNG.png">
                        <iframe class="video" width="420" height="238" src="https://www.youtube.com/embed/5TJhF4Gtu5I" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="screen-Apple col-md-6 col-sm-6 col-xs-12 text-center">
                        <img src="<?php echo base_url() ?>public/cb110/img-ladipage/Apple-Mac-Computer-Screen-PNG.png">
                        <iframe class="video" width="420" height="238" src="https://www.youtube.com/embed/MCGUypa5cx4" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </section>
        <section id="supporting" class="supporting">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12 text-center">
                        <div><H1><img src="<?php echo base_url() ?>public/cb110/img-ladipage/logo-slogan-lakita-co-may-bay.png" class="img-slogan" title="LAKITA.VN Học kế toán online"></H1></div>
                        <h2 class="text-center">Học online cùng lakita</h2>
                        <div class="sup-item col-md-4 col-sm-4 col-xs-12  text-center">
                            <img class="icon" src="<?php echo base_url() ?>public/cb110/img-ladipage/history-clock-button (1).png">
                            <p >Học mãi mãi</p>
                            <p>Bạn chỉ cần đăng ký một lần học mãi mãi, các chính sách thông tư cập nhật liên tục, tùy vào mong muốn và thời gian của bạn</p>
                        </div>
                        <div class="sup-item col-md-4 col-sm-4 col-xs-12 text-center">
                            <img class="icon" src="<?php echo base_url() ?>public/cb110/img-ladipage/wifi (1).png">
                            <p>Học mọi lúc mọi nơi</p>
                            <p>Chỉ cần điện thoại hoặc máy tính của bạn có kết nối internet là bạn có thể tham gia học mọi lúc mọi nơi mà không sợ bỏ lỡ các bài học quan trọng</p>
                        </div>
                        <div class="sup-item col-md-4 col-sm-4 col-xs-12 text-center">
                            <img class="icon" src="<?php echo base_url() ?>public/cb110/img-ladipage/thumbs-up (1).png">
                            <p>Cam kết</p>
                            <p>Hỗ trợ, giải đáp mọi thắc mắc của bạn về khóa học và cả công việc của mình. Hoàn tiền nếu không hài lòng về khóa học</p>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <section id="register" class="register">
            <div class="container">
                <div class="row">
                    <div class="ThoiGianHienThi col-md-5 col-md-offset-2  col-sm-5 col-sm-offset-2 col-xs-12">
                        <div class="row register2"> 
                            <h1 class="text-center" style="color: #fff; margin-bottom: 30px;">
                                Để nhận được ưu đãi lên đến <span class="red promotion"> <?php echo round((1 - $rs->price / $rs->price_root) * 100, 2) ?>% </span>
                            </h1>
                            <div class="text-center margin-top-45">
                                <span class="price_root"> <?php echo number_format($rs->price_root, 0, ",", "."); ?></span>
                                <span class="price_sale"> <?php echo number_format($rs->price, 0, ",", "."); ?> vnd</span>
                            </div>
                            <div class="register-notice-2">
                                <p class="text-center font-size-26"> <strong>Áp dụng đến hết <span class="fullyear">28/11/2016</span> </strong> </p>
                                <p class="text-center font-size-30">  <strong>NHANH TAY LÊN !</strong> </p>
                                <p class="text-center font-size-30">  <strong>Thời gian ưu đãi còn</strong> </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 text-center">
                                <p class="text-center"> Ngày </p>
                                <div class="BOX num-day">	00 </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 text-center">
                                <p> Giờ </p>
                                <div class="BOX num-hour">	00</div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 text-center" >
                                <p> Phút </p>
                                <div class="BOX num-minute">	00</div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 text-center">
                                <p> Giây </p>
                                <div class="BOX num-second">	00</div>
                            </div>
                        </div>
                    </div>
                    <div class="FormDangKy col-md-5 col-sm-5 col-xs-12" >
                        <p class="text-center">Quý khách vui lòng điền đầy đủ thông tin cá nhân để nhân viên gọi điện tư vấn cho quý khách. Chân thành cảm ơn. </p>
                        <form class="LeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                            <div class="form-group">
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <input class="form-control" type="text" name="name" required="" placeholder="Họ và tên:">
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <input class="form-control" type="tel" name="phone" required="" placeholder="Điện thoại: ">
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <input class="form-control" type="text" name="email" placeholder="Email:">
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <input class="form-control" type="text" name="dia_chi" placeholder="Địa chỉ:">
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <select class="form-control type-combo-2" name="type-combo">
                                        <option value="0"> Mời bạn chọn khóa học kế toán cần đăng ký </option>
                                        <option value="CBKT210"> Kế toán thuế cho người mới bắt đầu </option>
                                        <option value="CBKT400"> Hướng dẫn lập báo cáo tài chính </option>
                                        <option value="CBKT800"> Kế toán thuế nâng cao </option>
                                        <option value="CBKT110"> Cách xác định chi phí hợp lý, công cụ bảo vệ về thanh tra thuế</option>
                                        <option value="CBKT130"> Hướng dẫn phân tích các chỉ số hỗ trợ dự thầu vay vốn </option>
                                    </select>
                                </div>
                                <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                <button type="submit" class="btn btn-register btn-success LeadPanel_action button radius e_btn_submit reg_bt btn-rgt-2">
                                    Đăng ký ngay
                                </button>
                            </div>
                            <div class="col-md-12">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="fb-comments" data-href="https://lakita.vn/combo-ke-toan-excel-van-phong-2017.html" data-width="100%" data-numposts="10" data-order-by="reverse_time"></div>
        </div>
        <!-- *************************************************************Popup*************************************************************************-->
        <div id="Popup" class="popup-wrapper" style="display: none;">
            <div class="popup-loading">
                <div class="loading-container">
                    <span>
                        Hệ thống đang xử lý, vui lòng đợi trong giây lát...
                    </span>
                </div>
            </div>
        </div>
        <style>
            .popup-wrapper {
                position: fixed;
                bottom: 0;
                right: 0;
                top: 0;
                left: 0;
                overflow: hidden;
                z-index: 8010;
                background: url(https://lakita.vn/styles/v2.0/img/modal_overlay.png);
            }
            .popup-wrapper .popup-loading{
                background-color: white;
                opacity: 0.7;
                filter:alpha(opacity=70);
                height: 100%;
                width: 100%;
                z-index: 21;
                position: absolute;
                top: 0px;
                left: 0px;

            }
            .popup-wrapper .popup-loading .loading-container{
                position: relative;
                height: 100%;
                background: url(https://www.shopdowntowneaston.com/images/loading.gif) center center no-repeat;
            }
            .popup-wrapper .popup-loading .loading-container span{
                position: absolute;
                top: 58%;
                left: 30%;
                opacity: 1;
                z-index: 1000000000000;
                font-size: 28px;
                font-weight: bold;
            }
        </style>

        <script>

        </script>
        <!-- *************************************************************Popup (end)**********************************************************************-->


        <script>
            $(".btn-rgt-2").click(function (e) {
                if ($(".type-combo-2").val() == 0) {
                    alert("Mời tìm hiểu khóa học kế toán, sau đó chọn đăng ký!");
                    e.preventDefault();
                     $("#go-to-course").click();
                }
            });
            $(".btn-rgt").click(function (e) {
                if ($(".type-combo").val() == 0) {
                    alert("Mời tìm hiểu khóa học kế toán, sau đó chọn đăng ký!");
                    e.preventDefault();
                     $("#go-to-course").click();
                }
            });
        </script>
    </body>
</html>