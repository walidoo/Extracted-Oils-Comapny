<?php require_once '../includes/DB.php'; ?>
<?php require_once '../lib/enter.php'; ?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$pid=$_GET['pid'];

?>


<form method="post" action="../lib/edit_data.php?pid=<?php echo $pid; ?>" >
    <div style="margin-bottom: 20px;"><input type="text" name="id" value="<?php echo $pid; ?>" style="width:215px;height:30px;" /></div>
    <div style="margin-bottom: 20px;"><input type="text" name="fname" style="width:215px;height:30px;" /></div>
    <div style="margin-bottom: 20px;"><input type="text" name="lname" style="width:215px;height:30px;" /></div>
    <div style="margin-bottom: 20px;"><input type="text" name="age" style="width:215px;height:30px;" /></div>
    <div style="margin-bottom: 20px;"><input type="text" name="dept" style="width:215px;height:30px;" /></div>
    <div style="margin-bottom: 20px;"><input type="submit" style="width:70px;height:30px;" /></div>

</form>





