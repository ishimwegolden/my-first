<html>

<link rel="stylesheet" type="text/css" href="insert c.css">
<head>
<style>
body{
	background-image:url("image1.jpg");
	opacity: 5rem;
	background-size: cover;

}
</style>
</head>
<body>
	<form method="POST" action="#">
	<h1><center>navigation menu</center></h1>
	<div class="tit">
<ul>
	<li><a href="retrieve form.php">customer</a></li>
	<li><a href="form1.php">client</a></li>
	<li><a href="bookingform.php">booking record</a></li>
	<li><a href="sum form.php">employee</a></li>
	</ul>
</div>
<form action="#" method="POST">
	<center>
		<fieldset>
			<legend>admin's records</legend>
		<table>
<tr><td>enter your name:</td><td><input type="text" name="search" id="search"></td><td><button type= "submit" name="register">search</button></td></tr><br>
</table></fieldset></center>
<center>
			<?php
$a=mysqli_connect("localhost","root","","mujihotel");
$b=$_POST['search'];
     $fetch=mysqli_query($a,"select * from clients where id like'%$b%'");
	 echo"<table border='2' style='color: steelblue;'><tr><th>cid</th><th>names</th><th>email</th><th>message</th></tr>";						
while($p=mysqli_fetch_array($fetch))
   	{
      echo"<tr><td style='color: black; font-weight: bold; font-size: 18px;'>{$p['id']}</td><td style='color: black; font-size: 18px;'>{$p['names']}</td><td style='color: black; font-size: 18px;'>{$p['email']}</td><td style='color: black;font-size: 18px;'>{$p['message']}</td><td style='color: black; font-size: 18px;'><a href='update.php'>update</td><td style='color: black;'><a href='delete.php'>delete</td><td style='color: black;'><a href='wawoo.php'>insert</td></tr>";
	  }
	  echo"</table>";
	  ?>
	</center>
	</body>
	</html>