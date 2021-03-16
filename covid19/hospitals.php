<?php 
include 'connection.php';
 ?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 <style type="text/css">
 	.table {border: 1px solid black; width: 900px; }
 	.table tr td{ border: 1px solid black; text-align: center;}

 </style><center>
<table class="table">
	<tr><td colspan="7"><h2><b><center>Admission Plan Summary 
    <?php 

date_default_timezone_set('asia/kolkata');
$currentdate=date('d-M-y ');
echo "$currentdate";
echo "<b>"."Till"."</b>";
$currenttime=date(' h:i:A', time());
echo "$currenttime"."</td></tr>";

 ?>
	</center></b></h2></td></tr>
	<tr><td>Institue Name</td>
<td>Already Admitted</td>
<td colspan="2">To Be Admited</td>
<td>Grand Total</td>
<td>Final Admitted</td>
<td>Pending For Admission</td><tr></tr>
<tr><td></td>
<td></td>
<td>Self</td>
<td>By Ambulance</td>
<td></td>
<td></td>
<td></td>
</tr>
	<tr><td colspan="7"><h3><center>Unpaid Hospital(Free)</center></h3></td></tr>
	<tr><td><b>AIIMS</b></td>
    
     	
    <?php 
      /////////////////////////for aiims//////////////////////////////////////
     
$query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
/////////////////////////////////////////////////////////////////////////////////////////////////
 /////////////////////////for hamidia//////////////////////////////////////
echo "<tr><td><b>Hamidia<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='hamidia'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='hamidia'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
/////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////for chirayu//////////////////////////////////////
echo "<tr><td><b>chirayu<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='chirayu'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='chirayu'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
/////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////for jp//////////////////////////////////////
echo "<tr><td><b>JP District Hospital<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='jb'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='jp'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='jp'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='jp'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='jp'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
///////////////////////////sub total/////////////////////////////////////////
echo "<tr><td><b>Sub Total<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	   $query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	$total=($result1+$result2+$result3+$result4);
	echo "<td>".$total."</td>";
	///////////////////////self////////////////////////
	   $query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='to be Admitted'  and arive='self' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='to be Admitted' and arive='self' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='to be Admitted' and arive='self' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	   $query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit=' to be Admitted' and arive='self' ";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	$total=($result1+$result2+$result3+$result4);
	echo "<td>".$total."</td>";
////////////////////////////////////////////////////////////
	///////////////////////ambulance////////////////////////
	   $query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='to be Admitted'  and arive='by ambulance' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='to be Admitted' and arive='by ambulance' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='to be Admitted' and arive='by ambulance' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	   $query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit=' to be Admitted' and arive='by ambulance' ";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	$total=($result1+$result2+$result3+$result4);
	echo "<td>".$total."</td>";
////////////////////////////////////////////////////////////
	$query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total1=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='jp'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total2=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='chirayu'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total3=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='hamidia'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total4=($result1+$result2);
$grandtotal=($Total1+$Total2+$Total3+$Total4);
echo "<td>".$grandtotal."</td>";
/////////////////////////////////////////////////////







  $query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	   $query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	$total=($result1+$result2+$result3+$result4);
	echo "<td>".$total."</td>";


////////////////////////////////////////////////////////////////////////////
	   $query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='to be Admitted'  ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='to be Admitted'  ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	   $query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit=' to be Admitted'  ";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	$total=($result1+$result2+$result3+$result4);
	echo "<td>".$total."</td>";
