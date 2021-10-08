<?php

include('db_connect.php');
$id_cata = $_POST['catalog_id']=16;
$stmts = $con->prepare("SELECT name , price, discount, image_link FROM catelogy INNER JOIN product  ON catelogy.id_catalog = product.catalog_id  WHERE catalog_id=$id_cata AND id_kiemduyet=1");
// 'SELECT name , price, discount, image_link FROM product ORDER BY catalog_id WHERE id_kiemduyet=1 DESC LIMIT 5'\
// 'SELECT name , price, discount, image_link FROM catelogy INNER JOIN product  ON catelogy.id_catalog = product.catalog_id  WHERE catalog_id=$id_cata AND id_kiemduyet=1'
// $query = "SELECT name , price, discount, image_link FROM product WHERE catalog_id = 16 LIMIT 5";
// 'SELECT name , price, discount, image_link FROM product WHERE id_kiemduyet=1'
// 'SELECT * FROM product INNER JOIN catelogy ON catelogy.id_catalog = product.catalog_id WHERE id_kiemduyet=1'
// 'SELECT name , price, discount, image_link FROM product INNER JOIN catelogy ON catelogy.id_catalog = product.catalog_id WHERE id_kiemduyet=1 LIMIT 5'
$stmts ->execute();
$stmts -> bind_result($title, $price, $rating, $image);

$product = array();

while($stmts ->fetch()){

    $temps = array();
	
	$temps['name'] = $title;
	$temps['price'] = $price;
	$temps['discount'] = $rating;
	$temps['image_link'] = $image;
    $temps['catalog_id'] = $id_cata;

	array_push($product,$temps);
	}

	echo json_encode($product);
