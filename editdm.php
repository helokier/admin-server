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
                        $querys = " SELECT * FROM catelogy WHERE id_catalog = '$catelogy_id' LIMIT 1";
                        $query_run = mysqli_query($con, $querys);
                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $row) {
                    ?>
                                <form class="form-horizontal" name="" method="POST" action="code.php">
                                    <input type="hidden" name="catelogy_id" value="<?= $row['id_catalog'] ?>">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Tên danh mục</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="namedm" value="<?= $row['name_dm']; ?>" class="form-control" id="inputEmail3" placeholder="" value="">
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Thứ tự</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="sort_order" value="<?= $row['sort_order']; ?>" class="form-control"  placeholder="" value="">
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