/////////////////////////////////////////////////////////////////////////////////////////////////
echo "<tr><td colspan='7'><center><b>"."Others Hospital"."</b></center></td></tr>";
///////////////////////////////////////////////////////////////////////////////////////
echo "<tr><td><b>RKDF(PAID)<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='RKDF'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='RKDF'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
///////////////////////////////////////////////////////////////////////////////
////////////////////////for bansal///////////////////////////////////
echo "<tr><td><b>Bansal Hospital<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='Bansal'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Bansal'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Bansal'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Bansal'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Bansal'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='bansal'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='bansal'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
////////////////////////////////////////////////////////////////////////////////////
////////////////////////for bansal///////////////////////////////////
echo "<tr><td><b>Bhopal Care<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='Bhopal Care'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
////////////////////////////////////////////////////////////////////////////////////
////////////////////////for bansal///////////////////////////////////
echo "<tr><td><b>Care Multi Speciality Hospital<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='care multi Speciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='care multi Speciality hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='care multi Speciality hospital'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='care multi Speciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='care multi Speciality hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital '  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='care multi speciality hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
////////////////////////////////////////////////////////////////////////////////////
////////////////////////for bansal///////////////////////////////////
echo "<tr><td><b>Kashturba hospital<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
//////////////////////////////////////////////////////////////////////
////////////////////////for bansal///////////////////////////////////
echo "<tr><td><b>Miletery  Hospital<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
//////////////////////////////////////////////////////////////////////
////////////////////////for bansal///////////////////////////////////
echo "<tr><td><b>Mount  Hospital<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
//////////////////////////////////////////////////////////////////////
////////////////////////for bansal///////////////////////////////////
echo "<tr><td><b>National  Hospital<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
//////////////////////////////////////////////////////////////////////
////////////////////////for bansal///////////////////////////////////
echo "<tr><td><b>Noble Multispeciality Hospital<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='Noble Multispeciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Noble Multispeciality hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Noble Multispeciality hospital'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Noble Multispeciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Noble Multispeciality hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Noble Multispeciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Noble Multispeciality hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
//////////////////////////////////////////////////////////////////////
////////////////////////for bansal///////////////////////////////////
echo "<tr><td><b>Peoples Medical College<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
//////////////////////////////////////////////////////////////////////
////////////////////////for bansal///////////////////////////////////
echo "<tr><td><b>ROSHAN HOSPITAL <b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
//////////////////////////////////////////////////////////////////////
////////////////////////for bansal///////////////////////////////////
echo "<tr><td><b>Samudayik Swasth Kendra berasia<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
//////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
echo "<tr><td><b>Paliwal Hospital<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
echo "<tr><td><b>Nirvana Hospital<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='Nirvana Hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana Hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana Hospital'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana Hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana Hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
echo "<tr><td><b>City Hospital<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='city'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='city'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='city'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='city'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='city'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='city'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='city'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
///////////////////////////////////////////////////////////////////////////
echo "<td><b>Sub Total</b></td>";
 $query= " SELECT * FROM `patient` WHERE  hospital='RKDF'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='bansal'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result5=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result6=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result7=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result8=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='noble Multi speciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result9=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result10=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result11=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result12=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'   and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result13=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'   and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result14=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'   and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result15=mysqli_num_rows($data);
$total=($result1+$result2+$result3+$result4+$result5+$result6+$result7+$result8+$result9+$result10+$result11+$result12+$result13+$result14+$result15);
echo "<td>".$total."</td>";
///////////////////////////////////////////////////////////////////////////////
$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='bansal'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result5=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result6=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result7=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result8=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='noble Multispeciality hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result9=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result10=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result11=mysqli_num_rows($data);
$query= " SELECT * FROM `patient` WHERE  hospital='city'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result12=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result13=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result14=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result15=mysqli_num_rows($data);
	$total=($result1+$result2+$result3+$result4+$result5+$result6+$result7+$result8+$result9+$result10+$result11+$result12+$result13+$result14+$result15);
echo "<td>".$total."</td>";
///////////////////////////////////////////////////////////////////////////////
$query= " SELECT * FROM `patient` WHERE  hospital='city'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result12=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result13=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result14=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result15=mysqli_num_rows($data);
$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='bansal'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result5=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result6=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result7=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result8=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='noble Multispeciality hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result9=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result10=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result11=mysqli_num_rows($data);
	$total=($result1+$result2+$result3+$result4+$result5+$result6+$result7+$result8+$result9+$result10+$result11+$result12+$result13+$result14+$result15);
echo "<td>".$total."</td>";
////////////////////////////////////////////////////////////////////////////
	$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total1=($result1+$result2);

	$query= " SELECT * FROM `patient` WHERE  hospital='bansal'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='bansal'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total2=($result1+$result2);

	$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total3=($result1+$result2);

	$query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total4=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total5=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total6=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total7=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='noble Multispeciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='noble Multispeciality hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total8=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total9=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total10=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total11=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total12=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total13=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='city'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='city'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total14=($result1+$result2);
$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total15=($result1+$result2);

$total=($Total1+$Total2+$Total3+$Total4+$Total5+$Total6+$Total7+$Total8+$Total9+$Total10+$Total11+$Total12+$Total13+$Total4+$Total15);
echo "<td>".$total."</td>";
/////////////////////////////////////////////////////////////////////////////////
$query= " SELECT * FROM `patient` WHERE  hospital='RKDF'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='bansal'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result5=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result6=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result7=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result8=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='noble Multi speciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result9=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result10=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result11=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result12=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result13=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result14=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='city'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result15=mysqli_num_rows($data);
	
