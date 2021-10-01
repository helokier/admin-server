<?php
include('include/header.php');


?>
<?php
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
                        <table class="table table-hover">
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

                                <tr>
                                    <td style="vertical-align: middle;text-align: center;"><strong>1</strong></td>
                                    <td><strong>GoO</strong></td>
                                    <td><strong>13:27:54 05/05/2017</strong></td>
                                    <td><strong>01215345336</strong></td>
                                    <td><strong>360,000</strong> VNĐ</td>
                                    <td>
                                        <p style="color:green">Đã xác nhận</p>
                                    </td>
                                    <td class="list_td aligncenter">
                                        <a href="editoder.php" title="Chi tiết">
                                            <i class="fa fa-table"></i>
                                        </a>&nbsp;&nbsp;&nbsp;
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