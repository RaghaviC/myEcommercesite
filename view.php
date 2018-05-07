<?php?>
<!DOCTYPE html>
<html>
<head>
	<title>View product</title>

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
		#name{
			height: 50px;
			align-content: center;
			text-decoration: underline;
			font-style: italic;
		}

		.sidenav {
    		height: 100%;
    		width: 200px;
    		
    		background-color: #fff;
    		left: 10px;
    		padding-top: 100px;
}

		.sidenav a {
    		padding: 6px 8px 6px 40px;
    		text-decoration: none;
    		font-size: 18px;
    		color: #000;
    		display: block;
		}

		.sidenav a:hover{
			color: #000;
			text-decoration: none;
		}

		#min,#max{
			height: 20px;
			width: 50px;
		}

		body{
			font-size: 18px;
			background-color: #cbc7c7;

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

		#myMenu input[type=text]{
  			width:100%;
  			border: none;
    		border-bottom: 2px solid grey;
    		padding: 40px 0px 0px 0px;
  		}

  		#myMenu input[type=password]{
  			width:100%;
  			border: none;
    		border-bottom: 2px solid grey;
    		padding: 40px 0px 0px 0px;
  		}

  		#myMenu center button{
  			padding: 0px 0px 0px 0px; 
  			height: 20px;
  			width: 80px;
  			background-color: #ff9600;
  		}

  		.thumbnail a > img, .thumbnail > img {
    		display: block;
    		max-width: 300px;
    		height: 300px;
		}

		.sidenav {
    		height: 100%;
    		width: 300px;
    		background-color: #fff;
    		left: 10px;
    		padding-top: 100px;
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
  
    		<form class="navbar-form navbar-left" action="/action_page.php">
      			<div class="form-group">
        			<input type="text" class="form-control" placeholder="Search" name="search">
      			</div>
      			<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
    		</form>
    
    		<div class="collapse navbar-collapse navbar-right" id="myMenu">
    			<ul class="nav navbar-nav navbar-right">
					
    				<li><a href="userindex.php">Home</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal">Login & Signup</a></li>
					<!-- Modal -->
  					<div class="modal fade" id="myModal" role="dialog">
    					<div class="modal-dialog">
    
      					<!-- Modal content-->
      						<div class="modal-content">
        						<div class="modal-header">
          							<button type="button" class="close" data-dismiss="modal">&times;</button>
          							<h4 class="modal-title">Login</h4>
        						</div>
        						<div class="modal-body">
          							<input type="text" placeholder="Enter E-mail" id="mail">
          							<input type="password" placeholder="Enter Password" id="pass">
          							<center><button class="btn btn-warning" onclick="validate()">Login</button>
          								<h4>Don't have an account</h4>
          								<!--SIGNUP MODAL-->
          								<button class="btn btn-warning" data-toggle="modal" data-target="#myModal1">Signup</button>

          								<div class="modal fade" id="myModal1" role="dialog">
          									<div class="modal-dialog">
          										<div class="modal-content">
          											<div class="modal-header">
          												<button type="button" class="close" data-dismiss="modal">&times;</button>
          												<h4>Signup</h4>
          											</div>
          											<div class="modal-body">
          												<input type="text" placeholder="Enter valid E-mail id" id="smail">
          												<input type="password" placeholder="Enter Password" id="spass">
          												<input type="password" placeholder="Re-type Password" id="rpass">
          												<center><button class="btn btn-warning" onclick="sign()">Signup</button></center>
          											</div>
          											<div class="modal-footer">
          												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        											</div>
          										</div>
          									</div>
          								</div>
          							</center>
        						</div>
        						<div class="modal-footer">
          							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        						</div>
      						</div>
    					</div>
 					</div>
					
					<li><a href="#">Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
				</ul>
    		</div>
  		</div>
	</nav>


	<div class="sidenav col-sm-3">
		

		<h5><span class="label label-primary" style="font-size: 20px;">Search By</span></h5>
		
		<hr>

		<h4>Price</h4>
		<div class="slidecontainer">
			<input type="range" min="500" max="5000" value="500" class="slider" id="range">
			Rs<input type="text" placeholder="min" id="min" value="500"> to
			Rs<input type="text" placeholder="max" id="max">
		</div>
		<script type="text/javascript">
			slider=document.getElementById("range");
			maximum=document.getElementById("max");

			slider.oninput=function(){
				maximum.value=slider.value;
			}

			maximum.oninput=function(){
				slider.value=maximum.value;
			}
		</script>
		<hr>

		<div id="brand">
			<h4>Brand</h4>
			<input type="checkbox" name="brands"> Biba<br>
			<input type="checkbox" name="brands"> All About You<br>
			<input type="checkbox" name="brands"> Anmi<br>
			<input type="checkbox" name="brands"> Fbb<br>
		</div>
		<hr>

		<div class="size">
			<h4>Size</h4>
			<input type="checkbox" name="sizes"> XS<br>
			<input type="checkbox" name="sizes"> S<br>
			<input type="checkbox" name="sizes"> M<br>
			<input type="checkbox" name="sizes"> L<br>
			<input type="checkbox" name="sizes"> XL<br><hr>
			<br>
		</div>

	</div>

<?php
	$con=mysqli_connect("localhost","root","","sample");
	
	if(isset($_POST['men']))
	{
		?><h3 align="center" style="text-decoration: underline;">MEN'S CLOTHING</h3><?php
		$q="select * from pro where category='Men'";
		$res=mysqli_query($con,$q);
		$fv=mysqli_fetch_all($res,MYSQLI_ASSOC);

		foreach($fv as $n)
		{
			?>
			<div class="col-sm-3">
				<div class="thumbnail">
					<a href="pro.php?id=<?php echo $n['pid'];?>" target="_blank">
						<img src="<?php echo $n['pimage'];?>">
							<div class="caption">
								<p><?php echo $n['pname']?>
									<h4 class="label label-primary">Rs .<?php echo $n['price'];?></h4>
									<h5><span class="label label-success">4.5 <span class="fa fa-star"></span></span></h5>
								</p>
							</div>
					</a>
				</div>
			</div>
		<?php
		}
	}

	if(isset($_POST['women']))
	{
		?><h3 align="center" style="text-decoration: underline;">WOMEN'S CLOTHING</h3><?php
		$q="select * from pro where category='Women'";
		$res=mysqli_query($con,$q);
		$fv=mysqli_fetch_all($res,MYSQLI_ASSOC);

		foreach($fv as $n)
		{
			?>
			<div class="col-sm-3">
				<div class="thumbnail">
					<a href="pro.php?id=<?php echo $n['pid'];?>" target="_blank">
						<img src="<?php echo $n['pimage'];?>">
							<div class="caption">
								<p><?php echo $n['pname']?>
									<h4 class="label label-primary">Rs .<?php echo $n['price'];?></h4>
									<h5><span class="label label-success">4.5 <span class="fa fa-star"></span></span></h5>
								</p>
							</div>
					</a>
				</div>
			</div>
		<?php
		}
	}

	if(isset($_POST['children']))
	{
		?><h3 align="center" style="text-decoration: underline;">CHILDREN'S CLOTHING</h3><?php
		$q="select * from pro where category='Children'";
		$res=mysqli_query($con,$q);
		$fv=mysqli_fetch_all($res,MYSQLI_ASSOC);

		foreach($fv as $n)
		{
			?>
			<div class="col-sm-3">
				<div class="thumbnail">
					<a href="pro.php?id=<?php echo $n['pid'];?>" target="_blank">
						<img src="<?php echo $n['pimage'];?>">
							<div class="caption">
								<p><?php echo $n['pname'];?>
									<h4 class="label label-primary">Rs .<?php echo $n['price'];?></h4>
									<h5><span class="label label-success">4.5 <span class="fa fa-star"></span></span></h5>
								</p>
							</div>
					</a>
				</div>
			</div>
		<?php
		}
	}
?>

</body>
</html>