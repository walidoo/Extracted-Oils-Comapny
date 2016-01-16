<?php require_once './includes/DB.php'; ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link href="css/demo.css" rel="stylesheet" type="text/css"/>
        <link href="css/styleee.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Coustard:900' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css' />
        <script src="js/ajax_conn.js" type="text/javascript"></script>
    </head>
    <!--<body>-->
    <div class="">
        <div class="container">
            <div id="ca-container" class="ca-container">
                <div class="ca-wrapper">
                    <?php
                    $mainDB = new DB();
                    $conn = $mainDB->getCon();

                    $sql = "select * "
                            . "from products where category='oils' ";
                    $result = $conn->query($sql);
//                    $dataResult = array("dataArray" => array());

                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="ca-item ca-item-1">
                            <div class="ca-item-main">
                                <img src="<?php echo $row["product_img"] ?>" width="233px" height="189px" />
                                <h3 style="font-size:20px;"><?php echo $row["product_name"] ?></h3>
                                <p style="margin-top: -20px;font-size: 15px;color: #888">Category : <?php echo $row["category"] ?></p>
                                <a href="#" class="ca-more">more...</a>
                            </div>
                            <div class="ca-content-wrapper">
                                <div class="ca-content">
                                    <h6 style="font-size: 22px;color: #FFF;"><?php echo $row["product_name"] ?></h6>
                                    <a href="#" class="ca-close">close</a>
                                    <div style="margin-left: 30px;margin-top: 25px;">
                                        <span style="font-size:18px;font-weight: bold;color: #FFF;">Product Description :</span><span style="margin-left:10px;font-size:18px"><?php echo $row["product_desc"] ?></span>                                       
                                    </div>
                                    <div style="margin-left: 30px;margin-top: 25px;">
                                        <span style="font-size:18px;font-weight: bold;color: #FFF;">Product Quantity :</span><span style="margin-left:10px;font-size:18px"><?php echo $row["product_quantity"] ?></span>                                       
                                    </div>
                                    <div style="margin-left: 30px;margin-top: 25px;">
                                        <span style="font-size:18px;font-weight: bold;color: #FFF;">Category :</span><span style="margin-left:10px;font-size:18px"><?php echo $row["category"] ?></span>                                       
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3 (2).js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <script src="../js/ajax_conn.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
    <script type="text/javascript">
        $('#ca-container').contentcarousel();
    </script>

</body>
</html>