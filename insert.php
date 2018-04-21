<html>
<?php
session_start();
if(!empty($_SESSION['email']))
{
	$host='localhost';
	$user='root';
	$pass='';
	$db='coffee';
	$email=$_SESSION['email'];
	$con=mysqli_connect($host,$user,$pass,$db);
	if($con)
	{
	$sql="SELECT * FROM cart WHERE Email='$email'";
	$real=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($real);
	if($_POST['choco']=='cap')
	{
	$cap=$row['Cap'];
	$cap=$cap+150;
	$sql="UPDATE `cart` SET `Cap` = '$cap' WHERE `Email` = '$email'";
	$real=mysqli_query($con,$sql);
	}
	if($_POST['choco']=='Lat')
	{
	$cap=$row['Lat'];
	$cap=$cap+180;
	$sql="UPDATE `cart` SET `Lat` = '$cap' WHERE `Email` = '$email'";
	$real=mysqli_query($con,$sql);
	}
	if($_POST['choco']=='choco')
	{
	$cap=$row['Choc'];
	$cap=$cap+200;
	$sql="UPDATE `cart` SET `Choc` = '$cap' WHERE `Email` = '$email'";
	$real=mysqli_query($con,$sql);
	}
	if($_POST['choco']=='black')
	{
	$cap=$row['Black'];
	$cap=$cap+100;
	$sql="UPDATE `cart` SET `Black` = '$cap' WHERE `Email` = '$email'";
	$real=mysqli_query($con,$sql);
	}
	if($_POST['choco']=='cold')
	{
	$cap=$row['Cold'];
	$cap=$cap+250;
	$sql="UPDATE `cart` SET `Cold` = '$cap' WHERE `Email` = '$email'";
	$real=mysqli_query($con,$sql);
	}
	if($_POST['choco']=='esp')
	{
	$cap=$row['Esp'];
	$cap=$cap+150;
	$sql="UPDATE `cart` SET `Esp` = '$cap' WHERE `Email` = '$email'";
	$real=mysqli_query($con,$sql);
	}
	}
	$_SESSION['succ']=56;
	header("location:menu.php");
}
else
	header("location:login.html");
?>
</html>