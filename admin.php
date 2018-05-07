<?php?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

   	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<!-- jQuery library -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  	<!-- Latest compiled JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style type="text/css">
	.thumbnail{
		height: 100%;
		width: 500px;
		position: relative;
		top: 125px;
	}

	.alert-danger{
		width: 500px;
		position: relative;
		top: 110px;
		left: 431px;
	}
</style>
<body>


<center>
<form method="post">
	<div class="thumbnail">
		<div class="caption">
			<h3 style="text-decoration: underline;">Admin Login</h3>
		</div>
	
		<input type="text" name="txt1" placeholder="Admin Name" class="form-control"><br><br>
		<input type="password" name="txt2" placeholder="Password" class="form-control"><br><br>

		<input type="submit" name="login" value="Login" class="btn btn-primary" formaction="index.php">
	</div>
</form>
</center>

</body>
</html>

<?php
	if(isset($_GET['success']))
	{
		echo "<p align=center style=color:green;>Logged in successfully</p>";
	}
	if(isset($_GET['failed']))
	{
		//echo "<script type='text/javascript'>alert('Invalid login')</script>";
		//echo "<p align=center style=color:red;>Invalid username or password</p>";
		?>
		<div class="alert alert-danger" align="center">
  			<strong>Invalid Login</strong>
		</div>
		<?php
	}
?>