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
        <meta property="fb:admins" content="100004021107387"/>
        <meta property="fb:app_id" content="162078224495583" />
        <meta property="og:type"   content="website" /> 
        <meta property="og:title" content="Yoga dành cho người làm văn phòng" />
        <meta property="og:url" content="https://lakita.vn/yoga-danh-cho-nguoi-lam-van-phong-2.html" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/360x260/cac-bai-the-duc-tai-cho-1512787899.jpg">
        <meta property="og:description" content="Hỗ trợ điều trị và phòng tránh những vấn đề về sức khỏe và tinh thần thường gặp cho người làm việc văn phòng." />
        <meta name="format-detection" content="telephone=no" />
        <?php $this->load->view('landingpage/y1002/css'); ?>
        <?php include_once("plugin/analyticstracking.php"); ?>
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
        <div class="ladi-wraper-page">
            <div id="SECTION2" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container"><a id="BUTTON5" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content"><div id="HEADLINE496" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block"><h2 class="widget-content" lp-node="h2">GIẢM GIÁ</h2> </div></span> </a>
                    <div id="PARAGRAPH7" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Hỗ trợ điều trị và phòng tránh những vấn đề về sức khỏe và&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;tinh thần thường gặp cho người làm việc văn phòng.</h6> </div>
                    <div id="HEADLINE8" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Liệu pháp thần kỳ "đánh bay" mọi chứng bệnh nơi công sở</h5> </div>
                    <div id="BOX471" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE472" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">MUA NGAY<br>để nhận ƯU ĐÃI tốt nhất!!!</h4> </div>
                            <div id="GROUP484" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="FORM485" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:6536&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:6537&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:6538&quot;}]" lp-group="GROUP484" lp-display="block">
                                        <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                            <div id="ITEM_FORM486" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                            </div>
                                            <div id="ITEM_FORM487" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                                            </div>
                                            <div id="ITEM_FORM488" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                                            </div>
                                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                            <button id="btn-489" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; z-index: -9; background-color: transparent"> MUA HÀNG </button>
                                        </form>
                                    </div><a id="BUTTON489" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM485" lp-group="GROUP484" lp-display="table"><span class="widget-content">MUA KHÓA HỌC</span> </a></div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE492" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">&nbsp;<br>YOGA CHO DÂN VĂN PHÒNG</h5> </div>
                    <div id="HEADLINE493" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">KHÓA HỌC TRỰC TUYẾN:</h3> </div>
                    <div id="HEADLINE495" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">&nbsp; &nbsp;50%</h2> </div><a id="BUTTON686" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">&nbsp;<span style="color: rgb(10, 13, 45);">CHỈ CÒN</span>&nbsp;<div id="HEADLINE692" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" href="" lp-direction="" style="top: 8px; left: 158px; width: 136.734px; text-align: left; padding: 0px; display: block; height: 59px;"><h2 class="widget-content" lp-node="h2" href="" style="width: 136.734px; font-size: 53px; line-height: 59px; background-color: rgba(255, 255, 255, 0); font-family: Open Sans, sans-serif; color: rgb(10, 13, 45); font-weight: 700; background-size: cover; background-origin: content-box; background-position: center top; background-repeat: no-repeat; object-fit: cover; height: 59px; display: table-cell; vertical-align: middle;">295k</h2> </div></span> </a></div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION41" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE42" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">NỘI DUNG PHONG PHÚ, ĐA DẠNG</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION81" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX120" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE121" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Thiết kế ĐẶC BIỆT phù hợp với thể chất, thói quen, đặc thù công việc của những người thường xuyên làm việc trong văn phòng</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="IMAGE423" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga_vp-1512980010.jpg"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH115" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">VẤN ĐỀ VỀ ĐAU VAI, CỔ, GÁY</p>
                    </div>
                    <div id="PARAGRAPH112" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">VẤN ĐỀ VỀ ĐAU THẮT LƯNG</p>
                    </div>
                    <div id="PARAGRAPH109" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">VẤN ĐỀ VỀ TIÊU HÓA</p>
                    </div>
                    <div id="PARAGRAPH538" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">TRẺ HÓA NÉT MẶT</p>
                    </div>
                    <div id="PARAGRAPH88" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">NĂNG LƯỢNG HƠI THỞ CUỘC SỐNG</p>
                    </div>
                    <div id="SHAPE540" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1664 1896.0833" fill="rgba(10,13,45,1)">
                            <path d="M1191 408h177l-72-218-12-47q-2-16-2-20h-4l-3 20q0 1-3.5 18t-7.5 29zM736 1440q0 12-10 24l-319 319q-10 9-23 9-12 0-23-9L41 1463q-15-16-7-35 8-20 30-20h192V32q0-14 9-23t23-9h192q14 0 23 9t9 23v1376h192q14 0 23 9t9 23zm836 119v233H988v-90l369-529q12-18 21-27l11-9v-3q-2 0-6.5.5t-7.5.5q-12 3-30 3h-232v115H993v-229h567v89l-369 530q-6 8-21 26l-11 11v2l14-2q9-2 30-2h248v-119h121zm89-897v106h-288V662h75l-47-144h-243l-47 144h75v106H899V662h70L1199 0h162l230 662h70z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="PARAGRAPH103" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">VẤN ĐỀ VỀ CỔ TAY, NGÓN TAY</p>
                    </div>
                    <div id="PARAGRAPH106" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">VẤN ĐỀ ĐÔNG CỨNG KHỚP VAI</p>
                    </div>
                    <div id="SHAPE541" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1664 1896.0833" fill="rgba(10,13,45,1)">
                            <path d="M1191 408h177l-72-218-12-47q-2-16-2-20h-4l-3 20q0 1-3.5 18t-7.5 29zM736 1440q0 12-10 24l-319 319q-10 9-23 9-12 0-23-9L41 1463q-15-16-7-35 8-20 30-20h192V32q0-14 9-23t23-9h192q14 0 23 9t9 23v1376h192q14 0 23 9t9 23zm836 119v233H988v-90l369-529q12-18 21-27l11-9v-3q-2 0-6.5.5t-7.5.5q-12 3-30 3h-232v115H993v-229h567v89l-369 530q-6 8-21 26l-11 11v2l14-2q9-2 30-2h248v-119h121zm89-897v106h-288V662h75l-47-144h-243l-47 144h75v106H899V662h70L1199 0h162l230 662h70z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE542" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1664 1896.0833" fill="rgba(10,13,45,1)">
                            <path d="M1191 408h177l-72-218-12-47q-2-16-2-20h-4l-3 20q0 1-3.5 18t-7.5 29zM736 1440q0 12-10 24l-319 319q-10 9-23 9-12 0-23-9L41 1463q-15-16-7-35 8-20 30-20h192V32q0-14 9-23t23-9h192q14 0 23 9t9 23v1376h192q14 0 23 9t9 23zm836 119v233H988v-90l369-529q12-18 21-27l11-9v-3q-2 0-6.5.5t-7.5.5q-12 3-30 3h-232v115H993v-229h567v89l-369 530q-6 8-21 26l-11 11v2l14-2q9-2 30-2h248v-119h121zm89-897v106h-288V662h75l-47-144h-243l-47 144h75v106H899V662h70L1199 0h162l230 662h70z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE544" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1664 1896.0833" fill="rgba(10,13,45,1)">
                            <path d="M1191 408h177l-72-218-12-47q-2-16-2-20h-4l-3 20q0 1-3.5 18t-7.5 29zM736 1440q0 12-10 24l-319 319q-10 9-23 9-12 0-23-9L41 1463q-15-16-7-35 8-20 30-20h192V32q0-14 9-23t23-9h192q14 0 23 9t9 23v1376h192q14 0 23 9t9 23zm836 119v233H988v-90l369-529q12-18 21-27l11-9v-3q-2 0-6.5.5t-7.5.5q-12 3-30 3h-232v115H993v-229h567v89l-369 530q-6 8-21 26l-11 11v2l14-2q9-2 30-2h248v-119h121zm89-897v106h-288V662h75l-47-144h-243l-47 144h75v106H899V662h70L1199 0h162l230 662h70z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE545" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1664 1896.0833" fill="rgba(10,13,45,1)">
                            <path d="M1191 408h177l-72-218-12-47q-2-16-2-20h-4l-3 20q0 1-3.5 18t-7.5 29zM736 1440q0 12-10 24l-319 319q-10 9-23 9-12 0-23-9L41 1463q-15-16-7-35 8-20 30-20h192V32q0-14 9-23t23-9h192q14 0 23 9t9 23v1376h192q14 0 23 9t9 23zm836 119v233H988v-90l369-529q12-18 21-27l11-9v-3q-2 0-6.5.5t-7.5.5q-12 3-30 3h-232v115H993v-229h567v89l-369 530q-6 8-21 26l-11 11v2l14-2q9-2 30-2h248v-119h121zm89-897v106h-288V662h75l-47-144h-243l-47 144h75v106H899V662h70L1199 0h162l230 662h70z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE548" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1664 1896.0833" fill="rgba(10,13,45,1)">
                            <path d="M1191 408h177l-72-218-12-47q-2-16-2-20h-4l-3 20q0 1-3.5 18t-7.5 29zM736 1440q0 12-10 24l-319 319q-10 9-23 9-12 0-23-9L41 1463q-15-16-7-35 8-20 30-20h192V32q0-14 9-23t23-9h192q14 0 23 9t9 23v1376h192q14 0 23 9t9 23zm836 119v233H988v-90l369-529q12-18 21-27l11-9v-3q-2 0-6.5.5t-7.5.5q-12 3-30 3h-232v115H993v-229h567v89l-369 530q-6 8-21 26l-11 11v2l14-2q9-2 30-2h248v-119h121zm89-897v106h-288V662h75l-47-144h-243l-47 144h75v106H899V662h70L1199 0h162l230 662h70z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE549" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1664 1896.0833" fill="rgba(10,13,45,1)">
                            <path d="M1191 408h177l-72-218-12-47q-2-16-2-20h-4l-3 20q0 1-3.5 18t-7.5 29zM736 1440q0 12-10 24l-319 319q-10 9-23 9-12 0-23-9L41 1463q-15-16-7-35 8-20 30-20h192V32q0-14 9-23t23-9h192q14 0 23 9t9 23v1376h192q14 0 23 9t9 23zm836 119v233H988v-90l369-529q12-18 21-27l11-9v-3q-2 0-6.5.5t-7.5.5q-12 3-30 3h-232v115H993v-229h567v89l-369 530q-6 8-21 26l-11 11v2l14-2q9-2 30-2h248v-119h121zm89-897v106h-288V662h75l-47-144h-243l-47 144h75v106H899V662h70L1199 0h162l230 662h70z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="PARAGRAPH550" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">CHƯƠNG I</p>
                    </div>
                    <div id="PARAGRAPH551" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">CHƯƠNG II</p>
                    </div>
                    <div id="PARAGRAPH552" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">CHƯƠNG III</p>
                    </div>
                    <div id="PARAGRAPH553" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">CHƯƠNG IV</p>
                    </div>
                    <div id="PARAGRAPH554" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">CHƯƠNG V</p>
                    </div>
                    <div id="PARAGRAPH555" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">CHƯƠNG VI</p>
                    </div>
                    <div id="BOX267" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE268" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">5</h1> </div>
                            <div id="BOX269" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE270" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">BÀI TẬP THỞ</h6> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE271" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Tăng năng lượng tích cực</h6> </div>
                            <div id="HEADLINE272" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Thư giãn, giải phóng tâm trí</h6> </div>
                            <div id="HEADLINE273" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Loại bỏ lo âu</h6> </div>
                            <div id="HEADLINE274" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Làm chậm quá trình lão hóa</h6> </div>
                            <div id="LINE275" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="LINE276" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="LINE277" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div><a href="#BOX636" id="BUTTON289" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">ĐĂNG KÝ NGAY</span> </a>
                    <div id="BOX256" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE257" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">50</h1> </div>
                            <div id="BOX258" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE259" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">TƯ THẾ</h6> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE260" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Giúp lưu thông khí huyết</h6> </div>
                            <div id="HEADLINE261" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Làm mềm dẻo cột sống</h6> </div>
                            <div id="HEADLINE262" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Xoa dịu các vùng đau nhức</h6> </div>
                            <div id="LINE263" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="LINE264" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="LINE265" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="HEADLINE266" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Giải tỏa căng thẳng</h6> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH693" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">CHƯƠNG VII</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION122" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE123" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">GIẢI QUYẾT VẤN ĐỀ "NÓNG" NHẤT CỦA&nbsp;<br>DÂN VĂN PHÒNG</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION132" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP179" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX145" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP179" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX177" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP179" lp-display="block">
                                <div class="widget-content">
                                    <div id="SHAPE178" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1672.2646 1896.0833" fill="rgba(255,255,255,1)">
                                            <path d="M128 1664h288v-288H128v288zm352 0h320v-288H480v288zm-352-352h288V992H128v320zm352 0h320V992H480v320zM128 928h288V640H128v288zm736 736h320v-288H864v288zM480 928h320V640H480v288zm768 736h288v-288h-288v288zm-384-352h320V992H864v320zM512 448V160q0-13-9.5-22.5T480 128h-64q-13 0-22.5 9.5T384 160v288q0 13 9.5 22.5T416 480h64q13 0 22.5-9.5T512 448zm736 864h288V992h-288v320zM864 928h320V640H864v288zm384 0h288V640h-288v288zm32-480V160q0-13-9.5-22.5T1248 128h-64q-13 0-22.5 9.5T1152 160v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm384-64v1280q0 52-38 90t-90 38H128q-52 0-90-38t-38-90V384q0-52 38-90t90-38h128v-96q0-66 47-113T416 0h64q66 0 113 47t47 113v96h384v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h128q52 0 90 38t38 90z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP180" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX181" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP180" lp-display="block">
                                <div class="widget-content">
                                    <div id="GROUP572" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE573" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP572" lp-display="block">
                                                <h5 class="widget-content" lp-node="h5">Giảm áp lực công việc</h5> </div>
                                            <div id="PARAGRAPH574" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP572" lp-display="block">
                                                <p class="widget-content" lp-node="p">Các bài tập giúp học viên thư giãn, tĩnh tâm, xua tan mệt mỏi, tăng cao năng lực tự phục hồi, mang tới cho bạn giấc ngủ ngon, rèn luyện tinh thần để giải quyết công việc tốt hơn.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX184" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP180" lp-display="block">
                                <div class="widget-content">
                                    <div id="SHAPE185" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1672.2646 1896.0833" fill="rgba(255,255,255,1)">
                                            <path d="M128 1664h288v-288H128v288zm352 0h320v-288H480v288zm-352-352h288V992H128v320zm352 0h320V992H480v320zM128 928h288V640H128v288zm736 736h320v-288H864v288zM480 928h320V640H480v288zm768 736h288v-288h-288v288zm-384-352h320V992H864v320zM512 448V160q0-13-9.5-22.5T480 128h-64q-13 0-22.5 9.5T384 160v288q0 13 9.5 22.5T416 480h64q13 0 22.5-9.5T512 448zm736 864h288V992h-288v320zM864 928h320V640H864v288zm384 0h288V640h-288v288zm32-480V160q0-13-9.5-22.5T1248 128h-64q-13 0-22.5 9.5T1152 160v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm384-64v1280q0 52-38 90t-90 38H128q-52 0-90-38t-38-90V384q0-52 38-90t90-38h128v-96q0-66 47-113T416 0h64q66 0 113 47t47 113v96h384v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h128q52 0 90 38t38 90z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP192" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX193" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP192" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX196" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP192" lp-display="block">
                                <div class="widget-content">
                                    <div id="SHAPE197" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1672.2646 1896.0833" fill="rgba(255,255,255,1)">
                                            <path d="M128 1664h288v-288H128v288zm352 0h320v-288H480v288zm-352-352h288V992H128v320zm352 0h320V992H480v320zM128 928h288V640H128v288zm736 736h320v-288H864v288zM480 928h320V640H480v288zm768 736h288v-288h-288v288zm-384-352h320V992H864v320zM512 448V160q0-13-9.5-22.5T480 128h-64q-13 0-22.5 9.5T384 160v288q0 13 9.5 22.5T416 480h64q13 0 22.5-9.5T512 448zm736 864h288V992h-288v320zM864 928h320V640H864v288zm384 0h288V640h-288v288zm32-480V160q0-13-9.5-22.5T1248 128h-64q-13 0-22.5 9.5T1152 160v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm384-64v1280q0 52-38 90t-90 38H128q-52 0-90-38t-38-90V384q0-52 38-90t90-38h128v-96q0-66 47-113T416 0h64q66 0 113 47t47 113v96h384v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h128q52 0 90 38t38 90z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP584" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP192">
                                <div class="widget-content">
                                    <div id="PARAGRAPH586" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP584" lp-display="block">
                                        <p class="widget-content" lp-node="p">Tạo tâm thế lạc quan, suy nghĩ sáng suốt, kích thích khả năng sáng tạo và sự tập trung trong công việc cũng như trong cuộc sống.</p>
                                    </div>
                                    <div id="HEADLINE585" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP584" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">Tăng khả năng sáng tạo và sự tập trung</h5> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP560" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE561" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP560" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Giảm thiểu nguy cơ mắc “bệnh công sở”</h5> </div>
                            <div id="PARAGRAPH562" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP560" lp-display="block">
                                <p class="widget-content" lp-node="p">Khắc phục, điều trị những bệnh thường gặp của người làm văn phòng như đau lưng, nhức mỏi vai gáy cổ, các vấn đề về tiêu hóa... cũng như giảm thiểu các bệnh về tim mạch.</p>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP186" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX187" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP186" lp-display="block">
                                <div class="widget-content">
                                    <div id="GROUP596" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE597" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP596" lp-display="block">
                                                <h5 class="widget-content" lp-node="h5">Cơ thể đẹp hơn, dẻo dai hơn</h5> </div>
                                            <div id="PARAGRAPH598" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP596" lp-display="block">
                                                <p class="widget-content" lp-node="p">Các động tác Yoga mang lại sự dẻo dai hơn cho cơ thể, giúp trẻ hóa khuôn mặt và làn da, giảm mỡ thừa ở vùng bụng, hông và tạo sự săn chắc, gợi cảm hơn.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX190" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP186" lp-display="block">
                                <div class="widget-content">
                                    <div id="SHAPE191" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1672.2646 1896.0833" fill="rgba(255,255,255,1)">
                                            <path d="M128 1664h288v-288H128v288zm352 0h320v-288H480v288zm-352-352h288V992H128v320zm352 0h320V992H480v320zM128 928h288V640H128v288zm736 736h320v-288H864v288zM480 928h320V640H480v288zm768 736h288v-288h-288v288zm-384-352h320V992H864v320zM512 448V160q0-13-9.5-22.5T480 128h-64q-13 0-22.5 9.5T384 160v288q0 13 9.5 22.5T416 480h64q13 0 22.5-9.5T512 448zm736 864h288V992h-288v320zM864 928h320V640H864v288zm384 0h288V640h-288v288zm32-480V160q0-13-9.5-22.5T1248 128h-64q-13 0-22.5 9.5T1152 160v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm384-64v1280q0 52-38 90t-90 38H128q-52 0-90-38t-38-90V384q0-52 38-90t90-38h128v-96q0-66 47-113T416 0h64q66 0 113 47t47 113v96h384v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h128q52 0 90 38t38 90z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION558" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE559" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">CHUYÊN GIA GIẢNG DẠY HÀNG ĐẦU VIỆT NAM</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION37" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE38" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">TRUYỀN THÔNG NÓI VỀ THẦY</h3> </div>
                    <div id="YOUTUBE40" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/bg5VV2Yj2Os?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LISTOP490" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>Ủy viên thường trực Hiệp hội Yoga trị liệu Châu Á.</li>
                            <li>21 năm nghiên cứu và thực hành Yoga.</li>
                            <li>Trên 15 năm đào tạo giáo viên và chia sẻ Yoga trong nước và ngoài nước.</li>
                            <li>Tốt nghiệp Viện Toán học Đại học Bách khoa Hà Nội.</li>
                            <li>Năm 2012 đạt thành tích xuất sắc về dự án “Phát triển Yoga Việt Nam” do đại học Pháp ITIN tổ chức.</li>
                            <li>Năm 2013 nhận bằng trị liệu cao cấp do Đại học trị liệu Yoga SVYASA (Ấn Độ) tổ chức.</li>
                            <li>Năm 2014 đạt chứng nhận xuất sắc về thiền định do Học viện Thiền đinh Ấn Độ tổ chức.</li>
                            <li>Năm 2016 được Sở Y tế Hà Tĩnh trao bằng khen về thành tích xuất sắc trong “kết hợp Yoga và phục hồi chức năng điều trị có hiệu quả&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;cho người bệnh” tại Bệnh viện Đa khoa Hà Tĩnh.</li>
                        </ol>
                    </div>
                    <div id="HEADLINE497" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">ĐẶNG HÙNG</h3> </div>
                    <div id="HEADLINE621" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">"Nơi hội tụ tinh hoa Yoga Việt Nam”</h3> </div>
                    <div id="HEADLINE684" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">TRUYỀN THÔNG NÓI VỀ HỌC VIỆN</h3> </div>
                    <div id="HEADLINE685" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">HỌC VIỆN YOGA VIỆT NAM</h3> </div>
                    <div id="HEADLINE498" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Giám đốc Học viện Yoga Việt Nam</h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION290" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE291" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">ĐẾN TỪ HỌC VIỆN YOGA UY TÍN NHẤT</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION292" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="YOUTUBE295" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/xkQunwvLIYE?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH294" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Thành lập ngày 1/10/2011, do thầy Đặng Hùng sáng lập. Trải qua hơn 6 năm xây dựng và trưởng thành, Học viện đã trở thành một tổ chức phi lợi nhuận hàng đầu Việt Nam chuyên nghiên cứu,  đào tạo, trị liệu, phục vụ và hỗ trợ cộng đồng Yoga.&nbsp;<br><br>&nbsp;Hiện nay học viện đang là nơi đào tạo giáo viên Yoga uy tín hàng đầu cả nước, đã cấp chứng chỉ cho hơn 1000 học viên trên toàn quốc.&nbsp;</h6> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION317" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE318" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">&nbsp;Nơi tụ họp của những giảng viên ưu tú</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION319" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP343" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX322" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP343" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX323" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP343" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE324" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Thầy Nguyễn Ngọc Dũng</h6> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP344" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX345" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP344" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX346" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP344" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE347" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Cô Hoàng Quy Lý</h6> </div>
                                    <div id="LISTOP348" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                                        <ol class="widget-content">
                                            <li>Tiến sĩ Sinh học</li>
                                            <li>Phó chủ tịch Hội đồng Khoa Học Học Viện Yoga&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Việt Nam</li>
                                            <li>Hơn 20 năm thực hành và giảng dạy Yoga</li>
                                            <li>Cố vấn cho CLB Yoga Unesco, Cố vấn cho CLB&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Yoga Ananda,…</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP349" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX350" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP349" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX351" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP349" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE352" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Thầy Udvelananda</h6> </div>
                                    <div id="LISTOP353" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                                        <ol class="widget-content">
                                            <li>Hơn 30 năm thực hành Yoga và nghiên cứu Yoga</li>
                                            <li>Bậc thầy về tâm linh và liệu pháp thiên nhiên</li>
                                            <li>Đã giảng dạy nhiều nước trên thế giới như Hàn&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Quốc, Singapore,Philippin,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ấn Độ…</li>
                                            <li>Người tiên phong đưa Yoga vào Việt Nam từ năm 1991.</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP354" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX355" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP354" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX356" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP354" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE357" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Bác sĩ Trần Nguyên Phú</h6> </div>
                                    <div id="LISTOP358" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                                        <ol class="widget-content">
                                            <li>5 năm nghiên cứu Yoga và phương pháp về trị liệu tự&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; nhiên</li>
                                            <li>Tiến sỹ Y Học</li>
                                            <li>Giám đốc bệnh viện Đa khoa Thành phố Hà Tĩnh</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="LISTOP342" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>Chủ tịch hội đồng khoa học Học viện Yoga Việt&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nam</li>
                            <li>Phó Tổng Giám đốc Liên hiệp Khoa học – Công&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;nghệ tin học ứng dụng UIA</li>
                            <li>Giám đốc Trưởng môn sáng lập Trung tâm Dưỡng sinh Tổng hợp cổ truyền Việt Nam (Tâm Khí Việt)</li>
                            <li>Chủ tịch Trung tâm tư vấn và phát triển sức khỏe vì cộng đồng – Hội Khoa học Kinh tế Việt Nam.</li>
                        </ol>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION221" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE222" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">DẤU ẤN TRONG CÁC HỌC VIÊN</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION198" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP211" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX212" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP211" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE213" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP211" lp-display="block">
                                <p class="widget-content" lp-node="p">Cảm ơn thầy Hùng, nhờ có thầy Hùng mà chúng ta được gặp gỡ, được chia sẻ và học hỏi thêm nhiều kiến thức!</p>
                            </div>
                            <div id="HEADLINE214" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP211" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Nguyễn Thanh Huyền</h6> </div>
                            <div id="HEADLINE215" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP211" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Giáo viên</h6> </div>
                        </div>
                    </div>
                    <div id="GROUP216" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX217" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP216" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE218" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP216" lp-display="block">
                                <p class="widget-content" lp-node="p">Tôi rất hài lòng về khóa học của thầy Đặng Hùng. Khóa học đã giúp tôi không còn đau lưng khi làm việc nữa</p>
                            </div>
                            <div id="HEADLINE219" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP216" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Nguyễn Thái Sơn</h6> </div>
                            <div id="HEADLINE220" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP216" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Nhân viên văn phòng</h6> </div>
                        </div>
                    </div>
                    <div id="BOX207" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE208" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <p class="widget-content" lp-node="p">Địa chỉ lý tưởng để mọi người cùng học Yoga với một sức khỏe dồi dào và trí tuệ minh mẫn.</p>
                    </div>
                    <div id="HEADLINE209" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Trịnh Tài</h6> </div>
                    <div id="HEADLINE210" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Nhân viên Sale &amp; Marketing</h6> </div>
                    <div id="BOX202" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE203" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <p class="widget-content" lp-node="p">Nhờ khoá học tại mà mình học hỏi được rất nhiều, hiểu nhiều hơn. Sự hướng dẫn tận tình chu đáo của thầy cô giúp các học viên trải nghiệm được nhiều điều thú vị.</p>
                    </div>
                    <div id="HEADLINE204" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Trương Thương Huyền</h6> </div>
                    <div id="HEADLINE205" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">NSƯT, Phó đoàn nghệ thuật tỉnh Quảng Trị&nbsp;</h6> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION624" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE625" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <p class="widget-content" lp-node="p">Chỉ còn 1 ngày nữa là chương trình ưu đãi dành cho khách hàng kết thúc. Nhanh tay lên!</p>
                    </div><a id="BUTTON626" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">&nbsp; CHỈ CÒN&nbsp;</span> </a>
                    <div id="PARAGRAPH627" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">- Ưu đãi ĐẶC BIỆT (dành cho 100 khách hàng đăng ký đầu tiên)<br>- TẶNG NGAY ebook "2100 asanas" trọn bộ đầy đủ nhất những tư thế yoga cũng như các biến thể.</h6> </div>
                    <div id="HEADLINE628" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">Đăng ký đặt mua ngay để nhận ưu đãi giảm giá 50%!</h1> </div>
                    <div id="BOX629" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP630" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="PARAGRAPH631" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP630" lp-display="block">
                                        <p class="widget-content" lp-node="p">Ngày</p>
                                    </div>
                                    <div id="PARAGRAPH632" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP630" lp-display="block">
                                        <p class="widget-content" lp-node="p">Giờ</p>
                                    </div>
                                    <div id="PARAGRAPH633" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP630" lp-display="block">
                                        <p class="widget-content" lp-node="p">Phút</p>
                                    </div>
                                    <div id="PARAGRAPH634" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP630" lp-display="block">
                                        <p class="widget-content" lp-node="p">Giây</p>
                                    </div>
                                </div>
                            </div>
                            <div id="COUNTDOWN635" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="<?php echo (strtotime('+1 day', strtotime(date('d-m-Y'))) - time()) / 60; ?>" lp-endtimetype="timedown" lp-display="block">
                                <div class="widget-content">
                                    <div><span>1</span></div>
                                    <div><span>0</span></div>
                                    <div><span>0</span></div>
                                    <div><span>0</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX636" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE637" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">ĐĂNG KÝ MUA KHÓA HỌC</h4> </div>
                            <div id="FORM638" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-ss-f="[{&quot;name&quot;:&quot;select3&quot;,&quot;value&quot;:&quot;select3&quot;,&quot;$$hashKey&quot;:&quot;object:6831&quot;},{&quot;name&quot;:&quot;select2&quot;,&quot;value&quot;:&quot;select2&quot;,&quot;$$hashKey&quot;:&quot;object:6832&quot;},{&quot;name&quot;:&quot;select1&quot;,&quot;value&quot;:&quot;select1&quot;,&quot;$$hashKey&quot;:&quot;object:6833&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:6834&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:6835&quot;},{&quot;name&quot;:&quot;message&quot;,&quot;value&quot;:&quot;message&quot;,&quot;$$hashKey&quot;:&quot;object:6836&quot;},{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:6837&quot;}]" lp-display="block">
                                <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                    <div id="ITEM_FORM639" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" lp-name-id="email" required="required">
                                    </div>
                                    <div id="ITEM_FORM640" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại" lp-name-id="phone">
                                    </div>
                                    <div id="ITEM_FORM641" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <textarea class="widget-content" type="text" placeholder="Địa chỉ" name="dia_chi" rows="4" lp-label="Lời nhắn" lp-name-id="message" required="required"></textarea>
                                    </div>
                                    <div id="ITEM_FORM642" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" lp-name-id="name" required="required">
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                      <button id="btn-643" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent"> MUA HÀNG </button>
                                </form>
                            </div><a id="BUTTON643" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM638" lp-display="table"><span class="widget-content">MUA HÀNG</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE691" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">295k</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION409" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
