<?php
session_start();
include('config/db.php');
// include('include/sercurety.php');

// ADD USER_ADMIN
if(isset($_POST['submitbtn']))
{
  $name = $_POST['name'];
    $email = $_POST['email'];
    $passworld = $_POST['passworld'];
  $re_password = $_POST['re_password'];
  $level = $_POST['level'];
  $admin_query = "INSERT INTO admin (name,email,passworld,level) VALUES ('$name','$email','$passworld','$level')";
    $admin_query_run = mysqli_query($con,$admin_query);
  if($admin_query_run){
      $_SESSION['status'] = "Thêm Mới Thành Công";
    $_SESSION['status_code'] = "success";
      header("Location: addnv.php");
  }else{
        $_SESSION['status'] = "Thêm Mới Thất Bại";
        $_SESSION['status_code'] = "error";
        header("Location: addnv.php");
  }
}
if (isset($_POST['btnUpdate'])) {

  $user_id = $_POST['user_id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $passworld = $_POST['passworld'];
  $re_password = $_POST['re_password'];
  $level = $_POST['level'];
  $query = "UPDATE admin SET name ='$name',email='$email', passworld ='$passworld', level = '$level' WHERE id = '$user_id'";
  $query_run = mysqli_query($con,$query);
   
  if ($query_run) {
    $_SESSION['status'] = "Cập Nhật Thành Công";
    $_SESSION['status_code'] = "success";
    header("Location: nv.php");
  } else {
    $_SESSION['status'] = "Cập Nhật Thất Bại";
    $_SESSION['status_code'] = "error";
    header("Location: nv.php");
  }
}


if (isset($_POST['Deletebtn'])) {

  $delete_id = $_POST['delete_id'];
  $query = "DELETE FROM admin WHERE id = '$delete_id'";
  $query_run = mysqli_query($con, $query);

  if ($query_run) {
    $_SESSION['status'] = "Xóa Thành Công";
    $_SESSION['status_code'] = "success";
    header("Location: nv.php");
  } else {
    $_SESSION['status'] = "Xóa Thất Bại";
    $_SESSION['status_code'] = "error";
    header("Location: nv.php");
  }
}
//END ADD USER_ADMIN


// ADD CATELORY
if (isset($_POST['btn_dm'])) {
  $namedm = $_POST['namedm'];
  $description = $_POST['description'];
  $parent_id = $_POST['parent_id'];
  $sort_order = $_POST['sort_order'];
  $catelogy_query = "INSERT INTO catelogy (name,sort_order) VALUES ('$namedm','$sort_order')";
  $catelogy_query_run = mysqli_query($con, $catelogy_query);

  if ($catelogy_query_run) {
    $_SESSION['status'] = "Thêm Mới Thành Công";
    $_SESSION['status_code'] = "success";
    header("Location: adddm.php");
  } else {
    $_SESSION['status'] = "Thêm Mới Thất Bại";
    $_SESSION['status_code'] = "error";
    header("Location: adddm.php");
  }
}
if (isset($_POST['btn_editdm'])) {

  $catelogy_id = $_POST['catelogy_id'];
  $namedm = $_POST['namedm'];
  $sort_order = $_POST['sort_order'];
  $query = "UPDATE catelogy SET name_dm ='$namedm', sort_order = '$sort_order' WHERE id_catalog = '$catelogy_id'";
  $query_run = mysqli_query($con, $query);

  if ($query_run) {
    $_SESSION['status'] = "Cập Nhật Thành Công";
    $_SESSION['status_code'] = "success";
    header("Location: adddm.php");
  } else {
    $_SESSION['status'] = "Cập Nhật Thất Bại";
    $_SESSION['status_code'] = "error";
    header("Location: adddm.php");
  }
}
if (isset($_POST['DeleteDMbtn'])) {

  $deletedm_id = $_POST['deletedm_id'];
  $query = "DELETE FROM catelogy WHERE id_catalog = '$deletedm_id'";
  $querycate_run = mysqli_query($con, $query);

  if ($querycate_run) {
    $_SESSION['status'] = "Xóa Thành Công";
    $_SESSION['status_code'] = "success";
    header("Location: ab.php");
  } else {
    $_SESSION['status'] = "Xóa Thất Bại";
    $_SESSION['status_code'] = "error";
    header("Location: ab.php");
  }
}

// ADD PRODUCT
if (isset($_POST['editproduct'])) {

  $product_id = $_POST['product_id'];
  $old_image = $_POST['old_image'];
  $namesp = $_POST['namesp'];
  $catalog_id = $_POST['catalog_id'];
  $price = $_POST['price'];
  $discount = $_POST['discount'];
  $content = $_POST['content'];
  $image = $_FILES['image']['name'];
  if($image!= ""){
    $update_filename = $_FILES['image']['name'];
    $allow_extension = array('png', 'jpg', 'jpeg');
    $file_extension = pathinfo($update_filename, PATHINFO_EXTENSION);
    $filename = time() . '.' . $file_extension;
    if (!in_array($file_extension, $allow_extension)) {
      $_SESSION['status'] = "Chỉ thêm ảnh có đuôi png ,jpg,jepg";
      $_SESSION['status_code'] = "error";
      header("Location: addproduct.php");
    }
    $update_filename = $filename;
  }
  else
  {
    $update_filename = $old_image;
  }
  // $query = "UPDATE product SET(catalog_id,name,content,price,discount,image_link) VALUES ( '$catalog_id','$namesp','$content','$price','$discount','$update_filename') WHERE id = '$product_id' ";
  $query = "UPDATE product SET name ='$namesp',catalog_id='$catalog_id', price ='$price', discount = '$discount',content = '$content' ,image_link ='$update_filename' WHERE id = '$product_id'";
  $query_run = mysqli_query($con, $query);
  if ($query_run) {
    if ($image != " ") {
    move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/product/'.$filename);
    // if(file_exists('uploads/product/'.$old_image)){
    //   unlink('uploads/product/'.$old_image);
    // }
    $_SESSION['status'] = "Cập Nhật Thành Công";
    $_SESSION['status_code'] = "success";
    header("Location: editproduct.php");
  } else {
    $_SESSION['status'] = "Cập Nhật Thất Bại";
    $_SESSION['status_code'] = "error";
    header("Location: editproduct.php");
  }
}
}
if (isset($_POST['deletebtd'])) {

  $delete_id = $_POST['delete_id'];
  $query = "DELETE FROM product WHERE id = '$delete_id'";
  $query_run = mysqli_query($con, $query);

  if ($query_run) {
    $_SESSION['status'] = "Xóa Thành Công";
    $_SESSION['status_code'] = "success";
    header("Location: product.php");
  } else {
    $_SESSION['status'] = "Xóa Thất Bại";
    $_SESSION['status_code'] = "error";
    header("Location: product.php");
  }
}

if (isset($_POST['addproduct'])) {
  $namesp = $_POST['namesp'];
  $image = $_FILES['image']['name'];
  $catalog_id = $_POST['catalog_id'];
  $price = $_POST['price'];
  $discount = $_POST['discount'];
  $content = $_POST['content'];
  $allow_extension = array('png','jpg','jpeg');
  $file_extension =pathinfo($image,PATHINFO_EXTENSION);
  $filename = time().'.'.$file_extension;
  if(!in_array($file_extension,$allow_extension)){
    $_SESSION['status'] = "Chỉ thêm ảnh có đuôi png ,jpg,jepg";
    $_SESSION['status_code'] = "error";
    header("Location: addproduct.php");
  }else{
    $product_query = "INSERT INTO product (catalog_id,name,content,price,discount,image_link) VALUES ( '$catalog_id','$namesp','$content','$price','$discount','$filename')";
    $product_query_run = mysqli_query($con, $product_query);
    if($product_query_run){
      move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/product/'.$filename);
      $_SESSION['status'] = "Thêm Mới Thành Công";
      $_SESSION['status_code'] = "success";
      header("Location: addproduct.php");
      
       
      }else{
      $_SESSION['status'] = "Thêm Mới Thất Bại";
      $_SESSION['status_code'] = "error";
      header("Location: addproduct.php");
      }
    }

  }





  if(isset($_POST['btn_login'])){
    $username = $_POST['email'];
    $password = $_POST['password'];
    $query_login = "SELECT * FROM admin  WHERE email = '$username' and  passworld	 = '$password' ";
    $query_login_run = mysqli_query($con, $query_login);
  if (mysqli_num_rows($query_login_run)>0) {
    echo "<script>window.location.href='dasborad.php'</script>";
    $_SESSION['status'] = "Đăng Nhập Thành Công";
    $_SESSION['status_code'] = "success";
    header("Location: login.php");
  } else {
    $_SESSION['status'] = " Đăng Nhập Thất Bại";
    $_SESSION['status_code'] = "error";
    header("Location: login.php");
  }
    
  }

if (isset($_POST['btn_logout'])) {
  unset($_SESSION['email']);
  session_destroy();
  header("Location: login.php");
}
 

 


?>