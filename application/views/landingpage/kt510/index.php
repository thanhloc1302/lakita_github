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
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta property="fb:admins" content="100004021107387"/>
        <meta property="fb:app_id" content="162078224495583" />
        <title>Quyết toán thuế từ A đến Z</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="<?php echo base_url(); ?>public/kt510/js/responsive.js" type="text/javascript"></script>
        <script src="https://use.fontawesome.com/d826c84253.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/kt510/css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/kt510/css/style.css">
        <script src="<?php echo base_url(); ?>public/my.js?ver=<?php echo _VER_CACHED_ ?>" type="text/javascript"></script>
    <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window,
                    document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1645549219061949'); // Insert your pixel ID here.
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1645549219061949&ev=PageView&noscript=1"/></noscript>
        <!-- DO NOT MODIFY -->
        <!-- End Facebook Pixel Code -->
    </head>
    <script>
        fbq('track', 'CompleteRegistration');
    </script>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=162078224495583&autoLogAppEvents=1';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="container-fluid header">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img id="logo" class="img-responsive col-sm-offset-1" src="<?php echo base_url(); ?>public/kt510/img/top-logo.png" alt="Lakita.vn"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="pull-right">
                            <ul class="nav navbar-nav fontUTMAvo navbar-right" style="width: 100%;">
                                <li><a href="#">Lợi ích</a></li>
                                <li><a href="#">Nội dung khóa học</a></li>
                                <li><a href="#">Thông tin giảng viên</a></li>
                                <li><a href="#">Đăng ký</a></li>
                            </ul>
                        </div>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img class="img-responsive col-sm-offset-1 img-hide" src="<?php echo base_url(); ?>public/kt510/img/top-add.png" alt="">
                        <div class="do-you-know text-center">
                            <h3 class="fontUTM">BẠN CÓ BIẾT ?</h3>
                            <p>Chỉ <span>15% </span> sinh viên kế toán ra trường <span>có việc</span></p>
                            <p><span>50% </span>sinh viên kế toán làm <span>không đúng </span>chuyên ngành</p>
                            <p><span>35% </span>sinh viên mới ra trường <span>thất nghiệp</span></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-md-offset-1">
                        <img class="img-responsive" src="<?php echo base_url(); ?>public/kt510/img/TYPO-05.png" alt="16 giờ học">
                        <div class="row" style="margin-top: 5%;">
                            <div class="col-xs-6 invest">
                                <p>Chỉ cần đầu tư</p>
                            </div>
                            <div class="col-xs-6 price">
                                <p>495.000 <span>vnđ</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5 rgtn">
                                <p>Hãy đăng ký ngay</p>
                            </div>
                            <div class="col-xs-7 saleoff">
                                <p><span><img src="<?php echo base_url(); ?>public/kt510/img/gift.png" alt=""></span> Khuyến mại giảm giá khóa học đến 400.000đ</p>
                            </div>
                        </div>

                        <form  class="LeadPanel_form promo-panel_action e_submit e_form_submit " action="<?php echo $code_ladingpage.'/';?>thank-you.html" method="post" name="fr_register">
                            <div  id="loading" style="display: none" class='alert'>
                                <a class='close' data-dismiss='alert'>×</a>
                                Loading
                            </div>
                            <div id="response"></div>

                            <div class="row-fluid">
                                <div class="span12">
                                    <input class="input-large LeadPanel_form_name" type="text" required placeholder="Họ tên" name="name" id="name" />
                                </div>

                            </div>  
                            <div class="row-fluid">
                                <div class="span6">
                                    <input type="email" name="email" id="email" class="input-large LeadPanel_form_name" required placeholder="Email"   />
                                </div>
                                <div class="span6-new">
                                    <input class="input-large LeadPanel_form_name"  required placeholder="Số điện thoại"  type="tel" name="phone" id="phone" />
                                </div>
                            </div>        

                            <div class="row-fluid">
                                <div class="span6">
                                    <input  class="input-large LeadPanel_form_company" id="tinh" type="text" name="tinh" placeholder="Tỉnh thành" />
                                </div>
                                <div class="span6-new">
                                    <input class="input-large LeadPanel_form_company" id="quan" type="text" name="quan" placeholder="Quận huyện" />
                                </div>

                            </div>          
                            <div class="row-fluid" style="clear: both;">
                                <div class="span12">
                                    <input class="input-large LeadPanel_form_company" id="dia_chi" type="text" name="dia_chi" placeholder="Địa chỉ"  />
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="span12 text-center">
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <input class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" type="submit" name="some_name" value="Đăng ký ngay" id="form-submit"/>
                                </div>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container welcome fontSF">
            <div class="row wellcome-text">
                Chào mừng bạn đến với trang thông tin của khóa học Quyết toán thuế A-Z. Trước khi tìm hiểu chi tiết, Lakita xin tặng bạn BỘ QUÀ TẶNG trị giá 5 trăm ngàn đồng sau:
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo base_url(); ?>public/kt510/img/18excel.jpg" alt="" class="img-responsive shadow">
                </div>
                <div class="col-sm-8">
                    <p id="title-c">Khóa học trực tuyến: 18 Thủ thuật Excel</p>
                    <p id="content-c">18 bài học ngắn gọn, xúc tích có đủ cả lý thuyết và thực hành.
                        Các bài giảng được thiết kế theo dạng cầm tay chỉ việc, chú trọng tối đa tới khả năng áp dụng của người học</p>
                    <p id="price-c">Giá: 500.000 đ</p>
                </div>
            </div>
        </div>

        <div class="container-fluid support">
            <div class="container">
                <div class="support-tit">			
                    <div class="line-white"></div>
                    <div class="fontSFt text-support">VÀ CHÚNG TÔI Ở ĐÂY ĐỂ ĐỒNG HÀNH CÙNG BẠN !</div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3 text-center feature">
                        <img src="<?php echo base_url(); ?>public/kt510/img/online.png" alt="Học online">
                        <p>HỌC ONLINE</p>
                        <p>Mô hình học online tiên tiến, mọi lúc, mọi nơi, mọi thiết bị</p>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center feature">
                        <img src="<?php echo base_url(); ?>public/kt510/img/quality.png" alt="Cam kết chất lượng">
                        <p>CAM KẾT CHẤT LƯỢNG</p>
                        <p>Hoàn lại 100% tiền nếu bạn không hài lòng về khóa học</p>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center feature">
                        <img src="<?php echo base_url(); ?>public/kt510/img/exchange.png" alt="Giải pháp nhanh chóng">
                        <p>GIẢI PHÁP NHANH CHÓNG</p>
                        <p>Đội ngũ trợ giảng giải đáp thắc mắc qua hệ thống forum tiện dụng</p>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center feature">
                        <img src="<?php echo base_url(); ?>public/kt510/img/time.png" alt="Sở hữu trọn đời">
                        <p>SỞ HỮU TRỌN ĐỜI</p>
                        <p>Tài khoản học tập trọn đời. Không giới hạn thời gian học.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container lineout">
            <div class="row">
                <div class="col-xs-12 text-center SFDisplay" style="font-size: 25px; color: #2e3d49;">DƯỚI ĐÂY LÀ 12 CHÌA KHÓA BẠN SẼ CÓ ĐƯỢC TRONG KHÓA HỌC QUYẾT TOÁN THUẾ A - Z</div></div>

            <div class="container target">
                <div class="col-sm-6">
                    <p class="tit-t fontSFt">ĐỐI TƯỢNG MỤC TIÊU</p>
                    <p class="con-t fontSFt">Giám đốc , kế toán trưởng, kế toán tổng hợp, kế toán chi tiết, kế toán kho, kế toán thanh toán, thủ quỹ, kế toán tài sản, kế toán doanh thu, kế toán thuế, chuyên viên nhân sự</p>
                </div>
                <div class="col-sm-6">
                    <p class="tit-t fontSFt">HÌNH MẪU HỌC VIÊN SẼ ĐẠT ĐƯỢC SAU KHÓA HỌC</p>
                    <p class="con-t fontSFt">Tự tin nhận làm kế toán thuế cho các doanh nghiệp nhỏ và vừa
                        Kế toán thuế cần phải làm gì vào cuối kỳ báo cáo hàng quý và báo cáo tài chính năm</p>
                </div>
            </div>

            <div class="container content-course">
                <div class="row">
                    <div class="col-sm-11 col-sm-offset-1">
                        <div class="part">
                            <p class="name fontSFt"><i class="fa fa-circle" aria-hidden="true"></i><span>CHƯƠNG 1</span></p>
                            <p class="title-part fontSFt">Tổng Hợp Chứng Từ Hóa Đơn Mua Vào, Hóa Đơn Bán Ra.</p>
                            <p class="pre-content">Tổng hợp hóa đơn mua vào, hóa đơn bán ra của doanh nghiệp tại thời điểm cuối tháng. <span class="hid-add">Sắp xếp chứng từ theo thứ tự ngày tháng từ nhỏ đến lớn. Tạo bảng mã tên các công ty cung cấp và mua hàng của công ty. Xác định hình thức thanh toán của hóa đơn mua vào và bán ra. Nhập dữ liệu vào bảng tổng hợp hóa đơn mua vào, hóa đơn bán ra</span></p>
                            <p class="click-show">
                                <span class="vie">Xem chi tiết<i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                <span class="hid">Rút gọn<i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
                            </p>
                            <div class="list-lesson">
                                <ul>
                                    <li>Bài 01: Sắp xếp chứng từ theo thứ tự ngày tháng từ nhỏ đến lớn </li>
                                    <li>Bài 02: Tạo bảng mã tên các công ty cung cấp và mua hàng của công ty</li> 
                                    <li>Bài 03: Xác định hình thức thanh toán của hóa đơn mua vào và bán ra </li>
                                    <li>Bài 04: Nhập dữ liệu vào bảng tổng hợp hóa đơn mua vào, hóa đơn bán ra</li> 
                                </ul>
                            </div>
                        </div>
                        <div class="part">
                            <p class="name fontSFt"><i class="fa fa-circle" aria-hidden="true"></i><span>CHƯƠNG 2</span></p>
                            <p class="title-part fontSFt">Tổng Hợp Hàng Hóa Nguyên Vật Liệu Mua Vào Và Bán Ra</p>
                            <p class="pre-content">Lên sổ chi tiết hàng hóa vật liệu. <span class="hid-add">Tạo bảng mã hàng hóa và vật liệu. Tra mã hàng hóa vật liệu. Nhập số liệu vật liệu hàng hóa mua vào bán ra để lên sổ chi tiêts vật liệu, hàng hóa </span></p>
                            <p class="click-show">
                                <span class="vie">Xem chi tiết<i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                <span class="hid">Rút gọn<i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
                            </p>
                            <div class="list-lesson">
                                <ul>
                                    <li>Bài 05: Tạo bảng mã hàng hóa và vật liệu</li> 
                                    <li>Bài 06: Tra mã hàng hóa vật liệu</li>
                                    <li>Bài 07: Hướng dẫn nộp đăng ký tài khoản qua mạng: dangkykinhdoanh.gdt.gov</li>
                                    <li>Bài 08: Nhập số liệu vật liệu hàng hóa mua vào bán ra để lên sổ chi tiết vật liệu, hàng hóa </li>
                                </ul>
                            </div>
                        </div>
                        <div class="part">
                            <p class="name fontSFt"><i class="fa fa-circle" aria-hidden="true"></i><span>CHƯƠNG 3</span></p>
                            <p class="title-part fontSFt">Tổng Hợp Chứng Từ Ngân Hàng Định Khoan Phần Chứng Từ Ngân Hàng Theo Sổ Phụ Ngân Hàng Cung Cấp</p>
                            <p class="pre-content">Định khoản chứng từ ngân hàng từ sổ phụ (hay còn gọi là sao kê ngân hàng). <span class="hid-add">Tạo mã nghiệp vụ phát sinh ngân hàng. Xác định các khoản tiền chuyển đến và chuyển đi theo từ mã nghiệp vụ. Lên sổ tiền gửi ngân hàng</span></p>
                            <p class="click-show">
                                <span class="vie">Xem chi tiết<i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                <span class="hid">Rút gọn<i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
                            </p>
                            <div class="list-lesson">
                                <ul>
                                    <li>Bài 09:	Tạo mã nghiệp vụ phát sinh ngân hàng</li>
                                    <li>Bài 10:	Xác định các khoản tiền chuyển đến và chuyển đi theo từ mã nghiệp vụ</li>
                                    <li>Bài 11: Lên sổ tiền gửi ngân hàng</li>	
                                </ul>
                            </div>
                        </div>
                        <div class="part">
                            <p class="name fontSFt"><i class="fa fa-circle" aria-hidden="true"></i><span>CHƯƠNG 4</span></p>
                            <p class="title-part fontSFt">Bảng Chấm Công Và Thanh Toán Tiền Lương</p>
                            <p class="pre-content">Làm bảng chấm công và thanh toán tiền lương theo các tiêu chi trên hợp đồng lao động. <span class="hid-add">Các khoản người lao động được hưởng được nên rõ trong hợp đồng lao động. Phân chia thành tưng phòng ban, nhóm, tổ đội. Hồ sơ pháp lý của từ lao động</span></p>
                            <p class="click-show">
                                <span class="vie">Xem chi tiết<i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                <span class="hid">Rút gọn<i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
                            </p>
                            <div class="list-lesson">
                                <ul>
                                    <li>Bài 12: Các khoản người lao động được hưởng được nên rõ trong hợp đồng lao động</li>
                                    <li>Bài 13: Phân chia thành tưng phòng ban, nhóm, tổ đội</li>
                                    <li>Bài 14: Hồ sơ pháp lý của từ lao động</li>
                                </ul>
                            </div>
                        </div>
                        <div class="part">
                            <p class="name fontSFt"><i class="fa fa-circle" aria-hidden="true"></i><span>CHƯƠNG 5</span></p>
                            <p class="title-part fontSFt">Bảng Phân Bổ Khấu TSCĐ, Công Cụ Dụng Cụ.</p>
                            <p class="pre-content">Lập bảng khấu hoa TSCĐ và công cụ dụng cụ chi tiết cho từ tháng. <span class="hid-add">

                                </span></p>
                            <p class="click-show">
                                <span class="vie">Xem chi tiết<i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                <span class="hid">Rút gọn<i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
                            </p>
                            <div class="list-lesson">
                                <ul>
                                    <li>Bài 15: Lập bảng khấu hoa TSCĐ và công cụ dụng cụ chi tiết cho từ tháng</li>
                                </ul>
                            </div>
                        </div>
                        <div class="part">
                            <p class="name fontSFt"><i class="fa fa-circle" aria-hidden="true"></i><span>CHƯƠNG 6</span></p>
                            <p class="title-part fontSFt">Lên Sổ NKC Theo Số Liệu Của Chuyên Đề 1; 2; 3; 4; 5.</p>
                            <p class="pre-content">Từ bảng tổng hợp mua vào bán ra nên sổ NKC. <span class="hid-add">Lên sổ nhật ký chung theo từng nhóm nghiệp cụ: VD như nhóm Nghiệp vụ mua vào, nhóm NVụ bán ra, nhóm NV sổ ngân hàng ... Sắp xếp lại tất cả các nhóm nghiệp cụ theo thứ tự ngày tháng. Kết chuyển phần thuế GTGT được khấu trừ sang thuế GTGT phải nộp. kết chuyển các tài khoản để xác định lợi nhuận. Kiểm tra giá vốn của từng hóa đơn bán ra có hợp lý không</span></p>
                            <p class="click-show">
                                <span class="vie">Xem chi tiết<i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                <span class="hid">Rút gọn<i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
                            </p>
                            <div class="list-lesson">
                                <ul>
                                    <li>Bài 16: Lên sổ nhật ký chung theo từng nhóm nghiệp cụ: VD như nhóm Nghiệp vụ mua vào, nhóm NVụ bán ra, nhóm NV sổ ngân hàng ...</li>
                                    <li>Bài 17: Sắp xếp lại tất cả các nhóm nghiệp cụ theo thứ tự ngày tháng</li>
                                    <li>Bài 18: Kết chuyển phần thuế GTGT được khấu trừ sang thuế GTGT phải nộp</li>
                                    <li>Bài 19: kết chuyển các tài khoản để xác định lợi nhuận</li>
                                    <li>Bài 20: Kiểm tra giá vốn của từng hóa đơn bán ra có hợp lý không</li>
                                </ul>
                            </div>
                        </div>
                        <div class="part">
                            <p class="name fontSFt"><i class="fa fa-circle" aria-hidden="true"></i><span>CHƯƠNG 7</span></p>
                            <p class="title-part fontSFt">Từ Sổ NKC Lên Bảng Cân Đối Tài Khoản. </p>
                            <p class="pre-content">Từ bảng tổng hợp mua vào bán ra nên sổ NKC. <span class="hid-add">Dùng lệnh sumif để lên bảng cân đối các tài khoản từ sổ NKC. Kiểm tra lại các số liệu các tài khoản có hợp lý chính xác với sổ chi tiết hàng hóa NVL, bảng tổng hợp ctừ mua vào bán ra, tờ khai thuế hàng quý</span></p>
                            <p class="click-show">
                                <span class="vie">Xem chi tiết<i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                <span class="hid">Rút gọn<i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
                            </p>
                            <div class="list-lesson">
                                <ul>
                                    <li>Bài 21: Dùng lệnh sumif để lên bảng cân đối các tài khoản từ sổ NKC</li>
                                    <li>Bài 22: Kiểm tra lại các số liệu các tài khoản có hợp lý chính xác với sổ chi tiết hàng hóa NVL, bảng tổng hợp ctừ mua vào bán ra, tờ khai thuế hàng quý</li>
                                </ul>
                            </div>
                        </div>
                        <div class="part">
                            <p class="name fontSFt"><i class="fa fa-circle" aria-hidden="true"></i><span>CHƯƠNG 8</span></p>
                            <p class="title-part fontSFt">Lên Bảng Cân Đối Kế Toán, Báo Cáo Kết Quả Kinh Doanh, Báo Cáo Lưu Chuyển Tiền Tệ 
                                . </p>
                            <p class="pre-content">Lên bảng cân đối kế toán, báo cáo kết quả kinh doanh, báo cáo lưu chuyển tiền tệ. <span class="hid-add">Lên bảng cân đối kế toán, báo cáo kết quả kinh doanh, báo cáo lưu chuyển tiền tệ</span></p>
                            <p class="click-show">
                                <span class="vie">Xem chi tiết<i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                <span class="hid">Rút gọn<i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
                            </p>
                            <div class="list-lesson">
                                <ul>
                                    <li>Bài 23: Lên bảng cân đối kế toán, báo cáo kết quả kinh doanh, báo cáo lưu chuyển tiền tệ</li>
                                </ul>
                            </div>
                        </div>
                        <div class="part">
                            <p class="name fontSFt"><i class="fa fa-circle" aria-hidden="true"></i><span>CHƯƠNG 9</span></p>
                            <p class="title-part fontSFt">Làm Thuyết Minh Báo Cáo Tài Chính. </p>
                            <p class="pre-content">Làm thuyết minh báo cáo tài chính. <span class="hid-add">Làm thuyết minh báo cáo tài chính</span></p>
                            <p class="click-show">
                                <span class="vie">Xem chi tiết<i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                <span class="hid">Rút gọn<i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
                            </p>
                            <div class="list-lesson">
                                <ul>
                                    <li>Bài 24: Làm thuyết minh báo cáo tài chính</li>
                                </ul>
                            </div>
                        </div>
                        <div class="part">
                            <p class="name fontSFt"><i class="fa fa-circle" aria-hidden="true"></i><span>CHƯƠNG 10</span></p>
                            <p class="title-part fontSFt">Cách Làm Sổ Theo Dõi Công Nợ. </p>
                            <p class="pre-content">Cách làm Sổ theo dõi công nợ. <span class="hid-add">Cách làm Sổ theo dõi công nợ</span></p>
                            <p class="click-show">
                                <span class="vie">Xem chi tiết<i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                <span class="hid">Rút gọn<i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
                            </p>
                            <div class="list-lesson">
                                <ul>
                                    <li>Bài 25: Cách làm Sổ theo dõi công nợ</li>
                                </ul>
                            </div>
                        </div>
                        <div class="part">
                            <p class="name fontSFt"><i class="fa fa-circle" aria-hidden="true"></i><span>CHƯƠNG 11</span></p>
                            <p class="title-part fontSFt">Cách Làm Hợp Đồng. </p>
                            <p class="pre-content">Cách làm hợp đồng. <span class="hid-add">Cách làm hợp đồng</span></p>
                            <p class="click-show">
                                <span class="vie">Xem chi tiết<i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                <span class="hid">Rút gọn<i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
                            </p>
                            <div class="list-lesson">
                                <ul>
                                    <li>Bài 26: Cách làm hợp đồng</li>
                                </ul>
                            </div>
                        </div>
                        <div class="part">
                            <p class="name fontSFt"><i class="fa fa-circle" aria-hidden="true"></i><span>CHƯƠNG 12</span></p>
                            <p class="title-part fontSFt">Cách Làm Quyết Toán Thuế TNCN. </p>
                            <p class="pre-content">Cách làm quyết toán thuế TNCN. <span class="hid-add">Cách làm quyết toán thuế TNCN</span></p>
                            <p class="click-show">
                                <span class="vie">Xem chi tiết<i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                <span class="hid">Rút gọn<i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
                            </p>
                            <div class="list-lesson">
                                <ul>
                                    <li>Bài 27: Cách làm quyết toán thuế TNCN</li>
                                </ul>
                            </div>
                        </div>
                        <p class="name fontSFt"><i class="fa fa-circle" aria-hidden="true"></i><span>Và còn nhiều bài tập, tình huống thực tế với cách giải quyết tuyệt vời khác chờ bạn trong khóa học…</span></p>

                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <a class="rgt-now fontSFt" href="" title="ĐĂNG KÝ KHÓA HỌC CHO TÔI">ĐĂNG KÝ KHÓA HỌC CHO TÔI</a>
                </div>
            </div>
            <div class="dark">
                <img src="<?php echo base_url(); ?>public/kt510/img/shadow.png" alt="" class="img-responsive">
            </div>

        </div>

        <div class="container testimonial">
            <h1 class="fontSFt text-center" style="font-weight: bold; font-size: 30px; color: #ff0000;">LẮNG NGHE HỌC VIÊN NÓI VỀ KHÓA HỌC<br>
                THỰC HÁNH KẾ TOÁN TRÊN EXCEL</h1>
            <div class="row" style="margin: 60px 0;">
                <div class="col-sm-6 col-md-3">
                    <div class="area text-center" style="font-size: 17px;">
                        <img src="<?php echo base_url(); ?>public/kt510/img/per3.png" alt="Vũ Thị Kim Nga">
                        <p class="name-tes text-center fontSFt" style="color: #2e3d49;">Vũ Thị Kim Nga</p>
                        <p class="job-tes text-center fontSFt" style="color: #7d97ad;">Kế Toán Trưởng</p>
                        <p class="content-tes text-center fontSFt" style="color: #525c65;">Khóa thật bổ ích, qua khóa học này tôi đã học được rất nhiều kinh nghiệm trong lĩnh vực kế toán. Cám ơn cô Nhung và Lakita đã giúp tôi tiếp cận với khóa học thực tiễn này.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="area text-center" style="font-size: 17px;">
                        <img src="<?php echo base_url(); ?>public/kt510/img/per2.png" alt="Vũ Thị Kim Nga">
                        <p class="name-tes text-center fontSFt" style="color: #2e3d49;">Trịnh Văn Mãi</p>
                        <p class="job-tes text-center fontSFt" style="color: #7d97ad;">Công ty tư vấn xây dựng</p>
                        <p class="content-tes text-center fontSFt" style="color: #525c65;">Khóa học thực sự bổ ích cho nghành kế toán và doanh nghiệp hoạt động tư nhân. Mong trung tâm thường xuyên có những khóa học nâng cao về nghành nghề này để giúp doanh nghiệp vững tin hơn trong hạch toán</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="area text-center" style="font-size: 17px;">
                        <img src="<?php echo base_url(); ?>public/kt510/img/per4.png" alt="Vũ Thị Kim Nga">
                        <p class="name-tes text-center fontSFt" style="color: #2e3d49;">Vũ Thị Bích Thủy</p>
                        <p class="job-tes text-center fontSFt" style="color: #7d97ad;">Công ty cổ phần tư vấn thiết kế xây dựng và thương mại Kiến an</p>
                        <p class="content-tes text-center fontSFt" style="color: #525c65;">Khóa học rất thiết thực cho công việc kế toán, giúp cho kế toán hiểu được chi phí nào là hợp lý, chi phí nào là không hợp lý. Cám ơn cô và Lakita</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="area text-center" style="font-size: 17px;">
                        <img src="<?php echo base_url(); ?>public/kt510/img/per1.png" alt="Vũ Thị Kim Nga">
                        <p class="name-tes text-center fontSFt" style="color: #2e3d49;">Lê Thị Nhàn</p>
                        <p class="job-tes text-center fontSFt" style="color: #7d97ad;">Công ty Cổ phần Đầu tư và Xây dựng Lạc Hồng</p>
                        <p class="content-tes text-center fontSFt" style="color: #525c65;">Tôi xin gửi lời cảm ơn tới giảng viên Phạm Thị Nhung trong thời gian qua đã quan tâm, nhiệt tình hướng dẫn và giảng dạy cho tôi. Tôi đã tiếp thu được nhiều kiến thức bổ ích phục vu cho việc làm</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid quote">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div style="width: 90%; margin: auto;" class="quote-area">
                            <span>&ldquo;</span>
                            <p class="fontSFt text-center text-q">Hầu hết mọi người khi quyết định nhảy vào cuộc chơi “làm doanh nghiệp ”  đều mong muốn mình là người chiến thắng, rằng tôi sẽ về đích nhanh nhất, tôi sẽ thành công.</p>
                            <p class="fontSFt text-center text-q">Nhưng thực tế nghiệt ngã, nhiều người thậm chí còn chưa bước được nửa đường đã không bao giờ đứng lên được nữa.</p>
                            <span>&rdquo;</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <a class="rgt-now fontSFt" href="" title="ĐĂNG KÝ KHÓA HỌC CHO TÔI">ĐĂNG KÝ KHÓA HỌC CHO TÔI</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid lecture">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="text-center fontUTMHelve" style="font-size: 38px; color: white;">Thông Tin Giảng Viên</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 fontUTMHelve" style="color: white;">
                        <p style="font-size: 17.8px;">Giảng viên</p>
                        <p style="font-size: 26.7px;">Phạm Thị Nga</p>
                        <ul>
                            <li style="font-size: 17.8px;"><i class="fa fa-check-square-o" aria-hidden="true"></i><span style="padding-left: 10px; line-height: 33px;">Cư nhân kinh tế.</span></li>
                            <li style="font-size: 17.8px; margin-top: 25px"><i class="fa fa-check-square-o" aria-hidden="true"></i><span style="padding-left: 10px; line-height: 33px;">Chứng chỉ đại lý thuế</span></li>
                        </ul>
                    </div>
                    <div class="col-sm-5">
                        <img src="<?php echo base_url(); ?>public/kt510/img/lecture.jpg" alt="Phạm Thị Nhung" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid course-gui">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="text-center fontSFt" style="font-size: 30px; color: #2e3d49; font-weight: bold;">GIAO DIỆN KHÓA HỌC TRỰC TUYẾN</h3>
                    </div>
                </div>
                <img src="<?php echo base_url(); ?>public/kt510/img/course-GUI.jpg" alt="Giao diện khóa học" class="img-responsive">
            </div>
        </div>

        <div class="container-fluid vnexpress">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <img class="vnexpress-logo" src="<?php echo base_url(); ?>public/kt510/img/vnexpress-logo.png" style="border-image-outset: 5px; " alt="Tạp chí vnexpress" class="img-responsive">
                    </div>
                    <div class="col-sm-8">
                        <p class="fontSFTG2" style="font-size: 17px; font-style: italic; color: white;">Theo Vnexpress, trong 7 tháng đầu năm 2017, Cục Thuế TP. Hà Nội đã hoàn thành 11.444 cuộc thanh, kiểm tra (đạt 62,8% kế hoạch); xử lý truy thu, truy hoàn và phạt 1.503 tỷ đồng (tăng 12,6% so với cùng kỳ); giảm lỗ 1.485 tỷ đồng, giảm khấu trừ 177 tỷ đồng.</p>
                        <p class="fontSFTG2" style="font-size: 17px; font-style: italic; color: white;">Ngoài ra, 7 tháng đầu năm 2017, các đơn vị chức năng thuộc và trực thuộc Cục Thuế TP. Hà Nội đã ban hành hơn 1,3 triệu thông báo tiền nợ thuế và tiền chậm nộp thuế qua thư điện tử; hơn 12,7 nghìn quyết định cưỡng chế tài khoản đối với gần 9 nghìn đơn vị với số nợ 5.786 tỷ đồng; cưỡng chế đối với 3.167 đơn vị với số tiền nợ là 3.179 tỷ đồng; công khai 7 đợt danh sách 939 đơn vị, dự án nợ tiền thuế phí, tiền thuê đất với tổng số nợ là 2.857 tỷ đồng</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container fontSFt" style="padding: 20px 10px;">
            <p style="font-size: 17px; font-weight: bold;">Thà bỏ một ít thời gian tham dự khóa học, một chút tiền để đi học còn hơn mất hàng tỷ đồng vì đi sai “luật chơi”.</p>
            <p style="font-size: 17px">Chắc bạn hiểu ý của chúng tôi?</p>
            <p style="font-size: 17px; font-weight: bold;">P/s: Lakita không dám hứa mức giá ưu đãi và toàn bộ quà tặng trên sẽ còn khi bạn quay lại một ngày nào đó. Vì vậy hãy đăng ký để giữ chỗ ngay!</p>
        </div>

        <div class="container-fluid register-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-md-offset-2" style="background: rgba(0,0,0,0.61); border-radius: 5px; border: 1px solid white;">
                        <div class="row">
                            <div class="col-sm-6 sale-area">
                                <div>
                                    <p style="color: white; font-size: 19.6px; text-align: center; margin-top: 10px;">Đăng kí học ngay nhận ngay ưu đãi</p>
                                    <div style="text-align: center;"><img src="<?php echo base_url(); ?>public/kt310/img/sale-50.png" alt="Khuyến mại 50%"></div>
                                    <div style="width: 80%; margin: auto;">
                                        <div class="time-remain">
                                            <div>
                                                THỜI GIAN CÒN LẠI
                                            </div>
                                        </div>
                                        <div class="time-countdown">
                                            <div class="row">
                                                <div class="col-xs-3" style="padding: 0;">
                                                    <div class="num-day" style="width: 60px; height: 60px; border-radius: 50%; background: #009966; color: white; font-size: 40px; margin: auto; text-align: center; line-height: 70px;">
                                                        00
                                                    </div>
                                                    <p class="time-num text-center">NGÀY<p>
                                                </div>
                                                <div class="col-xs-3" style="padding: 0;">
                                                    <div class="num-hour" style="width: 60px; height: 60px; border-radius: 50%; background: #009966; color: white; font-size: 40px; margin: auto; text-align: center; line-height: 70px;">
                                                        12
                                                    </div>
                                                    <p class="time-num text-center">GIỜ<p>
                                                </div>
                                                <div class="col-xs-3" style="padding: 0;">
                                                    <div class="num-minute" style="width: 60px; height: 60px; border-radius: 50%; background: #009966; color: white; font-size: 40px; margin: auto; text-align: center; line-height: 70px;">
                                                        15
                                                    </div>
                                                    <p class="time-num text-center">PHÚT<p>
                                                </div>
                                                <div class="col-xs-3" style="padding: 0;">
                                                    <div class="num-second" style="width: 60px; height: 60px; border-radius: 50%; background: #009966; color: white; font-size: 40px; margin: auto; text-align: center; line-height: 70px;">
                                                        04
                                                    </div>
                                                    <p class="time-num text-center">GIÂY<p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="price-sale">
                                            <p class="text-center">Giá ưu đãi: <span>895.000đ</span> <span>495.000đ</span></p>
                                        </div>

                                        <div class="text-center info-sale">
                                            Sau khi đăng ký mua khóa học, bộ phận CSKH của Lakita sẽ liên hệ với bạn để xác nhận thông tin và nhân viên bưu điện sẽ giao khóa học tận nơi cho bạn. Bạn chỉ phải trả tiền khi nhận được khóa học.
                                        </div>

                                        <div style="width: 100%; border-top: 2px solid white; font-size: 11.43px; color: white;" class="text-center">
                                            MIỄN PHÍ GIAO HÀNG TRÊN TOÀN QUỐC
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 form-rgt">
                                <div style="width: 80%; margin: auto;">
                                    <div><img src="<?php echo base_url(); ?>public/kt310/img/logo-rgt.png" alt="Lakita.vn" style="max-width: 100%;"></div>
                                    <p class="text-center" style="margin-bottom: 20px;">Nhập thông tin đăng ký</p>
                                    <form class="LeadPanel_form promo-panel_action e_submit e_form_submit" action="<?php echo $code_ladingpage.'/';?>thank-you.html" method="post" name="fr_register" accept-charset="utf-8">
                                        <input type="text" name="name" value="" placeholder="Họ tên">
                                        <input type="email" name="email" value="" placeholder="Email">
                                        <input type="tel" name="phone" value="" placeholder="Số điện thoại">
                                        <input type="text" name="dia_chi" value="" placeholder="Địa chỉ">
                                        <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                        <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                        <input type="submit" class="LeadPanel_action button radius e_btn_submit reg_bt" name="submit" value="Đăng ký ngay">
                                    </form>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p class="text-center">Địa chỉ: Phòng 701 CT1 - Chung cư Skylight - Ngõ Hòa Bình 6 - 125D Minh Khai - Q. Hai Bà Trưng - Hà Nội</p>
            <p class="text-center">Hotline: 1900 636 195 - 04 7306 2468</p>
            <p class="text-center">Hỗ trợ: cskh@lakita.vn</p>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row">
                            <div class="logo-footer pull-left" style="width: 35%;">
                                <img src="<?php echo base_url(); ?>public/kt340/img/logo-footer.png" alt="Lakita.vn" class="pull-right">
                            </div>
                            <div class="footer-c pull-left"  style="width: 63%; margin-left: 1%;">
                                <ul style="color: white; font-size: 12.54px;">
                                    <li>&copy; Copyrigh 2016 Lakita.vn, All rights reserved</li>
                                    <li>&reg; Lakita.vn giữ bản quyền nội dung trên website này.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


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
                z-index: 999999;
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
                background: url(https://lakita.vn/styles/v2.0/img/loading.gif) center center no-repeat;
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
        <!-- *************************************************************Popup (end)**********************************************************************-->

        <script type="text/javascript">
            $('.vie').click(function () {
                $('.list-lesson').slideUp('fast');
                $('.hid').css('display', 'none');
                $('.hid-add').css('display', 'none');
                $('.vie').css('display', 'block');
                $(this).parent().parent().children('.pre-content').children('.hid-add').css('display', 'inline');

                $(this).parent().parent().children('.list-lesson').slideDown('fast');
                $(this).parent().children('.hid').css('display', 'block');
                $(this).css('display', 'none');
            });

            $('.hid').click(function () {
                $('.list-lesson').slideUp('fast');

                $(this).parent().parent().children('.pre-content').children('.hid-add').css('display', 'none');
                $(this).parent().children('.vie').css('display', 'block');
                $(this).css('display', 'none');
            });
        </script>
        <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-width="100%" data-numposts="5"></div>
    </body>
</html>