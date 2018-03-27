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
        <title>BẢO HIỂM XÃ HỘI - TIỀN LƯƠNG THUẾ THU NHẬP CÁ NHÂN 2018</title>
        <meta charset="UTF-8">
        <meta property="fb:admins" content="100001432238036"/>
        <meta property="fb:app_id" content="315347858825221" />
        <meta property="og:type"   content="website" /> 
        <meta property="og:url" content="<?php echo current_url(); ?>" />
        <meta property="og:title" content="BẢO HIỂM XÃ HỘI - TIỀN LƯƠNG THUẾ THU NHẬP CÁ NHÂN 2018" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/360x260/38-2-1515746220.jpg" />
        <meta property="og:description" content="Cập nhật những điểm mới nhất của BHXH và quy định mới của pháp luật về cấu trúc tiền lương 2018" />
        <link rel="icon" href="https://lakita.vn/data/source/setting/favicon.png" />
        <meta http-equiv="Cache-control" content="no-cache">
        <meta http-equiv="Expires" content="-1">
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
        <?php $this->load->view('landingpage/bh100/css'); ?>
        <?php include_once("plugin/analyticstracking.php") ?>
        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
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
            }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1645549219061949');
            fbq('track', 'PageView');
        </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1645549219061949&ev=PageView&noscript=1"
                   /></noscript>
    <!-- End Facebook Pixel Code -->

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
<?php include_once("plugin/messenger.php") ?>
    <div class="ladi-wraper-page">
        <div id="SECTION2" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="GROUP374" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="BOX167" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP374" lp-display="block">
                            <div class="widget-content"></div>
                            <div class="ladi-widget-overlay"></div>
                        </div><a id="BUTTON170" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM168" lp-group="GROUP374" lp-display="table"><span class="widget-content">ĐĂNG KÍ NGAY</span> </a>
                        <div id="FORM168" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:13856&quot;},{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:13867&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:13874&quot;},{&quot;name&quot;:&quot;street&quot;,&quot;value&quot;:&quot;street&quot;,&quot;$$hashKey&quot;:&quot;object:13881&quot;}]" lp-group="GROUP374" lp-display="block">
                            <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                <div id="ITEM_FORM169" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                    <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                                </div>
                                <div id="ITEM_FORM173" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                    <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" lp-name-id="name" required="required">
                                </div>
                                <div id="ITEM_FORM174" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                    <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại" lp-name-id="phone">
                                </div>
                                <div id="ITEM_FORM175" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                    <input class="widget-content" type="text" placeholder="Nhập địa chỉ" name="dia_chi" lp-label="Địa chỉ" lp-name-id="street" required="required">
                                </div>
                                <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                <button id="btn-170" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>

                            </form>
                        </div>
                    </div>
                </div>
                <div id="HEADLINE5" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h1 class="widget-content" lp-node="h1">Bảo hiểm xã hội - tiền lương</h1> </div>
                <div id="HEADLINE171" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h1 class="widget-content" lp-node="h1">THUẾ THU NHẬP CÁ NHÂN</h1> </div>
                <div id="IMAGE177" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/Logo-xin-1516271280.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE372" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">&nbsp;Cập nhật những điểm mới nhất của BHXH và quy định mới của pháp luật về cấu trúc tiền lương 2018</h3> </div>
                <div id="HEADLINE429" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">(giá gốc 895K)</h3> </div>
                <div id="HEADLINE430" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h5 class="widget-content" lp-node="h5">Chỉ <span style="color: rgb(255, 0, 0);">295K</span></h5> </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION9" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="GROUP11" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="GROUP12" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP11">
                            <div class="widget-content">
                                <div id="HEADLINE13" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP12" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">HỌC ONLINE</h5> </div>
                                <div id="PARAGRAPH14" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP12" lp-display="block">
                                    <p class="widget-content" lp-node="p">Mô hình học online tiên tiến, học mọi lúc mọi nơi, trên mọi thiết bị được kết nối Internet</p>
                                </div>
                            </div>
                        </div>
                        <div id="SHAPE15" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP11" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                <path d="M11,23A2,2 0 0,1 9,21V19H15V21A2,2 0 0,1 13,23H11M12,1C12.71,1 13.39,1.09 14.05,1.26C15.22,2.83 16,5.71 16,9C16,11.28 15.62,13.37 15,16A2,2 0 0,1 13,18H11A2,2 0 0,1 9,16C8.38,13.37 8,11.28 8,9C8,5.71 8.78,2.83 9.95,1.26C10.61,1.09 11.29,1 12,1M20,8C20,11.18 18.15,15.92 15.46,17.21C16.41,15.39 17,11.83 17,9C17,6.17 16.41,3.61 15.46,1.79C18.15,3.08 20,4.82 20,8M4,8C4,4.82 5.85,3.08 8.54,1.79C7.59,3.61 7,6.17 7,9C7,11.83 7.59,15.39 8.54,17.21C5.85,15.92 4,11.18 4,8Z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GROUP26" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="SHAPE30" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP26" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                <path d="M2,2H11V6H9V4H4V9H6V11H2V2M22,13V22H13V18H15V20H20V15H18V13H22M8,8H16V16H8V8Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="GROUP27" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP26">
                            <div class="widget-content">
                                <div id="HEADLINE28" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP27" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">CAM KẾT CHẤT LƯỢNG</h5> </div>
                                <div id="PARAGRAPH29" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP27" lp-display="block">
                                    <p class="widget-content" lp-node="p">Với 7563+ học viên và hơn 98% hài lòng với khóa học, chúng tôi tự tin khẳng định chất lượng cả về chuyên môn và dịch vụ trong suốt quá trình học tập của các bạn!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GROUP250" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="GROUP32" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP250">
                            <div class="widget-content">
                                <div id="HEADLINE33" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP32" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">GIẢI ĐÁP NHANH CHÓNG</h5> </div>
                                <div id="PARAGRAPH34" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP32" lp-display="block">
                                    <p class="widget-content" lp-node="p">Mọi thắc mắc sẽ được giảng viên, đôi ngũ trợ giảng giải đáp nhanh chóng qua hệ thống Forum tiện dụng</p>
                                </div>
                            </div>
                        </div>
                        <div id="SHAPE242" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP250" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                <path d="M12,1A9,9 0 0,1 21,10V17A3,3 0 0,1 18,20H15V12H19V10A7,7 0 0,0 12,3A7,7 0 0,0 5,10V12H9V20H6A3,3 0 0,1 3,17V10A9,9 0 0,1 12,1M15,24V22H17V24H15M11,24V22H13V24H11M7,24V22H9V24H7Z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GROUP251" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="GROUP246" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP251">
                            <div class="widget-content">
                                <div id="HEADLINE247" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP246" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">SỬ DỤNG TRỌN ĐỜI</h5> </div>
                                <div id="PARAGRAPH248" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP246" lp-display="block">
                                    <p class="widget-content" lp-node="p">Tài khoản học tập trọn đời Không giới hạn thời gian học</p>
                                </div>
                            </div>
                        </div>
                        <div id="SHAPE245" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP251" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                <path d="M10.54,14.53L8.41,12.4L7.35,13.46L10.53,16.64L16.53,10.64L15.47,9.58L10.54,14.53M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22A9,9 0 0,0 21,13A9,9 0 0,0 12,4M7.88,3.39L6.6,1.86L2,5.71L3.29,7.24L7.88,3.39M22,5.72L17.4,1.86L16.11,3.39L20.71,7.25L22,5.72Z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="HEADLINE424" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">LỢI ÍCH KHÓA HỌC</h3> </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION36" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="GROUP306" class="widget-element widget-snap widget-group wow bounceInLeft animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="LISTOP256" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-group="GROUP306" lp-display="block">
                            <ol class="widget-content">
                                <li>Có kiến thức tổng quát về quản lý lao động, tiền lương, bảo hiểm xã hội, và thuế TNCN</li>
                                <li>Có cái nhìn Chân thực nhất về lao động, tiền lương, bảo hiểm xã hội và thuế TNCN trên góc nhìn của chủ Doanh nghiệp và của người lao động</li>
                                <li>Nắm chắc được các nội dung trên hợp đồng lao động để soạn thảo phù hợp với luật Bảo hiểm xã hội, cũng như luật thuế hiện hành</li>
                                <li>Có khả năng xây dựng Hệ thống thang bảng lương phù hợp với tình hình hoạt động sản xuất kinh doanh của doanh nghiệp</li>
                                <li>Có khả năng xây dựng Quy chế lương phù hợp với tình hình hoạt động sản xuất kinh doanh và đáp ứng tất cả các yêu cầu của chủ Doanh nghiệp</li>
                                <li>Áp dụng đúng chính sách hiện hành về Bảo hiểm xã hội, tiền lương, thuế TNCN, và dung hòa được lợi ích giữa người lao động và người sử dụng lao động.</li>
                            </ol>
                        </div>
                        <div id="HEADLINE255" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP306" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Bởi nó có thể giúp bạn</h3> </div>
                    </div>
                </div>
                <div id="GROUP373" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE254" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP373" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Những người làm công tác NHÂN SỰ, KẾ TOÁN trong doanh nghiệp và CHỦ DOANH NGHIỆP</h3> </div>
                        <div id="HEADLINE249" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP373" lp-display="block">
                            <h1 class="widget-content" lp-node="h1">Khóa học này đặc biệt dành cho</h1> </div>
                    </div>
                </div>
                <div id="IMAGE390" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/laptop-full-1513826762.png"></div>
                        <div class="lp-show-image"></div>
                        <div id="YOUTUBE388" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                            <iframe class="widget-content" src="https://www.youtube.com/embed/y6Uwpu2Gw28?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION212" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX215" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="PARAGRAPH217" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Trao đổi và nhận được tư vấn chuyên môn trực tiếp từ giảng viên</p>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX230" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="PARAGRAPH232" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Cập nhập liên tục và hoàn toàn MIỄN PHÍ các thông tin và thông tư khi có thay đổi</p>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX233" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="PARAGRAPH235" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Tài khoản sử dụng trọn đời không giới hạn thời gian</p>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX236" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="PARAGRAPH238" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Giải quyết từng vấn đề một cách logic và dễ hiểu nhất</p>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX239" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="PARAGRAPH229" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Thực hành trực tiếp trên kho tài liệu phong phú đi kèm mỗi bài giảng</p>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="GROUP375" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE214" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP375" lp-display="block">
                            <h6 class="widget-content" lp-node="h6">Chất lượng khóa học và dịch vụ chăm sóc khách hàng chính là <span style="color: rgb(255, 214, 0); font-weight: bold;">GIÁ TRỊ CỐT LÕI</span>&nbsp; mà sản phẩm dịch vụ mang lại</h6> </div>
                        <div id="HEADLINE213" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP375" lp-display="block">
                            <h1 class="widget-content" lp-node="h1">Lakita có gì đặc biệt ?</h1> </div>
                    </div>
                </div>
                <div id="GROUP376" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="PARAGRAPH241" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP376" lp-display="block">
                            <p class="widget-content" lp-node="p">Đội ngũ tư vấn và hỗ trợ&nbsp; giải đáp mọi thắc mắc trong quá trình học tập cũng như trong&nbsp; thực tế công việc.</p>
                        </div>
                        <div id="BOX227" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP376" lp-display="block">
                            <div class="widget-content"></div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION94" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="GROUP370" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="BOX118" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP370" lp-display="block">
                            <div class="widget-content">
                                <div id="HEADLINE119" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h4 class="widget-content" lp-node="h4">CHƯƠNG II</h4> </div>
                                <div id="HEADLINE120" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">CẤU TRÚC TIỀN LƯƠNG THEO QUY ĐỊNH MỚI CỦA PHÁP LUẬT ÁP DỤNG TỪ 1/1/2018</h5> </div><a id="BUTTON290" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP296" lp-action-type="popup" lp-target="" href=""><span class="widget-content">CHI TIẾT</span> </a></div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="GROUP117" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP370">
                            <div class="widget-content">
                                <div id="BOX122" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP117" lp-display="block">
                                    <div class="widget-content"></div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GROUP371" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="BOX279" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP371" lp-display="block">
                            <div class="widget-content">
                                <div id="HEADLINE280" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h4 class="widget-content" lp-node="h4">CHƯƠNG III</h4> </div>
                                <div id="HEADLINE281" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">CÁC VẤN ĐỀ VỀ THUẾ THU NHẬP CÁ NHÂN KHI KÝ CÁC LOẠI HỢP ĐỒNG LAO ĐỘNG, CỘNG TÁC VIÊN, KHOÁN VIỆC</h5> </div><a id="BUTTON291" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP300" lp-action-type="popup" lp-target="" href=""><span class="widget-content">CHI TIẾT</span> </a></div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX283" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP371" lp-display="block">
                            <div class="widget-content"></div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                </div>
                <div id="GROUP377" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE95" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP377" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Lộ trình học tinh gọn và logic nhất</h3> </div>
                        <div id="HEADLINE304" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP377" lp-display="block">
                            <h1 class="widget-content" lp-node="h1">Nội dung chi tiết</h1> </div>
                    </div>
                </div>
                <div id="GROUP378" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="BOX145" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP378" lp-display="block">
                            <div class="widget-content">
                                <div id="HEADLINE146" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h4 class="widget-content" lp-node="h4">CHƯƠNG I</h4> </div>
                                <div id="HEADLINE147" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">CẬP NHẬT NHỮNG ĐIỂM MỚI NỔI BẬT CỦA LUẬT BHXH NĂM 2018</h5> </div><a id="BUTTON284" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP292" lp-action-type="popup" lp-target="" href=""><span class="widget-content"> CHI TIẾT</span> </a></div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="GROUP144" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP378">
                            <div class="widget-content">
                                <div id="BOX149" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP144" lp-display="block">
                                    <div class="widget-content"></div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION353" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX354" class="widget-element widget-snap ladi-drop wow fadeInUp animated" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="LISTOP368" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                            <ol class="widget-content">
                                <li color="" style="color: rgb(0, 0, 0);">12 năm kinh nghiệm tư vấn luật doanh nghiệp, luật sở hữu trí tuệ, luật lao động, BHXH.</li>
                                <li color="" style="color: rgb(0, 0, 0);">8 năm kinh nghiệm làm Trưởng phòng HCNS.</li>
                                <li color="" style="color: rgb(0, 0, 0);">8 năm kinh nghiệm tư vấn xây dựng hệ thống lương, thưởng trong doanh nghiệp.</li>
                                <li color="" style="color: rgb(0, 0, 0);">10 năm kinh nghiệm tư vấn thủ tục và cung cấp dịch vụ BHXH trong doanh nghiệp.</li>
                                <li color="" style="color: rgb(0, 0, 0);">8 năm kinh nghiệm đào tạo nghề nhân sự và pháp luật lao động, luật BHXH cho doanh nghiệp</li>
                            </ol>
                        </div>
                        <div id="HEADLINE355" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h4 class="widget-content" lp-node="h4">Nguyễn Thị Trang</h4> </div>
                        <div id="HEADLINE361" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h6 class="widget-content" lp-node="h6">&nbsp;Chuyên gia tư vấn Pháp luật doanh nghiệp, pháp luật Lao động.</h6> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="IMAGE367" class="widget-element widget-snap ladi-drop wow fadeInDown animated" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/TrangNT_anh1-1513771191.gif"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP296" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="BOX297" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE298" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CẤU TRÚC TIỀN LƯƠNG THEO QUY ĐỊNH MỚI CỦA PHÁP LUẬT ÁP DỤNG TỪ 1/1/2018</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP299" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Quy định của pháp luật về tiền lương</li>
                        <li color="" style="color: rgb(255, 255, 255);">Phân tích Cấu trúc tiền lương theo quy định mới của pháp luật áp dụng từ 1/1/2018</li>
                        <li color="" style="color: rgb(255, 255, 255);">Nhận diện các khoản thu nhập bắt buộc phải đóng bảo hiểm</li>
                        <li color="" style="color: rgb(255, 255, 255);">Nhận diện các khoản thu nhập không bắt buộc tham gia bảo hiểm</li>
                        <li color="" style="color: rgb(255, 255, 255);">&nbsp;Hợp lý hóa các khoản thu nhập trong bộ hồ sơ lao động</li>
                        <li color="" style="color: rgb(255, 255, 255);">Hợp thức hóa các khoản chi nằm trong cấu trúc lương</li>
                        <li color="" style="color: rgb(255, 255, 255);">Tổng quan về Thang bảng lương và lương tối thiểu vùng</li>
                        <li color="" style="color: rgb(255, 255, 255);">Xây dựng thang bảng lương</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thủ tục thông báo thang bảng lương</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP292" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="BOX293" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE294" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CẬP NHẬT NHỮNG ĐIỂM MỚI NỔI BẬT&nbsp; LUẬT BHXH NĂM 2018</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP295" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Tổng quan khóa học Bảo hiểm xã hội – Thuế TNCN – Tiền lương 2018</li>
                        <li color="" style="color: rgb(255, 255, 255);">Điểm mới về đối tượng tham gia bảo hiểm xã hội từ 2018</li>
                        <li color="" style="color: rgb(255, 255, 255);">&nbsp;Điểm mới trong chế độ ốm đau thai sản</li>
                        <li color="" style="color: rgb(255, 255, 255);">Điểm mới trong chế độ hưu trí</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP285" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="BOX286" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE287" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Tiêu đề lớn cho nội dung</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP288" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        <li color="" style="color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        <li color="" style="color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        <li color="" style="color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        <li color="" style="color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION42" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="HEADLINE43" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">Chất lượng và dịch vụ được khẳng định&nbsp;<br>qua cảm nhận của khách hàng</h3> </div>
                <div id="PARAGRAPH44" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">Chúng tôi nỗ lực mỗi ngày để mang đến cho khách hàng sản phẩm và dịch vụ tốt nhất</h6> </div>
                <div id="GROUP50" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="BOX51" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP50" lp-display="block">
                            <div class="widget-content"></div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="PARAGRAPH52" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP50" lp-display="block">
                            <p class="widget-content" lp-node="p">Khóa học này rất bổ ích với chúng tôi. Giảng viên dạy rất cuốn hút, dễ hiểu, logic dễ nhớ và những vấn đề rất thiết thực với doanh nghiệp.</p>
                        </div>
                        <div id="PARAGRAPH53" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP50" lp-display="block">
                            <h6 class="widget-content" lp-node="h6">Nguyễn Thị Hồng Thắm</h6> </div>
                        <div id="PARAGRAPH54" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP50" lp-display="block">
                            <h6 class="widget-content" lp-node="h6">Kế toán</h6> </div>
                    </div>
                </div>
                <div id="GROUP55" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="BOX56" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP55" lp-display="block">
                            <div class="widget-content"></div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="PARAGRAPH57" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP55" lp-display="block">
                            <p class="widget-content" lp-node="p">Rất cảm ơn sự chia sẻ của chuyên gia. Qua khóa học, tôi đã nắm bắt thêm rất nhiều thông tin bổ ích phục vụ cho công việc kế toán&nbsp;</p>
                        </div>
                        <div id="PARAGRAPH58" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP55" lp-display="block">
                            <h6 class="widget-content" lp-node="h6">Nguyễn Thị Minh Nguyệt</h6> </div>
                        <div id="PARAGRAPH59" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP55" lp-display="block">
                            <h6 class="widget-content" lp-node="h6">Kế toán - Lê Chân, Hải Phòng</h6> </div>
                    </div>
                </div>
                <div id="GROUP45" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="BOX46" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP45" lp-display="block">
                            <div class="widget-content"></div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="PARAGRAPH47" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP45" lp-display="block">
                            <p class="widget-content" lp-node="p">Buổi học nhiều ý nghĩa, giúp em học hỏi được nhiều kinh nghiệm thực tế giúp ích cho doanh nghiệp của mình.</p>
                        </div>
                        <div id="PARAGRAPH48" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP45" lp-display="block">
                            <h6 class="widget-content" lp-node="h6">Phạm Thị Hải</h6> </div>
                        <div id="PARAGRAPH49" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP45" lp-display="block">
                            <h6 class="widget-content" lp-node="h6">Công ty TNHH SX TM DV Vĩnh Xuyên</h6> </div>
                    </div>
                </div>
                <div id="HEADLINE425" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h5 class="widget-content" lp-node="h5">Tiêu đề nhỏ</h5> </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP300" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="LISTOP303" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">&nbsp;Phân biệt quan hệ lao động với quan hệ dân sự</li>
                        <li color="" style="color: rgb(255, 255, 255);">Làm rõ hợp đồng đào tạo với hợp đồng tập nghề</li>
                        <li color="" style="color: rgb(255, 255, 255);">Trách nhiệm Doanh Nghiệp trong kê khai và nộp thuế Thu nhập cá nhân</li>
                        <li color="" style="color: rgb(255, 255, 255);">Phân Loại đối tượng chịu thuế</li>
                        <li color="" style="color: rgb(255, 255, 255);">Những lưu ý về thuế TNCN trong các hợp đồng dân sự</li>
                        <li color="" style="color: rgb(255, 255, 255);">Những khoản phải tính đóng thuế TNCN</li>
                        <li color="" style="color: rgb(255, 255, 255);">Những khoản không tính đóng thuế TNCN</li>
                        <li color="" style="color: rgb(255, 255, 255);">Tính thuế TNCN với Lao động ký HĐLĐ trên 3 tháng</li>
                        <li color="" style="color: rgb(255, 255, 255);">Tính thuế TNCN với lao động không ký HĐLĐ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thuế TNCN với lao động có thu nhập ở nhiều nơi</li>
                        <li color="" style="color: rgb(255, 255, 255);">Trách nhiệm và nghĩa vụ quyết toán thuế TNCN</li>
                    </ol>
                </div>
                <div id="BOX301" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE302" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CÁC VẤN ĐỀ VỀ THUẾ THU NHẬP CÁ NHÂN KHI KÝ CÁC LOẠI HỢP ĐỒNG LAO ĐỘNG, CỘNG TÁC VIÊN, KHOÁN VIỆC</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION308" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="GROUP409" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="BOX410" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP409" lp-display="block">
                            <div class="widget-content">
                                <div id="HEADLINE411" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2">Ngày</h2> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX412" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP409" lp-display="block">
                            <div class="widget-content">
                                <div id="HEADLINE413" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2">Giờ</h2> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX414" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP409" lp-display="block">
                            <div class="widget-content">
                                <div id="HEADLINE415" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2">Phút</h2> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX416" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP409" lp-display="block">
                            <div class="widget-content">
                                <div id="HEADLINE417" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2">Giây</h2> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                </div>
                <div id="BOX315" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="FORM316" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:5673&quot;}]" lp-display="block">
                            <form class="widget-content"></form>
                        </div>
                        <div id="HEADLINE80" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h6 class="widget-content" lp-node="h6">VĂN PHÒNG LÀM VIỆC</h6> </div>
                        <div id="GROUP81" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                            <div class="widget-content">
                                <div id="SHAPE82" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP81" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,0,0,1)">
                                        <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="PARAGRAPH83" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP81" lp-display="block">
                                    <p class="widget-content" lp-node="p">Phòng 701 CT1 - Chung cư Skylight - Ngõ Hòa Bình 6 - 125D Minh Khai Q. Hai Bà Trưng - Hà Nội</p>
                                </div>
                            </div>
                        </div>
                        <div id="GROUP84" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                            <div class="widget-content">
                                <div id="SHAPE85" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP84" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,0,0,1)">
                                        <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="PARAGRAPH86" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP84" lp-display="block">
                                    <p class="widget-content" lp-node="p">Hotline:&nbsp; 1900 636 195 - 04 7306 2468</p>
                                </div>
                            </div>
                        </div>
                        <div id="GROUP87" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                            <div class="widget-content">
                                <div id="SHAPE88" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP87" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,0,0,1)">
                                        <path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="PARAGRAPH89" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP87" lp-display="block">
                                    <p class="widget-content" lp-node="p">&nbsp; &nbsp;Email: cskh@lakita.vn</p>
                                </div>
                            </div>
                        </div>
                        <div id="HEADLINE79" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h1 class="widget-content" lp-node="h1">Liên hệ</h1> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX319" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="SHAPE320" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                <path d="M5.5,7A1.5,1.5 0 0,0 7,5.5A1.5,1.5 0 0,0 5.5,4A1.5,1.5 0 0,0 4,5.5A1.5,1.5 0 0,0 5.5,7M21.41,11.58C21.77,11.94 22,12.44 22,13C22,13.55 21.78,14.05 21.41,14.41L14.41,21.41C14.05,21.77 13.55,22 13,22C12.45,22 11.95,21.77 11.58,21.41L2.59,12.41C2.22,12.05 2,11.55 2,11V4C2,2.89 2.89,2 4,2H11C11.55,2 12.05,2.22 12.41,2.58L21.41,11.58M13,20L20,13L11.5,4.5L4.5,11.5L13,20Z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="GROUP379" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE338" class="widget-element widget-snap wow pulse animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP379" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">Cơ hội mua ngay với giá chỉ bằng 33% so với giá ban đầu !</h2> </div>
                        <div id="HEADLINE337" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP379" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Chỉ dành cho 100 khách hàng nhanh nhất và may mắn nhất&nbsp;</h3> </div>
                        <div id="HEADLINE314" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP379" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">GIẢM GIÁ SỐC:&nbsp;<br><br></h2> </div>
                        <div id="HEADLINE313" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP379" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Nhanh tay lên, số lượng có hạn !!!</h5> </div>
                    </div>
                </div>
                <div id="HEADLINE386" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h5 class="widget-content" lp-node="h5">KM Chỉ dành cho khách hàng đăng ký tại đây!!!</h5> </div>
                <div id="COUNTDOWN419" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="<?php echo (strtotime('+1 day', strtotime(date('d-m-Y'))) - time()) / 60; ?>" lp-display="block">
                    <div class="widget-content">
                        <div><span>00</span></div>
                        <div><span>00</span></div>
                        <div><span>00</span></div>
                        <div><span>00</span></div>
                    </div>
                </div>
                <div id="BOX332" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="LINE387" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                            <div class="widget-content">
                                <div class="line"></div>
                            </div>
                        </div>
                        <div id="HEADLINE340" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">895.000đ</h2> </div>
                        <div id="SHAPE343" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#000000">
                                <path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,17L17,12H14V8H10V12H7L12,17Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="HEADLINE342" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">295.000đ</h2> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE310" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h4 class="widget-content" lp-node="h4">Chương trình khuyến mãi áp dụng đến hết ngày <?php echo date('d/m/Y') ?></h4> </div>
                <div id="HEADLINE352" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">Sau khi đăng ký mua khóa học, bộ phận CSKH của Lakita sẽ liên hệ với bạn để xác nhận thông tin, nhân viên bưu điện sẽ giao khóa học tận nơi cho bạn, <span style="color: rgb(244, 67, 54);"><span style="font-weight: bold;" color="">MIỄN PHÍ SHIP TOÀN QUỐC</span>.</span>&nbsp;<br color="" style="color: rgb(255, 255, 255);">Bạn chỉ phải trả tiền khi nhận được khóa học.</h3> </div>
                <div id="FORM345" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google-sheet" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:5749&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:5750&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:5751&quot;},{&quot;name&quot;:&quot;message&quot;,&quot;value&quot;:&quot;message&quot;,&quot;$$hashKey&quot;:&quot;object:5752&quot;},{&quot;name&quot;:&quot;street&quot;,&quot;value&quot;:&quot;street&quot;,&quot;$$hashKey&quot;:&quot;object:5919&quot;}]" lp-group="GROUP380" lp-display="block">
                    <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                        <div id="ITEM_FORM346" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                            <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" lp-name-id="name" required="required">
                        </div>
                        <div id="ITEM_FORM347" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                            <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" lp-name-id="email" required="required">
                        </div>
                        <div id="ITEM_FORM348" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                            <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại" lp-name-id="phone">
                        </div>
                        <div id="ITEM_FORM351" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                            <input class="widget-content" type="text" placeholder="Nhập địa chỉ" name="dia_chi" lp-label="Địa chỉ" lp-name-id="street" required="required">
                        </div>
                        <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                        <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                        <button id="btn-350" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                    </form>
                </div>
                <a id="BUTTON350" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM345" lp-display="table"><span class="widget-content">ĐĂNG KÍ NGAY</span> </a></div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <script type="text/javascript" async="" defer="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1516692740878"></script>
    </div>

    <!-- ******************** comment fb ********************************** -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <div class="fb-comments" data-href="https://lakita.vn/bao-hiem-xa-hoi-tien-luong-thue-thu-nhap-ca-nhan-2018.html" 
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
            $("#BUTTON170").click(function (e) {
                e.preventDefault();
                $("#btn-170").click();
            });
            $("#BUTTON350").click(function (e) {
                e.preventDefault();
                $("#btn-350").click();
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