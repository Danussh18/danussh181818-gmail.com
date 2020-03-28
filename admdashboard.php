<?php
include "conn.php";
session_start();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
if(isset($_SESSION['usersname'])){
$user=$_SESSION['usersname'];

}else{
    header("location:http://localhost/airline/homepage.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $user;?> </title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="dashboard_styles.css"  media="screen" />
<script src="function.js" type="text/javascript"></script>
<style>
#left_column{
height: 550px;
}

</style>
</head>
<body background="images/flight18.jpg">
<div id="content">
<div id="header">
<h1> Admin </h1></div> 
<div id="left_column">
<div id="button">
<ul>
			<li><a href="adminprofile.php">Profile Management</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
</div>
		</div>
<div id="main">

 <!-- Dashboard icons -->
            <div class="grid_7">
            	<a href="adminflight.php" class="dashboard-module">
                	<img src="images/flightadd.png" width="75" height="75" alt="edit" />
                	<span>Flights</span>
                </a>
                <a href="admin_pharmacist.php" class="dashboard-module">
                	<img src="images/clipboard.png"  width="75" height="75" alt="edit" />
                	<span>Bookings</span>
                </a>

                <a href="admin_manager.php" class="dashboard-module">
                	<img src="images/admin.png"  width="75" height="75" alt="edit" />
                	<span>KYC Approval</span>
                </a>

                <a href="admin_cashier.php" class="dashboard-module">
                	<img src="images/promocode.png" width="75" height="75" alt="edit" />
                	<span>Promocodes</span>
                </a>
			</div>
</div>

</div>
</body>
</html>
