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
        <meta property="og:url" content="https://lakita.vn/yoga-danh-cho-nguoi-lam-van-phong-4.html" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/360x260/cac-bai-the-duc-tai-cho-1512787899.jpg">
        <meta property="og:description" content="Hỗ trợ điều trị và phòng tránh những vấn đề về sức khỏe và tinh thần thường gặp cho người làm việc văn phòng." />
        <meta name="format-detection" content="telephone=no" />
        <?php $this->load->view('landingpage/y1004/css'); ?>
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
            <div id="SECTION19" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="LINE20" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE22" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">KHÓA HỌC YOGA DÀNH CHO NGƯỜI LÀM VĂN PHÒNG</h1> </div>
                    <div id="IMAGE23" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block" lp-action-link="POPUP45" lp-action-type="popup" lp-target="" href="">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/848a0382-1512807460466.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX24" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE25" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M18,22H6A2,2 0 0,1 4,20V4C4,2.89 4.9,2 6,2H7V9L9.5,7.5L12,9V2H18A2,2 0 0,1 20,4V20A2,2 0 0,1 18,22M13,15A2,2 0 0,0 11,17A2,2 0 0,0 13,19A2,2 0 0,0 15,17V12H18V10H14V15.27C13.71,15.1 13.36,15 13,15Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX26" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE27" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Giáo viên tài năng</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX28" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE29" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M19,19H5V5H19M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16.5,16.25C16.5,14.75 13.5,14 12,14C10.5,14 7.5,14.75 7.5,16.25V17H16.5M12,12.25A2.25,2.25 0 0,0 14.25,10A2.25,2.25 0 0,0 12,7.75A2.25,2.25 0 0,0 9.75,10A2.25,2.25 0 0,0 12,12.25Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX30" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE31" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Các tư thế đơn giản, dễ học, dễ thực hiện</h5> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX32" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX34" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE35" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M18,22H6A2,2 0 0,1 4,20V4C4,2.89 4.9,2 6,2H7V9L9.5,7.5L12,9V2H18A2,2 0 0,1 20,4V20A2,2 0 0,1 18,22M13,15A2,2 0 0,0 11,17A2,2 0 0,0 13,19A2,2 0 0,0 15,17V12H18V10H14V15.27C13.71,15.1 13.36,15 13,15Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE33" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Học mọi lúc mọi nơi, trên mọi thiết bị</h5> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION80" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX81" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="FORM82" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-display="block">
                                <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                    <div id="ITEM_FORM83" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input style="color: #fff" class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" lp-name-id="name" required="required">
                                    </div>
                                    <div id="ITEM_FORM84" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input style="color: #fff" class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" lp-name-id="email" required="required">
                                    </div>
                                    <div id="ITEM_FORM85" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input style="color: #fff" class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại" lp-name-id="phone">
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <button id="btn-86" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                                </form>
                            </div><a id="BUTTON86" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM82" lp-display="table"><span class="widget-content">Đăng ký</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE87" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Mua ngay với chỉ 395.000đ</h2> </div>
                    <div id="GROUP88" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX90" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP88" lp-display="block">
                                <div class="widget-content">
                                    <div id="SHAPE91" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,232,20,1)">
                                            <path d="M15,5H14V4H15M10,5H9V4H10M15.53,2.16L16.84,0.85C17.03,0.66 17.03,0.34 16.84,0.14C16.64,-0.05 16.32,-0.05 16.13,0.14L14.65,1.62C13.85,1.23 12.95,1 12,1C11.04,1 10.14,1.23 9.34,1.63L7.85,0.14C7.66,-0.05 7.34,-0.05 7.15,0.14C6.95,0.34 6.95,0.66 7.15,0.85L8.46,2.16C6.97,3.26 6,5 6,7H18C18,5 17,3.25 15.53,2.16M20.5,8A1.5,1.5 0 0,0 19,9.5V16.5A1.5,1.5 0 0,0 20.5,18A1.5,1.5 0 0,0 22,16.5V9.5A1.5,1.5 0 0,0 20.5,8M3.5,8A1.5,1.5 0 0,0 2,9.5V16.5A1.5,1.5 0 0,0 3.5,18A1.5,1.5 0 0,0 5,16.5V9.5A1.5,1.5 0 0,0 3.5,8M6,18A1,1 0 0,0 7,19H8V22.5A1.5,1.5 0 0,0 9.5,24A1.5,1.5 0 0,0 11,22.5V19H13V22.5A1.5,1.5 0 0,0 14.5,24A1.5,1.5 0 0,0 16,22.5V19H17A1,1 0 0,0 18,18V8H6V18Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE92" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP88" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">HỌC MỌI LÚC MỌI NƠI - TRÊN MỌI THIẾT BỊ</h5> </div>
                            <div id="PARAGRAPH93" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP88" lp-display="block">
                                <p class="widget-content" lp-node="p">Bạn có thể học khóa học này mọi lúc, mọi nơi, trên mọi thiết &nbsp; &nbsp; &nbsp; &nbsp; bị: Máy tính, Smart Phone, Tab</p>
                            </div>
                            <div id="PARAGRAPH94" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP88" lp-display="block">
                                <p class="widget-content" lp-node="p">Khóa học có 50 bài giảng đơn giản, dễ thực hiện, ngay cả bạn chưa học Yoga bao giờ cũng thực hiện được</p>
                            </div>
                            <div id="HEADLINE95" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP88" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">BÀI GIẢNG PHONG PHÚ, DỄ THỰC HIỆN</h5> </div>
                            <div id="BOX96" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP88" lp-display="block">
                                <div class="widget-content">
                                    <div id="SHAPE97" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,232,20,1)">
                                            <path d="M6,22H18L12,16M21,3H3A2,2 0 0,0 1,5V17A2,2 0 0,0 3,19H7V17H3V5H21V17H17V19H21A2,2 0 0,0 23,17V5A2,2 0 0,0 21,3Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX98" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP88" lp-display="block">
                                <div class="widget-content">
                                    <div id="SHAPE99" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,232,20,1)">
                                            <path d="M9,14C11.67,14 17,15.33 17,18V20H1V18C1,15.33 6.33,14 9,14M9,12A4,4 0 0,1 5,8A4,4 0 0,1 9,4A4,4 0 0,1 13,8A4,4 0 0,1 9,12M19,13.28L16.54,14.77L17.2,11.96L15,10.08L17.89,9.83L19,7.19L20.13,9.83L23,10.08L20.82,11.96L21.5,14.77L19,13.28Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE100" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP88" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">GIẢNG VIÊN TÀI NĂNG</h5> </div>
                            <div id="PARAGRAPH101" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP88" lp-display="block">
                                <p class="widget-content" lp-node="p">Thầy Đặng Hùng - Giám đốc Học viện Yoga Việt Nam</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION125" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP126" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE127" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP126" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">trẻ hóa khuôn mặt</h6> </div>
                            <div id="PARAGRAPH128" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP126" lp-display="block">
                                <p class="widget-content" lp-node="p">Da dẻ, nét mặt của bạn sẽ luôn tươi trẻ khi bạn thực hiện các bài tập này</p>
                            </div>
                            <div id="SHAPE129" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP126" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" version="1.0" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: inline-block;" fill="rgba(255,255,255,1)">
                                    <path d="M29.23 13.342L17.633 1.747C17.198 1.31 16.618 1.07 16 1.07s-1.196.24-1.632.677L11.84 4.275H8.005V8.11l-5.332 5.33v17.49H29.33V13.443l-.1-.1zm-1.105.405l-4.13 4.13V9.618l4.13 4.128zM15.12 2.5c.47-.47 1.29-.47 1.76 0l1.774 1.774h-5.307L15.12 2.5zm4.6 2.84l3.21 3.212v10.39l-2.47 2.47-2.828-2.83c-.436-.436-1.016-.677-1.633-.677s-1.198.24-1.634.677l-2.87 2.87-2.427-2.426V5.34h10.648zm-15.34 7.9l3.624-3.624v8.343l-4.172-4.173.548-.548zm-.642 2.818v-.856l7.003 7.003-.078.08-6.924 6.922v-13.15zm.85 13.806l.574-.573h.002l9.957-9.955c.47-.47 1.29-.47 1.76 0l10.53 10.53H4.59zM28.263 15.36v13.848l-7.046-7.043 7.046-7.046v.24z"></path>
                                    <path d="M12.268 8.54h7.464v1.065h-7.464V8.54zM12.268 14.937h7.464v1.066h-7.464v-1.066zM12.268 11.738h5.33v1.066h-5.33v-1.066z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP130" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE131" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP130" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 32" version="1.0" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: inline-block;" fill="rgba(255,255,255,1)">
                                    <path d="M16.785 12.328h7.342v1.05h-7.342v-1.05zM16.784 18.623h7.343v1.05h-7.343v-1.05zM16.784 15.475h5.237v1.05h-5.236v-1.05z"></path>
                                    <path d="M15.735 6.034V2.887H11.54v3.147H0v23.08h27.275V6.033h-11.54zm10.49 1.05V9.18h-10.49V7.084h10.49zM12.59 3.935h2.098V9.18h-2.098V3.937zM1.048 7.083h10.49V9.18H1.05V7.084zm0 20.98V10.232h25.178v17.834H1.05z"></path>
                                    <path d="M15.463 23.402c-.757-.315-2.545-.936-3.652-1.263-.093-.03-.107-.036-.107-.43 0-.323.133-.65.263-.926.14-.3.308-.806.368-1.26.168-.195.396-.58.545-1.312.127-.645.068-.88-.018-1.102-.01-.023-.018-.046-.026-.07-.033-.15.012-.937.123-1.548.075-.418-.02-1.31-.597-2.046-.364-.466-1.06-1.037-2.334-1.117h-.7c-1.25.08-1.95.65-2.312 1.116-.577.737-.673 1.628-.597 2.046.113.61.157 1.397.125 1.546-.006.026-.016.05-.026.072-.086.22-.147.456-.017 1.102.146.733.375 1.117.544 1.313.058.453.226.958.368 1.26.103.22.153.518.153.94 0 .394-.015.4-.103.427-1.144.338-2.967.996-3.646 1.293-.54.23-.67.646-.67 1.02v.453h1.048v-.453c0-.017 0-.03.002-.04l.04-.018c.644-.283 2.432-.927 3.542-1.255.835-.265.835-1.05.835-1.426 0-.58-.08-1.022-.252-1.39-.105-.223-.235-.62-.277-.945l-.04-.312-.207-.24c-.03-.035-.19-.243-.308-.832-.08-.397-.05-.47-.035-.514.028-.068.05-.135.073-.23.092-.424-.03-1.483-.116-1.955-.03-.155.012-.73.39-1.214.332-.425.844-.665 1.522-.713h.63c.69.048 1.208.288 1.54.713.38.484.42 1.06.39 1.213-.085.472-.207 1.53-.116 1.957l.01.04.01.04c.014.047.03.09.052.15.017.044.046.117-.033.513-.12.59-.28.8-.313.836l-.204.237-.04.31c-.044.325-.173.724-.278.948-.17.36-.364.84-.364 1.375 0 .377 0 1.162.862 1.434 1.048.31 2.805.916 3.535 1.22.11.048.15.106.162.128v.424h1.048v-.454c0-.374-.26-.83-.797-1.063z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="PARAGRAPH132" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP130" lp-display="block">
                                <p class="widget-content" lp-node="p">Bạn sẽ chẳng còn cảm thấy đau vùng thắt lưng nữa khi tham gia khóa học này</p>
                            </div>
                            <div id="HEADLINE133" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP130" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">loại bỏ chứng đau thắt lưng</h6> </div>
                        </div>
                    </div>
                    <div id="GROUP134" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE135" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP134" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" version="1.0" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: inline-block;" fill="rgba(255,255,255,1)">
                                    <path d="M16 2.672h-.032C8.62 2.69 2.672 8.65 2.672 16c0 7.348 5.95 13.31 13.296 13.327H16c7.36 0 13.328-5.967 13.328-13.327S23.36 2.672 16 2.672zm.533 7.976c1.413-.04 2.788-.225 4.112-.548.4 1.57.647 3.382.686 5.367h-4.797v-4.82zm0-1.066v-5.76c1.437.4 2.893 2.315 3.82 5.253-1.23.297-2.508.47-3.82.507zM15.467 3.81v5.772c-1.323-.037-2.61-.213-3.852-.515.936-2.956 2.405-4.88 3.852-5.256zm0 6.837v4.82h-4.83c.038-1.988.286-3.8.686-5.373 1.334.326 2.72.515 4.144.553zm-5.904 4.82h-5.81c.117-2.74 1.138-5.252 2.772-7.24 1.187.653 2.446 1.188 3.766 1.588-.43 1.7-.688 3.617-.727 5.652zm0 1.066c.04 2.034.297 3.95.728 5.65-1.318.402-2.578.937-3.765 1.59-1.635-1.988-2.656-4.5-2.773-7.24h5.81zm1.073 0h4.83v4.814c-1.423.038-2.81.228-4.144.555-.4-1.57-.647-3.383-.686-5.37zm4.83 5.88v5.777c-1.447-.378-2.918-2.303-3.853-5.263 1.24-.302 2.53-.478 3.854-.515zm1.067 5.765v-5.765c1.313.038 2.59.21 3.822.508-.928 2.942-2.384 4.86-3.822 5.258zm0-6.83v-4.815h4.798c-.038 1.983-.285 3.79-.683 5.36-1.325-.322-2.7-.51-4.113-.547zm5.87-4.815h5.846c-.12 2.74-1.14 5.25-2.774 7.24-1.197-.658-2.467-1.197-3.797-1.6.43-1.697.686-3.61.725-5.64zm0-1.066c-.038-2.033-.296-3.946-.726-5.646 1.33-.4 2.6-.94 3.795-1.597 1.636 1.99 2.658 4.5 2.776 7.244h-5.845zM24.74 7.41c-1.06.563-2.18 1.03-3.35 1.384-.623-2.005-1.498-3.642-2.533-4.717 2.27.545 4.297 1.72 5.883 3.332zM13.103 4.086c-1.03 1.073-1.9 2.702-2.52 4.697-1.16-.353-2.27-.815-3.32-1.375 1.575-1.603 3.587-2.775 5.84-3.323zm-5.844 20.5c1.05-.56 2.162-1.024 3.32-1.377.622 1.997 1.493 3.63 2.523 4.702-2.255-.55-4.268-1.72-5.844-3.326zm11.595 3.335c1.036-1.075 1.91-2.712 2.535-4.72 1.17.354 2.29.82 3.35 1.386-1.585 1.614-3.613 2.79-5.885 3.334z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="PARAGRAPH136" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP134" lp-display="block">
                                <p class="widget-content" lp-node="p">Đau vai cổ gáy không còn là vấn đề của bạn nữa khi bạn tham gia khóa học này</p>
                            </div>
                            <div id="HEADLINE137" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP134" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">đánh bay chứng đau vai cổ gáy</h6> </div>
                        </div>
                    </div>
                    <div id="GROUP138" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE139" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP138" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">HỌC ĐƯỢC CÁC BÀI THỞ ĐƠN GIẢN</h6> </div>
                            <div id="PARAGRAPH140" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP138" lp-display="block">
                                <p class="widget-content" lp-node="p">Các bài tập thở giúp bạn thanh lọc cơ thể, đánh bay stress</p>
                            </div>
                            <div id="SHAPE141" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP138" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32" version="1.0" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: inline-block;" fill="rgba(255,255,255,1)">
                                    <path d="M0 3.2v25.6h28.8V3.2H0zm1.067 1.067h2.667v23.467H1.067V4.267zm26.666 23.466H4.8V4.266h22.933v23.467z"></path>
                                    <path d="M16.533 26.133c5.6 0 10.133-4.533 10.133-10.133S22.133 5.867 16.533 5.867C10.933 5.867 6.4 10.4 6.4 16s4.533 10.133 10.133 10.133zm0-19.2c5.013 0 9.067 4.053 9.067 9.067s-4.053 9.067-9.067 9.067c-5.013 0-9.067-4.053-9.067-9.067s4.053-9.067 9.067-9.067z"></path>
                                    <path d="M16.533 19.2c1.76 0 3.2-1.44 3.2-3.2s-1.44-3.2-3.2-3.2c-1.76 0-3.2 1.44-3.2 3.2s1.44 3.2 3.2 3.2zm0-5.333c1.173 0 2.133.96 2.133 2.133s-.96 2.133-2.133 2.133S14.4 17.173 14.4 16s.96-2.133 2.133-2.133z"></path>
                                    <path d="M17.067 16c0 .295-.24.533-.533.533S16 16.293 16 16c0-.295.24-.533.534-.533s.533.24.533.533z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="IMAGE142" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/uploads/images/5a8563a5-5f68-4470-b806-42ec62e2cac6.jpg"></div>
                            <div class="lp-show-image"></div>
                            <div id="HEADLINE143" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">LỢI ÍCH CỦA BẠN TỪ KHÓA HỌC NÀY</h2> </div>
                            <div id="LINE145" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div><a id="BUTTON146" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP315" lp-action-type="popup" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY</span> </a></div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION157" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="IMAGE171" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/_mg_4725-1512813471785.jpg"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX158" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE170" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <p class="widget-content" lp-node="p">- Ủy viên thường trực hiệp hội Yoga trị liệu Châu Á
                                    <br>- Đã có 21 năm nghiên cứu và thực hành về Yoga.
                                    <br>- Đã có 15 năm đào tạo giáo viên và chia sẻ Yoga trong nước và ngoài nước.Tốt nghiệp Viện Toán học Đại học Bách khoa Hà Nội năm 2010.
                                    <br>- Năm 2012 đạt thành tích xuất sắc về dự án “Phát triển Yoga Việt Nam” do đại học Pháp ITIN tổ chức.
                                    <br>- Năm 2013 nhận bằng trị liệu cao cấp do Đại học trị liệu Yoga SVYASA (Ấn Độ) tổ chức.
                                    <br>- Năm 2014 đạt chứng nhận xuất săc về thiền định do Học viện thiền đinh Ấn Độ tổ chức.
                                    <br>- Năm 2016 được Sở Y tế Hà Tĩnh trao bằng khen về thành tích xuất sắc trong “kết hợp Yoga và phục hồi chức năng điều trị có hiệu quả cho người bệnh” tại Bệnh viện đa khoa Thành phố Hà Tĩnh.</p>
                            </div>
                            <div id="HEADLINE159" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">THẦY ĐẶNG HÙNG</h4> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE165" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">GIÁM ĐỐC HỌC VIỆN YOGA VIỆT NAM<br><br></h6> </div>
                    <div id="HEADLINE172" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">AI LÀ NGƯỜI SẼ GIÚP BẠN THỰC HIỆN ĐIỀU ĐÓ?</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION224" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE226" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">Khóa học bao gồm:</h1> </div>
                    <div id="YOUTUBE227" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="1" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/w8jLuCdHyc4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX228" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE229" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">1</h4> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE230" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Năng lượng hơi thở cuộc sống</h6> </div>
                    <div id="BOX231" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE232" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">2</h4> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE233" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Vấn đề về thoái hóa cổ tay ngón tay</h6> </div>
                    <div id="BOX234" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE235" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">3</h4> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE236" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <p class="widget-content" lp-node="p">Vấn đề đông cứng khớp vai</p>
                    </div>
                    <div id="BOX237" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE238" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">4</h4> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE239" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Vấn đề về đau vai, cổ, gáy</h6> </div>
                    <div id="BOX240" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE241" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">5</h4> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE242" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Vấn đề về đau thắt lưng</h6> </div>
                    <div id="BOX243" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE244" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">6</h4> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE245" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Vấn đề về tiêu hóa</h6> </div>
                    <div id="BOX246" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE247" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">7</h4> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX249" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE250" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">8</h4> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX251" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE252" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">9</h4> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE254" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Vấn đề về vùng chân</h6> </div>
                    <div id="HEADLINE255" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Trẻ hóa nét mặt</h6> </div>
                    <div id="HEADLINE256" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Khỏe toàn thân</h6> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION269" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE270" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Rất nhiều người đã trải nghiệm khóa học, họ đã thành công</h2> </div>
                    <div id="HEADLINE271" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Hãy lắng nghe những cảm nhận của họ!</h6> </div>
                    <div id="GROUP276" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="LINE277" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP276" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="LINE278" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP276" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="GROUP279" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP276">
                                <div class="widget-content">
                                    <div id="HEADLINE280" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP279" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">Nguyễn Thái Sơn - Nhân viên văn phòng</h5> </div>
                                    <div id="BOX281" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP279" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="BOX282" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP279" lp-display="block">
                                        <div class="widget-content">
                                            <div id="PARAGRAPH283" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                                <p class="widget-content" lp-node="p">Nhờ có khóa học mà tôi không còn cảm thấy đau lưng khi làm việc nữa. Cứ mỗi lần được giải lao, tôi lại mở khóa học ra thực hiện. Quá hay và hữu ích.</p>
                                            </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP284" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP276">
                                <div class="widget-content">
                                    <div id="HEADLINE285" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP284" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">Đặng Thơm - Kế toán</h5> </div>
                                    <div id="BOX286" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP284" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="BOX287" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP284" lp-display="block">
                                        <div class="widget-content">
                                            <div id="PARAGRAPH288" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                                <p class="widget-content" lp-node="p">Tôi chưa từng thấy một khóa học nào như thế, quá hữu ích, &nbsp;quá thú vị. Nhờ các tư thế đơn giản, dễ thực hiện mà ngay cả lúc làm việc tôi cũng thực hiện được</p>
                                            </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP326" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP276">
                                <div class="widget-content">
                                    <div id="HEADLINE327" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP326" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">Trần Nguyên Phú - Giám đốc bệnh viện thành phố Hà Tĩnh</h5> </div>
                                    <div id="BOX328" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP326" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="BOX329" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP326" lp-display="block">
                                        <div class="widget-content">
                                            <div id="PARAGRAPH330" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                                <p class="widget-content" lp-node="p">Khóa học thực sự rất hay, các tư thế tuy đơn giản nhưng thầy Đặng Hùng phân tích tư thế rất chuyên sâu. &nbsp;</p>
                                            </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="BOX294" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE296" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">SỞ HỮU TRỌN ĐỜI CHỈ 295K</h6> </div><a id="BUTTON297" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM298" lp-display="table"><span class="widget-content">MUA NGAY</span> </a>
                            <div id="FORM298" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:7632&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:7633&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:7634&quot;}]" lp-display="block">
                                <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                    <div id="ITEM_FORM299" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                    </div>
                                    <div id="ITEM_FORM300" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                                    </div>
                                    <div id="ITEM_FORM301" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <button id="btn-297" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                                </form>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION303" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE304" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <p class="widget-content" lp-node="p">Chỉ còn 1 ngày nữa là chương trình ưu đãi dành cho khách hàng kết thúc. Nhanh tay lên!</p>
                    </div><a id="BUTTON305" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP315" lp-action-type="popup" lp-target="" href=""><span class="widget-content">ĐẶT MUA HÀNG NGAY!</span> </a>
                    <div id="HEADLINE307" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">Đăng ký mua ngay chỉ với 395.000đ</h1> </div>
                    <div id="BOX308" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP309" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="PARAGRAPH310" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP309" lp-display="block">
                                        <p class="widget-content" lp-node="p">Ngày</p>
                                    </div>
                                    <div id="PARAGRAPH311" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP309" lp-display="block">
                                        <p class="widget-content" lp-node="p">Giờ</p>
                                    </div>
                                    <div id="PARAGRAPH312" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP309" lp-display="block">
                                        <p class="widget-content" lp-node="p">Phút</p>
                                    </div>
                                    <div id="PARAGRAPH313" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP309" lp-display="block">
                                        <p class="widget-content" lp-node="p">Giây</p>
                                    </div>
                                </div>
                            </div>
                            <div id="COUNTDOWN314" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="<?php echo (strtotime('+1 day', strtotime(date('d-m-Y'))) - time()) / 60; ?>" lp-endtimetype="timedown" lp-display="block">
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
                    <div id="PARAGRAPH331" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">LIÊN HỆ&nbsp;
                            <br color="" style="color: rgb(255, 255, 255);">Địa chỉ: Số 10, ngõ 272, Ngọc Thụy, Long Biên, Hà Nội
                            <br color="" style="color: rgb(255, 255, 255);">Hotline: 091 715 8228
                            <br color="" style="color: rgb(255, 255, 255);">Email: info@hocvienyoga.vn&nbsp;
                            <br color="" style="color: rgb(255, 255, 255);">Website: hocvienyoga.vn</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP315" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX316" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE318" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">ĐĂNG KÝ ĐỂ ĐƯỢC TƯ VẤN</h1> </div>
                            <div id="FORM320" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-display="block">
                                <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                    <div id="ITEM_FORM321" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                                    </div>
                                    <div id="ITEM_FORM322" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                                    </div>
                                    <div id="ITEM_FORM323" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <button id="btn-324" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                                </form>
                            </div><a id="BUTTON324" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM320" lp-display="table"><span class="widget-content">HOÀN TẤT ĐĂNG KÝ</span> </a>
                            <div id="PARAGRAPH319" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <h6 class="widget-content" lp-node="h6"></h6> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX317" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE325" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">MUA NGAY</h2> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP147" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX148" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE149" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">MUA NGAY VỚI CHỈ 295K</h1> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="FORM151" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-display="block">
                        <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                            <div id="ITEM_FORM152" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                            </div>
                            <div id="ITEM_FORM153" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                            </div>
                            <div id="ITEM_FORM154" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                            </div>
                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                            <button id="btn-155" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                        </form>
                    </div><a id="BUTTON155" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM151" lp-display="table"><span class="widget-content">HOÀN TẤT ĐĂNG KÝ</span> </a>
                    <div id="LINEVERTICAL156" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP45" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX46" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE47" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">GIÚP BẠN KHỎE ĐẸP&nbsp;HƠN VỚI CHỈ 295K<br></h2> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="FORM49" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-display="block">
                        <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                            <div id="ITEM_FORM50" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                            </div>
                            <div id="ITEM_FORM51" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                            </div>
                            <div id="ITEM_FORM52" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                            </div>
                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                            <button id="btn-53" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                        </form>
                    </div><a id="BUTTON53" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM49" lp-display="table"><span class="widget-content">MUA NGAY</span> </a></div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP36" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="FORM41" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-ss-f="[{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:12749&quot;}]" lp-display="block">
                        <form class="widget-content">
                            <div id="ITEM_FORM42" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                            </div>
                        </form>
                    </div><a id="BUTTON43" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM41" lp-display="table"><span class="widget-content">Nhận mã Giảm giá</span> </a>
                    <div id="SHAPE38" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#3498DB">
                            <path d="M5,6H23V18H5V6M14,9A3,3 0 0,1 17,12A3,3 0 0,1 14,15A3,3 0 0,1 11,12A3,3 0 0,1 14,9M9,8A2,2 0 0,1 7,10V14A2,2 0 0,1 9,16H19A2,2 0 0,1 21,14V10A2,2 0 0,1 19,8H9M1,10H3V20H19V22H1V10Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="HEADLINE37" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">giúp bạn khỏe đẹp hơn với chỉ 395k</h1> </div>
                    <div id="LINE40" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <script type="text/javascript" async="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1513137038182"></script>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="fb-comments" data-href="https://lakita.vn/yoga-danh-cho-nguoi-lam-van-phong-4.html" 
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
                $("#BUTTON86").click(function (e) {
                    e.preventDefault();
                    $("#btn-86").click();
                });
                $("#BUTTON297").click(function (e) {
                    e.preventDefault();
                    $("#btn-297").click();
                });
                $("#BUTTON324").click(function (e) {
                    e.preventDefault();
                    $("#btn-324").click();
                });
                $("#BUTTON155").click(function (e) {
                    e.preventDefault();
                    $("#btn-155").click();
                });
                 $("#BUTTON53").click(function (e) {
                    e.preventDefault();
                    $("#btn-53").click();
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