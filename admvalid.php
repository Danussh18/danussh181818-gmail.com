<?php
include "conn.php";
session_start();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$username=$_POST['username'];
	$password=$_POST['psw'];
	
	$query = "SELECT user_name, password FROM admin WHERE user_name='$username' AND password='$password'";

$result = mysqli_query($conn,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);

if( $num_row ==1 )
     {
echo 'hi there';
 $_SESSION['usersname'] = $username;
 header('Location: admindash/admdashboard.php');
 exit;
  }
  else
     {
 echo 'oops  can not found';
  }
?>