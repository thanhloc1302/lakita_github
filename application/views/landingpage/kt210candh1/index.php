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
        <title>KHÓA HỌC QUYẾT TOÁN THUẾ TỪ A-Z</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="fb:admins" content="100001432238036"/>
        <meta property="fb:app_id" content="315347858825221" />
        <meta property="og:type"   content="website" /> 
        <meta property="og:url" content="https://lakita.vn/tron-bo-quyet-toan-thue-tu-a-den-z-candh1.html" />
        <meta property="og:title" content="KHÓA HỌC QUYẾT TOÁN THUẾ TỪ A-Z - lakita.vn" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/360x260/ketoanthue-1495425175.png" />
        <meta property="og:description" content="Dành cho kế toán ra trường nhiều năm nhưng chưa được kê khai thuế - quyết toán thuế" />
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
        <?php $this->load->view('landingpage/kt210candh1/css'); ?>
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
                    <div id="PARAGRAPH7" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Đến với khóa học của chúng tôi để</h6> </div>
                    <div id="BOX471" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE472" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">Nhanh tay lên!<br>Bạn muốn nhận được Ưu đãi tốt<br></h4> </div>
                            <div id="HEADLINE843" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Duy nhất hôm nay<br color="" style="color: rgb(76, 175, 80);">Chỉ với &nbsp; &nbsp;&nbsp;</h3> </div>
                            <div id="HEADLINE869" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">395K</h2> </div>
                            <div id="GROUP484" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="FORM485" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:6556&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:6557&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:6558&quot;},{&quot;name&quot;:&quot;street&quot;,&quot;value&quot;:&quot;street&quot;,&quot;$$hashKey&quot;:&quot;object:7298&quot;}]" lp-group="GROUP484" lp-display="block">
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
                                            <div id="ITEM_FORM844" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="text" placeholder="Nhập địa chỉ" name="dia_chi" lp-label="Địa chỉ" lp-name-id="street" required="required">
                                            </div>
                                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                            <button id="btn-489" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                                        </form>
                                    </div><a id="BUTTON489" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM485" lp-group="GROUP484" lp-display="table"><span class="widget-content">GỬI LIÊN HỆ TỚI CHÚNG TÔI</span> </a></div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE493" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Trọn bộ kế toán thuế từ A đến Z</h3> </div>
                    <div id="HEADLINE8" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">&nbsp; <span style="color: rgba(0, 230, 118, 0.92);" color=""><span style="font-weight: bold; color: rgba(0, 230, 118, 0.92);" color="">KHÓA HỌC ONLINE ĐỘC QUYỀN</span></span><span style="font-weight: bold; color: rgba(0, 230, 118, 0.92);" color=""><br color="" style="color: rgba(0, 230, 118, 0.92);"></span><br color="" style="color: rgba(0, 230, 118, 0.92);"></h5> </div>
                    <div id="HEADLINE845" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">THÀNH THẠO</h2> </div>
                    <div id="HEADLINE846" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Kế toán thuế</h3> </div><a id="BUTTON847" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION746" lp-action-type="page" lp-target="" href=""><span class="widget-content">Đăng kí ngay &gt;&gt;</span> </a>
                    <div id="IMAGE923" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/989B0D146B60E3DDBAEA40F7DA8394B4E0BCA2DC174E667E38pimgpsh_fullsize_distr-1513229324.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE924" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Cùng bạn vươn xa&nbsp;</h5> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP879" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX881" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE882" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="#F6511F">
                                    <path d="M28.28 6.28L11 23.563l-7.28-7.28-1.44 1.437 8 8 .72.686.72-.687 18-18-1.44-1.44z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="GROUP885" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE886" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP885" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">thành công!</h2> </div>
                            <div id="HEADLINE887" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP885" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">Đăng ký</h2> </div>
                        </div>
                    </div>
                    <div id="LINE884" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH883" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Cảm ơn bạn đã tin tưởng và đăng kí khóa học của chúng tôi!<br>Xin hãy lưu ý điện thoại, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất để xác nhận thông tin và nhân viên bưu điện sẽ giao khóa học tận nơi cho bạn<br>( Miễn phí giao hàng toàn quốc )</h5> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP705" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="IMAGE706" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/57b167c9ca57d39c18a1c57c/team1.jpg"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE707" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h4 class="widget-content" lp-node="h4">Nhận ngay mã giảm giá 20% cho toàn bộ sản phẩm</h4> </div>
                    <div id="PARAGRAPH708" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Đăng ký tại đây</p>
                    </div>
                    <div id="BOX709" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE710" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">150.000 vnđ</h2> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="FORM711" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-display="block">
                        <form class="widget-content">
                            <div id="ITEM_FORM712" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                            </div>
                        </form>
                    </div><a id="BUTTON713" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM711" lp-display="table"><span class="widget-content">NHẬN MÃ GIẢM GIÁ</span> </a></div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION424" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP425" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE426" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP425" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1792 1896.0833" fill="rgba(101,148,78,1)">
                                    <path d="M1111 1385l-46 46q-9 9-22 9t-23-9l-188-189-188 189q-10 9-23 9t-22-9l-46-46q-9-9-9-22t9-23l189-188-189-188q-9-10-9-23t9-22l46-46q9-9 22-9t23 9l188 188 188-188q10-9 23-9t22 9l46 46q9 9 9 22t-9 23l-188 188 188 188q9 10 9 23t-9 22zm-983 279h1408V640H128v1024zM512 448V160q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v288q0 14 9 23t23 9h64q14 0 23-9t9-23zm768 0V160q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v288q0 14 9 23t23 9h64q14 0 23-9t9-23zm384-64v1280q0 52-38 90t-90 38H128q-52 0-90-38t-38-90V384q0-52 38-90t90-38h128v-96q0-66 47-113T416 0h64q66 0 113 47t47 113v96h384v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h128q52 0 90 38t38 90z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE427" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP425" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">02</h1> </div>
                            <div id="HEADLINE428" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP425" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Năm phát triển</h6> </div>
                        </div>
                    </div>
                    <div id="GROUP429" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE430" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP429" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1792.003 1896.0833" fill="rgba(101,148,78,1)">
                                    <path d="M1764.003 11q33 24 27 64l-256 1536q-5 29-32 45-14 8-31 8-11 0-24-5l-527-215-298 327q-18 21-47 21-14 0-23-4-19-7-30-23.5t-11-36.5v-452l-472-193q-37-14-40-55-3-39 32-59l1664-960q35-21 68 2zm-342 1499l221-1323-1434 827 336 137 863-639-478 797z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE431" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP429" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">5763+</h1> </div>
                            <div id="HEADLINE432" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP429" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Học viên trên toàn quốc<br></h6> </div>
                        </div>
                    </div>
                    <div id="GROUP433" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE434" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP433" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1792 1896.0833" fill="rgba(101,148,78,1)">
                                    <path d="M1664 596q0-81-21.5-143t-55-98.5T1506 295t-94-31-98-8-112 25.5-110.5 64-86.5 72-60 61.5q-18 22-49 22t-49-22q-24-28-60-61.5t-86.5-72-110.5-64T478 256t-98 8-94 31-81.5 59.5-55 98.5T128 596q0 168 187 355l581 560 580-559q188-188 188-356zm128 0q0 221-229 450l-623 600q-18 18-44 18t-44-18l-624-602q-10-8-27.5-26T145 952.5 77 855 23.5 734 0 596q0-220 127-344t351-124q62 0 126.5 21.5t120 58T820 276t76 68q36-36 76-68t95.5-68.5 120-58T1314 128q224 0 351 124t127 344z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE435" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP433" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">98%</h1> </div>
                            <div id="HEADLINE436" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP433" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Hài lòng về dịch vụ<br></h6> </div>
                        </div>
                    </div>
                    <div id="GROUP437" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE438" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP437" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1282.7045 1896.0833" fill="#618b50">
                                    <path d="M953 378L839 706l117 21q165-451 165-518 0-56-38-56-57 0-130 225zm-299 687l33 88q37-42 71-67l-33-5.5-38.5-7-32.5-8.5zM362 169q0 98 159 521 18-10 49-10 15 0 75 5L524 334q-75-220-123-220-19 0-29 17.5T362 169zm-79 759q0 36 51.5 119T452 1200t100 70q14 0 25.5-13t11.5-27q0-24-32-102-13-32-32-72t-47.5-89-61.5-81-62-32q-20 0-45.5 27T283 928zm-158 335q0 41 25 104 59 145 183.5 227t281.5 82q227 0 382-170 152-169 152-427 0-43-1-67t-11.5-62-30.5-56q-56-49-211.5-75.5T624 792q-37 0-49 11-12 5-12 35 0 34 21.5 60t55.5 40 77.5 23.5T805 973t85 4 70 0h23q24 0 40 19 15 19 19 55-28 28-96 54-61 22-93 46-64 46-108.5 114T700 1402q0 31 18.5 88.5T737 1578l-3 12q-4 12-4 14-137-10-146-216-8 2-41 2 2 7 2 21 0 53-40.5 89.5T410 1537q-82 0-166.5-78T159 1300q0-34 33-67 52 64 60 76 77 104 133 104 12 0 26.5-8.5T426 1384q0-34-87.5-145T222 1128q-43 0-70 44.5t-27 90.5zm-114 9q0-101 42.5-163t136.5-88q-28-74-28-104 0-62 61-123t122-61q29 0 70 15-163-462-163-567 0-80 41-130.5T412 0q131 0 325 581 6 17 8 23 6-16 29-79.5T817.5 406t54-127.5 64.5-123 70.5-86.5 76.5-36q71 0 112 49t41 122q0 108-159 550 61 15 100.5 46t58.5 78 26 93.5 7 110.5q0 150-47 280t-132 225-211 150-278 55q-111 0-223-42-149-57-258-191.5T11 1272z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE439" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP437" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">100%</h1> </div>
                            <div id="HEADLINE440" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP437" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Đảm bảo chất lượng</h6> </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION678" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX679" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE680" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Thành thạo kỹ thuật lên tờ khai và&nbsp;<br>quyết toán nhanh nhất, chính xác nhất</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX681" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE686" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Tài khoản sử dụng trọn đời không giới hạn thời gian</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX683" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE684" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Thực hành trực tiếp trên kho tài liệu phong phú đi kèm mỗi bài giảng</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX685" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE690" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Cập nhập liên tục và hoàn toàn&nbsp;<br>&nbsp;<span style="font-weight: bold; color: rgb(243, 14, 77);">MIỄN PHÍ</span>&nbsp;các thông tin và thông tư khi có thay đổi</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE687" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Tại sao&nbsp;bạn nên đăng kí khóa học tại Lakita</h2> </div>
                    <div id="BOX689" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE682" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Giải quyết từng vấn đề một cách logic và dễ hiểu nhất</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX691" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE692" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Trao đổi và nhận được tư vấn chuyên môn trực tiếp từ giảng viên</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE693" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Chúng tôi luôn cố gắng và nỗ lực để mang đến cho các bạn dịch vụ tốt nhất</h5> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION37" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE38" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Khóa học sẽ hỗ trợ tốt nhất nếu bạn là:&nbsp;</h3> </div>
                    <div id="YOUTUBE40" class="widget-element widget-snap wow bounceInRight animated" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="1" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/GruLqX5_IOY?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LISTOP850" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>&nbsp;Sinh viên và kế toán mới ra trường chưa biết, chưa hiểu, chưa làm được kế toán thuế&nbsp;</li>
                            <li>&nbsp;Kế toán nội bộ chuyển sang làm kế toán thuế</li>
                            <li>&nbsp;Chuyên viên kế toán, kế toán tổng hợp có mong muốn nâng cao bổ sung và hoàn thiện chuyên môn</li>
                            <li>&nbsp;Chuyên viên nhân sự, làm lương có nhiệm vụ kê khai và quyết toán thuế TNCN&nbsp;
                                <br>
                            </li>
                            <li>&nbsp;Chủ doanh nghiệp, cá nhân, Start-up chuẩn bị khởi nghiệp muốn trang bị các kiến thức pháp luật để phòng ngừa các rủi ro phạt vi phạm về thuế hoặc muốn hiểu, biết công việc của kế toán thuế để thuận tiện theo dõi và kiểm tra</li>
                        </ol>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP559" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="LISTOP562" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
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
            <div id="SECTION41" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE42" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Khi đăng kí khóa học này<br>bạn sẽ ...</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION81" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX120" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE121" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5"><br>Lakita - Trung tâm đào tạo trực tuyến<br><br>chuyên về kế toán và kỹ năng tin học văn phòng<br><br></h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="GROUP107" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE108" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP107" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(93,198,98,1)">
                                    <path d="M18.08,17.8C17.62,17.93 17.21,18 16.85,18C15.65,18 14.84,17.12 14.43,15.35H14.38C13.39,17.26 12,18.21 10.25,18.21C8.94,18.21 7.89,17.72 7.1,16.73C6.31,15.74 5.92,14.5 5.92,13C5.92,11.25 6.37,9.85 7.26,8.76C8.15,7.67 9.36,7.12 10.89,7.12C11.71,7.12 12.45,7.35 13.09,7.8C13.73,8.26 14.22,8.9 14.56,9.73H14.6L15.31,7.33H17.87L15.73,12.65C15.97,13.89 16.22,14.74 16.5,15.19C16.74,15.64 17.08,15.87 17.5,15.87C17.74,15.87 17.93,15.83 18.1,15.76L18.08,17.8M13.82,12.56C13.61,11.43 13.27,10.55 12.81,9.95C12.36,9.34 11.81,9.04 11.18,9.04C10.36,9.04 9.7,9.41 9.21,10.14C8.72,10.88 8.5,11.79 8.5,12.86C8.5,13.84 8.69,14.65 9.12,15.31C9.54,15.97 10.11,16.29 10.82,16.29C11.42,16.29 11.97,16 12.46,15.45C12.96,14.88 13.37,14.05 13.7,12.96L13.82,12.56Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="PARAGRAPH109" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP107" lp-display="block">
                                <p class="widget-content" lp-node="p">Thành thạo khai báo thuế, quyết toán thuế và kỹ năng phát hiện sai sót</p>
                            </div>
                        </div>
                    </div>
                    <div id="IMAGE842" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/912ldp-1512808566964.jpg"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE853" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Hệ thống kiến thức</h3> </div>
                    <div id="HEADLINE854" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Thành thạo các kĩ năng</h3> </div>
                    <div id="HEADLINE855" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Tài khoản trọn đời</h3> </div>
                    <div id="HEADLINE856" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Dịch vụ chuyên nghiệp</h5> </div>
                    <div id="GROUP566" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE567" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP566" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="rgba(93,198,98,1)">
                                    <path d="M4 4v20h7v-2H6V6h12v1h2V4H4zm8 4v20h16V8H12zm2 2h12v16H14V10z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="PARAGRAPH568" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP566" lp-display="block">
                                <p class="widget-content" lp-node="p">Nhận được tài khoản học có hiệu lực trọn đời trên Lakita.vn&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP491" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE105" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP491" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(93,198,98,1)">
                                    <path d="M12,2A3,3 0 0,0 9,5C9,6.27 9.8,7.4 11,7.83V10H8V12H11V18.92C9.16,18.63 7.53,17.57 6.53,16H8V14H3V19H5V17.3C6.58,19.61 9.2,21 12,21C14.8,21 17.42,19.61 19,17.31V19H21V14H16V16H17.46C16.46,17.56 14.83,18.63 13,18.92V12H16V10H13V7.82C14.2,7.4 15,6.27 15,5A3,3 0 0,0 12,2M12,4A1,1 0 0,1 13,5A1,1 0 0,1 12,6A1,1 0 0,1 11,5A1,1 0 0,1 12,4Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="PARAGRAPH106" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP491" lp-display="block">
                                <p class="widget-content" lp-node="p">Kho tài liệu phong phú và sát thực tế được phân chia theo từng bài học đảm bảo kỹ năng thực chiến&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE857" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Kho tài liệu phong phú</h3> </div>
                    <div id="GROUP101" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE102" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP101" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(93,198,98,1)">
                                    <path d="M16,9C18.33,9 23,10.17 23,12.5V15H17V12.5C17,11 16.19,9.89 15.04,9.05L16,9M8,9C10.33,9 15,10.17 15,12.5V15H1V12.5C1,10.17 5.67,9 8,9M8,7A3,3 0 0,1 5,4A3,3 0 0,1 8,1A3,3 0 0,1 11,4A3,3 0 0,1 8,7M16,7A3,3 0 0,1 13,4A3,3 0 0,1 16,1A3,3 0 0,1 19,4A3,3 0 0,1 16,7M9,16.75V19H15V16.75L18.25,20L15,23.25V21H9V23.25L5.75,20L9,16.75Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="PARAGRAPH103" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP101" lp-display="block">
                                <p class="widget-content" lp-node="p">Ngoài video khóa học, bạn còn nhận được sự hỗ trợ nhanh chóng và chuyên nghiệp về mặt chuyên môn cũng như kĩ thuật trong suốt quá trình học cũng như làm việc</p>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP85" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE86" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP85" lp-display="block">
                                <div class="widget-content">
                                    <svg [removed]="" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="rgba(93,198,98,1)">
                                    <path d="M4 4v20h7v-2H6V6h12v1h2V4H4zm8 4v20h16V8H12zm2 2h12v16H14V10z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="PARAGRAPH88" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP85" lp-display="block">
                                <p class="widget-content" lp-node="p">Học thật, hiểu thật và <span style="color: rgb(76, 175, 80);"><span style="font-weight: bold;">áp dụng thật trong công việc</span>!</span>
                                    <br>
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE851" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Học thật, làm thật!&nbsp;</h3> </div>
                    <div id="SHAPE111" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(93,198,98,1)">
                            <path d="M12,2A3,3 0 0,0 9,5C9,6.27 9.8,7.4 11,7.83V10H8V12H11V18.92C9.16,18.63 7.53,17.57 6.53,16H8V14H3V19H5V17.3C6.58,19.61 9.2,21 12,21C14.8,21 17.42,19.61 19,17.31V19H21V14H16V16H17.46C16.46,17.56 14.83,18.63 13,18.92V12H16V10H13V7.82C14.2,7.4 15,6.27 15,5A3,3 0 0,0 12,2M12,4A1,1 0 0,1 13,5A1,1 0 0,1 12,6A1,1 0 0,1 11,5A1,1 0 0,1 12,4Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="PARAGRAPH112" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Thay vì đi cóp nhặt kiến thức rời rạc và thiếu kiểm chứng, khóa học là cơ hội để bạn hệ thống kiến thức thuế một cách bài bản và chính xác</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION787" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE789" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Chất lượng và dịch vụ được khẳng định qua cảm nhận của khách hàng</h2> </div>
                    <div id="GROUP802" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX803" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP802" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="PARAGRAPH804" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP802" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Mình đang theo khóa học quyết toán thuế để tổng hợp lại kiến thức cũng như học hỏi thêm những cái mới. Đánh giá khóa học rất phù hợp, thông tin cập nhật, giảng viên tận tình giảng cụ thể rõ ràng&nbsp;</h6> </div>
                            <div id="HEADLINE805" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP802" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">HÀ vũ phương thảo</h6> </div>
                            <div id="HEADLINE806" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP802" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">&nbsp;Trung tâm Phát triển Cụm công nghiệp và Dịch vụ Công ích thành phố Biên Hòa</h6> </div>
                            <div id="SHAPE807" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP802" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                    <path d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9M5,5V7H19V5H5M5,9V11H13V9H5M5,13V15H15V13H5Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="GROUP808" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP802">
                                <div class="widget-content">
                                    <div id="SHAPE809" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP808" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE810" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP808" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE811" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP808" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE812" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP808" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                            <path d="M12,15.39L8.24,17.66L9.23,13.38L5.91,10.5L10.29,10.13L12,6.09L13.71,10.13L18.09,10.5L14.77,13.38L15.76,17.66M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE813" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP808" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="HEADLINE1033" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP802" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Quản lí tại công ty cổ phần xi măng&nbsp;<br>Sông Lam</h6> </div>
                        </div>
                    </div>
                    <div id="GROUP814" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX815" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP814" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="PARAGRAPH816" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP814" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Đây là một trong những khóa học rất bổ ích mà tôi được học. Khóa học đã giúp tôi nâng cao sự hiểu biết về kế toán thuế và hỗ trợ rất nhều cho công việc quản lí doanh nghiệp.</h6> </div>
                            <div id="HEADLINE817" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP814" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">phương vissai</h6> </div>
                            <div id="SHAPE819" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP814" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                    <path d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9M5,5V7H19V5H5M5,9V11H13V9H5M5,13V15H15V13H5Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="PARAGRAPH788" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Chúng tôi nỗ lực mỗi ngày để mang đến cho khách hàng sản phẩm và dịch vụ tốt nhất</h6> </div>
                    <div id="PARAGRAPH792" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Nhờ Lakita mà em đã nắm vững được các nghiệp vụ để làm kế toán thuế trong doanh nghiệp, giúp em tự tin để tìm việc làm hơn.<br>Em xin chân thành cảm ơn!</h6> </div>
                    <div id="HEADLINE793" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Bella dinh</h6> </div>
                    <div id="HEADLINE794" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">&nbsp;Trường Đại học Kinh tế&nbsp;Huế&nbsp;<br>&nbsp;HCE</h6> </div>
                    <div id="SHAPE795" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                            <path d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9M5,5V7H19V5H5M5,9V11H13V9H5M5,13V15H15V13H5Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="GROUP796" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE797" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP796" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE798" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP796" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE799" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP796" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE800" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP796" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE801" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP796" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="BOX791" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="GROUP916" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE917" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP916" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE918" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP916" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE919" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP916" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE920" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP916" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE921" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP916" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,74,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION611" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE620" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">1</h1> </div>
                    <div id="HEADLINE612" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1"><span style="color: rgb(67, 147, 71);" color="">Kế toán thuế&nbsp;<br color="" style="color: rgb(67, 147, 71);">Lộ trình học tinh gọn và </span><span style="color: rgb(67, 147, 71);" color="">logic nhất</span></h1> </div>
                    <div id="BOX622" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE672" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Đăng ký thuế ban đầu cho Doanh nghiệp mới thành lập</h6> </div>
                            <div id="PARAGRAPH674" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p"></p>
                            </div><a id="BUTTON930" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP988" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX615" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH617" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p"></p>
                            </div>
                            <div id="HEADLINE616" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Tổng quan về kế toán thuế</h6> </div><a id="BUTTON925" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP979" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX637" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block" lp-action-link="POPUP949" lp-action-type="popup" lp-target="" href="">
                        <div class="widget-content">
                            <div id="HEADLINE639" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Kê khai thuế thu nhập<br color="" style="color: rgb(255, 255, 255);">&nbsp;cá nhân</h6> </div>
                            <div id="PARAGRAPH676" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p"></p>
                            </div><a id="BUTTON927" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP1006" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX641" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE642" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">4</h2> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX644" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE645" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Quyết toán thuế TNCN</h6> </div>
                            <div id="PARAGRAPH649" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p"></p>
                            </div><a id="BUTTON928" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP1015" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX650" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH653" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p"></p>
                            </div><a id="BUTTON926" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP1024" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a>
                            <div id="HEADLINE651" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Thuế Thu nhập Doanh nghiệp</h6> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX629" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE630" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Thuế giá trị gia tăng</h6> </div>
                            <div id="PARAGRAPH675" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p"></p>
                            </div><a id="BUTTON929" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP997" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX662" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE663" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">3</h1> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX658" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE659" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">2</h1> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX664" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE665" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">6</h2> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX666" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE667" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">5</h2> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX668" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE669" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">1</h1> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE677" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">..................................................................................................</h3> </div>
                    <div id="HEADLINE858" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">6 chương - 56 bài học - 10h học online&nbsp;</h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP1024" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH1026" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Hồ sơ quyết toán thuế TNDN
                            <br>2. Chi phí được trừ khi quyết toán thuế TNDN
                            <br>3. Chi phí không được trừ khi quyết toán thuế TNDN
                            <br>4. Hướng dẫn kết chuyễn lỗ từ năm trước chuyển sang khi quyết toán thuế TNDN
                            <br>5. Hướng dẫn quyết toán thuế TNDN
                            <br>6. Thực hành quyết toán thuế TNDN</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP1015" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH1017" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Quyết toán thuế TNCN là gì? Tại sao phải làm quyết toán
                            <br>2. Các trường hợp không đủ điều kiện ủy quyền quyết toán
                            <br>3. Hướng dẫn tạo mã số thuế thu nhập cá nhân
                            <br>4. Cách tính thuế TNCN cả năm
                            <br>5. Hướng dẫn lập bảng lương
                            <br>6. Hướng dẫn lập tờ khai quyết toán thuế TNCN theo TT92/2015&nbsp;
                            <br>( Phần 1 )
                            <br>7. Hướng dẫn lập tờ khai quyết toán thuế TNCN theo TT92/2015&nbsp;
                            <br>( Phần 2 )</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP1006" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH1008" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Giới thiệu nội dung chương học
                            <br>2. Trách nhiệm Doanh Nghiệp trong kê khai và nộp thuê Thu nhập cá nhân
                            <br>3. Phân Loại đối tượng chịu thuế
                            <br>4. Hướng dẫn tính thuế TNCN với Hợp đồng lao động trên 3 tháng
                            <br>5. Các khoản thu nhập chịu thuế
                            <br>6. Thu nhập miễn thuế
                            <br>7. Hướng dẫn lập tờ khai thuế TNCN
                            <br>8. Hướng dẫn đăng ký người phụ thuộc
                            <br>9. Cách tính thuế TNCN trường hợp HĐLĐ trên 3 tháng
                            <br>10. Cách tính thuế TNCN trường hợp HĐLĐ dưới 3 tháng
                            <br>11. Hồ sơ kê khai thuế TNCN
                            <br>12. Các khoản thuế giảm trừ
                            <br>13. Thực hành lập tờ khai Thuế TNCN ( theo tháng )
                            <br>14. Thực hành lập tờ khai Thuế TNCN ( theo quý)</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP997" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH999" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">A. Kỹ thuật lập tờ khai thuế GTGT
                            <br>1. Giới thiệu nội dung phần 3 - thuế GTGTT&nbsp;
                            <br>3. Xác định kỳ kê khai thuế GTGT
                            <br>4. Mục đích và vai trò của kê khai thuế GTGT ở DN
                            <br>5. Kiểm tra các điều kiện khấu trừ với chứng từ đầu vào
                            <br>6. Thực hành lập bảng kê đầu vào
                            <br>7. Thực hành lập bảng kê đầu ra
                            <br>8. Kỹ thuật lên tờ khai thuế GTGT
                            <br>9. Đối chiếu tài khoản 1331.3331.511 với tờ khai thuế GTGT
                            <br>10. Kinh nghiệm kê khai và lưu trữ hóa đơn đầu vào, đầu ra11. Hướng dẫn làm báo cáo sử dụng hóa đơnB. Hướng dẫn kế khai thuế GTGT bổ sung trên HTKK12. Nguyên tắc kê khai bổ sung thuế GTGT13. Tình huống 1 : Thực hành lập tờ khai thuế GTGT bổ sung14. Tình huống 2 : Thực hành lập tờ khai thuế GTGT bổ sung15. Bài tập thu hoạch : Kê khai bổ sung thuế GTGT</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP988" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH990" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. 07 thủ tục cần làm cho DN mới thành lập
                            <br>2. Thủ tục 1+ 2: Đăng ký mẫu dấu và tài khoản ngân hàng
                            <br>3. Hướng dẫn nộp đăng ký tài khoản qua mạng: dangkykinhdoanh.gdt.gov
                            <br>4. Thủ tục 3+ 4: Mua token và đăng ký khai thuế, nộp thuế điện tử
                            <br>5. Cài đặt và sử dụng phần mềm HTKK và itax viewer
                            <br>6. Thủ tục 05: Kê khai và nộp Lệ phí môn bài qua mạng
                            <br>7. Thủ tục 6: Nộp mẫu 06 GTGT - đăng ký phương pháp tính thuế GTGT
                            <br>8. Thủ tục 7: Đặt in và làm thông báo phát hành hóa đơn</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP979" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH981" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Giới thiệu và đề cương khóa học " Trọn bộ kế toán thuế cho người bắt đầu"
                            <br>2. Tổng quan về kế toán thuế: Kế toán thuế là gì, phân biệt với các kế toán khác
                            <br>3. Tìm hiểu về thực trạng hệ thống sổ sách kế toán trong DN
                            <br>4. Nhiệm vụ kế toán thuế ở DN
                            <br>5. Tình huống thực tế 1: Kế toán thuế cần làm gì khi tiếp nhận doanh nghiệp mới
                            <br>6. Tình huống thực tế 2: Trình tự tiếp nhận hồ sơ, sổ sách, chứng từ kế toán ở DN</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP968" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="IMAGE969" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/uploads/images/bfc1d1bf-af34-4fe2-9361-35f7f9120640.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="FORM975" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-display="block">
                        <form class="widget-content">
                            <div id="ITEM_FORM976" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                            </div>
                        </form>
                    </div><a id="BUTTON977" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM975" lp-display="table"><span class="widget-content">NHẬN MÃ GIẢM GIÁ</span> </a>
                    <div id="PARAGRAPH978" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Giới thiệu và đề cương khóa học " Trọn bộ kế toán thuế cho người bắt đầu"2. Tổng quan về kế toán thuế: Kế toán thuế là gì, phân biệt với các kế toán khác3. Tìm hiểu về thực trạng hệ thống sổ sách kế toán trong DN4. Nhiệm vụ kế toán thuế ở DN5. Tình huống thực tế 1: Kế toán thuế cần làm gì khi tiếp nhận doanh nghiệp mới6. Tình huống thực tế 2: Trình tự tiếp nhận hồ sơ, sổ sách, chứng từ kế toán ở DN</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP961" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX962" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LINEVERTICAL964" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH965" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Hồ sơ quyết toán thuế TNDN
                            <br>2. Chi phí được trừ khi quyết toán thuế TNDN
                            <br>3. Chi phí không được trừ khi quyết toán thuế TNDN
                            <br>4. Hướng dẫn kết chuyễn lỗ từ năm trước chuyển sang khi quyết toán thuế TNDN
                            <br>5. Hướng dẫn quyết toán thuế TNDN
                            <br>6. Thực hành quyết toán thuế TNDN</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP955" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX956" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LINEVERTICAL958" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH959" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Quyết toán thuế TNCN là gì? Tại sao phải làm quyết toán
                            <br>2. Các trường hợp không đủ điều kiện ủy quyền quyết toán
                            <br>3. Hướng dẫn tạo mã số thuế thu nhập cá nhân
                            <br>4. Cách tính thuế TNCN cả năm
                            <br>5. Hướng dẫn lập bảng lương
                            <br>6. Hướng dẫn lập tờ khai quyết toán thuế TNCN theo TT92/2015 ( Phần 1 )
                            <br>7. Hướng dẫn lập tờ khai quyết toán thuế TNCN theo TT92/2015 ( Phần 2 )</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP949" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX950" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LINEVERTICAL952" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH953" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Giới thiệu nội dung chương học
                            <br>2. Trách nhiệm Doanh Nghiệp trong kê khai và nộp thuê Thu nhập cá nhân
                            <br>3. Phân Loại đối tượng chịu thuế
                            <br>4. Hướng dẫn tính thuế TNCN với Hợp đồng lao động trên 3 tháng
                            <br>5. Các khoản thu nhập chịu thuế
                            <br>6. Thu nhập miễn thuế
                            <br>7. Hướng dẫn lập tờ khai thuế TNCN
                            <br>8. Hướng dẫn đăng ký người phụ thuộc
                            <br>9. Cách tính thuế TNCN trường hợp HĐLĐ trên 3 tháng
                            <br>10. Cách tính thuế TNCN trường hợp HĐLĐ dưới 3 tháng
                            <br>11. Hồ sơ kê khai thuế TNCN
                            <br>12. Các khoản thuế giảm trừ
                            <br>13. Thực hành lập tờ khai Thuế TNCN ( theo tháng )
                            <br>14. Thực hành lập tờ khai Thuế TNCN ( theo quý)</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP943" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX944" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LINEVERTICAL946" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH947" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">A. Kỹ thuật lập tờ khai thuế GTGT
                            <br>1. Giới thiệu nội dung phần 3 - thuế GTGT
                            <br>2. 02 phương pháp tính thuế GTGT
                            <br>3. Xác định kỳ kê khai thuế GTGT
                            <br>4. Mục đích và vai trò của kê khai thuế GTGT ở DN
                            <br>5. Kiểm tra các điều kiện khấu trừ với chứng từ đầu vào
                            <br>6. Thực hành lập bảng kê đầu vào
                            <br>7. Thực hành lập bảng kê đầu ra
                            <br>8. Kỹ thuật lên tờ khai thuế GTGT
                            <br>9. Đối chiếu tài khoản 1331.3331.511 với tờ khai thuế GTGT
                            <br>10. Kinh nghiệm kê khai và lưu trữ hóa đơn đầu vào, đầu ra11. Hướng dẫn làm báo cáo sử dụng hóa đơn
                            <br>B. Hướng dẫn kế khai thuế GTGT bổ sung trên HTKK
                            <br>12. Nguyên tắc kê khai bổ sung thuế GTGT
                            <br>13. Tình huống 1 : Thực hành lập tờ khai thuế GTGT bổ sung
                            <br>14. Tình huống 2 : Thực hành lập tờ khai thuế GTGT bổ sung
                            <br>15. Bài tập thu hoạch : Kê khai bổ sung thuế GTGT</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP937" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX938" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LINEVERTICAL940" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH941" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p"></p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP931" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX932" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LINEVERTICAL934" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH935" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p"></p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION694" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE695" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">&nbsp;Người đồng hành cùng các bạn chinh phục&nbsp;</h2> </div>
                    <div id="HEADLINE697" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Phạm Thị Nhung</h3> </div>
                    <div id="LINE700" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="BOX701" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LISTOP702" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li color="" style="color: rgb(0, 0, 0);">Chứng chỉ kế toán quốc tế CAT/ACCA do Hiệp hội kế toán công chứng Anh Quốc Cấp bằng.</li>
                            <li color="" style="color: rgb(0, 0, 0);">Kế toán trưởng công ty TNHH Emotive 100% vốn của Mỹ&nbsp;</li>
                            <li color="" style="color: rgb(0, 0, 0);">Tư vấn kế toán, thuế cho nhiều doanh nghiệp trong nước và doanh nghiệp có vốn đầu tư nước ngoài FDI</li>
                            <li color="" style="color: rgb(0, 0, 0);">&nbsp;05 năm kế toán tổng hợp và thuế Chuỗi nhà hàng ăn nhanh (BurgerKing, Pizza Domino, Gà Popeys, Dunkin Donut) thuôc tập đoàn Liên Thái Bình Dương (IPP group)</li>
                            <li color="" style="color: rgb(0, 0, 0);">&nbsp;Tham gia nhiều kỳ quyết toán, hoàn thuế giá trị gia tăng</li>
                        </ol>
                    </div>
                    <div id="HEADLINE704" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">KẾ TOÁN THUẾ</h3> </div>
                    <div id="BOX867" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE967" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Giảng viên:</h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION746" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP753" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX754" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP753" lp-display="block">
                                <div class="widget-content">
                                    <div id="SHAPE755" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="rgba(255,255,255,1)">
                                            <path d="M7 5v23l1.594-1.188L16 21.25l7.406 5.563L25 28V5H7zm2 2h14v17l-6.406-4.813L16 18.75l-.594.438L9 24V7z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="PARAGRAPH756" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Tiết kiệm một khoản không nhỏ cho bạn!</h6> </div>
                                    <div id="BOX782" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE783" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <h5 class="widget-content" lp-node="h5">Miễn phí&nbsp;giao hàng toàn quốc</h5> </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX757" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP753" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE758" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h2 class="widget-content" lp-node="h2">GIẢM TỚI</h2> </div>
                                    <div id="HEADLINE759" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h2 class="widget-content" lp-node="h2">55,87%</h2> </div>
                                    <div id="LINE760" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                        <div class="widget-content">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                    <div id="HEADLINE761" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">895.000Đ</h3> </div>
                                    <div id="SHAPE763" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#000000">
                                            <path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,17L17,12H14V8H10V12H7L12,17Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="LINE762" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                        <div class="widget-content">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE764" class="widget-element widget-snap wow pulse animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">395.000Đ</h2> </div>
                    <div id="BOX747" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE748" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">Áp dụng đến hết <?php echo date('d/m/Y'); ?></h2> </div>
                            <div id="HEADLINE777" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">Nhanh tay lên !!!</h2> </div>
                            <div id="FORM750" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-ss-f="[{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:8065&quot;},{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:8128&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:8135&quot;},{&quot;name&quot;:&quot;street&quot;,&quot;value&quot;:&quot;street&quot;,&quot;$$hashKey&quot;:&quot;object:8142&quot;}]" lp-display="block">
                               <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                    <div id="ITEM_FORM751" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" lp-name-id="email" required="required">
                                    </div>
                                    <div id="ITEM_FORM774" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" lp-name-id="name" required="required">
                                    </div>
                                    <div id="ITEM_FORM775" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại" lp-name-id="phone">
                                    </div>
                                    <div id="ITEM_FORM776" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Nhập địa chỉ" name="dia_chi" lp-label="Địa chỉ" lp-name-id="street" required="required">
                                    </div>
                                     <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <button id="btn-752" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                                </form>
                            </div><a id="BUTTON752" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM750" lp-display="table"><span class="widget-content">GỬI LIÊN HỆ CHO CHÚNG TÔI</span> </a>
                            <div id="HEADLINE784" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Sau khi đăng ký mua khóa học<br>&nbsp;bộ phận CSKH của Lakita sẽ liên hệ với bạn để&nbsp;<br>xác nhận thông tin và nhân viên bưu điện sẽ giao khóa học<br>&nbsp;tận nơi cho bạn.&nbsp;<br><span style="color: rgb(249, 12, 54);">Bạn chỉ phải trả tiền khi nhận được khóa học</span></h3> </div>
                            <div id="COUNTDOWN1035" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="<?php echo (strtotime('+1 day', strtotime(date('d-m-Y'))) - time()) / 60; ?>" lp-display="block">
                                <div class="widget-content">
                                    <div><span>00</span></div>
                                    <div><span>00</span></div>
                                    <div><span>00</span></div>
                                    <div><span>00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION409" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="IMAGE422" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/logo-white-1512779849416.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE785" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2"><span style="font-weight: bold;">LIÊN HỆ:&nbsp;</span><br><br></h2> </div>
                    <div id="HEADLINE786" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Cùng bạn vươn xa</h5> </div>
                    <div id="HEADLINE868" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Phòng 701 CT1 - Chung cư Skylight - Ngõ Hòa Bình 6 -&nbsp;125D Minh Khai - Q. Hai Bà Trưng - Hà Nội<br color="" style="color: rgb(255, 255, 255);">Hotline: 1900 636 195 - 04 7306 2468<br>Email: cskh@lakita.vn</h5> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <script type="text/javascript" async="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1513326742930"></script>
            <script>
            var loadCSSFiles = function () {
                var links = 'https://static.ladipage.net/source/animate.min.css?v=1513326742930';
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
                    <div class="fb-comments" data-href="https://lakita.vn/tron-bo-quyet-toan-thue-tu-a-den-z-candh1.html" 
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
                $("#BUTTON752").click(function (e) {
                    e.preventDefault();
                    $("#btn-752").click();
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