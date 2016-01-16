<?php require_once '../includes/DB.php'; ?>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$maindb=new DB();
$conn=$maindb->getCon();

$pid=$_GET["pid"];

$sql="delete from data where id='$pid'";
$sqlstmt = $conn->query($sql);
if($sqlstmt===TRUE){
    echo 'Deleted Successfully';
}
else {
    echo 'Deleted Failed';
}



$conn->close();

?>

