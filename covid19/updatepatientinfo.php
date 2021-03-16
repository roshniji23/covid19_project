<?php 
session_start();
include 'connection.php';
 ?>
<html>
<head>
	<title></title>
<style type="text/css">
	
	.table tr td{height: 50px; width: 200px;  background-color: skyblue; text-align: center; border-radius: 10px;}
</style>
</head>
<body><center>
<div class="div1">
	<form action="updatepatient.php" method="post"> 
	<table class="table"><tr><td colspan="5"><h2><b>Update Patient Information</b></h2></td></tr>
		<tr><td>Name</td><td><input type="text" name="name" placeholder="fullname"></td><td>Mobile</td>
         <td><input type="text" name="mobile" placeholder="584379924"></td>
         <td><input type="submit" name="submit" value="Search"></td>
		</tr>

	</table></form>
</div></center>
</body>
</html>
