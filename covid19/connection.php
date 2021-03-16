<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db =  "covid_19";
$con = mysqli_connect($host , $user , $pass , $db);
if(mysqli_connect_errno())
{
	echo "connection error";
	exit;
}

?>