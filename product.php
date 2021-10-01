<?php
session_start();
include('include/header.php');
include('config/db.php');
// require(__DIR__ . '/db.php');
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
            <li class="active">Sản phẩm</li>
        </ol>
    </div>
    <!--/.row-->
    <h3><span id="message"></span></h3>
    <div class="row">
        <div class="col-lg-12">
            <form action="" method="post">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="col-md-8">Quản lý sản phẩm</div>
                        <div class="col-md-4 text-right"><a href="addproduct.php" class="btn btn-info"><svg class="glyph stroked plus sign">
                                    <use xlink:href="#stroked-plus-sign"></use>
                                </svg> Thêm sản phẩm</a></div>
                    </div>
                    <div class="panel-body">
                        <form role="search " class="form-search">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="info">
                                        <th></th>
                                        <th class="text-center">ID</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Danh mục</th>
                                        <th>Giá</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    $items = 5;
                                    $query = "SELECT * FROM product";
                                    $query_run = mysqli_query($con, $query);
                                    $count = mysqli_num_rows($query_run);


                                    $pages = ceil($count / $items);
                                    $page = isset($_GET['page']) && $_GET['page'] >= 1 && $_GET['page'] <=  $items ? $_GET['page'] : 1;
                                    $start = ($page * $items) - $items;

                                    $sql = "SELECT * FROM product  LIMIT   $start, $items";
                                    $query_sql = mysqli_query($con, $sql) or die(mysqli_error($con));

                                    while ($row = mysqli_fetch_array($query_sql)) {
                                        // if ($count > 0) {

                                        //     foreach ($query_sql as $row) {
                                    ?>

                                        <tr>
                                            <td style="vertical-align: middle"><input type="checkbox" name="checkbox[]" value="29"></td>
                                            <td style="vertical-align: middle;text-align: center;"><strong><?php echo $row['id']; ?></strong></td>
                                            <td>
                                                <img src="<?php echo "uploads/product/" . $row['image_link']; ?>" alt="image" style="width: 90px;float:left;margin-right: 10px;">
                                                <!-- <img src="uploads/product/<?= $row['image_link']; ?>" alt="image" style="width: 90px;float:left;margin-right: 10px;"> -->


                                                <strong><?php echo $row['name']; ?></strong>
                                                <p style="font-size: 12px;margin-top: 4px;">View: 23 <span> | Đã bán :1</span></p>
                                            </td>
                                            <td style="vertical-align: middle"> <?php if ($row['catalog_id'] == 1) {
                                                                                    echo "Thời trang";
                                                                                } else {
                                                                                    if ($row['catalog_id'] == 2) {
                                                                                        echo "Quần áo gia đình";
                                                                                    } else {
                                                                                        if ($row['catalog_id'] == 3) {
                                                                                            echo "Thời trang nữ";
                                                                                        } else {
                                                                                            if ($row['catalog_id'] == 4) {
                                                                                                echo "Thời trang nam";
                                                                                            } else {
                                                                                                if ($row['catalog_id'] == 5) {
                                                                                                    echo "Khuyến mại";
                                                                                                } else {
                                                                                                    if ($row['catalog_id'] == 6) {
                                                                                                        echo "Bán chạy";
                                                                                                    } else {
                                                                                                        if ($row['catalog_id'] == 7) {
                                                                                                            echo "Mới";
                                                                                                        } else {
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                } ?></strong></td>
                                            <td style="vertical-align: middle">
                                                <strong><?php echo $row['discount']; ?> VNĐ</strong><br><del><?php echo $row['price']; ?> VNĐ</del>

                                            </td>
                                            <td class="list_td aligncenter">
                                                <a href="editproduct.php?product_id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm" title="Sửa"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                                <button type="button" value="<?php echo $row['id']; ?>" class=" btn btn-danger btn-sm deleteb" title="Xóa"> <i class="fa fa-times"></i> </button>
                                            </td>
                                        </tr>

                                    <?php
                                    }
                                    //     }
                                    // }




                                    ?>

                                </tbody>

                            </table>
                            <button class="btn btn-info" id="submit-del" style="float: left" onclick="return confirm('Bạn chắc chắn muốn xóa')">Xóa</button>

                            <nav aria-label="Page navigation" class="text-right">
                                <ul class="pagination">
                                    <li><span aria-hidden="true"><a href="?page=<?= $page - 1; ?>" <?php if ($page == 1) {
                                                                                                        echo "class= 'disabled' ";
                                                                                                    } ?> data-ci-pagination-page="2" rel="next" class="fa fa-backward"></a></span></li>

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
                                    <li><span aria-hidden="true"><a href="?page=<?= $page + 1; ?>" <?php if ($page == $pages) {
                                                                                                        echo "class= 'disabled' ";
                                                                                                    } ?> data-ci-pagination-page="2" rel="next" class="fa fa-forward"></a></span></li>
                                    <!-- <li  <?php if ($page == 1) {
                                                    echo "class= 'disabled' ";
                                                } ?> ><span aria-hidden="true"><a href="?page=<?= $page + 1; ?> " data-ci-pagination-page="2" rel="next" class="fa fa-forward"></a></span></li> -->
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Delete User -->
        <div class="modal fade" id="DeleteMota" tabindex="1" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bạn chắc chắn muốn xóa</h5>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="code.php">
                            <div class="motal-body">
                                <input type="hidden" name="delete_id" class="deletebtn_id" value="<?= $row['id'] ?>">
                            </div>
                            <div class="motal-footer">

                                <button type="button" class="btn btn-primary" data-dismiss="modal">Không</button>
                                <button type="submit" class="btn btn-primary" name='deletebtd'>Có</button>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<script>
    $(document).ready(function() {
        $(".deleteb").click(function(e) {
            var users_id = $(this).val();
            $(".deletebtn_id").val(users_id);
            console.log(users_id);
            $("#DeleteMota").modal("show");
        });
    });
</script>