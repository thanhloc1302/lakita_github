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
        <title>HƯỚNG DẪN LẬP ĐỌC HIỂU VÀ PHÂN TÍCH CÁC CHỈ SỐ BÁO CÁO TÀI CHÍNH</title>
        <meta charset="UTF-8">
        <meta property="fb:admins" content="100001432238036"/>
        <meta property="fb:app_id" content="315347858825221" />
        <meta property="og:type"   content="website" /> 
        <meta property="og:url" content="<?php echo current_url(); ?>" />
        <meta property="og:title" content="Hướng dẫn lập, đọc hiểu và phân tích các chỉ số báo cáo tài chính" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/360x260/kt130-1498816492.jpg" />
        <meta property="og:description" content="Khóa học được thiết kế dành cho kế toán đi làm và máy tính có kết nối internet" />
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
        <?php $this->load->view('landingpage/kt130candh/css'); ?>
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
            <div id="SECTION34" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="LINE35" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE37" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">KHÓA HỌC ONLINE ĐỘC QUYỀN</h1> </div><a id="BUTTON52" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION169" lp-action-type="page" lp-target="" href=""><span class="widget-content">Đăng kí ngay</span> </a>
                    <div id="SHAPE245" class="widget-element widget-snap wow pulse animated" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1152 1896.0833" fill="rgba(255,152,0,1)">
                            <path d="M1075 864q0 13-10 23l-466 466q-10 10-23 10t-23-10L87 887q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23zm0-384q0 13-10 23L599 969q-10 10-23 10t-23-10L87 503q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="HEADLINE295" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3"></h3> </div>
                    <div id="HEADLINE296" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Ts. Hoàng Quang Trung</h3> </div>
                    <div id="LINEVERTICAL267" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="HEADLINE263" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h1 class="widget-content" lp-node="h1">HƯỚNG DẪN LẬP ĐỌC HIỂU VÀ PHÂN TÍCH&nbsp;<br>CÁC CHỈ SỐ BÁO CÁO TÀI CHÍNH</h1> </div>
                    <div id="BOX279" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX248" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block" lp-sticky="1" lp-sticky-pos="top" lp-sticky-kc="2px">
                        <div class="widget-content">
                            <div id="HEADLINE251" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION130" lp-action-type="page" lp-target="" href="">
                                <h3 class="widget-content" lp-node="h3">Giảng viên</h3> </div>
                            <div id="HEADLINE255" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION75" lp-action-type="page" lp-target="" href="">
                                <h3 class="widget-content" lp-node="h3">Nội dung</h3> </div>
                            <div id="HEADLINE250" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION226" lp-action-type="page" lp-target="" href="">
                                <h3 class="widget-content" lp-node="h3">Liên hệ</h3> </div><a id="BUTTON257" class="widget-element widget-snap style-1 ladi-drop wow bounceInRight animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION169" lp-action-type="page" lp-target="" href=""><span class="widget-content">Đăng ký ngay</span> </a>
                            <div id="IMAGE361" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block" lp-action-link="SECTION34" lp-action-type="page" lp-target="" href="">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/logo-1515293868.png"></div>
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
            <div id="SECTION54" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="SHAPE302" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,152,0,1)">
                            <path d="M2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12M17,12L12,7V10H8V14H12V17L17,12Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="GROUP333" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="GROUP325" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP333">
                                <div class="widget-content">
                                    <div id="BOX324" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP325" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE332" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                                <h2 class="widget-content" lp-node="h2">Bạn có muốn...</h2> </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP309" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP333">
                                <div class="widget-content">
                                    <div id="HEADLINE307" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP309" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">NẮM BẮT sự thay đổi chế độ kế toán và hạch toán đúng tài khoản, trình bày chính xác vào các chỉ tiêu trên Báo Cáo Tài Chính</h3> </div>
                                    <div id="SHAPE306" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP309" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP313" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP333">
                                <div class="widget-content">
                                    <div id="HEADLINE314" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP313" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">HIỂU sâu hơn về cách xem xét Báo Cáo Tài Chính để loại trừ bớt các rủi ro mà có thể dễ nhận thấy trên số liệu Báo Cáo Tài Chính</h3> </div>
                                    <div id="SHAPE315" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP313" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="GROUP316" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP333">
                                <div class="widget-content">
                                    <div id="SHAPE312" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP316" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="HEADLINE311" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP316" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">HẾT LO LẮNG và hoài nghi về trình bày Báo Cáo Tài Chính</h3> </div>
                                </div>
                            </div>
                            <div id="GROUP317" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP333">
                                <div class="widget-content">
                                    <div id="SHAPE318" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP317" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="HEADLINE319" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP317" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">&nbsp;KIỂM SOÁT khả năng bị truy thu thuế và phạt sau khi nộp Báo Cáo Tài Chính</h3> </div>
                                </div>
                            </div>
                            <div id="GROUP320" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP333">
                                <div class="widget-content">
                                    <div id="SHAPE321" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP320" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="HEADLINE322" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP320" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">HIỂU được các nhóm chỉ số phân tích để có kế hoạch hành động cho kỳ tiếp theo</h3> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP335" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX298" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP335" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="GROUP61" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP335">
                                <div class="widget-content">
                                    <div id="SHAPE60" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP61" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,152,0,1)">
                                            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="HEADLINE58" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP61" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Kế toán thuế, kế toán trưởng</h3> </div>
                                </div>
                            </div>
                            <div id="GROUP62" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP335">
                                <div class="widget-content">
                                    <div id="SHAPE63" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP62" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,152,0,1)">
                                            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="HEADLINE64" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP62" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Kế toán quản trị có kinh nghiệm</h3> </div>
                                </div>
                            </div>
                            <div id="GROUP66" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP335">
                                <div class="widget-content">
                                    <div id="SHAPE67" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP66" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,152,0,1)">
                                            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div id="HEADLINE68" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP66" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Giám đốc doanh nghiệp</h3> </div>
                                </div>
                            </div><a id="BUTTON55" class="widget-element widget-snap style-1 ladi-drop wow fadeInLeft animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-group="GROUP335" lp-display="table"><span class="widget-content">Bạn là...</span> </a>
                            <div id="GROUP342" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP335">
                                <div class="widget-content">
                                    <div id="HEADLINE344" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP342" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Cán bộ làm hồ sơ năng lực tài chính để vay vốn, dự thầu</h3> </div>
                                    <div id="SHAPE345" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP342" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,152,0,1)">
                                            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION75" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP116" class="widget-element widget-snap widget-group wow slideInLeft animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-action-link="POPUP126" lp-action-type="popup" lp-target="" href="">
                        <div class="widget-content"></div>
                    </div>
                    <div id="HEADLINE76" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">NỘI DUNG KHÓA HỌC</h2> </div>
                    <div id="SHAPE77" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" version="1.0" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: inline-block;" fill="rgba(255,152,0,1)">
                            <path d="M30.394 4.005H1.604V5.07h2.133v19.193h11.73v2.666h-8.53v1.065H25.06V26.93h-8.53v-2.667h11.73V5.07h2.132V4.006zm-3.198 19.192H4.806V5.07h22.39v18.127z"></path>
                            <path d="M14.4 8.27H8.005v6.398h6.398V8.27zm-1.066 5.33H9.07V9.337h4.264V13.6zM16.533 13.6h7.464v1.067h-7.464V13.6zM16.533 8.27h7.464v1.066h-7.464V8.27zM16.533 10.935h7.464V12h-7.464v-1.065zM8.003 16.8h15.994v1.066H8.003V16.8zM8.003 19.998h15.994v1.066H8.003v-1.066z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="GROUP246" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-action-link="POPUP126" lp-action-type="popup" lp-target="" href="">
                        <div class="widget-content"></div>
                    </div>
                    <div id="GROUP97" class="widget-element widget-snap widget-group wow slideInLeft animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-action-link="POPUP122" lp-action-type="popup" lp-target="" href="">
                        <div class="widget-content"></div>
                    </div>
                    <div id="BOX102" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE103" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M17,9H7V7H17M17,13H7V11H17M14,17H7V15H14M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M19,3H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX99" class="widget-element widget-snap ladi-drop wow slideInLeft animated" lp-type="box" lp-lang="BOX" lp-display="block" lp-action-link="POPUP126" lp-action-type="popup" lp-target="" href="">
                        <div class="widget-content">
                            <div id="HEADLINE100" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Chuyên đề 2: Trình tự các bước lập Báo Cáo Tài Chính hợp lý</h6> </div>
                            <div id="HEADLINE101" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <p class="widget-content" lp-node="p">&nbsp;Các nguyên lý kế toán và cách lắp ghép số liệu vào các chỉ tiêu mẫu trên Báo Cáo Tài Chính</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX78" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE79" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                    <path d="M17,9H7V7H17M17,13H7V11H17M14,17H7V15H14M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M19,3H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX80" class="widget-element widget-snap ladi-drop wow slideInLeft animated" lp-type="box" lp-lang="BOX" lp-display="block" lp-action-link="POPUP122" lp-action-type="popup" lp-target="" href="">
                        <div class="widget-content">
                            <div id="HEADLINE82" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h6 class="widget-content" lp-node="h6">Chuyên đề 1: Những quy định mới trong trình bày Báo Cáo Tài Chính</h6> </div>
                            <div id="HEADLINE83" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <p class="widget-content" lp-node="p">Nắm bắt sự thay đổi chế độ kế toán và hạch toán đúng tài khoản
                                    <br>&nbsp;Cái nhìn bao quan toàn bộ bức tranh Trình bày Báo Cáo Tài Chính doanh nghiệp&nbsp;</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="GROUP346" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX106" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP346" lp-display="block">
                                <div class="widget-content">
                                    <div id="SHAPE107" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                            <path d="M17,9H7V7H17M17,13H7V11H17M14,17H7V15H14M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M19,3H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX108" class="widget-element widget-snap ladi-drop wow slideInLeft animated" lp-type="box" lp-lang="BOX" lp-group="GROUP346" lp-display="block" lp-action-link="POPUP353" lp-action-type="popup" lp-target="" href="">
                                <div class="widget-content">
                                    <div id="HEADLINE109" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Chuyên đề 3: Kỹ thuật phân tích báo cáo tài chính</h6> </div>
                                    <div id="HEADLINE110" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <p class="widget-content" lp-node="p">&nbsp;Mục đích cụ thể khi phân tích BCTC và những điều cần biết trước trong và sau khi phân tích BCTC</p>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP347" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX348" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP347" lp-display="block">
                                <div class="widget-content">
                                    <div id="SHAPE349" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                        <div class="widget-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                            <path d="M17,9H7V7H17M17,13H7V11H17M14,17H7V15H14M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M19,3H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX350" class="widget-element widget-snap ladi-drop wow slideInLeft animated" lp-type="box" lp-lang="BOX" lp-group="GROUP347" lp-display="block" lp-action-link="POPUP357" lp-action-type="popup" lp-target="" href="">
                                <div class="widget-content">
                                    <div id="HEADLINE351" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Chuyên đề 4: Tổng kết chuyên đề Lập và phân tích Báo Cáo Tài Chính</h6> </div>
                                    <div id="HEADLINE352" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <p class="widget-content" lp-node="p">Các vấn đề trọng yếu của Báo Cáo Tài Chính</p>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP357" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="LISTOP360" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li color="" style="color: rgb(255, 255, 255);">Quản trị sự thể hiện và tính toàn vẹn của việc lập và phân tích Báo Cáo Tài Chính</li>
                            <li color="" style="color: rgb(255, 255, 255);">Các vấn đề trọng yếu của Báo Cáo Tài Chính</li>
                        </ol>
                    </div>
                    <div id="BOX358" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE359" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Tổng kết chuyên đề Lập và phân tích Báo Cáo Tài Chính</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP353" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="BOX354" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE355" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Kỹ thuật phân tích báo cáo tài chính</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LISTOP356" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li color="" style="color: rgb(255, 255, 255);">&nbsp;Phân nhóm các chỉ tiêu phân tích</li>
                            <li color="" style="color: rgb(255, 255, 255);">Khi nào kết quả phân tích được đánh giá là tốt</li>
                            <li color="" style="color: rgb(255, 255, 255);">&nbsp;Kế hoạch hành động của bạn sau phân tích Báo Cáo Tài Chính</li>
                        </ol>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION130" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE131" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2"><span style="font-weight: bold;">TS.HOÀNG QUANG TRUNG</span></h2> </div>
                    <div id="LINE136" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="BOX137" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LISTOP138" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li color="" style="color: rgb(0, 0, 0);">Giảng viên Đại Học</li>
                            <li color="" style="color: rgb(0, 0, 0);">Giám đốc Công ty DV kế toán Việt Nam - VINAFAS&nbsp;</li>
                            <li color="" style="color: rgb(0, 0, 0);">Chuyên gia tư vấn và đào tạo quản lý tài chính các dự án của Bộ KH &amp;ĐT</li>
                            <li color="" style="color: rgb(0, 0, 0);">Chuyên gia hàng đầu trong lĩnh vực tư vấn thuế với hơn 15 năm kinh nghiệm chia&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sẻ và giảng dạy</li>
                            <li color="" style="color: rgb(0, 0, 0);">Thành viên hiệp hội kiểm toán, kế toán các nước ASEAN đã được bình chọn là 1&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; trong 50 chuyên gia tư vấn kế toán, thuế thành công nhất hiện nay</li>
                            <li color="" style="color: rgb(0, 0, 0);">Không dừng lại ở đó Hoàng Quang Trung còn giúp đỡ hàng nghìn các cá nhân,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; doanh nghiệp vượt qua được khủng hoảng kinh tế với những giải pháp ứng dụng&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; mang tính thực tế cho KẾ TOÁN</li>
                        </ol>
                    </div>
                    <div id="HEADLINE337" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Giảng viên:</h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION139" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="LINE140" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH141" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Chúng tôi nỗ lực mỗi ngày để mang đến cho các bạn những khóa học tốt nhất</h6> </div>
                    <div id="HEADLINE142" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">Cảm nhận học viên</h2> </div>
                    <div id="GROUP143" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX144" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP143" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE145" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Phạm Thị Hải</h6> </div>
                                    <div id="HEADLINE146" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Công ty TNHH SX TM DV Vĩnh Xuyên</h6> </div>
                                    <div id="PARAGRAPH147" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                        <p class="widget-content" lp-node="p">Buổi học nhiều ý nghĩa, giúp em học hỏi được nhiều kinh nghiệm thực tế giúp ích cho doanh nghiệp của mình.</p>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX148" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP143" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP149" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX150" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP149" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE151" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Nguyễn Thị Hồng Thắm</h6> </div>
                                    <div id="HEADLINE152" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Kế toán</h6> </div>
                                    <div id="PARAGRAPH153" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                        <p class="widget-content" lp-node="p">Khóa học này rất bổ ích với chúng tôi. Thầy Trung dạy rất cuốn hút, dễ hiểu, logic dễ nhớ và những vấn đề rất thiết thực với doanh nghiệp.</p>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX154" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP149" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP155" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX156" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP155" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE157" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Kế toán - Lê Chân, Hải Phòng</h6> </div>
                                    <div id="HEADLINE159" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h6 class="widget-content" lp-node="h6">Nguyễn Thị Minh Nguyệt</h6> </div>
                                    <div id="PARAGRAPH158" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                        <p class="widget-content" lp-node="p">Rất cảm ơn sự chia sẻ của TS Hoàng Quang Trung. Qua khóa học, tôi đã nắm bắt thêm rất nhiều thông tin bổ ích phục vụ cho công việc kế toán&nbsp;</p>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX160" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP155" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION169" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP259" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX186" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP259" lp-display="block">
                                <div class="widget-content">
                                    <div id="PARAGRAPH188" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                        <p class="widget-content" lp-node="p">* Chương trình áp dụng với khóa học đăng ký trước ngày <?php echo date('d/m/Y');?></p>
                                    </div>
                                    <div id="LINE187" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                        <div class="widget-content">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                    <div id="LINE189" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                        <div class="widget-content">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                    <div id="HEADLINE336" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3">Miễn phí giao hàng toàn quốc<br>Tiết kiệm một khoản không nhỏ cho bạn!</h3> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="FORM202" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google-sheet" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:11898&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:11899&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:11900&quot;},{&quot;name&quot;:&quot;message&quot;,&quot;value&quot;:&quot;message&quot;,&quot;$$hashKey&quot;:&quot;object:11901&quot;}]" lp-group="GROUP259" lp-display="block">
                                <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                    <div id="ITEM_FORM203" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" lp-name-id="name" required="required">
                                    </div>
                                    <div id="ITEM_FORM204" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" lp-name-id="email" required="required">
                                    </div>
                                    <div id="ITEM_FORM205" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại" lp-name-id="phone">
                                    </div>
                                    <div id="ITEM_FORM206" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <textarea class="widget-content" type="text" placeholder="Nhập địa chỉ" name="dia_chi" rows="4" lp-label="Lời nhắn" lp-name-id="message" required="required"></textarea>
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <button id="btn-207" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>

                                </form>
                            </div><a id="BUTTON207" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM202" lp-group="GROUP259" lp-display="table"><span class="widget-content">ĐĂNG KÝ NGAY</span> </a>
                            <div id="HEADLINE190" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP259" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">NHANH TAY LÊN!</h2> </div>
                            <div id="LINEVERTICAL192" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-group="GROUP259" lp-display="block">
                                <div class="widget-content">
                                    <div class="linevertical"></div>
                                </div>
                            </div>
                            <div id="HEADLINE172" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP259" lp-display="block">
                                <h2 class="widget-content" lp-node="h2">Ưu đãi đặc biệt</h2> </div>
                            <div id="SHAPE175" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP259" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1920 1896.0833" fill="rgba(191,34,0,1)">
                                    <path d="M448 448q0-53-37.5-90.5T320 320t-90.5 37.5T192 448t37.5 90.5T320 576t90.5-37.5T448 448zm1067 576q0 53-37 90l-491 492q-39 37-91 37-53 0-90-37L91 890q-38-37-64.5-101T0 672V256q0-52 38-90t90-38h416q53 0 117 26.5T763 219l715 714q37 39 37 91zm384 0q0 53-37 90l-491 492q-39 37-91 37-36 0-59-14t-53-45l470-470q37-37 37-90 0-52-37-91L923 219q-38-38-102-64.5T704 128h224q53 0 117 26.5t102 64.5l715 714q37 39 37 91z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="PARAGRAPH174" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP259" lp-display="block">
                                <p class="widget-content" lp-node="p"></p>
                            </div>
                            <div id="HEADLINE173" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP259" lp-display="block">
                                <h1 class="widget-content" lp-node="h1">295.000đ</h1> </div>
                            <div id="HEADLINE182" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP259" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">895.000đ</h5> </div>
                            <div id="LINE183" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP259" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE340" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3"></h3> </div>
                    <div id="HEADLINE341" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Đăng kí ngay trong hôm nay để là một trong những người may mắn nhận được khóa học "<span style="font-weight: bold; color: rgb(244, 67, 54);" color="">18 thủ thuật Excel</span>" dành cho dân văn phòng!</h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION226" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="LINE228" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="GROUP237" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE238" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP237" lp-display="block">
                                <p class="widget-content" lp-node="p">Địa chỉ: Tầng 7, tòa CT1 Skylight, 125D Minh Khai, HBT, Hà Nội
                                    <br>Hotline: 1900 636 195 - 04 7306 2468 - 0971 571 532
                                    <br>Email: cskh@lakita.vn</p>
                            </div>
                            <div id="IMAGE239" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-group="GROUP237" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/Logo-xin-1514260351.png"></div>
                                    <div class="lp-show-image"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="SHAPE240" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1664 1896.0833" fill="rgba(255,255,255,1)">
                            <path d="M1408 992v480q0 26-19 45t-45 19H960v-384H704v384H320q-26 0-45-19t-19-45V992q0-1 .5-3t.5-3l575-474 575 474q1 2 1 6zm223-69l-62 74q-8 9-21 11h-3q-13 0-21-7L832 424l-692 577q-12 8-24 7-13-2-21-11l-62-74q-8-10-7-23.5T37 878l719-599q32-26 76-26t76 26l244 204V288q0-14 9-23t23-9h192q14 0 23 9t9 23v408l219 182q10 8 11 21.5t-7 23.5z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE241" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1792 1896.0833" fill="rgba(255,255,255,1)">
                            <path d="M1664 1504V736q-32 36-69 66-268 206-426 338-51 43-83 67t-86.5 48.5T897 1280h-2q-48 0-102.5-24.5T706 1207t-83-67q-158-132-426-338-37-30-69-66v768q0 13 9.5 22.5t22.5 9.5h1472q13 0 22.5-9.5t9.5-22.5zm0-1051v-24.5l-.5-13-3-12.5-5.5-9-9-7.5-14-2.5H160q-13 0-22.5 9.5T128 416q0 168 147 284 193 152 401 317 6 5 35 29.5t46 37.5 44.5 31.5T852 1143t43 9h2q20 0 43-9t50.5-27.5 44.5-31.5 46-37.5 35-29.5q208-165 401-317 54-43 100.5-115.5T1664 453zm128-37v1088q0 66-47 113t-113 47H160q-66 0-113-47T0 1504V416q0-66 47-113t113-47h1472q66 0 113 47t47 113z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE242" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1408 1896.0833" fill="rgba(255,255,255,1)">
                            <path d="M1408 1240q0 27-10 70.5t-21 68.5q-21 50-122 106-94 51-186 51-27 0-52.5-3.5T959 1520t-47.5-14.5T856 1485t-49-18q-98-35-175-83-128-79-264.5-215.5T152 904q-48-77-83-175-3-9-18-49t-20.5-55.5T16 577 3.5 519.5 0 467q0-92 51-186 56-101 106-122 25-11 68.5-21t70.5-10q14 0 21 3 18 6 53 76 11 19 30 54t35 63.5 31 53.5q3 4 17.5 25t21.5 35.5 7 28.5q0 20-28.5 50t-62 55-62 53-28.5 46q0 9 5 22.5t8.5 20.5 14 24 11.5 19q76 137 174 235t235 174q2 1 19 11.5t24 14 20.5 8.5 22.5 5q18 0 46-28.5t53-62 55-62 50-28.5q14 0 28.5 7t35.5 21.5 25 17.5q25 15 53.5 31t63.5 35 54 30q70 35 76 53 3 7 3 21z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP193" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-delay-show-popup-page="1" lp-display="block" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="BOX194" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE195" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Đăng kí ngay trong ngày hôm nay để nhận được nhiều khuyến mãi nhất</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="FORM196" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-display="block">
                        <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                            <div id="ITEM_FORM197" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                            </div>
                            <div id="ITEM_FORM198" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                            </div>
                            <div id="ITEM_FORM199" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                            </div>
                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                            <button id="btn-200" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>

                        </form>
                    </div><a id="BUTTON200" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM196" lp-display="table"><span class="widget-content">HOÀN TẤT ĐĂNG KÝ</span> </a>
                    <div id="PARAGRAPH201" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">This is a paragraph. Click here to add / edit your own text. This should be used to tell a story and let your users know a little more about your product or service. How can you benefit them?</p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP126" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" lp-ani="wow fadeIn animated" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="BOX127" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE128" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Trình tự các bước&nbsp;lập Báo Cáo Tài Chính<br>hợp lý</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LISTOP129" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li color="" style="color: rgb(255, 255, 255);">Bảng cân đối tài khoản</li>
                            <li color="" style="color: rgb(255, 255, 255);">&nbsp;Cáo cáo kết quả kinh doanh</li>
                            <li color="" style="color: rgb(255, 255, 255);">Bảng cân đối kế toán</li>
                            <li color="" style="color: rgb(255, 255, 255);">Báo cáo lưu chuyển tiền tệ</li>
                            <li color="" style="color: rgb(255, 255, 255);">Thuyết Minh Báo Cáo Tài Chính</li>
                        </ol>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP122" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" lp-ani="wow fadeIn animated" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="BOX123" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE124" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Những quy định mới trong trình bày Báo Cáo Tài Chính</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LISTOP125" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li color="" style="color: rgb(255, 255, 255);">Chính sách chế độ kế toán liên quan đến lập Báo Cáo Tài Chính</li>
                            <li color="" style="color: rgb(255, 255, 255);">&nbsp;Các vấn đề khiến cho kế toán bị thất bại khi lập Báo Cáo Tài Chính và DN bị truy thu thuế vượt sức tưởng tượng</li>
                            <li color="" style="color: rgb(255, 255, 255);">Làm thế nào để nghĩa vụ nộp thuế trình bày trên BCTC&nbsp; không bị sai lệch quá lớn so với thực tế tại các kỳ thanh tra, quyết toán.</li>
                            <li color="" style="color: rgb(255, 255, 255);">&nbsp;Phương hướng trình bày Báo Cáo Tài Chính trong một số mục đích cụ thể</li>
                            <li color="" style="color: rgb(255, 255, 255);">Làm sao để khắc phục sự suy giảm niềm tin vào số liệu Báo Cáo Tài Chính</li>
                        </ol>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP118" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" lp-ani="wow fadeIn animated" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="BOX119" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE120" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">Tổng kết chuyên đề xác định chi phí hợp lý trong doanh nghiệp</h3> </div>
                    <div id="LISTOP121" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">
                            <li color="" style="color: rgb(255, 255, 255);">Tính hợp Lý và sự chặt chẽ</li>
                            <li color="" style="color: rgb(255, 255, 255);">Tính hợp Lệ và sự tuân thủ các quy tắc</li>
                            <li color="" style="color: rgb(255, 255, 255);">Tính hợp pháp và sự an toàn</li>
                            <li color="" style="color: rgb(255, 255, 255);">Tính tiết kiệm và thái độ người duyệt chi</li>
                            <li color="" style="color: rgb(255, 255, 255);">Tính nhân văn</li>
                        </ol>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP112" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div class="overlay-container-popup"></div>
                    <div id="BOX113" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE114" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3">Tiêu đề lớn cho nội dung</h3> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="LISTOP115" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
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
            <script type="text/javascript" async="" defer="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1515401898261"></script>
        </div>


        <!-- ******************** comment fb ********************************** -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="fb-comments" data-href="https://lakita.vn/bao-cao-tai-chinh-nang-cao-candh.html" 
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
                $("#BUTTON207").click(function (e) {
                    e.preventDefault();
                    $("#btn-207").click();
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