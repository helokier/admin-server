<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/check.css" rel="stylesheet">

    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Đăng nhập</div>
                <div class="panel-body">
                    <form method="POST" action="">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
                            </div>
                            <h2></h2>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Nhớ tên đăng nhập
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary" name="btn_login">Đăng nhập</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    <?php
    include('config/db.php');
    if (isset($_POST['btn_login'])) {
        $u = $_POST['email'];
        $p = $_POST['password'];
        $query_login = "SELECT * FROM admin  WHERE email = '$u' AND  passworld	 = '$p' ";
        $query_login_run = mysqli_query($con, $query_login);
        $row = mysqli_fetch_array($query_login_run);
        if (is_array($row)) {
            $_SESSION['name'] = $u;
            $_POST['email'] = $row['email'];
            $_POST['password'] = $row['passworld'];
            echo '<script type="text/javascript">
    alert("Đăng Nhập Thành Công");
        </script>';
            echo "<script>window.location.href='dasborad.php'</script>";
        } else {
           echo '<script type="text/javascript">
    alert("Đăng Nhập Thất Bại Kiểm Tra Tài Khoản Mật Khẩu");
    window.location.href = "login.php";
        </script>';
        }
    }

    if (isset($_SESSION['email'])) {
        header("Location: login.php");
    }
    ?>
</body>


</html>