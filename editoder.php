<?php
include('include/header.php');
session_start();


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
            <li class="active">Chi tiết đơn đặt hàng</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-body">
                    <h3>Thông tin khách hàng</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td style="width: 100px">Họ và tên</td>
                                    <td>VIP User</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>test@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td>1234567890</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td>Hải Phòng</td>
                                </tr>
                                <tr>
                                    <td>Tin nhắn</td>
                                    <td>Ship free</td>
                                </tr>
                                <tr>
                                    <td>Ngày đặt</td>
                                    <td>13:27:54 05/05/2017</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><br>
                    <h3>Chi tiết đơn đặt hàng</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr class="info">
                                    <th class="text-center">STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Hành động</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="vertical-align: middle;text-align: center;"><strong>1</strong></td>
                                    <td><img src="http://localhost/webshop/upload/product/ao-gia-dinh-AG0554.jpg" alt="" style="width: 50px;float:left;margin-right: 10px;"><strong>Áo gia đình AG0554</strong>
                                    </td>
                                    <td style="vertical-align: middle"><strong>1</strong></td>
                                    <td style="vertical-align: middle">
                                        450,000 VNĐ
                                    </td>
                                    <td class="list_td aligncenter">
                                        <a href="http://localhost/webshop/admin/transaction/deldetail/13" title="Xóa"> <i class="fa fa-times" onclick=" return confirm('Bạn chắc chắn muốn xóa')"></i></a>
                                    </td>

                                </tr>

                            </tbody>

                        </table>
                        <a href="#" class="btn btn-success"> Xác nhận đơn hàng</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>