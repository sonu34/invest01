<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "userdata";

$db = new mysqli($db_host,$db_user,$db_pass,$db_name) or die("connection failed: %s\n".$db->error);
//$db = new PDO('mysql:host=localhost;dbname = '. $db_name .';charset=utf8',$db_user,$db_pass);
//$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);