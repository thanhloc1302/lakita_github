<?php $user_id = $this->session->userdata('user_id'); ?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand text-center" href="<?php echo base_url(); ?>"> <img
                    src="https://crm2.lakita.vn/style/img/logo5.png"
                    class="logo-navbar img-responsive"> </a>

            <!--Button đóng mở slide menu-->
            <button id="btn-menu-silde"><span></span><span></span><span></span></button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form action="<?php echo base_url('tim-kiem.html'); ?>" method="GET" class="navbar-form navbar-left">
                <div class="input-group search">
                    <input type="text" class="form-control" name="key_word" placeholder="Tìm kiếm các khóa học bạn quan tâm..."
                    <?php echo isset($_GET['key_word']) ? 'value="' . $_GET['key_word'] . '"' : '' ?>
                           />
                    <span class="input-group-btn">
                        <input class="btn btn-default" type="submit" value="Tìm kiếm"/>
                    </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">

                <li class="li-active dropdown-notification">
                    <span class="notification btn">
                        &nbsp;&nbsp;&nbsp;
                        <i class="fa fa-bell" aria-hidden="true"></i>
                        <?php if (isset($have_news)) { ?>
                            <input id="csrf_test_name_noti" type="hidden"
                                   name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                   value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <sup><span class="badge"> <?php echo $have_news; ?></span></sup>
                        <?php } ?>
                    </span>
                    <a href="<?php echo base_url(); ?>kich-hoat-khoa-hoc.html" class="navbar-btn btn active-khoa-hoc">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i> &nbsp; Kích hoạt khóa học
                    </a>
                    <div class="content-notification">
                        <?php
                        if (isset($noti)) {
                            foreach ($noti as $key1 => $value1) {
                                if ($value1['type'] == 'comment') {
                                    ?>

                                    <a href="<?php echo $value1['url']; ?>">
                                        <i class="fa fa-comments fa-5x" aria-hidden="true"></i>
                                        <?php
                                        foreach ($creator_infor as $key2 => $value2) {
                                            if ($value1['creator'] == $value2['id']) {
                                                $a = $value2['name'];
                                            }
                                            echo '&nbsp;&nbsp;&nbsp; ' . $a . ' đã trả lời bình luận của bạn ';
                                            echo date('H:i:s d/m/Y', $value1['time']);
                                        }
                                        ?>
                                    </a>
                                    <?php
                                } elseif ($value1['type'] == 'exercise') {
                                    ?>

                                    <a href="<?php echo $value1['url']; ?>">
                                        <i class="fa fa-book fa-5x" aria-hidden="true"></i>
                                        <?php
                                        echo '&nbsp;&nbsp;&nbsp; Giảng viên Lakita đã chữa bài tập của bạn ';
                                        echo date('H:i:s d/m/Y', $value1['time']);
                                        ?>
                                    </a>
                                    <?php
                                } elseif ($value1['type'] == 'invite') {
                                    ?>

                                    <a href="<?php echo $value1['url']; ?>">
                                        <i class="fa fa-gift fa-5x" aria-hidden="true"></i>
                                        <?php
                                        foreach ($creator_infor1 as $key2 => $value2) {
                                            if ($value1['creator'] == $value2['id']) {
                                                $b = $value2['name'];
                                            }

                                            echo '&nbsp;&nbsp;&nbsp; ' . $b . ' đã sử dụng mã giới thiệu của bạn';
                                            echo ' bạn được cộng ' . $value1['value'] . ' vào tài khoản ';
                                        }
                                        ?>
                                    </a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="<?php echo $value1['url']; ?>" style="width: 490px; height: auto; line-height: 22px; white-space: normal;">
                                        <i class="fa fa-newspaper-o fa-5x" aria-hidden="true"></i>
                                        <?php
                                        echo '&nbsp;&nbsp;&nbsp; [LAKITA.VN] Chương trình Tri ân khách hàng, Lakita gửi Tặng Miễn Phí 1 tháng học Yoga Online tại Lakita.vn (20/12-20/1).';
                                        echo date('H:i:s d/m/Y', $value1['time']);
                                        ?>
                                    </a>
                                    <?php
                                }
                            }
                        } else {
                            ?>
                            <a>Hiện tại không có thông báo mới để hiển thị</a>
                            <?php
                        }
                        ?>
                    </div>
                </li>
                <li>
                    <?php
                    if (!isset($user_id)) {
                        ?>
                        <a href="<?php echo base_url('dang-nhap.html'); ?>" class="btn navbar-btn button-login button-right white">
                            <i aria-hidden="true"></i>Đăng nhâp / Đăng ký
                        </a>
                        <?php
                    } else {
                        ?>
                    <li>
                        <div class="dropdown" style="height: 69px;">
                            <img class="img-avatar img-circle navbar-btn"
                                 src="<?php echo getUserPictureSrc($student); ?>"
                                 alt="">
                            <div class="navbar-text navbar-right" style="display: inline-block">
                                <span class="name">  <?php echo $student[0]['name']; ?>  </span>
                                <i class="fa fa-caret-down"></i>
                                <p class="my-class">Khóa học của tôi</p>
                            </div>
                            <div class="dropdown-content">
                                <a href="<?php echo base_url(); ?>khoa-hoc-cua-toi.html">
                                    <i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i> &nbsp;&nbsp;
                                    Khóa học của tôi
                                </a>
                                <a href="<?php echo base_url(); ?>kich-hoat-khoa-hoc.html">
                                    <i class="fa fa-compress fa-fw" aria-hidden="true"></i>
                                    &nbsp;&nbsp; Kích hoạt khóa học
                                </a>
                                <a href="<?php echo base_url(); ?>nap-tien-vao-tai-khoan.html">
                                    <i class="fa fa-usd fa-fw" aria-hidden="true"></i>
                                    &nbsp;&nbsp; Nạp tiền vào tài khoản
                                </a>
                                <a href="<?php echo base_url(); ?>thong-tin-tai-khoan.html">
                                    <i class="fa fa-user fa-fw" aria-hidden="true"></i>
                                    &nbsp;&nbsp;Tài khoản
                                </a>
                                <a href="student/logout">
                                    <i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>
                                    &nbsp;&nbsp;Đăng xuất
                                </a>
                            </div>
                        </div>
                    </li>
                <?php } ?>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>



