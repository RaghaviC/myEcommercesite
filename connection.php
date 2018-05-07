<?php
	class operation
	{
		public $con;

		function __construct()
		{
			$this->con=mysqli_connect("localhost","root","","sample");
		}

		function category()
		{
			$q="select * from cat";
			$res=mysqli_query($this->con,$q);
			return mysqli_fetch_all($res,MYSQLI_ASSOC);
		} 

		function product()
		{
			$q="select * from pro";
			$res=mysqli_query($this->con,$q);
			return mysqli_fetch_all($res,MYSQLI_ASSOC);
		}

		function banner()
		{
			$q="select * from banner";
			$res=mysqli_query($this->con,$q);
			return mysqli_fetch_all($res,MYSQLI_ASSOC);

		}
	}

	$obj=new operation();
?>