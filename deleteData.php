<?php
	include 'header.php';
 ?>
<?php
$con=mysqli_connect('localhost','root','') or die('can not connect to db');
mysqli_select_db($con,"asian");
$roll=$_GET['roll'];
$q="delete from student where roll=$roll";
$result=mysqli_query($con,$q) or die(mysqli_error($con));
$arr=mysqli_fetch_assoc($result);

 if($result){
 	echo "Data changed at $roll";
 	header("location:display.php");
 }
 else
 {
 	die(mysqli_error($con));
 }



 ?>
