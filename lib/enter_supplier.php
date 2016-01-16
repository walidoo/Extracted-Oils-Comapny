<?php 
require_once '../lib/enter.php'; 


$user=new enter();
$user->name= $_POST["name"];
$user->email= $_POST["email"];
$user->phone= $_POST["phone"];
$user->attachfile= $_FILES["file"]['name'];
$enter=$user->enter_supplier();

?>