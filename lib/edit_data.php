<?php require_once '../includes/DB.php'; ?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$pid=$_GET["pid"];
$id=$_POST["id"];
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$age= $_POST["age"];
$dept= $_POST["dept"];

$maindb=new DB();
$conn=$maindb->getCon();

//$sql="update data set first_name='$fname' , last_name='$lname' where id='$id'";
$sql="update data "
        . "set first_name='$fname' , last_name='$lname' , age='$age' , department='$dept'  where id='$id'";
$sqlstmt = $conn->query($sql);
if($sqlstmt===TRUE){
    echo 'Edited Successfully';
}
else {
    echo 'Edited Failed';
}

$conn->close();


?>
