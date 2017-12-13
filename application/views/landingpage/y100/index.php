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
        <title class="title-site" lp-id="5a2a89891810cf61f23134d8"> Yoga dành cho người làm văn phòng </title>
        <link rel="shortcut icon" href="https://lakita.vn/data/source/setting/logo-icon.ico" type="image/x-icon" />
        <meta http-equiv="Cache-control" content="no-cache">
        <meta http-equiv="Expires" content="-1">
        <meta name="description" content="Yoga dành cho người làm văn phòng">
        <meta name="keywords" content="yoga">
        <meta name="viewport" id="lp-viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
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
        <meta property="og:title" content="Yoga dành cho người làm văn phòng" />
        <meta property="og:url" content="https://lakita.vn/yoga-danh-cho-nguoi-lam-van-phong.html" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/360x260/cac-bai-the-duc-tai-cho-1512787899.jpg">
        <meta property="og:description" content="Hỗ trợ điều trị và phòng tránh những vấn đề về sức khỏe và tinh thần thường gặp cho người làm việc văn phòng." />
        <meta name="format-detection" content="telephone=no" />
        <?php $this->load->view('landingpage/y100/css'); ?>
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

            <div id="SECTION340" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX341" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE342" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 28 32" version="1.0" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: inline-block;" fill="#000000">
                                    <path d="M27.467 10.667L21.174 3.2h-14.4L.48 10.667 0 11.2l.428.533L13.975 28.8l13.973-17.6-.48-.533zm-1.387 0H15.36l5.333-6.347 5.387 6.347zm-12.16 0l-5.547-6.4H19.36l-5.44 6.4zm-6.773-6.24l5.387 6.24H1.867l5.28-6.24zm6.293 7.306V26.4L1.76 11.733h11.68zM14.507 26.4V11.733h11.627L14.507 26.4z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE343" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h4 class="widget-content" lp-node="h4">KHÓA HỌC&nbsp;</h4> </div>
                    <div id="BOX344" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE345" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">YOGA CHO&nbsp;<br>DÂN VĂN PHÒNG&nbsp;</h6> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE346" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">&nbsp;</h3> </div>
                    <div id="PARAGRAPH347" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">- Khóa học thiết kế DÀNH RIÊNG cho dân văn phòng<br>- Điều trị và phòng tránh những vấn đề về sức khỏe thường gặp nơi công sở<br>- Giải tỏa căng thẳng, tăng khả năng làm việc và tập trung<br>- Học mọi lúc, mọi nơi</h6> </div><a href="#BOX447" id="BUTTON348" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">ĐĂNG KÝ NGAY</span> </a>
                    <div id="IMAGE349" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block" lp-action-link="SECTION12" lp-action-type="popup" lp-target="_top" href="" lp-tracking="fbq('track', 'AddToCart');
                         ">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/848a0512-1512789708702.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION67" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="LINE91" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE90" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">LÀM VIỆC NHIỀU GIỜ TẠI VĂN PHÒNG CÓ KHIẾN BẠN?</h1> </div>
                    <div id="HEADLINE417" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">ĐỪNG LO!!! VẤN ĐỀ CỦA BẠN GIỜ ĐÂY SẼ ĐƯỢC GIẢI QUYẾT!</h1> </div>
                    <div id="BOX490" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP286" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="IMAGE287" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-group="GROUP286" lp-display="block">
                                        <div class="widget-content">
                                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/vp-mat-tap-trung-1512742728813.jpeg"></div>
                                            <div class="lp-show-image"></div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="BOX288" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP286" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE289" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">MẤT TẬP TRUNG</h6> </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP70" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="IMAGE71" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-group="GROUP70" lp-display="block">
                                        <div class="widget-content">
                                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/vp-dau-lung-1512742424767.jpg"></div>
                                            <div class="lp-show-image"></div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="BOX72" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP70" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE73" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">ĐAU LƯNG</h6> </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP141" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="IMAGE142" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-group="GROUP141" lp-display="block">
                                        <div class="widget-content">
                                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/vp-dau-vai-1512742560938.jpg"></div>
                                            <div class="lp-show-image"></div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="BOX143" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP141" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE144" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">NHỨC MỎI VAI GÁY</h6> </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP146" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="IMAGE147" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-group="GROUP146" lp-display="block">
                                        <div class="widget-content">
                                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/vp-stressjpg-1512742618503.jpg"></div>
                                            <div class="lp-show-image"></div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="BOX148" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP146" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE149" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">CĂNG THẲNG</h6> </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION394" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="LINE395" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE396" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">Chúng tôi sẽ giúp bạn</h1> </div>
                    <div id="GROUP402" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE404" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP402" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Giảm áp lực công việc</h5> </div>
                            <div id="PARAGRAPH405" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP402" lp-display="block">
                                <p class="widget-content" lp-node="p">Khóa học sẽ giúp người tập thư giãn, tĩnh tâm, xua tan mệt mỏi, tăng cao năng lực tự phục hồi. Ngoài ra, các bài tập còn mang tới cho bạn giấc ngủ ngon, rèn luyện tinh thần để giải quyết công việc tốt hơn.</p>
                            </div>
                            <div id="LINE406" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP402" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP412" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE414" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP412" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Cơ thể đẹp hơn, dẻo dai hơn</h5> </div>
                            <div id="PARAGRAPH415" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP412" lp-display="block">
                                <p class="widget-content" lp-node="p">Các động tác Yoga mang lại sự dẻo dai hơn cho cơ thể, giúp giảm mỡ thừa ở vùng bụng, hông và tạo sự săn chắc, gợi cảm hơn.</p>
                            </div>
                            <div id="LINE416" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP412" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP407" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE409" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP407" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Tăng khả năng sáng tạo và sự tập trung</h5> </div>
                            <div id="PARAGRAPH410" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP407" lp-display="block">
                                <p class="widget-content" lp-node="p">Yoga sẽ giúp bạn có tâm thế lạc quan, suy nghĩ sáng suốt, kích thích khả năng sáng tạo và sự tập trung trong công việc cũng như trong cuộc sống.</p>
                            </div>
                            <div id="LINE411" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP407" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP397" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE399" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP397" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Giảm thiểu nguy cơ mắc “bệnh công sở”</h5> </div>
                            <div id="PARAGRAPH400" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP397" lp-display="block">
                                <p class="widget-content" lp-node="p">Khóa học được thiết kế đặc biệt để khắc phục, điều trị những bệnh thường gặp của người làm văn phòng, giúp giải tỏa căng thẳng các vùng cổ, vai, lưng... cũng như giảm thiểu các bệnh về tim mạch.</p>
                            </div>
                            <div id="LINE401" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP397" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION484" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX485" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"><a href="#BOX447" id="BUTTON487" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">ĐĂNG KÝ NGAY</span> </a>
                            <div id="PARAGRAPH488" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">Với 50 tư thế đặc trị giúp lưu thông khí huyết, làm dẻo dai cột sống, xoa dịu những cơn đau nhức vùng vai, cổ, gáy.</h4> </div>
                            <div id="PARAGRAPH489" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <h6 class="widget-content" lp-node="h6"><span style="font-style: italic;">Các phương pháp thở giúp lưu thông khí huyết, loại bỏ căng thẳng lo âu, làm cho đầu óc minh mẫn sáng suốt để hoàn thành công việc.&nbsp;</span></h6> </div>
                            <div id="HEADLINE486" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">với khóa học&nbsp;<br>YOGA&nbsp;DÀNH CHO DÂN VĂN PHÒNG</h1> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION159" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE171" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">ĐẶNG HÙNG -&nbsp;<br color="" style="color: rgb(254, 99, 103);">GIÁM ĐỐC HỌC VIỆN YOGA VIỆT NAM</h1> </div>
                    <div id="LISTOP419" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>Ủy viên thường trực Hiệp hội Yoga trị liệu Châu Á.</li>
                            <li>21 năm nghiên cứu và thực hành Yoga.</li>
                            <li>Trên 15 năm đào tạo giáo viên và chia sẻ Yoga trong nước và ngoài nước.</li>
                            <li>Tốt nghiệp Viện Toán học Đại học Bách khoa Hà Nội.</li>
                            <li>Năm 2012 đạt thành tích xuất sắc về dự án “Phát triển Yoga Việt Nam” do đại học Pháp ITIN tổ chức.</li>
                            <li>Năm 2013 nhận bằng trị liệu cao cấp do Đại học trị liệu Yoga SVYASA (Ấn Độ) tổ chức.</li>
                            <li>Năm 2014 đạt chứng nhận xuất sắc về thiền định do Học viện Thiền định Ấn Độ tổ chức.</li>
                            <li>Năm 2016 được Sở Y tế Hà Tĩnh trao bằng khen về thành tích xuất sắc trong “kết hợp Yoga và phục hồi chức năng điều trị có hiệu quả cho người bệnh” tại Bệnh viện Đa khoa&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hà Tĩnh.</li>
                        </ol>
                    </div>
                    <div id="LINE170" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="BOX530" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE531" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Dưới sự dẫn dắt của giảng viên</h6> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="IMAGE160" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_5378-1512805728576.jpg"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION492" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE494" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Học viên nói gì về chúng tôi?&nbsp;</h2> </div>
                    <div id="GROUP495" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX496" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP495" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP497" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP495">
                                <div class="widget-content">
                                    <div id="SHAPE498" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP497" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE499" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP497" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE500" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP497" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE501" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP497" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE502" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP497" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="HEADLINE503" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP495" lp-display="block">
                                <p class="widget-content" lp-node="p">Nhờ khoá học tại mà mình học hỏi được rất nhiều, hiểu nhiều hơn. Sự hướng dẫn tận tình chu đáo của thầy cô giúp các học viên trải nghiệm được nhiều điều thú vị.</p>
                            </div>
                            <div id="GROUP504" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP495">
                                <div class="widget-content">
                                    <div id="HEADLINE505" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP504" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Trương Thương Huyền</h6> </div>
                                    <div id="HEADLINE506" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP504" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">-&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;NSƯT, Phó đoàn nghệ thuật tỉnh Quảng Trị&nbsp;</h6> </div>
                                    <div id="HEADLINE532" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP504" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">-&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nhân viên Sale &amp; Marketing&nbsp;</h6> </div>
                                    <div id="HEADLINE534" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP504" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">-&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Giáo viên&nbsp;</h6> </div>
                                </div>
                            </div>
                            <div id="HEADLINE533" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP495" lp-display="block">
                                <p class="widget-content" lp-node="p">Địa chỉ lý tưởng để mọi người cùng học Yoga với một sức khỏe dồi dào và trí tuệ minh mẫn.</p>
                            </div>
                            <div id="HEADLINE535" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP495" lp-display="block">
                                <p class="widget-content" lp-node="p">Cảm ơn thầy Hùng, nhờ có thầy Hùng mà chúng ta được gặp gỡ, được chia sẻ và học hỏi thêm nhiều kiến thức!</p>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP518" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX519" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP518" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP520" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP518">
                                <div class="widget-content">
                                    <div id="SHAPE521" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP520" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE522" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP520" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE523" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP520" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE524" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP520" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE525" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP520" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,15.89V6.59L13.71,10.63L18.09,11L14.77,13.88L15.76,18.16M22,9.74L14.81,9.13L12,2.5L9.19,9.13L2,9.74L7.45,14.47L5.82,21.5L12,17.77L18.18,21.5L16.54,14.47L22,9.74Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="HEADLINE528" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP518" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Nguyễn Thanh Huyền</h6> </div>
                        </div>
                    </div>
                    <div id="BOX508" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="GROUP509" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE510" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP509" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE511" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP509" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE512" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP509" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE513" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP509" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE516" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Trịnh Tài</h6> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION434" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE435" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <p class="widget-content" lp-node="p">Chỉ còn 1 ngày nữa là chương trình ưu đãi dành cho khách hàng kết thúc. Nhanh tay lên!</p>
                    </div><a id="BUTTON436" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">&nbsp; CHỈ CÒN&nbsp;<br></span> </a>
                    <div id="PARAGRAPH437" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">- Ưu đãi ĐẶC BIỆT (dành cho 100 khách hàng đăng ký đầu tiên)<br>- Tặng ngay bộ ebook "2100 asanas" trọn bộ đầy đủ nhất những tư thế yoga cũng như các biến thể.</h6> </div>
                    <div id="HEADLINE438" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">Đăng ký đặt mua ngay để nhận ưu đãi giảm giá 50%!</h1> </div>
                    <div id="BOX439" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP440" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="PARAGRAPH441" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP440" lp-display="block">
                                        <p class="widget-content" lp-node="p">Ngày</p>
                                    </div>
                                    <div id="PARAGRAPH442" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP440" lp-display="block">
                                        <p class="widget-content" lp-node="p">Giờ</p>
                                    </div>
                                    <div id="PARAGRAPH443" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP440" lp-display="block">
                                        <p class="widget-content" lp-node="p">Phút</p>
                                    </div>
                                    <div id="PARAGRAPH444" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP440" lp-display="block">
                                        <p class="widget-content" lp-node="p">Giây</p>
                                    </div>
                                </div>
                            </div>
                            <div id="COUNTDOWN445" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="<?php echo (strtotime('+1 day', strtotime(date('d-m-Y'))) - time()) / 60; ?>" lp-endtimetype="timedown" lp-display="block">
                                <div class="widget-content">
                                    <div><span>6</span></div>
                                    <div><span>13</span></div>
                                    <div><span>46</span></div>
                                    <div><span>0</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX447" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE448" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">ĐĂNG KÝ MUA KHÓA HỌC</h4> </div>
                            <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                <div id="FORM449" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-ss-f="[{&quot;name&quot;:&quot;select3&quot;,&quot;value&quot;:&quot;select3&quot;,&quot;$$hashKey&quot;:&quot;object:6831&quot;},{&quot;name&quot;:&quot;select2&quot;,&quot;value&quot;:&quot;select2&quot;,&quot;$$hashKey&quot;:&quot;object:6832&quot;},{&quot;name&quot;:&quot;select1&quot;,&quot;value&quot;:&quot;select1&quot;,&quot;$$hashKey&quot;:&quot;object:6833&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:6834&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:6835&quot;},{&quot;name&quot;:&quot;message&quot;,&quot;value&quot;:&quot;message&quot;,&quot;$$hashKey&quot;:&quot;object:6836&quot;},{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:6837&quot;}]" lp-display="block">
                                    <div id="ITEM_FORM453" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" lp-name-id="email" required="required">
                                    </div>
                                    <div id="ITEM_FORM454" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="tel" placeholder="Nhập Số điện thoại" name="phone" onblur="checkphone(this)" onkeydown="removecheckphone()" lp-label="Điện thoại" lp-name-id="phone" required="required">
                                    </div>
                                    <div id="ITEM_FORM455" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <textarea class="widget-content" type="text" placeholder="Địa chỉ" name="dia_chi" rows="4" lp-label="Lời nhắn" lp-name-id="message" required="required"></textarea>
                                    </div>
                                    <div id="ITEM_FORM456" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" lp-name-id="name" required="required">
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                </div>
                                <button id="btn-457" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent"> MUA HÀNG </button>
                                <a id="BUTTON457" class="widget-element widget-snap style-1 ladi-drop LeadPanel_action button radius e_btn_submit reg_bt"><span class="widget-content"> MUA HÀNG</span> </a>
                            </form>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE536" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">295k</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION296" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <!--                    <div id="LINE297" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                            <div class="widget-content">
                                                <div class="line"></div>
                                            </div>
                                        </div>-->
                    <!--                    <div id="HEADLINE298" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h1 class="widget-content" lp-node="h1">Ladipage - Landing pages © 2017</h1> </div>-->
                    <div id="FACEBOOK_MESSAGES299" class="widget-element widget-snap" lp-type="facebook_messages" lp-lang="FACEBOOK_MESSAGES" lp-display="block">
                        <div class="widget-content fb-page" data-href="https://www.facebook.com/Yoga-Cho-T%C3%A2m-Tr%C3%AD-B%C3%ACnh-An-1756758664398515/" data-tabs="messages" data-width="265" data-height="210" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"></div>
                    </div>
                    <div id="HEADLINE300" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h4 class="widget-content" lp-node="h4">KẾT NỐI VỚI CHÚNG TÔI</h4> </div>
                    <div id="GROUP304" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE305" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP304" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">LIÊN HỆ</h4> </div>
                            <div id="HEADLINE306" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP304" lp-display="block">
                                <p class="widget-content" lp-node="p">Địa chỉ: Số 10, ngõ 272, Ngọc Thụy, Long Biên, Hà Nội
                                    <br>
                                </p>
                            </div>
                            <div id="SHAPE307" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP304" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE308" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP304" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE309" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP304" lp-display="block">
                                <p class="widget-content" lp-node="p">Hotline: 0976 989 355</p>
                            </div>
                            <div id="HEADLINE310" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP304" lp-display="block">
                                <p class="widget-content" lp-node="p">Email: info@hocvienyoga.vn</p>
                            </div>
                            <div id="SHAPE311" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP304" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M20,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V8L12,13L20,8V18M20,6L12,11L4,6V6H20V6Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE312" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP304" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE313" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP304" lp-display="block">
                                <p class="widget-content" lp-node="p">Website: hocvienyoga.vn</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <script type="text/javascript" async="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1513044965652"></script>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                        <div class="fb-comments" data-href="https://lakita.vn/yoga-danh-cho-nguoi-lam-van-phong-6.html" 
                             data-width="100%" data-numposts="10" data-order-by="reverse_time"></div>
                    </div>
                </div>
            </div>


            <!-- Latest compiled and minified JavaScript -->
            <script type="text/javascript" src="https://static.ladipage.net/source/jquery.3-0-1.js"></script>
            <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>public/my.js" type="text/javascript"></script>
            <script type="text/javascript">
                                            $(document).ready(function () {
                                                var left = $('#img-contact').css('margin-left');
                                                $('#img-contact').hover(function () {
                                                    $(this).css('margin-left', '0');
                                                }, function () {
                                                    $(this).css('margin-left', left);
                                                });
                                                $("#BUTTON457").click(function (e) {
                                                    e.preventDefault();
                                                    $("#btn-457").click();
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

    </div>
</body>

</html>