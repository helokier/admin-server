<?php
session_start();

include('include/header.php');
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
            <li class="active">Đơn đặt hàng</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="col-md-8">Quản lý đơn đặt hàng</div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="myDataTable">
                            <thead>
                                <tr class="info">
                                    <th class="text-center">STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Ngày đặt</th>
                                    <th>Số ĐT</th>
                                    <th>Giá tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 $query_order= "SELECT * FROM orders INNER JOIN product ON orders.product_id = product.id WHERE id_check =1";
                                 $query_runs = mysqli_query($con, $query_order);
                                // $sql_lietke_sp = "SELECT * FROM product INNER JOIN catelogy ON catelogy.id_catalog = product.catalog_id WHERE id_kiemduyet=1";
                                //     $query_lietke_sp = mysqli_query($con, $sql_lietke_sp) or die(mysqli_error($con));
                                while ($row = mysqli_fetch_array($query_runs)){

                                    
                                ?>

                                    <tr>
                                        <td style="vertical-align: middle;text-align: center;"><strong><?php echo $row['id']; ?></strong></td>
                                        <td><strong><?php echo $row['name_kh']; ?></strong></td>
                                        <td><strong><?php echo $row['date']; ?></strong></td>
                                        <td><strong><?php echo $row['sdt']; ?></strong></td>
                                        <td><strong><?php echo $row['price']; ?></strong> VNĐ</td>
                                        <td>
                                            <p style="color:green"><?php echo $row['id_check']; ?></p>
                                        </td>
                                        <td class="list_td aligncenter">
                                            <a href="editproduct.php?product_id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm" title="Sửa"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                            <button type="button" value="<?php echo $row['id']; ?>" class=" btn btn-danger btn-sm deleteb" title="Xóa"> <i class="fa fa-times"></i> </button>
                                        </td>
                                    </tr>
                                <?php
                                }
                                    
                                




                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>

<script>
    $(document).ready(function() {
        $('#myDataTable').DataTable();
        
    })
</script>
<?php
include('include/footer.php');
?>