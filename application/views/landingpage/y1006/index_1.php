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
        <meta property="og:url" content="https://lakita.vn/yoga-danh-cho-nguoi-lam-van-phong-6.html" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/360x260/cac-bai-the-duc-tai-cho-1512787899.jpg">
        <meta property="og:description" content="Hỗ trợ điều trị và phòng tránh những vấn đề về sức khỏe và tinh thần thường gặp cho người làm việc văn phòng." />
        <meta name="format-detection" content="telephone=no" />
        <?php $this->load->view('landingpage/y1006/css'); ?>
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
                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="ladi-wraper-page">
            <div id="SECTION172" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP175" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE176" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP175" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">Khóa học trực tuyến: Yoga cho người làm văn phòng</h1> </div>
                            <div id="HEADLINE177" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP175" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Liệu pháp thần kỳ "đánh bay" mọi chứng bệnh nơi công sở</h3> </div>
                            <div id="HEADLINE178" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP175" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Hỗ trợ điều trị và phòng tránh những vấn đề về sức khỏe và                                         tinh thần thường gặp cho người làm việc văn phòng.</h6> </div>
                            <div id="LINE179" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP175" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="IMAGE365" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/848A0512-1512985005.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION132" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="LINE135" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="GROUP148" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE149" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP148" lp-display="block">
                                <p class="widget-content" lp-node="p">Nhân viên Sale &amp; Marketing</p>
                            </div>
                            <div id="HEADLINE150" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP148" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Hoàng Tài</h6> </div>
                            <div id="BOX151" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP148" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX152" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP148" lp-display="block">
                                <div class="widget-content">
                                    <div id="PARAGRAPH153" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                        <p class="widget-content" lp-node="p">Địa chỉ lý tưởng để mọi người cùng học Yoga với một sức khỏe dồi dào và trí tuệ minh mẫn.</p>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP199" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE137" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP199" lp-display="block">
                                <p class="widget-content" lp-node="p">NSƯT, Phó đoàn nghệ thuật tỉnh Quảng Trị&nbsp;</p>
                            </div>
                            <div id="HEADLINE138" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP199" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Trương Thương Huyền</h6> </div>
                            <div id="BOX139" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP199" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX140" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP199" lp-display="block">
                                <div class="widget-content">
                                    <div id="PARAGRAPH141" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                        <p class="widget-content" lp-node="p">Nhờ khoá học tại mà mình học hỏi được rất nhiều, hiểu nhiều hơn. Sự hướng dẫn tận tình chu đáo của thầy cô giúp các học viên trải nghiệm được nhiều điều thú vị.</p>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP337" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE338" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP337" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">học viên đã theo học với chúng tôi trong suốt hơn 5 năm qua</h6> </div>
                            <div id="BOX340" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP337" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE341" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP337" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">+1000</h6> </div>
                        </div>
                    </div>
                    <div id="GROUP142" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE143" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP142" lp-display="block">
                                <p class="widget-content" lp-node="p">Giáo viên</p>
                            </div>
                            <div id="HEADLINE144" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP142" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Nguyễn Thanh Huyền</h6> </div>
                            <div id="BOX146" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP142" lp-display="block">
                                <div class="widget-content">
                                    <div id="PARAGRAPH147" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                        <p class="widget-content" lp-node="p">Cảm ơn thầy Hùng, nhờ có thầy Hùng mà chúng ta được gặp gỡ, được chia sẻ và học hỏi thêm nhiều kiến thức!</p>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX145" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP142" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE133" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">NHỮNG NGƯỜI TỪNG TRẢI NGHIỆM NÓI GÌ VỀ KHÓA HỌC NÀY?</h5> </div>
                    <div id="PARAGRAPH134" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Sự hài lòng của học viên chính là thành công lớn nhất của chúng tôi
                            <br>
                        </p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION32" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="LINE43" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE44" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">TẠI SAO KHÓA HỌC ĐEM LẠI HIỆU QUẢ CAO ĐẾN VẬY?</h5> </div>
                    <div id="PARAGRAPH34" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Vì chúng tôi đặt sức khỏe của học viên lên hàng đầu, qua việc thiết kế các bài tập phù hợp với thể chất, thói quen, đặc thù công việc của những người thường xuyên làm việc trong văn phòng.&nbsp;
                            <br>
                            <br>Trải nghiệm khóa học, bạn sẽ:</p>
                    </div>
                    <div id="LISTOP262" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li>Tạm biệt nguy cơ mắc "bệnh công sở": các vấn đề về cột sống,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; đau nhức cổ vai gáy, vấn đề về tiêu hóa, tim mạch...&nbsp;</li>
                            <li>Giảm áp lực công việc</li>
                            <li>Tăng khả năng sáng tạo và sự tập trung</li>
                            <li>Cơ thể đẹp hơn, dẻo dai hơn</li>
                        </ol>
                    </div>
                    <div id="BOX296" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE297" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">MUA NGAY<br>để nhận ƯU ĐÃI tốt nhất!!!</h4> </div>
                            <div id="GROUP298" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="FORM299" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:6536&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:6537&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:6538&quot;},{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:9680&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:9681&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:9682&quot;}]" lp-group="GROUP298" lp-display="block">
                                         <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                            <div id="ITEM_FORM300" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                            </div>
                                            <div id="ITEM_FORM301" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                                            </div>
                                            <div id="ITEM_FORM302" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="tel" placeholder="Nhập Số điện thoại" name="phone" onblur="checkphone(this)" onkeydown="removecheckphone()" lp-label="Điện thoại" required="required">
                                            </div>
                                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                            <button id="btn-303" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent"> MUA KHÓA HỌC </button>
                                        </form>
                                    </div><a id="BUTTON303" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM299" lp-group="GROUP298" lp-display="table"><span class="widget-content">MUA KHÓA HỌC</span> </a></div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION12" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP15" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX16" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP15" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE18" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP15" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">chương</h6> </div>
                            <div id="PARAGRAPH19" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP15" lp-display="block">
                                <p class="widget-content" lp-node="p">&nbsp;</p>
                            </div>
                            <div id="HEADLINE326" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP15" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">10</h6> </div>
                            <div id="HEADLINE332" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP15" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">50</h6> </div>
                            <div id="HEADLINE336" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP15" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">5</h6> </div>
                        </div>
                    </div>
                    <div id="HEADLINE23" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">tư thế</h6> </div>
                    <div id="PARAGRAPH24" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Tập trung vào những vùng, bộ phận trên cơ thể chịu ảnh hưởng trực tiếp từ các chứng "bệnh công sở" như cổ tay, ngón tay, vai, cổ, cột sống, hệ tiêu hóa... giúp lưu thông khí huyết, giảm thiểu những cơn đau nhức, giải tỏa căng thẳng.</p>
                    </div>
                    <div id="BOX21" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH366" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Cung cấp giải pháp cho mọi vấn đề thường gặp của những người làm việc văn phòng, giúp học viên đạt được hiệu quả tối ưu trong việc cải thiện cả về thể chất và tinh thần.&nbsp;&nbsp;</p>
                    </div>
                    <div id="GROUP25" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX26" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP25" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="PARAGRAPH29" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP25" lp-display="block">
                                <p class="widget-content" lp-node="p">Giúp tăng năng lượng cho cơ thể, làm thư giãn, giải phóng tâm trí, loại bỏ lo âu, giảm quá trình lão hóa, tăng khả năng tập trung, giúp tinh thần trở nên lạc quan.</p>
                            </div>
                            <div id="HEADLINE28" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP25" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">bài tập thở</h6> </div>
                        </div>
                    </div>
                    <div id="HEADLINE41" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Cấu trúc bài giảng</h5> </div>
                    <div id="LINE42" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION88" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE90" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">ĐẶNG HÙNG&nbsp;&nbsp;</h5> </div>
                    <div id="PARAGRAPH91" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Ủy viên thường trực Hiệp hội Yoga trị liệu Châu Á.
                            <br>
                            <br>Hơn 20 năm nghiên cứu và thực hành Yoga.
                            <br>
                            <br>Trên 13 năm đào tạo giáo viên và chia sẻ Yoga trong nước và ngoài nước.
                            <br>
                            <br>Tốt nghiệp Viện Toán học Đại học Bách khoa Hà Nội.
                            <br>
                            <br>Năm 2012 đạt thành tích xuất sắc về dự án “Phát triển Yoga Việt Nam” do đại học Pháp ITIN tổ chức.
                            <br>
                            <br>Năm 2013 nhận bằng trị liệu cao cấp do Đại học trị liệu Yoga SVYASA (Ấn Độ) tổ chức.
                            <br>
                            <br>Năm 2014 đạt chứng nhận xuất săc về thiền định do Học viện thiền đinh Ấn Độ tổ chức.
                            <br>
                            <br>Năm 2016 được Sở Y tế Hà Tĩnh trao bằng khen về thành tích xuất sắc trong “kết hợp Yoga và phục hồi chức năng điều trị có hiệu quả cho người bệnh” tại Bệnh viện Đa khoa Hà Tĩnh.</p>
                    </div>
                    <div id="YOUTUBE89" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/bg5VV2Yj2Os?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE270" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Giám đốc Học viện Yoga Việt Nam</h5> </div>
                    <div id="HEADLINE342" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">GIẢNG VIÊN DẪN DẮT</h5> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION53" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE61" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">HỌC VIỆN YOGA VIỆT NAM<br><br></h5> </div>
                    <div id="PARAGRAPH57" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Thành lập ngày 1/10/2011, do thầy Đặng Hùng sáng lập. Trải qua hơn 6 năm xây dựng và trưởng thành, Học viện đã trở thành một tổ chức phi lợi nhuận hàng đầu Việt Nam chuyên nghiên cứu, đào tạo, trị liệu, phục vụ và hỗ trợ cộng đồng Yoga.&nbsp;
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>Hiện nay học viện đang là nơi đào tạo giáo viên Yoga uy tín hàng đầu cả nước, đã cấp chứng chỉ cho hơn 1000 học viên trên toàn quốc.&nbsp;</p>
                    </div>
                    <div id="YOUTUBE343" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/xkQunwvLIYE?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH344" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">"Nơi hội tụ tinh hoa Yoga Việt Nam"</p>
                    </div>
                    <div id="SHAPE70" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1792 1896.0833" fill="rgba(251,192,45,1)">
                            <path d="M1472 896q0-117-45.5-223.5t-123-184-184-123T896 320t-223.5 45.5-184 123-123 184T320 896t45.5 223.5 123 184 184 123T896 1472t223.5-45.5 184-123 123-184T1472 896zm276 277q-4 15-20 20l-292 96v306q0 16-13 26-15 10-29 4l-292-94-180 248q-10 13-26 13t-26-13l-180-248-292 94q-14 6-29-4-13-10-13-26v-306l-292-96q-16-5-20-20-5-17 4-29l180-248L48 648q-9-13-4-29 4-15 20-20l292-96V197q0-16 13-26 15-10 29-4l292 94L870 13q9-12 26-12t26 12l180 248 292-94q14-6 29 4 13 10 13 26v306l292 96q16 5 20 20 5 16-4 29l-180 248 180 248q9 12 4 29z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="LINE60" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION111" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="LINE113" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE118" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">ƯU ĐÃI ĐẶC BIỆT KHI MUA KHÓA HỌC NGAY HÔM NAY</h5> </div>
                    <div id="PARAGRAPH265" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">GIẢM GIÁ 50% cho 100 khách hàng đăng ký đầu tiên
                            <br color="" style="color: rgb(255, 255, 255);">
                            <br color="" style="color: rgb(255, 255, 255);">TẶNG NGAY ebook "2100 asanas" trọn bộ đầy đủ nhất những tư thế yoga cũng như các biến thể.
                            <br color="" style="color: rgb(255, 255, 255);">
                            <br color="" style="color: rgb(255, 255, 255);">MIỄN PHÍ chuyển phát trên toàn quốc</p>
                    </div>
                    <div id="SHAPE345" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1536 1896.0833" fill="rgba(251,192,45,1)">
                            <path d="M685 1299l614-614q19-19 19-45t-19-45l-102-102q-19-19-45-19t-45 19L640 960 429 749q-19-19-45-19t-45 19L237 851q-19 19-19 45t19 45l358 358q19 19 45 19t45-19zm851-883v960q0 119-84.5 203.5T1248 1664H288q-119 0-203.5-84.5T0 1376V416q0-119 84.5-203.5T288 128h960q119 0 203.5 84.5T1536 416z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE354" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1536 1896.0833" fill="rgba(251,192,45,1)">
                            <path d="M685 1299l614-614q19-19 19-45t-19-45l-102-102q-19-19-45-19t-45 19L640 960 429 749q-19-19-45-19t-45 19L237 851q-19 19-19 45t19 45l358 358q19 19 45 19t45-19zm851-883v960q0 119-84.5 203.5T1248 1664H288q-119 0-203.5-84.5T0 1376V416q0-119 84.5-203.5T288 128h960q119 0 203.5 84.5T1536 416z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE355" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1536 1896.0833" fill="rgba(251,192,45,1)">
                            <path d="M685 1299l614-614q19-19 19-45t-19-45l-102-102q-19-19-45-19t-45 19L640 960 429 749q-19-19-45-19t-45 19L237 851q-19 19-19 45t19 45l358 358q19 19 45 19t45-19zm851-883v960q0 119-84.5 203.5T1248 1664H288q-119 0-203.5-84.5T0 1376V416q0-119 84.5-203.5T288 128h960q119 0 203.5 84.5T1536 416z"></path>
                            </svg>
                        </div>
                    </div><a id="BUTTON356" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">&nbsp; CHỈ CÒN&nbsp;</span> </a>
                    <div id="BOX346" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE347" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">ĐĂNG KÝ MUA KHÓA HỌC</h4> </div>
                            <div id="FORM348" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-ss-f="[{&quot;name&quot;:&quot;select3&quot;,&quot;value&quot;:&quot;select3&quot;,&quot;$$hashKey&quot;:&quot;object:6831&quot;},{&quot;name&quot;:&quot;select2&quot;,&quot;value&quot;:&quot;select2&quot;,&quot;$$hashKey&quot;:&quot;object:6832&quot;},{&quot;name&quot;:&quot;select1&quot;,&quot;value&quot;:&quot;select1&quot;,&quot;$$hashKey&quot;:&quot;object:6833&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:6834&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:6835&quot;},{&quot;name&quot;:&quot;message&quot;,&quot;value&quot;:&quot;message&quot;,&quot;$$hashKey&quot;:&quot;object:6836&quot;},{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:6837&quot;}]" lp-display="block">
                                <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                <div id="ITEM_FORM349" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                    <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" lp-name-id="email" required="required">
                                </div>
                                <div id="ITEM_FORM350" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                    <input class="widget-content" type="tel" placeholder="Nhập Số điện thoại" name="phone" onblur="checkphone(this)" onkeydown="removecheckphone()" lp-label="Điện thoại" lp-name-id="phone" required="required">
                                </div>
                                <div id="ITEM_FORM351" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                    <textarea class="widget-content" type="text" placeholder="Địa chỉ" name="dia_chi" rows="4" lp-label="Lời nhắn" lp-name-id="message" required="required"></textarea>
                                </div>
                                <div id="ITEM_FORM352" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                    <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" lp-name-id="name" required="required">
                                </div>
                                <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                <button id="btn-353" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent"> MUA HÀNG </button>
                            </form>
                            </div><a id="BUTTON353" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM348" lp-display="table"><span class="widget-content">MUA HÀNG</span> </a></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX357" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP358" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="PARAGRAPH359" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP358" lp-display="block">
                                        <p class="widget-content" lp-node="p">Ngày</p>
                                    </div>
                                    <div id="PARAGRAPH360" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP358" lp-display="block">
                                        <p class="widget-content" lp-node="p">Giờ</p>
                                    </div>
                                    <div id="PARAGRAPH361" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP358" lp-display="block">
                                        <p class="widget-content" lp-node="p">Phút</p>
                                    </div>
                                    <div id="PARAGRAPH362" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP358" lp-display="block">
                                        <p class="widget-content" lp-node="p">Giây</p>
                                    </div>
                                </div>
                            </div>
                            <div id="COUNTDOWN363" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="1446" lp-endtimetype="timedown" lp-display="block">
                                <div class="widget-content">
                                    <div><span>1</span></div>
                                    <div><span>0</span></div>
                                    <div><span>6</span></div>
                                    <div><span>0</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE369" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h4 class="widget-content" lp-node="h4">295k</h4> </div>
                    <div id="HEADLINE364" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <p class="widget-content" lp-node="p">Chương trình ưu đãi có hạn. Nhanh tay đăng ký ngay!</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION231" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE232" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">LIÊN HỆ</h3> </div>
                    <div id="HEADLINE234" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">LIÊN HỆ</h5> </div>
                    <div id="GROUP235" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE236" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP235" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">ĐỊA CHỈ VĂN PHÒNG</h5> </div>
                            <div id="GROUP237" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP235">
                                <div class="widget-content">
                                    <div id="SHAPE238" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP237" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#000000">
                                            <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="PARAGRAPH239" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP237" lp-display="block">
                                        <p class="widget-content" lp-node="p">Địa chỉ: Số 10, ngõ 272, Ngọc Thụy, Long Biên, HN</p>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP243" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP235">
                                <div class="widget-content">
                                    <div id="SHAPE244" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP243" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#000000">
                                            <path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="PARAGRAPH245" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP243" lp-display="block">
                                        <p class="widget-content" lp-node="p">Email: info@hocvienyoga.vn</p>
                                    </div>
                                </div>
                            </div>
                            <div id="SHAPE241" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP235" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="#000000">
                                    <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="PARAGRAPH242" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP235" lp-display="block">
                                <p class="widget-content" lp-node="p">Hotline: 0976 989 355</p>
                            </div>
                        </div>
                    </div><a id="BUTTON257" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM258" lp-display="table"><span class="widget-content">Gửi đi</span> </a>
                    <div id="FORM258" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:6674&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:6675&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:6676&quot;}]" lp-display="block">
                       <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                        <div id="ITEM_FORM259" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                            <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                        </div>
                        <div id="ITEM_FORM260" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                            <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                        </div>
                        <div id="ITEM_FORM261" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                            <input class="widget-content" type="tel" placeholder="Nhập Số điện thoại" name="phone" onblur="checkphone(this)" onkeydown="removecheckphone()" lp-label="Điện thoại" required="required">
                        </div>
                        <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                        <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                        <button id="btn-257" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent"> MUA HÀNG </button>
                    </form>
                    </div>
                    <div id="HEADLINE271" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h4 class="widget-content" lp-node="h4">KẾT NỐI VỚI CHÚNG TÔI</h4> </div>
                    <div id="HEADLINE272" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">KẾT NỐI VỚI CHÚNG TÔI</h5> </div>
                    <div id="FACEBOOK_MESSAGES273" class="widget-element widget-snap" lp-type="facebook_messages" lp-lang="FACEBOOK_MESSAGES" lp-display="block">
                        <div class="widget-content fb-page" data-href="https://www.facebook.com/Yoga-Cho-T%C3%A2m-Tr%C3%AD-B%C3%ACnh-An-1756758664398515/" data-tabs="messages" data-width="265" data-height="210" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <script type="text/javascript" async="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1513153872988"></script>
        </div>
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
                                    $("#BUTTON303").click(function (e) {
                                        e.preventDefault();
                                        $("#btn-303").click();
                                    });
                                    $("#BUTTON353").click(function (e) {
                                        e.preventDefault();
                                        $("#btn-353").click();
                                    });
                                     $("#BUTTON257").click(function (e) {
                                        e.preventDefault();
                                        $("#btn-257").click();
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