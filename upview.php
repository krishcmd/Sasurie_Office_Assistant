<html>
<head>
<title>UPDATE</title>
<style type="text/css">
#b1{
     height: 40px;
     width: 100px;
     border-radius: 8px;
     background-color:red;
     border:none;
     border-radius: 10px;
}
#b1:hover{
box-shadow: 2px 2px 20px;
}
input[type=text] {
                  width: 100%;
                  padding: 8px;
                  margin: 8px;
                  display:block;
                  border: 1px solid #ccc;
                  border-radius: 4px;
                  box-sizing: border-box;
                            }
</style>

<script>
function validateForm() {
    var x = document.forms["myForm"]["reg_no"].value;
   

    if (x == "") {
        alert("Enter Register Number");
        return false;
    }
   
}

</script>
</head>
<body bgcolor=" #baf455" >

<?
  php session_start(); 
  error_reporting(0);
  $pass=$_SESSION["pass"];
  $user=$_SESSION["name"]; 
  if($user=="sasurie" && $pass=="sasurie"){
  

?>

<center><img src="images/logo_clg.jpg" alt="logo" height="180" width="1200"></center>
<center><h2>Enter Regno for Update Data</h2></center>
<div id="d1">
<br><br>
<form name="myForm" method="post" action="update2.php" align="left" onsubmit="return validateForm()">
<table align="center">
<tr><td>Register Number</br></br></td><td><input type="text" name="regno"></br></br></td></tr>
<tr>
  <td>
    <input type="radio" name="shelter" id="dayscholar" value="dayscholar" required="" onclick="show1()">
    <label for="dayscholar">DayScholar <br><br>
    <input type="radio" name="shelter" id="hosteler" value="hosteler" onclick="show1()">
    <label for="hosteler">Hosteler<br><br>
  </td>
</tr>
</table>
<center><tr><td align="center"><input type="submit" id="b1" value="SUBMIT"></td></tr> &nbsp;&nbsp;<input type="button" onClick="location.href='home.html';" id="b1" value="HOME" /></center>


</form>
</div>
<footer><h3 align="right"><strong>Developed by Sasurie Info-Tech(SIT)</strong></h3></footer>
</body>
<?php } ?>
</html>
