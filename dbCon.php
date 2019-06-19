<?php
$con=mysqli_connect('localhost','root','') or die(mysql_error($con));
$db=mysqli_select_db($con,"asian") or die(mysqli_error($con));
$q="insert into student values(10,'rubeena','kathmandu')";
$result=mysqli_query($con,$q);
if(!$result){
	echo "Can not insert data";
	die(mysqli_error($con));
}
else{
	echo "sucessfully data inserted";
}
?>