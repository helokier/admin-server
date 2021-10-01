<?php
session_start();
include('include/header.php');
include('include/footer.php');
include('config/db.php');
?>



<div id="sidebar-collapse" class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
    </div>
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">thành viên</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Sửa thông tin thành viên
                </div>
                <div class="panel-body">
                    <?php
                    if (isset($_GET['user_id'])) {
                        $user_id = $_GET['user_id'];
                        $querys = " SELECT * FROM admin WHERE id = '$user_id' LIMIT 1";
                        $query_run = mysqli_query($con, $querys);
                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $row) {
                    ?>
                                <form class="form-horizontal" method="POST" action="code.php">
                                    <input type="hidden" name="user_id" value="<?= $row['id'] ?>">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Họ tên</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="name" value="<?= $row['name']; ?>" class="form-control" id="inputEmail3" placeholder="" value="Vippro">
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-5">
                                            <input type="email" name="email" value="<?= $row['email'] ?>" class="form-control" id="inputEmail3" placeholder="" value="sanghk232@gmail.com">
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Mật khẩu</label>
                                        <div class="col-sm-5">
                                            <input type="password" name="passworld" value="<?= $row['passworld'] ?>" class="form-control" id="inputEmail3" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Nhập lại mật khẩu</label>
                                        <div class="col-sm-5">
                                            <input type="password" name="re_password" value="<?= $row['passworld'] ?>" class="form-control" id="inputEmail3" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Phân quyền</label>
                                        <div class="col-sm-5">
                                            <select class="form-control" name="level">
                                                <option>--- CHỌN ---</option>
                                                <option <?php if ($row['level'] == 0) {
                                                            echo 'selected';
                                                        } ?> value=0>ADMIN</option>
                                                <option <?php if ($row['level'] == 1) {
                                                            echo 'selected';
                                                        } ?> value=1>MOD</option>
                                                <option <?php if ($row['level'] == 2) {
                                                            echo 'selected';
                                                        } ?> value=2>USER</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-5">
                                            <button type="submit" class="btn btn-primary" name='btnUpdate'>Lưu thay đổi</button>
                                        </div>
                                    </div>
                                </form>
                    <?php
                            }
                        } else {
                            echo "<h4>No Record Found . !</h4>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>