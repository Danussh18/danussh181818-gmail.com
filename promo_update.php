<!DOCTYPE html>
<html>
<head>
	<title>add promo</title>
		<link rel="stylesheet" href="style.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>welcome bro</title>
	<style>
form{
	margin-left: 450px;
	margin-top: 50px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
body {
  background-image: url('a1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
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
  margin-left: 20px;
}

</style>
</head>
<body>

 <form action="admin_update_promo_validate.php" class="f2" method="POST">
		<input type="TEXT"  class="form-control" name="p_name" placeholder="promo_name">
    <input type="TEXT"  class="form-control"  name="s_date" placeholder="start date">
    <input type="TEXT"  class="form-control" name="e_date" placeholder="end date">
    <input type="TEXT"  class="form-control" name="n_times" placeholder="max tries">
      <input type="TEXT"  class="form-control" name="amount" placeholder="amount">
        <input type="TEXT"  class="form-control" name="percent" placeholder="percent">

		<button id="b2" class="btn btn-lg btn-primary btn-block" type="submit">UPDATE</button>
	  </form>


</body>
</html>