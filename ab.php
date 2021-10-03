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
                        <table class="table table-hover" id="myDataTable2">
                            <thead>
                                <tr class="info">
                                    <th>ID &nbsp;&nbsp;&nbsp;<a class="fa fa-sort"></a></th>
                                    <th>Tên danh mục &nbsp;&nbsp;&nbsp;<a class="fa fa-sort"></a></th>
                                    <th>Thứ tự &nbsp;&nbsp;&nbsp;<a class="fa fa-sort"></a></th>
                                    <th>Hành động &nbsp;&nbsp;&nbsp;<a class="fa fa-sort"></a></th>
                                </tr>
                            </thead>

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

                                ?>
                                    <tr>
                                        <td><strong><?php echo $row['id_catalog']; ?></strong></td>
                                        <td><strong><?php echo $row['name_dm']; ?></strong></td>
                                        <td><strong><?php echo $row['sort_order']; ?></strong></td>
                                        <td class="list_td aligncenter">
                                            <a href="editdm.php?catelogy_id=<?php echo $row['id_catalog']; ?>" title="Sửa" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                            <button class=" btn btn-danger btn-sm delete_dm" title="Xóa" value="<?php echo $row['id_catalog']; ?>"> <i class="fa fa-times"></i> </button>
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
                                    <input type="hidden" name="deletedm_id" class="deletedm_id" value="<?= $row['id_catalog'] ?>">
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
<script>
    $(document).ready(function() {
        $(".deleteb").click(function(e) {
            var users_id = $(this).val();
            $(".deletebtn_id").val(users_id);
            console.log(users_id);
            $("#DeleteMota").modal("show");
        });


    });

    $(document).ready(function() {
        $('#myDataTable2').DataTable();
    })
</script>

<?php include('include/footer.php'); ?>