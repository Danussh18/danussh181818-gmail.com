<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbName="airline";
// Create connection
$conn = new mysqli($servername,$username,$password,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$fname=$_POST['Fname'];
	$lname=$_POST['Lname'];
	$Pnumber=$_POST['Pnumber'];

//$un=$_SESSION['usersname'];
	$sql = "UPDATE admin SET FirstName='$fname', LastName='$lname',phonenum='$Pnumber' WHERE user_name='akhila'";
	if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
	 header('Location: adminprofile.php');

} else {
    echo "Error updating record: " . $conn->error;
} 

?>
