<?php
	$con=mysqli_connect("localhost","root","","sample");
?>

<!DOCTYPE html>
<html>
<head>
	<title>E-Commerce Site</title>

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
		body{
			font-size: 18px;

		}

		.navbar-inverse{
			background-color: #5778d7;
			border:none;
		}

		.navbar-default{
			background-color: #fff; 
			border:none;
			padding-top: 0px;
			color: #000; 
			font-size: 16px;
			height: 40px; 
			text-align: center;
		}

		.navbar-invser .navbar-nav > li > a {
   	 		color: #fff;
   	 	}

		.navbar-inverse .navbar-brand{
			color: #fff;
		}

		 .navbar-inverse .navbar-nav > li > a:hover {
    		color: #fff;
		}

		.navbar-default .navbar-nav > li > a:hover,.navbar-default .navbar-nav > li > a:focus {
    		color: #000;
		}

		.navbar-default .navbar-nav > li > a {
    		color: #000;
		}

		.navbar-inverse .navbar-brand:hover{
			color: white;
			cursor: pointer;
		}

		.navbar-inverse .navbar-nav > li > a {
    		color: #fff;
		}

		.navbar-inverse .navbar-form button{
			padding: 6px 10px;
			margin-left: -5px;
			border-radius: 0px;
		}

		.navbar-inverse .navbar-form input{
			border-radius: 0px;
		}

		.navbar-collapse{
			padding-right: 60px;
		}

		.navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:focus, .navbar-inverse .navbar-nav > .open > a:hover {
    		color: #fff;
    		background-color: #5778d7;
		}

		#c1 div img{
			height: 400px;
			width: 100%;
		}

		figure img{
			height: 200px;
			width: 200px;
		}

  		#myMenu center button{
  			padding: 0px 0px 0px 0px; 
  			height: 20px;
  			width: 80px;
  			background-color: #ff9600;
  		}

  		.btn-info{
  			position: relative;
  			left: 1200px;
  			width: 150px;
  			background-color: #06c5a6;
  		}

  		.btn-danger{
  			position: relative;
  			left:225px;
  		}

	</style>

