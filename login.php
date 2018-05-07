<?php

	session_start();
	$con=mysqli_connect("localhost","root","","sample");


	if(isset($_POST['log']))
	{

		$v1=$_POST['mail'];
		$v2=$_POST['pass'];

		$s1=md5($v2);
		
		$q="select * from user where email='$v1' and password='$s1'";

		$res=mysqli_query($con,$q);

		$count=mysqli_num_rows($res);

		$fv=mysqli_fetch_assoc($res);

		$_SESSION['id']=$fv['cid'];

		$id=$_SESSION['id'];

		if($count==0)
		{
			header("Location:userindex.php?failed");
		}
		else
		{
			$u="update user set status=1 where cid='$id'";
			$res1=mysqli_query($con,$u);
			header("Location:userindex.php?success");
		}

	}

	if(isset($_POST['sign']))
	{
		$v1=$_POST['smail'];
		$v2=$_POST['spass'];
		$v3=$_POST['rpass'];

		//echo $v1."<br>".$v2."<br>".$v3."<br>";

		$s1=md5($v2);

		if($v2==$v3)
		{
			$q="insert into user(email,password) values('$v1','$s1')";
			$res=mysqli_query($con,$q);
			if($res==true)
			{

				header("Location:userindex.php?signup");
			}
			else
			{
				header("Location:userindex.php?fail");
			}
			
		}
		else
		{
			header("Location:userindex.php?error");
		}
	}

	if(isset($_POST['logout']))
	{

		$q="select * from user where status=1";

		$res=mysqli_query($con,$q);

		$count=mysqli_num_rows($res);

		$fv=mysqli_fetch_assoc($res);

		$_SESSION['id']=$fv['cid'];

		$id=$_SESSION['id'];

		if($count==0)
		{
			header("Location:userindex.php?login");
		}
		else
		{
			$u="update user set status=0 where cid='$id'";
			$res1=mysqli_query($con,$u);
			header("Location:userindex.php");
		}

	}

?>