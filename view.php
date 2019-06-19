<?php
$roll=$_GET['roll'];
	$con=mysqli_connect('localhost','root','') or die('can not connect to db');
	mysqli_select_db($con,"asian");
	$q="select * from student where roll=$roll ";
	$result=mysqli_query($con,$q) or die(mysqli_error($con));
  $arr=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

 <p align="center" border=1px>
   <img src="image/<?php echo $arr['image'] ?>" style="height:200px; width:200px; border-radius:20%;">
   <b>
    <br>
     Roll no. <?php echo $arr['roll'] ?>
     <br>
     Name : <?php echo $arr['name'] ?>
     <br>
     Address: <?php echo $arr['address'] ?>
     <br>
     Gender: <?php echo $arr['gender'] ?>
     <br>
     Contact Number : <?php echo $arr['contactnumber'] ?>
     <br>

   </b>
 </p>
