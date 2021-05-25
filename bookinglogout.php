<?php
session_start();
?>
<?php
unset($_session["cardname"]);
unset($_session["cardnumber"]);
header("location:home.php");
?>