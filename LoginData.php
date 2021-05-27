<?php
   $con=mysqli_connect("localhost","root","houssam","firstdatabase");
   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
	
   $username = $_POST['username'];
   $password = $_POST['password'];
   $result = mysqli_query($con,"SELECT * FROM users where username='$username' and password='$password'");
   
    if (mysqli_num_rows($result) != 0) {
	echo "True"; }
    else echo "Wrong credentials";
	
   mysqli_close($con);
   
?>




  