<!--Các menu trên mobie-->
<div id="mySidenav" class="sidenav">
    <?php
    if (!isset($user_id)) {
        ?>
        <form action="<?php echo base_url('tim-kiem.html'); ?>" method="GET" class="navbar-form navbar-left">
            <div class="input-group search">
                <input type="text" class="form-control" name="key_word" placeholder="Tìm kiếm các khóa học bạn quan tâm..."
                <?php echo isset($_GET['key_word']) ? 'value="' . $_GET['key_word'] . '"' : '' ?>
                       />
                <span class="input-group-btn">
                    <input class="btn btn-default" type="submit" value="Tìm kiếm"/>
                </span>
            </div>
        </form>
        <hr>
        <a href="<?php echo base_url('dang-nhap.html'); ?>">
            <i class="fa fa-sign-in fa-fw" aria-hidden="true"></i>  &nbsp;&nbsp; Đăng nhâp
        </a>
        <hr>
        <a href="<?php echo base_url('dang-nhap.html'); ?>">
            <i class="fa fa-user-plus fa-fw" aria-hidden="true"></i>  &nbsp;&nbsp; Đăng ký
        </a>
        <hr>
        <a href="<?php echo base_url(); ?>kich-hoat-khoa-hoc.html">
            <i class="fa fa-compress fa-fw" aria-hidden="true"></i>
            &nbsp;&nbsp; Kích hoạt khóa học
        </a>
        <?php
    } else {
        ?>
        <div class="text-center">
            <img class="avatar-mobie img-circle text-center"
                 src="<?php echo getUserPictureSrc($student); ?>"
                 alt="">
            <p class="name-mobie"> <?php echo $student[0]['name']; ?> </p>
            <form action="<?php echo base_url('tim-kiem.html'); ?>" method="GET" class="navbar-form navbar-left">
                <div class="input-group search">
                    <input type="text" class="form-control" name="key_word" placeholder="Tìm kiếm các khóa học bạn quan tâm..."
                    <?php echo isset($_GET['key_word']) ? 'value="' . $_GET['key_word'] . '"' : '' ?>
                           />
                    <span class="input-group-btn">
                        <input class="btn btn-default" type="submit" value="Tìm kiếm"/>
                    </span>
                </div>
            </form>
        </div>
        <hr>
        <a href="<?php echo base_url(); ?>khoa-hoc-cua-toi.html">
            <i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i> &nbsp;&nbsp;
            Khóa học của tôi
        </a>
        <hr>
        <a href="<?php echo base_url(); ?>kich-hoat-khoa-hoc.html">
            <i class="fa fa-compress fa-fw" aria-hidden="true"></i>
            &nbsp;&nbsp; Kích hoạt khóa học
        </a>
        <hr>
        <a href="<?php echo base_url(); ?>nap-tien-vao-tai-khoan.html">
            <i class="fa fa-usd fa-fw" aria-hidden="true"></i>
            &nbsp;&nbsp; Nạp tiền vào tài khoản
        </a>
        <hr>
        <a href="<?php echo base_url(); ?>thong-tin-tai-khoan.html">
            <i class="fa fa-user fa-fw" aria-hidden="true"></i>
            &nbsp;&nbsp;Tài khoản
        </a>
        <hr>
        <a href="student/logout">
            <i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>
            &nbsp;&nbsp;Đăng xuất
        </a>
    <?php } ?>
</div><!--Kết thúc menu trên mobie-->


<div class="container-fluid"> <!--Body Content-->
    <!-- Set up your HTML -->
    <div>
        <div class="owl-carousel owl-theme slider">
            <div class="img-slider">
                <a href="https://lakita.vn/combo-qua-khung-dip-giang-sinh.html" target="_blank">
                    <picture>
                        <source srcset="styles/v2.0/img/banner/banner-tet-ipad.png" media="(max-width: 700px)">
                        <source srcset="styles/v2.0/img/banner/banner-tet-mobile.png" media="(max-width: 450px)">
                        <img srcset="styles/v2.0/img/banner/banner-tet.png">
                    </picture>
<!--                    <img class="img-rounded" src="styles/v2.0/img/banner/banner-tet.png"/>-->
                </a>
            </div>
            <div class="img-slider">
                <a href="<?php echo base_url('dich-vu-excel.html'); ?>" target="_blank">
                    <picture>
                        <source srcset="styles/v2.0/img/banner/dich-vu-excel-ipad.png" media="(max-width: 700px)">
                        <source srcset="styles/v2.0/img/banner/dich-vu-excel-mobile.png" media="(max-width: 450px)">
                        <img srcset="styles/v2.0/img/banner/dich-vu-excel.png">
                    </picture>
<!--                    <img class="img-rounded" src="styles/v2.0/img/banner/dich-vu-excel.png"/>-->
                </a>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>styles/v2.0/js/navbar.js?ver=<?php echo _VER_CACHED_ ?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>styles/v2.0/js/notification.js?ver=<?php echo _VER_CACHED_ ?>"></script>
