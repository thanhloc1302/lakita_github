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
    <head lang="en">
        <title>KHÓA HỌC KẾ TOÁN CHO NGƯỜI MỚI BẮT ĐẦU</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="fb:admins" content="100001432238036"/>
        <meta property="fb:app_id" content="315347858825221" />
        <meta property="og:type"   content="website" /> 
        <meta property="og:url" content="https://lakita.vn/ke-toan-cho-nguoi-moi-bat-dau-hanhnm.html" />
        <meta property="og:title" content="KHÓA HỌC KẾ TOÁN CHO NGƯỜI MỚI BẮT ĐẦU - lakita.vn" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/360x260/5f09062860a4b078b885d98539897b3e-1513246709.jpg" />
        <meta property="og:description" content="Dành cho người muốn học kế toán từ đầu" />
        <meta name="description" content="Hệ thống đào tạo trực tuyến lakita – Cùng bạn vươn xa Học Online qua Video bài giảng - Học Online thỏa thích mọi lúc, mọi nơi - Học trên mọi thiết bị - Học với giảng viên, chuyên gia hàng đầu trong lĩnh vực - Hóa đơn chứng từ - Làm chủ hóa đơn chứng từ" />
        <link rel="icon" href="https://lakita.vn/data/source/setting/favicon.png" />
        <meta name="viewport" id="lp-viewport" content="width=device-width, initial-scale=1.0">
        <script>
            function ladiViewport() {
                var width = (window.outerWidth > 0) ? window.outerWidth : screen.width;
                if (width > 3000) {
                    width = width / 10;
                }
                var content = "width=device-width, initial-scale=1.0";
                var zoom = 1;
                if (width < 768) {
                    zoom = width / 375;
                    content = "width=375, initial-scale=" + zoom
                } else {
                    if (width < 960) {
                        zoom = width / 960;
                        content = "width=960, initial-scale=" + zoom
                    }
                }
                var meta = document.getElementsByTagName("meta");
                for (var i = 0; i < meta.length; i++) {
                    if (meta[i].name.toLowerCase() == "viewport") {
                        meta[i].content = content;
                    }
                }
            }
            ;
            ladiViewport();
        </script>
        <?php $this->load->view('landingpage/kt220hanhnm/css'); ?>
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
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="ladi-wraper-page">
            <div id="SECTION2" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="IMAGE150" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/23584698_920376338127716_1573861364_n-1513076747.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div><a id="BUTTON151" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">Hotline : 1900 6361 95 - 024 7306 2468</span> </a>
                    <div id="HEADLINE154" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">TRỌN BỘ KẾ TOÁN&nbsp;<br>CHO NGƯỜI MỚI BẮT ĐẦU</h2> </div>
                    <div id="LINE155" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE157" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Khóa học dành cho những ai muốn học kế toán, kế toán viên chưa có kinh nghiệm và kế toán viên muốn cập nhật, hệ thống lại kiến thức căn bản về kế toán</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION9" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="IMAGE156" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/hqt-1512975602.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE158" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">ĐÁNH GIÁ KHÓA HỌC</h2> </div>
                    <div id="HEADLINE159" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3"></h3> </div>
                    <div id="LINE163" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE162" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Giám đốc Công ty DV kế toán Việt Nam - VINAFAS</h5> </div>
                    <div id="HEADLINE161" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Tiến sĩ Hoàng Quang Trung</h5> </div>
                    <div id="HEADLINE160" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Tôi đánh giá cao sự khác biệt của khóa học này, bài giảng rất chi tiết và tận tình sẽ giúp người học nắm được và làm được thành thạo công việc của một kế toán viên.</h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION184" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE194" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">THÔNG TIN GIẢNG VIÊN</h3> </div>
                    <div id="HEADLINE195" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Đồng hành cùng bạn là ai?</h5> </div>
                    <div id="IMAGE198" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/Untitled-1-1513140474.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE199" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Giảng viên: Nguyễn Thị Nhung</h3> </div>
                    <div id="HEADLINE201" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5"></h5> </div>
                    <div id="GROUP405" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP404" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP405">
                                <div class="widget-content">
                                    <div id="SHAPE207" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP404" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(70,185,224,1)">
                                            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE206" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP404" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(70,185,224,1)">
                                            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="HEADLINE205" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP405" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Chứng chỉ kế toán quốc tế CAT/ACCA do Hiệp hội kế toán công chứng Anh Quốc Cấp bằng.&nbsp;<br><br>Kế toán trưởng công ty TNHH Emotive 100% vốn của Mỹ.<br><br>05 năm kế toán tổng hợp và thuế Chuỗi nhà hàng ăn nhanh (BurgerKing, Pizza Domino, Gà Popeys, Dunkin Donut) thuôc tập đoàn Liên Thái Bình Dương (IPP group).<br><br></h5> </div>
                            <div id="SHAPE203" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP405" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(70,185,224,1)">
                                    <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION314" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE316" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">LỢI ÍCH KHÓA HỌC<br color="" style="color: rgb(0, 129, 255);"><br color="" style="color: rgb(0, 129, 255);"></h2> </div>
                    <div id="YOUTUBE327" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="1" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/PXd8vLu9mQo?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="GROUP651" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP361" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP651">
                                <div class="widget-content">
                                    <div id="HEADLINE326" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP361" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">BẠN SẼ NHẬN ĐƯỢC GÌ?<br color="" style="color: rgb(0, 129, 255);"><br color="" style="color: rgb(0, 129, 255);"></h3> </div>
                                    <div id="HEADLINE318" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP361" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Bắt đầu từ những điều cơ bản nhất cho mọi kế toán.<br>Lý thuyết cô đọng, không lan man dài dòng.<br><br>Được học đầy đủ các phần hành của kế toán:<br><br><br><br><br><br>Dạy dựa trên trải nghiệm thực tế, và bí kíp được đúc kết<br>bởi giảng viên.<br><br>Hiểu sâu, nắm được bản chất của hạch toán nghiệp vụ.<br><br>Học cách làm việc cả trên Excel và Phần mềm kế toán.<br>Được tải demo phần mềm kế toán về.<br><br>Định khoản không đơn giản chi là nợ có, học viên biết cách tương tác với các phòng ban.<br>&nbsp; &nbsp;&nbsp;</h6> </div>
                                    <div id="HEADLINE328" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP361" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Kế toán tiền mặt, ngân hàng; kế toán thanh toán; kế    toán mua hàng; kế toán kho; kế toán bán hàng; kế toán     giá thành; kế toán sản xuất; kế toán tổng hợp.</h3> </div>
                                </div>
                            </div>
                            <div id="GROUP650" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP651">
                                <div class="widget-content">
                                    <div id="SHAPE640" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP650" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 720.451 1896.0833" fill="rgba(0,129,255,1)">
                                            <path d="M576 896q0 26-19 45l-448 448q-19 19-45 19t-45-19-19-45V448q0-26 19-45t45-19 45 19l448 448q19 19 19 45z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="GROUP649" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP650">
                                        <div class="widget-content">
                                            <div id="SHAPE639" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP649" lp-display="block">
                                                <div class="widget-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 720.451 1896.0833" fill="rgba(0,129,255,1)">
                                                    <path d="M576 896q0 26-19 45l-448 448q-19 19-45 19t-45-19-19-45V448q0-26 19-45t45-19 45 19l448 448q19 19 19 45z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div id="GROUP648" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP649">
                                                <div class="widget-content">
                                                    <div id="SHAPE638" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP648" lp-display="block">
                                                        <div class="widget-content">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 720.451 1896.0833" fill="rgba(0,129,255,1)">
                                                            <path d="M576 896q0 26-19 45l-448 448q-19 19-45 19t-45-19-19-45V448q0-26 19-45t45-19 45 19l448 448q19 19 19 45z"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div id="GROUP647" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP648">
                                                        <div class="widget-content">
                                                            <div id="SHAPE637" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP647" lp-display="block">
                                                                <div class="widget-content">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 720.451 1896.0833" fill="rgba(0,129,255,1)">
                                                                    <path d="M576 896q0 26-19 45l-448 448q-19 19-45 19t-45-19-19-45V448q0-26 19-45t45-19 45 19l448 448q19 19 19 45z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div id="GROUP646" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP647">
                                                                <div class="widget-content">
                                                                    <div id="SHAPE636" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP646" lp-display="block">
                                                                        <div class="widget-content">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 720.451 1896.0833" fill="rgba(0,129,255,1)">
                                                                            <path d="M576 896q0 26-19 45l-448 448q-19 19-45 19t-45-19-19-45V448q0-26 19-45t45-19 45 19l448 448q19 19 19 45z"></path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div id="SHAPE635" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP646" lp-display="block">
                                                                        <div class="widget-content">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 720.451 1896.0833" fill="rgba(0,129,255,1)">
                                                                            <path d="M576 896q0 26-19 45l-448 448q-19 19-45 19t-45-19-19-45V448q0-26 19-45t45-19 45 19l448 448q19 19 19 45z"></path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION65" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX71" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE305" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">KẾ TOÁN MUA HÀNG HÓA, NGUYÊN VẬT LiỆU, DỊCH VỤ&nbsp;</h5> </div><a id="BUTTON537" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP583" lp-action-type="popup" lp-target="" href=""><span class="widget-content">&gt;&gt;&gt;Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="GROUP85" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content"></div>
                    </div>
                    <div id="HEADLINE111" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">LỘ TRÌNH KHÓA HỌC</h1> </div>
                    <div id="BOX272" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE309" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">KẾ TOÁN TÀI SẢN CỐ ĐỊNH</h5> </div><a id="BUTTON539" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP591" lp-action-type="popup" lp-target="" href=""><span class="widget-content">&gt;&gt;&gt;Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX296" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE306" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">KẾ TOÁN CÔNG CỤ DỤNG CỤ VÀ CHI PHÍ TRẢ TRƯỚC</h5> </div><a id="BUTTON538" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP599" lp-action-type="popup" lp-target="" href=""><span class="widget-content">&gt;&gt;&gt;Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX297" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE310" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">KẾ TOÁN TIỀN LƯƠNG VÀ CÁC KHOẢN TRÍCH THEO LƯƠNG&nbsp;</h5> </div><a id="BUTTON542" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP607" lp-action-type="popup" lp-target="" href=""><span class="widget-content">&gt;&gt;&gt;Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX298" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE307" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">KẾ TOÁN GIÁ THÀNH&nbsp;</h5> </div><a id="BUTTON540" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP615" lp-action-type="popup" lp-target="" href=""><span class="widget-content">&gt;&gt;&gt;Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX299" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE311" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">KẾ TOÁN BÁN HÀNG VÀ TIÊU THỤ THÀNH PHẨM</h5> </div><a id="BUTTON541" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP623" lp-action-type="popup" lp-target="" href=""><span class="widget-content">&gt;&gt;&gt;Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX300" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE308" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">XÁC ĐỊNH KẾT QUẢ KINH DOANH&nbsp;</h5> </div><a id="BUTTON548" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content"> &gt;&gt;&gt;Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="GROUP415" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE221" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP415" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M17,3A2,2 0 0,1 19,5V21L12,18L5,21V5C5,3.89 5.9,3 7,3H17M11,14L17.25,7.76L15.84,6.34L11,11.18L8.41,8.59L7,10L11,14Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE222" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP415" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">CHƯƠNG 2</h6> </div>
                        </div>
                    </div>
                    <div id="BOX301" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE304" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">KẾ TOÁN TIỀN VÀ THANH TOÁN TRONG DOANH NGHIỆP&nbsp;</h5> </div><a id="BUTTON536" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP574" lp-action-type="popup" lp-target="" href=""><span class="widget-content">&gt;&gt;&gt;Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX271" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE302" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">PHƯƠNG TRÌNH KẾ TOÁN CƠ BẢN</h5> </div><a id="BUTTON527" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP557" lp-action-type="popup" lp-target="" href=""><span class="widget-content">&gt;&gt;&gt;Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="GROUP416" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX98" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP416" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX97" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP416" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP430" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE249" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP430" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">CHƯƠNG 4</h6> </div>
                            <div id="SHAPE248" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP430" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M17,3A2,2 0 0,1 19,5V21L12,18L5,21V5C5,3.89 5.9,3 7,3H17M11,14L17.25,7.76L15.84,6.34L11,11.18L8.41,8.59L7,10L11,14Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP431" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE245" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP431" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">CHƯƠNG 3</h6> </div>
                            <div id="SHAPE244" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP431" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M17,3A2,2 0 0,1 19,5V21L12,18L5,21V5C5,3.89 5.9,3 7,3H17M11,14L17.25,7.76L15.84,6.34L11,11.18L8.41,8.59L7,10L11,14Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP432" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE257" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP432" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M17,3A2,2 0 0,1 19,5V21L12,18L5,21V5C5,3.89 5.9,3 7,3H17M11,14L17.25,7.76L15.84,6.34L11,11.18L8.41,8.59L7,10L11,14Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE256" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP432" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">CHƯƠNG 5</h6> </div>
                        </div>
                    </div>
                    <div id="GROUP433" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE265" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP433" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">CHƯƠNG 6</h6> </div>
                            <div id="SHAPE266" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP433" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M17,3A2,2 0 0,1 19,5V21L12,18L5,21V5C5,3.89 5.9,3 7,3H17M11,14L17.25,7.76L15.84,6.34L11,11.18L8.41,8.59L7,10L11,14Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP449" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE259" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP449" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">CHƯƠNG 7</h6> </div>
                            <div id="SHAPE260" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP449" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M17,3A2,2 0 0,1 19,5V21L12,18L5,21V5C5,3.89 5.9,3 7,3H17M11,14L17.25,7.76L15.84,6.34L11,11.18L8.41,8.59L7,10L11,14Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP450" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE269" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP450" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M17,3A2,2 0 0,1 19,5V21L12,18L5,21V5C5,3.89 5.9,3 7,3H17M11,14L17.25,7.76L15.84,6.34L11,11.18L8.41,8.59L7,10L11,14Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE270" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP450" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">CHƯƠNG 8</h6> </div>
                        </div>
                    </div>
                    <div id="GROUP451" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE263" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP451" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M17,3A2,2 0 0,1 19,5V21L12,18L5,21V5C5,3.89 5.9,3 7,3H17M11,14L17.25,7.76L15.84,6.34L11,11.18L8.41,8.59L7,10L11,14Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE262" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP451" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">CHƯƠNG 9</h6> </div>
                        </div>
                    </div>
                    <div id="GROUP486" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX487" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP486" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX488" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP486" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP492" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX493" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP492" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX494" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP492" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP495" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX496" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP495" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX497" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP495" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP498" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX499" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP498" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX500" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP498" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP501" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX502" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP501" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX503" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP501" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP504" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX505" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP504" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX506" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP504" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX517" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP504" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="SHAPE513" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1792 1896.0833" fill="rgba(255,255,255,1)">
                            <path d="M320 256q0 72-64 110v1266q0 13-9.5 22.5T224 1664h-64q-13 0-22.5-9.5T128 1632V366q-64-38-64-110 0-53 37.5-90.5T192 128t90.5 37.5T320 256zm1472 64v763q0 25-12.5 38.5T1740 1149q-215 116-369 116-61 0-123.5-22t-108.5-48-115.5-48-142.5-22q-192 0-464 146-17 9-33 9-26 0-45-19t-19-45V474q0-32 31-55 21-14 79-43 236-120 421-120 107 0 200 29t219 88q38 19 88 19 54 0 117.5-21t110-47 88-47 54.5-21q26 0 45 19t19 45z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="GROUP516" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX514" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP516" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE515" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP516" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">LÀM ĐƯỢC KẾ TOÁN&nbsp;</h5> </div>
                        </div>
                    </div>
                    <div id="GROUP489" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX490" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP489" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX491" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP489" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP483" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX484" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP483" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX485" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP483" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP652" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE92" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP652" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">CHƯƠNG 1</h6> </div>
                            <div id="SHAPE93" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP652" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M17,3A2,2 0 0,1 19,5V21L12,18L5,21V5C5,3.89 5.9,3 7,3H17M11,14L17.25,7.76L15.84,6.34L11,11.18L8.41,8.59L7,10L11,14Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP623" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="HEADLINE624" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">NỘI DUNG BÀI HỌC</h3> </div>
                    <div id="LINE626" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="LINE630" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH627" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Quy trình bán hàng và nhiệm vụ của kế toán bán hàng.&nbsp;
                            <br>2. Ghi nhận doanh thu và giá vốn trong bán hàng.
                            <br>3. Tính giá vốn hàng bán.&nbsp;
                            <br>4. Các khoản chiết khấu trong bán hàng.&nbsp;
                            <br>5. Bán hàng thông qua đại lý bán đúng giá hưởng hoa
                            <br>&nbsp; &nbsp; hồng.</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP615" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="HEADLINE616" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">NỘI DUNG KHÓA HỌC</h3> </div>
                    <div id="LINE618" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH619" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Nhiệm vụ kế toán giá thành.&nbsp;
                            <br>2. Tập hợp chi phí cho đối tượng tính giá.&nbsp;
                            <br>3. Hạch toán kế toán trong phân hệ giá thành.</p>
                    </div>
                    <div id="LINE622" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP607" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="HEADLINE608" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">NỘI DUNG BÀI HỌC</h3> </div>
                    <div id="LINE610" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="LINE614" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH611" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Kế toán tiền lương phải làm gì?
                            <br>2. Phụ cấp phải đóng bảo hiểm - phụ cấp không phải đóng bảo hiểm trong tổng thu nhập của người lao động.
                            <br>3. Lương cơ bản - Lương trên hợp đồng lao động.
                            <br>4. Tính lương cho người lao động.&nbsp;
                            <br>5. Hach toan lương và các khoản trích theo lương.&nbsp;
                            <br>6.. Thực hành: Bút toán tiền lương và các khoản trích theo lương (Trên Excel ).
                            <br>7. Thực hành: Bút toán tiền lương và các khoản trích theo lương (Trênphần mềm ).</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP599" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="HEADLINE600" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">NỘI DUNG BÀI HỌC</h3> </div>
                    <div id="LINE602" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH603" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Tổng quan về Kế toán công cụ dụng cụ và chi phí trả
                            <br>&nbsp; &nbsp;trước.
                            <br>2. Bảng phân bổ công cụ dụng cụ và chi phí trả trước.
                            <br>3. Hạch toán công cụ dụng cụ&nbsp; và chi phí trả trước.
                            <br>4.Thực hành: Kế toán công cụ dụng cụ và chi phí trả trước .</p>
                    </div>
                    <div id="LINE606" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP591" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="HEADLINE592" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">NỘI DUNG BÀI HỌC&nbsp;</h3> </div>
                    <div id="LINE594" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH595" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Kế toán tài sản cố định cần làm những gì?
                            <br>2. Nghiệp vụ tăng tài sản cố định&nbsp;
                            <br>3. Khấu hao tài sản cố định
                            <br>4. Hướng dẫn và thực hành lập bảng trích khấu hao tài sản
                            <br>&nbsp; &nbsp; cố định
                            <br>5. Hạch toán bút toán khấu hao tài sản cố định.
                            <br>6. Thực hành : Ghi tăng tài sản - lập bảng trich khấu hao - hạch toán khấu hao tài sản cố định.
                            <br>7. Thanh lý, nhượng bán tài sản cố định.</p>
                    </div>
                    <div id="LINE598" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP583" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="HEADLINE584" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">NỘI DUNG BÀI HỌC</h3> </div>
                    <div id="LINE586" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="LINE590" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH587" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Tổng quan về kế toán mua hàng hóa, nguyên vật liệu,
                            <br>&nbsp; &nbsp;công cụ dụng cụ.
                            <br>2. Nguyên tắc xác định giá nhập kho.
                            <br>3. Thực hành tình huống tính giá nhập kho có chi phí.
                            <br>4. Hạch toán mua hàng nhập kho - Không phát sinh phí
                            <br>&nbsp; &nbsp; nhập.
                            <br>5. Thực hành: Hạch toán mua hàng nhập kho - Không phát
                            <br>&nbsp; &nbsp; sinh phí nhập ( trên phần mềm ).&nbsp;
                            <br>6. Hạch toán mua hàng nhập kho - Phát sinh phí nhập.&nbsp;
                            <br>7. Hạch toán nhập mua Khi có Chiết khấu (Thương mại và Thanh toán ).&nbsp;
                            <br>8. Thực hành: Nghiệp vụ mua hàng - thanh toán.&nbsp;</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP574" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="HEADLINE575" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">NỘI DUNG BÀI HỌC</h3> </div>
                    <div id="LINE577" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH578" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Tổng quan về kế toán vốn bằng tiền ở doanh nghiệp
                            <br>2. Nhiệm vụ và trách nhiệm của thủ quỹ và kế toán tiền
                            <br>&nbsp; &nbsp; mặt và tiền gửi.
                            <br>3. Sơ đồ hóa Quy trình kế toán tiền mặt và tiền gửi.
                            <br>4. Hạch toán kế toán các nghiệp vụ tăng tiền.
                            <br>5. Hạch toán kế toán các nghiệp vụ giảm tiền.
                            <br>6. Thực hành ( lập phiếu, hạch toán, lưu trữ ) phiếu thu trên
                            <br>&nbsp; &nbsp; phần mềm kế toán&nbsp;</p>
                    </div>
                    <div id="LINE581" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP557" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="HEADLINE558" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">NỘI DUNG BÀI HỌC</h3> </div>
                    <div id="LINE560" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="LINE564" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH561" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Giới thiệu khóa học "Kế toán cho người mới vào nghề".
                            <br>2. Phương trình cân đối kế toán.
                            <br>3. Kết cấu tài sản của doanh nghiệp.
                            <br>4. Kết cầu nguồn vốn của doanh nghiệp.
                            <br>5. Các nhóm tài khoản kế toán.
                            <br>6. 4 bước định khoản kế toán.</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION40" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE166" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">CẢM NHẬN CỦA HỌC VIÊN</h2> </div>
                    <div id="CAROUSEL659" class="widget-element ladi-drop" lp-type="slider" lp-lang="CAROUSEL" lp-delay="5000" lp-autoplay="1" lp-display="block">
                        <div class="widget-content">
                            <div class="control-slider-left">
                                <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"></path>
                                <path d="M0-.5h24v24H0z" fill="none"></path>
                                </svg>
                            </div>
                            <div class="control-slider-right">
                                <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                                <path d="M0-.25h24v24H0z" fill="none"></path>
                                </svg>
                            </div>
                            <div class="wrap-child">
                                <div id="ITEM-CAROUSEL661" class="widget-element widget-item-child" lp-type="item_slider" lp-lang="ITEM-CAROUSEL" lp-display="block">
                                    <div class="widget-content">
                                        <div id="HEADLINE180" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h3 class="widget-content" lp-node="h3">Giảng viên hỗ trợ nhiệt tình, giảng dạy dễ hiểu, kiến thức mang tính thực tế, ứng dụng cao trong toán/tài chính của ngân hàng.</h3> </div>
                                        <div id="HEADLINE177" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h5 class="widget-content" lp-node="h5">&nbsp;Ngân hàng TMCP Đại Chúng Việt Nam</h5> </div>
                                        <div id="HEADLINE173" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h5 class="widget-content" lp-node="h5">LƯU TUẤN ANH</h5> </div>
                                        <div id="IMAGE169" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                            <div class="widget-content">
                                                <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/luu_tuan_anh-1513135583.PNG"></div>
                                                <div class="lp-show-image"></div>
                                            </div>
                                            <div class="ladi-widget-overlay"></div>
                                        </div>
                                        <div id="IMAGE511" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                            <div class="widget-content">
                                                <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/Untitled-1-1513736731.png"></div>
                                                <div class="lp-show-image"></div>
                                            </div>
                                            <div class="ladi-widget-overlay"></div>
                                        </div>
                                        <div id="HEADLINE512" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h5 class="widget-content" lp-node="h5">Tổ chức của sinh viên chuyên ngành tài chính-kế toán-kiểm toán ATA GLOBAL</h5> </div>
                                        <div id="HEADLINE175" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h5 class="widget-content" lp-node="h5">NGÔ VĂN TRƯỜNG MẠNH</h5> </div>
                                        <div id="HEADLINE183" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h5 class="widget-content" lp-node="h5">Khóa học xử lí hóa đơn của cô Phạm Thị Nhung đã cung cấp cho tôi những kiến thức cần phải nắm vũng về hóa đơn một cách có hệ thống&nbsp; nhất từ trước tới giờ.</h5> </div>
                                        <div id="HEADLINE181" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h5 class="widget-content" lp-node="h5">Đầu tiên tôi xin gửi lời cảm ơn tới giảng viên Phạm Thị Nhung trong thời gian qua đã quan tâm, nhiệt tình hướng dẫn và giảng dạy cho tôi. Tôi đã tiếp thu được nhiều kiến thức bổ ích phục vụ cho việc làm hiện tại ở doanh nghiệp của mình. Bài giảng rõ ràng, giảng viên thân thiện giảng dạy dễ hiểu , tiếp thu kiến thức nhanh. Hy vọng trung tâm sẽ mở rộng để có nhiều học viên mới ra trường sẽ tiếp cận thực tế nhanh và dễ dàng kiếm việc</h5> </div>
                                        <div id="HEADLINE178" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h5 class="widget-content" lp-node="h5">Công ty cổ phần đầu tư và xây dựng Lạc Hồng</h5> </div>
                                        <div id="HEADLINE174" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h5 class="widget-content" lp-node="h5">LÊ THỊ NHÀN</h5> </div>
                                        <div id="IMAGE167" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                            <div class="widget-content">
                                                <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/Lac_hong-1513135584.PNG"></div>
                                                <div class="lp-show-image"></div>
                                            </div>
                                            <div class="ladi-widget-overlay"></div>
                                        </div>
                                    </div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                                <div id="ITEM-CAROUSEL662" class="widget-element widget-item-child" lp-type="item_slider" lp-lang="ITEM-CAROUSEL" lp-display="block">
                                    <div class="widget-content">
                                        <div id="HEADLINE674" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h5 class="widget-content" lp-node="h5">Khóa học rất hay và bổ ích, phù hợp với những người không có thời gian tham gia các lớp bổ túc bên ngoài.</h5> </div>
                                        <div id="HEADLINE676" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h5 class="widget-content" lp-node="h5">Kế toán viên</h5> </div>
                                        <div id="GROUP700" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                            <div class="widget-content">
                                                <div id="HEADLINE667" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP700" lp-display="block">
                                                    <h5 class="widget-content" lp-node="h5">HOÀNG THU HOÀI</h5> </div>
                                                <div id="IMAGE675" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-group="GROUP700" lp-display="block">
                                                    <div class="widget-content">
                                                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/Untitled-1-1513828284.png"></div>
                                                        <div class="lp-show-image"></div>
                                                    </div>
                                                    <div class="ladi-widget-overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="HEADLINE672" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h3 class="widget-content" lp-node="h3">Các bài học đều rất chi tiết tỉ mỉ, giảng viên dạy cũng rất dễ hiểu, giúp tôi biết được nhiều hơn về việc lập báo cáo tài chính.&nbsp;</h3> </div>
                                        <div id="HEADLINE673" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h5 class="widget-content" lp-node="h5">Tôi thấy các thông tin được cung cấp trong bài giảng đều rất hữu ích và cần thiết, đúng tài liệu mà tôi cần cho công việc hiện tại của mình.</h5> </div>
                                        <div id="HEADLINE671" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h5 class="widget-content" lp-node="h5">Kế toán viên</h5> </div>
                                        <div id="HEADLINE668" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h5 class="widget-content" lp-node="h5">NGUYỄN THỊ HUYỀN TRANG</h5> </div>
                                        <div id="IMAGE665" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                            <div class="widget-content">
                                                <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/Untitled-2-1513745137.png"></div>
                                                <div class="lp-show-image"></div>
                                            </div>
                                            <div class="ladi-widget-overlay"></div>
                                        </div>
                                        <div id="HEADLINE670" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h5 class="widget-content" lp-node="h5">Công ty TNHH Xây dựng và Thương mại Công Dũng</h5> </div>
                                        <div id="GROUP697" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                            <div class="widget-content">
                                                <div id="HEADLINE669" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP697" lp-display="block">
                                                    <h5 class="widget-content" lp-node="h5">TRẦN THỊ THU HÀ</h5> </div>
                                                <div id="IMAGE693" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-group="GROUP697" lp-display="block">
                                                    <div class="widget-content">
                                                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/Untitled-1-1513743060.png"></div>
                                                        <div class="lp-show-image"></div>
                                                    </div>
                                                    <div class="ladi-widget-overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION345" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX348" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE349" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">HỌC ONLINE<br>HỌC MỌI LÚC MỌI NƠI</h4> </div>
                            <div id="PARAGRAPH350" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Học trên máy tính, học trên điện thoại, tải bài học về để học offline khi không có mạng</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX354" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE355" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">KHÓA HỌC ĐÃ ĐĂNG KÍ ĐƯỢC SỬ DỤNG TRỌN ĐỜI</h4> </div>
                            <div id="PARAGRAPH356" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Một lần đăng kí, học nghìn lần</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX357" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE358" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">TƯƠNG TÁC CÙNG VỚI GIẢNG VIÊN VÀ CỘNG ĐỒNG CÁC HỌC VIÊN</h4> </div>
                            <div id="PARAGRAPH363" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Trao đổi, thảo luận các vấn đề trong cộng đồng học viên Lakita. Được tư vấn, giúp đỡ bởi giảng viên ngay cả sau khóa học</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE346" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">TẠI SAO NÊN CHỌN CHÚNG TÔI ?</h1> </div>
                    <div id="HEADLINE362" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Chúng tôi luôn nỗ lực để đem lại cho bạn những khóa học tốt nhất</h3> </div>
                    <div id="BOX351" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE352" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">VỪA HỌC VỪA HÀNH<br>BIẾN KIẾN THỨC THÀNH CỦA MÌNH</h4> </div>
                            <div id="PARAGRAPH353" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Có bài tập sau mỗi bài học, được giảng viên chữa&nbsp;
                                    <br>chi tiết, cẩn thận</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX521" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE522" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">CẬP NHẬT THÔNG TƯ, CHÍNH SÁCH MỚI HOÀN TOÀN TỰ ĐỘNG<br></h4> </div>
                            <div id="PARAGRAPH523" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Thông tư, chính sách mới được cập nhật thường xuyên, đảm bảo học viên có kiến thức chuẩn nhất để làm việc</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX642" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE643" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">TRUY CẬP MIỄN PHÍ KHO TÀI LIỆU, BIỂU MẪU KHỔNG LỒ<br></h4> </div>
                            <div id="PARAGRAPH644" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Truy cập kho tài liệu, bểu mẫu cần cho công việc&nbsp;
                                    <br>hàng ngày</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION126" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="LINE129" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="BOX365" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="FORM393" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google-sheet" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:7223&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:7224&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:7225&quot;},{&quot;name&quot;:&quot;street&quot;,&quot;value&quot;:&quot;street&quot;,&quot;$$hashKey&quot;:&quot;object:7247&quot;}]" lp-display="block">
                                <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                    <div id="ITEM_FORM394" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" lp-name-id="name" required="required">
                                    </div>
                                    <div id="ITEM_FORM395" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="email" placeholder="Email" name="email" lp-label="Email" lp-name-id="email" required="required">
                                    </div>
                                    <div id="ITEM_FORM396" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Số điện thoại" name="phone" lp-label="Điện thoại" lp-name-id="phone">
                                    </div>
                                    <div id="ITEM_FORM400" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Địa chỉ" name="dia_chi" lp-label="Địa chỉ" lp-name-id="street" required="required">
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <button id="btn-398" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>

                                </form>
                            </div><a id="BUTTON398" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM393" lp-display="table"><span class="widget-content">ĐĂNG KÝ NGAY</span> </a>
                            <div id="HEADLINE399" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">ĐĂNG KÍ TẠI ĐÂY</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE366" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">ĐĂNG KÍ MUA NGAY&nbsp;<br>ƯU ĐÃI LIỀN TAY</h2> </div>
                    <div id="GROUP370" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX368" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP370" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE706" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">1.195.000</h3> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX369" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP370" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE705" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">545.000</h3> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE375" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Địa chỉ: Phòng 701 CT1 - Chung cư Skylight - Ngõ Hòa Bình 6 - 125D Minh Khai - Q. Hai Bà Trưng - Hà Nội&nbsp;<br>Hotline: 1900 636 195 - 024 7306 2468&nbsp;<br color="" style="color: rgb(255, 255, 255);">Hỗ trợ: cskh@lakita.vn&nbsp;<br color="" style="color: rgb(255, 255, 255);">© Copyright 2016 Lakita.vn, All rights reserved&nbsp;<br color="" style="color: rgb(255, 255, 255);">® Lakita.vn giữ bản quyền nội dung trên website này.</h5> </div>
                    <div id="HEADLINE386" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">MIỄN PHÍ GIAO HÀNG TRÊN TOÀN QUỐC</h3> </div>
                    <div id="GROUP470" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX471" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP470" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE472" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP470" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">NGÀY</h6> </div>
                            <div id="HEADLINE473" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP470" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">GIỜ</h6> </div>
                            <div id="BOX474" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP470" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX475" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP470" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE476" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP470" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">GIÂY</h6> </div>
                            <div id="HEADLINE477" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP470" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">PHÚT</h6> </div>
                            <div id="BOX478" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP470" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="COUNTDOWN479" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="<?php echo (strtotime('+1 day', strtotime(date('d-m-Y'))) - time()) / 60; ?>" lp-endtimetype="timedown" lp-group="GROUP470" lp-display="block">
                                <div class="widget-content">
                                    <div><span>1</span></div>
                                    <div><span>0</span></div>
                                    <div><span>0</span></div>
                                    <div><span>0</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP481" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="LINE372" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP481" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="LINE373" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP481" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="HEADLINE371" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP481" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">ÁP DỤNG ĐẾN HẾT NGÀY HÔM NAY</h2> </div>
                        </div>
                    </div>
                    <div id="LINE707" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <script type="text/javascript" async="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1513934010981"></script>
        </div>

        <!-- ******************** comment fb ********************************** -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="fb-comments" data-href="https://lakita.vn/ke-toan-cho-nguoi-moi-bat-dau-hanhnm.html" 
                         data-width="100%" data-numposts="10" data-order-by="reverse_time"></div>
                </div>
            </div>
        </div>


        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="https://static.ladipage.net/source/jquery.3-0-1.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>public/my.js?ver=<?php echo _VER_CACHED_ ?>" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var left = $('#img-contact').css('margin-left');
                $('#img-contact').hover(function () {
                    $(this).css('margin-left', '0');
                }, function () {
                    $(this).css('margin-left', left);
                });
                $("#BUTTON398").click(function (e) {
                    e.preventDefault();
                    $("#btn-398").click();
                });
                $("#BUTTON931").click(function (e) {
                    e.preventDefault();
                    $("#btn-931").click();
                });
            });
        </script>
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
            background: url(https://lakita.vn/styles/images/loading.gif) center center no-repeat;
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

</body>

</html>