</head>
<body>

	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myMenu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
      			<a class="navbar-brand" href="userindex.php">WebSiteName</a>
    		</div>
  
    		<form class="navbar-form navbar-left" action="/action_page.php" method="post">
      			<div class="form-group">
        			<input type="text" class="form-control" placeholder="Search" name="search">
      			</div>
      			<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
    		</form>

    		<div class="collapse navbar-collapse navbar-right" id="myMenu">
    			<ul class="nav navbar-nav navbar-right">
					
    				<li><a href="userindex.php">Home</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal1" id="l1">Login & Signup</a></li>
					<!-- Modal -->
						<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  							<div class="modal-dialog">
    							<div class="modal-content">
      								<div class="modal-header">
      									<button type="button" class="close" data-dismiss="modal">&times;</button>
         								<h4 class="modal-title" id="myModalLabel">Login</h4>
      								</div>
      
      								<div class="modal-body">
        								<form method="post">

        									<input type="email" class="form-control" placeholder="Enter E-mail" id="mail" name="mail" required><br>
          									<input type="password" class="form-control" placeholder="Enter Password" id="pass" name="pass" required><br>
          									<center>
          										<button type="submit" class="btn btn-warning" formaction="login.php" name="log">Login</button>
          										<h4>Don't have an account</h4>
          										<!--SIGNUP MODAL-->
          										<button type="button" class="btn btn-warning" id="signin">Signup</button>
          									</center>
      								</div>
      
      								<div class="modal-footer">
        								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      								</div>
        							</form>
    								</div>
  								</div>
							</div>
  
  					<!-- Modal -->
					<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content">
      							<div class="modal-header">

      								<button type="button" class="close" data-dismiss="modal">&times;</button>
        							<h4 class="modal-title" id="myModalLabel">Signup</h4>
      							</div>
      
      							<div class="modal-body">
      								<form method="post">
      								<input type="email" class="form-control" placeholder="Enter valid E-mail id" id="smail" name="smail" required><br>
        							<input type="password" minlength="6" class="form-control" placeholder="Enter Password" id="spass" name="spass" required><br>
        							<input type="password" minlength="6" class="form-control" placeholder="Re-type Password" id="rpass" name="rpass" required><br>
        							<center><button type="submit" class="btn btn-warning" formaction="login.php" name="sign">Signup</button></center>
      							</div>
      
      							<div class="modal-footer">
        							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      							</div>
        						</form>
    						</div>
  						</div>
					</div>

					<script type="text/javascript">
						//set button id on click to hide first modal
						$("#signin").on( "click", function() {
        				$('#myModal1').modal('hide');  
						});

						//trigger next modal
						$("#signin").on( "click", function() {
        				$('#myModal2').modal('show');  
						});

					</script>

					    <div class="modal fade" id="failedModal" tabindex="-1" role="dialog">
    						<div class="modal-dialog">
        						<div class="modal-content">
            						<div class="modal-header">
                						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                						<h4 class="modal-title" id="failedModal">Alert</h4>
            						</div>
            						<div class="modal-body">
                						<div class="alert alert-danger">Please Check the E-mail ID and Password</div>                     
            						</div>    
        						</div>
    						</div>
						</div>

						<div class="modal fade" id="successModal" tabindex="-1" role="dialog">
    						<div class="modal-dialog">
        						<div class="modal-content">
            						<div class="modal-header">
                						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                						<h4 class="modal-title" id="successModal">Alert</h4>
            						</div>
            						<div class="modal-body">
                						<div class="alert alert-success">Logged in successfully!!!</div>                     
            						</div>    
        						</div>
    						</div>
						</div>
						

					
					<li><a href="checkout.php">Check out <span class="glyphicon glyphicon-share-alt"></span></a></li>
					<li>
						<a href="#">Cart 
							<span class="glyphicon glyphicon-shopping-cart"></span>
							<span class="badge" id="t1" style="background-color: black;"></span>
							<span class="badge" id="t2" style="background-color: black;"></span>
						</a>
					</li>
				</ul>
			</form>
			<form method="post">
				<button id="logout" type="submit" class="btn btn-danger"  formaction="login.php" name="logout" style="display:none;">Logout</button>
			</form>
    		</div>
  		</div>
	</nav>

	<?php

		if(isset($_GET['failed']))
		{
			echo "<script>$('#failedModal').modal('show')</script>";
		}

		if(isset($_GET['success']))
		{
			echo "<script>$('#successModal').modal('show')</script>";
			?>
			<script type="text/javascript">
				$('#l1').hide();
				$('#logout').show();
			</script>
			<?php
		}
	?>



	<?php 
    	
    	$q="select * from banner";
    	$res=mysqli_query($con,$q);
    	$fv=mysqli_fetch_all($res,MYSQLI_ASSOC);

    	$a=array();

    	foreach($fv as $n)
    	{
    		array_push($a,$n['bimage']);
    		//echo $n['bimage']."<br>";
    	}
	?>


	<div id="c1" class="container-fluid">
  		<div id="myCarousel" class="carousel slide" data-ride="carousel">

  			<div class="carousel-inner">
	<?php
    	for($i=0;$i<count($a);$i++)
    	{
    		if($i==0)
    		{
    			?>
    			<div class="item active">
        			<img src="<?php echo $a[$i];?>" class="img-responsive">
      			</div>
    			<?php
    		}
    		else
    		{
    			?>
    			<div class="item">
        			<img src="<?php echo $a[$i];?>" class="img-responsive">
      			</div>
    			<?php
    		}
    		?>
    		
      		<?php
    	}
    ?>
			</div>

			<!-- Left and right controls -->
        	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
            	<span class="glyphicon glyphicon-chevron-left"></span>
            	<span class="sr-only">Previous</span>
        	</a>
        
       		 <a class="right carousel-control" href="#myCarousel" data-slide="next">
            	<span class="glyphicon glyphicon-chevron-right"></span>
            	<span class="sr-only">Next</span>
        	</a>
		</div>
	</div>


	<form action="view.php" method="post">
	<h2 style="font-family: ariel;font-style: italic;text-decoration: underline;">Featured Products</h2><br>
	

	<div id="feature" class="container-fluid">

		<h1 class="col-sm-3" align="center">Women's Clothings<br><br>
			<input type="submit" name="women" value="View All" class="btn btn-primary">
		</h1>


	<?php

		$q="select * from pro where category='Women' limit 3";

		$res=mysqli_query($con,$q);

		$fv=mysqli_fetch_all($res,MYSQLI_ASSOC);
	
		foreach($fv as $n)
		{
	?>

	<figure class="col-sm-3">
		<a href="pro.php?id=<?php echo $n['pid'];?>" target="_blank">
			<img src="<?php echo $n['pimage']?>" />
		</a>

		<p><?php echo $n['pname'];?></p>
		<input type="text" name="n1" id="t" value="<?php echo $n['pid'];?>">
		<button type="button" id="cart" class="btn btn-warning car" value="<?php echo $n['pid'];?>">
			<span class="glyphicon glyphicon-shopping-cart"></span> Add to cart
		</button>

	</figure>

	<?php
		}
	?>

	<script type="text/javascript">
	
		var count = 0;
		$(".car").click(function(){ 
			count++;
			$('#t1').html(count);
			alert($('#t').val());
		});

	</script>
	
	</div><br><br>

	<div id="men" class="container-fluid">

		<h1 class="col-sm-3" align="center">Men Clothings<br><br>
			<input type="submit" name="men" value="View All" class="btn btn-primary">
		</h1>

		<?php

		$q="select * from pro where category='Men' limit 3";

		$res=mysqli_query($con,$q);

		$fv=mysqli_fetch_all($res,MYSQLI_ASSOC);
	
		foreach($fv as $n)
		{
	?>

	<figure class="col-sm-3">
		<a href="pro.php?id=<?php echo $n['pid'];?>" target="_blank">
			<img src="<?php echo $n['pimage']?>" />
		</a>
		<p><?php echo $n['pname']?></p>
	</figure>
	<?php
		}
	?>
	
	</div><br><br>

	<div id="child" class="container-fluid">

		<h1 class="col-sm-3" align="center">Women's Clothings<br><br>
			<input type="submit" name="children" value="View All" class="btn btn-primary">
		</h1>


	<?php

		$q="select * from pro where category='Children' limit 3";

		$res=mysqli_query($con,$q);

		$fv=mysqli_fetch_all($res,MYSQLI_ASSOC);
	
		foreach($fv as $n)
		{
	?>
	<figure class="col-sm-3">
		<a href="pro.php?id=<?php echo $n['pid'];?>" target="_blank">
			<img src="<?php echo $n['pimage']?>" />
		</a>
		<p><?php echo $n['pname']?></p>
	</figure>
	<?php
		}
	?>
	
	</div>

</form>

	</body>
</html>	