 <?php
$servername = "localhost";
$username = "sasurie";
$password = "sasurie";
$dbname = "sasuriefee";
	
$regno=$_POST['ureg'];
$sname=$_POST['nots'];
$date=date("Y.m.d");
$tamt=$_POST['tamt'];
$amw=$_POST['amw'];
$type=$_POST['type'];
$rtype=$_POST['trpe'];
$branch=$_POST['bnh'];
$year=$_POST['bnhy'];
$bank=$_POST['bname'];
$ddn=$_POST['ddn'];
$dddate=$_POST['dddate'];

$admfee=$_POST['admfee'];
$tfee=$_POST['tfee'];
$lsufee=$_POST['lsufee'];
$usfee=$_POST['usfee'];
$ofee=$_POST['ofee1'];
$con = mysql_connect($servername, $username, $password);
$db=mysql_select_db($dbname,$conn)or die(mysql_error());

$str = "INSERT INTO clgfeedb VALUES('$regno','$sname','$date','$tamt,'$amw','$type','$trpe','$bnh','$bnhy','$bname','$ddn','$dddate','$admfee','$tfee','$lsufee','$usfee','$ofee1')";
$sql_result=mysql_query($str,$conn);
if($sql_result)
{
	echo '<script>alert("Data stored successfull")</script>';
}
else
{
	echo "<script>alert("Connection failed")</script>";
}

$conn->close();
?>
