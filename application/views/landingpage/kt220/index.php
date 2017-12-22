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
        <title>KHÓA HỌC KẾ TOÁN CHO NGƯỜI MỚI BẮT ĐẦU</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="fb:admins" content="100001432238036"/>
        <meta property="fb:app_id" content="315347858825221" />
        <meta property="og:type"   content="website" /> 
        <meta property="og:url" content="https://lakita.vn/ke-toan-cho-nguoi-moi-bat-dau.html" />
        <meta property="og:title" content="KHÓA HỌC KẾ TOÁN CHO NGƯỜI MỚI BẮT ĐẦU - lakita.vn" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/360x260/5f09062860a4b078b885d98539897b3e-1513246709.jpg" />
        <meta property="og:description" content="Dành cho người muốn học kế toán từ đầu" />
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
        <?php $this->load->view('landingpage/kt220/css'); ?>
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
        <div id="SECTION499" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="IMAGE536" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/Logo__slogan_Lakita-1513671740.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="PARAGRAPH543" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                    <p class="widget-content" lp-node="p">Đăng ký ngay hôm nay để nhận được khuyến mãi 54.39% và tặng kèm khóa <span style="color: rgb(255, 152, 0);"><span style="font-weight: bold;">18 THỦ THUẬT EXCEL</span> </span>giá KHÔNG ĐỔI. Giá KM <span style="font-weight: bold; color: rgb(255, 0, 0);">545.000đ</span> (Giá gốc <span style="text-decoration-line: line-through;" class="lp-strikeThrough">1195k</span>)</p>
                </div>
                <div id="BOX575" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE576" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h1 class="widget-content" lp-node="h1">TỪ A ĐẾN Z KẾ TOÁN<br color="" style="color: rgb(255, 255, 255);">CHO NGƯỜI MỚI BẮT ĐẦU</h1> </div>
                <div id="GROUP586" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE587" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP586" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">BẠN ĐANG GẶP VẤN ĐỀ:</h2> </div>
                        <div id="PARAGRAPH591" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP586" lp-display="block">
                            <p class="widget-content" lp-node="p"></p>
                        </div>
                        <div id="HEADLINE593" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP586" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Muốn làm kế toán mà giờ không biết bắt đầu từ đâu</h5> </div>
                        <div id="HEADLINE598" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP586" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Sinh viên mới ra trường cần tổng hợp kiến thức kế toán</h5> </div>
                        <div id="HEADLINE640" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP586" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Loay hoay mỗi khi hạch toán định khoản với các nghiệp vụ phát sinh của doanh nghiệp</h5> </div>
                        <div id="HEADLINE641" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP586" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Học kế toán ra trường nhiều năm làm trái nghề giờ muốn làm công việc kế toán mà quên hết kiến thức</h5> </div>
                    </div>
                </div>
                <div id="BOX614" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="GROUP627" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                            <div class="widget-content"><a id="BUTTON628" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM629" lp-group="GROUP627" lp-display="table"><span class="widget-content">ĐĂNG KÝ NGAY</span> </a>
                                <div id="FORM629" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:7392&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:7393&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:7394&quot;}]" lp-group="GROUP627" lp-display="block">
                                    <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                        <div id="ITEM_FORM630" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                            <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                        </div>
                                        <div id="ITEM_FORM631" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                            <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                                        </div>
                                        <div id="ITEM_FORM632" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                            <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                                        </div>
                                        <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                            <button id="btn-628" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="IMAGE773" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/checked-1513741069.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="IMAGE774" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/checked-1513741069.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="IMAGE775" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/checked-1513741069.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="IMAGE776" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/checked-1513741069.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP1000" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="LISTOP1003" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Nhiệm vụ kế toán giá thành&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Tập hợp chi phí cho đối tượng tính giá&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Hạch toán kế toán trong phân hệ giá thành&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Tính giá thành ở DN xây dựng&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Tính giá thành ở DN sản xuất</li>
                        <li color="" style="color: rgb(255, 255, 255);">Tính giá thành ở DN dịch vụ&nbsp;</li>
                    </ol>
                </div>
                <div id="BOX1001" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE1002" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">CHƯƠNG VII: KẾ TOÁN GIÁ THÀNH&nbsp;</h3> </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION573" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX646" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE647" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">AI LÀ NGƯỜI PHÙ HỢP&nbsp;VỚI KHÓA HỌC</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX648" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE652" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">SINH VIÊN KẾ TOÁN MỚI RA TRƯỜNG</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX653" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE654" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">KẾ TOÁN ĐANG ĐI LÀM NHỮNG KHÔNG HIỂU BẢN CHẤT ĐỊNH KHOẢN HẠCH TOÁN</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX655" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE656" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">NGƯỜI KHÔNG CÓ KIẾN THỨC KẾ TOÁN MUỐN HỌC ĐỂ LÀM ĐƯỢC CÔNG VIÊC KẾ TOÁN</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX657" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE658" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">MUỐN HỆ THỐNG KIỆN THỨC KẾ TOÁN CĂN BẢN</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="IMAGE660" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/1-1513744095.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="IMAGE661" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/4-1513744150.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="IMAGE663" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/3-1513744093.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="IMAGE664" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/2-1513744146.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION744" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="LINE745" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="HEADLINE746" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h1 class="widget-content" lp-node="h1">Bạn sẽ bỏ lỡ điều gì trong khóa học</h1> </div>
                <div id="GROUP747" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="SHAPE748" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP747" lp-display="block">
                            <div class="widget-content">
                                <svg [removed]="" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="rgba(255,210,99,1)">
                                    <path d="M4 4v20h7v-2H6V6h12v1h2V4H4zm8 4v20h16V8H12zm2 2h12v16H14V10z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="HEADLINE749" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP747" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">thực hành trực tiếp trên phần mềm và file excel</h5> </div>
                        <div id="PARAGRAPH750" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP747" lp-display="block">
                            <p class="widget-content" lp-node="p"></p>
                        </div>
                        <div id="LINE751" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP747" lp-display="block">
                            <div class="widget-content">
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GROUP752" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE754" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP752" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">hiểu được bản chất hạch toán định khoản</h5> </div>
                        <div id="PARAGRAPH755" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP752" lp-display="block">
                            <p class="widget-content" lp-node="p">Định khoản không đơn giản chỉ là nợ có, học viên sau khi học xong khóa học hiểu được bản chất hạch toán để trong bất cứ tình huống phát sinh nghiệp vụ kinh tế doanh nghiệp đều có thể làm được</p>
                        </div>
                        <div id="LINE756" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP752" lp-display="block">
                            <div class="widget-content">
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GROUP757" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE759" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP757" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">luôn cập nhật các thông tư, chính sách mới nhất</h5> </div>
                        <div id="PARAGRAPH760" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP757" lp-display="block">
                            <p class="widget-content" lp-node="p">Khóa học luôn luôn được cập nhật các thông tư và chính sách mới nhất cho học viên với khóa học của mình mà không mất thêm bất kỳ CHI PHÍ nào để mua thêm khóa học khác</p>
                        </div>
                        <div id="LINE761" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP757" lp-display="block">
                            <div class="widget-content">
                                <div class="line"></div>
                            </div>
                        </div>
                        <div id="PARAGRAPH767" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP757" lp-display="block">
                            <p class="widget-content" lp-node="p">Được hướng dẫn tải phần mềm cài đặt và thao tác trên phần mềm kế toán đảm bảo học đi đôi thực hành</p>
                        </div>
                    </div>
                </div>
                <div id="GROUP762" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE764" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP762" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">đúc kết từ kinh nghiệm thực tế</h5> </div>
                        <div id="PARAGRAPH765" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP762" lp-display="block">
                            <p class="widget-content" lp-node="p">Đi kèm với các kiến thức là những kinh nghiệm thực tế trong quá trình làm việc của +500 kế toán trong quá trình làm việc và kinh nghiệm nhiều năm của giảng viên</p>
                        </div>
                        <div id="LINE766" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP762" lp-display="block">
                            <div class="widget-content">
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GROUP768" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE770" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP768" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">đội ngũ chuyên gia luôn sản sàng hỗ trợ</h5> </div>
                        <div id="PARAGRAPH771" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP768" lp-display="block">
                            <p class="widget-content" lp-node="p">Với +50 trợ giảng và giảng viên luôn sãn sãng hỗ trợ bạn thắc mắc về khóa học cũng như công việc của mình</p>
                        </div>
                        <div id="LINE772" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP768" lp-display="block">
                            <div class="widget-content">
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="SHAPE871" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                    <div class="widget-content">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1611.2499 1896.0833" fill="rgba(255,210,99,1)">
                            <path d="M1468 380q28 28 48 76t20 88v1152q0 40-28 68t-68 28H96q-40 0-68-28t-28-68V96q0-40 28-68T96 0h896q40 0 88 20t76 48zm-444-244v376h376q-10-29-22-41l-313-313q-12-12-41-22zm384 1528V640H992q-40 0-68-28t-28-68V128H128v1536h1280z"></path>
                        </svg>
                    </div>
                </div>
                <div id="SHAPE872" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                    <div class="widget-content">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,210,99,1)">
                            <path d="M22,18V22H18V19H15V16H12L9.74,13.74C9.19,13.91 8.61,14 8,14A6,6 0 0,1 2,8A6,6 0 0,1 8,2A6,6 0 0,1 14,8C14,8.61 13.91,9.19 13.74,9.74L22,18M7,5A2,2 0 0,0 5,7A2,2 0 0,0 7,9A2,2 0 0,0 9,7A2,2 0 0,0 7,5Z"></path>
                        </svg>
                    </div>
                </div>
                <div id="SHAPE873" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                    <div class="widget-content">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,210,99,1)">
                            <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"></path>
                        </svg>
                    </div>
                </div>
                <div id="SHAPE874" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                    <div class="widget-content">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,210,99,1)">
                            <path d="M13,13C11,13 7,14 7,16V18H19V16C19,14 15,13 13,13M19.62,13.16C20.45,13.88 21,14.82 21,16V18H24V16C24,14.46 21.63,13.5 19.62,13.16M13,11A3,3 0 0,0 16,8A3,3 0 0,0 13,5A3,3 0 0,0 10,8A3,3 0 0,0 13,11M18,11A3,3 0 0,0 21,8A3,3 0 0,0 18,5C17.68,5 17.37,5.05 17.08,5.14C17.65,5.95 18,6.94 18,8C18,9.06 17.65,10.04 17.08,10.85C17.37,10.95 17.68,11 18,11M8,10H5V7H3V10H0V12H3V15H5V12H8V10Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION613" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX781" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE782" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">AI SẼ LÀ NGƯỜI ĐỒNG HÀNH CÙNG BẠN</h2> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LINE783" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="HEADLINE785" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">THÔNG TIN GIẢNG VIÊN</h3> </div>
                <div id="IMAGE786" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/2-1513766663.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX787" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="PARAGRAPH790" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Kế toán trưởng công ty TNHH Emotive 100% vốn của Mỹ</p>
                        </div>
                        <div id="HEADLINE792" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Chứng chỉ kế toán quốc tế CAT/ACCA do Hiệp hội kế toán công chứng Anh Quốc Cấp bằng. Kế toán tổng hợp tại chi nhánh công ty TNHH thực phẩm và giải khát "Cánh diều xanh", thuộc tập đoàn IPP liên Thái Bình Dương</h5> </div>
                        <div id="SHAPE966" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,7,1)">
                                    <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE967" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,7,1)">
                                    <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE968" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,193,7,1)">
                                    <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE791" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h5 class="widget-content" lp-node="h5">04 năm kế toán tổng hợp và thuế Chuỗi nhà hàng ăn nhanh (BurgerKing, Pizza Domino, Gà Popeys, Dunkin Donut) thuộc tập đoàn Liên Thái Bình Dương (IPP group)</h5> </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP954" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="LISTOP957" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Giới thiệu khóa học Kế toán cho người mới vào nghề&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">PHƯƠNG TRÌNH CÂN ĐỐI KẾ TOÁN ( Phần 1)&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">PHƯƠNG TRÌNH CÂN ĐỐI KẾ TOÁN ( Phần 2)&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Kết cấu tài sản của DN&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Các nhóm tài khoản kế toán&nbsp;</li>
                    </ol>
                </div>
                <div id="LISTOP965" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">4 bước định khoản kế toán ( Phần 1 )&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">4 bước định khoản kế toán ( Phần 2 )</li>
                    </ol>
                </div>
                <div id="BOX955" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE956" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3"></h3> </div>
                        <div id="HEADLINE959" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">CHƯƠNG I : PHƯƠNG TRÌNH KẾ TOÁN CĂN BẢN</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION793" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX796" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="BOX800" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block" lp-action-link="POPUP978" lp-action-type="popup" lp-target="" href="">
                            <div class="widget-content">
                                <div id="HEADLINE801" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP973" lp-action-type="popup" lp-target="" href="">
                                    <h5 class="widget-content" lp-node="h5">CHƯƠNG II: KẾ TOÁN TiỀN VÀ THANH TOÁN TRONG DOANH NGHIỆP&nbsp;</h5> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX802" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block" lp-action-link="POPUP978" lp-action-type="popup" lp-target="" href="">
                            <div class="widget-content">
                                <div id="HEADLINE803" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">CHƯƠNG III: KẾ TOÁN MUA HÀNG HÓA, NGUYÊN VẬT LiỆU, DỊCH VỤ</h5> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX804" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block" lp-action-link="POPUP983" lp-action-type="popup" lp-target="" href="">
                            <div class="widget-content">
                                <div id="HEADLINE805" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">CHƯƠNG IV: KẾ TOÁN TÀI SẢN CỐ ĐỊNH</h5> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX808" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block" lp-action-link="POPUP996" lp-action-type="popup" lp-target="" href="">
                            <div class="widget-content">
                                <div id="HEADLINE809" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">CHƯƠNG VI: KẾ TOÁN TIỀN LƯƠNG VÀ CÁC KHOẢN TRÍCH THEO LƯƠNG&nbsp;</h5> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX810" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block" lp-action-link="POPUP1000" lp-action-type="popup" lp-target="" href="">
                            <div class="widget-content">
                                <div id="HEADLINE811" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">CHƯƠNG VII: KẾ TOÁN GIÁ THÀNH&nbsp;</h5> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX798" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                            <div class="widget-content">
                                <div id="HEADLINE799" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP954" lp-action-type="popup" lp-target="" href="">
                                    <h5 class="widget-content" lp-node="h5">CHƯƠNG I: PHƯƠNG TRÌNH KẾ TOÁN CƠ BẢN</h5> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX817" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE818" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h5 class="widget-content" lp-node="h5">NỘI DUNG KHÓA HỌC</h5> </div>
                <div id="BOX812" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block" lp-action-link="POPUP1004" lp-action-type="popup" lp-target="" href="">
                    <div class="widget-content">
                        <div id="HEADLINE813" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">CHƯƠNG VIII: KẾ TOÁN BÁN HÀNG VÀ TIÊU THỤ THÀNH PHẨM</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX814" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block" lp-action-link="POPUP1008" lp-action-type="popup" lp-target="" href="">
                    <div class="widget-content">
                        <div id="HEADLINE815" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">CHƯƠNG IX: KẾ TOÁN CÁC NGHIỆP VỤ CUỐI KỲ, KẾT CHUYỂN VÀ KHÓA SỔ KẾ TOÁN</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX806" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block" lp-action-link="POPUP988" lp-action-type="popup" lp-target="" href="">
                    <div class="widget-content">
                        <div id="HEADLINE807" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">CHƯƠNG V: KẾ TOÁN CÔNG CỤ DỤNG CỤ VÀ CHI PHÍ TRẢ TRƯỚC</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP1008" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="LISTOP1011" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Công việc cuối kỳ của kế toán tổng hợp&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Các tài khoản đặc biệt ( lưỡng tính, ghi âm ) khi khóa sổ kế toán&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thực hiện các bút toán kết chuyển cuối kỳ&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Minh họa bút toán kết chuyển cuối kỳ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thực hành tạo bút toán kết chuyển cuối kỳ trên phần mềm kế toán&nbsp;</li>
                    </ol>
                </div>
                <div id="BOX1009" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE1010" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG IX: KẾ TOÁN CÁC NGHIỆP VỤ CUỐI KỲ, KẾT CHUYỂN VÀ KHÓA SỔ KẾ TOÁN</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP1004" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="LISTOP1007" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Quy trình bán hàng và nhiệm vụ của kế toán bán hàng</li>
                        <li color="" style="color: rgb(255, 255, 255);">Ghi nhận doanh thu và giá vốn trong bán hàng</li>
                        <li color="" style="color: rgb(255, 255, 255);">Tính giá vốn hàng bán</li>
                        <li color="" style="color: rgb(255, 255, 255);">Các khoản chiết khấu trong bán hàng</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bán hàng thông qua đại lý bán đúng giá hưởng hoa hồng</li>
                    </ol>
                </div>
                <div id="BOX1005" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE1006" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG VIII: KẾ TOÁN BÁN HÀNG VÀ TIÊU THỤ THÀNH PHẨM</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP996" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="LISTOP999" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Kế toán tiền lương phải làm gì&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Phụ cấp phải đóng bảo hiểm - phụ cấp không phải đóng bảo hiểm trong tổng thu nhập của NLĐ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Lương cơ bản - Lương trên HĐLĐ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Tính lương cho người lao động&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Hach toan lương và các khoản trích theo lương ( P1)</li>
                        <li color="" style="color: rgb(255, 255, 255);">Hach toan lương và các khoản trích theo lương ( P2)</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thực hành bút toán tiền lương và các khoản trích theo lương ( Trên Excel - P1 )</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thực hành bút toán tiền lương và các khoản trích theo lương ( Trên Excel - P2)</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thực hành bút toán tiền lương và các khoản trích theo lương ( Trên Phần mềm - P1)</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thực hành bút toán tiền lương và các khoản trích theo lương ( Trên Phần mềm -P2 )</li>
                    </ol>
                </div>
                <div id="BOX997" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE998" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG VI: KẾ TOÁN TiỀN LƯƠNG VÀ CÁC KHOẢN TRÍCH THEO LƯƠNG&nbsp;</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP988" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX989" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE990" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG V: KẾ TOÁN CÔNG CỤ DỤNG CỤ VÀ CHI PHÍ TRẢ TRƯỚC</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP991" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Tổng quan về Kế toán CCDC và chi phí trả trước</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bảng phân bổ CCDC và Chi phí trả trước</li>
                        <li color="" style="color: rgb(255, 255, 255);">Hạch toán CCDC và Chi phí trả trước</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thực hành Kế toán CCDC và Chi phí trả trước ( Phần 1 )&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thực hành Kế toán CCDC và Chi phí trả trước ( Phần 2 )&nbsp;</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP983" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX984" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE985" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG IV: KẾ TOÁN TÀI SẢN CỐ ĐỊNH</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP986" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Kế toán tài sản cố định cần làm những gì&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Nghiệp vụ tăng tài sản cố định&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Khấu hao tài sản cố định</li>
                        <li color="" style="color: rgb(255, 255, 255);">Hướng dẫn và thực hành lập bảng trích khấu hao TSCĐ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Hạch toán bút toán khấu hao TSCĐ</li>
                    </ol>
                </div>
                <div id="LISTOP987" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Thực hành : Ghi tăng tài sản - lập bảng trich khấu hao - hạch toán khấu hao TSCĐ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thanh lý, nhượng bán tài sản cố định</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP978" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX979" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE980" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG III: KẾ TOÁN MUA HÀNG HÓA, NGUYÊN VẬT LIỆU, DỊCH VỤ&nbsp;</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP981" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Tổng quan về kế toán mua hàng hóa, nguyên vật liệu, công cụ dụng cụ&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Nguyên tắc xác định giá nhập kho&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thực hành tình huống tính giá nhập kho có chi phí&nbsp;&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Hạch toán mua hàng nhập kho - Không phát sinh phí nhập&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thực hành Hạch toán mua hàng nhập kho - Không phát sinh phí nhập ( trên phần mềm )&nbsp;&nbsp;</li>
                    </ol>
                </div>
                <div id="LISTOP982" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Hạch toán mua hàng nhập kho - Phát sinh phí nhập&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Hạch toán nhập mua Khi có Chiết khấu ( Thương mại và Thanh toán )&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thực hành nghiệp vụ mua hàng - thanh toán</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP973" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX974" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE975" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG II: KẾ TOÁN TIỀN VÀ THANH TOÁN TRONG DOANH NGHIỆP&nbsp;</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP976" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Tổng quan về kế toán vốn bằng tiền ở DN</li>
                        <li color="" style="color: rgb(255, 255, 255);">Nhiệm vụ và trách nhiệm của thủ quỹ và kế toán tiền mặt&amp; tiền gửi</li>
                        <li color="" style="color: rgb(255, 255, 255);">Sơ đồ hóa Quy trình kế toán tiền mặt và tiền gửi</li>
                        <li color="" style="color: rgb(255, 255, 255);">Hạch toán kế toán các nghiệp vụ tăng tiền ( Phần 1 )</li>
                        <li color="" style="color: rgb(255, 255, 255);">Hạch toán kế toán các nghiệp vụ tăng tiền ( Phần 2 )</li>
                    </ol>
                </div>
                <div id="LISTOP977" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Hạch toán kế toán các nghiệp vụ giảm tiền&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thực hành ( lập phiếu, hạch toán, lưu trữ ) phiếu thu trên phần mềm kế toán ( Phần 1 )&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Thực hành ( lập phiếu, hạch toán, lưu trữ ) phiếu thu trên phần mềm kế toán ( Phần 2 )&nbsp;</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION841" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="LINE842" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="PARAGRAPH843" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">Chúng tôi luôn nỗ lực mỗi ngày để mang đến cho&nbsp;<br color="" style="color: rgb(255, 255, 255);">khách hàng sản phẩm và dịch vụ tốt nhất!!!</h6> </div>
                <div id="HEADLINE844" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">KHÁCH HÀNG NÓI GÌ VỀ LAKITA</h2> </div>
                <div id="IMAGE865" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/laptop-full-1513826762.png"></div>
                        <div class="lp-show-image"></div>
                        <div id="YOUTUBE866" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                            <iframe class="widget-content" src="https://www.youtube.com/embed/oAit5IWP-Qk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div><a id="BUTTON868" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION893" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY</span> </a></div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION875" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="GROUP876" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="BOX877" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP876" lp-display="block">
                            <div class="widget-content">
                                <div id="SHAPE878" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(20,169,217,1)">
                                            <path d="M4.93,4.93C3.12,6.74 2,9.24 2,12C2,14.76 3.12,17.26 4.93,19.07L6.34,17.66C4.89,16.22 4,14.22 4,12C4,9.79 4.89,7.78 6.34,6.34L4.93,4.93M19.07,4.93L17.66,6.34C19.11,7.78 20,9.79 20,12C20,14.22 19.11,16.22 17.66,17.66L19.07,19.07C20.88,17.26 22,14.76 22,12C22,9.24 20.88,6.74 19.07,4.93M7.76,7.76C6.67,8.85 6,10.35 6,12C6,13.65 6.67,15.15 7.76,16.24L9.17,14.83C8.45,14.11 8,13.11 8,12C8,10.89 8.45,9.89 9.17,9.17L7.76,7.76M16.24,7.76L14.83,9.17C15.55,9.89 16,10.89 16,12C16,13.11 15.55,14.11 14.83,14.83L16.24,16.24C17.33,15.15 18,13.65 18,12C18,10.35 17.33,8.85 16.24,7.76M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="HEADLINE879" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP876" lp-display="block">
                            <h4 class="widget-content" lp-node="h4">HỌC MỌI LÚC MỌI NƠI</h4> </div>
                        <div id="HEADLINE880" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP876" lp-display="block">
                            <p class="widget-content" lp-node="p">Không cấn phải lọ mọ đến các trung tâm vì giờ đây bạn vẫn có thể học và tương tác với giảng viên trợ giảng bất cứ đâu</p>
                        </div>
                    </div>
                </div>
                <div id="GROUP881" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="BOX882" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP881" lp-display="block">
                            <div class="widget-content">
                                <div id="SHAPE883" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(20,169,217,1)">
                                            <path d="M19,19H5V5H15V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V11H19M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="HEADLINE884" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP881" lp-display="block">
                            <h4 class="widget-content" lp-node="h4">CAM KẾT CHẤT LƯỢNG</h4> </div>
                        <div id="HEADLINE885" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP881" lp-display="block">
                            <p class="widget-content" lp-node="p">Hoàn tiền 100% nếu không hài lòng về khóa học</p>
                        </div>
                    </div>
                </div>
                <div id="GROUP886" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE887" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP886" lp-display="block">
                            <p class="widget-content" lp-node="p">Thực hành trên các tài liệu thực tế tại các doanh nghiệp giúp bạn có cái nhìn thực tế về công việc kế toán của mình&nbsp;&nbsp;</p>
                        </div>
                        <div id="HEADLINE888" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP886" lp-display="block">
                            <h4 class="widget-content" lp-node="h4">TÀI LIỆU THỰC TẾ</h4> </div>
                        <div id="BOX889" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP886" lp-display="block">
                            <div class="widget-content">
                                <div id="SHAPE890" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(20,169,217,1)">
                                            <path d="M14,14H7V16H14M19,19H5V8H19M19,3H18V1H16V3H8V1H6V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M17,10H7V12H17V10Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                </div>
                <div id="HEADLINE892" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">LỢI ÍCH ĐI KÈM KHÓA HỌC TẠI LAKITA</h2> </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION893" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX894" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE895" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">1195.000Đ</h2> </div>
                        <div id="HEADLINE896" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">chỉ còn 545.000đ</h2> </div>
                        <div id="HEADLINE897" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h1 class="widget-content" lp-node="h1">ƯU ĐÃI 54,39%</h1> </div>
                        <div id="LINE898" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                            <div class="widget-content">
                                <div class="line"></div>
                            </div>
                        </div>
                        <div id="LINE899" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                            <div class="widget-content">
                                <div class="line"></div>
                            </div>
                        </div>
                        <div id="PARAGRAPH900" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Học online chỉ còn 545K khi đăng ký trước ngày 21/12/2017</h5> </div>
                        <div id="HEADLINE901" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">NHANH TAY LÊN !</h2> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="PARAGRAPH902" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">Sau khi đăng ký mua khóa học, bộ phận CSKH của LAKITA sẽ liên hệ với bạn để xác nhận thông tin, 
