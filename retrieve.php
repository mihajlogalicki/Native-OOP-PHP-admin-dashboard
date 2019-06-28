<?php

include('../libs/Smarty.class.php');
include('./config/database.php');
include('./objects/product.php');
include('./objects/category.php');
$smarty = new Smarty;

$database = new Database();
$db = $database->getConnection();

// Category Instance & CALL, SENT methods
$category = new Category($db);


// Product Instance & CALL, SENT methods
$product = new Product($db);
$fetchData = $product->readAll();
$num = $fetchData->rowCount();

if($num > 0){
    $smarty->assign('products', $fetchData);
}else {
    echo "No products found";
}

// Front-End approach
$smarty->assign('title', 'Webshop');
$smarty->display('retrieved.tpl');

?>