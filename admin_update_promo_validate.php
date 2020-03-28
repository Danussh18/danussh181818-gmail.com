<!DOCTYPE html>
<html>
<head>
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

</head>
<body>

	<?php 
	session_start();
	$connect= new mysqli("localhost","test","manager","boom");
	if($connect->connect_error)
	 die("connection failed");
	else
	 echo "connected"; 
	$p_name=$_POST['p_name'];
	$s_date=$_POST['s_date'];
	$e_date=$_POST['s_date'];
	$n_times=$_POST['n_times'];
	$amount=$_POST['amount'];
	$percent=$_POST['percent'];
	$sql="SELECT * FROM `promo` WHERE p_name='$p_name'";
	$result=$connect->query($sql);
	if($result->num_rows==0)
	{
		echo " <div class='error-box'>promo code does not exist.</div>";
	}
	else
	{
		$sql1="UPDATE `promo` SET `s_date`='$s_date',`e_date`='$e_date',`n_times`='$n_times',`amount`='$amount',`percent`='$percent' WHERE p_name='$p_name'";
		$result1=$connect->query($sql1);
		echo " <div class='error-box'>promo updated succesfully.</div>";
	}





	?>
</body>
</html>