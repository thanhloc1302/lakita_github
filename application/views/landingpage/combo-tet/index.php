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
        <title>COMBO QUÀ KHỦNG TẾT NGUYÊN ĐÁN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="fb:admins" content="100001432238036"/>
        <meta property="fb:app_id" content="315347858825221" />
        <meta property="og:type"   content="website" />
        <meta property="og:url" content="https://lakita.vn/combo-qua-khung-tet-nguyen-dan.html" />
        <meta property="og:title" content="COMBO QUÀ KHỦNG TẾT NGUYÊN ĐÁN" />
        <meta property="og:image" content="https://lakita.vn/public/combo-tet/img/tet.jpg" />
        <meta property="og:description" content="Tết gần kề. Đăng ký liền tay, nhận ngay combo quà khủng!" />
        <meta name="description" content="Hệ thống đào tạo trực tuyến lakita – Cùng bạn vươn xa Học Online qua Video bài giảng - Học Online thỏa thích mọi lúc, mọi nơi - Học trên mọi thiết bị - Học với giảng viên, chuyên gia hàng đầu trong lĩnh vực - Hóa đơn chứng từ - Làm chủ hóa đơn chứng từ" />
        <link rel="icon" href="https://lakita.vn/data/source/setting/favicon.png" />
        <meta name="viewport" id="lp-viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url() ?>public/combo-tet/style.css">
        <script src="https://use.fontawesome.com/0b216c5f11.js"></script>

        <script src="<?php echo base_url(); ?>public/my.js?ver=<?php echo _VER_CACHED_ ?>" type="text/javascript"></script>
        <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>



    </style>
