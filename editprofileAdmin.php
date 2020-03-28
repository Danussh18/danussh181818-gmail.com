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
	<title>Experiment 7</title>
	<link rel="stylesheet" type="text/css" href="exp7.css">
	<script type="text/javascript" src="exp7.js"></script>
</head>
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
$user=$_SESSION['usersname'];

	$sql = "SELECT user_name, FirstName, LastName,phonenum FROM admin WHERE user_name='$user' ";
if ($result = $conn -> query($sql)) {
			// output data of each row
				while($row = $result->fetch_row()) {
					$username=$row[0];
					$f_name=$row[1];
					$l_name=$row[2];
					$phone=$row[3];
		}}
		else {
				echo "0 results";
			}
?>

<body> 
	

	<div class="card-bg">

		<div id="signup" class="container"> <hr>
			<h1> Register Form </h1>
			<form action="ediA.php" method="post">

			  <label for="fname">First name    :</label>
			  <input type="text" name="Fname"value="<?php echo $f_name ?>" /><br>
			  <label for="fname">Last name     :</label>
			    <input type="text"  name="Lname" value="<?php echo $l_name ?>" oninput="setInit(0);"><br>
			  <label for="fname">Phone number  :</label>

				<input type="number"  name="Pnumber"value="<?php echo $phone?>"  oninput="setInit(0);"><br>
				
				<button type="submit" >update profile<button>
			</form>
		</div> 		
	</div>
</body>
</html> 