<?php
	include 'header.php';
 ?>
<?php
$con=mysqli_connect('localhost','root','') or die('can not connect to db');
mysqli_select_db($con,"asian");
$roll=$_GET['roll'];
$q="Select * from student where roll= $roll";
$result=mysqli_query($con,$q) or die(mysqli_error($con));
$arr=mysqli_fetch_assoc($result);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style type="text/css">
       .container{

     			border: 1px solid black;
     			width: 400px;
          height: 300px;
     			margin-left: 35%;
     			margin-top: 10%;
         background-color:#C0C0C0;
         padding: 10px 10px 10px;
       }
       input{
         display: inline-block;
       }
       #button{
         padding: 10px 24px;
         border-radius: 12px;
         background-color: #4CAF50;
       }
     </style>
   </head>
   <body>


<div class="container">
  <h1 align="center">Update Data</h1>


     <form class="" action="update.php" method="post" enctype="multipart/form-data">


     <input type="hidden" name="roll" value="<?php   echo $arr['roll']; ?>">
     Name:<input type="text" name="name" value="<?php   echo $arr['name']; ?>"><br><br>
		 Contact Number:<input type="text" name="contactnumber" value="<?php   echo $arr['contactnumber']; ?>"><br><br>
     Address:<input type="text" name="address" value="<?php   echo $arr['address']; ?>"><br><br>
     Gender:
     <input type="radio" name="gender" <?php if($arr['gender']=="M") {echo "checked";}?> value="Male">Male
      <input type="radio" name="gender" <?php if($arr['gender']=="F") {echo "checked";}?> value="Female">Female <br>
           <br><br>
					 <input type="file" name="img" ><br>

					 <input type="submit" name="btn" value="update" id="button">
           </form>
        </div>
   </body>
 </html>
