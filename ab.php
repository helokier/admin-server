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
                    <div class="col-md-8">Quản lý danh mục</div>
                    <div class="col-md-4 text-right"><a href="adddm.php" class="btn btn-info"><svg class="glyph stroked plus sign">
                                <use xlink:href="#stroked-plus-sign"></use>
                            </svg> Thêm mới</a></div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr class="info">
                                    <th>ID</th>
                                    <th>Tên danh mục</th>
                                    <th>Parent ID</th>
                                    <th>Thứ tự</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                <?php
                                $items = 5;
                                $query = "SELECT * FROM catelogy";
                                $query_run = mysqli_query($con, $query);
                                $count = mysqli_num_rows($query_run);


                                $pages = ceil($count / $items);
                                $page = isset($_GET['page']) && $_GET['page'] >= 1 && $_GET['page'] <=  $items ? $_GET['page'] : 1;
                                $start = ($page * $items) - $items;

                                $sql = "SELECT * FROM catelogy  LIMIT   $start, $items";
                                $query_sql = mysqli_query($con, $sql) or die(mysqli_error($con));

                                while ($row = mysqli_fetch_array($query_sql)) {
                                    // $query = "SELECT * FROM catelogy";
                                    // $query_run = mysqli_query($con, $query);
                                    // if (mysqli_num_rows($query_run) > 0) {
                                    //     foreach ($query_run as $row) {
                                ?>
                                    <tr>
                                        <td><strong><?php echo $row['id']; ?></strong></td>
                                        <td><strong><?php echo $row['name']; ?></strong></td>
                                        <td><strong>
                                                <?php if ($row['parent_id'] == 1) {
                                                    echo "Thời trang";
                                                } else {
                                                    if ($row['parent_id'] == 2) {
                                                        echo "Quần áo gia đình";
                                                    } else {
                                                        if ($row['parent_id'] == 3) {
                                                            echo "Thời trang nữ";
                                                        } else {
                                                            if ($row['parent_id'] == 4) {
                                                                echo "Thời trang nam";
                                                            } else {
                                                                if ($row['parent_id'] == 5) {
                                                                    echo "Khuyến mại";
                                                                } else {
                                                                    if ($row['parent_id'] == 6) {
                                                                        echo "Bán chạy";
                                                                    } else {
                                                                        if ($row['parent_id'] == 7) {
                                                                            echo "Mới";
                                                                        } else {
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                } ?>

                                            </strong></td>
                                        <td><strong><?php echo $row['sort_order']; ?></strong></td>
                                        <td class="list_td aligncenter">
                                            <a href="editdm.php?catelogy_id= <?php echo $row['id']; ?>" title="Sửa" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                            <button class=" btn btn-danger btn-sm delete_dm" title="Xóa" value="<?php echo $row['id']; ?>"> <i class="fa fa-times"></i> </button>
                                        </td>
                                    </tr>

                                <?php

                                }
                                // }

                                ?>
                                <tr>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <nav aria-label="Page navigation" class="text-right">
                        <ul class="pagination">
                            <li><span aria-hidden="true"><a href="?page=<?= $page - 1; ?> " data-ci-pagination-page="2" rel="next" class="fa fa-backward"></a></span></li>
                            <?php
                            for ($i = 1; $i <= $pages; $i++) {
                                if ($page == $i) {
                            ?>
                                    <li class="active"><a href="?page=<?= $i; ?>"><?php echo $i; ?></a></li>
                                <?php
                                } else {
                                ?>
                                    <li class=""><a href="?page=<?= $i; ?>"><?php echo $i; ?></a></li>
                                <?php
                                }
                                ?>

                            <?php
                            }

                            ?>

                            <!-- <li><a href="#" data-ci-pagination-page="2">2</a></li>
                                    <li><a href="#" data-ci-pagination-page="3">3</a></li> -->
                            <li><span aria-hidden="true"><a href="?page=<?= $page + 1; ?> " data-ci-pagination-page="2" rel="next" class="fa fa-forward"></a></span></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Delete User -->
            <div class="modal fade" id="DeleteDM" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Bạn chắc chắn muốn xóa</h5>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="code.php">
                                <div class="motal-body">
                                    <!-- <input type="" name="delete_id" class="deletedm_id"> -->
                                </div>
                                <div class="motal-footer">
                                    <input type="hidden" name="deletedm_id" class="deletedm_id" value="<?= $row['id'] ?>">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Không</button>
                                    <button type="submit" class="btn btn-primary" name='DeleteDMbtn'>Có</button>
                                </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>