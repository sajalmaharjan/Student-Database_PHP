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
	$q="select * from student";
	$result=mysqli_query($con,$q) or die(mysqli_error($con));
	?>
<br> <br>
	<table border="1px" cellpadding="10" cellspacing="0" align="center">

		<tr>
			<th class="rowh">Roll</th>
			<th class="rowh">Name</th>
			<th class="rowh">Address</th>
			<th class="rowh">Gender</th>
			<th class="rowh">Contact Number</th>
			<th class="rowh" colspan="3">Action</th>
		</tr>

		<?php
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
			echo "<tr>";
			echo "<td>".$arr['roll']."</td>";
			echo "<td>".$arr['name']."</td>";
			echo "<td>".$arr['address']."</td>";
			echo "<td>".$arr['gender']."</td>";
			echo "<td>".$arr['contactnumber']."</td>";
			echo "<td><a  href='updatteForm.php?roll=".$arr['roll']."'>Edit</a></td>";
			echo "<td><a href='deleteData.php?roll=".$arr['roll']."' onclick='return confirm(\"Are you sure to delete?\");'>Delete</a></td>";
			echo"<td><a  href='view.php?roll=".$arr['roll']."'>View</a></td>";
			echo "</tr>";

	}
?>
</table>

</body>
</html>
