<?php
include "conn.php";
session_start();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

	$Pnumber=$_POST['Mnumber'];
	$email=$_POST['email'];
	$flyt='spicejet-90';
	$sql="INSERT INTO booking (numbers,mail,flight_num,bookingID)
		VALUES ('$Pnumber','$email','$flyt','1')";

	if ($conn->query($sql) === TRUE) {
    echo "Ticket Booked successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$query1= "SELECT pnr_num FROM booking WHERE  bookingID='1'";

$result = mysqli_query($conn,$query1)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
echo 'hi there';
 //$_SESSION['usersname'] = $username;
$fname1=$_POST['F1name'];
	$age1=$_POST['age1'];
	//$flyt='spicejet-90';

	$sql="INSERT INTO seats (t_name,age)
		VALUES ('$fname1','$age1')";

	if ($conn->query($sql) === TRUE) {
    echo "Ticket Booked successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>