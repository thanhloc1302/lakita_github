<link type="text/css" rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/login_page.css" />

<div class="header">
    <div class="col-md-6 col-md-offset-1">
        <img class="logo" src="<?php echo base_url() ?>styles/v2.0/img/mobi/logo-header.png">
    </div>
    <div class="col-md-5">
        <div class="row">
            <form class="form-login">
                <div class="form-group col-md-4">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="login_email" name="email" placeholder=" nhập Email">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" id="login_password" placeholder="Nhập mật khẩu">
                </div>
                <div class="col-md-2">
                    <label for=""></label>
                    <button class="btn btn-success btn-login click_login" value="login">Đăng nhập</button>
                </div>   

            </form>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <a href="#">Quên mật khẩu ?</a>
        </div>
    </div>
</div>
<div class="row body">
    <div class="col-md-6 col-md-offset-1">
    </div>
    <div class="col-md-5">
        <div class="col-md-10 social-login padding0">
            <p> Hoặc đăng nhập bằng tài khoản sau: </p>
            <a href="<?php echo $facebook_login_url; ?>" class="my-btn bgfb"> <i class="fa fa-facebook" aria-hidden="true"></i> &nbsp; Facebook </a>
            <a id="customBtn2" class="my-btn bggg" href="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=125422840079-ars8uilref93d7jaic148nkqm41vao9u.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flakita.vn%2Fplugin%2Fgg.php&state&scope=email%20profile&approval_prompt=auto"> <i class="fa fa-google-plus" aria-hidden="true"></i> &nbsp; Google+ </a>
        </div>
        <div class="col-md-10 padding0"> 
            <h1>Tạo tài khoản mới</h1>
            <p>Miễn phí và sẽ luôn như vậy</p>
            <form class="form-register">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="signup_name" placeholder="Họ và tên">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="signup_email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="phone" class="form-control" name="phone" id="signup_phone" placeholder="Số điện thoại">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="signup_password" placeholder="Nhập mật khẩu">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="re_password" id="signup_repassword" placeholder="Nhập lại mật khẩu">
                </div>
            </form>
        </div>
        <div class="col-md-10 padding0">
            <p>Bằng cách nhấp vào Tạo tài khoản, bạn đồng ý với <a class="lakita" data-toggle="modal" href="#modal-terms"> Điều khoản & dịch vụ </a> của chúng tôi</p>
            <?php $this->load->view('home/terms'); ?>
        </div>
        <div class="col-md-12 padding0">
            <button class="btn btn-success click_login" value="signup">Tạo tài khoản</button>
        </div>
    </div>
</div>




<script src="<?php echo base_url(); ?>styles/v2.0/js/login.js"></script>
