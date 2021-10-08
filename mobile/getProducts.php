<?php

include('db_connect.php');

$stmt = $con->prepare("SELECT name , price, discount, image_link FROM product INNER JOIN catelogy ON catelogy.id_catalog = product.catalog_id  WHERE catalog_id=13 AND id_kiemduyet=1");
// 'SELECT name , price, discount, image_link FROM product ORDER BY catalog_id WHERE id_kiemduyet=1 DESC LIMIT 5'
// $query = "SELECT name , price, discount, image_link FROM product WHERE catalog_id = 16 LIMIT 5";
// 'SELECT name , price, discount, image_link FROM product WHERE id_kiemduyet=1'
// 'SELECT * FROM product INNER JOIN catelogy ON catelogy.id_catalog = product.catalog_id WHERE id_kiemduyet=1'
// 'SELECT name , price, discount, image_link FROM product INNER JOIN catelogy ON catelogy.id_catalog = product.catalog_id WHERE id_kiemduyet=1 LIMIT 5'
$stmt ->execute();
$stmt -> bind_result($title, $price, $rating, $image);

$products = array();

while($stmt ->fetch()){

    $temp = array();
	
	$temp['name'] = $title;
	$temp['price'] = $price;
	$temp['discount'] = $rating;
	$temp['image_link'] = $image;

	array_push($products,$temp);
	}

	echo json_encode($products);

?>