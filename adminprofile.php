
<html>
<head>
	<title>Experiment 7</title>
	// <link rel="stylesheet" type="text/css" href="exp7.css">
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
</head>
<body align=center>
<H1> PROFILE </H1></BODY>
	<?php
  include "conn.php";
	session_start();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$user=$_SESSION['usersname'];
	$sql = "SELECT * FROM admin WHERE user_name='$user'";
		if ($result = $conn -> query($sql)) {
			// output data of each row
				while($row = $result->fetch_row()) {
					// echo '<table id="customers"><tr><td>User Name:</td><td>'.$row[1].'</td></tr></table>';
					echo '<table id="customers"><tr><td>First Name :</td><td>'.$row[2].'</td></tr></table>';
					echo '<table id="customers"><tr><td>Last Name :</td><td>'.$row[3].'</td></tr></table>';
					echo '<table id="customers"><tr><td>Phone number :</td><td>'.$row[4].'</td></tr></table>';					
				
		}}
		else {
				echo "0 results";
			}
?>

  

<a href="editprofileAdmin.php" target="_self">edit profile</a> &nbsp &nbsp &nbsp
				<a href="adm.php" target="_self">back</a>

</body></html>