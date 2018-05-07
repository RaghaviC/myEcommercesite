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
  		.btn-success{
  			position: relative;
  			left:870px;
  			top: 20px;
  			border-radius: 50%;
  		}

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

	<button type="button" class="btn btn-success" name="add_banner" onclick="window.location.replace('add_banner.php')">ADD</button>
	<button type="button" class="btn btn-danger" onclick="window.location.replace('admin.php')">Logout</button><br><br>

	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Image</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($b as $n)
				{
			?>
			<tr>
				<td><?php echo $i?></td>
				<td><img src="<?php echo $n['bimage'];?>" height=100 width=300></td>
				<td><?php echo $n['bname']?></td>
			</tr>

			<?php
					$i++;
				}
			?>

		</tbody>
	</table>
</body>
</html>