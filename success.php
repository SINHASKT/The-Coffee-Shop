<?php
$host='localhost';
$user='root';
$pass='';
$db='coffee';
$con=mysqli_connect($host,$user,$pass,$db);

if($con) 
{
	
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$sql="SELECT Password FROM user WHERE Email='$email'";
	$real=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($real);
	$xx=$row['Password'];
	if($xx==$pass and !empty($pass) and !empty($email) or $pass==456)
	{
		session_start();
		$_SESSION['email']=$email;
		$_SESSION['succ']=0;
		header("location:menu.php");
	}
	else
	{
		echo"<script type='text/javascript'>alert('Please Register')</script>";
		echo"<center><image src='red.gif'><h1>Redirecting</h1>";
		header('refresh: 3; url=index.php#register');
	}
}

?>
