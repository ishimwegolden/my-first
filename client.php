<?php
if(count($_POST)>0){
	$con=mysqli_connect("localhost","root","","mujihotel");
	$a=$_POST['names'];
	$b=$_POST['email'];
	$c=$_POST['message'];
	if($con){
	$query=mysqli_query($con,"insert into clients values('','$a','$b','$c')");
	echo"<script language='javascript'> alert('message has been sent')</script>";
	header("location:home.php");
	}
	else
	echo"<script language='javascript'> alert('message has not sent')</script>";

}