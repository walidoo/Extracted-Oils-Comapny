
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$to="walidjuba@gmail.com";
$subject=$_REQUEST["subject"];
$message=$_REQUEST["message"];
$mail = mail($to,$subject,$message);
echo 'Message Sent';