nhân viên bưu điện sẽ giao khóa học tận nơi cho bạn. Bạn chỉ phải trả tiền khi nhận được khóa học.</h6> </div>
                <div id="HEADLINE903" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">Thời gian ưu đãi cho khóa học</h2> </div>
                <div id="GROUP909" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="GROUP910" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP909">
                            <div class="widget-content">
                                <div id="BOX911" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP910" lp-display="block">
                                    <div class="widget-content">
                                        <div id="HEADLINE912" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h2 class="widget-content" lp-node="h2">Ngày</h2> </div>
                                    </div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                                <div id="BOX913" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP910" lp-display="block">
                                    <div class="widget-content">
                                        <div id="HEADLINE914" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h2 class="widget-content" lp-node="h2">Giờ</h2> </div>
                                    </div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                                <div id="BOX915" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP910" lp-display="block">
                                    <div class="widget-content">
                                        <div id="HEADLINE916" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h2 class="widget-content" lp-node="h2">Phút</h2> </div>
                                    </div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                                <div id="BOX917" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP910" lp-display="block">
                                    <div class="widget-content">
                                        <div id="HEADLINE918" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                            <h2 class="widget-content" lp-node="h2">Giây</h2> </div>
                                    </div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div id="COUNTDOWN919" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="34564" lp-endtimetype="timedown" lp-group="GROUP909" lp-display="block">
                            <div class="widget-content">
                                <div><span>24</span></div>
                                <div><span>0</span></div>
                                <div><span>4</span></div>
                                <div><span>0</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="FORM926" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google-sheet" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:7564&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:7565&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:7566&quot;},{&quot;name&quot;:&quot;message&quot;,&quot;value&quot;:&quot;message&quot;,&quot;$$hashKey&quot;:&quot;object:7567&quot;}]" lp-display="block">
                     <form class="widget-contentLeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                        <div id="ITEM_FORM927" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                            <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" lp-name-id="name" required="required">
                        </div>
                        <div id="ITEM_FORM928" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                            <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" lp-name-id="email" required="required">
                        </div>
                        <div id="ITEM_FORM929" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                            <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại" lp-name-id="phone">
                        </div>
                        <div id="ITEM_FORM930" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                            <textarea class="widget-content" type="text" placeholder="Địa chỉ" name="dia_chi" rows="4" lp-label="Lời nhắn" lp-name-id="message" required="required"></textarea>
                        </div>
                          <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                            <button id="btn-931" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt" style="color:transparent; background-color: transparent"> MUA HÀNG </button>
                                        
                    </form>
                </div><a id="BUTTON931" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM926" lp-display="table"><span class="widget-content">ĐĂNG KÝ</span> </a></div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <script type="text/javascript" async="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1513917780391"></script>
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
                $("#BUTTON628").click(function (e) {
                    e.preventDefault();
                    $("#btn-628").click();
                });
                $("#BUTTON931").click(function (e) {
                    e.preventDefault();
                    $("#btn-931").click();
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