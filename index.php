<?php

include("connect.php");

$username =$_POST['username'];
$password =$_POST['password'];



echo "<h2>Login Information:</h2>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";




 $sql ="insert into  login form values('','$username' ,  '$password')";
 
 if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>