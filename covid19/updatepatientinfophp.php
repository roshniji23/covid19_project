<?php 
session_start();
include 'connection.php';
$fullname=$_POST['fullname'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$conditions=$_POST['conditions'];
$city=$_POST['city'];
$state=$_POST['state'];
$sdm=$_POST['sdm'];
$dob=$_POST['dob'];
$pincode=$_POST['pincode'];
$age=$_POST['age'];
$country=$_POST['country'];
$gender=$_POST['gender'];
$status=$_POST['status'];
$admit=$_POST['admit'];
$hospital=$_POST['hospital'];
$unic_id=$_POST['unic_id'];
$Institute=$_POST['Institute'];
$jail=$_POST['jail'];
$od=$_POST['od'];
$arive=$_POST['arive']; 
$id=$_SESSION['unic_id'];
$query="update  patient set fullname='$fullname' ,  address='$address' , mobile='$mobile' , conditions='$conditions' , city='$city' , sdm='$sdm' , pincode='$pincode' , dob='$dob' , gender='$gender' , country='$country' , age='$age' , state='$state' , status='$status' , admit='$admit' , hospital='$hospital' , unic_id='$unic_id' , Institute='$Institute' , jail='$jail' , od='$od'  , arive='$arive' where unic_id='$id' ";
$data=mysqli_query($con , $query);
if ($data) {
header('location:viewpositive.php');

}
else
{
	echo "sorry";
}
 ?>
