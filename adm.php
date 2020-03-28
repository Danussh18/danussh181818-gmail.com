<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="exp7.css">
	<script type="text/javascript" src="exp7.js"></script>
</head>
<body> 


	<div class="card-bg">

		<div id="signup" class="container"> <hr>
			<h1>Admin Login</h1>
			<form action="admvalid.php" method="post">
				<input type="name" placeholder="Username" name="username" oninput="setInit(0);">
			    <input type="password" placeholder="Password" name="psw" oninput="setInit(0);">
			  <br>  <button type="submit" onclick='return validateForm(0);'>Login</button>
			</form>
		</div> 
		
	</div>
</body>
</html> 