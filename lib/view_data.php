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

//$counter = 1;
//while ($row = $result->fetch_assoc()) {
//    $maintain .='<div class="container">';
//    $maintain .= '< div id = "ca-container" class = "ca-container" >';
//    $maintain .= '< div class = "ca-wrapper" >';
//    $maintain .= '< div class = "ca-item ca-item-1>';
//    $maintain .= '< div class = "ca-item-main" >';
//    $maintain .= '< div class = "ca-icon" > < /div>';
//    $maintain .= '< h3 > ' . $row["product_name"] . ' < /h3>';
//    $maintain .= '< h4 >';
//    $maintain .= '< span class = "ca-quote" > & ldquo; < /span>';
//    $maintain .= '< span >' . $row["product_desc"] . '< /span>';
//    $maintain .= '</h4>';
//    $maintain .= '< a href = "#" class = "ca-more" > more... < /a>';
//    $maintain .= '< /div>';
//    $maintain .= '< div class = "ca-content-wrapper" >';
//    $maintain .= '< div class = "ca-content" >';
//    $maintain .= '< h6 >' . $row["product_name"] . '< /h6>';
//    $maintain .= '< a href = "#" class = "ca-close" > close < /a>';
//    $maintain .= '< div class = "ca-content-text" >';
//    $maintain .= '< p > I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. < /p>';
//    $maintain .= '< p > When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; < /p>';
//    $maintain .= '< p > She packed her seven versalia, put her initial into the belt and made herself on the way. < /p>';
//    $maintain .= '< /div>';
//    $maintain .= '< ul >';
//    $maintain .= '< li > < a href = "#" > Read more < /a></li >';
//    $maintain .= '< li > < a href = "#" > Share this < /a></li >';
//    $maintain .= '< li > < a href = "#" > Become a member < /a></li >';
//    $maintain .= '< li > < a href = "#" > Donate < /a></li >';
//    $maintain .= '< /ul>';
//    $maintain .= '< /div>';
//    $maintain .= '< /div>';
//    $maintain .= '< /div>';
//    $maintain .= '< /div>';
//    $maintain .= '< /div>';
//    $maintain .= '< /div>';
//
//
//    $counter++;
//}
//
//echo $maintain;

$conn->close();

echo json_encode($dataResult);
exit;
echo "<pre>";
die(print_r($dataResult));
?>

