<html>
<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<body>
	<style type="text/css">
		.tablet{height: 700px; width: 800px;  padding: 10px; }
		.tablet tr td{height: 70px; width: 200px; box-shadow: 5px 5px 5px gray; text-align: center; }
		.hh{background-color: gray; color: white;}

		.submit{height: 100px; width: 70%;}
	</style>
	
	<form action="newpatient.php" method="post"><center>
		<table class="tablet"><tr class="hh"><td colspan="4"><b><center><h1>Enter Patient Information</h1></center></b></td></tr><br>
		<tr><td><b>Patient Full Name</b></td><td><input type="text" name="fullname"></td><td><b>Phone No.</b></td><td><input type="text" name="mobile"></td></tr>
		<tr><td><b>Address</b></td><td><textarea name="address"></textarea></td><td><b>City</b></td><td><input type="text" name="city"></td></tr><br>
		<tr><td><b>Unique I.D. No</b></td><td><input type="text" name="unic_id"></td>
		<td><b>Name Of the Institute</b></td>

			<td><select name="Institute">
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
			<select name="sdm"><option>Bairagadh</option>
           <option>M.P. Nagar</option>
           <option>City</option>
             <option>Govindpura</option>
              <option>Huzur</option>
               <option>Kolar</option>
                <option>TT Nagar</option>
                 <option>Other District</option>
                  <option>Unclaimed</option>
			</select>
		</td><td><b>Pincode</b></td><td><input type="text" name="pincode"></td></tr><br>
		
		<tr><td><b>Country</b></td><td><select name="country">
         	<option>india</option>
         	<option>america</option>
         	<option>ejipt</option>
         </select></td><td><b>State</b></td><td>
         <select name="state">
         	<option>Madhya Pradesh</option>
         	<option>Uttar Pradesh</option>
         	<option>Maharashtra</option>
         </select>
		</td></tr><br>
		<tr><td><b>DOB</b></td>
			<td><input type="date" name="dob"></td>
			<td><b>Age</b></td><td><input type="number" name="age"></td></tr><br>
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
        	<td colspan=""><select name="status"><option>---</option><option>Recoverd</option><option>Not Recoverd</option></select></td>
        	 <tr><td><b>Arived hospital<b></td>
        	 	<td colspan=""><select name="arive"><option>-----</option><option>self</option><option>By Ambulance</option></select></td>
        	 	<td><b>Status</b></td>
        	<td ><select name="admit"><option>-----</option><option>Home Isolation</option><option>TO be Admitted</option><option>Admitted</option><option>Untraced
        		</option></select></td></tr>
        		<tr><td ><b>Patient In a Jail</b></td><td><select name="jail">
         	<option>--</option>
         	<option>jail</option>
         	
         </select></td>
        		<td ><b>Patient From Other district</b></td><td><select name="od">
         	<option>--</option>
         	<option>od</option>
         	
         </select></td></tr>
		<tr><td colspan="4"><center><input type="submit" name=""  ></center></td></tr><br>
		
</td></tr></table></center>
	</form>
</div>
</div>
<div><a href="logout.php"><b>logout</b></a></div>
</body>

</html>
<?php ?>