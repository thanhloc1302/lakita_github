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
        <meta property="og:url" content="https://lakita.vn/tron-bo-quyet-toan-thue-tu-a-den-z-dangph.html" />
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
        <?php $this->load->view('landingpage/kt210dangph/css'); ?>
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
            <div id="SECTION247" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="IMAGE248" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/uploads/images/f04c3efc-50e6-4b47-9462-12d7627fcd1d.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH249" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">TRỌN BỘ HƯỚNG DẪN
                            <br>&nbsp;
                            <br>
                            <br>
                        </p>
                    </div>
                    <div id="HEADLINE250" class="widget-element widget-snap wow bounce animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">KHÓA HỌC ONLINE ĐỘC QUYỀN</h1> </div><a id="BUTTON257" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">Hotline :1900 636 195 - 04 7306 2468</span> </a><a id="BUTTON258" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION372" lp-action-type="page" lp-target="" href=""><span class="widget-content">TÌM HIỂU NGAY</span> </a>
                    <div id="BOX260" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH262" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">Bạn chỉ cần để lại thông tin bộ phận CSKH của LAKITA sẽ gọi điện để tư vấn, xác nhận thông tin hoàn toàn miễn phí</h5> </div>
                            <div id="HEADLINE261" class="widget-element widget-snap wow flash animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">ĐĂNG KÍ NGAY ĐỂ ĐƯỢC NHẬN ƯU ĐÃI 60 - 70%</h2> </div>
                            <div id="GROUP271" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="BOX272" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP271" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="BOX273" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP271" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="BOX274" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP271" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="BOX275" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP271" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="COUNTDOWN276" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="<?php echo (strtotime('+1 day', strtotime(date('d-m-Y'))) - time()) / 60; ?>" lp-endtimetype="timedown" lp-group="GROUP271" lp-display="block">
                                        <div class="widget-content">
                                            <div><span>0</span></div>
                                            <div><span>4</span></div>
                                            <div><span>15</span></div>
                                            <div><span>0</span></div>
                                        </div>
                                    </div>
                                    <div id="HEADLINE277" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP271" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">NGÀY</h6> </div>
                                    <div id="HEADLINE278" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP271" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">GIỜ</h6> </div>
                                    <div id="HEADLINE279" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP271" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">GIÂY</h6> </div>
                                    <div id="HEADLINE280" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP271" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">PHÚT</h6> </div>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LINE284" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="IMAGE285" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/logo1-1512808012297.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH304" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">QUYẾT TOÁN THUẾ A - Z
                            <br>DÀNH CHO NGƯỜI ĐI LÀM</p>
                    </div>
                    <div id="LINE305" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="LINE306" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="BOX264" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="FORM308" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google-sheet" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:17746&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:17747&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:17748&quot;},{&quot;name&quot;:&quot;message&quot;,&quot;value&quot;:&quot;message&quot;,&quot;$$hashKey&quot;:&quot;object:17749&quot;},{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:17921&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:17922&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:17923&quot;},{&quot;name&quot;:&quot;message&quot;,&quot;value&quot;:&quot;message&quot;,&quot;$$hashKey&quot;:&quot;object:17924&quot;}]" lp-display="block">
                                <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                    <div id="ITEM_FORM309" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" lp-name-id="name" required="required">
                                    </div>
                                    <div id="ITEM_FORM310" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" lp-name-id="email" required="required">
                                    </div>
                                    <div id="ITEM_FORM311" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại" lp-name-id="phone">
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <button id="btn-313" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                                </form>
                            </div><a id="BUTTON313" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM308" lp-display="table"><span class="widget-content"></span> </a><a id="BUTTON322" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP514" lp-action-type="popup" lp-target="" href=""><span class="widget-content">HOÀN TẤT ĐĂNG KÍ</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP514" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-delay-show-popup-page="1" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX515" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="LINE516" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="HEADLINE517" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">Đăng ký thành công!</h1> </div>
                            <div id="PARAGRAPH518" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Cảm ơn bạn đã tin tưởng và sử dụng dịch vụ của &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; chúng tôi.
                                    <br>
                                    <br>
                                </p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="IMAGE519" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/57b167c9ca57d39c18a1c57c/thankyou.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION350" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container"><a id="BUTTON354" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION372" lp-action-type="page" lp-target="" href=""><span class="widget-content"> TÌM HIỂU THÊM</span> </a>
                    <div id="LISTOP359" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li color="" style="color: rgb(248, 237, 237);">&nbsp; Chuyên viên kế toán nhưng chưa thực sự tự tin về nghiệp vụ của mình, kế toán &nbsp;lành nghề lâu năm mong muốn nâng cao bổ sung và hoàn thiện chuyên môn.</li>
                            <li color="" style="color: rgb(248, 237, 237);">&nbsp; Sinh viên và kế toán mới ra trường muốn trang bị kiến thức và kĩ năng thực tế liên quan tới thuế ở Doanh nghiệp.</li>
                            <li color="" style="color: rgb(248, 237, 237);">&nbsp; Chuyên viên nhân sự, làm lương có nhiệm vụ kê khai và quyết toán thuế TNCN, TNDN, GTGT.</li>
                            <li color="" style="color: rgb(248, 237, 237);">&nbsp; Kế toán nội bộ muốn chuyển sang làm kế toán thuế .</li>
                            <li color="" style="color: rgb(248, 237, 237);">&nbsp; Chủ doanh nghiệp, cá nhân, Start up chuẩn bị khởi nghiệp muốn trang bị toàn bộ các &nbsp;kiến thức về luật, thuế để phòng ngừa các rủi ro ,xử phạt vì vi phạm Thuế.</li>
                        </ol>
                    </div>
                    <div id="HEADLINE360" class="widget-element widget-snap wow pulse animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">KHÓA HỌC NÀY DÀNH CHO</h2> </div>
                    <div id="YOUTUBE361" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="1" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/E9hoYJXdLE0?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LINE450" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION323" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE325" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">LUÔN MANG TỚI CHO NGƯỜI HỌC NHỮNG LỢI ÍCH TUYỆT VỚI NHẤT</h2> </div>
                    <div id="BOX362" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE363" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Giải quyết từng vấn đề</h3> </div>
                            <div id="PARAGRAPH364" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Một cách logic và dễ hiểu nhất để tất cả nhưng ai bắt đầu làm kế toán thuế có thể hình dung được công việc của kế toán thuế là gì? Vai trò, chức năng trong hệ thống kế toán Doanh nghiệp</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX365" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE366" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Cập nhật thông tin liên tục và chính xác nhất</h3> </div>
                    <div id="BOX368" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH369" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Phân tích lý thuyết bằng các tình huống ví dụ thực tế dễ hiểu, dễ nhớ, xen lẫn thực hành, không gây nhàm chán</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH367" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">&nbsp;Học viên sẽ &nbsp;luôn biết được những thông tư nghị định mới nhất, những thay đổi trong ngành thuế. Luôn update liên tục bởi hệ thống tự động.</p>
                    </div>
                    <div id="HEADLINE370" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Cầm tay chỉ việc</h3> </div>
                    <div id="LINE371" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION31" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP72" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH73" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP72" lp-display="block">
                                <p class="widget-content" lp-node="p">Tài khoản học tập trọn đời
                                    <br color="" style="color: rgb(248, 242, 242);">Không giới hạn thời gian học</p>
                            </div>
                            <div id="SHAPE74" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP72" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#008ed6">
                                    <path d="M11,7V12.11L15.71,14.9L16.5,13.62L12.5,11.25V7M12.5,2C8.97,2 5.91,3.92 4.27,6.77L2,4.5V11H8.5L5.75,8.25C6.96,5.73 9.5,4 12.5,4A7.5,7.5 0 0,1 20,11.5A7.5,7.5 0 0,1 12.5,19C9.23,19 6.47,16.91 5.44,14H3.34C4.44,18.03 8.11,21 12.5,21C17.74,21 22,16.75 22,11.5A9.5,9.5 0 0,0 12.5,2Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE75" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP72" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">SỬ DỤNG TRỌN ĐỜI</h4> </div>
                        </div>
                    </div>
                    <div id="GROUP76" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH77" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP76" lp-display="block">
                                <p class="widget-content" lp-node="p">Mọi thắc mắc sẽ được giảng viên, đôi ngũ trợ giảng giải đáp nhanh chóng qua hệ thống Forum tiện dụng</p>
                            </div>
                            <div id="SHAPE78" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP76" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#008ed6">
                                    <path d="M12,1C7,1 3,5 3,10V17A3,3 0 0,0 6,20H9V12H5V10A7,7 0 0,1 12,3A7,7 0 0,1 19,10V12H15V20H19V21H12V23H18A3,3 0 0,0 21,20V10C21,5 16.97,1 12,1Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE79" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP76" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">GIẢI ĐÁP NHANH CHÓNG</h4> </div>
                        </div>
                    </div>
                    <div id="HEADLINE373" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">VÀ CHÚNG TÔI Ở ĐÂY ĐỂ ĐỒNG HÀNH CÙNG BẠN</h2> </div>
                    <div id="GROUP67" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH36" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP67" lp-display="block">
                                <p class="widget-content" lp-node="p">Mô hình học online tiên tiến, học mọi lúc mọi nơi, trên mọi thiết bị được kết nối Internet</p>
                            </div>
                            <div id="HEADLINE38" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP67" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">HỌC ONLINE</h4> </div>
                            <div id="SHAPE37" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP67" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#008ed6">
                                    <path d="M21,3H3C1.89,3 1,3.89 1,5V8H3V5H21V19H14V21H21A2,2 0 0,0 23,19V5C23,3.89 22.1,3 21,3M1,10V12A9,9 0 0,1 10,21H12C12,14.92 7.07,10 1,10M19,7H5V8.63C8.96,9.91 12.09,13.04 13.37,17H19M1,14V16A5,5 0 0,1 6,21H8A7,7 0 0,0 1,14M1,18V21H4A3,3 0 0,0 1,18Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP68" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH69" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP68" lp-display="block">
                                <p class="widget-content" lp-node="p">Hoàn lại 100% học phi nếu bạn không hài lòng về khóa học</p>
                            </div>
                            <div id="SHAPE70" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP68" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#008ed6">
                                    <path d="M5,16L3,5L8.5,12L12,5L15.5,12L21,5L19,16H5M19,19A1,1 0 0,1 18,20H6A1,1 0 0,1 5,19V18H19V19Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE71" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP68" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">CAM KẾT CHẤT LƯỢNG</h4> </div>
                        </div>
                    </div>
                    <div id="LINE374" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION372" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX377" class="widget-element widget-snap ladi-drop wow bounceInLeft animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE385" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">CHƯƠNG 1:</h2> </div>
                            <div id="HEADLINE386" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">Tổng quan về kế toán thuế.</h2> </div><a id="BUTTON391" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP417" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX378" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE379" class="widget-element widget-snap wow rubberBand animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">NỘI DUNG KHÓA HỌC</h2> </div>
                    <div id="BOX381" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE380" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">6 Chuyên để - 56 Bài giảng - 10h Học online</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX392" class="widget-element widget-snap ladi-drop wow bounceInRight animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"><a id="BUTTON395" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP461" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a>
                            <div id="HEADLINE394" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">Đăng kí thuế ban đầu cho DN mới.</h2> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE393" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">CHƯƠNG 2:</h2> </div>
                    <div id="BOX396" class="widget-element widget-snap ladi-drop wow bounceInLeft animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE397" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">CHƯƠNG 3:</h2> </div>
                            <div id="HEADLINE398" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">Thuế giá trị gia tăng.</h2> </div><a id="BUTTON399" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP463" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX403" class="widget-element widget-snap ladi-drop wow bounceInRight animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE404" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">CHƯƠNG 4:</h2> </div>
                            <div id="HEADLINE405" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">Kê khai thuế Thu nhập cá nhân.</h2> </div><a id="BUTTON406" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP465" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX407" class="widget-element widget-snap ladi-drop wow bounceInLeft animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE408" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">CHƯƠNG 5:</h2> </div>
                            <div id="HEADLINE409" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">Quyết toán thuế TNCN.</h2> </div><a id="BUTTON410" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP467" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX411" class="widget-element widget-snap ladi-drop wow bounceInRight animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE412" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">CHƯƠNG 6:</h2> </div>
                            <div id="HEADLINE413" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">Thuế thu nhập Doanh nghiệp.</h2> </div><a id="BUTTON414" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP469" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div><a id="BUTTON415" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION481" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÍ NGAY</span> </a></div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION416" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="IMAGE423" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/13096361_1093472814056448_1943901872542939421_n-1513094053.jpg"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE424" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">NGƯỜI ĐỒNG HÀNH CÙNG BẠN</h2> </div>
                    <div id="LINE425" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE426" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Giảng viên:</h3> </div>
                    <div id="HEADLINE428" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">PHẠM THỊ NHUNG</h2> </div>
                    <div id="LISTOP429" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li color="" style="color: rgb(246, 239, 239);">&nbsp; &nbsp;Chứng chỉ kế toán quốc tế CAT/ACCA do Hiệp hội kế toán công chứng Anh Quốc &nbsp; &nbsp; &nbsp; &nbsp;Cấp bằng. Kế toán tổng hợp tại chi nhánh công ty TNHH thực phẩm và giải khát &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; "Cánh diều xanh", thuộc tập đoàn IPP liên Thái Bình Dương.</li>
                            <li color="" style="color: rgb(246, 239, 239);">&nbsp; &nbsp;4 năm ở vị trí kế toán tổng hợp kiêm phụ trách toàn bộ mảng thuế.</li>
                            <li color="" style="color: rgb(246, 239, 239);">&nbsp; &nbsp;Kế toán trưởng công ty TNHH Emotive 100% vốn của Mỹ.</li>
                            <li color="" style="color: rgb(246, 239, 239);">&nbsp; &nbsp;Tư vấn kế toán, thuế cho nhiều doanh nghiệp trong nước và doanh nghiệp có vốn &nbsp; &nbsp; &nbsp;đầu tư nước ngoài FDI.</li>
                            <li color="" style="color: rgb(246, 239, 239);">&nbsp; &nbsp;04 năm kế toán tổng hợp và thuế Chuỗi nhà hàng ăn nhanh (BurgerKing, Pizza &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Domino, Gà Popeys, Dunkin Donut) thuôc tập đoàn Liên Thái Bình Dương (IPP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;group).</li>
                            <li color="" style="color: rgb(246, 239, 239);">&nbsp; Tham gia nhiều kỳ quyết toán, hoàn thuế giá trị gia tăng.</li>
                        </ol>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION437" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="IMAGE471" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/luu_tuan_anh-1513135583.PNG"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH473" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Giảng viên hỗ trợ nhiệt tình, giảng dạy dễ hiểu, kiến thức mang tính thực tế, ứng dụng cao trong toán/tài chính của ngân hàng.</p>
                    </div>
                    <div id="HEADLINE474" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Nhân viên văn phòng - Ngân hàng TMCP Đại Chúng &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Việt Nam</h3> </div>
                    <div id="HEADLINE472" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Lưu Tuấn Anh</h3> </div>
                    <div id="IMAGE447" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/capture1-1512785087576.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="CAROUSEL438" class="widget-element ladi-drop" lp-type="slider" lp-lang="CAROUSEL" lp-autoplay="1" lp-display="block">
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
                                <div id="ITEM-CAROUSEL439" class="widget-element widget-item-child" lp-type="item_slider" lp-lang="ITEM-CAROUSEL" lp-display="block">
                                    <div class="widget-content">
                                        <div id="HEADLINE443" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h2 class="widget-content" lp-node="h2"></h2> </div>
                                        <div id="HEADLINE444" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h2 class="widget-content" lp-node="h2">THÀNH CÔNG LỚN NHẤT CỦA CHÚNG TÔI<br>&nbsp; &nbsp; &nbsp;LÀ &nbsp;SỰ HÀI LÒNG CỦA MỌI NGƯỜI</h2> </div>
                                        <div id="PARAGRAPH453" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                            <p class="widget-content" lp-node="p">
                                                <br color="" style="color: rgb(248, 240, 240);">Công ty Cổ phần Đầu tư và Xây dựng Lạc Hồng
                                                <br>
                                                <br>Tôi đã tiếp thu được nhiều kiến thức bổ ích phục vu cho việc làm hiện tại ở doanh nghiệp của mình. Bài giảng rõ ràng, giảng viên thân thiện giảng dạy dễ hiểu, tiếp thu kiến thức nhanh. Hy vọng trung tâm sẽ mở rộng để có nhiều học viên mới ra trường sẽ tiếp cận thực tế nhanh và dễ dàng kiếm việc.</p>
                                        </div>
                                        <div id="PARAGRAPH459" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                            <p class="widget-content" lp-node="p">Tôi đánh giá cáo sự khác biệt của khóa học này, bài giảng rất chi tiết, giảng viên có chuyên môn sâu nhiệt tình sẽ giúp người học nắm được và làm được một báo cáo tài chính hoàn thiện và tổng thể.</p>
                                        </div>
                                        <div id="PARAGRAPH538" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                            <p class="widget-content" lp-node="p">Giảng viên hỗ trợ nhiệt tình, giảng dạy dễ hiểu, kiến thức mang tính thực tế, ứng dụng cao trong toán/tài chính của ngân hàng.</p>
                                        </div>
                                        <div id="IMAGE579" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                            <div class="widget-content">
                                                <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/Lac_hong-1513135584.PNG"></div>
                                                <div class="lp-show-image"></div>
                                            </div>
                                            <div class="ladi-widget-overlay"></div>
                                        </div>
                                        <div id="IMAGE580" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                            <div class="widget-content">
                                                <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/luu_tuan_anh-1513135583.PNG"></div>
                                                <div class="lp-show-image"></div>
                                            </div>
                                            <div class="ladi-widget-overlay"></div>
                                        </div>
                                        <div id="IMAGE581" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                            <div class="widget-content">
                                                <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/Capture1-1513087592.PNG"></div>
                                                <div class="lp-show-image"></div>
                                            </div>
                                            <div class="ladi-widget-overlay"></div>
                                        </div>
                                        <div id="HEADLINE460" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h3 class="widget-content" lp-node="h3">Giám đốc công ty DV kế toán Việt Nam - VINAFAS</h3> </div>
                                        <div id="HEADLINE458" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h3 class="widget-content" lp-node="h3">TS Hoàng Quang Trung</h3> </div>
                                        <div id="HEADLINE452" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h3 class="widget-content" lp-node="h3">Lê Thị Nhàn</h3> </div>
                                        <div id="HEADLINE537" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h3 class="widget-content" lp-node="h3">Nhân viên văn phòng - Ngân hàng TMCP Đại Chúng Việt Nam</h3> </div>
                                        <div id="HEADLINE536" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h3 class="widget-content" lp-node="h3">Lưu Tuấn Anh</h3> </div>
                                        <div id="LINE445" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                            <div class="widget-content">
                                                <div class="line"></div>
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
            <div id="SECTION481" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="PARAGRAPH482" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Sau khi đăng ký hoàn tất, bộ phận CSKH của LAKITA sẽ liên hệ với bạn để xác nhận thông tin và hỗ trợ tư vấn miễn phi.
                            <br>Hoàn thành thủ tục đăng kí mua khóa học nhân viên bưu điện sẽ giao khóa học tận nơi cho bạn.&nbsp;
                            <br>Bạn chỉ phải trả tiền khi nhận được khóa học.
                            <br>MIỄN PHÍ GIAO HÀNG TOÀN QUỐC</p>
                    </div>
                    <div id="HEADLINE484" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Thời gian ưu đãi còn</h5> </div>
                    <div id="HEADLINE485" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">NHẬN ƯU ĐÃI NGAY TRONG NGÀY .  NHANH TAY LÊN<br></h6> </div>
                    <div id="GROUP486" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE487" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP486" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">395.000đ</h3> </div>
                            <div id="HEADLINE488" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP486" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Chỉ còn</h6> </div>
                            <div id="BOX489" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP486" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE490" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5">895.000đ</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="FORM491" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:12603&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:12604&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:12605&quot;},{&quot;name&quot;:&quot;message&quot;,&quot;value&quot;:&quot;message&quot;,&quot;$$hashKey&quot;:&quot;object:12606&quot;},{&quot;name&quot;:&quot;street&quot;,&quot;value&quot;:&quot;street&quot;,&quot;$$hashKey&quot;:&quot;object:12776&quot;}]" lp-display="block">
                        <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                            <div id="ITEM_FORM492" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                            </div>
                            <div id="ITEM_FORM493" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                            </div>
                            <div id="ITEM_FORM494" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                            </div>
                            <div id="ITEM_FORM508" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="text" placeholder="Nhập địa chỉ" name="dia_chi" lp-label="Địa chỉ" lp-name-id="street" required="required">
                            </div>
                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                            <button id="btn-496" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                        </form>
                    </div><a id="BUTTON496" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM491" lp-display="table"><span class="widget-content"></span> </a>
                    <div id="GROUP498" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX499" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP498" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE500" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h2 class="widget-content" lp-node="h2">Ngày</h2> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX501" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP498" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE502" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h2 class="widget-content" lp-node="h2">Giờ</h2> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX503" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP498" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE504" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h2 class="widget-content" lp-node="h2">Phút</h2> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX505" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP498" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE506" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h2 class="widget-content" lp-node="h2">Giây</h2> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="COUNTDOWN507" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="<?php echo (strtotime('+1 day', strtotime(date('d-m-Y'))) - time()) / 60; ?>" lp-endtimetype="timedown" lp-display="block">
                        <div class="widget-content">
                            <div><span>0</span></div>
                            <div><span>4</span></div>
                            <div><span>15</span></div>
                            <div><span>0</span></div>
                        </div>
                    </div><a id="BUTTON509" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP514" lp-action-type="popup" lp-target="" href=""><span class="widget-content">HOÀN TẤT ĐĂNG KÍ</span> </a>
                    <div id="GOOGLE_MAP510" class="widget-element widget-snap" lp-type="googlemap" lp-lang="GOOGLE_MAP" lp-mapzoom="15" lp-mapaddress="Phòng 701 CT1 - Chung cư Skylight - Ngõ Hòa Bình 6 - 125D Minh Khai - Q. Hai Bà Trưng - Hà Nội" lp-maptitletext="Hoan Kiem, Ha Noi, Viet Nam" lp-maptitleimage="" lp-display="block">
                        <div class="widget-content"> </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LINE511" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE512" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Liên hệ: Phòng 701 CT1 - Chung cư Skylight - Ngõ Hòa Bình 6 - 125D Minh Khai &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Q. Hai Bà Trưng - Hà Nội</h3> </div>
                    <div id="HEADLINE513" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Hotline: 1900 636 195 - 04 7306 2468</h3> </div>
                    <div id="HEADLINE483" class="widget-element widget-snap wow flash animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">ĐĂNG KÝ KHÓA HỌC NGAY ĐỂ NHẬN 40% ƯU ĐÃI</h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP417" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH421" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bài 1: Giới thiệu về đề cương khóa học.
                            <br>Bài 2: Tổng quan về kế toán Thuế: Kế toán thuế phải làm gì, phân biệt với kế toán khác.
                            <br>Bài 3: Tìm hiểu về thực trạng hệ thống sổ sách kế toán trong DN.
                            <br>Bài 4: Nhiệm vụ kế toán thuế ở DN.
                            <br>Bài 5: Tình huống thực tế 1: Kế toán thuế cần làm gì khi tiếp nhận doanh nghiệp mới.
                            <br>Bài 6: Tình huống thực tế 2: Trình tự tiếp nhận hồ sơ, sổ sách, chứng từ kế toán ở DN.</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP461" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH462" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bài 1: 7 thủ tục cần làm của Doanh nghiệp mới thành lập.
                            <br>Bài 2: Thủ tục 1+2: Đăng kí mẫu dấu và tài khoản ngân hàng.
                            <br>Bài 3: Hướng dẫn nộp đăng kí tài khoản qua mạng dangkykinhdoanh.gdt.gov
                            <br>Bài 4: Thủ tục 3+4: Mua token và đăng ký khai thuế, nộp thuế điện tử.
                            <br>Bài 5: Cài đặt và sử dụng phần mềm HTKK và Itax viewer.
                            <br>Bài 6: Thủ tục 05: Kê khai và nộp lệ phí môn bài qua mạng.
                            <br>Bài 7: Thủ tục 06: Nộp mẫu 06 GTGT- đăng ký phương pháp tính thuế GTGT
                            <br>Bài 8: Thủ tục 07: Đặt in và làm thông báo phát hành hóa đơn.
                            <br>
                            <br>
                        </p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP463" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH464" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">A. KỸ THUẬT LẬP TỜ KHAI THUẾ GTGT
                            <br>
                            <br>Bài 1: Giới thiệu nội dung phần 3 Thuế GTGT
                            <br>Bài 2: 02 phương pháp tính thuế GTGT.
                            <br>Bài 3: Xác định kỳ kê khai thuế GTGT.
                            <br>Bài 4: Mục đích và vai trò của kê khai thuế GTGT ở DN.
                            <br>Bài 5: Kiểm tra các điều kiên khấu trừ với chứng từ đầu vào.
                            <br>Bài 6: Thực hành lập bảng kê đầu vào.
                            <br>Bài 7: Thực hành lập bảng kê đầu ra.
                            <br>Bài 8: Kỹ thuật lên tờ kê khai thuế GTGT.
                            <br>Bài 9: Đối chiếu tài khoản 1331, 3331, 511 với tờ kê khai thuế GTGT.
                            <br>Bài 10: Kinh nghiệm kê khai và lưu trữ hóa đơn đầu vào, đầu ra.
                            <br>Bài 11: Hướng dẫn làm báo cáo sử dụng hóa đơn.
                            <br>B. HƯỚNG DẪN KÊ KHAI THUẾ GTGT BỔ SUNG TRÊN HTKK
                            <br>
                            <br>Bài 12: Nguyên tắc kê khai thuế bổ sung thuế GTGT.
                            <br>Bài 13; Tình huống 1: Thực hành lập tờ khai thuế GTGT bổ sung.
                            <br>Bài 14: &nbsp;Tình huống 2: Thực hành lập tờ khai thuế GTGT bổ sung.
                            <br>Bài 15: Bài tập thu hoạch: Kê khai thuế GTGT.</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP465" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH466" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bài 1: Giới thiệu nội dung chương học.
                            <br>Bài 2: Trach nhiệm DN trong kê khai và nộp thuế TNCN.
                            <br>Bài 3: Phân loại đối tượng chịu thế.
                            <br>Bài 4: Hướng dẫn tính thuế TNCN với Hợp đồng lao động trên 3 tháng.
                            <br>Bài 5: Các khoản thu nhập chịu thuế.
                            <br>Bài 6: Thu nhập miễn thuế.
                            <br>Bài 7: Hướng dẫn lập tờ khai thuế TNCN.
                            <br>Bài 8: Hướng dẫn đăng kí người phụ thuộc.
                            <br>Bài 9: Cách tính thế TNCN trường hợp HĐLĐ trên 3 tháng.
                            <br>Bài 10: Cách tính thế TNCN trường hợp HĐLĐ dưới 3 tháng.
                            <br>Bài 11: Hồ sơ kê khai thuế TNCN.
                            <br>Bài 12: Các khoản thuế giảm trừ.
                            <br>Bài 13: Thực hành lập tờ khai thuế TNCN theo tháng.
                            <br>Bài 14: Thực hành lập tờ khai thuế TNCN theo quý.</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP467" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH468" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bài 1; Quyết toán thuế TNCN là gì? Tại sao phải làm quyết toán.
                            <br>Bài 2: Các trường hợp không đủ điều kiện ủy quyền quyết toán.
                            <br>Bài 3: Hướng dẫn tạo mã số thuế TNCN.
                            <br>Bài 4; Cách tính thuế TNCN cả năm.
                            <br>Bài 5: Hướng dẫn lập bảng lương.
                            <br>Bài 6: Hướng dẫn lập tờ kê khai thuế TNCN theo TT92 (Phần 1).
                            <br>Bài 7: Hướng dẫn lập tờ kê khai thuế TNCN theo TT92 (Phần 2).</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP469" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH470" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bài 1: Hồ sơ quyết toán thuế TNDN.
                            <br>Bài 2; Chi phí được trừ khi quyết toán thuế TNDN.
                            <br>Bài 3: Chi phí không được trừ khi quyết toán thuế TNDN.
                            <br>Bài 4: Hướng dẫn kết chuyển lỗ từ năm trước chuyến sang khi quyết toán thuế TNDN.
                            <br>Bài 5: Hướng dẫn quyết toán thuế TNDN.
                            <br>Bài 6; Thực hành quyết toán thuế TNDN.</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <script type="text/javascript" async="" src="https://maps.google.com/maps/api/js?sensor=false&amp;key=AIzaSyAMCbzPp9-fVTkqxTrsJ-m0EYgW_xdih9k"></script>
            <script type="text/javascript" async="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1513245333945"></script>
            <script>
            var loadCSSFiles = function () {
                var links = 'https://static.ladipage.net/source/animate.min.css?v=1513245333945';
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
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="fb-comments" data-href="https://lakita.vn/tron-bo-quyet-toan-thue-tu-a-den-z-dangph.html" 
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
                $("#BUTTON322").click(function (e) {
                    e.preventDefault();
                    $("#btn-313").click();
                });
                  $("#BUTTON509").click(function (e) {
                    e.preventDefault();
                    $("#btn-496").click();
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