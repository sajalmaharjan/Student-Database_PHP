<?php

$fn = $_POST['FullName'];

$fact = $_POST['Faculty'];
$sem=$_POST['Semester'];
$section=$_POST['Section'];

$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
$db = mysqli_select_db($con,"asian") or die(mysqli_error($con));
$q = "insert into studentdetails values('','$fn','$fact','$sem','$section')";
$res = mysqli_query($con,$q) or die(mysqli_error($con));
echo "Your entry has been registered";
header("location:showstudentdetail.php");
?>
