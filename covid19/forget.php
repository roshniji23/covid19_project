<?php 

include 'connection.php';
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$query="select * from covidadmin where email='$email' and mobile='$mobile'";
$data=mysqli_query($con , $query);
$request=mysqli_fetch_assoc($data);
$lastname=$request['lastname'];
echo "$lastname";

 ?>