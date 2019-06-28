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
$category->read();

// Product Instance & CALL, SENT methods
$product = new Product($db);


if(isset($_POST['name']) && 
   isset($_POST['price']) && 
   isset($_POST['description']) &&
   !empty($_POST['name']) &&
   !empty($_POST['price']) &&
   !empty($_POST['description']) &&
   !empty($_FILES["image"]["name"])
   ){
 
    // set product property values
    $product->name = $_POST['name'];
    $product->price = $_POST['price'];
    $product->description = $_POST['description'];
    $product->category_id = $_POST['category_id'];
    $image = $_FILES['image']['name'];
    $product->image = $image;
 
    // create the product
    if($product->create()){
        echo "<div class='alert alert-success'>Product was created.</div>";
        $product->uploadPhoto();
        
    }
 
    // if unable to create the product, tell the user
    else{
        echo "<div class='alert alert-danger'>Unable to create product.</div>";
    }
}

// Front-End approach
$smarty->assign('title', 'Webshop');
$smarty->assign('categories', $category->read());
$smarty->display('file:create.tpl');


?>