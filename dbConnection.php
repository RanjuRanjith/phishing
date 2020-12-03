<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "phishing";

// $db = new PDO ('mysql:host=localhost;dbname=' . $db_name . '; charset=utf8', $db_user, $db_password);
// //$db = new PDO("mysql:host=localhost;db_name=$db_name", $db_user, $db_password);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$conn = mysqli_connect("localhost","root","");
if(!$conn)
{
    echo "Error";
}
else
{
    //echo "Connected";
}

$db = mysqli_select_db($conn,"phishing");