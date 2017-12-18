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
        <meta property="og:url" content="https://lakita.vn/tron-bo-quyet-toan-thue-tu-a-den-z-candh2.html" />
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
        <?php $this->load->view('landingpage/kt210candh2/css'); ?>
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
            <div class="container"><a id="BUTTON3" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">Hotline : 0972 220 777</span> </a>
                <div id="BOX14" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block" lp-sticky="1" lp-sticky-pos="top" lp-sticky-kc="0px">
                    <div class="widget-content">
                        <div id="HEADLINE415" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION372" lp-action-type="page" lp-target="" href="">
                            <h5 class="widget-content" lp-node="h5">Đăng kí</h5> </div>
                        <div id="LINEVERTICAL434" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                            <div class="widget-content">
                                <div class="linevertical"></div>
                            </div>
                        </div>
                        <div id="LINEVERTICAL433" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                            <div class="widget-content">
                                <div class="linevertical"></div>
                            </div>
                        </div>
                        <div id="LINEVERTICAL432" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                            <div class="widget-content">
                                <div class="linevertical"></div>
                            </div>
                        </div>
                        <div id="LINEVERTICAL431" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                            <div class="widget-content">
                                <div class="linevertical"></div>
                            </div>
                        </div>
                        <div id="HEADLINE21" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION167" lp-action-type="page" lp-target="" href="">
                            <h5 class="widget-content" lp-node="h5">Đối tượng</h5> </div>
                        <div id="LINEVERTICAL175" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                            <div class="widget-content">
                                <div class="linevertical"></div>
                            </div>
                        </div>
                        <div id="IMAGE416" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                            <div class="widget-content">
                                <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/logo-1513079436.png"></div>
                                <div class="lp-show-image"></div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="HEADLINE174" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION205" lp-action-type="page" lp-target="" href="">
                            <h5 class="widget-content" lp-node="h5">Nội dung</h5> </div>
                        <div id="HEADLINE18" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION361" lp-action-type="page" lp-target="" href="">
                            <h5 class="widget-content" lp-node="h5">Ý kiến chuyên gia</h5> </div>
                        <div id="HEADLINE16" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION52" lp-action-type="page" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">Cảm nhận học viên</h3> </div>
                        <div id="HEADLINE23" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION332" lp-action-type="page" lp-target="" href="">
                            <h5 class="widget-content" lp-node="h5">Giảng viên</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE12" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">Trọn bộ kế toán thuế từ A đến Z</h2> </div>
                <div id="HEADLINE24" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">KHÓA HỌC ONLINE ĐỘC QUYỀN</h3> </div><a id="BUTTON25" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION372" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÍ NGAY</span> </a>
                <div id="IMAGE26" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/1212-1513085231.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP107" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="IMAGE108" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/57b167c9ca57d39c18a1c57c/team1.jpg"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE109" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h4 class="widget-content" lp-node="h4">Nhận ngay mã giảm giá 20% cho toàn bộ sản phẩm</h4> </div>
                <div id="PARAGRAPH110" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                    <p class="widget-content" lp-node="p">Đăng ký tại đây</p>
                </div>
                <div id="BOX111" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE112" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">150.000 vnđ</h2> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="FORM113" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-display="block">
                    <form class="widget-content">
                        <div id="ITEM_FORM114" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                            <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                        </div>
                    </form>
                </div><a id="BUTTON115" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM113" lp-display="table"><span class="widget-content">NHẬN MÃ GIẢM GIÁ</span> </a></div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION52" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="HEADLINE53" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">5000+ khách hàng đã trải nghiệm khóa học</h2> </div>
                <div id="BOX55" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX56" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE58" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">BELLA DINH</h3> </div>
                        <div id="PARAGRAPH57" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Nhờ Lakita mà em đã nắm vững được các nghiệp vụ để làm kế toán thuế trong doanh nghiệp, giúp em tự tin để tìm việc làm hơn.Em xin chân thành cảm ơn!</p>
                        </div>
                        <div id="HEADLINE435" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">&nbsp;Trường Đại học Kinh tế Huế - HCE</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="GROUP59" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="LINE60" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP59" lp-display="block">
                            <div class="widget-content">
                                <div class="line"></div>
                            </div>
                        </div>
                        <div id="LINE61" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP59" lp-display="block">
                            <div class="widget-content">
                                <div class="line"></div>
                            </div>
                        </div>
                        <div id="GROUP62" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP59">
                            <div class="widget-content"></div>
                        </div>
                        <div id="GROUP67" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP59">
                            <div class="widget-content">
                                <div id="HEADLINE68" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP67" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">HÀ VŨ PHƯƠNG THẢO</h5> </div>
                                <div id="BOX69" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP67" lp-display="block">
                                    <div class="widget-content"></div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                                <div id="BOX70" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP67" lp-display="block">
                                    <div class="widget-content">
                                        <div id="PARAGRAPH71" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                            <p class="widget-content" lp-node="p">Nội dung khóa học có nhiều điều mới và hữu dụng trong quá trình làm việc, tư vấn tận tình.</p>
                                        </div>
                                    </div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div id="GROUP72" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP59">
                            <div class="widget-content">
                                <div id="HEADLINE73" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP72" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">PHƯƠNG VISSAI</h5> </div>
                                <div id="BOX75" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP72" lp-display="block">
                                    <div class="widget-content">
                                        <div id="PARAGRAPH76" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                            <p class="widget-content" lp-node="p"><span style="font-weight: bold;">Đây là một trong những khóa học rất bổ ích mà tôi được học. Khóa học đã giúp tôi nâng cao sự hiểu biết về kế toán thuế và hỗ trợ rất nhều cho công việc quản lí doanh nghiệp.</span></p>
                                        </div>
                                    </div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="HEADLINE51" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">Hãy <span style="color: rgb(33, 150, 243);">lắng nghe</span> những cảm nhận của họ!</h3> </div>
                <div id="LINE163" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="HEADLINE436" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h5 class="widget-content" lp-node="h5">Trung tâm Phát triển Cụm công nghiệp và Dịch vụ Công ích thành phố Biên Hòa</h5> </div>
                <div id="HEADLINE437" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h5 class="widget-content" lp-node="h5">Quản lí tại công ty cổ phần xi măng Sông Lam</h5> </div>
                <div id="BOX438" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION167" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="HEADLINE169" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h1 class="widget-content" lp-node="h1">Khóa học sẽ <span style="color: rgb(33, 150, 243);">hỗ trợ</span> tốt nhất nếu bạn là:</h1> </div>
                <div id="BOX173" class="widget-element widget-snap ladi-drop wow bounceInRight animated" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="LISTOP170" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                            <ol class="widget-content">
                                <li color="" style=""><span style="color: rgb(0, 0, 0);">Sinh viên và kế toán mới ra trường chưa biết, chưa hiểu, chưa làm được kế toán thuế&nbsp;</span></li>
                                <li color="" style=""><span style="color: rgb(0, 0, 0);">&nbsp;Kế toán nội bộ chuyển sang làm kế toán thuế</span><span style="color: rgb(255, 255, 255);">&nbsp;</span></li>
                                <li color="" style=""><span style="color: rgb(12, 11, 11);">Chuyên viên kế toán, kế toán tổng hợp có mong muốn nâng cao bổ sung và hoàn thiện chuyên môn</span><span style="color: rgb(255, 255, 255);">&nbsp;</span></li>
                                <li color="" style=""><span style="color: rgb(0, 0, 0);">Chuyên viên nhân sự, làm lương có nhiệm vụ kê khai và quyết toán thuế TNCN</span></li>
                                <li color="" style=""><span style="color: rgb(255, 255, 255);">&nbsp;</span><span style="color: rgb(0, 0, 0);">Chủ doanh nghiệp, cá nhân, Start-up chuẩn bị khởi nghiệp muốn trang bị các kiến thức pháp luật để phòng ngừa các rủi ro phạt vi phạm về thuế hoặc muốn hiểu, biết công việc của kế toán thuế để thuận tiện theo dõi và kiểm tra</span></li>
                            </ol>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="YOUTUBE168" class="widget-element widget-snap wow bounceInLeft animated" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                    <iframe class="widget-content" src="https://www.youtube.com/embed/GruLqX5_IOY?list=UUjSgXaDgKCVycQG5uelJ49Q&amp;rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LINE181" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION120" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX121" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE122" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Thực hành trực tiếp trên kho tài liệu phong phú đi kèm mỗi bài giảng</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX123" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE124" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Trao đổi và nhận được tư vấn chuyên môn trực tiếp từ giảng viên</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX125" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE126" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Tài khoản sử dụng trọn đời không giới hạn thời gian</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX127" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE128" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Cập nhập liên tục và hoàn toàn  <span style="color: rgb(244, 67, 54); font-weight: bold;">MIỄN PHÍ </span>các thông tin và thông tư khi có thay đổi</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE129" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2"><span style="color: rgb(0, 0, 0);">Tại sao tôi nên chọn</span><span style="color: rgb(33, 150, 243);"> Lakita&nbsp;</span><span style="color: rgb(0, 0, 0);">?</span></h2> </div>
                <div id="BOX131" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE132" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Giải quyết từng vấn đề một cách logic và dễ hiểu nhất</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX133" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE134" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Thành thạo kỹ thuật lên tờ khai và quyết toán nhanh nhất, chính xác nhất</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LINE135" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="IMAGE130" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/business-presentation-2253131_1920-1513092253.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION205" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="HEADLINE206" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">Kế toán thuế&nbsp;<br color="" style="color: rgb(0, 0, 0);">Lộ trình học <span style="color: rgb(33, 150, 243);">tinh gọn</span> và <span style="color: rgb(33, 150, 243);">logic</span> nhất</h2> </div>
                <div id="LINE263" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="HEADLINE264" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">6 chương - 56 bài học - 10h học online</h3> </div>
                <div id="BOX274" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE294" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Thuế giá trị gia tăng</h3> </div><a id="BUTTON275" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP316" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX278" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE297" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Quyết toán thuế TNCN</h3> </div><a id="BUTTON279" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP324" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX283" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"><a id="BUTTON284" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP312" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a>
                        <div id="HEADLINE293" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">Đăng ký thuế ban đầu cho Doanh nghiệp mới thành lập</h2> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX285" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE287" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">2</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX269" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE301" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">1</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX288" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"><a id="BUTTON289" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP320" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a>
                        <div id="HEADLINE296" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Kê khai thuế thu nhập cá nhân</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX290" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE298" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Thuế Thu nhập Doanh nghiệp</h3> </div><a id="BUTTON291" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP328" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX276" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE300" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">3</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX302" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE303" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">4</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX280" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE281" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">5</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX304" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE305" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">6</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX229" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"><a id="BUTTON273" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP306" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a>
                        <div id="HEADLINE230" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h4 class="widget-content" lp-node="h4">Tổng quan về kế toán thuế</h4> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP328" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX329" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE330" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Thuế Thu nhập Doanh nghiệp</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP331" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">1. Hồ sơ quyết toán thuế TNDN</li>
                        <li color="" style="color: rgb(255, 255, 255);">2. Chi phí được trừ khi quyết toán thuế TNDN</li>
                        <li color="" style="color: rgb(255, 255, 255);">3. Chi phí không được trừ khi quyết toán thuế TNDN</li>
                        <li color="" style="color: rgb(255, 255, 255);">4. Hướng dẫn kết chuyễn lỗ từ năm trước chuyển sang khi quyết toán thuế TNDN</li>
                        <li color="" style="color: rgb(255, 255, 255);">5. Hướng dẫn quyết toán thuế TNDN</li>
                        <li color="" style="color: rgb(255, 255, 255);">6. Thực hành quyết toán thuế TNDN</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP324" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX325" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE326" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Quyết toán thuế TNCN</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP327" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">1. Quyết toán thuế TNCN là gì? Tại sao phải làm quyết toán</li>
                        <li color="" style="color: rgb(255, 255, 255);">2. Các trường hợp không đủ điều kiện ủy quyền quyết toán</li>
                        <li color="" style="color: rgb(255, 255, 255);">3. Hướng dẫn tạo mã số thuế thu nhập cá nhân</li>
                        <li color="" style="color: rgb(255, 255, 255);">4. Cách tính thuế TNCN cả năm</li>
                        <li color="" style="color: rgb(255, 255, 255);">5. Hướng dẫn lập bảng lương</li>
                        <li color="" style="color: rgb(255, 255, 255);">6. Hướng dẫn lập tờ khai quyết toán thuế TNCN theo TT92/2015 ( Phần 1 )</li>
                        <li color="" style="color: rgb(255, 255, 255);">7. Hướng dẫn lập tờ khai quyết toán thuế TNCN theo TT92/2015 ( Phần 2 )</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP320" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX321" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE322" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Kê khai thuế thu nhập cá nhân</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP323" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">1. Giới thiệu nội dung chương học</li>
                        <li color="" style="color: rgb(255, 255, 255);">2. Trách nhiệm Doanh Nghiệp trong kê khai và nộp thuê Thu nhập cá nhân</li>
                        <li color="" style="color: rgb(255, 255, 255);">3. Phân Loại đối tượng chịu thuế</li>
                        <li color="" style="color: rgb(255, 255, 255);">4. Hướng dẫn tính thuế TNCN với Hợp đồng lao động trên 3 tháng</li>
                        <li color="" style="color: rgb(255, 255, 255);">5. Các khoản thu nhập chịu thuế</li>
                        <li color="" style="color: rgb(255, 255, 255);">6. Thu nhập miễn thuế</li>
                        <li color="" style="color: rgb(255, 255, 255);">7. Hướng dẫn lập tờ khai thuế TNCN</li>
                        <li color="" style="color: rgb(255, 255, 255);">8. Hướng dẫn đăng ký người phụ thuộc</li>
                        <li color="" style="color: rgb(255, 255, 255);">9. Cách tính thuế TNCN trường hợp HĐLĐ trên 3 tháng</li>
                        <li color="" style="color: rgb(255, 255, 255);">10. Cách tính thuế TNCN trường hợp HĐLĐ dưới 3 tháng</li>
                        <li color="" style="color: rgb(255, 255, 255);">11. Hồ sơ kê khai thuế TNCN</li>
                        <li color="" style="color: rgb(255, 255, 255);">12. Các khoản thuế giảm trừ</li>
                        <li color="" style="color: rgb(255, 255, 255);">13. Thực hành lập tờ khai Thuế TNCN ( theo tháng )</li>
                        <li color="" style="color: rgb(255, 255, 255);">14. Thực hành lập tờ khai Thuế TNCN ( theo quý)</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION361" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX362" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="PARAGRAPH363" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Tôi đánh giá cáo sự khác biệt của khóa học này, bài giảng rất chi tiết, giảng viên có chuyên môn sâu nhiệt tình sẽ giúp người học nắm được và làm được một báo cáo tài chính hoàn thiện và tổng thể.</p>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE364" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2"><span style="color: rgb(33, 150, 243);">Ý kiến</span> <span style="color: rgb(0, 0, 0);">chuyên gia</span></h2> </div>
                <div id="HEADLINE365" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">Tiến sĩ: Hoàng Quang Trung</h6> </div>
                <div id="HEADLINE366" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">Giám đốc công ty DV kế toán Việt Nam - VINAFAS</h6> </div>
                <div id="BOX367" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LINE368" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION332" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="IMAGE346" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/21761373_1704766096260447_1445339622421389708_n-1513007673.jpg"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE347" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">&nbsp;Người đồng hành cùng các bạn chinh phục</h3> </div>
                <div id="HEADLINE348" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">KẾ TOÁN THUẾ</h2> </div>
                <div id="BOX349" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE350" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">Giảng viên: <span style="color: rgb(244, 67, 54);">Phạm Thị Nhung</span></h2> </div>
                        <div id="LISTOP352" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                            <ol class="widget-content">
                                <li color="" style="color: rgb(0, 0, 0);">Chứng chỉ kế toán quốc tế CAT/ACCA do Hiệp hội kế toán công chứng Anh Quốc Cấp bằng.</li>
                                <li color="" style="color: rgb(0, 0, 0);">&nbsp;Kế toán trưởng công ty TNHH Emotive 100% vốn của Mỹ Tư vấn kế toán, thuế cho nhiều doanh nghiệp trong nước và doanh nghiệp có vốn đầu tư nước ngoài FDI&nbsp;</li>
                                <li color="" style="color: rgb(0, 0, 0);">05 năm kế toán tổng hợp và thuế Chuỗi nhà hàng ăn nhanh (BurgerKing, Pizza Domino, Gà Popeys, Dunkin Donut) thuôc tập đoàn Liên Thái Bình Dương (IPP group) Tham gia nhiều kỳ quyết toán, hoàn thuế giá trị gia tăng</li>
                            </ol>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION372" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="GROUP392" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="GROUP393" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP392">
                            <div class="widget-content">
                                <div id="SHAPE394" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP393" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,204,232,1)">
                                            <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="HEADLINE395" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP393" lp-display="block">
                                    <h3 class="widget-content" lp-node="h3">Số điện thoại</h3> </div>
                                <div id="HEADLINE396" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP393" lp-display="block">
                                    <h6 class="widget-content" lp-node="h6">1900 636 195 - 04 7306 2468</h6> </div>
                            </div>
                        </div>
                        <div id="GROUP397" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP392">
                            <div class="widget-content">
                                <div id="SHAPE398" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP397" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,204,232,1)">
                                            <path d="M20,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V8L12,13L20,8V18M20,6L12,11L4,6V6H20V6Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="HEADLINE399" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP397" lp-display="block">
                                    <h3 class="widget-content" lp-node="h3">Email</h3> </div>
                                <div id="HEADLINE400" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP397" lp-display="block">
                                    <h6 class="widget-content" lp-node="h6">cskh@lakita.vn</h6> </div>
                            </div>
                        </div>
                        <div id="GROUP401" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP392">
                            <div class="widget-content">
                                <div id="HEADLINE402" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP401" lp-display="block">
                                    <h3 class="widget-content" lp-node="h3">Địa điểm</h3> </div>
                                <div id="SHAPE403" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP401" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,204,232,1)">
                                            <path d="M12,2C15.31,2 18,4.66 18,7.95C18,12.41 12,19 12,19C12,19 6,12.41 6,7.95C6,4.66 8.69,2 12,2M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M20,19C20,21.21 16.42,23 12,23C7.58,23 4,21.21 4,19C4,17.71 5.22,16.56 7.11,15.83L7.75,16.74C6.67,17.19 6,17.81 6,18.5C6,19.88 8.69,21 12,21C15.31,21 18,19.88 18,18.5C18,17.81 17.33,17.19 16.25,16.74L16.89,15.83C18.78,16.56 20,17.71 20,19Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="HEADLINE404" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP401" lp-display="block">
                                    <h6 class="widget-content" lp-node="h6">Phòng 701 CT1 - Chung cư Skylight - Ngõ Hòa Bình 6 - 125D Minh Khai - Q. Hai Bà Trưng - Hà Nội</h6> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="HEADLINE413" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h5 class="widget-content" lp-node="h5">Sau khi đăng ký mua khóa học bộ phận CSKH của Lakita sẽ liên hệ với bạn để xác nhận thông tin và nhân viên bưu điện sẽ giao khóa học tận nơi cho bạn.&nbsp;<br>Bạn chỉ phải trả tiền khi nhận được khóa học</h5> </div>
                <div id="COUNTDOWN439" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="<?php echo (strtotime('+1 day', strtotime(date('d-m-Y'))) - time()) / 60; ?>" lp-display="block">
                    <div class="widget-content">
                        <div><span>00</span></div>
                        <div><span>00</span></div>
                        <div><span>00</span></div>
                        <div><span>00</span></div>
                    </div>
                </div>
                <div id="HEADLINE440" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">Chỉ còn&nbsp;</h3> </div>
                <div id="BOX446" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="PARAGRAPH452" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <h5 class="widget-content" lp-node="h5"></h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE453" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">Chương trình ưu đãi áp dụng đến hết ngày <?php echo date('d/m/Y'); ?></h2> </div>
                <div id="HEADLINE447" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">895.000Đ</h2> </div>
                <div id="HEADLINE448" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">chỉ còn 395.000Đ</h2> </div>
                <div id="HEADLINE449" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h1 class="widget-content" lp-node="h1">ƯU ĐÃI 55,78%</h1> </div>
                <div id="LINE450" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="HEADLINE472" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">Nhanh tay lên!</h3> </div>
                <div id="GROUP376" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="FORM377" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:15386&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:15387&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:15388&quot;},{&quot;name&quot;:&quot;street&quot;,&quot;value&quot;:&quot;street&quot;,&quot;$$hashKey&quot;:&quot;object:15464&quot;}]" lp-group="GROUP376" lp-display="block">
                           <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                    <div id="ITEM_FORM378" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                    </div>
                                    <div id="ITEM_FORM379" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                                    </div>
                                    <div id="ITEM_FORM380" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                                    </div>
                                    <div id="ITEM_FORM410" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Nhập địa chỉ" name="dia_chi" lp-label="Địa chỉ" lp-name-id="street" required="required">
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <button id="btn-382" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                                </form>
                        </div><a id="BUTTON382" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM377" lp-group="GROUP376" lp-display="table"><span class="widget-content">ĐĂNG KÝ NGAY</span> </a></div>
                </div>
                <div id="GROUP383" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="BOX384" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP383" lp-display="block">
                            <div class="widget-content">
                                <div id="SHAPE385" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,204,232,1)">
                                            <path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX388" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP383" lp-display="block">
                            <div class="widget-content">
                                <div id="SHAPE389" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,204,232,1)">
                                            <path d="M21.35,11.1H12.18V13.83H18.69C18.36,17.64 15.19,19.27 12.19,19.27C8.36,19.27 5,16.25 5,12C5,7.9 8.2,4.73 12.2,4.73C15.29,4.73 17.1,6.7 17.1,6.7L19,4.72C19,4.72 16.56,2 12.1,2C6.42,2 2.03,6.8 2.03,12C2.03,17.05 6.16,22 12.25,22C17.6,22 21.5,18.33 21.5,12.91C21.5,11.76 21.35,11.1 21.35,11.1V11.1Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX390" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP383" lp-display="block">
                            <div class="widget-content">
                                <div id="SHAPE391" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,204,232,1)">
                                            <path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX386" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP383" lp-display="block">
                            <div class="widget-content">
                                <div id="SHAPE387" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,204,232,1)">
                                            <path d="M20,6.5A0.5,0.5 0 0,1 19.5,7H17.5A0.5,0.5 0 0,1 17,6.5V4.5A0.5,0.5 0 0,1 17.5,4H19.5A0.5,0.5 0 0,1 20,4.5M4.5,20A0.5,0.5 0 0,1 4,19.5V11H6.09C6.03,11.32 6,11.66 6,12A6,6 0 0,0 12,18A6,6 0 0,0 18,12C18,11.66 17.96,11.32 17.91,11H20V19.5A0.5,0.5 0 0,1 19.5,20M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M20,2H4C2.89,2 2,2.89 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z"></path>
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
        <div id="POPUP422" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX424" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="SHAPE425" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="#F6511F">
                                    <path d="M28.28 6.28L11 23.563l-7.28-7.28-1.44 1.437 8 8 .72.686.72-.687 18-18-1.44-1.44z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LINE427" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="GROUP428" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE429" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP428" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">thành công!</h2> </div>
                        <div id="HEADLINE430" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP428" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">Đăng ký</h2> </div>
                    </div>
                </div>
                <div id="PARAGRAPH426" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                    <h5 class="widget-content" lp-node="h5">Cảm ơn bạn đã quan tâm tới khóa học của chúng tôi!<br>Trung tâm tư vấn khách hàng sẽ liên lạc lại để tư vấn và hướng dẫn tham gia khóa học cho bạn trong thời gian sớm nhất có thể!&nbsp;<br>Xin vui lòng lưu ý điện thoại!&nbsp;</h5> </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP316" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX317" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE318" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Thuế giá trị gia tăng</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP319" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">A. Kỹ thuật lập tờ khai thuế GTGT</li>
                        <li color="" style="color: rgb(255, 255, 255);">1. Giới thiệu nội dung phần 3 - thuế GTGT</li>
                        <li color="" style="color: rgb(255, 255, 255);">2. 02 phương pháp tính thuế GTGT3. Xác định kỳ kê khai thuế GTGT</li>
                        <li color="" style="color: rgb(255, 255, 255);">4. Mục đích và vai trò của kê khai thuế GTGT ở DN</li>
                        <li color="" style="color: rgb(255, 255, 255);">5. Kiểm tra các điều kiện khấu trừ với chứng từ đầu vào</li>
                        <li color="" style="color: rgb(255, 255, 255);">6. Thực hành lập bảng kê đầu vào</li>
                        <li color="" style="color: rgb(255, 255, 255);">7. Thực hành lập bảng kê đầu ra</li>
                        <li color="" style="color: rgb(255, 255, 255);">8. Kỹ thuật lên tờ khai thuế GTGT</li>
                        <li color="" style="color: rgb(255, 255, 255);">9. Đối chiếu tài khoản 1331.3331.511 với tờ khai thuế GTGT</li>
                        <li color="" style="color: rgb(255, 255, 255);">10. Kinh nghiệm kê khai và lưu trữ hóa đơn đầu vào, đầu ra</li>
                        <li color="" style="color: rgb(255, 255, 255);">11. Hướng dẫn làm báo cáo sử dụng hóa đơnB. Hướng dẫn kế khai thuế GTGT bổ sung trên HTKK</li>
                        <li color="" style="color: rgb(255, 255, 255);">12. Nguyên tắc kê khai bổ sung thuế GTGT</li>
                        <li color="" style="color: rgb(255, 255, 255);">13. Tình huống 1 : Thực hành lập tờ khai thuế GTGT bổ sung</li>
                        <li color="" style="color: rgb(255, 255, 255);">14. Tình huống 2 : Thực hành lập tờ khai thuế GTGT bổ sung</li>
                        <li color="" style="color: rgb(255, 255, 255);">15. Bài tập thu hoạch : Kê khai bổ sung thuế GTGT</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP312" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX313" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE314" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Đăng ký thuế ban đầu cho Doanh nghiệp mới thành lập</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP315" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">1. 07 thủ tục cần làm cho DN mới thành lập</li>
                        <li color="" style="color: rgb(255, 255, 255);">2. Thủ tục 1+ 2: Đăng ký mẫu dấu và tài khoản ngân hàng</li>
                        <li color="" style="color: rgb(255, 255, 255);">3. Hướng dẫn nộp đăng ký tài khoản qua mạng: dangkykinhdoanh.gdt.gov</li>
                        <li color="" style="color: rgb(255, 255, 255);">4. Thủ tục 3+ 4: Mua token và đăng ký khai thuế, nộp thuế điện tử</li>
                        <li color="" style="color: rgb(255, 255, 255);">5. Cài đặt và sử dụng phần mềm HTKK và itax viewer</li>
                        <li color="" style="color: rgb(255, 255, 255);">6. Thủ tục 05: Kê khai và nộp Lệ phí môn bài qua mạng</li>
                        <li color="" style="color: rgb(255, 255, 255);">7. Thủ tục 6: Nộp mẫu 06 GTGT - đăng ký phương pháp tính thuế GTGT</li>
                        <li color="" style="color: rgb(255, 255, 255);">8. Thủ tục 7: Đặt in và làm thông báo phát hành hóa đơn</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP306" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="LISTOP309" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">1. Giới thiệu và đề cương khóa học " Trọn bộ A_Z kế toán thuế cho người bắt đầu "</li>
                        <li color="" style="color: rgb(255, 255, 255);">2. Tổng quan về kế toán thuế: Kế toán thuế là gì, phân biệt với các kế toán khác</li>
                        <li color="" style="color: rgb(255, 255, 255);">3. Tìm hiểu về thực trạng hệ thống sổ sách kế toán trong DN</li>
                        <li color="" style="color: rgb(255, 255, 255);">4. Nhiệm vụ kế toán thuế ở DN</li>
                        <li color="" style="color: rgb(255, 255, 255);">5. Tình huống thực tế 1: Kế toán thuế cần làm gì khi tiếp nhận doanh nghiệp mới</li>
                        <li color="" style="color: rgb(255, 255, 255);">6. Tình huống thực tế 2: Trình tự tiếp nhận hồ sơ, sổ sách, chứng từ kế toán ở DN</li>
                    </ol>
                </div>
                <div id="BOX310" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE311" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Tổng quan về kế toán thuế</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <script type="text/javascript" async="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1513570974027"></script>
        <script>
            var loadCSSFiles = function() {
                var links = 'https://static.ladipage.net/source/animate.min.css?v=1513570974027';
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
                    <div class="fb-comments" data-href="https://lakita.vn/tron-bo-quyet-toan-thue-tu-a-den-z-candh2.html" 
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
                $("#BUTTON382").click(function (e) {
                    e.preventDefault();
                    $("#btn-382").click();
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