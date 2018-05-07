
<?php

	$con=mysqli_connect("localhost","root","","sample");
	
	$q="select * from cat where pid=0";
	$res=mysqli_query($con,$q);
	$fv=mysqli_fetch_all($res,MYSQLI_ASSOC);

	$q1="select * from cat where pid<>0";
	$res1=mysqli_query($con,$q1);
	$fv1=mysqli_fetch_all($res1,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Category</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

   	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<!-- jQuery library -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  	<!-- Latest compiled JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<style type="text/css">
  		form{
  			width: 50%;
  			padding: 40px 0px 0px 0px;
  		}

  		.btn-success{
  			position: relative;
  			border-radius: 50%;
  			left: 380px;
  			top: 145px;
  		}
  	</style>

</head>
<body>
	<center>
	<form method="post" enctype="multipart/form-data">

      		<div class="thumbnail">
      			<div class="caption">
      				<h2>Enter Details</h2>
      			</div>

      			<label style="float: left;">Name</label>
      			<input type="text" name="t1" class="form-control">

      			<label style="float: left">Image</label>
      			<input type="file" name="t2" class="form-control">

      			<label style="float: left;">Price</label>
      			<input type="text" name="t3" class="form-control">

      			<label style="float: left;">Description</label>
      			<textarea name="t4" class="form-control"></textarea>

				<label style="float: left">Select Category</label>
					<select class="form-control" name="t5">
						<?php
							foreach($fv as $n)
							{
						?>
				
						<option value="<?php echo $n['category'];?>" name="<?php $a=$n['id'];?>">
							<?php echo $n['category']; ?>
						</option>

						<?php
							}
						?>
					</select>

					<label style="float: left">Select Sub-Category</label>
					<select class="form-control" name="t6">
						<?php
							foreach($fv1 as $n)
							{
						?>
				
						<option value="<?php echo $n['category'];?>">
							<?php echo $n['category']; ?>
						</option>
						<?php
							}
						?>

					</select><br>
			
					<input type="submit" name="add1" class="btn btn-primary" value="Add" formaction="index.php">
					<input type="submit" name="can" class="btn btn-warning" value="Cancel" formaction="index.php?ch=product"><br><br>
			</div>
	</form>
	</center>
</body>
</html>
