<?php
session_start();
include('include/header.php');
include('config/db.php');
include('include/footer.php');
?>


<!--/.sidebar-->
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

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Thêm sản phẩm
                </div>
                <div class="panel-body">
                    <?php
                    if (isset($_GET['product_id'])) {
                        $product_id = $_GET['product_id'];
                        $querys = " SELECT * FROM product WHERE id = '$product_id' LIMIT 1";
                        $query_run = mysqli_query($con, $querys);
                        if (mysqli_num_rows($query_run) > 0) {
                            // $productitem = mysqli_fetch_array($query_run);
                            foreach ($query_run as $row) {
                    ?>
                                <form class="form-horizontal" name="" novalidate enctype="multipart/form-data" method="POST" action="code.php">
                                    <input type="hidden" name="product_id" value="<?= $row['id'] ?>">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Tên sản phẩm</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="namesp" class="form-control" id="inputEmail3" placeholder="" value="<?= $row['name'] ?>">
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <label for="inputEmail3" class="col-sm-2 control-label">Hình ảnh</label>

                                        <div class="col-sm-5">
                                            <img src="<?php echo "uploads/product/" . $row['image_link']; ?>" alt="image" style="width: 100px;float:left;margin-right: 20px;">
                                            <input type="file" id="image" name="image">
                                            <input type="hidden" name="old_image" value="<?= $row['image_link'] ?>">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Hình ảnh kèm theo</label>
                            <div class="col-sm-5">
                                <input type="file" id="list_image" name="list_image[]" multiple="">
                            </div>
                        </div> -->
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Danh mục</label>
                                        <div class="col-sm-5">
                                            <select class="form-control" name="catalog_id" value="<?= $row['catalog_id'] ?>">
                                                <option>--- Chọn danh mục sản phẩm ---</option>
                                                <?php
                                                $query = "SELECT * FROM catelogy";
                                                $query_run = mysqli_query($con, $query);
                                                if (mysqli_num_rows($query_run)) {
                                                    foreach ($query_run as $item) {
                                                ?>
                                                        <optgroup label=" <?php if ($item['parent_id'] == 1) {
                                                                                echo "Thời trang";
                                                                            } else {
                                                                                if ($item['parent_id'] == 2) {
                                                                                    echo "Quần áo gia đình";
                                                                                } else {
                                                                                    if ($item['parent_id'] == 3) {
                                                                                        echo "Thời trang nữ";
                                                                                    } else {
                                                                                        if ($item['parent_id'] == 4) {
                                                                                            echo "Thời trang nam";
                                                                                        } else {
                                                                                            if ($item['parent_id'] == 5) {
                                                                                                echo "Khuyến mại";
                                                                                            } else {
                                                                                                if ($item['parent_id'] == 6) {
                                                                                                    echo "Bán chạy";
                                                                                                } else {
                                                                                                    if ($item['parent_id'] == 7) {
                                                                                                        echo "Mới";
                                                                                                    } else {
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            } ?>">

                                                            <option value="<?php echo $item['parent_id'] ?>"><?php echo $item['name']; ?></option>
                                                        </optgroup>

                                                <?php
                                                    }
                                                }

                                                ?>

                                            </select>
                                            <div class="col-sm-4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Giá tiền</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="price" class="form-control" id="inputEmail3" placeholder="" value="<?= $row['price'] ?>">
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Giảm giá</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="discount" class="form-control" id="inputEmail3" placeholder="" value="<?= $row['discount'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Chi tiết</label>
                                        <div class="col-sm-5 control-label">
                                            <!-- <textarea class="form-control" rows="3" name="content" id="contents" style="visibility: hidden; display: none;" value="<?= $row['content'] ?>"> -->
                                            <textarea type="text" name="content" rows="5" required class="form-control" id="content" placeholder=""><?php echo $row['content']; ?></textarea>

                                        </div>
                                    </div>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#content'))
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-5">
                                            <button type="submit" class="btn btn-primary" name="editproduct">Cập Nhật</button>
                                            <button type="reset" class="btn btn-default">Làm mới</button>
                                        </div>
                                    </div>
                                </form>
                    <?php
                            }
                        } else {
                            echo "No Such Product Found";
                        }
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>