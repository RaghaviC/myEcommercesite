<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

   	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<!-- jQuery library -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  	<!-- Latest compiled JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<style type="text/css">
  		.btn-danger{
			float: right;
			position: relative;
			top: 20px;
			left: 340px;
			border-radius: 50%;
		}
  	</style>
  	
</head>
<body>
	<button type="button" class="btn btn-danger" onclick="window.location.replace('admin.php')">Logout</button><br><br><br><br>
	<div class="alert alert-success">
		<strong>Welcome Admin!!! You have Successfully logged in</strong>
	</div>
	<hr>
	<div class="alert alert-info">
		<strong>Dear admin,here is the place where you can add,modify and update your categories and products.Click the Category and Product tab to use it.</strong>
	</div>
</body>
</html>