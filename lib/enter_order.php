<?php 
require_once '../lib/enter.php'; 


$user=new enter();
$user->name= $_POST["name"];
$user->email= $_POST["email"];
$user->phone= $_POST["phone"];
$user->product_name= $_POST["products_name"];
$user->message= $_POST["message"];
$enter=$user->enter_order();

?>