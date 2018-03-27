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
        <title> Khóa học quản trị tài chính kế toán dành cho các nhà quản lý </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="fb:admins" content="100004021107387"/>
        <meta property="fb:app_id" content="162078224495583" />
        <meta property="og:type"   content="website" /> 
        <meta property="og:url" content="<?php echo current_url(); ?>" />
        <meta property="og:title" content="Khóa học quản trị tài chính kế toán dành cho các nhà quản lý" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/360x260/ke-toan-giam-doc.png" />
        <meta property="og:description" content="Khóa học đào tạo kiến thức kiểm tra kế toán dành cho giám đốc doanh nghiệp" />

        <meta name="description" content="Hệ thống đào tạo trực tuyến lakita – Cùng bạn vươn xa Học Online qua Video bài giảng - Học Online thỏa thích mọi lúc, mọi nơi - Học trên mọi thiết bị - Học với giảng viên, chuyên gia hàng đầu trong lĩnh vực - Hóa đơn chứng từ - Làm chủ hóa đơn chứng từ" />
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
        <?php $this->load->view('landingpage/kt120candh/css'); ?>
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
            <div id="SECTION23" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="IMAGE28" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/26732576_924367494406122_1838958175_o-1515211058.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE29" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">KHÓA HỌC ĐỘC QUYỀN</h2> </div>
                    <div id="HEADLINE30" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Dành cho các nhà quản lý</h2> </div><a id="BUTTON31" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">TÌM HIỂU NGAY!</span> </a>
                    <div id="SHAPE33" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1152 1896.0833" fill="rgba(255,255,255,1)">
                            <path d="M1075 864q0 13-10 23l-466 466q-10 10-23 10t-23-10L87 887q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23zm0-384q0 13-10 23L599 969q-10 10-23 10t-23-10L87 503q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="LINE37" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="LINE38" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE27" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">QUẢN TRỊ TÀI CHÍNH KẾ TOÁN</h2> </div>
                    <div id="HEADLINE568" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Tiêu đề vừa</h3> </div>
                    <div id="IMAGE644" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="IMAGE645" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="IMAGE24" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="IMAGE648" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION184" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX185" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LINE187" class="widget-element widget-snap wow fadeInLeft animated" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE192" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">KHÓA HỌC NÀY CHÍNH LÀ NHỮNG GÌ CÁC NHÀ LÃNH ĐẠO CẦN ĐỂ "NUÔI SỐNG" ĐỨA CON CỦA MÌNH</h3> </div>
                    <div id="LINEVERTICAL202" class="widget-element widget-snap wow fadeInUp animated" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="LINEVERTICAL203" class="widget-element widget-snap wow fadeInDown animated" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="HEADLINE566" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Bạn có từng thắc mắc...</h3> </div>
                    <div id="HEADLINE567" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">•<span style="font-weight: bold;"> Trên 70% DN nhỏ và vừa</span> hi sinh trước sinh nhật năm thứ 5<br>• Năm 2016, tổng số DN tạm ngừng hoạt động, chờ giải thể và phá sản vào khoảng <span style="font-weight: bold;">73.000 DN</span><br>• Cứ <span style="font-weight: bold;">7 phút</span> lại có một Doanh Nghiệp "chết" !</h3> </div>
                    <div id="HEADLINE569" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Với vai trò...</h3> </div>
                    <div id="HEADLINE570" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Những con số ấy có làm bạn suy nghĩ?&nbsp;</h3> </div>
                    <div id="GROUP578" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE573" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP578" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">HIỂU ĐƯỢC</h3> </div>
                            <div id="LISTOP571" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-group="GROUP578" lp-display="block">
                                <ol class="widget-content">
                                    <li>Nguyên tắc giúp DN tồn tại, vai trò quyết định của giám đốc và những lỗ hổng trong quản lý</li>
                                    <li>Bản chất doanh thu và chi phí để có kế hoạch phù hợp</li>
                                    <li>Bản chất công việc kế toán để có Phương án hỗ trợ</li>
                                    <li>Những việc cần làm để bảo vệ số liệu BCTC thành công</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP579" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE575" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP579" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">GIẢM BỚT</h3> </div>
                            <div id="LISTOP574" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-group="GROUP579" lp-display="block">
                                <ol class="widget-content">
                                    <li>Sự đau đầu về vấn đề kế toán và những nỗi lo không đáng có</li>
                                    <li>Rủi ro về thuế</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP580" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE577" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP580" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">CÓ KHẢ NĂNG</h3> </div>
                            <div id="LISTOP576" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-group="GROUP580" lp-display="block">
                                <ol class="widget-content">
                                    <li>Đọc hiểu một số chỉ tiêu quan trọng của Báo cáo tài chính</li>
                                    <li>Kiểm tra công việc của kế toán và phát hiện sai sót</li>
                                    <li>Đưa ra được các ý kiến điều chỉnh chỉ tiêu để tối ưu hóa số liệu trình bày trên BCTC</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div id="YOUTUBE582" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/wFr29WttkfY?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="GROUP583" class="widget-element widget-snap widget-group wow bounceInLeft animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP188" class="widget-element widget-snap widget-group wow fadeInLeft animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP583">
                                <div class="widget-content">
                                    <div id="LINEVERTICAL189" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-group="GROUP188" lp-display="block">
                                        <div class="widget-content">
                                            <div class="linevertical"></div>
                                        </div>
                                    </div><a id="BUTTON190" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-group="GROUP188" lp-display="table"><span class="widget-content"> TRƯỞNG PHÒNG</span> </a></div>
                            </div>
                            <div id="GROUP196" class="widget-element widget-snap widget-group wow fadeInLeft animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP583">
                                <div class="widget-content">
                                    <div id="LINEVERTICAL197" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-group="GROUP196" lp-display="block">
                                        <div class="widget-content">
                                            <div class="linevertical"></div>
                                        </div>
                                    </div><a id="BUTTON198" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-group="GROUP196" lp-display="table"><span class="widget-content"> GIÁM ĐỐC DOANH NGHIỆP</span> </a></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP584" class="widget-element widget-snap widget-group wow bounceInRight animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP199" class="widget-element widget-snap widget-group wow fadeInLeft animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP584">
                                <div class="widget-content">
                                    <div id="LINEVERTICAL200" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-group="GROUP199" lp-display="block">
                                        <div class="widget-content">
                                            <div class="linevertical"></div>
                                        </div>
                                    </div><a id="BUTTON201" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-group="GROUP199" lp-display="table"><span class="widget-content"> NGƯỜI DỰ ĐỊNH THÀNH LẬP DOANH NGHIỆP</span> </a></div>
                            </div>
                            <div id="GROUP193" class="widget-element widget-snap widget-group wow fadeInLeft animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP584">
                                <div class="widget-content">
                                    <div id="LINEVERTICAL194" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-group="GROUP193" lp-display="block">
                                        <div class="widget-content">
                                            <div class="linevertical"></div>
                                        </div>
                                    </div><a id="BUTTON195" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-group="GROUP193" lp-display="table"><span class="widget-content"> NHÀ QUẢN LÝ</span> </a></div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE186" class="widget-element widget-snap wow fadeInLeft animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">TẠI SAO?</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION495" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX453" class="widget-element widget-snap ladi-drop wow slideInRight animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH456" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Tổng kết chuyên đề : Kế toán dành cho giám đốc và các nhà quản lý (Accounting for Leaders)</p>
                            </div>
                            <div id="HEADLINE459" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">CHUYÊN ĐỀ 7</h3> </div>
                            <div id="IMAGE630" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="IMAGE455" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="LINE631" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX601" class="widget-element widget-snap ladi-drop wow slideInLeft animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="IMAGE603" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="IMAGE605" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="LINE606" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="IMAGE512" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="http://www.rwth-aachen.de/global/show_picture.asp?mod=w%3D%26h%3D%26gray%3D%26neg%3D%26mirror%3D%26flip%3D%26rleft%3D%26rright%3D%26r180%3D%26crop%3D1%252C14%252C1021%252C587%26id%3Daaaaaaaaaaajjmm&amp;id=aaaaaaaaaaajjmm"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX589" class="widget-element widget-snap ladi-drop wow slideInLeft animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH590" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Tổng quan những Công việc kế toán phải làm trong năm, thời hạn nộp các loại báo cáo, tờ khai và sản phẩm sau cùng</p>
                            </div>
                            <div id="IMAGE591" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE592" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">CHUYÊN ĐỀ 4</h3> </div>
                            <div id="IMAGE593" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="LINE594" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX558" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH559" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Vấn đề pháp lý kinh doanh được thể hiện trong hoạt động của kế toán và các nhà quản lý</p>
                            </div>
                            <div id="IMAGE560" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE561" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">CHUYÊN ĐỀ 1</h3> </div>
                            <div id="IMAGE562" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX595" class="widget-element widget-snap ladi-drop wow slideInLeft animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="IMAGE597" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE598" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">CHUYÊN ĐỀ 5</h3> </div>
                            <div id="IMAGE599" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="LINE600" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="IMAGE506" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHKUWBwozuABcrtipV8zcK4N3PAjPKCfwy11-VBkPioJIVgUeh"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE502" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">NỘI DUNG CHI TIẾT</h2> </div>
                    <div id="BOX527" class="widget-element widget-snap ladi-drop wow slideInLeft animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="PARAGRAPH528" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Tổng quan về đầu vào, đầu ra của doanh nghiệp, tìm hiểu thế nào là mất cân đối và các nguy cơ, rủi ro về thuế, các hệ lụy</p>
                            </div>
                            <div id="IMAGE530" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE531" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">CHUYÊN ĐỀ 2</h3> </div>
                            <div id="IMAGE532" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="LINE545" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="GROUP610" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="LINE609" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP610" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div><a id="BUTTON523" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP160" lp-action-type="popup" lp-target="" href=""><span class="widget-content"> READ MORE</span> </a>
                    <div id="IMAGE524" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="http://study.com/cimages/course-image/clep-financial-accounting-course_129295_large.jpg"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX546" class="widget-element widget-snap ladi-drop wow slideInLeft animated" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="IMAGE548" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE549" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">CHUYÊN ĐỀ 3</h3> </div>
                            <div id="IMAGE550" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="LINE551" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="IMAGE498" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStjpoMbvNCq3wT8Rb8NvoSug3FDXnKQpqfTI7pR_3Y0nptVLUE"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div><a id="BUTTON501" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP164" lp-action-type="popup" lp-target="" href=""><span class="widget-content">XEM THÊM</span> </a>
                    <div id="PARAGRAPH504" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Một số gợi ý khi tuyển dụng và lựa chọn kế toán</p>
                    </div><a id="BUTTON505" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP168" lp-action-type="popup" lp-target="" href=""><span class="widget-content">XEM THÊM</span> </a>
                    <div id="IMAGE479" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://media-exp2.licdn.com/media-proxy/ext?w=800&amp;h=800&amp;hash=08EY%2FhkTsT4qVxKk004MwJpzzaY%3D&amp;ora=1%2CaFBCTXdkRmpGL2lvQUFBPQ%2CxAVta5g-0R6nlh8Tw1It6a2FowGz60oISIfYC2G8G2f1spyfNT-tdoDSeLClpEtOdSoImBJkcrG-GGGiSp61IvGpNJUC49GHbdOmX1cqfgUvgUBV79kqExJh5rDgCvnxPX8LgM9ZSw2eB4HtbGAyGgIbr-CfHLL-C20gnASvVfnXDc0ce6UyxYADy3hgnpzSTMVp2ZlZ3mRe9wi31ZPIOWo_zce-RmiWHUMnX2TGFc9T75WI_Rqkv2-Pzxn4gqKaK5C5JYkg4SC6qsbgQV61hy8xkmM71T9Nv9ImIA"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div><a id="BUTTON529" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP156" lp-action-type="popup" lp-target="" href=""><span class="widget-content"> XEM THÊM</span> </a>
                    <div id="IMAGE542" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://assets.entrepreneur.com/content/3x2/1300/20170814221038-GettyImages-645670208.jpeg"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div><a id="BUTTON641" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP156" lp-action-type="popup" lp-target="" href=""><span class="widget-content"> XEM THÊM</span> </a><a id="BUTTON642" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP156" lp-action-type="popup" lp-target="" href=""><span class="widget-content">XEM THÊM</span> </a>
                    <div id="IMAGE465" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="http://study.com/cimages/course-image/clep-financial-accounting-course_129295_large.jpg"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH547" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Các chi phí được trừ và không được trừ khi tính thuế TNDN và ảnh hưởng của nó đến các loại thuế khác</p>
                    </div>
                    <div id="IMAGE437" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStjpoMbvNCq3wT8Rb8NvoSug3FDXnKQpqfTI7pR_3Y0nptVLUE"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div><a id="BUTTON457" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP176" lp-action-type="popup" lp-target="" href=""><span class="widget-content">XEM THÊM</span> </a>
                    <div id="IMAGE651" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/student-849825_1920-1515227227.jpg"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH510" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Kiểm tra công việc của kế toán và cách phát hiện sai sót (người không có nghề đi kiểm tra người có nghề Kế toán)</p>
                    </div><a id="BUTTON511" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP172" lp-action-type="popup" lp-target="" href=""><span class="widget-content">XEM THÊM</span> </a>
                    <div id="HEADLINE513" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">CHUYÊN ĐỀ 6</h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION42" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="LINE50" class="widget-element widget-snap wow fadeInLeft animated" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="LINEVERTICAL47" class="widget-element widget-snap wow fadeInUp animated" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="BOX206" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LINEVERTICAL77" class="widget-element widget-snap wow fadeInDown animated" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="HEADLINE618" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Người đồng hành cùng các bạn trong suốt khóa học này<br>LÀ AI ?</h3> </div>
                    <div id="HEADLINE45" class="widget-element widget-snap wow fadeInLeft animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">GIẢNG VIÊN</h2> </div>
                    <div id="HEADLINE209" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <p class="widget-content" lp-node="p">Giảng viên Đại Học
                            <br>
                            <br>Giám đốc Công ty DV kế toán Việt Nam - VINAFAS
                            <br>&nbsp;
                            <br>Chuyên gia tư vấn và đào tạo quản lý tài chính các dự án của Bộ KH &amp;ĐT
                            <br>
                            <br>Chuyên gia hàng đầu trong lĩnh vực tư vấn thuế với hơn 15 năm kinh nghiệm chia sẻ và giảng dạy
                            <br>
                            <br>Thành viên hiệp hội kiểm toán, kế toán các nước ASEAN đã được bình chọn là 1 trong 50 chuyên gia tư vấn kế toán, thuế thành công nhất hiện nay
                            <br>
                            <br>Không dừng lại ở đó Hoàng Quang Trung còn giúp đỡ hàng nghìn các cá nhân, doanh nghiệp vượt qua được khủng hoảng kinh tế với những giải pháp ứng dụng mang tính thực tế cho KẾ TOÁN</p>
                    </div>
                    <div id="HEADLINE208" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Giảng viên</h6> </div>
                    <div id="HEADLINE207" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">TS. Hoàng Quang Trung</h2> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION689" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="PARAGRAPH690" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Chúng tôi nỗ lực mỗi ngày để mang đến cho khách hàng sản phẩm và dịch vụ tốt nhất</h6> </div>
                    <div id="HEADLINE691" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Ý kiến khách hàng</h2> </div>
                    <div id="GROUP721" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX232" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP721" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="PARAGRAPH715" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP721" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Kế toán</h6> </div>
                            <div id="LINE714" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP721" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="PARAGRAPH713" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP721" lp-display="block">
                                <p class="widget-content" lp-node="p">Khóa học này rất bổ ích với chúng tôi. Thầy Trung dạy rất cuốn hút, dễ hiểu, logic dễ nhớ và những vấn đề rất thiết thực với doanh nghiệp.</p>
                            </div>
                            <div id="GROUP706" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP721">
                                <div class="widget-content">
                                    <div id="SHAPE707" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP706" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,199,0,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE708" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP706" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,199,0,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE709" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP706" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,199,0,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE710" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP706" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,199,0,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE711" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP706" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="PARAGRAPH705" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP721" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Nguyễn Thị Hồng Thắm</h6> </div>
                        </div>
                    </div>
                    <div id="GROUP734" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP694" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP734">
                                <div class="widget-content">
                                    <div id="SHAPE695" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP694" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,199,0,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE696" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP694" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,199,0,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE697" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP694" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,199,0,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE698" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP694" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,199,0,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="SHAPE720" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP734" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,199,0,1)">
                                    <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="PARAGRAPH703" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP734" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Kế toán -&nbsp;<span style="font-weight: normal;">Công ty TNHH SX TM DV Vĩnh Xuyên</span></h6> </div>
                            <div id="LINE702" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP734" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="PARAGRAPH701" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP734" lp-display="block">
                                <p class="widget-content" lp-node="p">Buổi học nhiều ý nghĩa, giúp em học hỏi được nhiều kinh nghiệm thực tế giúp ích cho doanh nghiệp của mình.</p>
                            </div>
                            <div id="PARAGRAPH693" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP734" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Phạm Thị Hải</h6> </div>
                            <div id="BOX220" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP734" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP735" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP727" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP735">
                                <div class="widget-content">
                                    <div id="SHAPE728" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP727" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,199,0,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE729" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP727" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,199,0,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE730" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP727" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,199,0,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE731" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP727" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,199,0,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="SHAPE732" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP727" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP722" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP735">
                                <div class="widget-content">
                                    <div id="PARAGRAPH724" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP722" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Kế toán - <span style="font-weight: normal;">Lê Chân, Hải Phòng</span></h6> </div>
                                    <div id="LINE725" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP722" lp-display="block">
                                        <div class="widget-content">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                    <div id="PARAGRAPH726" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP722" lp-display="block">
                                        <p class="widget-content" lp-node="p">Rất cảm ơn sự chia sẻ của TS Hoàng Quang Trung. Qua khóa học, tôi đã nắm bắt thêm rất nhiều thông tin bổ ích phục vụ cho công việc kế toán&nbsp;</p>
                                    </div>
                                    <div id="PARAGRAPH733" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP722" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Nguyễn Thị Minh Nguyệt</h6> </div>
                                </div>
                            </div>
                            <div id="BOX244" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP735" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="YOUTUBE736" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/Wy6NdzKgPuY?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="YOUTUBE737" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/MCGUypa5cx4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="YOUTUBE738" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/oAit5IWP-Qk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION658" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX659" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE660" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">Nhanh tay lên!<br>Bạn muốn nhận được Ưu đãi tốt</h4> </div>
                            <div id="GROUP661" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content">
                                    <div id="GROUP662" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP661">
                                        <div class="widget-content">
                                            <div id="BOX663" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP662" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                            <div id="HEADLINE664" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP662" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">NGÀY</h6> </div>
                                            <div id="HEADLINE665" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP662" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">GIỜ</h6> </div>
                                            <div id="BOX666" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP662" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                            <div id="BOX667" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP662" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                            <div id="HEADLINE668" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP662" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">GIÂY</h6> </div>
                                            <div id="HEADLINE669" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP662" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">PHÚT</h6> </div>
                                            <div id="BOX670" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP662" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="COUNTDOWN671" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="78602" lp-endtimetype="timedown" lp-group="GROUP661" lp-display="block">
                                        <div class="widget-content">
                                            <div><span>54</span></div>
                                            <div><span>14</span></div>
                                            <div><span>2</span></div>
                                            <div><span>0</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP672" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                <div class="widget-content"><a id="BUTTON673" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM674" lp-group="GROUP672" lp-display="table"><span class="widget-content">ĐĂNG KÝ</span> </a>
                                    <div id="FORM674" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:5376&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:5377&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:5378&quot;},{&quot;name&quot;:&quot;street&quot;,&quot;value&quot;:&quot;street&quot;,&quot;$$hashKey&quot;:&quot;object:5438&quot;}]" lp-group="GROUP672" lp-display="block">
                                        <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                            <div id="ITEM_FORM675" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                            </div>
                                            <div id="ITEM_FORM676" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                                            </div>
                                            <div id="ITEM_FORM677" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                                            </div>
                                            <div id="ITEM_FORM685" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                                <input class="widget-content" type="text" placeholder="Nhập địa chỉ" name="dia_chi" lp-label="Địa chỉ" lp-name-id="street" required="required">
                                            </div>
                                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                            <button id="btn-673" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE686" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">chỉ còn</h3> </div>
                    <div id="HEADLINE680" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">1.200.000 VNĐ<br></h2> </div>
                    <div id="PARAGRAPH681" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Khuyến mại chỉ áp dụng với  khóa học được đăng kí trước ngày 14/02/2018</h6> </div>
                    <div id="HEADLINE687" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">545.000 VNĐ</h3> </div>
                    <div id="HEADLINE688" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">ƯU ĐÃI TỚI 54.58%&nbsp;</h2> </div>
                    <div id="PARAGRAPH335" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Sau khi đăng ký mua khóa học, bộ phận CSKH của Lakita sẽ liên hệ với bạn để xác nhận thông tin, 
                            nhân viên bưu điện sẽ giao khóa học tận nơi cho bạn, <span style="font-weight: bold;">MIỄN PHÍ SHIP TOÀN QUỐC</span>.<br color="" style="color: rgb(255, 255, 255);">&nbsp;Bạn chỉ phải trả tiền khi nhận được khóa học.</h6> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION353" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="IMAGE354" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/logo-1515293868.png"></div>
                            <div class="lp-show-image"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LINE355" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="GROUP367" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE368" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP367" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">LIÊN HỆ CHÚNG TÔI</h6> </div>
                            <div id="HEADLINE369" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP367" lp-display="block">
                                <p class="widget-content" lp-node="p">Email: cskh@lakita.vn
                                    <br>Hotline: 1900 636 195
                                    <br>Website: lakita.vn</p>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE358" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">ĐỊA CHỈ :<br>&nbsp;Tầng 7, tòa CT1 Skylight, 125D Minh Khai, &nbsp;Hai Bà Trưng, Hà Nội&nbsp;</h6> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP176" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" lp-ani="wow fadeIn animated" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="BOX177" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE178" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Chuyên đề 7</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH179" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">1. Tổng hợp lại các nội dung cốt lõi của khóa học
                            <br>
                            <br>2. Tính hợp Lý và sự chặt chẽ vè sự thể hiện của DN
                            <br>
                            <br>3. Thái độ và văn hóa kinh doanh của chủ doanh nghiệp
                            <br>
                            <br>4. Sự kết hợp giữa hoạt động quản trị với hoạt động kế toán
                            <br>
                            <br>5. Chuyện được và mất của doanh nhân khi không hiểu biết về kế toán</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP172" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" lp-ani="wow fadeIn animated" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="BOX173" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE174" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Chuyên đề 6</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH175" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Bằng những hiểu biết cơ bản sau khóa học, chủ doanh nghiệp phải biết kiểm tra các dung kế toán làm để loại trừ bớt các rủi ro có thể xảy ra. Thậm chí có thể nghĩ tới việc thuê DV kế toán kiểm toán đến hỗ trợ, đào tạo lại kế toán
                            <br>
                            <br>1.Kỹ thuật kiểm tra hóa đơn, chứng từ
                            <br>2.Kỹ thuật kê khai thuế GTGT
                            <br>3.Kỹ thuật kiểm tra sổ sách kế toán
                            <br>4.Kỹ thuật xem xét một số chỉ tiêu quan trọng trên BCTC
                            <br>5.Thiết lập hệ thống kiểm soát nội bộ trong công tác kế toán
                            <br>6. Mối quan hệ giữa bộ phận kế toán với các bộ phận chức năng</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP168" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" lp-ani="wow fadeIn animated" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="BOX169" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE170" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Chuyên đề 5</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH171" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Chủ doanh nghiệp phải phỏng vấn và lựa chọn kế toán phù hợp với yêu cầu công việc nhưng do không có hiểu sâu về kế toán thì làm sao biết được ứng viên này ra sao? có nên tuyển hay không? tổ chức bộ máy kế toán thế nào?
                            <br>
                            <br>1. Lựa chọn hồ sơ kế toán trước khi mời phỏng vấn
                            <br>2. Thiết kế test trắc nghiệm trước khi phỏng vấn
                            <br>3. Thiết kế Nội dung phỏng vấn
                            <br>4. Tìm người có chuyên môn kế toán hỗ trợ phỏng vấn
                            <br>5. Bố trí bộ máy nhân sự kế toán và đầu tư thiết bị phục vụ</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP164" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="BOX165" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE166" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Chuyên đề 4</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH167" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Chủ DN phải biết mình trả lương cho kế toán thì mình phải được nhận lại những thứ gì đó xứng đáng và đúng quy định của pháp luật
                            <br>
                            <br>1. Những việc kế toán phải làm trong 1 năm tài chính
                            <br>2. Những loại tờ khai, báo cáo phải nộp và hạn nộp trong năm
                            <br>3. Một số mức phạt do không nộp tờ khai, nộp chậm
                            <br>4. Các loại sổ sách kế toán, bảng biểu cần in, lưu trữ cuối năm</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP160" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" lp-ani="wow fadeIn animated" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="BOX161" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE162" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Chuyên đề 3</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH163" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Chủ Doanh nghiệp phải nắm được những thứ ảnh hưởng đến lợi ích kinh tế của mình, những nguy cơ có thể xảy ra nếu kế toán của mình yếu kém
                            <br>
                            <br>1. Các chi phí được trừ + tài khoản hạch toán
                            <br>2. Các chi phí không được trừ (DN phải tự chịu)+Tài khoản hạch toán
                            <br>3. Các vấn đề cần lưu ý kế toán khi hạch toán chi phí
                            <br>4.Các hoạt động của chủ DN cần có để giúp kế toán bảo vệ chi phí và không làm biến dạng doanh thu</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP156" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" lp-ani="wow fadeIn animated" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="BOX157" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE158" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Chuyên đề 1</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH159" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Chủ Doanh nghiệp phải định hình được công ty mình có bao nhiêu nhóm hoạt động tạo ra doanh thu để từ đó định hình về Chi phí tương ứng và xem xét tính cân đối
                            <br>
                            <br>1. Phân loại doanh thu và căn cứ xác định Doanh thu. Các tình huống có nguy cơ bị áp đặt tăng doanh thu chịu thuế. Tài khoản sử dụng để hạch toán
                            <br>2. Phân loại chi phí theo doanh thu và cách xác định chi phí. Tài khoản sử dụng để hạch toán
                            <br>3. Điểm hòa vốn và công thức tính thuế TNDN
                            <br>4. Các vấn đề thường dẫn đến sự mất cân đối đầu ra, đầu vào</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP152" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="BOX153" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE154" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Chuyên đề 1</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH155" class="widget-element widget-snap wow fadeIn animated" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Giám đốc mất bao quát tổng thể về mặt pháp lý đối với hoạt động SXKD của doanh nghiệp, các nghĩa vụ cơ bản để giúp doanh nghiệp tồn tại hợp pháp.
                            <br>
                            <br>1. Quy định về hồ sơ góp vốn và Phân chia lợi nhuận
                            <br>2. Pháp luật về thuế và kế toán
                            <br>3. Quy định về khóa mã số thuế, phong tỏa tài khoản, DN bỏ trốn
                            <br>4. Quy chế tài chính và các Quyết định hướng dẫn kế toán
                            <br>5. Tính chất của Các loại thuế đối với doanh nghiệp
                            <br>6. Một số nội dung cơ quan thuế sẽ đến làm việc tại doanh nghiệp trong các kỳ thanh tra, kiểm tra lại các Quyết toán thuế</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <script type="text/javascript" async="" defer="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1515579011604"></script>
        </div>


        <!-- ******************** comment fb ********************************** -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="fb-comments" data-href="https://lakita.vn/quan-tri-ke-toan-candh.html" 
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
                $("#BUTTON673").click(function (e) {
                    e.preventDefault();
                    $("#btn-673").click();
                });
                $("#BUTTON200").click(function (e) {
                    e.preventDefault();
                    $("#btn-200").click();
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