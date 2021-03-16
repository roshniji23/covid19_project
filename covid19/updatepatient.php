
<?php 
session_start();
include 'connection.php';
 	$name=$_POST['name'];
 	$mobile=$_POST['mobile'];
 	$query="select * from patient where fullname='$name' and mobile='$mobile'";
 	$data=mysqli_query($con , $query);
     $result=mysqli_fetch_assoc($data);
    
     
$fullname=$result['fullname'];
$mobile=$result['mobile'];
$address=$result['address'];
$city=$result['city'];
$institute=$result['Institute'];
$sdm=$result['sdm'];
$pincode=$result['pincode'];
$country=$result['country'];
$pincode=$result['pincode'];
$state=$result['state'];
$age=$result['age'];
$hospital=$result['hospital'];
$gender=$result['gender'];
$condition=$result['conditions'];
$status=$result['status'];
$arive=$result['arive'];
$admit=$result['admit'];
$jail=$result['jail'];
$od=$result['od'];
$unic_id=$result['unic_id'];
$_SESSION['unic_id']="$unic_id";
if ($data) {

 ?>

<form action="updatepatientinfophp.php" method="post"><center>
		<table class="tablet"><tr class="hh"><td colspan="4"><b><center><h1>Update Patient Information</h1></center></b></td></tr><br>
		<tr><td><b>Patient Full Name</b></td><td><input type="text" name="fullname" value="<?php  echo "$fullname "; ?>"></td><td><b>Phone No.</b></td><td><input type="text" name="mobile" value="<?php  echo "$mobile "; ?>"></td></tr>
		<tr><td><b>Address</b></td><td><textarea name="address" value="<?php  echo "$address "; ?>"></textarea></td><td><b>City</b></td><td><input type="text" name="city" value="<?php  echo "$city "; ?>"></td></tr><br>
		<tr><td><b>Unique I.D. No</b></td><td><input type="text" name="unic_id" value="<?php  echo "$unic_id"; ?>"></td>
		<td><b>Name Of the Institute</b></td>

			<td><select name="Institute" value="<?php  echo "$Institute "; ?>">
				<option>RAPID ANTIGEN</option>
				<option>IISER</option>
				<option>NATIONAL ANTIGEN</option>
					<option>IISER</option>
						<option>CMCH</option>
							<option>PARUL ANTIGEN</option>
								<option>CORE DIGNOSTIC</option>
									<option>RKDF</option>
										<option>AIIMS</option>
											<option>LNMC</option>
												<option>DR. LALPATH LABS</option>
													<option>IISERBMP</option>
												
			</select></td></tr><br>

		<tr><td><b>SDM</b></td><td>
			<select name="sdm" value="<?php  echo "$sdm "; ?>"><option>Bairagadh</option>
           <option>M.P. Nagar</option>
           <option>City</option>
             <option>Govindpura</option>
              <option>Huzur</option>
               <option>Kolar</option>
                <option>TT Nagar</option>
                 <option>Other District</option>
                  <option>Unclaimed</option>
			</select>
		</td><td><b>Pincode</b></td><td><input type="number" name="pincode" value="<?php  echo "$pincode "; ?>"></td></tr><br>
		
		<tr><td><b>Country</b></td><td><select name="country" value="<?php  echo "$country "; ?>">
         	<option>india</option>
         	<option>america</option>
         	<option>ejipt</option>
         </select></td><td><b>State</b></td><td>
         <select name="state" value="<?php  echo "$state "; ?>">
         	<option>Madhya Pradesh</option>
         	<option>Uttar Pradesh</option>
         	<option>Maharashtra</option>
         </select>
		</td></tr><br>
		<tr><td><b>DOB</b></td>
			<td><input type="date" name="dob"></td>
			<td><b>Age</b></td><td><input type="number" name="age" value="age"></td></tr><br>
	<tr><td><b>Hospital Refer<b></td>
		<td><select name="hospital"><option>---</option><option>AIIMS</option><option>CHIRAYU</option><option>HAMIDIA</option><option>JP</option><option>LNCT</option><option>BANSAL</option><option>RKDF</option><option>BHOPAL CARE</option><option>CCC</option><option>OTHER HOSPITAL</option>
         <option>Roshan hospital</option>
														<option>samudayik swasth kendra berasia</option>
															<option>national hospital</option>
																<option>peoples medical college</option>
																	<option>noble multispeciality hospital</option>
																		<option>miletery hospital</option>
																		<option>mount hospital</option>
																		<option>KASTURBA HOSPITAL</option>
																		<option>Ayurvedic </option>
																		<option>unani</option>
																		<option>Homeopathy</option>

																			


		</select></td>
		<td><b>Gender</b></td><td colspan="3"><input type="Radio" name="gender" value="Male">Male<input type="Radio" name="gender" value="Female">Female<input type="Radio" name="gender" value="Bisexual">Bisexual</td></tr><br>
		<tr><td><b>Condition</b></td><td ><input type="Radio" name="conditions" value="serious">Serious<input type="Radio" name="conditions" value="Normal">Normal<input type="Radio" name="conditions" value="dead">Dead</td>
        <td><b>Status</b></td>
        	<td colspan=""><select name="status" value="<?php  echo "$status "; ?>"><option>---</option><option>Recoverd</option><option>Not Recoverd</option></select></td>
        	 <tr><td><b>Arived hospital<b></td>
        	 	<td colspan=""><select name="arive" value="<?php  echo "$arive "; ?>"><option>-----</option><option>self</option><option>By Ambulance</option></select></td>
        	 	<td><b>Status</b></td>
        	<td ><select name="admit" value="<?php  echo "$admit "; ?>"><option>-----</option><option>Home Isolation</option><option>TO be Admitted</option><option>Admitted</option><option>Untraced
        		</option></select></td></tr>
        		<tr><td ><b>Patient In a Jail</b></td><td><select name="jail" value="<?php  echo "$jail "; ?>">
         	<option>--</option>
         	<option>jail</option>
         	
         </select></td>
        		<td ><b>Patient From Other district</b></td><td><select name="od" value="<?php  echo "$od "; }?>">
         	<option>--</option>
         	<option>od</option>
         	
         </select></td></tr>
		<tr><td colspan="4"><center><input type="submit" name="submit"></center></td></tr><br>
		
</td></tr></table></center>
	
	
	</form>
