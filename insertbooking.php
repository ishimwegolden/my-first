<?php
session_start();
?>

<?php
if(count($_POST)>0){
$con=mysqli_connect("localhost","root","","mujihotel");
$a=$_POST['destination'];
$b=$_POST['email'];
$d=$_POST['checkin'];
$e=$_POST['checkout'];
$f=$_POST['adult'];
$g=$_POST['children'];
$h=$_POST['payment'];
$i=$_POST['cardname'];
$j=$_POST['cardnumber'];
$k=$_POST['money'];
  if($con){
  	$query=mysqli_query($con,"insert into booking values('','$a','$b','$d','$e','$f','$g','$h','$i','$j','$k')");
  	   if($query){
       $fetch=mysqli_query($con,"select * from booking where cardname='$i' and cardnumber='$j'");
       $row=mysqli_fetch_array($fetch);
       if(is_array($row)){
       	$_SESSION["cardname"]=$row['cardname'];
       	$_SESSION["cardnumber"]=$row['cardnumber'];
  	echo"<script language='javascript'> alert('booking suceessfull');</script>";
  	 }
  	   }
      }
else
echo"<script language='javascript'> alert('booking unsuceessfull');</script>";
}
if(isset($_SESSION["cardnumber"])){
	header("location:home2.php");
}
?>