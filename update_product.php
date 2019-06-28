<?php
include('../libs/Smarty.class.php');
include('./config/database.php');
include('./objects/product.php');
include('./objects/category.php');
$smarty = new Smarty;

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

$database = new Database();
$db = $database->getConnection();

// Category Instance & CALL, SENT methods
$category = new Category($db);
$category->read();

// Product Instance & CALL, SENT methods
$product = new Product($db);

$product->id = $id;
$product->readOne();

if(isset($_POST['submit'])){

    $product->name = $_POST['name'];
    $product->description = $_POST['description'];
    $product->price = $_POST['price'];
    $product->category_id = $_POST['category_id'];
    
    if($product->update()){
        echo "uspej";
    } else {
        echo "neuspeh";
    }

}


// Front-End approach
$smarty->assign('title', 'Webshop');
$smarty->assign('product', $product->readOne());
$smarty->assign('categories', $category->read());
$smarty->display('file:update.tpl');

?>