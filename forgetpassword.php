<html>

<link rel="stylesheet" type="text/css" href="insert c.css">
<head>
  
</head>
<body>
  <h1><center>update form</center></h1>
  <div class="tit">
<ul>
  <li><a href="retrieve form.php">customer</a></li>
  <li><a href="form 1.php">countable</a></li>
  <li><a href="retrieve form.php">manager</a></li>
  <li><a href="sum form.php">employee</a></li>
  </ul>
</div>
  <center>
    <fieldset>
      <legend>admin's records</legend>
      <form action="#" method="POST">
    <table>
<tr><td>enter id:</td><td><input type="text" name="search" id="search"></td><td><button type= "submit" name="register">search</button></td></tr><br>
</table></fieldset></center>
</form>
          <?php
           $con=mysqli_connect("localhost","root","","mujihotel");
           if(isset($_POST['register'])){
           $z=$_POST['search'];
            $query=mysqli_query($con,"select * from customer where customerid='$z'");
           while($row=mysqli_fetch_array($query)){
            ?> 
            <form action="updatedata.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['customerid']; ?>">
            <input type="text" name="username" value="<?php echo $row['username']; ?>">
            <input type="text" name="email" value="<?php echo $row['email']; ?>">
            <input type="text" name="password" value="<?php echo $row['password']; ?>">
            <input type="text" name="address" value="<?php echo $row['address']; ?>">
            <input type="text" name="contact_number" value="<?php echo $row['contact_number']; ?>">
            <input type="text" name="gender" value="<?php echo $row['gender']; ?>">
            <input type="text" name="idcard" value="<?php echo $row['id_card']; ?>">
            <input type="text" name="nationality" value="<?php echo $row['nationality']; ?>">
            <input type="submit" name="Update">
            
    </form>
    <?php
      }
    }
    ?>
</div>
</div>
</body>
</html>