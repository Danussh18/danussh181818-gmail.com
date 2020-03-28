<!DOCTYPE html>
<html>
<style>
	#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin:auto;
  padding:70px 0;

}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px; 
  text-align: center;

    vertical-align: middle;

}

#customers tr:nth-child(even){background-color: #f2f2f2;
}

#customers tr:hover {background-color: #ddd;
align:center; 
 text-align: center;
}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
}
</style>
<head>
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="exp7.css">
	<script type="text/javascript" src="exp7.js"></script>

</head>
<body>

<div class="card-bg">

		<div id="signup" class="container"> <hr><center>
			<h1> PAYMENT </h1></center>	
			<form action="payment.php" method="post">
<?php
include "conn.php";

session_start();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$un=$_SESSION['usersname'];
	$sql = "SELECT e_mail,phone FROM user WHERE user_name='$un' ";
	$flight_num=$_POST['flight'];
	$sql1 = "SELECT fare from flight WHERE flight_num='$flight_num'";
if ($result = $conn -> query($sql)) {
				echo '<table id="customers"><tr><td>flight number :</td><td>'.$flight_num.'</td></tr></table>';
				echo '<table id="customers"><tr><td>username :</td><td>'.$un.'</td></tr></table>';
			// output data of each row
				while($row = $result->fetch_row()) {
				echo '<table id="customers"><tr><td>mobile number:</td><td>'.$row[1].'</td></tr></table>';
				echo '<table id="customers"><tr><td>e-mail :</td><td>'.$row[0].'</td></tr></table>';
				}
				

			}
		else {
				echo "0 results";
			}
		if($result = $conn -> query($sql1)){
				while($row = $result->fetch_row()) {
				echo '<table id="customers"><tr><td>fare :</td><td>'.$row[0].'</td></tr></table>';
				}
			}
		else {
				echo "0 results";
			}	
		$_SESSION['flight_num']= $flight_num;
?>
<center>	<button type="submit" >YES </button>&nbsp &nbsp &nbsp &nbsp<a href="userdashboard.php" target="_self">Cancel</a> </center>
</form>
</div>
</div>
</body>
</html>

