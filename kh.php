<?php
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
            <li class="active">Khách hàng</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="col-md-8">Danh sách khách hàng</div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr class="info">
                                    <th>ID</th>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                                <tr>
                                    <td><strong>7</strong></td>
                                    <td><strong>TEST@gmail.com</strong></td>
                                    <td><strong>TEST@gmail.com</strong></td>
                                    <td><strong>Hải Phòng</strong></td>
                                    <td class="list_td aligncenter">
                                        <a href="khd.php" title="Sửa"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                        <a href="#" title="Xóa"> <i class="fa fa-times" onclick=" return confirm('Bạn chắc chắn muốn xóa')"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>6</strong></td>
                                    <td><strong>Nguyen An</strong></td>
                                    <td><strong>khachhang1@gmail.com</strong></td>
                                    <td><strong>Thủy Nguyên - Hải Phòng</strong></td>
                                    <td class="list_td aligncenter">
                                        <a href="khd.php" title="Sửa"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                        <a href="#" title="Xóa"> <i class="fa fa-times" onclick=" return confirm('Bạn chắc chắn muốn xóa')"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>5</strong></td>
                                    <td><strong>User</strong></td>
                                    <td><strong>user@gmail.com</strong></td>
                                    <td><strong>Hải Phòng</strong></td>
                                    <td class="list_td aligncenter">
                                        <a href="khd.php" title="Sửa"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                        <a href="#" title="Xóa"> <i class="fa fa-times" onclick=" return confirm('Bạn chắc chắn muốn xóa')"></i> </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>