</head>
<body>
  <?php include_once("plugin/messenger.php") ?>
    <div class="row top">
        <div style="margin-top: 20px">
            <div class="col-md-2 col-xs-2 col-sm-2 col-xs-2 col-sm-2 col-lg-2">
                <img src="<?php echo base_url() ?>public/combo-tet/img/logo.png" width="100%" height="100%" style="margin-left: 20px">
            </div>
            <div class="col-md-3 col-xs-12 col-sm-12  col-md-offset-7 ">
            </div>

        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 col-sm-12">
            <div class="col-md-4 col-xs-4 col-sm-4">
                <img src="<?php echo base_url() ?>public/combo-tet/img/lefttree.png" width="100%" height="100%">
            </div>
            <div class="col-md-4 col-xs-4 col-sm-4">
                <img src="<?php echo base_url() ?>public/combo-tet/img/text-top.png" width="100%" height="100%">
            </div>
            <div class="col-md-4 col-xs-4 col-sm-4">
                <img src="<?php echo base_url() ?>public/combo-tet/img/righttree.png" width="100%" height="100%">
            </div>
        </div>

        <div class="col-md-12 col-xs-12 col-sm-12 bot-header">
            <div class="col-md-3 col-xs-3 col-sm-3 text-top">
                <img src="<?php echo base_url() ?>public/combo-tet/img/chukhuyenmai.png" width="120%" height="150%">
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12 col-md-offset-1 form-top">
                <h1>ĐĂNG KÍ NHẬN TƯ VẤN TỪ LAKITA</h1>
                <form class="LeadPanel_form promo-panel_action e_submit e_form_submit" role="form"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                    <div class="form-group">
                        <input class="form-control" name="name" placeholder="Họ và tên">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" placeholder="Nhập Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="phone" placeholder="Nhập Số Điện Thoại">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="address" placeholder="Nhập địa chỉ">
                    </div>
                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger  e_btn_submit" style="color: #f4e46d">Đăng Kí</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="row content-1">
        <div class="col-md-12 col-xs-12 col-sm-12" style="margin-top: 30px">
        </div>
        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="col-md-3 col-xs-3 col-sm-3 img2">
                <img src="<?php echo base_url() ?>public/combo-tet/img/tree2.png" width="100%" height="100%">
            </div>
            <div class="col-md-9 col-xs-12">
                <div class="col-md-10  c1-a" >
                    <div class="text-1">
                        <h3>Tết này có gì đặc biệt</h3>
                        <span>Nhân dịp chào đón TẾT NGUYÊN ĐÁN MẬU TUẤT, nhận ngay <b>QUÀ KHỦNG</b> từ LAKITA.<br>
                            Giảm giá khủng</span> <b>tất cả các khóa học KẾ TOÁN</b> <span>và còn nhiều ưu đãi hơn
                            khi mua theo combo bất kì!</span>
                    </div>
                </div>
                <div class="col-md-8">
                    <br>

                    <div class="c1-text">
                        <h1><b>Nhanh tay lên!</b></h1>
                        Nếu bạn không muốn bở lỡ cơ hội
                    </div>

                </div>
            </div>
            <div>
                <div class="col-md-12 col-xs-12 col-sm-12 dbox ">
                    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 box"><br>
                        <b><h3 class="h">Giảm giá khủng</h3></b><br>
                        <span class="x">Giảm giá khùng <span style="color: #ab1519;font-weight: bold">từ 58% đến 72%</span> áp dụng với tất cả 
                            các khóa học đơn lẻ cũng như combo bất kì
                        </span>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 box">
                        <br>

                        <b><h3 class="h">Giảng viên uy tín</h3></b><br>
                        <span class="x">
                            Đội ngũ giảng viên <span style="color: #ab1519;font-weight: bold">uy tín, nhiệt tình </span>và có kiến thức chuyên 
                            sâu về các lĩnh vực đảm nhiệm.<br>
                            Cơ hội nhận được <span style="color: #ab1519;font-weight: bold">
                                tư vấn trao đổi trực tiếp với giảng viên 
                            </span> về chuyên môn: kiến thức trong bài học cũng như kiến thức 
                            gặp phải khi thực hành trong thực tế.
                        </span>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 box">
                        <br>
                        <b><h3 class="h" style="margin-top: 10px;">Dịch vụ <br> chuyên nghiệp</h3></b>
                        <span class="x" >Giảm giá<br>
                            <span style="color: #ab1519; font-weight: bold">chất lượng dịch vụ không giảm!</span>
                            Đội ngũ tư vấn và hỗ trợ theo sát khách hàng và giảu đáp mọi thắc mắc trong quá trình học tập trên hệ thống cũng như thực tế công việc
                        </span>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <div class="row content-2">
        <div class="col-md-12 col-xs-12 col-sm-12 text2 ">
            <br>
            <span>

                6 COMBO HỮU ÍCH NHẤT <br>CHO CHUYÊN NGHÀNH KẾ TOÁN
            </span>

        </div>
        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="col-md-12 col-xs-12 col-sm-12 text3">
                <br><br>
                <img src="<?php echo base_url() ?>public/combo-tet/img/xu.png" style="margin-left: 50px" height="50px">
                <span>Combo dành cho người mới bắt đầu</span>
            </div>

        </div>
        <div class="col-md-12 col-xs-12 col-sm-12 a">
            <div class="col-md-3 col-sm-6 col-md-offset-2 ">
                <div class="border-content-2 ">
                    <div class="col-md-12">
                        <br><br><span style="font-size:25px">COMBO 1</span><br><br>
                        <p style="font-size: 20px">Kế toán dành cho người mới bắt đầu và Trọn bộ lập BCTC<p>

                        <strike style="font-size: 30px;">940.000Đ</strike><br>
                        <spam style="font-size: 20px;">chỉ còn</spam><br><span style="color: #e4ff00;font-size: 30px;">645.000Đ</span>
                    </div>
                </div>
                <div>
                    <a href="#e_form_submit"><button type="button" combo="Combo1: Kế toán dành cho người mới bắt đầu và Trọn bộ lập BCTC" 
                                                     class="cb btn btn-danger col-md-6 col-sm-6  col-xs-6 col-md-offset-3 col-ms-offset-3 col-xs-offset-3" 
                                                     style="color: #f4e46d; margin-bottom: 10px; margin-top: 2%">Đăng Kí Ngay</button></a></div>
            </div>

            <div class="col-md-3 col-sm-6 col-md-offset-2">
                <div class="border-content-2 ">
                    <br><br><span style="font-size:25px">COMBO 2</span><br><br>
                    <p style="font-size: 20px">Kế toán dành cho người mới bắt đầu và Quyết toán thuế từ A đến Z<p>

                    <strike style="font-size: 30px;">840.000Đ</strike><br>
                    <spam style="font-size: 20px;">chỉ còn</spam><br><span style="color: #e4ff00;font-size: 30px;">645.000Đ</span>
                </div>
                <a href="#e_form_submit"><button type="submit" combo="Combo2: Kế toán dành cho người mới bắt đầu và Quyết toán thuế từ A đến Z" class="cb btn btn-danger col-md-6 col-sm-6  col-xs-6 col-md-offset-3 col-ms-offset-3 col-xs-offset-3" style="color: #f4e46d; margin-bottom: 10px; margin-top: 2%">Đăng Kí Ngay</button></a>
            </div>

        </div>
        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="col-md-12 col-xs-12 text3">
                <br><br>
                <img src="<?php echo base_url() ?>public/combo-tet/img/xu.png" style="margin-left: 50px" height="50px">
                <span>Combo nghiệp vụ Báo cáo tài chính và Quyết toán thuế</span>
            </div>

        </div>
        <div class="col-md-12 col-xs-12 col-sm-12 b">

            <div class="col-md-3 col-sm-6 col-md-offset-1">
                <div class="border-content-2 ">
                    <br><br><span style="font-size:25px">COMBO 3</span><br><br>
                    <p style="font-size: 20px">Kế toán thuế từ A đến Z và Trọn bộ lập BCTC<p>
                        <br>
                    <strike style="font-size: 30px;">890.000Đ</strike><br>
                    <spam style="font-size: 20px;">chỉ còn</spam><br><span style="color: #e4ff00;font-size: 30px;">645.000Đ</span>

                </div>
                <a href="#e_form_submit"><button type="submit" combo="Combo3: Kế toán thuế từ A đến Z và Trọn bộ lập BCTC" class="cb btn btn-danger col-md-6 col-sm-6  col-xs-6 col-md-offset-3 col-ms-offset-3 col-xs-offset-3"  style="color: #f4e46d; margin-bottom: 10px; margin-top: 2%">Đăng Kí Ngay</button></a>
            </div>

            <div class="col-md-3 col-sm-6 col-md-offset-1 ">
                <div class="border-content-2 ">
                    <br><br><span style="font-size:25px">COMBO 4</span><br><br>
                    <p style="font-size: 18px">Kĩ thuật Quyết toán thuế công tác chuẩn bị cho Thanh Tra Thuế, Tối ưu thế và Trọn bộ lập BCTC<p>

                    <strike style="font-size: 30px;">940.000Đ</strike><br>
                    <spam style="font-size: 20px;">chỉ còn</spam><br><span style="color: #e4ff00;font-size: 30px;">645.000Đ</span>

                </div>
                <a href="#e_form_submit"><button type="submit" combo="Combo4: Kĩ thuật Quyết toán thuế công tác chuẩn bị cho Thanh Tra Thuế, Tối ưu thế và Trọn bộ lập BCTC" class="cb btn btn-danger col-md-6 col-sm-6  col-xs-6 col-md-offset-3 col-ms-offset-3 col-xs-offset-3" style="color: #f4e46d; margin-bottom: 10px; margin-top: 2%">Đăng Kí Ngay</button></a>
            </div>

            <div class="col-md-3 col-sm-6 col-sm-offset-3 col-md-offset-1">
                <div class="border-content-2 ">
                    <br><br><span style="font-size:25px">COMBO 5</span><br><br>
                    <p style="font-size: 20px">Hướng dẫn kê khai và quyết toán thuế thu nhập cá nhân và Trọn bộ lập BCTC<p>

                    <strike style="font-size: 30px;">940.000Đ</strike><br>
                    <spam style="font-size: 20px;">chỉ còn</spam><br><span style="color: #e4ff00;font-size: 30px;">645.000Đ</span>

                </div>
                <a href="#e_form_submit"><button type="submit" combo="Combo5: Hướng dẫn kê khai và quyết toán thuế thu nhập cá nhân và Trọn bộ lập BCTC" class="cb btn btn-danger col-md-6 col-sm-6  col-xs-6 col-md-offset-3 col-ms-offset-3 col-xs-offset-3" style="color: #f4e46d; margin-bottom: 10px; margin-top: 2%">Đăng Kí Ngay</button></a>
            </div>
        </div>

        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="col-md-12 col-xs-12 col-sm-12 text3">
                <br><br>
                <img src="<?php echo base_url() ?>public/combo-tet/img/xu.png" style="margin-left: 50px" height="50px">
                <span>Combo nghiệp vụ Báo cáo tài chính và Quyết toán thuế</span>
            </div>

        </div>
        <div class="col-md-12 col-xs-12 col-sm-12 c">
            <div class="col-md-3 col-sm-6 col-md-offset-5 col-sm-offset-3 ">
                <div class=" border-content-2 ">
                    <br><br><span style="font-size:25px">COMBO 6</span><br><br>
                    <p style="font-size: 20px">Quyết toán thuế từ A đến Z và Đào tạo kỹ thuật Quyết toán thuế, công tác chuẩn bị cho Thanh Tra Thuế, Tối ưu thuế <p>
                        <br>
                    <strike style="font-size: 30px;">790.000Đ</strike><br>
                    <spam style="font-size: 20px; ">chỉ còn</spam><br><span style="color: #e4ff00;font-size: 30px;">545.000Đ</span>
                </div>
                <a href="#e_form_submit"><button type="submit" combo="Combo6: Quyết toán thuế từ A đến Z và Đào tạo kỹ thuật Quyết toán thuế, công tác chuẩn bị cho Thanh Tra Thuế, Tối ưu thuế" class="cb btn btn-danger col-md-6 col-sm-6  col-xs-6 col-md-offset-3 col-ms-offset-3 col-xs-offset-3" style="color: #f4e46d; margin-bottom: 10px; margin-top: 2%">Đăng Kí Ngay</button></a>
            </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 20px"></div>
    </div>
    <div class="row content-3">
        <div class="col-md-12 col-xs-12 col-sm-12">
            <img src="<?php echo base_url() ?>public/combo-tet/img/boder-top-ct3.png" height="100%" width="100%">
        </div>
        <div class="col-md-6 col-xs-6 col-sm-6 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 text4">
            <h4>Đảm bảo chất lượng và chuyên môn qua từng bài học bởi</h4>
            <h1>Đội ngủ giảng viên giàu<br> kinh nghiệm</h1>
        </div>
        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <br><br>
                <img src="<?php echo base_url() ?>public/combo-tet/img/xu2.png" style="margin-left: 50px" height="50px">
                <span class="text5">Lĩnh vực kế toán</span>
            </div>

        </div>
        <div class="col-md-12 col-xs-12 col-sm-12 ">
            <div class="col-md-3 col-sm-4 col-md-offset-1 text6">
                <img src="<?php echo base_url() ?>public/combo-tet/img/qt.png" width="100%" height="100%" style="cursor: pointer" data-toggle="modal" data-target="#TrungHQ">
                <p> Tiến Sĩ</p>
                <span style="font-weight: bold;"> HOÀNG QUANG TRUNG</span>

            </div>
            <div class="modal fade" id="TrungHQ" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <img src="<?php echo base_url() ?>public/combo-tet/img/qt.png" width="100%" height="100%">
                                </div>
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <p> <i class="fa fa-check" aria-hidden="true"></i>Giảng viên Đại Học </p>
                                    <p> <i class="fa fa-check" aria-hidden="true"></i>Giám đốc Công ty DV kế toán Việt Nam - VINAFAS </p>
                                    <p> <i class="fa fa-check" aria-hidden="true"></i>Chuyên gia tư vấn và đào tạo quản lý tài chính các dự án của Bộ Kế Hoạch & Đầu Tư, Ngân hàng Thế Giới Tại Việt Nam</p>
                                    <p> <i class="fa fa-check" aria-hidden="true"></i>Thành viên hiệp hội kiểm toán, kế toán các nước ASEAN</p>
                                    <p> <i class="fa fa-check" aria-hidden="true"></i>Được bình chọn là 1 trong 50 chuyên gia tư vấn kế toán, thuế thành công nhất hiện nay</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-4 col-md-offset-1 text6">
                <img src="<?php echo base_url() ?>public/combo-tet/img/tho.png" width="100%" height="100%" style="cursor: pointer" data-toggle="modal" data-target="#ThoDT">
                <p>Kế toán trưởng</p>
                <span style="font-weight: bold;">ĐÀO THỊ THƠ</span>
            </div>
            <div class="modal fade" id="ThoDT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <img src="<?php echo base_url() ?>public/combo-tet/img/tho.png" width="100%" height="100%">
                                </div>
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <p> <i class="fa fa-check" aria-hidden="true"></i>  Kế toán Trưởng tại công ty 100% vốn của Pháp tại Hà Nội </p>
                                    <p> <i class="fa fa-check" aria-hidden="true"></i>  Đã có hơn 6 năm kinh nghiệm trong lĩnh vực kế toán, 
                                        đã đi qua những công việc của Kế toán viên, 
                                        kế toán tổng hợp và đang là Kế toán trưởng tại công ty TNHH Geroc – công ty 100% vốn của Pháp tại Việt Nam. 
                                        Cung cấp dịch vụ tư vấn đầu tư cho các Tập đoàn nước ngoài vào Việt Nam </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-4 col-md-offset-1 text6">
                <img src="<?php echo base_url() ?>public/combo-tet/img/nhu.png" width="100%" height="100%" style="cursor: pointer" data-toggle="modal" data-target="#NhungPT">
                <p>Giảng viên</p>
                <span style="font-weight: bold;">PHẠM THỊ NHUNG</span>
            </div>
            <div class="modal fade" id="NhungPT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <img src="<?php echo base_url() ?>public/combo-tet/img/nhu.png" width="100%" height="100%">
                                </div>
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <p>Kế toán trưởng tại chi nhánh công ty TNHH thực phẩm và giải khát "Cánh diều xanh", thuộc tập đoàn IPP liên Thái Bình Dương </p>
                                    <p class="fontsize18"> <strong> Chứng chỉ / Kinh nghiệm </strong> </p>
                                    <p> 
                                        <i class="fa fa-check" aria-hidden="true"></i>   
                                        Chứng chỉ kế toán quốc tế CAT/ACCA  do Hiệp hội kế toán công chứng Anh Quốc Cấp bằng.
                                        Kế toán tổng hợp tại chi nhánh công ty TNHH thực phẩm và giải khát "Cánh diều xanh", 
                                        thuộc tập đoàn IPP liên Thái Bình Dương 
                                    </p>
                                    <p> 
                                        <i class="fa fa-check" aria-hidden="true"></i> 
                                        4 năm ở vị trí kế toán tổng hợp kiêm phụ trách toàn bộ mảng thuế. 
                                    </p>
                                    <p>
                                        <i class="fa fa-check" aria-hidden="true"></i> 
                                        Kế toán trưởng công ty TNHH Emotive 100% vốn của Mỹ
                                    </p>
                                    <p>
                                        <i class="fa fa-check" aria-hidden="true"></i> 
                                        Tư vấn kế toán, thuế cho nhiều doanh nghiệp trong nước 
                                        và doanh nghiệp có vốn đầu tư nước ngoài FDI 
                                    </p>
                                    <p>
                                        <i class="fa fa-check" aria-hidden="true"></i> 
                                        04 năm kế toán tổng hợp và thuế Chuỗi nhà hàng ăn nhanh (BurgerKing, Pizza Domino, 
                                        Gà Popeys, Dunkin Donut) thuôc tập đoàn Liên Thái Bình Dương (IPP group)
                                    </p>
                                    <p>
                                        <i class="fa fa-check" aria-hidden="true"></i> 
                                        Tham gia nhiều kỳ quyết toán, hoàn thuế giá trị gia tăng
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div>
            <div class="col-md-3 col-sm-4 col-md-offset-1 text6">
                <br><br>
                <img src="<?php echo base_url() ?>public/combo-tet/img/xu2.png" height="50px">
                <span class="text5">Lĩnh vực Excel</span>
                <br><br>		
                <img src="<?php echo base_url() ?>public/combo-tet/img/tuu.png" width="100%" height="100%" style="cursor: pointer" data-toggle="modal" data-target="#TuND">
                <p>Thạc Sĩ</p>
                <span style="font-weight: bold;"> NGUYỄN DANH TÚ</span>

            </div>
            <div class="modal fade" id="TuND" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <img src="<?php echo base_url() ?>public/combo-tet/img/tuu.png" width="100%" height="100%">
                                </div>
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <p> 10 năm kinh nghiệm giảng dạy tại trường Đại học Bách Khoa Hà Nội.
                                        10 năm kinh nghiệm làm việc ở các mảng CNTT (các hệ thống MIS, DataMining...),
                                        tài chính (quỹ, chứng khoán, kế hoạch tài chính...), đào tạo trực tuyến BKIndex,
                                        Giảng viên Đại học Bách Khoa Hà Nội,
                                        Phó Tổng Giám Đốc sản phẩm Tiếng Anh, tổ hợp giáo dục vào đào tạo TOPICA </p>
                                    <p class="fontsize18"> <strong> Chứng chỉ </strong> </p>
                                    <p> <i class="fa fa-check" aria-hidden="true"></i> 10 năm kinh nghiệm giảng dạy tại trường Đại học Bách Khoa Hà Nội </p>
                                    <p> <i class="fa fa-check" aria-hidden="true"></i> 10 năm kinh nghiệm làm việc ở các mảng CNTT (các hệ thống MIS, DataMining...),
                                        tài chính (quỹ, chứng khoán, kế hoạch tài chính...), đào tạo trực tuyến. </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-md-offset-1 text6">
                <br><br>
                <img src="<?php echo base_url() ?>public/combo-tet/img/xu2.png" height="50px">
                <span class="text5">Lĩnh vực nhân sự</span>
                <br><br>		
                <img src="<?php echo base_url() ?>public/combo-tet/img/trang.png" width="100%" height="100%" style="cursor: pointer" data-toggle="modal" data-target="#TrangNT">
                <p>Chuyên gia tư vấn</p>
                <span style="font-weight: bold;">NGUYỄN THỊ TRANG</span>
            </div>
            <div class="modal fade" id="TrangNT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <img src="<?php echo base_url() ?>public/combo-tet/img/trang.png" width="100%" height="100%">
                                </div>
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <p><b>Chuyên gia Nguyễn Thị Trang</b></p><br>

                                    <p><i class="fa fa-check" aria-hidden="true"></i> 12 năm kinh nghiệm tư vấn luật doanh nghiệp, luật sở hữu trí tuệ, luật lao động, BHXH.</p>

                                    <p><i class="fa fa-check" aria-hidden="true"></i> 8 năm kinh nghiệm làm Trưởng phòng HCNS.</p>

                                    <p><i class="fa fa-check" aria-hidden="true"></i> 8 năm kinh nghiệm tư vấn xây dựng hệ thống lương, thưởng trong doanh nghiệp.

                                    <p><i class="fa fa-check" aria-hidden="true"></i> 10 năm kinh nghiệm tư vấn thủ tục và cung cấp dịch vụ BHXH trong doanh nghiệp.</p>

                                    <p><i class="fa fa-check" aria-hidden="true"></i> 8 năm kinh nghiệm đào tạo nghề nhân sự và pháp luật lao động, luật BHXH cho doanh nghiệp</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-md-offset-1 text6">
                <br><br>
                <img src="<?php echo base_url() ?>public/combo-tet/img/xu2.png" height="50px">
                <span class="text5">Lĩnh vực Yoga</span>
                <br><br>		
                <img src="<?php echo base_url() ?>public/combo-tet/img/hung.png" width="100%" height="100%" style="cursor: pointer" data-toggle="modal" data-target="#HungDV">
                <p>Thầy</p>
                <span style="font-weight: bold;">ĐẶNG VĂN HÙNG</span>
            </div>
            <div class="modal fade" id="HungDV" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <img src="<?php echo base_url() ?>public/combo-tet/img/hung.png" width="100%" height="100%">
                                </div>
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <p> <b>Thầy Đặng Hùng - Giám đốc học viện Yoga Việt Nam, Ủy viên thường trực hiệp hội Yoga trị liệu Châu Á </b></p>

                                    <p> <i class="fa fa-check" aria-hidden="true"></i> Đã có 21 năm nghiên cứu và thực hành về Yoga.</p>

                                    <p> <i class="fa fa-check" aria-hidden="true"></i> Đã có 15 năm đào tạo giáo viên và chia sẻ Yoga trong nước và ngoài nước.</p>

                                    <p> <i class="fa fa-check" aria-hidden="true"></i> Tốt nghiệp Viện Toán học Đại học Bách khoa Hà Nội năm 2010.</p>

                                    <p> <i class="fa fa-check" aria-hidden="true"></i> Năm 2012 đạt thành tích xuất sắc về dự án “ Phát triển Yoga Việt Nam” do đại học Pháp ITIN tổ chức.</p>

                                    <p> <i class="fa fa-check" aria-hidden="true"></i> Năm 2013 nhận bằng trị liệu cao cấp do Đại học trị liệu Yoga SVYSA (Ấn Độ) tổ chức.</p>

                                    <p> <i class="fa fa-check" aria-hidden="true"></i> Năm 2014 đạt chứng nhận xuất săc về thiền định do Học viện thiền đinh Ấn Độ tổ chức.</p>

                                    <p> <i class="fa fa-check" aria-hidden="true"></i> Năm 2016 được Sở Y tế Hà Tĩnh trao bằng khen về thành tích xuất sắc trong “kết hợp Yoga và phục hồi chức năng điều trị có hiệu quả cho người bệnh” tại Bệnh viện đa khoa Thành phố Hà Tĩnh.</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row content-4">
        <div class="col-md-12"> 
            <div class="col-md-4 col-sm-10 col-xs-10 over">
                <div class="row">
                    <div class="col-md-12 ">
                        <div>
                            <h1 style="color: white">ƯU ĐÃI</h1>
                            <div style="text-align: center; color: red"><h1><b>58% - 72%</b></h1></div>
                            <div style="color: white;font-size: 19px;">
                                <p>Đối với khóa học lẻ hoặc<br> combo bất kì</p>
                                <hr>
                                <p>Chương trình chỉ áp dụng với khóa học đăng ký trước ngày 01/01/2018</p>
                                <hr>
                                <p style="text-align: left;">Sau khi đăng ký mua khóa học bộ phận CSKH của Lakita sẽ liên hệ với bạn để xác nhận thông tin và nhân viên bưu điện sẽ giao khóa học tận nơi cho bạn. Bạn chỉ phải trả tiền khi nhận được khóa học.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-5 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                <div style="width: 100%; margin:5%;color: white;text-align: center;">
                    <h2>Cơ hộ lớn nhất trong năm dành cho bạn!</h2>
                    <p class="text-center" style="margin-bottom: 20px;">Còn chần chừ gì nữa mà không nhanh tay nắm bắt<br>cơ hội nâng cao nghiệp vụ, thẳng tiến trong công việc và sự nghiệp?</p>
                    <h1>NHANH TAY LÊN!</h1>
                    <div class="col-md-6 col-md-offset-3">
                        <div>
                            <div class="row">
                                <div class="col-xs-3" style="padding: 0;">
                                    <div class="num-day" style="width: 60px; height: 60px; border-radius: 50%; background: #f43737; color: white; font-size: 40px; margin: auto; text-align: center; line-height: 50px;">
                                        00
                                    </div>
                                    <p class="time-num text-center">Ngày<p>
                                </div>
                                <div class="col-xs-3" style="padding: 0;">
                                    <div class="num-hour" style="width: 60px; height: 60px; border-radius: 50%; background: #f43737; color: white; font-size: 40px; margin: auto; text-align: center; line-height: 50px;">
                                        00
                                    </div>
                                    <p class="time-num text-center">Giờ<p>
                                </div>
                                <div class="col-xs-3" style="padding: 0;">
                                    <div class="num-minute" style="width: 60px; height: 60px; border-radius: 50%; background: #f43737; color: white; font-size: 40px; margin: auto; text-align: center; line-height: 50px;">
                                        00
                                    </div>
                                    <p class="time-num text-center">Phút<p>
                                </div>
                                <div class="col-xs-3" style="padding: 0;">
                                    <div class="num-second" style="width: 60px; height: 60px; border-radius: 50%; background: #f43737; color: white; font-size: 40px; margin: auto; text-align: center; line-height: 50px;">
                                        00
                                    </div>
                                    <p class="time-num text-center">Giây<p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="LeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                        <div class="col-md-6 form-group form-group-lg">
                            <input class="form-control" type="text" name="name" value="" placeholder="Họ và tên">
                        </div>
                        <div class="col-md-6 form-group form-group-lg">
                            <input class="form-control" type="tel" name="phone" value="" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="col-md-12 form-group form-group-lg">
                            <input class="form-control" type="email" name="email" value="" placeholder="Nhập Email">
                        </div>
                        <div class="col-md-12 form-group form-group-lg">
                            <input class="form-control" type="text" name="address" value="" placeholder="Nhập địa chỉ">
                        </div>
                        <div class="col-md-12 form-group form-group-lg">
                            <select id="select_combo" class="form-control" name="select_combo">
                                <option value="#" selected="true">Combo bạn muốn lựa chọn</option>
                                <option value="Combo1: Kế toán dành cho người mới bắt đầu và Trọn bộ lập BCTC">Combo 1</option>
                                <option value="Combo2: Kế toán dành cho người mới bắt đầu và Quyết toán thuế từ A đến Z">Combo 2</option>
                                <option value="Combo3: Kế toán thuế từ A đến Z và Trọn bộ lập BCTC">Combo 3</option>
                                <option value="Combo4: Kĩ thuật Quyết toán thuế công tác chuẩn bị cho Thanh Tra Thuế, Tối ưu thế và Trọn bộ lập BCTC">Combo 4</option>
                                <option value="Combo5: Hướng dẫn kê khai và quyết toán thuế thu nhập cá nhân và Trọn bộ lập BCTC">Combo 5</option>
                                <option value="Combo6: Quyết toán thuế từ A đến Z và Đào tạo kỹ thuật Quyết toán thuế, công tác chuẩn bị cho Thanh Tra Thuế, Tối ưu thuế">Combo 6</option>
                            </select>
                        </div>
                        <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                        <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-danger btn-block e_btn_submit">Đăng kí ngay</button>
                        </div>

                    </form>	
                </div>
            </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 20px"></div>
    </div>
    <div id="e_form_submit"></div>
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
            background: url(https://www.pedul.com/images/loading.gif) center center no-repeat;
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
    <div class="container">
        <div class="fb-comments" data-href="https://lakita.vn/combo-qua-khung-tet-nguyen-dan.html" data-width="100%" data-numposts="10" data-order-by="reverse_time"></div>
    </div>


    <script>
        $(".cb").on('click', function () {
            var cb = $(this).attr('combo');
            $("#select_combo").val(cb);
        });
    </script>
</body>
</html>