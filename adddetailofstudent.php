<?php
include 'header.php';
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
<form method="POST" action="processfordetail.php">
	<div class="inner">
	<h1>Add Detail of Student</h1>


	Full Name:<input type="text" name="FullName"><br><br>
	Faculty:<input type="text" name="Faculty"><br><br>
	Semester:<input type="text" name="Semester"><br><br>
  Section:<input type="text" name="Section"><br><br>

	<input type="submit" name="submit" id="button" align="Center">
	</div>