$total=($result1+$result2+$result3+$result4+$result5+$result6+$result7+$result8+$result9+$result10+$result11+$result12+$result13+$result14+$result15);
echo "<td>".$total."</td>";
////////////////////////////////////////////////////////////////////////////////
$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='bansal'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result5=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result6=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result7=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result8=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='noble Multispeciality hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result9=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result10=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result11=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result12=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result13=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result14=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='city hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result15=mysqli_num_rows($data);
	$total=($result1+$result2+$result3+$result4+$result5+$result6+$result7+$result8+$result9+$result10+$result11+$result12+$result13+$result13+$result14+$result15);
echo "<td>".$total."</td>";
///////////////////////////////////////////////////////////////////////////////
echo "<tr><td colspan='7'><center><b>"."Covid Care Center(CCC)"."</b></center></td></tr>";
////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
echo "<tr><td><b>Ayurvedic<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
echo "<tr><td><b>Unani<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Unani'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Unani'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
echo "<tr><td><b>Homeopathy<b></td>";
   $query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and arive='by Ambulance' and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total=($result1+$result2);
echo "<td>".$Total."</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo " <td>".$result. "</td></tr>";
///////////////////////////////////////////////////////////////////////////////
echo "<tr><td><b>Sub Total</b></td>";
 $query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	 $total=($result1+$result2+$result3);
	echo "<td>".$total."</td>";
	//////////////////////////////////////////////////////
	$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and admit='to be Admitted'  and arive='self' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and admit='to be Admitted' and arive='self' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	   $query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and admit=' to be Admitted' and arive='self' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	$total=($result1+$result2+$result3);
	echo "<td>".$total."</td>";
	///////////////////////////////////////////////////////
	$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and admit='to be Admitted'  and arive='by ambulance' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and admit='to be Admitted' and arive='by ambulance' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	   $query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and admit=' to be Admitted' and arive='by ambulance' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	$total=($result1+$result2+$result3);
	echo "<td>".$total."</td>";
	/////////////////////////////////////////////////////////////////////
	$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total1=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Unani'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total2=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total3=($result1+$result2);
$grandtotal=($Total1+$Total2+$Total3);
echo "<td>".$grandtotal."</td>";

	/////////////////////////////////////////////////////////////////////
 $query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	 $total=($result1+$result2+$result3);
	echo "<td>".$total."</td>";

///////////////////////////////////////////////////////////////////////
		$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and admit='to be Admitted'  and arive='self' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and admit='to be Admitted' and arive='self' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	   $query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and admit=' to be Admitted' and arive='self' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	$total=($result1+$result2+$result3);
	echo "<td>".$total."</td></tr>";
	////////////////////////////////////////////////////
	echo "<tr><td colspan='7'><b>Miscellaneous</b></td></tr>";
	////////////////////////////////////////////
echo "<tr><td><b>Migrated</b></td><td></td><td></td><td></td>";
//////////////////////////////




///////////////////////////////
echo "<td></td><td></td><td></td></tr>";

//////////////////////////////
echo "<tr><td><b>Death</b></td><td></td><td></td><td></td>";
//////////////////////////////

  $query= " SELECT * FROM `patient`  WHERE conditions='dead' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

///////////////////////////////
echo "<td></td><td></td>";


echo "<tr><td><b>In Jail</b></td><td></td><td></td><td></td>";
//////////////////////////////

  $query= " SELECT * FROM `patient`  WHERE jail='jail' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

///////////////////////////////
echo "<td></td><td></td>";


echo "<tr><td><b>Other District</b></td><td></td><td></td><td></td>";
//////////////////////////////

  $query= " SELECT * FROM `patient`  WHERE od='od' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

///////////////////////////////
echo "<td></td><td></td>";

echo "<tr><td><b>Repeat Positive</b></td><td></td><td></td><td></td>";
//////////////////////////////
$query="SELECT fullname , COUNT(fullname) FROM patient  GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);

echo "<td>".$dat."</td>";


///////////////////////////////
echo "<td></td><td></td>";

echo "<tr><td><b>Home Isolation</b></td><td></td><td></td><td></td>";
//////////////////////////////

  $query= " SELECT * FROM `patient`  WHERE admit='home Isolation' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

///////////////////////////////
echo "<td></td><td></td>";

echo "<tr><td><b>Untraced</b></td><td></td><td></td><td></td>";
//////////////////////////////

  $query= " SELECT * FROM `patient`  WHERE admit='untraced' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

///////////////////////////////
echo "<td></td><td></td>";

echo "<tr><td><b>Sub Total</b></td><td></td><td></td><td></td>";
//////////////////////////////
/////////////////////////sub total of last////////////////////////
 

  $query= " SELECT * FROM `patient`  WHERE conditions='dead' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient`  WHERE jail='jail' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient`  WHERE od='od' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	$query="SELECT fullname , COUNT(fullname) FROM patient  GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$data=mysqli_query($con , $query);
