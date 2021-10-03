<?php

session_start();
include('config/db.php');
$u = $_POST['email'];
$p = $_POST['password'];
$query_login = "SELECT * FROM admin  WHERE email = '$u' and  passworld	 = '$p' ";
$query_login_run = mysqli_query($con, $query_login);
$row = mysqli_fetch_array($query_login_run);
if (is_array($row)) {
     $_POST['email'] = $row['email'];
    $_POST['password']= $row['passworld'];
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script type='text/javascript' >";
    echo "alert('Đăng Nhập Thất Bại Kiểm Tra Tài Khoản Mật Khẩu')";
    echo  "window.location.href = 'login.php'";
    echo "</script>";
}
if (isset($_SESSION['email'])){
   header("Location: login.php");
}
?>