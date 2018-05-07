<?php
	include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

   	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<!-- jQuery library -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  	<!-- Latest compiled JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<style type="text/css">
  		.sidenav {
    		height: 100%;
    		width: 200px;
    		position: fixed;
    		z-index: 1;
    		top: 0;
    		left: 0;
    		background-color: #111;
    		overflow-x: hidden;
    		padding-top: 20px;
		}

		.sidenav a {
    		padding: 6px 6px 6px 32px;
    		text-decoration: none;
    		font-size: 25px;
    		color: #f1f1f1;
    		display: block;
		}

		.sidenav a:hover {
    		color: #818181;
		}


  	</style>
</head>

<?php


	$con=mysqli_connect("localhost","root","","ecommerce");


	//login

	if(isset($_POST['login']))
	{
		$v1=$_POST['txt1'];
		$v2=$_POST['txt2'];

		$q="select * from admin_login where password='$v2' and name='$v1'";

		$res=mysqli_query($con,$q);

		$count=mysqli_num_rows($res);

		if($count==0)
		{
			header("Location:admin.php?failed");
		}
		else
		{
			header("Location:index.php?success");
		}
	}
	?>
<body>
	
	<div class="row">
		<div class="col-sm-3">
			<div class="sidenav">
				<ul type="none">
					<li class="active"><a href="index.php?ch=dashboard">Dashboard</a></li><hr>
					<li><a href="index.php?ch=category">Category</a></li><hr>
					<li><a href="index.php?ch=product">Product</a></li><hr>
					<li><a href="index.php?ch=slide">Banner</a></li><hr>
				</ul>
			</div>
		</div>

		<div class="col-sm-6">
			<section align="center">
     			<?php
     				if(isset($_GET['ch']))
     				{
		 				switch($_GET['ch'])
		 				{
			 				case "category":$in=$obj->category();
			 				include("category.php"); break;

			 				case "product":$p=$obj->product();
			 				include("product.php");break;

			 				case "dashboard":
			 				include("dashboard.php");break;

			 				case "slide":$b=$obj->banner();
			 				include("banner.php");break;
		 				}
	 				}

	 				if(isset($_POST['add']))
	 				{
	 					$v1=$_POST['txt1'];
	 					$v2=$_POST['txt2'];

	 					$con=mysqli_connect("localhost","root","","sample");
	 					$q="insert into cat(category,pid) values('$v2','$v1')";

	 					$res=mysqli_query($con,$q);

	 					if($res==true)
	 					{
	 						$in=$obj->category();
	 						include("category.php");
	 					}
	 					else
	 					{
	 						echo "ERROR";
	 					}
					
	 				}

	 				if(isset($_POST['add1']))
	 				{
	 					$v1=$_POST['t1'];
	 					$v2=$_FILES['t2'];
	 					$v3=$_POST['t3'];
	 					$v4=$_POST['t4'];
	 					$v5=$_POST['t5'];
	 					$v6=$_POST['t6'];

	 					$ftmp=$_FILES['t2']['tmp_name'];
						$fname=$_FILES['t2']['name'];
						$ftype=$_FILES['t2']['type'];
						$fsize=$_FILES['t2']['size'];

						$path="myProducts/$fname";

						if($ftype=="image/jpeg")	
						{
							move_uploaded_file($ftmp, "myProducts/$fname");
						}
						else
						{
							echo "<br>invalid file type";
						}

	 					$con=mysqli_connect("localhost","root","","sample");
	 					$q="insert into pro(pname,pimage,price,description,category,sub_category) values('$v1','$path','$v3','$v4','$v5','$v6')";

	 					$res=mysqli_query($con,$q);

	 					if($res==true)
	 					{
	 						$p=$obj->product();
	 						include("product.php");
	 					}
	 					else
	 					{
	 						echo "ERROR";
	 					}
					
	 				}

	 				if(isset($_POST['ban']))
	 				{
	 					
	 					$v1=$_FILES['bimage'];
	 					$v2=$_POST['txt'];

	 					$ftmp=$_FILES['bimage']['tmp_name'];
						$fname=$_FILES['bimage']['name'];
						$ftype=$_FILES['bimage']['type'];
						$fsize=$_FILES['bimage']['size'];

						$path="myBanner/$fname";

						if($ftype=="image/jpeg")	
						{
							move_uploaded_file($ftmp, "myBanner/$fname");
						}
						else
						{
							echo "<br>invalid file type";
						}

	 					$con=mysqli_connect("localhost","root","","sample");
	 					$q="insert into banner(bimage,bname) values('$path','$v2')";

	 					$res=mysqli_query($con,$q);

	 					if($res==true)
	 					{
	 						$b=$obj->banner();
	 						include("banner.php");
	 					}
	 					else
	 					{
	 						echo "ERROR";
	 					}
					
	 				}
     			?>
   			</section>
   		</div>
   	</div>
</body>
</html>