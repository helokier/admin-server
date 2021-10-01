<?php
session_start();
include('include/header.php');
include('config/db.php');
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
            <li class="active">Danh mục</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Sửa danh mục
                </div>
                <div class="panel-body">
                    <?php
                    if (isset($_GET['catelogy_id'])) {
                        $catelogy_id = $_GET['catelogy_id'];
                        $querys = " SELECT * FROM catelogy WHERE id = '$catelogy_id' LIMIT 1";
                        $query_run = mysqli_query($con, $querys);
                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $row) {
                    ?>
                                <form class="form-horizontal" name="" method="POST" action="code.php">
                                    <input type="hidden" name="catelogy_id" value="<?= $row['id'] ?>">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Tên danh mục</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="namedm" value="<?= $row['name']; ?>" class="form-control" id="inputEmail3" placeholder="" value="">
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Mô tả</label>
                                        <div class="col-sm-5">
                                            <textarea class="form-control" rows="3" name="description" value="<?= $row['description']; ?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Danh mục cha</label>
                                        <div class="col-sm-5">
                                            <select class="form-control" name="parent_id">
                                                <option value=" 0">Menu gốc</option>
                                                <option <?php if ($row['parent_id'] == 1) {
                                                            echo 'selected';
                                                        } ?> value=1>Thời trang</option>
                                                <option <?php if ($row['parent_id'] == 2) {
                                                            echo 'selected';
                                                        } ?> value=2>Quần áo gia đình</option>
                                                <option <?php if ($row['parent_id'] == 3) {
                                                            echo 'selected';
                                                        } ?> value=3>Thời trang nữ</option>
                                                <option <?php if ($row['parent_id'] == 4) {
                                                            echo 'selected';
                                                        } ?> value=4>Thời trang nam</option>
                                                <option <?php if ($row['parent_id'] == 5) {
                                                            echo 'selected';
                                                        } ?> value=5>Khuyến mại</option>
                                                <option <?php if ($row['parent_id'] == 6) {
                                                            echo 'selected';
                                                        } ?> value=6>Bán chạy</option>
                                                <option <?php if ($row['parent_id'] == 7) {
                                                            echo 'selected';
                                                        } ?> value=7>Mới</option>
                                                <!-- <option value="1">&nbsp;&nbsp;&nbsp;Thời trang</option>
                                                <option value="2">&nbsp;&nbsp;&nbsp;Quần áo gia đình</option>
                                                <option value="3">&nbsp;&nbsp;&nbsp;Thời trang nữ</option>
                                                <option value="4">&nbsp;&nbsp;&nbsp;Thời trang nam</option>
                                                <option value="5">Khuyến mại</option>
                                                <option value="6">Bán chạy</option>
                                                <option value="7">Mới</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Thứ tự</label>
                                        <div class="col-sm-5">
                                            <select class="form-control" name="sort_order">
                                                    <option>--- CHỌN ---</option>
                                                    <option <?php if ($row['sort_order'] == 1) {
                                                                echo 'selected';
                                                            } ?> value=1>1</option>
                                                    <option <?php if ($row['sort_order'] == 2) {
                                                                echo 'selected';
                                                            } ?> value=2>2</option>
                                                    <option <?php if ($row['sort_order'] == 3) {
                                                                echo 'selected';
                                                            } ?> value=3>3</option>
                                                    <option <?php if ($row['sort_order'] == 4) {
                                                                echo 'selected';
                                                            } ?> value=4>4</option>
                                                    <option <?php if ($row['sort_order'] == 5) {
                                                                echo 'selected';
                                                            } ?> value=5>5</option>
                                                    <option <?php if ($row['sort_order'] == 6) {
                                                                echo 'selected';
                                                            } ?> value=6>6</option>
                                                    <option <?php if ($row['sort_order'] == 7) {
                                                                echo 'selected';
                                                            } ?> value=7>7</option>
                                                    <option <?php if ($row['sort_order'] == 8) {
                                                                echo 'selected';
                                                            } ?> value=8>8</option>
                                                    <option <?php if ($row['sort_order'] == 9) {
                                                                echo 'selected';
                                                            } ?> value=9>9</option>
                                                </select>
                                                <!-- <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-5">
                                            <button type="submit" class="btn btn-primary" name="btn_editdm">Cập Nhật</button>
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