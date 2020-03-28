<?php
include "conn.php";
session_start();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
if(isset($_SESSION['usersname'])){
$username=$_SESSION['usersname'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}
if(isset($_POST['usersname'])){
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$sid=$_POST['staff_id'];
$postal=$_POST['postal_address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$user=$_POST['username'];
$pas=$_POST['password'];
$sql1=mysqli_query($con, "SELECT * FROM pharmacist WHERE username='$user'")or die(mysqli_error());
 $result=mysqli_fetch_array($sql1);
if($result>0){
$message="<font color=blue>sorry the username entered already exists</font>";
 }else{
$sql=mysqli_query($con, "INSERT INTO pharmacist(first_name,last_name,staff_id,postal_address,phone,email,username,password,date)
VALUES('$fname','$lname','$sid','$postal','$phone','$email','$user','$pas',NOW())");
if($sql>0) {header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/admin_pharmacist.php");
}else{
$message1="<font color=red>Registration Failed, Try again</font>";
}
	}}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $username;?>Flights</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="table.css" type="text/css" media="screen" />
<script src="function.js" type="text/javascript"></script>
<script>
function validateForm()
{

//for alphabet characters only
var str=document.form1.first_name.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("First Name Cannot Contain Numerical Values");
	document.form1.first_name.value="";
	document.form1.first_name.focus();
	return false;
	}}

if(document.form1.first_name.value=="")
{
alert("Name Field is Empty");
return false;
}

//for alphabet characters only
var str=document.form1.last_name.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("Last Name Cannot Contain Numerical Values");
	document.form1.last_name.value="";
	document.form1.last_name.focus();
	return false;
	}}


if(document.form1.last_name.value=="")
{
alert("Name Field is Empty");
return false;
}

}

</script>



   <style>#left-column {height: 550px;}
 #main {height: 550px;}
</style>
</head>
<body background="images/bng.jpg">
<div id="content">
<div id="header">
<h1>Flight Booking</h1></div>
<div id="main">
<div id="tabbed_box" class="tabbed_box">
    <h2>Manage flight booking</h2>
<hr/>
    <div class="tabbed_area">

        <ul class="tabs">
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">View Flights</a></li>
            <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">Add Flights</a></li>

        </ul>

        <div id="content_1" class="content">
		<?php 
       $result = mysqli_query($conn, "SELECT * FROM flight")or die(mysqli_error());
		// display data in table
        echo "<table border='1' cellpadding='5'align='center'>";
        echo "<tr> <th>Flight No</th> <th>Depature</th> <th>Arrival</th> <th>Departure Date</th> <th>Arrival Date</th> <th>Departure Time</th> <th>Arrival Time</th> <th>Update</th> <th>Delete</th></tr>";
        // loop through results of database query, displaying them in the table
        while($row = mysqli_fetch_array( $result )) {
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['flight_num'] . '</td>';
                echo '<td>' . $row['departure'] . '</td>';
				echo '<td>' . $row['arival'] . '</td>';
				echo '<td>' . $row['departure_date'] . '</td>';
				echo '<td>' . $row['arrival_date'] . '</td>';
				echo '<td>' . $row['departure_time'] . '</td>';
				echo '<td>' . $row['arrival_time'] . '</td>';
				?>
				<td><a href="update_pharmacist.php?username=<?php echo $row['username']?>"><img src="images/update-icon.png" width="35" height="35" border="0" /></a></td>
				<td><a href="delete_pharmacist.php?pharmacist_id=<?php echo $row['pharmacist_id']?>"><img src="images/delete-icon.jpg" width="35" height="35" border="0" /></a></td>
			</tr>
				<?php
		 }
        // close table>
        echo "</table>";
?>
        </div>
        <div id="content_2" class="content">
		<form name="form1" onsubmit="return validateForm(this);" action="admitflight.php" method="post" >
			<table width="220" height="106" border="0" >
				<tr><td align="center"><input name="first_num" type="text" style="width:170px" placeholder="First Number" required="required" id="first_name" /></td></tr>
				<tr><td align="center"><input name="departure" type="text" style="width:170px" placeholder="Departure" required="required" id="last_name" /></td></tr>
				<tr><td align="center"><input name="staff_id" type="text" style="width:170px" placeholder="Staff ID" required="required" id="staff_id"/></td></tr>
				<tr><td align="center"><input name="arival" type="text" style="width:170px" placeholder="Arrival" required="required" id="postal_address" /></td></tr>
				<tr><td align="center"><input name="email" type="email" style="width:170px" placeholder="Email" required="required" id="email" /></td></tr>
				<tr><td align="center"><input name="username" type="text" style="width:170px" placeholder="Username" required="required" id="username" /></td></tr>
				<tr><td align="center"><input name="password" type="password" style="width:170px" placeholder="Password" required="required" id="password"/></td></tr>
				<tr><td align="right"><input name="submit" type="submit" value="Submit"/></td></tr>
            </table>
		</form>
        </div>
    </div>
</div>
</div>

</div>
</body>
</html>
