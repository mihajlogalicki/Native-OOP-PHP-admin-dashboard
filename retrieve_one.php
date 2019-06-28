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

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

$product->id = $id;
$product->readOne();


// Front-End approach
$smarty->assign('title', 'Webshop');
$smarty->assign('product', $product->readOne());
$smarty->display('file:read_one.tpl');

?>