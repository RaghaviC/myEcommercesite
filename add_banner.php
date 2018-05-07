<?php?>
<!DOCTYPE html>
<html>
<head>
	<title>Banner Image</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

   	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<!-- jQuery library -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  	<!-- Latest compiled JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<style type="text/css">
  		.thumbnail{
  			height: 100%;
  			width: 500px;
  			position: relative;
  			top: 200px;
  		}
  	</style>

</head>
<body>
	<center>
	<form method="post" enctype="multipart/form-data">
	<div class="thumbnail">
		<div class="caption">
			<h3>Add Image</h3>
		</div>
		<label>Select Image</label>
		<input type="file" name="bimage" class="form-control">
		<label>Image Name</label>
		<input type="text" name="txt" class="form-control"><br><br>
		<input type="submit" name="ban" class="btn btn-primary" value="Add" formaction="index.php">
		<input type="submit" name="can" class="btn btn-warning" value="Cancel" formaction="index.php?ch=slide"><br><br>
	</div>
	</form>
	</center>
</body>
</html>