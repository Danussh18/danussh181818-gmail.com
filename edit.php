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
	<title>Edit Profile</title>
	<link rel="stylesheet" type="text/css" href="exp7.css">
</head>
<?php
include "conn.php";
session_start();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$un=$_SESSION['usersname'];

	$sql = "SELECT user_name,Aadhaar_num, f_name, l_name,e_mail,phone FROM user WHERE user_name='$un' ";
if ($result = $conn -> query($sql)) {
			// output data of each row
				while($row = $result->fetch_row()) {
					$f_name=$row[2];
					$l_name=$row[3];
					$Aadhaar_num=$row[1];
					$phone=$row[5];
					$e_mail=$row[4];
		}
	}
		else {
				echo "0 results";
			}
?>

<body> 
	

	<div class="card-bg">

		<div id="signup" class="container"> <hr><center>
			<h1> Register Form </h1></center>
			<form action="updateprofileacton.php" method="post">
			  <label for="fname">First name    :</label>
			  <input type="text" name="Fname"value="<?php echo $f_name ?>"  pattern="[a-zA-Z]{2,10}"/><br>
			  <label for="fname">Last name     :</label>
			    <input type="text"  name="Lname" value="<?php echo $l_name ?>"  pattern="[a-zA-Z]{2,10}"oninput="setInit(0);"><br>
			  <label for="fname">Aadhaar Number:</label>

				<input type="text" name="Aadhaar"value="<?php echo $Aadhaar_num ?>" pattern="[0-9]{12}" oninput="setInit(0);"><br>
			  <label for="fname">Phone number  :</label>
				<input type="telNo"  name="Pnumber"value="<?php echo $phone?>" pattern= "[7|8|9][0-9]{9}" oninput="setInit(0);"><br>
			  <label for="fname">Email         :</label>

				<input type="email" name="email"value="<?php echo $e_mail ?>"  oninput="setInit(0);"><br>
					<center><button type="submit" >update profile </button><br></center>

			</form>
		</div> 		
	</div>
</body>
</html> 