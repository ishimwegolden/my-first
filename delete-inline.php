<?php

$stu_id = $_GET['search'];

$con=mysqli_connect("localhost","root","","mujihotel");

$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>
