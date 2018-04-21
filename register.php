<html>
<?php
$host='localhost';
$user='root';
$pass='';
$db='coffee';
$con=mysqli_connect($host,$user,$pass,$db);
if($con)
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$ID=NULL;
	echo"$ID,$name,$email,$pass";
	$sql1="INSERT INTO `user` (`ID`, `Name`, `Email`, `Password`) VALUES (NULL,'$name','$email','$pass')";
	$sql2="INSERT INTO `cart` (`ID`, `Email`, `Cap`, `Lat`, `Black`, `Cold`, `Esp`, `Choc`) VALUES (NULL, '$email', '0', '0', '0', '0', '0', '0')";
	$query1=mysqli_query($con,$sql1);
	$query2=mysqli_query($con,$sql2);
	header("location:index.php");
}
?>
</html>