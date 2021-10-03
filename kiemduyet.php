<?php



include('config/db.php');


$id = $_GET['id'] ?? '';

$sql = "UPDATE product SET id_kiemduyet = 1 WHERE id = $id";


// echo $sql;
$con->query($sql);

echo "<script>window.location.href='product.php'</script>";

?>