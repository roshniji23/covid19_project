<?php 
session_start();
include 'connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$dob=$_POST['dob'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$query="insert into covidadmin set firstname='$firstname' , lastname='$lastname' , dob='$dob' ,  city='$city' , state='$state' , country='$country' , email='$email' , password='$password' , mobile='$mobile' , address='$address' ";
$data=mysqli_query($con , $query);
if ($data)
 {
	header('location:adminlogin.php');
}
else
{
	echo "fail";

}?>