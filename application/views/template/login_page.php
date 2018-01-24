<link type="text/css" rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/login_page.css?ver=<?php echo _VER_CACHED_ ?>" />
<link type="text/css" rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/introjs.css"/>
<script src="<?php echo base_url(); ?>styles/v2.0/js/intro.js"></script>
<div class="header row" style="font-family: roboto;">
    <div class="container">
        <div class="col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <a href="<?php echo base_url(); ?>">
                <img class="logo" src="https://crm2.lakita.vn/style/img/logo5.png">
            </a>
        </div>
        <div class="col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"  data-step="2" data-intro="Tại đây bạn điền <b>Email</b> và <b>Mật khẩu</b> được cấp sau đó ấn nút <b>ĐĂNG NHẬP</b>">
            <div class="row">
                <div class="form-login" >
                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        <label for="">Email</label>
                        <input type="text" class="form-control" id="login_email" name="email" placeholder="Nhập Email">
                    </div>
                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        <label for="">Mật khẩu</label>
                        <input type="password" class="form-control" id="login_password" placeholder="Nhập mật khẩu">
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 remember" data-step="3" data-intro="Lưu ý là nên tích vào phần <b>Ghi nhớ tài khoản</b> nếu bạn muốn các lần đăng nhập tới trên thiết bị này mình không cần điền email và mật khẩu nữa mà chỉ cần chọn Lakita.vn là được.">
                    <input type="checkbox" class="checkbox1" name="is_remember" id="is_remember" /><p> Ghi nhớ tài khoản</p>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12" data-step="4" data-intro="<b>Lưu ý:</b> Nếu bạn quên mật khẩu, bạn vào phần <b>Quên mật khẩu</b> điền email bạn sử dụng là tài khoản đăng nhập hệ thống và ấn <b>XÁC NHẬN</b>; Sau đó, bạn vào tài khoản email vừa điền để lấy lại mật khẩu theo các bước hướng dẫn trên web nhé">
                    <a href="#" id="fp">Quên mật khẩu ?</a>
                </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-login" >
                <div class="form-group padding0 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <button class="btn btn-success btn-login click_login" value="login">Đăng nhập</button>
                </div> 

            </div>

        </div>
    </div>
    <div class="row body" style="font-family: roboto;">
        <div class="col-md-5 col-md-offset-1 hidden-sm hidden-xs padding0">
            <img style="max-height: 510px" class="img img-responsive" src="<?php echo base_url(); ?>styles/v2.0/img/logo5.png">
        </div>
        <div class="col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <div class="register">
                <div class="col-md-8 col-xs-12 social-login padding0">
                    <p> Hoặc đăng nhập bằng tài khoản sau: </p>
                    <div class="col-md-6">
                        <a href="<?php echo $facebook_login_url; ?>" class="my-btn bgfb"> 
                            <i class="fa fa-facebook" aria-hidden="true"></i> &nbsp; Facebook </a>
                    </div>
                    <div class="col-md-6">
                        <a id="customBtn2" class="my-btn bggg" href="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=125422840079-ars8uilref93d7jaic148nkqm41vao9u.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flakita.vn%2Fplugin%2Fgg.php&state&scope=email%20profile&approval_prompt=auto"> 
                            <i class="fa fa-google-plus" aria-hidden="true"></i> &nbsp; Google+ </a>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-7 col-xs-12 padding0" data-step="1" data-intro="Nếu bạn chưa có tài khoản, mời bạn điền các thông tin vào phần đóng khu dưới đây và ấn <b>Tạo tài khoản</b>. Nếu đã có tài khoản rồi có thể bỏ qua bước này."> 
                    <div class="col-md-6 hidden-xs pull-right">
                        <button class="my-btn bgfb" style="width: 200px;background-color: #fbfb8a;border: solid 1px red; margin-top: 20px; margin-left: -25px;"><a id="flexi_form_start" class="" style="" href="javascript:void(0);"><img src="https://media.kyna.vn/img/tutorial.png"><b style="color: black"> &nbsp;Hướng Dẫn</b></a></button>
                    </div>
                    <div class="col-md-6 pull-left">
                        <h1 style="display: inline-block">Đăng ký</h1> 
                    </div>
                    <div class="col-md-12">
                        <div class="form-register" style="margin-left: -15px;margin-top: 10px;">
                            <div class="form-group col-md-12">
                                <input type="text" style="height: 40px;" class="form-control" name="name" id="signup_name" placeholder="Họ và tên">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" style="height: 40px;" class="form-control" name="email" id="signup_email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="phone" style="height: 40px;" class="form-control" name="phone" id="signup_phone" placeholder="Số điện thoại">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="password" style="height: 40px;" class="form-control" name="password" id="signup_password" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="password" style="height: 40px;" class="form-control" name="re_password" id="signup_repassword" placeholder="Nhập lại mật khẩu">
                            </div>
                        </div><br>
                    </div>
                    <div class="col-md-12 col-xs-12 padding0">
                        <p>Bằng cách nhấp vào Tạo tài khoản, bạn đồng ý với <a class="lakita" data-toggle="modal" href="#modal-terms" style="color: #2c944a"> Điều khoản & dịch vụ </a> của chúng tôi</p>
                        <?php $this->load->view('home/terms'); ?>
                    </div>
                    <div class="col-md-12 padding0">
                        <button class="btn btn-success click_login" value="signup">Tạo tài khoản</button>
                    </div>
                </div>
            </div>

            <div class="forgetPass" >
                <div class="col-md-10 padding0"> 
                    <div id="forgetPasswordHTML1">
                        <h1>Khôi phục mật khẩu</h1>
                        <p>Nhập email vào ô dưới đây để tiếp tục</p>
                        <div class="form-forgetPass">
                            <div class="form-group">
                                <input type="email" class="form-control" name="forgetPasswordEmail" id="forgetPasswordEmail" placeholder="Nhập email">
                            </div>

                        </div>
                        <div class="col-md-12 padding0">
                            <button class="btn btn-success" id="forgetPassBtn">Xác nhận</button>
                            <button class="btn btn-default" id="cancel">Hủy</button>
                        </div>
                    </div>
                    <div id="forgetPasswordHTML2">
                        <h1>Tạo mới mật khẩu</h1>
                        <p> <strong>Chú ý:</strong> Nhập mã xác nhận được gửi tới "<span id="email_forget_send" style="font-weight:bold;"> </span>". </p>
                        <p> Sau đó tiến hành tạo một mật khẩu mới để đăng nhập </p>
                        <div class="form-rePass">
                            <div class="form-group">
                                <input type="text" class="form-control" id="code_forget" name="code_forget" placeholder="Nhập mã xác nhận">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_forget" name="password_forget" placeholder="Nhập mật khẩu mới">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="re_password_forget" name="re_password_forget" placeholder="Nhập lại mật khẩu mới">
                            </div>
                        </div>
                        <div class="col-md-12 padding0">
                            <button class="btn btn-success" id="CreatePassBtn">Xác nhận</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script type="text/javascript">
        $('#flexi_form_start').click(function () {
            introJs().start().oncomplete(function () {
                //                        window.location.href = 'complete.html';
            }).onexit(function () {
                //                        window.location.href = 'complete.html';
            }).onbeforechange(function (targetElement) {
                $(".steps").hide();


                $(".left").css("float", "left");
                $("input").removeClass("error");
                $(".right").hide();



                switch ($(targetElement).attr("data-step")) {

                    case '2':
                        $(".flexi_form").hide();
                        $(targetElement).show();
                        break;
                    case '3':
                        $("input").addClass("error");
                        $(targetElement).show();
                        break;

                    case '4':
                        $(".left").css("float", "none");
                        $(targetElement).show();
                        break;

                    case '5':
                        $(".right").show();
                        $(targetElement).show();
                        break;

                    case '6':
                        $(targetElement).show();
                        break;
                }
            });
        });

    </script>
    <script src="<?php echo base_url(); ?>styles/v2.0/js/login_page.js?ver=<?php echo _VER_CACHED_ ?>"></script>
