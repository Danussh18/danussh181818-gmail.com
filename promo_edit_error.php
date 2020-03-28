
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="style.css">
  <script src="js/bootstrap.min.js" ></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
	<title></title>
	<style type="text/css">
	.error-box {
    color:#555;
    font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px;
    padding:10px 10px 10px 36px;
    margin:10px;
    background-color: #ffecec;
    border:1px solid #f5aca6;
    width: 300px;

</style>
<style>

form{
	margin-left: 450px;
	margin-top: 50px;
}


body {
  background-image: url('a1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
.f1 button
{
  margin-left: 750px;
  width: 15%;
  height: 10%;
}
.f2 button
{
  width: 20%;
  height:7%;
  margin-top: 10px;
  margin-left: 60px;
}
.f2 input
{
  width: 30%;
  margin-left: 20 px;
}
</style>
</head>
<body>
<?php
session_start();
$edit=$_SESSION['promo_edit_error'];
if($edit=="s_date_greater")
	echo " <div class='error-box'>Start Date is greater than End Date.</div>";
else if($edit=="format")
	echo " <div class='error-box'>Please enter in the correct format.YYYY-MM-DD</div>";
else if($edit=="e_date_lesser")
	echo " <div class='error-box'>End Date is lesser than Start Date.</div>";
else if($edit=="neg")
	echo " <div class='error-box'>Amount must be positive.</div>";
else if($edit=="percent")
	echo " <div class='error-box'>Enter a value between 0 and 100.</div>";
else if($edit=="n_times")
    echo " <div class='error-box'>Enter a positve number.</div>";
?>
    <form action="testing5.php" class="f2" method="POST">
		
		<button id="b2" class="btn btn-lg btn-primary btn-block" type="submit">GO Back</button>
	  </form>

</body>
</html>