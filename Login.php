<?php
$uname=$_POST['name'];
$password=$_POST['pass'];

if ($uname=="sasurie" && $password=="sasurie")
{
	header('location:home.html');
}
else
{
// function_alert("Please Enter a correct username and password");

// function function_alert($msg) {
//     echo '<script type='text/javascript'>alert('$msg')</script>';
// }

	echo "login Failed";
}

?>