$result4=mysqli_num_rows($data);
$query= " SELECT * FROM `patient`  WHERE admit='home Isolation' ";
$data=mysqli_query($con , $query);
	$result5=mysqli_num_rows($data);
	  $query= " SELECT * FROM `patient`  WHERE admit='untraced' ";
$data=mysqli_query($con , $query);
	$result6=mysqli_num_rows($data);

$total=($result1+$result2+$result3+$result4+$result5+$result6);
echo "<td>".$total."</td>";



//////////////////////////////////////////////////////////////////

///////////////////////////////
echo "<td></td><td></td></tr>";
//////////////////////////////////////////////////
echo "<tr><td><b>For Admission</b></td>";
///////////////////////////////////////////////
  $query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result16=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result17=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result18=mysqli_num_rows($data);
	   $query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result19=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='RKDF'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='bansal'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result5=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result6=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result7=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result8=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='noble Multi speciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result9=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result10=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result11=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result12=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result13=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result14=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='city'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result15=mysqli_num_rows($data);
	$Total=($result1+$result2+$result3+$result4+$result5+$result6+$result7+$result8+$result9+$result10+$result11+$result12+$result13+$result14+$result15+$result16+$result17+$result18+$result19);
echo "<td>".$Total."</td>";
/////////////////////////////////////////////////
$query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='to be Admitted'  and arive='self' ";
$data=mysqli_query($con , $query);
	$result15=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='to be Admitted' and arive='self' ";
$data=mysqli_query($con , $query);
	$result16=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='to be Admitted' and arive='self' ";
$data=mysqli_query($con , $query);
	$result17=mysqli_num_rows($data);
	   $query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit=' to be Admitted' and arive='self' ";
$data=mysqli_query($con , $query);
	$result18=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='bansal'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result5=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result6=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result7=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result8=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='noble Multispeciality hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result9=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result10=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result11=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='city'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result12=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result13=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result14=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and arive='self' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result19=mysqli_num_rows($data);
	$Total=($result1+$result2+$result3+$result4+$result5+$result6+$result7+$result8+$result9+$result10+$result11+$result12+$result13+$result14+$result15+$result16+$result17+$result18+$result19);
echo "<td>".$Total."</td>";
/////////////////////////////////////////////////
$query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='to be Admitted'  and arive='by ambulance' ";
$data=mysqli_query($con , $query);
	$result15=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='to be Admitted' and arive='by ambulance' ";
$data=mysqli_query($con , $query);
	$result16=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='to be Admitted' and arive='by ambulance' ";
$data=mysqli_query($con , $query);
	$result17=mysqli_num_rows($data);
	   $query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit=' to be Admitted' and arive='by ambulance' ";
$data=mysqli_query($con , $query);
	$result18=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='bansal'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result5=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result6=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result7=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result8=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='noble Multispeciality hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result9=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result10=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result11=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='city'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result12=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result13=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result14=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and arive='by ambulance' and admit='to be Admitted'";
$data=mysqli_query($con , $query);
	$result19=mysqli_num_rows($data);
	$Total=($result1+$result2+$result3+$result4+$result5+$result6+$result7+$result8+$result9+$result10+$result11+$result12+$result13+$result14+$result15+$result16+$result17+$result18+$result19);
echo "<td>".$Total."</td>";
////////////////////////////////////////////
	$query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total1=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='jp'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total2=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='chirayu'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total3=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='hamidia'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total4=($result1+$result2);
$grandtotal1=($Total1+$Total2+$Total3+$Total4);
/////////
	$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total1=($result1+$result2);

	$query= " SELECT * FROM `patient` WHERE  hospital='bansal'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='bansal'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total2=($result1+$result2);

	$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total3=($result1+$result2);

	$query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total4=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total5=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total6=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total7=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='noble Multispeciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='noble Multispeciality hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total8=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total9=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total10=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total11=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total12=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total13=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='city'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='city'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total14=($result1+$result2);
$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total15=($result1+$result2);

$grandtotal2=($Total1+$Total2+$Total3+$Total4+$Total5+$Total6+$Total7+$Total8+$Total9+$Total10+$Total11+$Total12+$Total13+$Total4+$Total15);
$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total1=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Unani'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total2=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total3=($result1+$result2);
$grandtotal3=($Total1+$Total2+$Total3);
$mostgrandtotal=($grandtotal1+$grandtotal2+$grandtotal3);
echo "<td>".$mostgrandtotal."</td>";
/////////////////////////////////////////////////////////////////////////

  $query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	   $query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	$total1=($result1+$result2+$result3+$result4);


