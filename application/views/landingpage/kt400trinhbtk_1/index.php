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
        <meta property="fb:admins" content="100004021107387"/>
        <meta property="fb:app_id" content="162078224495583" />
        <meta property="og:type"   content="website" />
        <meta property="og:url" content="https://lakita.vn/tron-bo-lap-bao-cao-tai-chinh-2017-trinhbtk.html" />
        <meta property="og:title" content="Trọn bộ hướng dẫn lập báo cáo tài chính năm 2017" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/268x150/tron-bo-huong-dan-lap-bao-cao-tai-chinh-nam-2016.png" />
        <meta property="og:description" content="Khóa học được thiết kế dành cho kế toán đi làm và máy tính có kết nối internet" />
        <?php $this->load->view('landingpage/kt400trinhbtk/css'); ?>
        <?php include_once("plugin/analyticstracking.php"); ?>
                <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
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
            }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1645549219061949');
            fbq('track', 'PageView');
        </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1645549219061949&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=162078224495583&autoLogAppEvents=1';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
            <?php include_once("plugin/messenger.php"); ?>
        <div class="ladi-wraper-page">
            <div id="SECTION212" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX493" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="FORM486" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google-sheet" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:7068&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:7069&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:7070&quot;},{&quot;name&quot;:&quot;message&quot;,&quot;value&quot;:&quot;message&quot;,&quot;$$hashKey&quot;:&quot;object:7071&quot;}]" lp-display="block">
                                <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                    <div id="ITEM_FORM487" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" lp-name-id="name" required="required">
                                    </div>
                                    <div id="ITEM_FORM488" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" lp-name-id="email" required="required">
                                    </div>
                                    <div id="ITEM_FORM489" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại" lp-name-id="phone">
                                    </div>
                                    <div id="ITEM_FORM490" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <textarea class="widget-content" type="text" placeholder="Địa chỉ:" name="dia_chi" rows="4" lp-label="Lời nhắn" lp-name-id="message" required="required"></textarea>
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <button id="btn-491" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                                </form>
                            </div><a id="BUTTON491" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM486" lp-display="table"><span class="widget-content">ĐĂNG KÝ NGAY</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX226" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE225" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">BÁO CÁO TÀI CHÍNH</h2> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE217" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">10.000</h1> </div>
                    <div id="PARAGRAPH218" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">HỌC VIÊN TRÊN TOÀN QUỐC</h6> </div>
                    <div id="PARAGRAPH220" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">K/H HÀI LÒNG</h6> </div>
                    <div id="HEADLINE221" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">93%</h1> </div>
                    <div id="PARAGRAPH223" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">TỰ TIN HƠN VỚI BCTC</h6> </div>
                    <div id="HEADLINE224" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">82%</h1> </div>
                    <div id="HEADLINE485" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Đăng ký hôm nay để được tặng một<br>&nbsp;<span style="color: rgb(237, 214, 11);">"&nbsp;Khóa Học YoGa"</span><span style="color: rgb(213, 0, 0);">&nbsp;</span>miễn phí</h3> </div>
                    <div id="HEADLINE213" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">KHÓA HỌC TRỌN BỘ HƯỚNG DẪN LẬP</h1> </div>
                    <div id="BOX252" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block" lp-sticky="1" lp-sticky-pos="top" lp-sticky-kc="0px">
                        <div class="widget-content">
                            <div id="HEADLINE254" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Hotline:</h3> </div><a id="BUTTON256" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION416" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY!</span> </a>
                            <div id="HEADLINE255" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">1900 636 195 - 024 7306 2468</h3> </div>
                            <div id="IMAGE492" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/logo-1515731920.png"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION38" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block" lp-ani="wow pulse animated">
                <div class="container">
                    <div id="HEADLINE41" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5"><span style="font-weight: 700;">TIẾN SĨ HOÀNG QUANG TRUNG</span><br>Giám đốc Công ty DV kế toán Việt Nam - VINAFAS</h5> </div>
                    <div id="IMAGE240" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE258" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Ý KIẾN TỪ CHUYÊN GIA</h2> </div>
                    <div id="HEADLINE259" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">"Tôi đánh giá cao sự khác biệt của khóa học này, bài giảng rất chi tiết và tận tình sẽ giúp người học nắm được và làm được một báo cáo tài chính hoàn thiện và tổng thể"</h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION86" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE87" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">NỘI DUNG KHÓA HỌC</h2> </div>
                    <div id="GROUP463" class="widget-element widget-snap widget-group wow bounceInLeft animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX91" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP463" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE92" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP270" lp-action-type="popup" lp-target="" href="">
                                        <h6 class="widget-content" lp-node="h6"><span style="text-decoration-line: underline;" class="lp-underline">CHƯƠNG 2</span>: HƯỚNG DẪN LẬP VÀ 09 BƯỚC KIỂM TRA BẢNG CÂN ĐỐI PHÁT SINH&nbsp;</h6> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX260" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP463" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE261" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP456" lp-action-type="popup" lp-target="" href="">
                                        <h6 class="widget-content" lp-node="h6"><span style="text-decoration-line: underline;" class="lp-underline">CHƯƠNG 3</span>: HƯỚNG DẪN LẬP BẢNG CÂN ĐỐI KẾ TOÁN</h6> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX249" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP463" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE250" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP264" lp-action-type="popup" lp-target="" href="">
                                        <h6 class="widget-content" lp-node="h6"><span style="text-decoration-line: underline;" class="lp-underline">CHƯƠNG 1</span>: 08 NHIỆM VỤ KẾ TOÁN CẦN THỰC HIỆN TẠI THỜI ĐIỂM CUỐI KỲ</h6> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP464" class="widget-element widget-snap widget-group wow bounceInRight animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX93" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP464" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE94" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP288" lp-action-type="popup" lp-target="" href="">
                                        <h6 class="widget-content" lp-node="h6"><span style="text-decoration-line: underline;" class="lp-underline">CHƯƠNG 5</span>: HƯỚNG DẪN LẬP BÁO CÁO LƯU CHUYỂN TIỀN TỆ</h6> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX95" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP464" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE96" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP276" lp-action-type="popup" lp-target="" href="">
                                        <h6 class="widget-content" lp-node="h6"><span style="text-decoration-line: underline;" class="lp-underline">CHƯƠNG 4</span>: HƯỚNG DẪN LẬP BÁO CÁO KẾT QUẢ KINH DOANH</h6> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX262" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP464" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE263" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP294" lp-action-type="popup" lp-target="" href="">
                                        <h6 class="widget-content" lp-node="h6"><span style="text-decoration-line: underline;" class="lp-underline">CHƯƠNG 6</span>: HƯỚNG DẪN LẬP THUYẾT MINH BÁO CÁO TÀI CHÍNH</h6> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="IMAGE480" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/business-presentation-2253131_1920-1513092253.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP456" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="LINEVERTICAL459" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH460" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
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
            <div id="SECTION300" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block" lp-ani="wow flash animated">
                <div class="container">
                    <div id="BOX301" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE302" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">PHẠM THỊ NHUNG</h4> </div>
                            <div id="HEADLINE308" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">GIẢNG VIÊN</h6> </div>
                            <div id="LISTOP315" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                                <ol class="widget-content">
                                    <li>Chứng chỉ kế toán quốc tế CAT/ACCA do Hiệp hội kế toán công chứng Anh Quốc Cấp bằng. </li>
                                    <li>Kế toán tổng hợp tại chi nhánh công ty TNHH thực phẩm và giải khát "Cánh diều xanh", thuộc tập đoàn IPP liên Thái Bình Dương</li>
                                    <li>Kế toán trưởng công ty TNHH Emotive 100% vốn của Mỹ</li>
                                    <li>Tư vấn kế toán, thuế cho nhiều doanh nghiệp trong nước và doanh nghiệp có vốn đầu tư nước ngoài FDI0</li>
                                    <li>4 năm kế toán tổng hợp và thuế Chuỗi nhà hàng ăn nhanh (BurgerKing, Pizza Domino, Gà Popeys, Dunkin Donut) thuôc tập đoàn Liên Thái Bình Dương (IPP group)</li>
                                </ol>
                            </div>
                            <div id="LINE479" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE317" class="widget-element widget-snap wow bounce animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">NGƯỜI ĐỒNG HÀNH CÙNG BẠN</h2> </div>
                    <div id="IMAGE478" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/2-1513766663.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP294" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="LINEVERTICAL297" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH298" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bài 1: Mối quan hệ giữa 3 Báo cáo: CĐKT, KQKD và Lưu chuyển tiền tệ&nbsp;
                            <br>Bài 2: Ý nghĩa, cách lập Thuyết minh BCTC&nbsp;
                            <br>Bài 3: Thực hành lập thuyết minh báo cáo tài chính ( Phần 1 )&nbsp;
                            <br>Bài 4: Thực hành lập thuyết minh báo cáo tài chính ( Phần 2 )&nbsp;
                            <br>Bài 5: Tổng hợp tất cả Tài liệu tham khảo</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP288" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="LINEVERTICAL291" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH292" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bài 1: Ý nghĩa Báo cáo lưu chuyển tiền tệ&nbsp;
                            <br>Bài 2: Cách lập Báo Cáo lưu chuyển tiền tệ ( Phần 1 )&nbsp;
                            <br>Bài 3: Cách lập Báo Cáo lưu chuyển tiền tệ ( Phần 2 )&nbsp;
                            <br>Bài 4: Thực hành Báo Cáo lưu chuyển tiền tệ (Phần 1)&nbsp;
                            <br>Bài 5: Thực hành Báo Cáo lưu chuyển tiền tệ (Phần 2)</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP282" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="LINEVERTICAL285" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH286" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
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
            <div id="POPUP276" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="LINEVERTICAL279" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH280" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
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
            <div id="POPUP270" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="LINEVERTICAL273" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH274" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
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
            <div id="POPUP264" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="PARAGRAPH268" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bài 1: 08 nhiệm vụ cần thực hiện cuối kỳ
                            <br>Bài 2: Các lưu ý cần nhớ khi làm bảng lương (tối thiểu hóa chi phí bảo hiểm, thuế TNCN)&nbsp;
                            <br>Bài 3: Hạch toán lương và các khoản trích theo lương (phần 1)&nbsp;
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
                    <div id="LINEVERTICAL267" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION98" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE119" class="widget-element widget-snap wow pulse animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">KHÓA HỌC MANG LẠI GÌ CHO BẠN</h2> </div>
                    <div id="LISTOP319" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>Tăng kỹ năng trong công việc, học tập chỉ với 9h học online</li>
                            <li>Giảng viên trực tiếp trả lời câu hỏi thắc mắc của học viên ngay cả trên công việc thực tiễn</li>
                            <li>Học và thực hành ngay trên dữ liệu thực tế giúp bạn áp dụng thực tiễn dễ dàng hơn</li>
                            <li>Khóa học trọn đời và được cập nhật liên tục các thông tư miễn phí</li>
                            <li>Dịch vụ chăm sóc email, bạn sẽ nhận được các bài viết chuyên môn kế toán, giúp bạn cập nhật cách làm việc dễ dàng, đơn giản.</li>
                            <li>Được hỗ trợ thường xuyên với các đội ngũ trợ giảng chuyên nghiệp</li>
                            <li>Hướng dẫn lập đúng và 8 bước kiểm tra bảng cân đối phát sinh</li>
                        </ol>
                    </div><a id="BUTTON320" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION416" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY!</span> </a>
                    <div id="IMAGE465" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/Apple-Mac-Computer-Screen-PNG-1513826485.png"></div>
                            <div class="lp-show-image"></div>
                            <div id="YOUTUBE466" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                                <iframe class="widget-content" src="https://www.youtube.com/embed/UPkqH3VV7jc?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION338" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX341" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH342" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Học <span style="font-weight: bold;">MỌI LÚC, MỌI NƠI</span>, mô hình tiên tiến, giúp bạn <span style="font-weight: bold;">TƯƠNG TÁC</span> và <span style="font-weight: bold;">HỌC TẬP</span> cùng thầy và hàng trăm học viên&nbsp;</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="IMAGE343" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-xam.png"></div>
                            <div class="lp-show-image"></div>
                            <div id="HEADLINE344" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">HỌC ONLINE</h6> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX348" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH349" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Chỉ với 9H học online bao gồm 46 VIDEOS bài giảng giúp bạn thành thạo công việc</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="IMAGE350" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-xam.png"></div>
                            <div class="lp-show-image"></div>
                            <div id="HEADLINE351" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">TIẾT KIỆM THỜI GIAN</h6> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX355" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH356" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Cam kết lên được báo cái tài chính sau khi hoàn thành khóa học. Hoàn tiền 100% nếu không hài lòng về khóa học.</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="IMAGE357" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-xam.png"></div>
                            <div class="lp-show-image"></div>
                            <div id="HEADLINE358" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">cAM KẾT</h6> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX359" class="widget-element widget-snap ladi-drop wow wobble animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE360" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M19,3H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX352" class="widget-element widget-snap ladi-drop wow wobble animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE353" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX345" class="widget-element widget-snap ladi-drop wow wobble animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE346" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M12,10A2,2 0 0,1 14,12C14,12.5 13.82,12.94 13.53,13.29L16.7,22H14.57L12,14.93L9.43,22H7.3L10.47,13.29C10.18,12.94 10,12.5 10,12A2,2 0 0,1 12,10M12,8A4,4 0 0,0 8,12C8,12.5 8.1,13 8.28,13.46L7.4,15.86C6.53,14.81 6,13.47 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12C18,13.47 17.47,14.81 16.6,15.86L15.72,13.46C15.9,13 16,12.5 16,12A4,4 0 0,0 12,8M12,4A8,8 0 0,0 4,12C4,14.36 5,16.5 6.64,17.94L5.92,19.94C3.54,18.11 2,15.23 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12C22,15.23 20.46,18.11 18.08,19.94L17.36,17.94C19,16.5 20,14.36 20,12A8,8 0 0,0 12,4Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION134" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX476" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX475" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX474" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX473" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX470" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX467" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE152" class="widget-element widget-snap wow bounceIn animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">HỌC VIÊN NÓI GÌ VỀ CHÚNG TÔI</h2> </div>
                    <div id="GROUP371" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP372" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP371">
                                <div class="widget-content">
                                    <div id="PARAGRAPH373" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP372" lp-display="block">
                                        <p class="widget-content" lp-node="p">Khóa học giúp tôi nắm vững kiến thức về nghiệp vụ kế toán hơn</p>
                                    </div>
                                    <div id="HEADLINE374" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP372" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">Mai Thị Minh</h5> </div>
                                    <div id="BOX375" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP372" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="HEADLINE376" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP372" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Kế toán</h6> </div>
                                </div>
                            </div>
                            <div id="GROUP377" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP371">
                                <div class="widget-content">
                                    <div id="PARAGRAPH378" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP377" lp-display="block">
                                        <p class="widget-content" lp-node="p">Khóa học hữu ích, giúp tôi biết thêm được nhiều kiến thức</p>
                                    </div>
                                    <div id="HEADLINE379" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP377" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">Nguyễn Thị Dung</h5> </div>
                                    <div id="BOX380" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP377" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="HEADLINE381" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP377" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Kế toán</h6> </div>
                                </div>
                            </div>
                            <div id="GROUP382" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP371">
                                <div class="widget-content">
                                    <div id="PARAGRAPH383" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP382" lp-display="block">
                                        <p class="widget-content" lp-node="p">Khóa học thú vị mang lại nhiều kiến thức bổ ích cho học viên phù hợp với những người đi làm không có thời gian học trực tiếp</p>
                                    </div>
                                    <div id="HEADLINE384" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP382" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">Nguyễn Huyền</h5> </div>
                                    <div id="BOX385" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP382" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="HEADLINE386" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP382" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Kế toán</h6> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP370" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP147" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP370">
                                <div class="widget-content">
                                    <div id="PARAGRAPH148" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP147" lp-display="block">
                                        <p class="widget-content" lp-node="p">Nội dung từng bài rất chi tiết, dễ hiểu. Giúp tôi tiếp thu kiến thức một cách dễ dàng hơn.</p>
                                    </div>
                                    <div id="HEADLINE149" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP147" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">Đặng Thị Nhã</h5> </div>
                                    <div id="BOX150" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP147" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="HEADLINE151" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP147" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Kế toán</h6> </div>
                                </div>
                            </div>
                            <div id="GROUP142" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP370">
                                <div class="widget-content">
                                    <div id="PARAGRAPH143" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP142" lp-display="block">
                                        <p class="widget-content" lp-node="p">Giảng viên hỗ trợ nhiệt tình, giảng dạy dễ hiểu, kiến thức mang tính thực tế, ứng dụng cao trong toán/tài chính của ngân hàng.</p>
                                    </div>
                                    <div id="HEADLINE144" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP142" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">Như Lan</h5> </div>
                                    <div id="HEADLINE146" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP142" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Ngân hàng TMCP Đại Chúng Việt Nam</h6> </div>
                                    <div id="BOX145" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP142" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP137" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP370">
                                <div class="widget-content">
                                    <div id="PARAGRAPH138" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP137" lp-display="block">
                                        <p class="widget-content" lp-node="p">Khóa học thật sư bổ ích, qua khóa học này tôi đã học được rất nhiều kinh nghiệm trong lĩnh vực kế toán.</p>
                                    </div>
                                    <div id="HEADLINE139" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP137" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">Vũ Thị Kim Nga</h5> </div>
                                    <div id="HEADLINE141" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP137" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Kế toán</h6> </div>
                                    <div id="BOX140" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP137" lp-display="block">
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
            <div id="SECTION416" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX445" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE437" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" version="1.0" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: inline-block;" fill="rgba(255,255,255,1)">
                                    <path d="M29.23 13.342L17.633 1.747C17.198 1.31 16.618 1.07 16 1.07s-1.196.24-1.632.677L11.84 4.275H8.005V8.11l-5.332 5.33v17.49H29.33V13.443l-.1-.1zm-1.105.405l-4.13 4.13V9.618l4.13 4.128zM15.12 2.5c.47-.47 1.29-.47 1.76 0l1.774 1.774h-5.307L15.12 2.5zm4.6 2.84l3.21 3.212v10.39l-2.47 2.47-2.828-2.83c-.436-.436-1.016-.677-1.633-.677s-1.198.24-1.634.677l-2.87 2.87-2.427-2.426V5.34h10.648zm-15.34 7.9l3.624-3.624v8.343l-4.172-4.173.548-.548zm-.642 2.818v-.856l7.003 7.003-.078.08-6.924 6.922v-13.15zm.85 13.806l.574-.573h.002l9.957-9.955c.47-.47 1.29-.47 1.76 0l10.53 10.53H4.59zM28.263 15.36v13.848l-7.046-7.043 7.046-7.046v.24z"></path>
                                    <path d="M12.268 8.54h7.464v1.065h-7.464V8.54zM12.268 14.937h7.464v1.066h-7.464v-1.066zM12.268 11.738h5.33v1.066h-5.33v-1.066z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE438" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">ĐĂNG KÝ MUA NGAY ĐỂ NHẬN ƯU ĐÃI LỚN LÊN TỚI 56%</h2> </div>
                            <div id="HEADLINE447" class="widget-element widget-snap wow wobble animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">CHỈ CÒN 395.000</h2> </div>
                            <div id="HEADLINE446" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">895.000</h2> </div>
                            <div id="BOX440" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                                <div class="widget-content">
                                    <div id="SHAPE441" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" version="1.0" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: inline-block;" fill="rgba(255,255,255,1)">
                                            <path d="M2.64 15.992c0 7.366 5.97 13.337 13.336 13.337s13.337-5.97 13.337-13.338-5.97-13.337-13.337-13.337S2.64 8.625 2.64 15.992zm25.605 0c0 6.765-5.504 12.27-12.27 12.27s-12.27-5.505-12.27-12.27 5.505-12.27 12.27-12.27 12.27 5.505 12.27 12.27z"></path>
                                            <path d="M19.16 16.754l.753-.754-6.035-6.035-.754.754 5.28 5.28-5.255 5.256.753.754 3.013-3.013z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div><a id="BUTTON442" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">Đăng ký Liên hệ ngay</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX417" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP419" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="GROUP420" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP419">
                                        <div class="widget-content">
                                            <div id="BOX421" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP420" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                            <div id="HEADLINE422" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP420" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">NGÀY</h6> </div>
                                            <div id="HEADLINE423" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP420" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">GIỜ</h6> </div>
                                            <div id="BOX424" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP420" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                            <div id="BOX425" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP420" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                            <div id="HEADLINE426" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP420" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">GIÂY</h6> </div>
                                            <div id="HEADLINE427" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP420" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">PHÚT</h6> </div>
                                            <div id="BOX428" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP420" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="COUNTDOWN429" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="<?php echo (strtotime('+1 day', strtotime(date('d-m-Y'))) - time()) / 60; ?>" lp-endtimetype="timedown" lp-group="GROUP419" lp-display="block">
                                        <div class="widget-content">
                                            <div><span>54</span></div>
                                            <div><span>14</span></div>
                                            <div><span>2</span></div>
                                            <div><span>0</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP430" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="FORM432" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:10216&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:10218&quot;},{&quot;name&quot;:&quot;street&quot;,&quot;value&quot;:&quot;street&quot;,&quot;$$hashKey&quot;:&quot;object:10302&quot;}]" lp-group="GROUP430" lp-display="block">
                                        <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                            <div id="ITEM_FORM433" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                            </div>
                                            <div id="ITEM_FORM435" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                                            </div>
                                            <div id="ITEM_FORM444" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="text" placeholder="Nhập địa chỉ" name="dia_chi" lp-label="Địa chỉ" lp-name-id="street" required="required">
                                            </div>
                                            <input type="hidden" value="lakita.vn@gmail.com" name="email" />
                                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                            <button id="btn-431" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                                        </form>
                                    </div><a id="BUTTON431" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM432" lp-group="GROUP430" lp-display="table"><span class="widget-content">ĐĂNG KÝ NGAY</span> </a></div>
                            </div>
                            <div id="HEADLINE418" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4"><br color="" style="color: rgb(244, 67, 54);"><span style="color: rgb(0, 0, 0);">ĐĂNG KÝ HÔM NAY ĐỂ ĐƯỢC TẶNG MỘT</span> KHÓA HỌC YOGA. <span style="color: rgb(0, 0, 0);">THỜI GIAN CÓ HẠN</span></h4> </div>
                            <div id="HEADLINE477" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">ĐĂNG KÝ ĐỂ NHẬN ƯU ĐÃI</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION174" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="LINE176" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="GROUP188" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE189" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP188" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">LIÊN HỆ CHÚNG TÔI</h6> </div>
                            <div id="HEADLINE190" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP188" lp-display="block">
                                <p class="widget-content" lp-node="p">Email: cskh@lakita.vn&nbsp;
                                    <br>Hotline: 1900 636 195
                                    <br>Website: lakita.vn</p>
                            </div>
                        </div>
                    </div>
                    <div id="IMAGE449" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/logo_white-1513079500.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE452" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <p class="widget-content" lp-node="p">Địa chỉ: Tầng 7, tòa CT1 Skylight, 125D Minh Khai, HBT, Hà Nội
                            <br>Điện thoại: 024 7306 2468</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <script type="text/javascript" async="" defer="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1515744576286"></script>
        </div>

        <!-- ******************** comment fb ********************************** -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="fb-comments" data-href="http://lapbctc2016499.lakita.vn" 
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
                $("#BUTTON431").click(function (e) {
                    e.preventDefault();
                    $("#btn-431").click();
                });
                $("#BUTTON491").click(function (e) {
                    e.preventDefault();
                    $("#btn-491").click();
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