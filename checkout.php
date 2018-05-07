<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>Check out details</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		form{
			position: relative;
			top: 100px;
			left: 500px;
			width: 500px;
		}

	</style>

</head>
<body>

	<form method="get">
	
		<div class="thumbnail">
			<div class="caption">
				<h3>Enter Checkout Details</h3>
			</div>
			
			<label><strong>Billing Details</strong></label>				
      
        	<label>Enter Address</label>
			<textarea name="txt1" id="txt1" class="form-control" required></textarea><br>
							

    		<label><strong>Delivery Details</strong></label>				
      
        	<label>Enter Address</label>
			<textarea name="txt1" id="txt1" class="form-control" required></textarea><br>

          						

    		<label>Payment Details</label><br>
        					
      		<input type="radio" name="rb1" value="COD" checked> Cash On Delivery <br>

    		<label>Confirmation Order</label><br>

    		<?php
    			
    			if(isset($_POST['buy']))
				{

					$v1=$_POST['buy'];
					
					$con=mysqli_connect("localhost","root","","sample");
					$q="select * from pro where pid='$v1'";

					$res=mysqli_query($con,$q);

					$fv=mysqli_fetch_all($res,MYSQLI_ASSOC);

					$count=mysqli_num_rows($res);

					if($count==0)
					{
						echo "ERROR";
					}
					else
					{
						foreach($fv as $n)
						{
							?>
							<table border="1">
								<tr>
									<th>Product number</th>
									<th>Name</th>
									<th>Price</th>
								</tr>
								<tr>
									<td><?php echo $n['pid'];?></td>
									<td><?php echo $n['pname'];?></td>
									<td><?php echo $n['price'];?></td>
								</tr>
							</table>
							<?php
						}
					}
				}
    		?>
    		<br>
    		<center><input type="submit" class="btn btn-primary" value="Confirm" name="btn"></center>
			<br>
	</form>
</body>
</html>

<?php
?>