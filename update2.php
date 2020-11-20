<!DOCTYPE HTML>
<head>
<title>UPDATE-PAGE</title>
<style type="text/css">
#b1{
 height: 40px;
     width: 100px;
      border-radius: 8px;
background-color:#42f483;
border:none;
border-radius: 10px;
}
#b1:hover{
box-shadow: 2px 2px 20px;
}
</style>
</head>
<body>
<?php session_start(); 
 error_reporting(0);
  $pass=$_SESSION["pass"];
   $user=$_SESSION["name"];
 
 
  if($user=="sasurie" && $pass=="sasurie"){
  

?>
<center><img src="images/logo_clg.jpg" alt="logo" height="180" width="1200"></center>
<center><h2>FEE UPDATE PAGE</h2></center>
<?php
header('Content-Type:text/html;charset=utf-8');
$servername = "localhost";
$username = "sasurie";
$password = "sasurie";
$reg=$_POST['regno'];
$shelter= $_POST['shelter'];
// Create connection
$con = mysql_connect($servername, $username, $password);

// Check connection
if (!$con) {
    die("Connection failed: " . mysql_connect_error());
}
//echo "Connected successfully";
 

$db=mysql_select_db("clgtc_db",$con)or die(mysql_error());

if($shelter=='dayscholar')
{
$str="SELECT * FROM day_scholar where reg_no='$reg' ";

$result = mysql_query($str,$con);

while($row=mysql_fetch_array($result)){

$v1=$row['reg_no'];
$v2=$row['stu_name'];
$v4=$row['dept'];
$v5=$row['year'];
$v6=$row['tutionfee'];
$v7=$row['busfee'];
$v8=$row['association_fee'];
}
}else if($shelter=='hosteler')
{
   $str="SELECT * FROM hostelites where reg_no='$reg' ";

$result = mysql_query($str,$con);

while($row=mysql_fetch_array($result)){

$v1=$row['reg_no'];
$v2=$row['stu_name'];
$v4=$row['dept'];
$v5=$row['year'];
$v6=$row['tutionfee'];
$v7=$row['hostel_rent'];
$v8=$row['messfee'];
$v9=$row['association_fee'];

}
?>

    <form method="post" action="uplink.php">
     <table align="center">

<tr><td>Register Number</br></br></td><td><input type="text" name="reg" value="<?php echo $v1; ?>"></br></br></td></tr>
<tr><td>Student Name</br></br></td><td><input type="text" name="stuname" value="<?php echo $v2; ?>"></br></br></td></tr>
<tr><td>Department</br></br></td><td><input type="text" name="dept" value="<?php echo $v4; ?>"></br></br></td></tr>
<tr><td>Year</br></br></td><td><input type="text" name="year" value="<?php echo $v5; ?>"></br></br></td></tr>
<tr><td>Tuition Fee</br></br></td><td><input type="text" name="tutionfee" value="<?php echo $v6; ?>"></br></br></td></tr>
<tr><td>Bus Fee</br></br></td><td><input type="text" name="busfee" value="<?php echo $v7; ?>"></br></br></td></tr>
<tr><td>Association fee</br></br></td><td><input type="text" name="association_fee" value="<?php echo $v8; ?>"></br></br></td></tr>
<tr><td>Mess Fees</td><td><input type="text" name="caste" value="<?php echo $v9; ?>"></td></tr>
<tr><td>Hostel Fees</td><td><input type="text" name="com" value="<?php echo $v10; ?>"></td></tr>
</table>
<br><center><input type="submit" id="b1" value="Update">&nbsp;&nbsp;<input type="button" onClick="location.href='home.html';" id="b1" value="HOME" /></center>
</form>
<?php } ?>
</body>
</html>