$query= " SELECT * FROM `patient` WHERE  hospital='RKDF'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='bansal'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result5=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result6=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result7=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result8=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='noble Multi speciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result9=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result10=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result11=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result12=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result13=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result14=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient` WHERE  hospital='city'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result15=mysqli_num_rows($data);
	
$total2=($result1+$result2+$result3+$result4+$result5+$result6+$result7+$result8+$result9+$result10+$result11+$result12+$result13+$result14+$result15);

 $query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$total3=mysqli_num_rows($data);
	 $totalfinal=($total1+$total2+$total3);

	echo "<td>".$totalfinal."</td>";
/////////////////////////////////////////////////////////////////////////////

$query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='to be Admitted'  ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='to be Admitted'  ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	   $query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit=' to be Admitted'  ";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	$total1=($result1+$result2+$result3+$result4);



$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result4=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='bansal'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result5=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result6=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result7=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result8=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='noble Multispeciality hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result9=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result10=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result11=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result12=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result13=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result14=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='city hospital'  and admit='to be Admitted'   ";
$data=mysqli_query($con , $query);
	$result15=mysqli_num_rows($data);
	$total2=($result1+$result2+$result3+$result4+$result5+$result6+$result7+$result8+$result9+$result10+$result11+$result12+$result13+$result13+$result14+$result15);


	$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and admit='to be Admitted'  and arive='self' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
   $query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and admit='to be Admitted' and arive='self' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	   $query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and admit=' to be Admitted' and arive='self' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	$total3=($result1+$result2+$result3);

$grand=($total1+$total2+$total3);
echo "<td>".$grand."</td></tr>";

///////////////////////////////////////////////////////////////////////////
echo "<tr><td>Grand Total</td><td></td><td></td><td></td>";

$query= " SELECT * FROM `patient`  WHERE conditions='dead' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	 $query= " SELECT * FROM `patient`  WHERE jail='jail' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient`  WHERE od='od' ";
$data=mysqli_query($con , $query);
	$result3=mysqli_num_rows($data);
	$query="SELECT fullname , COUNT(fullname) FROM patient  GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$data=mysqli_query($con , $query);
$result4=mysqli_num_rows($data);
$query= " SELECT * FROM `patient`  WHERE admit='home Isolation' ";
$data=mysqli_query($con , $query);
	$result5=mysqli_num_rows($data);
	  $query= " SELECT * FROM `patient`  WHERE admit='untraced' ";
$data=mysqli_query($con , $query);
	$result6=mysqli_num_rows($data);

$total1=($result1+$result2+$result3+$result4+$result5+$result6);
$query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='AIIMS'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total1=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='jp'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='jp'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total2=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='chirayu'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='chirayu'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total3=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='hamidia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='hamidia'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total4=($result1+$result2);
$grandtotal1=($Total1+$Total2+$Total3+$Total4);
/////////
	$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='rkdf'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total1=($result1+$result2);

	$query= " SELECT * FROM `patient` WHERE  hospital='bansal'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='bansal'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total2=($result1+$result2);

	$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Bhopal care'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total3=($result1+$result2);

	$query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='care Multi speciality hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total4=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Kashturba hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total5=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Mount hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total6=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='National hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total7=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='noble Multispeciality hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='noble Multispeciality hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total8=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Peoples Medical College'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total9=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='ROSHAN hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total10=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Samudayik Swasth kendra berasia'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total11=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Paliwal hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total12=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Nirvana hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total13=($result1+$result2);

$query= " SELECT * FROM `patient` WHERE  hospital='city'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='city'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total14=($result1+$result2);
$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='miletery hospital'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total15=($result1+$result2);

$grandtotal2=($Total1+$Total2+$Total3+$Total4+$Total5+$Total6+$Total7+$Total8+$Total9+$Total10+$Total11+$Total12+$Total13+$Total4+$Total15);
$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Ayurvedic'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total1=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='Unani'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Unani'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total2=($result1+$result2);
	$query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'  and admit='Admitted' ";
$data=mysqli_query($con , $query);
	$result1=mysqli_num_rows($data);
	$query= " SELECT * FROM `patient` WHERE  hospital='Homeopathy'   and admit='to be Admitted' ";
$data=mysqli_query($con , $query);
	$result2=mysqli_num_rows($data);
$Total3=($result1+$result2);
$grandtotal3=($Total1+$Total2+$Total3);
$total2=($grandtotal1+$grandtotal2+$grandtotal3);
$tt=($total1+$total2);
echo "<td>".$tt."</td><td></td><td></td>";





?>

     
	</tr>

</table></center>

