<?php

	$con=mysqli_connect("localhost","root","","sample");
	$q="select * from cat where pid=0";
	$res=mysqli_query($con,$q);
	$fv=mysqli_fetch_all($res,MYSQLI_ASSOC);
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
	<form method="post">
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">ADD</button>
			<div class="modal fade" id="myModal" role="dialog">
    			<div class="modal-dialog">
    
      			<!-- Modal content-->
      			<div class="modal-content">
        			<div class="modal-header">
          				<button type="button" class="close" data-dismiss="modal">&times;</button>
          				<h4 class="modal-title">Enter new category to add</h4>
        			</div>
        			<div class="modal-body">
          				<input type="text" name="txtc" id="txtcat" class="form-control" placeholder="Enter Category">
          				<button type="submit" class="btn btn-info" name="btn1" formaction="add_cat.php">Add</button>
        			</div>
        			<div class="modal-footer">
          				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			</div>
      			</div>
      
    			</div>
  			</div>


      		<div class="thumbnail">
      			<div class="caption">
      				<h2>Enter Details</h2>
      			</div>
				<label style="float: left">Select Category</label>
					<select class="form-control" name="txt1">
						<?php
							foreach($fv as $n)
							{
						?>
				
						<option value="<?php echo $n['id'];?>" >
							<?php echo $n['category']; ?>
						</option>
						<?php
							}
			
						?>

					</select>
			
					<label style="float: left">Sub-category</label>
					<input type="text" name="txt2" class="form-control"><br>
					<input type="submit" name="add" class="btn btn-primary" value="Add" formaction="index.php">
          <input type="submit" name="can" class="btn btn-warning" value="Cancel" formaction="index.php?ch=category"><br><br>
			</div>
	</form>
	</center>
</body>
</html>

<?php

  	if(isset($_POST['btn1']))
  	{

  		$a=$_POST['txtc'];

  		$q1="insert into cat(category) values('$a')";
  		$res1=mysqli_query($con,$q1);
  				
  	}

?>
