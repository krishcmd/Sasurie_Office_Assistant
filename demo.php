<?php
require 'dbconn.php';
$dbname=$sql;
$date=date("Y.m.d");
$db=mysql_select_db($dbname,$conn)or die(mysql_error());
$str="insert into examfeedb values('','732417104016','Gokul','1','$date','10,000','tenthousend','stu','dd','cse','2','kvys','1','$date','100','10','3')";
$sql_result=mysql_query($str,$conn);
if($sql_result)
{
	echo '<script>alert("Data stored successfu ")</script>';
}



  ?>