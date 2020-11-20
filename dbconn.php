<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sasuriefee";
$con = mysql_connect($servername, $username, $password);


if (!$con) {
    die("Connection failed: " . mysql_connect_error());
}

 
$db=mysql_select_db("sasuriefee",$con)or die(mysql_error());
?>