<!--                    <div id="BOX410" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH411" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">©2016 Allrights reserved Ladipage Vietnam</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>-->
                    <div id="GROUP499" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE500" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP499" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">LIÊN HỆ</h4> </div>
                            <div id="HEADLINE501" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP499" lp-display="block">
                                <p class="widget-content" lp-node="p">Địa chỉ: Số 10, ngõ 272, Ngọc Thụy, Long Biên, Hà Nội
                                    <br>
                                </p>
                            </div>
                            <div id="SHAPE502" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP499" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE503" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP499" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE504" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP499" lp-display="block">
                                <p class="widget-content" lp-node="p">Hotline: 0976 989 355</p>
                            </div>
                            <div id="HEADLINE505" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP499" lp-display="block">
                                <p class="widget-content" lp-node="p">Email: info@hocvienyoga.vn</p>
                            </div>
                            <div id="SHAPE506" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP499" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M20,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V8L12,13L20,8V18M20,6L12,11L4,6V6H20V6Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE507" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP499" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE508" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP499" lp-display="block">
                                <p class="widget-content" lp-node="p">Website: hocvienyoga.vn</p>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP519" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE520" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP519" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">LIÊN HỆ</h4> </div>
                            <div id="HEADLINE521" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP519" lp-display="block">
                                <p class="widget-content" lp-node="p">Địa chỉ: Số 10, ngõ 272, Ngọc Thụy, Long Biên, Hà Nội
                                    <br>
                                </p>
                            </div>
                            <div id="SHAPE522" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP519" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE523" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP519" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE524" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP519" lp-display="block">
                                <p class="widget-content" lp-node="p">Hotline: 0976 989 355</p>
                            </div>
                            <div id="HEADLINE525" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP519" lp-display="block">
                                <p class="widget-content" lp-node="p">Email: info@hocvienyoga.vn</p>
                            </div>
                            <div id="SHAPE526" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP519" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M20,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V8L12,13L20,8V18M20,6L12,11L4,6V6H20V6Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE527" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP519" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE528" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP519" lp-display="block">
                                <p class="widget-content" lp-node="p">Website: hocvienyoga.vn</p>
                            </div>
                        </div>
                    </div>
                    <div id="FACEBOOK_MESSAGES529" class="widget-element widget-snap" lp-type="facebook_messages" lp-lang="FACEBOOK_MESSAGES" lp-display="block">
                        <div class="widget-content fb-page" data-href="https://www.facebook.com/Yoga-Cho-T%C3%A2m-Tr%C3%AD-B%C3%ACnh-An-1756758664398515/" data-tabs="messages" data-width="265" data-height="210" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"></div>
                    </div>
                    <div id="HEADLINE532" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h4 class="widget-content" lp-node="h4">KẾT NỐI VỚI CHÚNG TÔI</h4> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <script type="text/javascript" async="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1513065565500"></script>
        </div>
        <script type="text/javascript" async="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1513044965652"></script>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="fb-comments" data-href="https://lakita.vn/yoga-danh-cho-nguoi-lam-van-phong-2.html" 
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
                $("#BUTTON489").click(function (e) {
                    e.preventDefault();
                    $("#btn-489").click();
                });
                $("#BUTTON643").click(function (e) {
                    e.preventDefault();
                    $("#btn-643").click();
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