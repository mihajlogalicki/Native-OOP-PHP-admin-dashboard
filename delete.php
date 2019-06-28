<?php


include("./config/database.php");
include("./objects/product.php");
include('../libs/Smarty.class.php');
$smarty = new Smarty;


$database = new Database();
$db = $database->getConnection();

$product = new Product($db);




$product->id = $_POST['object_id'];

if($_POST){
    if($product->delete()){
        echo "uspeh";
    }else {
        echo "neuspeh";
    }

}

?>