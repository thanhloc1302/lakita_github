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
        <meta charset="UTF-8">
        <title class="title-site" lp-id="59c484ed701897b41e8a9df4">Trọn bộ hướng dẫn lập báo cáo tài chính năm 2017</title>
        <meta http-equiv="Cache-control" content="no-cache">
        <meta http-equiv="Expires" content="-1">
        <meta name="description" content="Trọn bộ hướng dẫn lập báo cáo tài chính năm 2017">
        <meta name="keywords" content="báo cáo tài chính">
        <meta name="viewport" id="lp-viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
        <link rel="icon" href="https://lakita.vn/data/source/setting/favicon.png" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script>
            function ladiViewport() {
                var width = (window.outerWidth > 0) ? window.outerWidth : screen.width;
                if (width > 3000) {
                    width = width / 10;
                }
                var content = "width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0";
                var zoom = 1;
                if (width < 768) {
                    zoom = width / 375;
                    content = "width=375, initial-scale=" + zoom + ", maximum-scale=" + zoom + ",minimum-scale=" + zoom;
                } else {
                    if (width < 960) {
                        zoom = width / 960;
                        content = "width=960, initial-scale=" + zoom + ", maximum-scale=" + zoom + ",minimum-scale=" + zoom;
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
        <meta property="fb:admins" content="100001432238036"/>
        <meta property="fb:app_id" content="315347858825221" />
        <meta property="og:type"   content="website" />
        <meta property="og:url" content="https://lakita.vn/tron-bo-lap-bao-cao-tai-chinh-2017-trinhbtk2.html" />
        <meta property="og:title" content="Trọn bộ hướng dẫn lập báo cáo tài chính năm 2017" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/268x150/tron-bo-huong-dan-lap-bao-cao-tai-chinh-nam-2016.png" />
        <meta property="og:description" content="Khóa học được thiết kế dành cho kế toán đi làm và máy tính có kết nối internet" />
        <?php $this->load->view('landingpage/kt400trinhbtk2/css'); ?>
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
            <div id="SECTION222" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE5" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">KHÓA HỌC TRỌN BỘ HƯỚNG DẪN LẬP&nbsp;<br><br></h1> </div>
                    <div id="HEADLINE171" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">BÁO CÁO TÀI CHÍNH</h1> </div>
                    <div id="LINE174" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div><a id="BUTTON178" class="widget-element widget-snap style-1 ladi-drop wow rubberBand animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION36" lp-action-type="page" lp-target="" href=""><span class="widget-content"> TÌM HIỂU NGAY!</span> </a>
                    <div id="BOX350" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE353" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION36" lp-action-type="page" lp-target="" href="">
                                <h2 class="widget-content" lp-node="h2">Tại sao chọn LAKITA</h2> </div>
                            <div id="HEADLINE363" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION321" lp-action-type="page" lp-target="" href="">
                                <h2 class="widget-content" lp-node="h2">Ý kiến chuyên gia</h2> </div>
                            <div id="HEADLINE365" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION42" lp-action-type="page" lp-target="" href="">
                                <h2 class="widget-content" lp-node="h2">Câu chuyện học viên</h2> </div>
                            <div id="LINEVERTICAL354" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                                <div class="widget-content">
                                    <div class="linevertical"></div>
                                </div>
                            </div>
                            <div id="LINEVERTICAL361" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                                <div class="widget-content">
                                    <div class="linevertical"></div>
                                </div>
                            </div>
                            <div id="HEADLINE360" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION205" lp-action-type="page" lp-target="" href="">
                                <h2 class="widget-content" lp-node="h2">Giảng viên</h2> </div>
                            <div id="HEADLINE359" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION94" lp-action-type="page" lp-target="" href="">
                                <h2 class="widget-content" lp-node="h2">Nội dung khóa học</h2> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="IMAGE352" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/logo_white-1513079500.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LINEVERTICAL362" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="LINEVERTICAL364" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION9" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block" lp-ani="wow bounceInDown animated">
                <div class="container">
                    <div id="GROUP11" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP12" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP11">
                                <div class="widget-content">
                                    <div id="HEADLINE13" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP12" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">HỌC ONLINE</h5> </div>
                                    <div id="PARAGRAPH14" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP12" lp-display="block">
                                        <p class="widget-content" lp-node="p">Học MỌI LÚC, MỌI NƠI, mô hình tiên tiến, giúp bạn TƯƠNG TÁC và HỌC TẬP cùng thầy và hàng trăm học viên&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                            <div id="SHAPE15" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP11" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M4.93,4.93C3.12,6.74 2,9.24 2,12C2,14.76 3.12,17.26 4.93,19.07L6.34,17.66C4.89,16.22 4,14.22 4,12C4,9.79 4.89,7.78 6.34,6.34L4.93,4.93M19.07,4.93L17.66,6.34C19.11,7.78 20,9.79 20,12C20,14.22 19.11,16.22 17.66,17.66L19.07,19.07C20.88,17.26 22,14.76 22,12C22,9.24 20.88,6.74 19.07,4.93M7.76,7.76C6.67,8.85 6,10.35 6,12C6,13.65 6.67,15.15 7.76,16.24L9.17,14.83C8.45,14.11 8,13.11 8,12C8,10.89 8.45,9.89 9.17,9.17L7.76,7.76M16.24,7.76L14.83,9.17C15.55,9.89 16,10.89 16,12C16,13.11 15.55,14.11 14.83,14.83L16.24,16.24C17.33,15.15 18,13.65 18,12C18,10.35 17.33,8.85 16.24,7.76M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP26" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP27" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP26">
                                <div class="widget-content">
                                    <div id="HEADLINE28" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP27" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">TIẾT KIỆM THỜI GIAN</h5> </div>
                                    <div id="PARAGRAPH29" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP27" lp-display="block">
                                        <p class="widget-content" lp-node="p">Chỉ với 9H học online bao gồm 46 VIDEOS bài giảng giúp bạn thành thạo công việc</p>
                                    </div>
                                </div>
                            </div>
                            <div id="SHAPE30" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP26" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M10.54,14.53L8.41,12.4L7.35,13.46L10.53,16.64L16.53,10.64L15.47,9.58L10.54,14.53M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22A9,9 0 0,0 21,13A9,9 0 0,0 12,4M7.88,3.39L6.6,1.86L2,5.71L3.29,7.24L7.88,3.39M22,5.72L17.4,1.86L16.11,3.39L20.71,7.25L22,5.72Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP31" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP32" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP31">
                                <div class="widget-content">
                                    <div id="HEADLINE33" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP32" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">CẦM TAY CHỈ VIỆC</h5> </div>
                                    <div id="PARAGRAPH34" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP32" lp-display="block">
                                        <p class="widget-content" lp-node="p">Bài giảng được thiết kế theo dạng CẦM TAY CHỈ VIỆC giúp bạn có thể ÁP DỤNG NGAY vào công việc thực tiễn&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                            <div id="SHAPE35" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP31" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M10.5,17.5L7,14L8.41,12.59L10.5,14.67L15.68,9.5L17.09,10.91M10,4H14V6H10M20,6H16V4L14,2H10L8,4V6H4C2.89,6 2,6.89 2,8V19C2,20.11 2.89,21 4,21H20C21.11,21 22,20.11 22,19V8C22,6.89 21.11,6 20,6Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION36" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE37" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h4 class="widget-content" lp-node="h4">TẠI SAO BẠN CHỌN KHÓA HỌC NÀY?</h4> </div>
                    <div id="YOUTUBE180" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/UPkqH3VV7jc?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LISTOP41" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>Tăng kỹ năng trong công việc, học tập chỉ với 9h học online</li>
                            <li>Giảng viên trực tiếp trả lời câu hỏi thắc mắc của học viên ngay cả trên công việc thực tiễn</li>
                            <li>Học và thực hành ngay trên dữ liệu thực tế giúp bạn áp dụng thực tiễn dễ dàng hơn</li>
                            <li>Khóa học trọn đời và được cập nhật liên tục các thông tư miễn phí</li>
                            <li>Dịch vụ chăm sóc email, bạn sẽ nhận được các bài viết chuyên môn kế toán, giúp bạn cập nhật cách làm việc dễ dàng, đơn giản.</li>
                            <li>Được hỗ trợ thường xuyên với các đội ngũ trợ giảng chuyên nghiệp</li>
                            <li>Hướng dẫn lập đúng và 8 bước kiểm tra bảng cân đối phát sinh</li>
                        </ol>
                    </div>
                    <div id="HEADLINE182" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">KHÓA HỌC GIÚP BẠN</h3> </div><a id="BUTTON447" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION232" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY!</span> </a></div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION94" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block" lp-ani="wow fadeInLeft animated">
                <div class="container">
                    <div id="HEADLINE95" class="widget-element widget-snap wow bounceInLeft animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">NỘI DUNG KHÓA HỌC</h3> </div>
                    <div id="GROUP144" class="widget-element widget-snap widget-group wow fadeInRightBig animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX145" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP144" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE146" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4">CHƯƠNG 2:</h4> </div>
                                    <div id="HEADLINE147" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP395" lp-action-type="popup" lp-target="" href="">
                                        <h5 class="widget-content" lp-node="h5">HƯỚNG DẪN LẬP VÀ 09 BƯỚC KIỂM TRA BẢNG CÂN ĐỐI PHÁT SINH&nbsp;</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX149" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP144" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX191" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP144" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE192" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4">CHƯƠNG 4:</h4> </div>
                                    <div id="HEADLINE193" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP430" lp-action-type="popup" lp-target="" href="">
                                        <h5 class="widget-content" lp-node="h5">HƯỚNG DẪN LẬP BÁO CÁO KẾT QUẢ KINH DOANH</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX195" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP144" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE196" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4">CHƯƠNG 6:</h4> </div>
                                    <div id="HEADLINE197" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP441" lp-action-type="popup" lp-target="" href="">
                                        <h5 class="widget-content" lp-node="h5">HƯỚNG DẪN LẬP THUYẾT MINH BÁO CÁO TÀI CHÍNH</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX201" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP144" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX202" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP144" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP117" class="widget-element widget-snap widget-group wow fadeInLeftBig animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX118" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP117" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE119" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4">CHƯƠNG 1:</h4> </div>
                                    <div id="HEADLINE120" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP386" lp-action-type="popup" lp-target="" href="">
                                        <h5 class="widget-content" lp-node="h5">08 NHIỆM VỤ KẾ TOÁN CẦN THỰC HIỆN TẠI THỜI ĐIỂM CUỐI KỲ</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX122" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP117" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX183" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP117" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE184" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4">CHƯƠNG 3:</h4> </div>
                                    <div id="HEADLINE185" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP400" lp-action-type="popup" lp-target="" href="">
                                        <h5 class="widget-content" lp-node="h5">HƯỚNG DẪN LẬP BẢNG CÂN ĐỐI KẾ TOÁN</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX187" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP117" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE188" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4">CHƯƠNG 5:</h4> </div>
                                    <div id="HEADLINE189" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP436" lp-action-type="popup" lp-target="" href="">
                                        <h5 class="widget-content" lp-node="h5">HƯỚNG DẪN LẬP BÁO CÁO LƯU CHUYỂN TIỀN TỆ</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX199" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP117" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX200" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP117" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div><a id="BUTTON448" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION232" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY!</span> </a></div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP441" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH446" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bài 1: Mối quan hệ giữa 3 Báo cáo: CĐKT, KQKD và Lưu chuyển tiền tệ&nbsp;
                            <br>Bài 2: Ý nghĩa, cách lập Thuyết minh BCTC&nbsp;
                            <br>Bài 3: Thực hành lập thuyết minh báo cáo tài chính ( Phần 1 )&nbsp;
                            <br>Bài 4: Thực hành lập thuyết minh báo cáo tài chính ( Phần 2 )&nbsp;
                            <br>Bài 5: Tổng hợp tất cả Tài liệu tham khảo</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP436" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH440" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bài 1: Ý nghĩa Báo cáo lưu chuyển tiền tệ&nbsp;
                            <br>Bài 2: Cách lập Báo Cáo lưu chuyển tiền tệ ( Phần 1 )&nbsp;
                            <br>Bài 3: Cách lập Báo Cáo lưu chuyển tiền tệ ( Phần 2 )&nbsp;
                            <br>Bài 4: Thực hành Báo Cáo lưu chuyển tiền tệ (Phần 1)&nbsp;
                            <br>Bài 5: Thực hành Báo Cáo lưu chuyển tiền tệ (Phần 2)</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP430" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH434" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Trong các chiến dịch quảng cáo phục vụ marketing, Landing Page là một trang web đơn độc lập khác với website chính của bạn, với nội dung được thiết kế để phục vụ một mục tiêu duy nhất!</p>
                    </div>
                    <div id="PARAGRAPH435" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bài 1: Ý nghĩa và kết cấu của Báo cáo kết quả Kinh Doanh&nbsp;
                            <br>Bài 2: Hướng dẫn tính thuế TNDN (Phần 1)&nbsp;
                            <br>Bài 3: Hướng dẫn tính thuế TNDN (Phần 2)
                            <br>Bài 4: Cách lập báo cáo kết quả Kinh Doanh ( Phần 1 )&nbsp;
                            <br>Bài 5: Cách lập báo cáo kết quả Kinh Doanh ( Phần 2 )&nbsp;
                            <br>Bài 6: Thực hành lập Báo Cáo KQKD&nbsp;
                            <br>Bài 7: Tổng hợp Tài liệu Tải về 4 Chương đầu</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP404" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH409" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bài 1: Tìm hiểu về Báo cáo tài chính&nbsp;
                            <br>Bài 2: Ý nghĩa, mục đích của Bảng Cân đối kế toán&nbsp;
                            <br>Bài 3: Căn cứ lập và lưu ý khi Lập bảng cân đối kế toán&nbsp;
                            <br>Bài 4: Kết cầu và ý nghĩa từng chỉ tiêu trên CĐKT&nbsp;
                            <br>Bài 5: Cách lập bảng CĐKT (Phần 1)
                            <br>Bài 6: Cách lập bảng CĐKT (Phần 2)&nbsp;
                            <br>Bài 7: Thực hành lập bảng CĐKT trên excel (Phần 1)&nbsp;
                            <br>Bài 8: Thực hành lập bảng CĐKT trên excel (Phần 2)&nbsp;
                            <br>Bài 9: Thực hành lập bảng CĐKT trên excel (Phần 3)</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP400" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="HEADLINE428" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3"></h3> </div>
                    <div id="PARAGRAPH429" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bài 1: Tìm hiểu về Báo cáo tài chính&nbsp;
                            <br>Bài 2: Ý nghĩa, mục đích của Bảng Cân đối kế toán&nbsp;
                            <br>Bài 3: Căn cứ lập và lưu ý khi Lập bảng cân đối kế toán&nbsp;
                            <br>Bài 4: Kết cầu và ý nghĩa từng chỉ tiêu trên CĐKT&nbsp;
                            <br>Bài 5: Cách lập bảng CĐKT (Phần 1)
                            <br>Bài 6: Cách lập bảng CĐKT (Phần 2)&nbsp;
                            <br>Bài 7: Thực hành lập bảng CĐKT trên excel (Phần 1)&nbsp;
                            <br>Bài 8: Thực hành lập bảng CĐKT trên excel (Phần 2)&nbsp;
                            <br>Bài 9: Thực hành lập bảng CĐKT trên excel (Phần 3)</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP395" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="HEADLINE399" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Bài 1: Hướng dẫn lập bảng cân đối phát sinh tài khoản (Phần 1)&nbsp;<br>Bài 2: Hướng dẫn lập bảng cân đối phát sinh tài khoản (Phần 2)&nbsp;<br>Bài 3: Kiểm tra bảng CĐPS (KT1, KT2)&nbsp;<br>Bài 4: Kiểm tra bảng CĐPS - Kiểm tra nhóm tài khoản kho 152,153,154,155,156&nbsp;<br>Bài 5: Kiểm tra bảng CĐPS - Kiểm tra nhóm tài khoản tài sản và khấu hao (211,214)&nbsp;<br>Bài 6: Kiểm tra số 6: Tài khoản tiền mặt (TK 111 ), tiền gửi ngân hàng (TK 112)&nbsp;<br>Bài 7: Kiểm tra số 7: Nhóm các tài khoản công nợ (Phải thu, phải trả)&nbsp;<br>Bài 8: Kiểm tra số 8: Kiểm tra tài khoản Doanh thu TK 511,521&nbsp;<br>Bài 9: Kiểm tra tài khoản Thuế GTGT 1331,3331</h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP386" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH394" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bài 1: 08 nhiệm vụ cần thực hiện cuối kỳ
                            <br>Bài 2: Các lưu ý cần nhớ khi làm bảng lương (tối thiểu hóa chi phí bảo hiểm, thuế TNCN) Bài 3: Hạch toán lương và các khoản trích theo lương (phần 1)&nbsp;
                            <br>Bài 4: Hạch toán lương và các khoản trích theo lương (phần 2 - Thực hành excel ) Part 1
                            <br>Bài 5: Hạch toán lương và các khoản trích theo lương (phần 2 - Thực hành excel ) Part 2&nbsp;
                            <br>Bài 6: Hạch toán lương và các khoản trích theo lương (phần 3 - Thực hành trên phần mềm ) Part 1&nbsp;
                            <br>Bài 7: Hạch toán lương và các khoản trích theo lương (phần 3 - Thực hành trên phần mềm ) Part 2&nbsp;
                            <br>Bài 8: Nhiệm vụ 2 : Lập bảng tính và hạch toán khấu hao tài sản cố định (P1)
                            <br>Bài 9: Nhiệm vụ 2 : Lập bảng tính và hạch toán khấu hao tài sản cố định (P2)&nbsp;
                            <br>Bài 10: Nhiệm vụ số 3: Phân bổ Công cụ dụng cụ, chi phí trả trước&nbsp;
                            <br>Bài 11: Thực hành lập bảng phân bổ và bút toán phân bổ CCDC và Chi phí trả trước (bằng excel)&nbsp;
                            <br>Bài 12: Nhiệm vụ số 4: Trích trước chi phí&nbsp;
                            <br>Bài 13: Nhiệm vụ số 5: Kết chuyển thuế GTGT được khấu trừ (1331 - 3331)&nbsp;
                            <br>Bài 14: Nhiệm vụ 6: Tập hợp chi phí giá vốn hàng bán
                            <br>Bài 15: Nhiệm vụ 7: Tạm tính và hạch toán thuế TNDN phải nộp&nbsp;
                            <br>Bài 16: Nhiệm vụ 8: Các bút toán kết chuyển cuối kỳ sang tài khoản 911</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP380" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX381" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LINEVERTICAL383" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION205" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE206" class="widget-element widget-snap wow pulse animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">NGƯỜI ĐỒNG HÀNH CÙNG BẠN</h2> </div>
                    <div id="LINE211" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE208" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Giảng viên: PHẠM THỊ NHUNG</h3> </div>
                    <div id="BOX212" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div><a id="BUTTON449" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION232" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY!</span> </a>
                    <div id="LISTOP267" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>Chứng chỉ kế toán quốc tế CAT/ACCA do Hiệp hội kế toán công chứng Anh Quốc Cấp bằng. Kế toán tổng hợp tại chi nhánh công ty TNHH thực phẩm và giải khát "Cánh diều xanh", thuộc tập đoàn IPP liên Thái Bình Dương
                                <br>
                            </li>
                            <li>Kế toán trưởng công ty TNHH Emotive 100% vốn của Mỹ&nbsp;
                                <br>
                            </li>
                            <li>Tư vấn kế toán, thuế cho nhiều doanh nghiệp trong nước và doanh nghiệp có vốn đầu tư nước ngoài FDI</li>
                            <li>05 năm kế toán tổng hợp và thuế Chuỗi nhà hàng ăn nhanh (BurgerKing, Pizza Domino, Gà Popeys, Dunkin Donut) thuôc tập đoàn Liên Thái Bình Dương (IPP group)</li>
                        </ol>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION321" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE323" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Ý KIẾN TỪ CHUYÊN GIA</h2> </div>
                    <div id="GROUP324" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH325" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP324" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Tiến sĩ HOÀNG QUANG TRUNG</h6> </div>
                            <div id="PARAGRAPH333" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP324" lp-display="block">
                                <p class="widget-content" lp-node="p">Tôi đánh giá cao sự khác biệt của khóa học này, bài giảng rất chi tiết và tận tình sẽ giúp người học nắm được và làm được một báo cáo tài chính hoàn thiện và tổng thể</p>
                            </div>
                            <div id="LINE334" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP324" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="PARAGRAPH335" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP324" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Giám đốc Công ty DV kế toán Việt Nam - VINAFAS</h6> </div>
                        </div>
                    </div>
                    <div id="IMAGE348" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/hqt-1512975602.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION42" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE43" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">CÂU CHUYỆN CỦA HỌC VIÊN</h3> </div>
                    <div id="PARAGRAPH44" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Chúng tôi nỗ lực mỗi ngày để mang đến cho khách hàng sản phẩm và dịch vụ tốt nhất</h6> </div>
                    <div id="GROUP410" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP50" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP410">
                                <div class="widget-content">
                                    <div id="BOX51" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP50" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="PARAGRAPH52" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP50" lp-display="block">
                                        <p class="widget-content" lp-node="p">Giảng viên hỗ trợ nhiệt tình, giảng dạy dễ hiểu, kiến thức mang tính thực tế, ứng dụng cao trong toán/tài chính của ngân hàng.</p>
                                    </div>
                                    <div id="PARAGRAPH53" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP50" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Như Lan, Nhân viên văn phòng</h6> </div>
                                    <div id="PARAGRAPH54" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP50" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Ngân hàng TMCP Đại Chúng Việt Nam</h6> </div>
                                </div>
                            </div>
                            <div id="GROUP45" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP410">
                                <div class="widget-content">
                                    <div id="BOX46" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP45" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="PARAGRAPH47" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP45" lp-display="block">
                                        <p class="widget-content" lp-node="p">Khóa học thật sư bổ ích, qua khóa học này tôi đã học được rất nhiều kinh nghiệm trong lĩnh vực kế toán.</p>
                                    </div>
                                    <div id="PARAGRAPH48" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP45" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Vũ Thị Kim Nga, Kế Toán</h6> </div>
                                </div>
                            </div>
                            <div id="GROUP55" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP410">
                                <div class="widget-content">
                                    <div id="BOX56" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP55" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="PARAGRAPH57" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP55" lp-display="block">
                                        <p class="widget-content" lp-node="p">Nội dung từng bài rất chi tiết, dễ hiểu. Giúp tôi tiếp thu kiến thức một cách dễ dàng hơn.</p>
                                    </div>
                                    <div id="PARAGRAPH58" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP55" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Đặng Thị Nhã, Kế toán</h6> </div>
                                    <div id="PARAGRAPH59" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP55" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">VCCorp</h6> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP411" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP412" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP411">
                                <div class="widget-content">
                                    <div id="BOX413" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP412" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="PARAGRAPH414" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP412" lp-display="block">
                                        <p class="widget-content" lp-node="p">Khóa học giúp tôi nắm vững kiến thức về nghiệp vụ kế toán hơn</p>
                                    </div>
                                    <div id="PARAGRAPH415" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP412" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Mai Thị Minh, Kế toán</h6> </div>
                                </div>
                            </div>
                            <div id="GROUP417" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP411">
                                <div class="widget-content">
                                    <div id="BOX418" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP417" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="PARAGRAPH419" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP417" lp-display="block">
                                        <p class="widget-content" lp-node="p">Khóa học hữu ích, giúp tôi biết thêmđược nhiều kiến thức</p>
                                    </div>
                                    <div id="PARAGRAPH420" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP417" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Nguyễn Thị Dung, Kế toán</h6> </div>
                                </div>
                            </div>
                            <div id="GROUP422" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP411">
                                <div class="widget-content">
                                    <div id="BOX423" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP422" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="PARAGRAPH424" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP422" lp-display="block">
                                        <p class="widget-content" lp-node="p">Khóa học thú vị mang lại nhiều kiến thức bổ ích cho học viên phù hợp với những người đi làm không có thời gian học trực tiếp</p>
                                    </div>
                                    <div id="PARAGRAPH425" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP422" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Nguyễn Huyền, Kế toán</h6> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION232" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX233" class="widget-element widget-snap ladi-drop wow fadeIn animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP235" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="GROUP236" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP235">
                                        <div class="widget-content">
                                            <div id="BOX237" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP236" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                            <div id="HEADLINE238" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP236" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">NGÀY</h6> </div>
                                            <div id="HEADLINE239" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP236" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">GIỜ</h6> </div>
                                            <div id="BOX240" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP236" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                            <div id="BOX241" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP236" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                            <div id="HEADLINE242" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP236" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">GIÂY</h6> </div>
                                            <div id="HEADLINE243" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP236" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">PHÚT</h6> </div>
                                            <div id="BOX244" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP236" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="COUNTDOWN245" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="<?php echo (strtotime('+1 day', strtotime(date('d-m-Y'))) - time()) / 60; ?>" lp-endtimetype="timedown" lp-group="GROUP235" lp-display="block">
                                        <div class="widget-content">
                                            <div><span>54</span></div>
                                            <div><span>13</span></div>
                                            <div><span>56</span></div>
                                            <div><span>0</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP246" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content"><a id="BUTTON247" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM248" lp-group="GROUP246" lp-display="table"><span class="widget-content">GỬI LIÊN HỆ TỚI CHÚNG TÔI</span> </a>
                                    <div id="FORM248" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:20632&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:20634&quot;},{&quot;name&quot;:&quot;street&quot;,&quot;value&quot;:&quot;street&quot;,&quot;$$hashKey&quot;:&quot;object:20651&quot;}]" lp-group="GROUP246" lp-display="block">
                                       <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                            <div id="ITEM_FORM249" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                            </div>
                                            <div id="ITEM_FORM251" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                                            </div>
                                            <div id="ITEM_FORM261" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="text" placeholder="Nhập địa chỉ" name="dia_chi" lp-label="Địa chỉ" lp-name-id="street" required="required">
                                            </div>
                                           <input type="hidden" value="lakitavn@gmail.com" name="email" />
                                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                            <button id="btn-247" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="HEADLINE234" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">Nhanh tay lên!<br>THỜI GIAN CHỈ CÒN</h4> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE268" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Địa chỉ: Phòng 701 CT1 - Chung cư Skylight - Ngõ Hòa Bình 6 - 125D Minh Khai - Q. Hai Bà Trưng - Hà Nội&nbsp;<br>Hotline: 1900 636 195 - 024 7306 2468&nbsp;<br>Hỗ trợ: cskh@lakita.vn&nbsp;<br>© Copyright 2016 Lakita.vn,&nbsp;All rights reserved&nbsp;<br>® Lakita.vn giữ bản quyền nội dung trên website này.</h5> </div>
                    <div id="GROUP252" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE253" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP252" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" version="1.0" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: inline-block;" fill="rgba(255,255,255,1)">
                                    <path d="M29.23 13.342L17.633 1.747C17.198 1.31 16.618 1.07 16 1.07s-1.196.24-1.632.677L11.84 4.275H8.005V8.11l-5.332 5.33v17.49H29.33V13.443l-.1-.1zm-1.105.405l-4.13 4.13V9.618l4.13 4.128zM15.12 2.5c.47-.47 1.29-.47 1.76 0l1.774 1.774h-5.307L15.12 2.5zm4.6 2.84l3.21 3.212v10.39l-2.47 2.47-2.828-2.83c-.436-.436-1.016-.677-1.633-.677s-1.198.24-1.634.677l-2.87 2.87-2.427-2.426V5.34h10.648zm-15.34 7.9l3.624-3.624v8.343l-4.172-4.173.548-.548zm-.642 2.818v-.856l7.003 7.003-.078.08-6.924 6.922v-13.15zm.85 13.806l.574-.573h.002l9.957-9.955c.47-.47 1.29-.47 1.76 0l10.53 10.53H4.59zM28.263 15.36v13.848l-7.046-7.043 7.046-7.046v.24z"></path>
                                    <path d="M12.268 8.54h7.464v1.065h-7.464V8.54zM12.268 14.937h7.464v1.066h-7.464v-1.066zM12.268 11.738h5.33v1.066h-5.33v-1.066z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE254" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP252" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">ĐĂNG KÝ HỌC NGAY ĐỂ NHẬN KHUYẾN MÃI LÊN ĐẾN 50%</h2> </div>
                            <div id="BOX256" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP252" lp-display="block">
                                <div class="widget-content">
                                    <div id="SHAPE257" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" version="1.0" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: inline-block;" fill="rgba(255,255,255,1)">
                                            <path d="M2.64 15.992c0 7.366 5.97 13.337 13.336 13.337s13.337-5.97 13.337-13.338-5.97-13.337-13.337-13.337S2.64 8.625 2.64 15.992zm25.605 0c0 6.765-5.504 12.27-12.27 12.27s-12.27-5.505-12.27-12.27 5.505-12.27 12.27-12.27 12.27 5.505 12.27 12.27z"></path>
                                            <path d="M19.16 16.754l.753-.754-6.035-6.035-.754.754 5.28 5.28-5.255 5.256.753.754 3.013-3.013z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div><a id="BUTTON258" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-group="GROUP252" lp-display="table"><span class="widget-content">Đăng ký Liên hệ ngay</span> </a></div>
                    </div>
                    <div id="HEADLINE285" class="widget-element widget-snap wow bounce animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">CHỈ CÒN 495.000</h3> </div>
                    <div id="HEADLINE286" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">845.000</h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <script type="text/javascript" async="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1513655795822"></script>
            <script>
                var loadCSSFiles = function () {
                    var links = 'https://static.ladipage.net/source/animate.min.css?v=1513655795822';
                    var linkElement = document.createElement('link');
                    linkElement.rel = 'stylesheet';
                    linkElement.href = links;
                    document.getElementsByTagName('head')[0].appendChild(linkElement);
                };
                var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
                if (raf) {
                    raf(loadCSSFiles);
                } else {
                    window.addEventListener('load', loadCSSFiles);
                }
            </script>
        </div>

        <!-- ******************** comment fb ********************************** -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="fb-comments" data-href="https://lakita.vn/tron-bo-lap-bao-cao-tai-chinh-2017-trinhbtk2.html" 
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
                $("#BUTTON247").click(function (e) {
                    e.preventDefault();
                    $("#btn-247").click();
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