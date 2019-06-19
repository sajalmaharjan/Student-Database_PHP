<?php
	include 'header.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<style type="text/css">
		.container{
			border: 1px solid black;
			width: 400px;
			margin-left: 35%;
			margin-top: 10%;
			background-color:#C0C0C0;

		}
		.inner{
			padding-left: 50px;
			padding-bottom: 50px;
			font-size: 20px;
		}
		input[type=submit]{
			margin-left: 30%;
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
<form method="post" action="process.php" enctype="multipart/form-data">
	<div class="inner">
	<h1>Form</h1>


	Name:<input type="text" name="name"><br><br>
	Address:<input type="text" name="address"><br><br>
	Contact Number:<input type="text" name="contactnumber"><br><br>

	Gender:Male<input type="radio" name="gender" value="Male">
				Female <input type="radio" name="gender" value="Female"><br><br>
				<input type="file" name="img" ><br><br>
	<input type="submit" name="submit" id="button" align="Center">
	</div>
</form>
</div>
</body>
</html>
