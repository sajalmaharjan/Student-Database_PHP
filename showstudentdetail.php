<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
	 <style type="text/css">
		 th{
			 background-color:#0040ff	;
			 color: white;
		 }
		 tr td{
			 background-color:#C0C0C0;
			 color: solid black;
		 }
		 td a{
			 text-decoration: none;
			 color: solid black;
		 }
		 td a:hover{
			 background-color: #0040ff;
			 color: white;

		 }
	 </style>
 </head>
 <body>

 </body>
</html>
<?php

	$con=mysqli_connect('localhost','root','') or die('can not connect to db');
	mysqli_select_db($con,"asian");
	$q="select * from studentdetails";
	$result=mysqli_query($con,$q) or die(mysqli_error($con));
	?>
<br> <br>
	<table border="1px" cellpadding="10" cellspacing="0" align="center">

		<tr>
			<th>Roll</th>
			<th>Full Name</th>
			<th>Faculty</th>
			<th>Semester</th>
			<th>Section</th>
			<th colspan="2">Action</th>
		</tr>

		<?php
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
			echo "<tr>";
			echo "<td>".$arr['Roll']."</td>";
			echo "<td>".$arr['FullName']."</td>";
			echo "<td>".$arr['Faculty']."</td>";
			echo "<td>".$arr['Semester']."</td>";
			echo "<td>".$arr['Section']."</td>";
			echo "<td><a target=_blank href='updatteForm.php?roll=".$arr['Roll']."'>Edit</a></td>";
			echo "<td><a href='deleteData.php?roll=".$arr['Roll']."' onclick='return confirm(\"Are you sure to delete?\");'>Delete</a></td>";
			echo "</tr>";

	}
?>
</table>
