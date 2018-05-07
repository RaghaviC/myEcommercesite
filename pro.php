<?php?>

<!DOCTYPE html>
<html>
<head>
	<title>Product details</title>
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
		
		#buy{
			background-color: #ff9600;!important
		}

		#cart{
			background-color: #cc2121;
		}

		.d{
    		cursor:pointer;
		}
		.d:hover{
   			 border: black solid 2px;
   			 opacity: 1.0;
		}

		#bottom_img>img{
			width: 50px;
			height: 50px;
		}

		.d{
			border: 2px double blue;
			opacity: 0.7;
		}

		#myimage{
			height: 500px;
			width: 500px;
		}

		ul{
			margin-left: 70px;
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

 					<script type="text/javascript">
 						t1=document.getElementById("mail");
 						t2=document.getElementById("pass");

 						t3=document.getElementById("smail");
 						t4=document.getElementById("spass");
 						t5=document.getElementById("rpass");

 						function validate(){
 							if(t1.value=="admin" && t2.value=="admin")
 							{
 								t1.value="";
 								t2.value="";
 								alert("Successfully logged in");
 							}
 							else
 							{
 								t1.value="";
 								t2.value="";
 								alert("Signup to Login");
 							}
 						}

 						function sign()
 						{
 							//$('#myModal').modal('toggle'); 
 							//$('#myModal').modal().hide();
 							//$("#myModal.close").click();
 						}
 					</script>

					<li>
						<a href="#">Cart 
							<span class="glyphicon glyphicon-shopping-cart"></span>
							<span class="badge" id="t1" style="background-color: black;"></span>
							<span class="badge" id="t2" style="background-color: black;"></span>
						</a>
					</li>
				</ul>
    		</div>
  		</div>
	</nav>

	<form method="get">
	<div class="container-fluid" id="pic">
		<div class="row">
	<?php
		$con=mysqli_connect("localhost","root","","sample");

		if(isset($_GET['id']))
		{
			$v1=$_GET['id'];
			
			$q="select * from pro where pid='$v1'";

			$res=mysqli_query($con,$q);

			$fv=mysqli_fetch_all($res,MYSQLI_ASSOC);

		foreach($fv as $n)
		{
			?>
			<div class="col-sm-6">
				<div class="thumbnail">
					<img src="<?php echo $n['pimage']?>" id="myimage"><br>
					<br>

					<div class="caption">
						<div class="row">
						<button type="button" id="cart" class="btn btn-warning car" value="<?php echo $n['pid'];?>">
							<span class="glyphicon glyphicon-shopping-cart"></span> Add to cart
						</button>
						<p class="col-sm-2"></p>
						
						<button type="submit" id="buy" name="buy" class="btn btn-warning" value="<?php echo $n['pid'];?>">Buy Item
						</button>
						</div><br>
					</div><br><hr>
				</div>
			</div>

			<script type="text/javascript">
	
				var count = 0;
				$(".car").click(function(){ 
					count++;
					$('#t1').html(count);
					$('#t2').html("<?php echo $n['pid']?>");
					
				});

			</script>

			<div class="col-sm-6" style="background-color: #fff;">
				<h3><?php echo $n['pname']?></h3>
				<h5><span class="label label-success"> 4.5 <span class="fa fa-star"></span></span>
					<span style="color: grey;font-style: bold;">250 Ratings</span>
				</h5>
				<hr>

				<h4 style="color: green;">Special Price</h4>
				<h3><?php echo $n['price']?>
					<span style="text-decoration: line-through;">Rs<?php echo $n['price']*2;?></span>
					<span style="color: green;">50% off</span>
				</h3>

				<hr>

				<h4>Size
					<button class="btn btn-default" value="S">S</button>
					<button class="btn btn-default" value="M">M</button>
					<button class="btn btn-default" value="L">L</button>
					<button class="btn btn-default" value="XL">XL</button>
				</h4>

				<hr>

				<h4 style="text-decoration: underline;">Highlights</h4><br><br>
					<?php 
						$v=$n['description'];
						echo str_replace(".", "<br>", $v);
					?>
				

				<hr>

				<br>
			</div>

		</div>
	</div>

			<?php
		}
	}

?>
</form>
</body>
</html>