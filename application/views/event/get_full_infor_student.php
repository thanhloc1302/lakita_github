<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/datepicker.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>styles/v2.0/js/bootstrap-datepicker.js"></script>
<?php $this->load->view('home/navbar'); ?>
<div class="container" style="margin-top: 110px">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
            <form class="form-horizontal" action="event/get_full_infor_student" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Họ và tên :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="Họ và tên"  value="<?php
                        if ($student[0]['name'] != '') {
                            echo $student[0]['name'];
                        }
                        ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Giới tính :</label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" id="optionsRadios1" value="0"  <?php
                                if ($student[0]['gender'] == 0) {
                                    echo 'checked';
                                }
                                ?>>
                                Nam
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" id="optionsRadios2" value="1" <?php
                                if ($student[0]['gender'] == 1) {
                                    echo 'checked';
                                }
                                ?>>
                                Nữ                    
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Ngày sinh :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="birthday" name="birthday" data-date-format="dd-mm-yyyy" placeholder="Ngày sinh" required value="<?php if(!empty($student[0]['birthday'])){ echo date('d-m-Y',$student[0]['birthday']);} ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Điện thoại :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone" placeholder="Điện thoại" required value="<?php
                                if (!empty($student[0]['phone'])) {
                                    echo $student[0]['phone'];
                                }
                                ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Địa chỉ :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address" placeholder="Địa chỉ" required value="<?php
                                if (!empty($student[0]['address'])) {
                                    echo $student[0]['address'];
                                }
                                ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nghề nghiệp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="job" placeholder="Nghề nghiệp" required value="<?php
                        if (!empty($student[0]['job'])) {
                            echo $student[0]['job'];
                        }
                                ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Cập nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $('#birthday').datepicker();
    });
</script>