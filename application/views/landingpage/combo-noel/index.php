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
        <title>COMBO QUÀ KHỦNG DỊP GIÁNG SINH</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="fb:admins" content="100001432238036"/>
        <meta property="fb:app_id" content="315347858825221" />
        <meta property="og:type"   content="website" />
        <meta property="og:url" content="https://lakita.vn/combo-qua-khung-dip-giang-sinh.html" />
        <meta property="og:title" content="COMBO QUÀ KHỦNG DỊP GIÁNG SINH" />
        <meta property="og:image" content="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/mau-ong-gia-noel-dep-an-tuong-34-1513854103.png" />
        <meta property="og:description" content="Giáng sinh về - Tết gần kề. Đăng ký liền tay, nhận ngay combo quà khủng!" />
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
        <?php $this->load->view('landingpage/combo-noel/css'); ?>
        <?php include_once("plugin/analyticstracking.php") ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
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
                    <div id="PARAGRAPH4" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">** Đợt khuyến mại và giảm giá đặc biệt lớn nhất từ trước đến nay &nbsp;nhân dịp Giáng sinh 2017 và Tết dương 2018</p>
                    </div>
                    <div id="HEADLINE6" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">Đăng kí liền tay</h1> </div>
                    <div id="BOX10" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE16" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">ĐĂNG KÝ NHẬN TƯ VẤN TỪ LAKITA</h3> </div>
                            <div id="FORM11" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:4645&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:4646&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:4647&quot;},{&quot;name&quot;:&quot;lpinput1&quot;,&quot;value&quot;:&quot;lpinput1&quot;,&quot;$$hashKey&quot;:&quot;object:7945&quot;}]" lp-display="block">
                                <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                    <div id="ITEM_FORM12" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                    </div>
                                    <div id="ITEM_FORM13" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                                    </div>
                                    <div id="ITEM_FORM14" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                                    </div>
                                    <div id="ITEM_FORM875" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Lĩnh vực kế toán bạn quan tâm" name="dia_chi" lp-label="Ô nhập tùy chọn 1" lp-name-id="lpinput1" required="required">
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <button id="btn-15" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                                </form>
                            </div><a id="BUTTON15" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM11" lp-display="table"><span class="widget-content">Liên hệ với chúng tôi ngay</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE290" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Nhận ngay combo quà khủng !</h2> </div>
                    <div id="GROUP337" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE289" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP337" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">Tết gần kề</h2> </div>
                            <div id="HEADLINE5" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP337" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">Giáng sinh về &nbsp;-</h2> </div>
                        </div>
                    </div>
                    <div id="GROUP350" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE349" class="widget-element widget-snap wow pulse animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP350" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">58% &nbsp; &nbsp; &nbsp;72%</h2> </div>
                            <div id="HEADLINE333" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP350" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Sale tất cả các khóa học từ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;đến&nbsp;</h3> </div>
                        </div>
                    </div>
                    <div id="IMAGE615" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/a-1513758987.png"></div>
                            <div class="lp-show-image"></div>
                            <div id="IMAGE292" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/Logo__slogan_Lakita-1513685810.png"></div>
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
            <div id="SECTION293" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP336" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX307" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP336" lp-display="block">
                                <div class="widget-content">
                                    <div id="BOX308" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE309" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <h5 class="widget-content" lp-node="h5">Dịch vụ chuyên nghiệp</h5> </div>
                                            <div id="LINE310" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                                <div class="widget-content">
                                                    <div class="line"></div>
                                                </div>
                                            </div>
                                            <div id="HEADLINE311" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <p class="widget-content" lp-node="p">Giá giảm, <span style="color: rgb(213, 0, 0); font-weight: bold;">chất lượng dịch vụ không giảm!&nbsp;</span>
                                                    <br color="" style="color: rgb(0, 0, 0);">Đội ngũ tư vấn và hỗ trợ theo sát khách hàng và giải đáp mọi thắc mắc trong quá trình học tập trên hệ thống cũng như &nbsp;thực tế công việc.</p>
                                            </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX302" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP336" lp-display="block">
                                <div class="widget-content">
                                    <div id="BOX303" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE304" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <h5 class="widget-content" lp-node="h5">Giảng viên uy tín</h5> </div>
                                            <div id="LINE305" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                                <div class="widget-content">
                                                    <div class="line"></div>
                                                </div>
                                            </div>
                                            <div id="HEADLINE306" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <p class="widget-content" lp-node="p">- &nbsp; Đội ngũ giảng viên<span style="color: rgb(213, 0, 0);"> <span style="font-weight: bold;" color="">uy tín, nhiệt tình</span></span> và có kiến thức chuyên sâu về các lĩnh vực đảm nhiệm.
                                                    <br color="" style="color: rgb(0, 0, 0);">- &nbsp; Cơ hội nhận được<span style="color: rgb(213, 0, 0); font-weight: bold;"><span style="" color="">&nbsp;tư vấn trao đổi trực tiếp </span>với giảng viên</span> về chuyên môn: kiến thức trong bài học cũng như kiến thức gặp phải khi thực hành trong thực tế.</p>
                                            </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX297" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP336" lp-display="block">
                                <div class="widget-content">
                                    <div id="BOX298" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE299" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <h5 class="widget-content" lp-node="h5">Giảm giá khủng</h5> </div>
                                            <div id="LINE300" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                                <div class="widget-content">
                                                    <div class="line"></div>
                                                </div>
                                            </div>
                                            <div id="HEADLINE301" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <p class="widget-content" lp-node="p">Giảm giá khủng
                                                    <br><span style="font-weight: bold; color: rgb(213, 0, 0);">&nbsp;từ 58% đến 72%</span>, áp dụng với tất cả các khóa học đơn lẻ cũng như combo bất kì&nbsp;
                                                    <br>
                                                    <br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP629" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP622" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP629">
                                <div class="widget-content">
                                    <div id="BOX340" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP622" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP627" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP629">
                                <div class="widget-content">
                                    <div id="IMAGE625" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-group="GROUP627" lp-display="block">
                                        <div class="widget-content">
                                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/00-00-chuong-noel-1513763052.png"></div>
                                            <div class="lp-show-image"></div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="IMAGE624" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-group="GROUP627" lp-display="block">
                                        <div class="widget-content">
                                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/b-1513761977.png"></div>
                                            <div class="lp-show-image"></div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP338" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP629">
                                <div class="widget-content">
                                    <div id="HEADLINE334" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP338" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Giảm giá khủng<span style="color: rgb(213, 0, 0);"> tất cả các khóa học</span> <span style="color: rgb(213, 0, 0);">KẾ TOÁN</span>&nbsp;và còn nhiều ưu đãi hơn khi mua theo combo bất kì!</h6> </div>
                                    <div id="HEADLINE295" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP338" lp-display="block">
                                        <h2 class="widget-content" lp-node="h2">Giáng sinh này có gì đặc biệt?&nbsp;</h2> </div>
                                    <div id="HEADLINE294" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP338" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Nhân dịp chào đón GIÁNG SINH và TẾT DƯƠNG năm 2017, nhận ngay <span style="color: rgb(213, 0, 0);">QUÀ KHỦNG</span> từ Lakita.<br><br></h6> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP630" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="LINE345" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP630" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="HEADLINE335" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP630" lp-display="block">
                                <h2 class="widget-content" lp-node="h2"><span style="font-weight: bold;"><span style="color: rgb(213, 0, 0);">Nhanh tay lên!</span>&nbsp;<br></span>Nếu bạn không muốn bỏ lỡ cơ hôị</h2> </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION631" style="z-index: 9" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE632" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">6 COMBO HỮU ÍCH NHẤT<br>&nbsp;CHO CHUYÊN NGÀNH KẾ TOÁN</h2> </div>
                    <div id="HEADLINE635" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Combo dành cho <span style="font-weight: bold;">người mới bắt đầu</span></h3> </div>
                    <div id="HEADLINE652" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Combo nghiệp vụ <span style="font-weight: bold;">Báo cáo tài chính và Quyết toán thuế</span></h3> </div>
                    <div id="HEADLINE669" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Combo trọn bộ <span style="font-weight: bold;">Quyết toán thuế</span> từ cơ bản đến nâng cao</h3> </div>
                    <div id="GROUP796" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <a id="BUTTON780" href="#FORM761" style="z-index: 99999999;" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-group="GROUP796" lp-display="table">
                                <span class="widget-content">Đăng kí ngay</span> 
                            </a>
                            <div id="HEADLINE641" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP796" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Combo 1</h3> </div>
                            <div id="GROUP642" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP796">
                                <div class="widget-content">
                                    <div id="HEADLINE639" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP642" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Kế toán dành cho người mới bắt đầu&nbsp;<br>và Trọn bộ lập BCTC</h3> </div>
                                </div>
                            </div>
                            <div id="BOX636" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP796" lp-display="block">
                                <div class="widget-content"><a id="BUTTON638" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP685" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a>
                                    <div id="GROUP929" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE930" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP929" lp-display="block">
                                                <h3 class="widget-content" lp-node="h3">695.000đ</h3> </div>
                                            <div id="HEADLINE931" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP929" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">Chỉ còn</h6> </div>
                                            <div id="BOX932" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP929" lp-display="block">
                                                <div class="widget-content">
                                                    <div id="HEADLINE933" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                        <h5 class="widget-content" lp-node="h5">940.000đ</h5> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--                                <div class="ladi-widget-overlay"></div>-->
                            </div>
                        </div>
                    </div>

                    <div id="HEADLINE904" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Combo tự chọn độc đáo&nbsp;<br>dành riêng cho bạn!&nbsp;</h3> </div>
                    <div id="GROUP917" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <!--                            <div id="GROUP915" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP917">
                                                            <div class="widget-content">
                                                                <div id="BOX913" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP915" lp-display="block">
                                                                    <div class="widget-content"></div>
                                                                    <div class="ladi-widget-overlay"></div>
                                                                </div>
                                                                <div id="HEADLINE914" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP915" lp-display="block">
                                                                    <h3 class="widget-content" lp-node="h3">Tổng tiền:</h3> </div>
                                                            </div>
                                                        </div>-->
                            <a id="BUTTON910" href="#FORM761" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM905" lp-group="GROUP917" lp-display="table"><span class="widget-content">ĐỒNG Ý</span> </a>
                            <div id="FORM905" class="widget-element widget-snap" lp-lang="FORM" lp-type-form="google-sheet" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;select1&quot;,&quot;value&quot;:&quot;select1&quot;,&quot;$$hashKey&quot;:&quot;object:9125&quot;}]" lp-group="GROUP917" lp-display="block">
                                <form class="widget-content">
                                    <div id="ITEM_FORM912" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <select id="course_code" multiple="multiple" class="widget-content" name="course_code[]" placeholder="Vui lòng chọn" lp-label="Menu thả xuống 1" lp-name-id="select1" required="required">
                                            <option value="" selected="selected">Vui lòng chọn</option>
                                            <option value="E130">Thủ thuật Excel - 199K</option>
                                            <option value="E110">Bí quyết làm chủ Excel 2007 - 199K</option>
                                            <option value="E300">Excel từ cơ bản tới chuyên sâu dành riêng cho kế toán - 199K</option>
                                            <option value="E100">Bí quyết làm chủ Excel năm 2017 - 199K</option>
                                            <option value="E120">18 thủ thuật Excel - 199K</option>
                                            <option value="E200">99 tuyệt chiêu Excel dành cho người đi làm - 199K</option>
                                            <option value="TC100">99 thủ thuật văn phòng - 199K</option>
                                            <option value="KT100">Làm chủ hóa đơn chứng từ trong 4h - 199K</option>
                                            <option value="E400">Excel từ A-Z - 199K</option>
                                            <option value="EM100">Bí quyết làm chủ môn Excel cho người đi làm năm 2017 - 199K</option>
                                            <option value="Y100">Khóa học Yoga dành cho người làm văn phòng - 199K</option>
                                            <option value="KT200">Làm chủ kiến thức và xử lý tình huống về hóa đơn - 295K</option>
                                            <option value="KT600">Hướng Dẫn Kê Khai và Quyết Toán Thuế Thu Nhập Cá Nhân &amp; Thuế Thu Nhập Doanh Nghiệp Năm 2017 - 395K</option>
                                            <option value="KT800">Đào tạo Kỹ Thuật Quyết Toán Thuế. Công tác chuẩn bị cho Thanh Tra Thuế. Tối ưu thuế - 395K</option>
                                            <option value="KT210">Trọn Bộ Kế Toán Thuế Từ A-Z - 395K</option>
                                            <option value="KT130">Hướng Dẫn Lập Báo Cáo Tài Chính Hợp Lý Và Phân Tích Các Chỉ Số Hỗ Trợ Dự Thầu, Vay Vốn Ngân Hàng - 395K</option>
                                            <option value="KT110">Cách Xác Định Chi Phí Hợp Lý, Công Cụ Bảo Vệ Tại Các Kỳ Thanh Tra, Quyết Toán Thuế - 395K</option>
                                            <option value="KT220">Trọn bộ Kế toán cho người bắt đầu - 445K</option>
                                            <option value="KT400">Trọn bộ hướng dẫn lập Báo Cáo Tài Chính năm 2017 - 495K</option>
                                            <option value="KT120">Trọn Bộ Quản Trị Tài Chính Kế Toán Dành Cho Các Nhà Quản Lý - 695K</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="IMAGE919" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/mau-ong-gia-noel-dep-an-tuong-34-1513854103.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="IMAGE920" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/mau-ong-gia-noel-dep-an-tuong-34-1513854103.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="GROUP979" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX964" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP979" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE965" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">840.000đ</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP961" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP979">
                                <div class="widget-content">
                                    <div id="HEADLINE962" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP961" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">645.000đ</h3> </div>
                                    <div id="HEADLINE963" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP961" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Chỉ còn</h6> </div>
                                </div>
                            </div>
                            <div id="BOX645" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP979" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE647" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Combo 2</h3> </div><a id="BUTTON646" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP697" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a>
                                        <a id="BUTTON781" href="#FORM761" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">Đăng kí ngay</span> </a></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP651" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP979">
                                <div class="widget-content">
                                    <div id="HEADLINE644" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP651" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Kế toán dành cho người mới bắt đầu&nbsp;<br>và Quyết toán thuế từ A đến Z</h3> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP980" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX959" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP980" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE960" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">890.000đ</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP956" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP980">
                                <div class="widget-content">
                                    <div id="HEADLINE957" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP956" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">645.000đ</h3> </div>
                                    <div id="HEADLINE958" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP956" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Chỉ còn</h6> </div>
                                </div>
                            </div>
                            <div id="BOX655" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP980" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE657" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Combo 3</h3> </div>
                                    <div id="HEADLINE654" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Kế toán thuế từ A đến Z<br>&nbsp;và Trọn bộ lập BCTC</h3> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP799" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP980">
                                <div class="widget-content"><a id="BUTTON656" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-group="GROUP799" lp-display="table" lp-action-link="POPUP708" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a>
                                    <a id="BUTTON788" href="#FORM761" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-group="GROUP799" lp-display="table">
                                        <span class="widget-content">Đăng kí ngay</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP981" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX954" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP981" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE955" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">940.000đ</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP951" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP981">
                                <div class="widget-content">
                                    <div id="HEADLINE952" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP951" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">645.000đ</h3> </div>
                                    <div id="HEADLINE953" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP951" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Chỉ còn</h6> </div>
                                </div>
                            </div>
                            <div id="BOX665" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP981" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE667" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Combo 4</h3> </div>
                                    <div id="HEADLINE668" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Kỹ thuật Quyết toán thuế, công tác chuẩn bị cho Thanh Tra Thuế, Tối ưu thuế và Trọn bộ lập BCTC</h3> </div><a id="BUTTON666" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP729" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a>
                                    <a id="BUTTON790" href="#FORM761" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table">
                                        <span class="widget-content">Đăng kí ngay</span> </a>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP982" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX969" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP982" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE970" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">940.000đ</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP966" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP982">
                                <div class="widget-content">
                                    <div id="HEADLINE967" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP966" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">645.000đ</h3> </div>
                                    <div id="HEADLINE968" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP966" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Chỉ còn</h6> </div>
                                </div>
                            </div>
                            <div id="BOX660" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP982" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE662" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Combo 5</h3> </div>
                                    <div id="HEADLINE663" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Hướng dẫn kê khai và quyết toán thuế thu nhập cá nhân và Trọn bộ lập BCTC</h3> </div><a id="BUTTON661" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP719" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a>
                                    <a id="BUTTON789" href="#FORM761" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">Đăng kí ngay</span> </a></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP983" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX974" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP983" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE975" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">790.000đ</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP971" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP983">
                                <div class="widget-content">
                                    <div id="HEADLINE972" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP971" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">545.000đ</h3> </div>
                                    <div id="HEADLINE973" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP971" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Chỉ còn</h6> </div>
                                </div>
                            </div>
                            <div id="BOX670" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP983" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE672" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Combo 6</h3> </div>
                                    <div id="HEADLINE673" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Quyết toán thuế từ A đến Z và Đào tạo kỹ thuật Quyết toán thuế, công tác chuẩn bị cho Thanh Tra Thuế, Tối ưu thuế&nbsp;</h3> </div>
                                    <a id="BUTTON793" href="#FORM761" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">Đăng kí ngay</span> </a><a id="BUTTON671" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP740" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP740" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="LINEVERTICAL743" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="HEADLINE748" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Quyết toán thuế từ A đến Z</h3> </div>
                    <div id="LISTOP746" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>GIới Thiệu</li>
                            <li>Thuế GTGT</li>
                            <li>Quyết Toán Thuế Thu Nhập Doanh Nghiệp</li>
                            <li>Quyết Toán Thuế Thu Nhập Cá Nhân</li>
                        </ol>
                    </div>
                    <div id="HEADLINE749" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Đào tạo Kỹ Thuật Quyết Toán Thuế. Công tác chuẩn bị cho Thanh Tra Thuế. Tối ưu thuế</h3> </div>
                    <div id="BOX741" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LISTOP747" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>Tổng quan về kế toán thuế</li>
                            <li>Đăng ký thuế ban đầu cho Doanh nghiệp mới thành lập</li>
                            <li>Thuế giá trị gia tang</li>
                            <li>Kê khai thuế Thu nhập cá nhân</li>
                            <li>Quyết toán thuế TNCN</li>
                        </ol>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP729" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX730" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LISTOP735" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>GIới Thiệu</li>
                            <li>Thuế GTGT</li>
                            <li>Quyết Toán Thuế Thu Nhập Doanh Nghiệp</li>
                            <li>Quyết Toán Thuế Thu Nhập Cá Nhân</li>
                        </ol>
                    </div>
                    <div id="HEADLINE737" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Trọn bộ hướng dẫn lập BCTC</h3> </div>
                    <div id="LISTOP736" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>8 Nhiệm vụ kế toán cần thực hiên tại thời điểm cuối kì</li>
                            <li>HƯỚNG DẪN LẬP VÀ 09 BƯỚC KIỂM TRA BẢNG CÂN ĐỐI PHÁT SINH</li>
                            <li>HƯỚNG DẪN LẬP BẢNG CÂN ĐỐI KẾ TOÁN</li>
                            <li>HƯỚNG DẪN LẬP BÁO CÁO KẾT QUẢ KINH DOANH</li>
                            <li>HƯỚNG DẪN LẬP BÁO CÁO LƯU CHUYỂN TIỀN TỆ</li>
                            <li>HƯỚNG DẪN LẬP THUYẾT MINH BÁO CÁO TÀI CHÍNH</li>
                        </ol>
                    </div>
                    <div id="HEADLINE738" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Đào tạo Kỹ Thuật Quyết Toán Thuế. Công tác chuẩn bị cho Thanh Tra Thuế. Tối ưu thuế</h3> </div>
                    <div id="LINEVERTICAL732" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP719" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX720" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LISTOP725" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>Tờ khai Thuế Thu nhập cá Nhân</li>
                            <li>Quyết toán thuế TNCN</li>
                            <li>Thuế Thu nhập Doanh nghiệp</li>
                        </ol>
                    </div>
                    <div id="LISTOP726" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>8 Nhiệm vụ kế toán cần thực hiên tại thời điểm cuối kì</li>
                            <li>HƯỚNG DẪN LẬP VÀ 09 BƯỚC KIỂM TRA BẢNG CÂN ĐỐI PHÁT SINH</li>
                            <li>HƯỚNG DẪN LẬP BẢNG CÂN ĐỐI KẾ TOÁN</li>
                            <li>HƯỚNG DẪN LẬP BÁO CÁO KẾT QUẢ KINH DOANH</li>
                            <li>HƯỚNG DẪN LẬP BÁO CÁO LƯU CHUYỂN TIỀN TỆ</li>
                            <li>HƯỚNG DẪN LẬP THUYẾT MINH BÁO CÁO TÀI CHÍNH</li>
                        </ol>
                    </div>
                    <div id="HEADLINE727" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Trọn bộ hướng dẫn lập BCTC</h3> </div>
                    <div id="LINEVERTICAL722" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="HEADLINE728" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Hướng Dẫn Kê Khai và Quyết Toán Thuế Thu Nhập Cá Nhân &amp; Thuế Thu Nhập Doanh Nghiệp Năm 2017</h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP708" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX709" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LISTOP714" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>This is list</li>
                            <li>This is list</li>
                        </ol>
                    </div>
                    <div id="LISTOP715" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>Tổng quan về kế toán thuế</li>
                            <li>Đăng ký thuế ban đầu cho Doanh nghiệp mới thành lập</li>
                            <li>Thuế giá trị gia tang</li>
                            <li>Kê khai thuế Thu nhập cá nhân</li>
                            <li>Quyết toán thuế TNCNThuế Thu nhập Doanh nghiệp</li>
                        </ol>
                    </div>
                    <div id="HEADLINE718" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Quyết toán thuế&nbsp;<br>từ A đến Z</h2> </div>
                    <div id="LINEVERTICAL711" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="LISTOP716" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>8 Nhiệm vụ kế toán cần thực hiên tại thời điểm cuối kì</li>
                            <li>HƯỚNG DẪN LẬP VÀ 09 BƯỚC KIỂM TRA BẢNG CÂN ĐỐI PHÁT SINH</li>
                            <li>HƯỚNG DẪN LẬP BẢNG CÂN ĐỐI KẾ TOÁN</li>
                            <li>HƯỚNG DẪN LẬP BÁO CÁO KẾT QUẢ KINH DOANH</li>
                            <li>HƯỚNG DẪN LẬP BÁO CÁO LƯU CHUYỂN TIỀN TỆ</li>
                            <li>HƯỚNG DẪN LẬP THUYẾT MINH BÁO CÁO TÀI CHÍNH</li>
                        </ol>
                    </div>
                    <div id="HEADLINE717" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Trọn bộ hướng dẫn lập BCTC</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP697" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX698" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE705" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Tiêu đề vừa</h3> </div>
                    <div id="LISTOP703" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>PHƯƠNG TRÌNH KẾ TOÁN CƠ BẢN</li>
                            <li>KẾ TOÁN TIỀN VÀ THANH TOÁN TRONG DOANH NGHIỆP</li>
                            <li>&nbsp;KẾ TOÁN MUA HÀNG HÓA, NGUYÊN VẬT LiỆU, DỊCH VỤ&nbsp;</li>
                            <li>KẾ TOÁN TÀI SẢN CỐ ĐỊNH</li>
                            <li>KẾ TOÁN CÔNG CỤ DỤNG CỤ VÀ CHI PHÍ TRẢ TRƯỚC</li>
                            <li>KẾ TOÁN TIỀN LƯƠNG VÀ CÁC KHOẢN TRÍCH THEO LƯƠNG</li>
                            <li>&nbsp;KẾ TOÁN GIÁ THÀNH</li>
                            <li>&nbsp;KẾ TOÁN BÁN HÀNG VÀ TIÊU THỤ THÀNH PHẨM</li>
                            <li>XÁC ĐỊNH KẾT QUẢ KINH DOANH&nbsp;</li>
                        </ol>
                    </div>
                    <div id="HEADLINE707" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Kế toán dành cho người mới bắt đầu</h3> </div>
                    <div id="HEADLINE706" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Quyết toán thuế từ A đến Z</h3> </div>
                    <div id="LISTOP704" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>Tổng quan về kế toán thuế</li>
                            <li>Đăng ký thuế ban đầu cho Doanh nghiệp mới thành lập</li>
                            <li>Thuế giá trị gia tăng</li>
                            <li>Kê khai thuế Thu nhập cá nhân</li>
                            <li>Quyết toán thuế TNCN</li>
                            <li>Thuế Thu nhập Doanh nghiệp</li>
                        </ol>
                    </div>
                    <div id="LINEVERTICAL700" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP685" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX686" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE694" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Kế toán dành cho người mới bắt đầu</h3> </div>
                    <div id="LISTOP693" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>PHƯƠNG TRÌNH KẾ TOÁN CƠ BẢN</li>
                            <li>KẾ TOÁN TIỀN VÀ THANH TOÁN TRONG DOANH NGHIỆP&nbsp;</li>
                            <li>KẾ TOÁN MUA HÀNG HÓA, NGUYÊN VẬT LiỆU, DỊCH VỤ&nbsp;</li>
                            <li>KẾ TOÁN TÀI SẢN CỐ ĐỊNH</li>
                            <li>KẾ TOÁN CÔNG CỤ DỤNG CỤ VÀ CHI PHÍ TRẢ TRƯỚC</li>
                            <li>KẾ TOÁN TIỀN LƯƠNG VÀ CÁC KHOẢN TRÍCH THEO LƯƠNG&nbsp;</li>
                            <li>KẾ TOÁN GIÁ THÀNH&nbsp;</li>
                            <li>KẾ TOÁN BÁN HÀNG VÀ TIÊU THỤ THÀNH PHẨM</li>
                            <li>XÁC ĐỊNH KẾT QUẢ KINH DOANH&nbsp;</li>
                        </ol>
                    </div>
                    <div id="LINEVERTICAL688" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="LISTOP695" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>8 Nhiệm vụ kế toán cần thực hiên tại thời điểm cuối kì
                                <br>
                            </li>
                            <li>HƯỚNG DẪN LẬP VÀ 09 BƯỚC KIỂM TRA BẢNG CÂN ĐỐI PHÁT SINH</li>
                            <li>HƯỚNG DẪN LẬP BẢNG CÂN ĐỐI KẾ TOÁN</li>
                            <li>HƯỚNG DẪN LẬP BÁO CÁO KẾT QUẢ KINH DOANH</li>
                            <li>HƯỚNG DẪN LẬP BÁO CÁO LƯU CHUYỂN TIỀN TỆ</li>
                            <li>HƯỚNG DẪN LẬP THUYẾT MINH BÁO CÁO TÀI CHÍNH</li>
                        </ol>
                    </div>
                    <div id="HEADLINE696" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Trọn bộ hướng dẫn lập BCTC</h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION488" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE493" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">&nbsp;Đội ngũ giảng viên giàu kinh nghiệm</h2> </div>
                    <div id="GROUP526" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX466" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP526" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE469" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Giảng viên</h3> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP482" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP526">
                                <div class="widget-content">
                                    <div id="LISTOP468" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-group="GROUP482" lp-display="block">
                                        <ol class="widget-content">
                                            <li color="" style="color: rgb(0, 0, 0);">Chứng chỉ kế toán quốc tế CAT/ACCA do Hiệp hội kế toán công chứng Anh Quốc Cấp bằng.</li>
                                            <li color="" style="color: rgb(0, 0, 0);">&nbsp;Kế toán trưởng công ty TNHH Emotive 100% vốn của Mỹ</li>
                                            <li color="" style="color: rgb(0, 0, 0);">&nbsp;Tư vấn kế toán, thuế cho nhiều doanh nghiệp trong nước và doanh nghiệp có vốn đầu tư nước ngoài FDI</li>
                                            <li color="" style="color: rgb(0, 0, 0);">&nbsp;05 năm kế toán tổng hợp và thuế Chuỗi nhà hàng ăn nhanh (BurgerKing, Pizza Domino, Gà Popeys, Dunkin Donut) thuôc tập đoàn Liên Thái Bình Dương (IPP group)&nbsp;</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP523" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP526">
                                <div class="widget-content">
                                    <div id="HEADLINE467" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP523" lp-display="block">
                                        <h2 class="widget-content" lp-node="h2">PHẠM THỊ NHUNG</h2> </div>
                                </div>
                            </div>
                            <div id="GROUP464" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP526">
                                <div class="widget-content">
                                    <div id="BOX465" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP464" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP579" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX453" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP579" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE461" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Tiến sĩ</h3> </div>
                                    <div id="HEADLINE454" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h2 class="widget-content" lp-node="h2">&nbsp;HOÀNG QUANG TRUNG</h2> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP486" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP579">
                                <div class="widget-content">
                                    <div id="LISTOP455" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-group="GROUP486" lp-display="block">
                                        <ol class="widget-content">
                                            <li color="" style="color: rgb(0, 0, 0);">Giảng viên Đại Học</li>
                                            <li color="" style="color: rgb(0, 0, 0);">Giám đốc Công ty DV kế toán Việt Nam - VINAFAS</li>
                                            <li color="" style="color: rgb(0, 0, 0);">Chuyên gia tư vấn và đào tạo quản lý tài chính các dự án của Bộ KH &amp;ĐT</li>
                                            <li color="" style="color: rgb(0, 0, 0);">Chuyên gia hàng đầu trong lĩnh vực tư vấn thuế với hơn 15 năm kinh nghiệm chia sẻ và giảng dạy</li>
                                            <li color="" style="color: rgb(0, 0, 0);">Thành viên hiệp hội kiểm toán, kế toán các nước ASEAN đã được bình chọn là 1 trong 50 chuyên gia tư vấn kế toán, thuế thành công nhất hiện nay</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div id="BOX495" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP579" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP525" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP522" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP525">
                                <div class="widget-content">
                                    <div id="HEADLINE463" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP522" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Kt trưởng</h3> </div>
                                    <div id="HEADLINE458" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP522" lp-display="block">
                                        <h2 class="widget-content" lp-node="h2">&nbsp;ĐÀO THỊ THƠ</h2> </div>
                                </div>
                            </div>
                            <div id="BOX457" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP525" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="LISTOP459" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-group="GROUP525" lp-display="block">
                                <ol class="widget-content">
                                    <li color="" style="color: rgb(0, 0, 0);">&nbsp;6 năm kinh nghiệm trong lĩnh vực kế toán, đã đi qua những công việc của Kế toán viên, kế toán tổng hợp và đang là Kế toán trưởng tại công ty TNHH Geroc – công ty 100% vốn của Pháp tại Việt Nam.</li>
                                    <li color="" style="color: rgb(0, 0, 0);">&nbsp;Cung cấp dịch vụ tư vấn đầu tư cho các Tập đoàn nước ngoài vào Việt Nam</li>
                                </ol>
                            </div>
                            <div id="BOX496" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP525" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE489" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Đảm bảo chất lượng và chuyên môn qua từng bài học&nbsp;bởi</h2> </div>
                    <div id="IMAGE835" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/nhung-bai-hat-giang-sinh-bang-tieng-viet-hay-nhat-moi-thoi-dai-5-1513848663.gif"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX491" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE492" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">&nbsp;Lĩnh vực kế toán</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="SHAPE490" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(213,0,0,1)">
                            <path d="M9,5A3.5,3.5 0 0,1 12.5,8.5A3.5,3.5 0 0,1 9,12A3.5,3.5 0 0,1 5.5,8.5A3.5,3.5 0 0,1 9,5M9,13.75C12.87,13.75 16,15.32 16,17.25V19H2V17.25C2,15.32 5.13,13.75 9,13.75M17,12.66L14.25,9.66L15.41,8.5L17,10.09L20.59,6.5L21.75,7.91L17,12.66Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION535" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP590" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP542" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP590">
                                <div class="widget-content">
                                    <div id="HEADLINE543" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP542" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Thạc sĩ</h3> </div>
                                    <div id="HEADLINE544" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP542" lp-display="block">
                                        <h2 class="widget-content" lp-node="h2">NGUYỄN DANH TÚ</h2> </div>
                                </div>
                            </div>
                            <div id="BOX547" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP590" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="LISTOP546" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-group="GROUP590" lp-display="block">
                                <ol class="widget-content">
                                    <li color="" style="color: rgb(0, 0, 0);">10 năm kinh nghiệm giảng dạy tại trường Đại học Bách Khoa Hà Nội.&nbsp;</li>
                                    <li color="" style="color: rgb(0, 0, 0);">10 năm kinh nghiệm làm việc ở các mảng CNTT (các hệ thống MIS, DataMining...), tài chính (quỹ, chứng khoán, kế hoạch tài chính...), đào tạo trực tuyến BKIndex, Giảng viên Đại học Bách Khoa Hà Nội</li>
                                    <li color="" style="color: rgb(0, 0, 0);">&nbsp;Phó Tổng Giám Đốc sản phẩm Tiếng Anh, tổ hợp giáo dục vào đào tạo TOPICA</li>
                                </ol>
                            </div>
                            <div id="BOX545" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP590" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP598" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP601" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP598">
                                <div class="widget-content">
                                    <div id="LISTOP602" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-group="GROUP601" lp-display="block">
                                        <ol class="widget-content">
                                            <li color="" style="color: rgb(0, 0, 0);">Giám đốc học viện Yoga Việt Nam, Ủy viên thường trực hiệp hội Yoga trị liệu Châu Á</li>
                                            <li color="" style="color: rgb(0, 0, 0);">&nbsp;21 năm nghiên cứu và thực hành về Yoga.&nbsp;</li>
                                            <li color="" style="color: rgb(0, 0, 0);">15 năm đào tạo giáo viên và chia sẻ Yoga trong nước và ngoài nước.</li>
                                            <li color="" style="color: rgb(0, 0, 0);">Năm 2013 nhận bằng trị liệu cao cấp do Đại học trị liệu Yoga SVYSA (Ấn Độ) tổ chức.&nbsp;</li>
                                            <li color="" style="color: rgb(0, 0, 0);">&nbsp;Năm 2014 đạt chứng nhận xuất săc về thiền định do Học viện thiền đinh Ấn Độ tổ chức.&nbsp;</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div id="BOX603" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP598" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE604" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Thầy</h3> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP606" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP598">
                                <div class="widget-content">
                                    <div id="BOX607" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP606" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="HEADLINE600" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP598" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">ĐẶNG HÙNG</h2> </div>
                        </div>
                    </div>
                    <div id="GROUP609" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX538" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP609" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE539" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">&nbsp;Lĩnh vực Excel</h3> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP557" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP609">
                                <div class="widget-content">
                                    <div id="SHAPE537" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP557" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(213,0,0,1)">
                                            <path d="M9,5A3.5,3.5 0 0,1 12.5,8.5A3.5,3.5 0 0,1 9,12A3.5,3.5 0 0,1 5.5,8.5A3.5,3.5 0 0,1 9,5M9,13.75C12.87,13.75 16,15.32 16,17.25V19H2V17.25C2,15.32 5.13,13.75 9,13.75M17,12.66L14.25,9.66L15.41,8.5L17,10.09L20.59,6.5L21.75,7.91L17,12.66Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP611" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE595" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP611" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(213,0,0,1)">
                                    <path d="M9,5A3.5,3.5 0 0,1 12.5,8.5A3.5,3.5 0 0,1 9,12A3.5,3.5 0 0,1 5.5,8.5A3.5,3.5 0 0,1 9,5M9,13.75C12.87,13.75 16,15.32 16,17.25V19H2V17.25C2,15.32 5.13,13.75 9,13.75M17,12.66L14.25,9.66L15.41,8.5L17,10.09L20.59,6.5L21.75,7.91L17,12.66Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="BOX594" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP611" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE596" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">&nbsp;Lĩnh vực Yoga</h3> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP679" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX680" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP679" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP682" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP679">
                                <div class="widget-content">
                                    <div id="SHAPE683" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP682" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(213,0,0,1)">
                                            <path d="M9,5A3.5,3.5 0 0,1 12.5,8.5A3.5,3.5 0 0,1 9,12A3.5,3.5 0 0,1 5.5,8.5A3.5,3.5 0 0,1 9,5M9,13.75C12.87,13.75 16,15.32 16,17.25V19H2V17.25C2,15.32 5.13,13.75 9,13.75M17,12.66L14.25,9.66L15.41,8.5L17,10.09L20.59,6.5L21.75,7.91L17,12.66Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE681" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">&nbsp;Lĩnh vực nhân sự</h3> </div>
                    <div id="GROUP832" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP551" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP832">
                                <div class="widget-content">
                                    <div id="LISTOP552" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-group="GROUP551" lp-display="block">
                                        <ol class="widget-content">
                                            <li color="" style="color: rgb(0, 0, 0);">12 năm kinh nghiệm tư vấn luật doanh nghiệp, luật sở hữu trí tuệ, luật lao động, BHXH</li>
                                            <li color="" style="color: rgb(0, 0, 0);">8 năm kinh nghiệm làm Trưởng phòng HCNS</li>
                                            <li color="" style="color: rgb(0, 0, 0);">8 năm kinh nghiệm tư vấn xây dựng hệ thống lương thưởng trong DN. 10 năm kinh nghiệm tư vấn thủ tục và cung cấp dịch vụ BHXH trong DN.</li>
                                            <li color="" style="color: rgb(0, 0, 0);">8 năm kinh nghiệm đào tạo nghề nhân sự và pháp luật lao động, luật BHXH cho DN.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP553" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP832">
                                <div class="widget-content">
                                    <div id="HEADLINE554" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP553" lp-display="block">
                                        <h2 class="widget-content" lp-node="h2">NGUYỄN THỊ TRANG</h2> </div>
                                </div>
                            </div>
                            <div id="BOX549" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP832" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE550" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Chuyên gia tư vấn</h3> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP811" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP832">
                                <div class="widget-content">
                                    <div id="GROUP555" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP811">
                                        <div class="widget-content">
                                            <div id="BOX556" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP555" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
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
            <div id="SECTION750" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE760" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Cơ hội lớn nhất trong năm dành cho bạn!&nbsp;</h2> </div>
                    <div id="FORM761" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:8407&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:8408&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:8409&quot;},{&quot;name&quot;:&quot;select1&quot;,&quot;value&quot;:&quot;select1&quot;,&quot;$$hashKey&quot;:&quot;object:8446&quot;},{&quot;name&quot;:&quot;lpinput1&quot;,&quot;value&quot;:&quot;lpinput1&quot;,&quot;$$hashKey&quot;:&quot;object:8447&quot;},{&quot;name&quot;:&quot;lpinput1&quot;,&quot;value&quot;:&quot;lpinput1&quot;,&quot;$$hashKey&quot;:&quot;object:8853&quot;},{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:8934&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:8935&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:8936&quot;},{&quot;name&quot;:&quot;message&quot;,&quot;value&quot;:&quot;message&quot;,&quot;$$hashKey&quot;:&quot;object:8937&quot;},{&quot;name&quot;:&quot;select2&quot;,&quot;value&quot;:&quot;select2&quot;,&quot;$$hashKey&quot;:&quot;object:10163&quot;}]" lp-display="block">
                        <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                            <div id="ITEM_FORM762" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                            </div>
                            <div id="ITEM_FORM763" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                            </div>
                            <div id="ITEM_FORM764" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                            </div>
                            <div id="ITEM_FORM805" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <select class="widget-content" id="combo-select-2" name="combo-select" placeholder="Combo bạn muốn lựa chọn" lp-label="Menu thả xuống 1" lp-name-id="select1" required="required">
                                    <option value="0">Combo bạn muốn lựa chọn</option>
                                    
                                    
                                     <option value="KT220-KT400"> "Kế toán dành cho người mới bắt đầu" và "Trọn bộ lập BCTC" </option>
                                    <option value="KT220-KT210"> "Kế toán dành cho người mới bắt đầu" và "Quyết toán thuế từ A đến Z" </option>
                                    <option value="KT210-KT400"> "Kế toán thuế từ A đến Z" và "Trọn bộ hướng dẫn lập BCTC 2017" </option>
                                    <option value="KT800-KT400"> "Kỹ thuật Quyết toán thuế, công tác chuẩn bị cho Thanh Tra Thuế, Tối ưu thuế" và "Trọn bộ hướng dẫn lập BCTC 2017" </option>
                                    <option value="KT800-KT400"> "Kỹ thuật Quyết toán thuế, công tác chuẩn bị cho Thanh Tra Thuế, Tối ưu thuế" và "Trọn bộ hướng dẫn lập BCTC 2017" </option>
                                    <option value="KT210-KT800"> "Quyết toán thuế từ A đến Z" và "Đào tạo kỹ thuật Quyết toán thuế, công tác chuẩn bị cho Thanh Tra Thuế, Tối ưu thuế " </option>
                                    <option value="custom"> Combo tự chọn </option>
                                </select>
                            </div>
                            <input type="hidden" id="dia_chi" placeholder="Lĩnh vực kế toán bạn quan tâm" name="dia_chi" lp-label="Ô nhập tùy chọn 1" lp-name-id="lpinput1" required="required">
                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                            <input type="hidden" id="code-landingpage" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                            <button id="btn-765" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>

                        </form>
                    </div><a id="BUTTON765" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM761" lp-display="table"><span class="widget-content">ĐĂNG KÍ NGAY</span> </a>
                    <div id="GROUP766" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP767" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP766">
                                <div class="widget-content">
                                    <div id="BOX768" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP767" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE769" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <h2 class="widget-content" lp-node="h2">Ngày</h2> </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="BOX770" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP767" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE771" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <h2 class="widget-content" lp-node="h2">Giờ</h2> </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="BOX772" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP767" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE773" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <h2 class="widget-content" lp-node="h2">Phút</h2> </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="BOX774" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP767" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE775" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <h2 class="widget-content" lp-node="h2">Giây</h2> </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="COUNTDOWN776" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="<?php echo (strtotime('+1 day', strtotime(date('d-m-Y'))) - time()) / 60; ?>" lp-endtimetype="timedown" lp-group="GROUP766" lp-display="block">
                                <div class="widget-content">
                                    <div><span>24</span></div>
                                    <div><span>0</span></div>
                                    <div><span>4</span></div>
                                    <div><span>0</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE800" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Còn chần chừ gì nữa mà không nhanh tay nắm bắt cơ hội nâng cao nghiệp vụ, thăng tiến trong công việc và sự nghiệp?</h3> </div>
                    <div id="HEADLINE758" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">NHANH TAY LÊN !</h2> </div>
                    <div id="GROUP921" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX751" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP921" lp-display="block">
                                <div class="widget-content">
                                    <div id="LINE755" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                        <div class="widget-content">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                    <div id="HEADLINE754" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h1 class="widget-content" lp-node="h1">ƯU ĐÃI</h1> </div>
                                    <div id="PARAGRAPH803" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">Đối với khóa học lẻ hoặc combo bất kì</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP808" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP921">
                                <div class="widget-content">
                                    <div id="HEADLINE804" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP808" lp-display="block">
                                        <h1 class="widget-content" lp-node="h1">58% - 72%&nbsp;</h1> </div>
                                    <div id="PARAGRAPH757" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP808" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">Chương trình chỉ áp dụng với hóa học đăng ký trước ngày&nbsp;<br><?php echo date('d/m/Y'); ?></h5> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="LINE977" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE978" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Sau khi đăng ký mua khóa học bộ phận CSKH của Lakita sẽ liên hệ với bạn để xác nhận thông tin và nhân viên bưu điện sẽ giao khóa học tận nơi cho bạn.&nbsp;<br>Bạn chỉ phải trả tiền khi nhận được khóa học</h5> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION833" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP858" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP857" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP858">
                                <div class="widget-content">
                                    <div id="HEADLINE849" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP857" lp-display="block">
                                        <p class="widget-content" lp-node="p">Hotline: 1900 636 195 - 024 7306 2468</p>
                                    </div>
                                    <div id="SHAPE848" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP857" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                            <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP856" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP858">
                                <div class="widget-content">
                                    <div id="HEADLINE846" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP856" lp-display="block">
                                        <p class="widget-content" lp-node="p">Địa chỉ: Phòng 701 CT1 - Chung cư Skylight - Ngõ Hòa Bình 6 - 125D Minh Khai - Q. Hai Bà Trưng - Hà Nội
                                            <br>
                                        </p>
                                    </div>
                                    <div id="SHAPE847" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP856" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                            <path d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP855" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP858">
                                <div class="widget-content">
                                    <div id="SHAPE851" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP855" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                            <path d="M20,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V8L12,13L20,8V18M20,6L12,11L4,6V6H20V6Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="HEADLINE850" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP855" lp-display="block">
                                        <p class="widget-content" lp-node="p">Email: cskh@lakita.vn</p>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP854" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP858">
                                <div class="widget-content">
                                    <div id="HEADLINE853" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP854" lp-display="block">
                                        <p class="widget-content" lp-node="p">Website: lakita.vn</p>
                                    </div>
                                    <div id="SHAPE852" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP854" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                            <path d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="HEADLINE845" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP858" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">LIÊN HỆ</h4> </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <script type="text/javascript" async="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1513858851864"></script>
            <script>
            var loadCSSFiles = function () {
                var links = 'https://static.ladipage.net/source/animate.min.css?v=1513858851864';
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
                    <div class="fb-comments" data-href="https://lakita.vn/combo-qua-khung-dip-giang-sinh.html"
                         data-width="100%" data-numposts="10" data-order-by="reverse_time"></div>
                </div>
            </div>
        </div>


        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="https://static.ladipage.net/source/jquery.3-0-1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>public/my.js?ver=<?php echo _VER_CACHED_ ?>" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/combogiangsinh/multiple-select.js?ver=<?php echo _VER_CACHED_ ?>" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var left = $('#img-contact').css('margin-left');
                $('#img-contact').hover(function () {
                    $(this).css('margin-left', '0');
                }, function () {
                    $(this).css('margin-left', left);
                });
                $("#BUTTON15").click(function (e) {
                    e.preventDefault();
                    $("#btn-15").click();
                });
                $("#BUTTON765").click(function (e) {
                    e.preventDefault();
                    $("#btn-765").click();
                });
                 $("#BUTTON780").click(function () {
                    /*  $('[value="KT210-KT400"]').prop("selected", true);*/
                    $("#combo-select-2").val('KT220-KT400');
                    $("#code-landingpage").val('KT220-KT400');
                });
                 $("#BUTTON781").click(function () {
                    /*  $('[value="KT210-KT400"]').prop("selected", true);*/
                    $("#combo-select-2").val('KT220-KT210');
                    $("#code-landingpage").val('KT220-KT210');
                });
                $("#BUTTON788").click(function () {
                    /*  $('[value="KT210-KT400"]').prop("selected", true);*/
                    $("#combo-select-2").val('KT210-KT400');
                    $("#code-landingpage").val('KT210-KT400');
                });
                $("#BUTTON790").click(function () {
                    /*  $('[value="KT210-KT400"]').prop("selected", true);*/
                    $("#combo-select-2").val('KT800-KT400');
                    $("#code-landingpage").val('KT800-KT400');
                });
                $("#BUTTON789").click(function () {
                    /*  $('[value="KT210-KT400"]').prop("selected", true);*/
                    $("#combo-select-2").val('KT800-KT400');
                    $("#code-landingpage").val('KT800-KT400');
                });
                $("#BUTTON793").click(function () {
                    /*  $('[value="KT210-KT400"]').prop("selected", true);*/
                    $("#combo-select-2").val('KT210-KT800');
                    $("#code-landingpage").val('KT210-KT800');
                });
                $("#BUTTON910").click(function () {
                    /*  $('[value="KT210-KT400"]').prop("selected", true);*/
                    $("#combo-select-2").val('custom');
                    $("#dia_chi").val("Combo tự chọn: " + $("#course_code").val().toString());
                });

                $("#combo-select-2").change(function () {
                    $("#code-landingpage").val($(this).val());
                });
                $('.selectpicker').selectpicker({
                    style: 'btn-info',
                    size: 4
                });
            });

            $("select#course_code").multipleSelect({
                selectAll: false
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