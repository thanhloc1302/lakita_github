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
        <meta property="og:url" content="https://lakita.vn/yoga-danh-cho-nguoi-lam-van-phong-5.html" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/360x260/cac-bai-the-duc-tai-cho-1512787899.jpg">
        <meta property="og:description" content="Hỗ trợ điều trị và phòng tránh những vấn đề về sức khỏe và tinh thần thường gặp cho người làm việc văn phòng." />
        <meta name="format-detection" content="telephone=no" />
        <?php $this->load->view('landingpage/y1005/css'); ?>
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
                    <div id="IMAGE11" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/uploads/images/9c774750-cf11-45f4-9b17-fa488a720e31.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="GROUP12" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE13" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP12" lp-display="block">
                                <div class="widget-content">
                                    <svg  xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE14" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP12" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M20,6.5A0.5,0.5 0 0,1 19.5,7H17.5A0.5,0.5 0 0,1 17,6.5V4.5A0.5,0.5 0 0,1 17.5,4H19.5A0.5,0.5 0 0,1 20,4.5M4.5,20A0.5,0.5 0 0,1 4,19.5V11H6.09C6.03,11.32 6,11.66 6,12A6,6 0 0,0 12,18A6,6 0 0,0 18,12C18,11.66 17.96,11.32 17.91,11H20V19.5A0.5,0.5 0 0,1 19.5,20M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M20,2H4C2.89,2 2,2.89 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE15" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP12" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M21.35,11.1H12.18V13.83H18.69C18.36,17.64 15.19,19.27 12.19,19.27C8.36,19.27 5,16.25 5,12C5,7.9 8.2,4.73 12.2,4.73C15.29,4.73 17.1,6.7 17.1,6.7L19,4.72C19,4.72 16.56,2 12.1,2C6.42,2 2.03,6.8 2.03,12C2.03,17.05 6.16,22 12.25,22C17.6,22 21.5,18.33 21.5,12.91C21.5,11.76 21.35,11.1 21.35,11.1V11.1Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="BOX3" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE4" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3"><font color="" style="color: rgb(255, 255, 255);">Dành cho người làm công sở</font></h3> </div>
                            <div id="GROUP5" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="LINE6" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP5" lp-display="block">
                                        <div class="widget-content">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                    <div id="SHAPE7" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP5" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="LINE8" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP5" lp-display="block">
                                        <div class="widget-content">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="HEADLINE10" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">TRẺ<br>KHỎE<br>ĐẸP</h1> </div>
                            <div id="HEADLINE9" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">CHỈ VỚI 495.000Đ</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION37" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX38" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE39" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Khô mắt, rối loạn thị giác</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX40" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE41" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Đau vùng thắt lưng</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX42" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE43" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Béo bụng</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX44" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE45" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Khô da</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE46" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">CÁC NGHIÊN CỨU GẦN ĐÂY CHỈ RA RẰNG, 80% DÂN CÔNG SỞ MẮC NHỮNG BỆNH NHƯ</h2> </div>
                    <div id="BOX48" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE49" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Hội chứng ống cổ tay</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX50" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE51" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Căng thẳng, stress</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION16" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE19" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">KHÓA HỌC SẼ MANG LẠI CHO BẠN ĐIỀU GÌ?</h3> </div>
                    <div id="GROUP24" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE25" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP24" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="rgba(255,87,34,1)">
                                    <path d="M6 6C4.355 6 3 7.355 3 9v6.78c-.61.552-1 1.342-1 2.22v9h5v-2h18v2h5v-9c0-.878-.39-1.668-1-2.22V9c0-1.645-1.355-3-3-3H6zm0 2h20c.555 0 1 .445 1 1v6h-2v-1c0-1.645-1.355-3-3-3h-4c-.767 0-1.467.3-2 .78-.533-.48-1.233-.78-2-.78h-4c-1.645 0-3 1.355-3 3v1H5V9c0-.555.445-1 1-1zm4 5h4c.555 0 1 .445 1 1v1H9v-1c0-.555.445-1 1-1zm8 0h4c.555 0 1 .445 1 1v1h-6v-1c0-.555.445-1 1-1zM5 17h22c.555 0 1 .445 1 1v7h-1v-2H5v2H4v-7c0-.555.445-1 1-1z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE26" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP24" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">BUỒN NGỦ Ư, ĐẤY KHÔNG PHẢI LÀ VẤN ĐỀ BẠN PHẢI LO LẮNG NỮA</h6> </div>
                        </div>
                    </div>
                    <div id="GROUP28" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE29" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP28" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="rgba(255,87,34,1)">
                                    <path d="M12 5c-1.645 0-3 1.355-3 3 0 .353.073.684.188 1H4v6h1v13h22V15h1V9h-5.188c.115-.316.188-.647.188-1 0-1.645-1.355-3-3-3-1.75 0-2.94 1.33-3.72 2.438-.103.148-.188.292-.28.437-.092-.145-.177-.29-.28-.438C14.94 6.33 13.75 5 12 5zm0 2c.626 0 1.436.67 2.063 1.563.152.217.13.23.25.437H12c-.565 0-1-.435-1-1s.435-1 1-1zm8 0c.565 0 1 .435 1 1s-.435 1-1 1h-2.313c.12-.206.098-.22.25-.438C18.564 7.672 19.375 7 20 7zM6 11h20v2h-9v-1h-2v1H6v-2zm1 4h18v11h-8V16h-2v10H7V15z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE30" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP28" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">bụng của bạn sẽ thon gọn hơn bao giờ hết</h6> </div>
                        </div>
                    </div>
                    <div id="GROUP32" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE33" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP32" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="rgba(255,87,34,1)">
                                    <path d="M11.5 6l-.313.406L10 8H3v18h26V8h-7l-1.188-1.594L20.5 6h-9zm1 2h7l1.188 1.594L21 10h6v14H5V10h6l.313-.406L12.5 8zM8 11c-.552 0-1 .448-1 1s.448 1 1 1 1-.448 1-1-.448-1-1-1zm8 0c-3.302 0-6 2.698-6 6s2.698 6 6 6 6-2.698 6-6-2.698-6-6-6zm0 2c2.22 0 4 1.78 4 4 0 2.22-1.78 4-4 4-2.22 0-4-1.78-4-4 0-2.22 1.78-4 4-4z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE34" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP32" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">không còn cảm thấy đau lưng mỗi khi làm việc</h6> </div>
                        </div>
                    </div>
                    <div id="YOUTUBE36" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/w8jLuCdHyc4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE52" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Chỉ cần dành ra 5 phút cho mỗi lần nghỉ giải lao, bạn sẽ</h5> </div>
                    <div id="SHAPE21" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="rgba(255,87,34,1)">
                            <path d="M4 4v20h7v-2H6V6h12v1h2V4H4zm8 4v20h16V8H12zm2 2h12v16H14V10z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="HEADLINE22" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">giải tỏa mọi căng thẳng, nâng cao hiệu quả công việc</h6> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION59" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX62" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE60" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">NỘI DUNG KHÓA HỌC</h2> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE65" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Chương 1: Năng lượng hơi thở cuộc sống</h2> </div>
                    <div id="HEADLINE70" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Chương 2: Vấn đề về thoái hóa cổ tay ngón tay</h2> </div>
                    <div id="HEADLINE72" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Chương 3: Vấn đề đông cứng khớp vai</h2> </div>
                    <div id="HEADLINE74" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Chương 4: Vấn đề về đau vai,cổ,gáy</h2> </div>
                    <div id="HEADLINE76" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Chương 5: Vấn đề về đau thắt lưng</h2> </div>
                    <div id="HEADLINE77" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Chương 6: Vấn đề về tiêu hóa</h2> </div>
                    <div id="HEADLINE81" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Chương 8: Trẻ hóa nét mặt</h2> </div>
                    <div id="HEADLINE87" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Hãy để những liệu pháp yoga này giúp bạn thay đổi từng ngày&nbsp;</h2> </div>
                    <div id="HEADLINE79" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Chương 7: Vấn đề về vùng chân</h2> </div>
                    <div id="HEADLINE85" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">&nbsp;Chương 9: Khỏe toàn thân</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION88" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="IMAGE89" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/MG_4718-1512982071.JPG"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH90" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Đã có 21 năm nghiên cứu và thực hành về Yoga.&nbsp;
                            <br>Đã có 15 năm đào tạo giáo viên và chia sẻ Yoga trong nước và ngoài nước.&nbsp;
                            <br>Tốt nghiệp Viện Toán học Đại học Bách khoa Hà Nội năm 2010.&nbsp;
                            <br>Năm 2012 đạt thành tích xuất sắc về dự án “ Phát triển Yoga Việt Nam” do đại học Pháp ITIN tổ chức.&nbsp;
                            <br>Năm 2013 nhận bằng trị liệu cao cấp do Đại học trị liệu Yoga SVYASA (Ấn Độ) tổ chức.&nbsp;
                            <br>Năm 2014 đạt chứng nhận xuất săc về thiền định do Học viện thiền đinh Ấn Độ tổ chức.&nbsp;
                            <br>Năm 2016 được Sở Y tế Hà Tĩnh trao bằng khen về thành tích xuất sắc trong “kết hợp Yoga và phục hồi chức năng điều trị có hiệu quả cho người bệnh” tại Bệnh viện đa khoa Thành phố Hà Tĩnh.</p>
                    </div>
                    <div id="PARAGRAPH91" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Giám đốc học viện Yoga Việt Nam
                            <br>Ủy viên thường trực hiệp hội Yoga trị liệu Châu Á&nbsp;</p>
                    </div>
                    <div id="HEADLINE92" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Thầy Đặng Hùng</h2> </div>
                    <div id="SHAPE93" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#000000">
                            <path d="M4,10V14H13L9.5,17.5L11.92,19.92L19.84,12L11.92,4.08L9.5,6.5L13,10H4Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE94" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#000000">
                            <path d="M4,10V14H13L9.5,17.5L11.92,19.92L19.84,12L11.92,4.08L9.5,6.5L13,10H4Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE95" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#000000">
                            <path d="M4,10V14H13L9.5,17.5L11.92,19.92L19.84,12L11.92,4.08L9.5,6.5L13,10H4Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE97" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#000000">
                            <path d="M4,10V14H13L9.5,17.5L11.92,19.92L19.84,12L11.92,4.08L9.5,6.5L13,10H4Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE98" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#000000">
                            <path d="M4,10V14H13L9.5,17.5L11.92,19.92L19.84,12L11.92,4.08L9.5,6.5L13,10H4Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE100" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#000000">
                            <path d="M4,10V14H13L9.5,17.5L11.92,19.92L19.84,12L11.92,4.08L9.5,6.5L13,10H4Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE101" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#000000">
                            <path d="M4,10V14H13L9.5,17.5L11.92,19.92L19.84,12L11.92,4.08L9.5,6.5L13,10H4Z"></path>
                            </svg>
                        </div>
                    </div><a id="BUTTON102" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP103" lp-action-type="popup" lp-target="" href=""><span class="widget-content">MUA NGAY</span> </a></div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION113" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE114" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Chúng tôi luôn cam kết&nbsp;</h2> </div>
                    <div id="SHAPE116" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1128.1586 1896.0833" fill="#000000">
                            <path d="M978 1185q0 153-99.5 263.5T620 1585v175q0 14-9 23t-23 9H453q-13 0-22.5-9.5T421 1760v-175q-66-9-127.5-31T192 1509.5t-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25T349 948.5t-62.5-31T230 882t-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134V32q0-13 9.5-22.5T453 0h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5T881 302t39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26T537 430q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5T965 1091t13 94z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE118" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1536 1896.0833" fill="#000000">
                            <path d="M768 128q209 0 385.5 103T1433 510.5 1536 896t-103 385.5-279.5 279.5T768 1664t-385.5-103T103 1281.5 0 896t103-385.5T382.5 231 768 128zm274 521q-2 1-9.5 9.5T1019 668q2 0 4.5-5t5-11 3.5-7q6-7 22-15 14-6 52-12 34-8 51 11-2-2 9.5-13t14.5-12q3-2 15-4.5t15-7.5l2-22q-12 1-17.5-7t-6.5-21q0 2-6 8 0-7-4.5-8t-11.5 1-9 1q-10-3-15-7.5t-8-16.5-4-15q-2-5-9.5-10.5T1112 484q-1-2-2.5-5.5t-3-6.5-4-5.5-5.5-2.5-7 5-7.5 10-4.5 5q-3-2-6-1.5t-4.5 1-4.5 3-5 3.5q-3 2-8.5 3t-8.5 2q15-5-1-11-10-4-16-3 9-4 7.5-12t-8.5-14h5q-1-4-8.5-8.5T1002 438t-13-6q-8-5-34-9.5t-33-.5q-5 6-4.5 10.5t4 14T925 459q1 6-5.5 13t-6.5 12q0 7 14 15.5t10 21.5q-3 8-16 16t-16 12q-5 8-1.5 18.5T914 584q2 2 1.5 4t-3.5 4.5-5.5 4-6.5 3.5l-3 2q-11 5-20.5-6T863 570q-7-25-16-30-23-8-29 1-5-13-41-26-25-9-58-4 6-1 0-15-7-15-19-12 3-6 4-17.5t1-13.5q3-13 12-23 1-1 7-8.5t9.5-13.5.5-6q35 4 50-11 5-5 11.5-17t10.5-17q9-6 14-5.5t14.5 5.5 14.5 5q14 1 15.5-11t-7.5-20q12 1 3-17-5-7-8-9-12-4-27 5-8 4 2 8-1-1-9.5 10.5T801 346t-16-5q-1-1-5.5-13.5T770 314q-8 0-16 15 3-8-11-15t-24-8q19-12-8-27-7-4-20.5-5t-19.5 4q-5 7-5.5 11.5t5 8T681 303t11.5 4 8.5 3q14 10 8 14-2 1-8.5 3.5T689 332t-6 4q-3 4 0 14t-2 14q-5-5-9-17.5t-7-16.5q7 9-25 6l-10-1q-4 0-16 2t-20.5 1-13.5-8q-4-8 0-20 1-4 4-2-4-3-11-9.5t-10-8.5q-46 15-94 41 6 1 12-1 5-2 13-6.5t10-5.5q34-14 42-7l5-5q14 16 20 25-7-4-30-1-20 6-22 12 7 12 5 18-4-3-11.5-10T498 339t-15-5q-16 0-22 1-146 80-235 222 7 7 12 8 4 1 5 9t2.5 11 11.5-3q9 8 3 19 1-1 44 27 19 17 21 21 3 11-10 18-1-2-9-9t-9-4q-3 5 .5 18.5T308 685q-7 0-9.5 16t-2.5 35.5-1 23.5l2 1q-3 12 5.5 34.5T324 815q-13 3 20 43 6 8 8 9 3 2 12 7.5t15 10 10 10.5q4 5 10 22.5t14 23.5q-2 6 9.5 20t10.5 23q-1 0-2.5 1t-2.5 1q3 7 15.5 14t15.5 13q1 3 2 10t3 11 8 2q2-20-24-62-15-25-17-29-3-5-5.5-15.5T421 915q2 0 6 1.5t8.5 3.5 7.5 4 2 3q-3 7 2 17.5t12 18.5 17 19 12 13q6 6 14 19.5t0 13.5q9 0 20 10t17 20q5 8 8 26t5 24q2 7 8.5 13.5t12.5 9.5l16 8 13 7q5 2 18.5 10.5T642 1168q10 4 16 4t14.5-2.5 13.5-3.5q15-2 29 15t21 21q36 19 55 11-2 1 .5 7.5t8 15.5 9 14.5 5.5 8.5q5 6 18 15t18 15q6-4 7-9-3 8 7 20t18 10q14-3 14-32-31 15-49-18 0-1-2.5-5.5t-4-8.5-2.5-8.5 0-7.5 5-3q9 0 10-3.5t-2-12.5-4-13q-1-8-11-20t-12-15q-5 9-16 8t-16-9q0 1-1.5 5.5t-1.5 6.5q-13 0-15-1 1-3 2.5-17.5t3.5-22.5q1-4 5.5-12t7.5-14.5 4-12.5-4.5-9.5-17.5-2.5q-19 1-26 20-1 3-3 10.5t-5 11.5-9 7q-7 3-24 2t-24-5q-13-8-22.5-29t-9.5-37q0-10 2.5-26.5t3-25T652 986q3-2 9-9.5t10-10.5q2-1 4.5-1.5t4.5 0 4-1.5 3-6q-1-1-4-3-3-3-4-3 7 3 28.5-1.5T735 951q15 11 22-2 0-1-2.5-9.5T754 926q5 27 29 9 3 3 15.5 5t17.5 5q3 2 7 5.5t5.5 4.5 5-.5 8.5-6.5q10 14 12 24 11 40 19 44 7 3 11 2t4.5-9.5 0-14T887 982l-1-8v-18l-1-8q-15-3-18.5-12t1.5-18.5 15-18.5q1-1 8-3.5t15.5-6.5 12.5-8q21-19 15-35 7 0 11-9-1 0-5-3t-7.5-5-4.5-2q9-5 2-16 5-3 7.5-11t7.5-10q9 12 21 2 7-8 1-16 5-7 20.5-10.5t18.5-9.5q7 2 8-2t1-12 3-12q4-5 15-9t13-5l17-11q3-4 0-4 18 2 31-11 10-11-6-20 3-6-3-9.5t-15-5.5q3-1 11.5-.5t10.5-1.5q15-10-7-16-17-5-43 12zm-163 877q206-36 351-189-3-3-12.5-4.5t-12.5-3.5q-18-7-24-8 1-7-2.5-13t-8-9-12.5-8-11-7q-2-2-7-6t-7-5.5-7.5-4.5-8.5-2-10 1l-3 1q-3 1-5.5 2.5t-5.5 3-4 3 0 2.5q-21-17-36-22-5-1-11-5.5t-10.5-7-10-1.5-11.5 7q-5 5-6 15t-2 13q-7-5 0-17.5t2-18.5q-3-6-10.5-4.5t-12 4.5-11.5 8.5-9 6.5-8.5 5.5-8.5 7.5q-3 4-6 12t-5 11q-2-4-11.5-6.5t-9.5-5.5q2 10 4 35t5 38q7 31-12 48-27 25-29 40-4 22 12 26 0 7-8 20.5t-7 21.5q0 6 2 16z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE119" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1427.7599 1896.0833" fill="#000000">
                            <path d="M1408 1405q0 120-73 189.5t-194 69.5H267q-121 0-194-69.5T0 1405q0-53 3.5-103.5t14-109T44 1084t43-97.5 62-81 85.5-53.5T346 832q9 0 42 21.5t74.5 48 108 48T704 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T704 896 432.5 783.5 320 512t112.5-271.5T704 128t271.5 112.5T1088 512z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="HEADLINE120" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Chi phí thấp nhất. Tiết kiêm thời gian. Mua 1 lần học trọn đời</h2> </div>
                    <div id="HEADLINE121" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Học online tại bất cứ đâu. Học mọi lúc chỉ với điện thoại, máy tính kết nối Internet</h3> </div>
                    <div id="HEADLINE122" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Học cùng giảng viên uy tín đã được chứng nhận, chuyên gia nghiên cứu yoga 20 năm.</h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION123" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE124" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">"Vì sự tự do của chính bạn"</h6> </div>
                    <div id="HEADLINE125" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">BẠN CÒN CHẦN CHỜ GÌ NỮA MÀ KHÔNG ĐĂNG KÝ NGAY</h2> </div>
                    <div id="GROUP127" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="FORM128" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:12561&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:12562&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:12563&quot;},{&quot;name&quot;:&quot;message&quot;,&quot;value&quot;:&quot;message&quot;,&quot;$$hashKey&quot;:&quot;object:12564&quot;}]" lp-group="GROUP127" lp-display="block">
                                <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                    <div id="ITEM_FORM129" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                    </div>
                                    <div id="ITEM_FORM130" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                                    </div>
                                    <div id="ITEM_FORM131" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                                    </div>
                                    <div id="ITEM_FORM132" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <textarea class="widget-content" type="text" placeholder="Địa chỉ" name="dia_chi" rows="4" lp-label="Lời nhắn" required="required"></textarea>
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <button id="btn-133" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                                </form>
                            </div><a id="BUTTON133" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM128" lp-group="GROUP127" lp-display="table"><span class="widget-content">ĐĂNG KÝ NGAY</span> </a></div>
                    </div>
                    <div id="HEADLINE156" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">LIÊN HỆ&nbsp;<br>Địa chỉ: Số 10, ngõ 272, Ngọc Thụy, Long Biên, Hà Nội<br>Hotline: 091 715 8228&nbsp;<br>Email: info@hocvienyoga.vn&nbsp;<br>Website: hocvienyoga.vn</h3> </div>
                    <div id="SHAPE157" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                            <path d="M11.5,1L2,6V8H21V6M16,10V17H19V10M2,22H21V19H2M10,10V17H13V10M4,10V17H7V10H4Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE158" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                            <path d="M6.72,20.78C8.23,20.71 10.07,20.78 11.87,20.78C13.72,20.78 15.62,20.66 17.12,20.78C17.72,20.83 18.28,21.19 18.77,20.87C19.16,20.38 18.87,19.71 18.96,19.05C19.12,17.78 20.28,16.27 18.59,15.95C17.87,16.61 18.35,17.23 17.95,18.05C17.45,19.03 15.68,19.37 14,19.5C12.54,19.62 10,19.76 9.5,18.77C9.04,17.94 9.29,16.65 9.29,15.58C9.29,14.38 9.16,13.22 9.5,12.3C11.32,12.43 13.7,11.69 15,12.5C15.87,13 15.37,14.06 16.38,14.4C17.07,14.21 16.7,13.32 16.66,12.5C16.63,11.94 16.63,11.19 16.66,10.57C16.69,9.73 17,8.76 16.1,8.74C15.39,9.3 15.93,10.23 15.18,10.75C14.95,10.92 14.43,11 14.08,11C12.7,11.17 10.54,11.05 9.38,10.84C9.23,9.16 9.24,6.87 9.38,5.19C10,4.57 11.45,4.54 12.42,4.55C14.13,4.55 16.79,4.7 17.3,5.55C17.58,6 17.36,7 17.85,7.1C18.85,7.33 18.36,5.55 18.41,4.73C18.44,4.11 18.71,3.72 18.59,3.27C18.27,2.83 17.79,3.05 17.5,3.09C14.35,3.5 9.6,3.27 6.26,3.27C5.86,3.27 5.16,3.07 4.88,3.54C4.68,4.6 6.12,4.16 6.62,4.73C6.79,4.91 7.03,5.73 7.08,6.28C7.23,7.74 7.08,9.97 7.08,12.12C7.08,14.38 7.26,16.67 7.08,18.05C7,18.53 6.73,19.3 6.62,19.41C6,20.04 4.34,19.35 4.5,20.69C5.09,21.08 5.93,20.82 6.72,20.78Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE159" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                            <path d="M15,12H17A5,5 0 0,0 12,7V9A3,3 0 0,1 15,12M19,12H21C21,7 16.97,3 12,3V5C15.86,5 19,8.13 19,12M20,15.5C18.75,15.5 17.55,15.3 16.43,14.93C16.08,14.82 15.69,14.9 15.41,15.18L13.21,17.38C10.38,15.94 8.06,13.62 6.62,10.79L8.82,8.59C9.1,8.31 9.18,7.92 9.07,7.57C8.7,6.45 8.5,5.25 8.5,4A1,1 0 0,0 7.5,3H4A1,1 0 0,0 3,4A17,17 0 0,0 20,21A1,1 0 0,0 21,20V16.5A1,1 0 0,0 20,15.5Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE161" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                            <path d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP103" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-delay-show-popup-page="1" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="FORM104" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-display="block">
                        <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                            <div id="ITEM_FORM105" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                            </div>
                            <div id="ITEM_FORM106" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                            </div>
                            <div id="ITEM_FORM107" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                            </div>
                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                            <button id="btn-108" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                        </form>
                    </div><a id="BUTTON108" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM104" lp-display="table"><span class="widget-content">HOÀN TẤT ĐĂNG KÝ</span> </a>
                    <div id="HEADLINE109" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">MUA NGAY VỚI GIÁ ƯU ĐÃI</h1> </div>
                    <div id="SHAPE111" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(47,161,120,1)">
                            <path d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="PARAGRAPH112" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">495.000Đ</h6> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <script type="text/javascript" async="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1513138658434"></script>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="fb-comments" data-href="https://lakita.vn/yoga-danh-cho-nguoi-lam-van-phong-5.html" 
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
                $("#BUTTON133").click(function (e) {
                    e.preventDefault();
                    $("#btn-133").click();
                });
                $("#BUTTON108").click(function (e) {
                    e.preventDefault();
                    $("#btn-108").click();
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