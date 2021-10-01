<?php
session_start();
include('include/header.php');
include('include/footer.php');


?>

<div id="sidebar-collapse" class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
    </div>
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Quản trị viên</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Thêm quản trị viên
                </div>
                <div class="panel-body">
                    <?php
                    if (isset($_SESSION['status'])) {
                        echo "<h4>" . $_SESSION["status"] . "</h4>";
                        unset($_SESSION['status']);
                    }

                    ?>
                    <form class="form-horizontal" name="" method="POST" action="code.php">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Họ tên</label>
                            <div class="col-sm-5">
                                <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="" value="">
                            </div>
                            <div class="col-sm-4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-5">
                                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="" value="">
                            </div>
                            <div class="col-sm-4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Mật khẩu</label>
                            <div class="col-sm-5">
                                <input type="password" name="passworld" class="form-control" id="inputEmail3" placeholder="" value="">
                            </div>
                            <div class="col-sm-4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nhập lại mật khẩu</label>
                            <div class="col-sm-5">
                                <input type="password" name="re_password" class="form-control" id="inputEmail3" placeholder="" value="">
                            </div>
                            <div class="col-sm-4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Phân quyền</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="level">
                                    <option>--- CHỌN ---</option>
                                    <option value="0">ADMIN</option>
                                    <option value="1">MOD</option>
                                    <option value="2">USER</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-5">
                                <button type="submit" class="btn btn-primary" name='submitbtn'>Thêm mới</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>