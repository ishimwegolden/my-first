
<head>

</head>
<form name="frmUser" method="post" action="#" align="center">
<h3>Enter Login Details</h3>
 Username:<br>
 <input type="text" name="us">
 <br>
 Password:<br>
<input type="password" name="pas">
<br><br>
<input type="submit" name="submit" value="Login">
<input type="reset">
</form>
<?php
session_start();
?>
<?php
$user=$_POST['us'];
$pass=$_POST['pas'];

 $con = mysqli_connect('localhost','root','','company')
 or die('Unable To connect');
//$result = mysqli_query($con,"SELECT * FROM login_user WHERE username='" . $_POST["us"] . "' and password = '". $_POST["pas"]."'");
$result = mysqli_query($con,"SELECT * FROM clients WHERE username='$user' and password = '$pass'");
$row  = mysqli_fetch_array($result);
if(is_array($row))
	{
$_SESSION["us"] = $row['username'];
$_SESSION["pas"] = $row['password'];
$_SESSION["new"]=$row['name'];
} 
if(isset($_SESSION["us"])) {
header("Location:Login.php");
}
?>
<html>
<head>
<body>

</body>
</html>
