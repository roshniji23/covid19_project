<?php
session_start();
 include 'connection.php'; 
$query="SELECT * FROM `patient` " ;
$data=mysqli_query($con , $query);
  ?>
	

	<style type="text/css">
		.table tr td{ height: 100px; width: 200px; text-align: center; border: 1px solid black; }
		.tr{background-color: gray; color: white;}
	</style>
	
	<table class="table">
		<tr class="tr">
			
		<td><h3><b>Unique I.D.No.</b></h3></td>
		<td><h3><b>Name of The Institute</b></h3></td>
		<td><h3><b>Name of the Patient</b></h3></td>
		<td><h3><b>Age</b></h3></td>
		<td><h3><b>Gender</b></h3></td>
		<td><h3><b>Address</b></h3></td>
			<td><h3><b>Contact No.</b></h3></td>
			<td><h3><b>Action Taken</b></h3></td>
			<td><h3><b>Hospital Refer</b></h3></td>
					<td><h3><b>SDM</b></h3></td></tr>
						
		<?php
			           if ($data !== 0) {
			           	
			           	while ($result=$data->fetch_assoc()) {
			           	
			   	
			   	 	 echo "<tr><td>";  $unic_id=$result['unic_id'];   echo "$unic_id";   "</td>";       
			 echo "<td>";  $Institute=$result['Institute'];   echo "$Institute";   "</td>"; 
             	 echo "<td>";  $fullname=$result['fullname'];   echo "$fullname";   "</td>"; 
             	 	 echo "<td>";  $age=$result['age'];   echo "$age";   "</td>"; 
             	 	 	 echo "<td>";  $gender=$result['gender'];   echo "$gender";   "</td>"; 
             	 	 	 	 echo "<td>";  $address=$result['address'];   echo "$address";   "</td>"; 
             	 	 	 	  echo "<td>";  $mobile=$result['mobile'];   echo "$mobile";   "</td>"; 
             	 	 	 	   echo "<td>";  $admit=$result['admit'];   echo "$admit";   "</td>"; 
             	 	 	 	    echo "<td>";  $hospital=$result['hospital'];   echo "$hospital";   "</td>"; 
             	 	 	 	 	 echo "<td>";  $sdm=$result['sdm'];   echo "$sdm";   "</td></tr>"; 

 









			  }}?>
	
			 	
		

           

	</table>












