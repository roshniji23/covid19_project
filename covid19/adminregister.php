<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<style type="text/css">
		.table tr td{height: 50px; width: 200px; text-align: center; box-shadow: 3px 3px 3px green;}
	</style>
</head>
<body>
	<center>

	<form action="" method="post">
		<table class="table">
			<tr>
				<h2><td colspan="2"><b>Admin Registration</b></td></h2>
			</tr>
			<tr><td>Name</td><td><input type="text" name="name"></td></tr>
			<tr><td>ID</td><td><input type="text" name="id"></td></tr>
			<tr><td>Email</td><td><input type="text" name="email"></td></tr>
			<tr><td>Mobile</td><td><input type="text" name="mobile"></td></tr>
			<tr><td>Create Password</td><td><input type="password" name="password"></td></tr>
			<tr><td colspan="2"><input type="submit" name="submit" value="Register"></td></tr>
			<tr><td colspan="2"><a href="adminloginpage.php">Admin Login</a></td></tr>
		</table>
	</form>

</center>
</body>
</html>

<?php 
include 'connection.php';
session_start();
if (isset($_POST['submit']))
 {
	
	$name=$_POST['name'];
	$id=$_POST['id'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	$query="insert into admin_info set a_name='$name' ,  a_id='$id' , a_email='$email' , a_mobile='$mobile' , a_password='$password' " ;
	$data=mysqli_query($con , $query);
	if ($data) {
		 
		header('location:adminlogin.php');

	}
	else
	{
		echo "sorry something is wrong";
	}



}


 ?>