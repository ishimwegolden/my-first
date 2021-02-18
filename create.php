	<?php
	session_start();
	?>
<?php
	if(count($_POST)>0){
$conn=mysqli_connect("localhost","root","","project");
$a=$_POST['firstname'];
$b=$_POST['lastname'];
$c=$_POST['username'];
$d=$_POST['password'];
if($conn){
   $insert=mysqli_query($conn,"insert into new values('','$a','$b','$c','$d')"); 
   }
   if(isset($_SESSION['id'])){
	header("location:indexx.php");
}
   if(is_array($insert)){
   $_SESSION['id']=$insert["id"];
$_SESSION['name']=$insert["firstname"];
}
else
echo "failed !!!";
}

?>

<html>
<title>insert your records</title>
<head>
	<link rel="stylesheet" type="text/css" href="project.css">
</head>
<body>
	<form method="POST" action="#">
<ul>
<li><a href="new project.php">log in form</a></li>
<li><a href="create.php">create account</a></li>
<div class="titi">
<li><a href="logout.php">log out</a></li>
</ul>
</div>
		<center>
	<div class="fame">
	<img src="fred.jpg" style="border-radius: 30px; width: 100px; height: 100px; margin-left: 30px; margin-top: 50px; ">
</div>
	<fieldset style="width: 500px; border-radius: 20px; background-color: transparent; box-shadow: 3px 3px 3px 3px black">
		<legend>log in</legend>
		<center>
					<table>
	<tr><td><input type="text" name="firstname"  style="border-radius: 30rem; box-shadow: 3px 3px 3px 3px black;" placeholder="enter firstname" required></td>
	<td><input type="text" name="lastname" style="border-radius: 30rem; box-shadow: 3px 3px 3px 3px black;" placeholder="enter lastname" required></td></tr><br>
	<tr><td><input type="text" name="username" style="border-radius: 30rem; box-shadow: 3px 3px 3px 3px black;" placeholder="enter username"required></td>
		<td><input type="password" name="password" style="border-radius: 30rem; box-shadow: 3px 3px 3px 3px black;" placeholder="enter password"required></td></tr><br>
	<tr><td><input type="checkbox" name="check">I agree with terms and condition of website</td></tr>
	<tr><td><button type="submit" name="register">register</a></button></td>
		<td><button type="reset" name="cancel">cancel</button></td></tr>
</table>
</center>
</fieldset>
		</center>
</body>
</html>