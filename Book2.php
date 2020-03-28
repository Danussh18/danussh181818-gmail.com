<!DOCTYPE html>
<html>
<head>
	<title>Experiment 7</title>
	<link rel="stylesheet" type="text/css" href="exp7.css">
	<script type="text/javascript" src="exp7.js"></script>
</head>
<body> 


	<div class="card-bg">

		<div id="signup" class="container"> <hr>
			<h1> Traveller Information</h1>
			<form action="loginvalid.php" method="post">
				<h3>Passenger1</h3>
				<input type="name" placeholder="Full Name" name="F1name" oninput="setInit(0);">
			    <input type="name" placeholder="Age" name="age1" oninput="setInit(0);"><br>
			    <h2><input type="radio" id="male" name="gender1" value="male">
				<label for="male">Male  &nbsp &nbsp &nbsp&nbsp &nbsp     </label> 
				<input type="radio" id="female" name="gender1" value="female">
				<label for="female">Female</label><br></h2>
			  <br>
			  <h3>Passenger 2</h3>
			  <input type="name" placeholder="Full Name" name="F2name" oninput="setInit(0);">
			    <input type="name" placeholder="Age" name="age2" oninput="setInit(0);"><br>
			    <h2><input type="radio" id="male" name="gender2" value="male">
				<label for="male">Male  &nbsp &nbsp &nbsp&nbsp &nbsp     </label> 
				<input type="radio" id="female" name="gender2" value="female">
				<label for="female">Female</label><br></h2>
			  <h2> Contact Information </h2>
			  <h5> your ticket email and sms will be sent here</h5>
				<input type="name" placeholder="Mobile Number" name="Mnumber" oninput="setInit(0);">
			    <input type="email" placeholder="Email ID" name="email" oninput="setInit(0);"><br>
			   <button type="submit" onclick='return validateForm(0);'>Proceed to Book</button>
			</form>
		</div> 
		
	</div>
</body>
</html> 