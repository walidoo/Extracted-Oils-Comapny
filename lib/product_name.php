<?php require_once '../includes/DB.php'; ?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$searchkey = (!empty($_GET["searchKey"]) ? $_GET["searchKey"] : "" );
$mainDB = new DB();
$conn = $mainDB->getCon();

$sql = "select * "
        . "from products ";
$result = $conn->query($sql);
$dataResult = array("dataArray" => array());
while ($row = $result->fetch_assoc()) {
    $dataResult["dataArray"][] = $row;
}

$conn->close();

echo json_encode($dataResult);
exit;
echo "<pre>";
die(print_r($dataResult));


?>