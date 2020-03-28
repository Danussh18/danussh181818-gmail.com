
<html>
<head>
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="exp7.css">
	<style>
	#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
  vertical-align: middle;
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
</head>
<body align=center>
<H1> Flights</H1></BODY>
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

$source=$_POST['city1'];
	$desti=$_POST['city2'];
	$depdate=$_POST['departdate'];
	$arivdate=$_POST['arrivaldate'];

$sql = "SELECT flight_num,departure,arival,departure_date,arrival_date,departure_time,arrival_time FROM flight WHERE departure='$source' AND arival='$desti'";

if ($result = $conn -> query($sql)) {
			// output data of each row
	echo '<table id="customers"><tr><th>Airline</th><th>Departure</th><th>Arrival</th>
					<th>Departure Date</th><th>Arrival Date</th><th>Departure time</th> <th>Arrival time</th></tr></table>';
				while($row = $result->fetch_row()) {
					echo '<table id="customers"><tr><td>'.$row[0].' </td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td></tr></table>';
					
		}}
		else {
				echo "0 results";
			}

?>
</body>
</html>