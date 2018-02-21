<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/student.css?ver=<?php echo _VER_CACHED_ ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/style.bootstrap11.lakita.css?ver=<?php echo _VER_CACHED_ ?>" />
<script src="<?php echo base_url(); ?>styles/v2.0/js/student.min.js?ver=<?php echo _VER_CACHED_ ?>"></script>
<?php
if ($this->agent->is_mobile()) {
    $this->load->view('mobile/my_courses');
} else {
    ?>
    <div class="header">
        <?php $this->load->view('home/navbar'); ?>
    </div>
    <div class="clearfix"></div>
    <!--*********************************************************DUNG TT***********************************************-->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <aside class="left-sidebar">
                    <div class="all-side">
                        <div class="row side-row-1">
                            <button type="text"><strong>QUẢN LÝ GIAO DỊCH</strong></button>
                            <ul style="margin-left: 35px;">
                                <li class="active"><a href="khoa-hoc-cua-toi.html"><i class="fa fa-leanpub" aria-hidden="true"></i> &nbsp; <strong> Khóa học của tôi </strong> </a></li>
                                <hr>
                                <li><a href="dang-phat-trien.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> &nbsp;  Tiến độ học tập</a></li>
                                <hr>
                                <li><a href="bai-tap-luyen-tap.html"><i class="fa fa-leanpub" aria-hidden="true"></i> &nbsp; Bài tập luyện tập</a></li>
                                <hr>
                                <li><a href="thong-bao.html"><i class="fa fa-bell" aria-hidden="true"></i> &nbsp; Thông báo</a></li>
                                <hr>
                                <li><a href="nap-tien-vao-tai-khoan.html"><i class="fa fa-usd" aria-hidden="true"></i> &nbsp; Nạp tiền vào tài khoản</a></li>
                                <hr>
                                <li class="active_course" data-step="4" data-intro="Để tiến hành kích hoạt khóa học. bạn chọn nút <b>Kích hoạt khóa học</b> ở Menu bên tay trái màn hình."><a href="kich-hoat-khoa-hoc.html"><i class="fa fa-compress" aria-hidden="true"></i> &nbsp; Kích hoạt khóa học</a></li>
                                <hr>
                                <li><a href="dang-phat-trien.html"><i class="fa fa-list-alt" aria-hidden="true"></i> &nbsp; Đơn hàng của tôi</a></li>
                                <hr>
                                <li><a href="dang-phat-trien.html"><i class="fa fa-heart-o" aria-hidden="true"></i> &nbsp; Sản phẩm yêu thích</a></li>
                                <hr>
                                <li><a href="dang-phat-trien.html"><i class="fa fa-qrcode" aria-hidden="true"></i> &nbsp; Mã voucher (mã giảm giá)</a></li>
                                <hr>
                                <li><a href="dang-phat-trien.html"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;  Địa chỉ nhận hàng</a></li>
                            </ul>
                        </div>
                        <div class="row side-row-2">
                            <button type="text"><strong>QUẢN LÝ TÀI KHOẢN</strong></button>
                            <ul style="margin-left: 35px;">
                                <li style="height: 30px;" data-step="3" data-intro="Bạn có thể thay đổi mật khẩu và các thông ti cá nhân trong tài khoản học của bạn bằng cách vào <b>Thông tin tài khoản.</b> Điền thông tin cá nhân, cập nhật mật khẩu."><a href="thong-tin-tai-khoan.html"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;  Thông tin tài khoản</a></li>
                                <hr>
                                <li><a href="lich-su-thanh-toan.html"><i class="fa fa-list-alt" aria-hidden="true"></i> &nbsp; Lịch sử thanh toán</a></li>
                                <hr> 
                                <li><a href="dang-phat-trien.html"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; Quản lý bản tin (hộp thư)</a></li>
                                <hr>
                                <li><a href="dang-phat-trien.html"><i class="fa fa-weixin" aria-hidden="true"></i>&nbsp;  Hỏi đáp</a></li>
                                <hr>
                                <li><a href="student/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp; Thoát</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--                <div class="QC">
                                        <div class="row">
                                            <a ><img src="<?php echo base_url(); ?>styles/v2.0/dungtt/img/bootstrap/11/QC-2.png"></a>
                                        </div>
                                    </div>-->
                </aside>
            </div>
            <div class="col-md-9">
                <div class="alert alert-info" role="alert" style="font-family: roboto; font-size: 18px;"> 
                    <a href="https://lakita.vn/khoa-hoc-yoga-danh-cho-nguoi-lam-van-phong-783.html">
                        [LAKITA.VN] Chương trình Tri ân khách hàng, Lakita gửi Tặng Miễn Phí 2 tháng học Yoga Online tại Lakita.vn (20/12-20/02).
                    </a>
                </div>

                <section class="group1">
                    <p><a >Trang chủ</a> / <a > Quản lý giao dịch</a> / <a > Khóa học của tôi</a></p>
                    <h3 class="lakita"><i class="fa fa-leanpub" aria-hidden="true"></i> Khóa học của tôi (<?php echo count($courses); ?>)</h3>
                    <table class="table table-bordered" data-step="5" data-intro="Bạn chọn khóa học bạn muốn theo dõi bằng cách chọn vào <b>Ảnh</b> hoặc vào <b>Tên khóa học.</b>">
                        <thead>
                            <tr>
                                <th>Khóa học (<?php echo count($courses); ?>)</th>
                                <th style="width: 165px;" class="text-center">Hoàn thành bài giảng</th>
                                <th class="text-center">Danh mục khóa học
    <!--                                        <i class="fa fa-sort" aria-hidden="true"></i>-->
                                </th>
                                <th class="text-center">Xem thêm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($courses as $key => $value) {
                                if (isset($value['speaker'][0])) {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-5 paddingright0">
                                                    <a 
                                                        href="<?php echo base_url() . $value['slug'] . '-7' . $value['id'] . '.html'; ?>" 
                                                        title="<?php echo $value['name']; ?>">
                                                        <img alt="<?php echo $value['name']; ?>" src="<?php echo 'https://lakita.vn/' . $value['image']; ?>" class="lesson-thumnail" />
                                                    </a>
                                                </div>
                                                <div class="col-md-7 paddingleft0">
                                                    <p>               
                                                        <a 
                                                            href="<?php echo base_url() . $value['slug'] . '-7' . $value['id'] . '.html'; ?>" 
                                                            title="<?php echo $value['name']; ?>">
                                                            <strong>
                                                                <?php echo ($value['is_trial_learn'] == true) ? '[Học thử] ' . $value['name'] : (($value['trial_learn'] == 1) ? '[Trial] ' . $value['name'] : $value['name']); ?> 
                                                                <?php
                                                                if (isset($value['gift'])) {
                                                                    echo '<span style="color:red"> (quà tặng) </span>';
                                                                }
                                                                ?>
                                                            </strong>
                                                        </a>
                                                    </p>
                                                    <p>Giảng viên: <?php echo $value['speaker'][0]['name']; ?></p>
                                                    <p class="lakita">Tổng số <?php echo $value['total_video']; ?> bài học</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <strong>Hoàn thành <?php echo $value['count_all_learn']; ?> bài</strong>
            <!--                                                <p>Đạt lever: <span><b>5</b></span></p>
                                                <p>Điểm: <span><b>20</b></span></p>-->
                                            </div>
                                        </td>
                                        <td> <?php echo $value['group_course_name']; ?></td>
                                        <td class="gr1-td4">
                                            <p><?php echo $value['total_cmt']; ?> bình luận</p>
                                            <p>Tham gia: <?php echo date('d/m/Y', $value['date_join_course']); ?></p>
            <!--                                            <p>Hoàn thành 5 bài về nhà</p>-->
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
    <!--*********************************************************DUNG TT (hết)***********************************************-->
    <?php
}
