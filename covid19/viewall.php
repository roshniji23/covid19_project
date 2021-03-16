<?php include 'connection.php'; ?>
<html>
<head>
	<title></title>
	<style type="text/css">
		.table{height: 50px; width: 100%; border:1px solid red;}
		.table tr td{height: 50px; width: 200px; border:1px solid red; text-align: center;}
		.tr{ background-color: gray; color: white;}
	</style>
</head>
<body>
<table class="table"><tr class="tr">
	<b><td>SDM</td></b><b><td>Total Positive</td></b><b><td>Repeat Positive</td></b><b><td>In Jail</td></b><b><td>Other District</td></b><b><td>Death</td></b><b><td>Net positive</td></b><b><td>Already Admitted</td></b><b><td>Admitted Today</td></b><b><td>To Be Admitted</td></b><b><td>Home Isolation</td></b><b><td>Untraced</td></b>
	<tr><td>Bairagadh</td>

</body>
</html>
<?php 
//////////////////////////////////////////////////////////////////////////////
	$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
	
echo "<td>".$result. "</td>";
$query="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='Bairagadh' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);

echo "<td>".$dat."</td>";


$query="SELECT * from patient where sdm='bairagadh' and jail='jail'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='bairagadh' and od='od'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";

$query= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='Bairagadh'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
///////////////////////////net positive code//////////////////////////////
$query3="SELECT * from patient where sdm='bairagadh' and jail='jail'";
$query1= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='Bairagadh'";
$query2="SELECT * from patient where od='od' and sdm='Bairagadh'";
$query4="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='Bairagadh' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$query5= " SELECT * FROM `patient` WHERE sdm='Bairagadh'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
echo "<td>".$net."</td>";
//////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='Bairagadh' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='Bairagadh'";
$query2="SELECT * from patient where admit='home isolation' and sdm='Bairagadh'";
$query4="SELECT * from patient where admit='Untraced' and sdm='Bairagadh'";
$query5= " SELECT * FROM `patient` WHERE sdm='Bairagadh'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


/////////////////////////////////////////////////////////////////////////
//////////////////////////////////**************///////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='Bairagadh'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE admit='home Isolation' and sdm='Bairagadh'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE admit='Untraced' and sdm='Bairagadh'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td></tr>";


///////////////////////////////////////////////////////////////////////////////
	
	echo "<tr><td>M.P. Nagar</td>";

$query= " SELECT * FROM `patient` WHERE sdm='M.P. Nagar' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
	

echo "<td>".$result. "</td>";
$query="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='m.p nagar' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);

echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='m.p. nagar' and jail='jail'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='m.p Nagar' and od='od'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='M.P Nagar'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
///////////////////////////net positive code//////////////////////////////
$query3="SELECT * from patient where sdm='M.P Nagar' and jail='jail'";
$query1= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='M.P Nagar'";
$query2="SELECT * from patient where od='od' and sdm='M.P Nagar'";
$query4="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='M.P Nagar' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$query5= " SELECT * FROM `patient` WHERE sdm='M.P Nagar'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
echo "<td>".$net."</td>";

//////////////////////////////////**************///////////////////////////
//////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='M.P Nagar' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='M.P Nagar'";
$query2="SELECT * from patient where admit='home isolation' and sdm='M.P Nagar'";
$query4="SELECT * from patient where admit='Untraced' and sdm='M.P Nagar'";
$query5= " SELECT * FROM `patient` WHERE sdm='M.P Nagar'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


/////////////////////////////////////////////////////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='m.p. nagar' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
$query= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='m.p. nagar'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE admit='home Isolation' and sdm='M.P. Nagar'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE admit='Untraced' and sdm='m.p. nagar'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td></tr>";
/////////////////////////////////////////////////////////////////////////////
echo "<tr><td>Berasiya</td>";

$query= " SELECT * FROM `patient` WHERE sdm='Berasiya' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
	

echo "<td>".$result. "</td>";
$query="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='berasiya' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);

echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='berasiya' and jail='jail'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='berasiya' and od='od'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='berasiya'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
///////////////////////////net positive code//////////////////////////////
$query3="SELECT * from patient where sdm='berasiya' and jail='jail'";
$query1= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='berasiya'";
$query2="SELECT * from patient where od='od' and sdm='M.P Nagar'";
$query4="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='berasiya' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$query5= " SELECT * FROM `patient` WHERE sdm='berasiya'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
echo "<td>".$net."</td>";

//////////////////////////////////**************///////////////////////////
//////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='berasiya' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='berasiya'";
$query2="SELECT * from patient where admit='home isolation' and sdm='berasiya'";
$query4="SELECT * from patient where admit='Untraced' and sdm='berasiya'";
$query5= " SELECT * FROM `patient` WHERE sdm='berasiya'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


/////////////////////////////////////////////////////////////////////////

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
$query= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='berasiya'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE admit='home Isolation' and sdm='berasiya'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE admit='Untraced' and sdm='berasiya'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td></tr>";
////////////////////////////////////////////////////////////////////////////////////////
echo "<tr><td>City</td>";

$query= " SELECT * FROM `patient` WHERE sdm='city' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
	

echo "<td>".$result. "</td>";
$query="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='city' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);

echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='city' and jail='jail'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='city' and od='od'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='city'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
///////////////////////////net positive code//////////////////////////////
$query3="SELECT * from patient where sdm='city' and jail='jail'";
$query1= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='city'";
$query2="SELECT * from patient where od='od' and sdm='M.P Nagar'";
$query4="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='city' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$query5= " SELECT * FROM `patient` WHERE sdm='city'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
echo "<td>".$net."</td>";

//////////////////////////////////**************///////////////////////////
/////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='city' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='city'";
$query2="SELECT * from patient where admit='home isolation' and sdm='city'";
$query4="SELECT * from patient where admit='Untraced' and sdm='city'";
$query5= " SELECT * FROM `patient` WHERE sdm='city'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='city' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
$query= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='city'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE admit='home Isolation' and sdm='city'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE admit='Untraced' and sdm='city'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td></tr>";
///////////////////////////////////////////////////////////////////////////////////////////
echo "<tr><td>Govindpura</td>";

$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
	

echo "<td>".$result. "</td>";
$query="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='Govindpura' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);

echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='Govindpura' and jail='jail'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='Govindpura' and od='od'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='Govindpura'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
///////////////////////////net positive code//////////////////////////////


$query3="SELECT * from patient where sdm='Govindpura' and jail='jail'";
$query1= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='Govindpura'";
$query2="SELECT * from patient where od='od' and sdm='M.P Nagar'";
$query4="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='Govindpura' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$query5= " SELECT * FROM `patient` WHERE sdm='Govindpura'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
echo "<td>".$net."</td>";

//////////////////////////////////**************///////////////////////////
/////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='Govindpura' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='Govindpura'";
$query2="SELECT * from patient where admit='home isolation' and sdm='Govindpura'";
$query4="SELECT * from patient where admit='Untraced' and sdm='Govindpura'";
$query5= " SELECT * FROM `patient` WHERE sdm='Govindpura'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
$query= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='Govindpura'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE admit='home Isolation' and sdm='Govindpura'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE admit='Untraced' and sdm='Govindpura'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td></tr>";
/////////////////////////////////////////////////////////////////////////////////////////////
echo "<tr><td>Huzur</td>";

$query= " SELECT * FROM `patient` WHERE sdm='Huzur' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
	

echo "<td>".$result. "</td>";
$query="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='huzur' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);

echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='Huzur' and jail='jail'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='Huzur' and od='od'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='Huzur'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
///////////////////////////net positive code//////////////////////////////
$query3="SELECT * from patient where sdm='Huzur' and jail='jail'";
$query1= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='Huzur'";
$query2="SELECT * from patient where od='od' and sdm='M.P Nagar'";
$query4="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='Huzur' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$query5= " SELECT * FROM `patient` WHERE sdm='Huzur'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
echo "<td>".$net."</td>";

//////////////////////////////////**************///////////////////////////
/////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='Huzur' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='Huzur'";
$query2="SELECT * from patient where admit='home isolation' and sdm='Huzur'";
$query4="SELECT * from patient where admit='Untraced' and sdm='Huzur'";
$query5= " SELECT * FROM `patient` WHERE sdm='Huzur'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Huzur' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
$query= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='Huzur'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE admit='home Isolation' and sdm='huzur'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE admit='Untraced' and sdm='Huzur'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td></tr>";
///////////////////////////////////////////////////////////////////////////////////////////
echo "<tr><td>Kolar</td>";

$query= " SELECT * FROM `patient` WHERE sdm='Kolar' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
	

echo "<td>".$result. "</td>";
$query="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='kolar' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);

echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='kolar' and jail='jail'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='kolar' and od='od'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='Kolar'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
///////////////////////////net positive code//////////////////////////////
$query3="SELECT * from patient where sdm='kolar' and jail='jail'";
$query1= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='kolar'";
$query2="SELECT * from patient where od='od' and sdm='M.P Nagar'";
$query4="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='kolar' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$query5= " SELECT * FROM `patient` WHERE sdm='kolar'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
echo "<td>".$net."</td>";

//////////////////////////////////**************///////////////////////////
/////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='kolar' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='kolar'";
$query2="SELECT * from patient where admit='home isolation' and sdm='kolar'";
$query4="SELECT * from patient where admit='Untraced' and sdm='kolar'";
$query5= " SELECT * FROM `patient` WHERE sdm='kolar'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='kolar' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
$query= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='kolar'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE admit='home Isolation' and sdm='kolar'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
$query= " SELECT * FROM `patient` WHERE admit='Untraced' and sdm='kolar'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td></tr>";
//////////////////////////////////////////////////////////////////////////////////
echo "<tr><td>TT Nagar</td>";

$query= " SELECT * FROM `patient` WHERE sdm='TT Nagar' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
	

echo "<td>".$result. "</td>";

$query="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='tt nagar' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);

echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='tt Nagar' and jail='jail'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query="SELECT * from patient where sdm='tt nagar' and od='od'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);
echo "<td>".$dat."</td>";
$query= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='TT Nagar'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";
///////////////////////////net positive code//////////////////////////////
$query3="SELECT * from patient where sdm='TT nagar' and jail='jail'";
$query1= " SELECT * FROM `patient` WHERE conditions='Dead' and sdm='TT Nagar'";
$query2="SELECT * from patient where od='od' and sdm='M.P Nagar'";
$query4="SELECT fullname , COUNT(fullname) FROM patient WHERE sdm='TT Nagar' GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$query5= " SELECT * FROM `patient` WHERE sdm='TT Nagar'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
echo "<td>".$net."</td>";

//////////////////////////////////**************///////////////////////////
/////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='tt Nagar' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='tt Nagar'";
$query2="SELECT * from patient where admit='home isolation' and sdm='tt Nagar'";
$query4="SELECT * from patient where admit='Untraced' and sdm='tt Nagar'";
$query5= " SELECT * FROM `patient` WHERE sdm='tt Nagar'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
$query= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='tt Nagar'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";

$query= " SELECT * FROM `patient` WHERE admit='home Isolation' and sdm='tt Nagar'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>
";
$query= " SELECT * FROM `patient` WHERE admit='Untraced' and sdm='tt Nagar'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td></tr><br><tr><td><b>Grand Total</b></td>
";



$query= " SELECT * FROM `patient`  ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);
	

echo "<td>".$result. "</td>";
$query="SELECT fullname , COUNT(fullname) FROM patient GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);

echo "<td>".$dat."</td>";

$query="SELECT * from patient where jail='jail'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);

echo "<td>".$dat."</td>";
$query="SELECT * from patient where od='od'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);

echo "<td>".$dat."</td>";
$query="SELECT * from patient where conditions='dead'";
$data=mysqli_query($con , $query);
$dat=mysqli_num_rows($data);

echo "<td>".$dat."</td>";
///////////////////////////net positive code//////////////////////////////
$query3="SELECT * from patient where jail='jail'";
$query1= " SELECT * FROM `patient` WHERE conditions='Dead' ";
$query2="SELECT * from patient where od='od' ";
$query4="SELECT fullname , COUNT(fullname) FROM patient WHE GROUP BY fullname , age , dob HAVING COUNT(fullname)>=2" ;
$query5= " SELECT * FROM `patient`";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
echo "<td>".$net."</td>";
////////////////////////////////////////////
/////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' ";
$query2="SELECT * from patient where admit='home isolation'";
$query4="SELECT * from patient where admit='Untraced' ";
$query5= " SELECT * FROM `patient` ";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
//////////////////////////////////***total home isolation***********///////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE  datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
$query= " SELECT * FROM `patient` WHERE admit='TO be Admitted'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result. "</td>";



$query= " SELECT * FROM `patient` WHERE admit='home Isolation'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
$query= " SELECT * FROM `patient` WHERE admit='Untraced'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td><tr>";
////////////////////////////////////////////////////////////////////////////////////


 ?>
<table class="table"><tr class="tr">
	<b><td>SDM</td></b><b><td>Already Admitted</td></b><b><td>AIIMS</td></b><b><td>CHIRAYU</td></b><b><td>HAMIDIYA</td></b><b><td>JP</td></b><b><td>LNCT</td></b><b><td>BANSAL</td></b><b><td>RKDF</td></b><b><td>BHOPAL CARE</td></b><b><td>CCC</td></b><b><td>OTHER HOSPITALS</td></b>

	<tr><td>Bairagadh</td>
    
	<?php 

	/////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='Bairagadh' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='Bairagadh'  ";
$query2="SELECT * from patient where admit='home isolation' and sdm='Bairagadh'  ";
$query4="SELECT * from patient where admit='Untraced' and sdm='Bairagadh'  ";
$query5= " SELECT * FROM `patient` WHERE sdm='Bairagadh' ";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
//////////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and hospital='AIIMS' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and hospital='CHIRAYU' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and hospital='HAMIDIYA' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and hospital='JP' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and hospital='LNCT' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and hospital='BANSAL' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and hospital='RKDF' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and hospital='BHOPAL CARE' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and hospital='CCC' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and hospital='OTHER HOSPITALS' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td></tr>";


/////////////////////////////////////////////////
	echo "<tr><td>M.P. Nagar</td>";
	/////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='m.p. Nagar' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='m.p.Nagar' ";
$query2="SELECT * from patient where admit='home isolation' and sdm='m.p. Nagar'";
$query4="SELECT * from patient where admit='Untraced' and sdm='m.p. nagar' ";
$query5= " SELECT * FROM `patient` WHERE sdm='m.p. nagar' ";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
$newdate=(date("Y-m-d"));
		$query= " SELECT * FROM `patient` WHERE sdm='m.p Nagar' and hospital='AIIMS' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='m.p Nagar' and hospital='CHIRAYU' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='m.p Nagar' and hospital='HAMIDIYA' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='m.p Nagar' and hospital='JP' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='m.p Nagar' and hospital='LNCT' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='m.p Nagar' and hospital='BANSAL' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='m.p Nagar' and hospital='RKDF' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='m.p Nagar' and hospital='BHOPAL CARE' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='m.p Nagar' and hospital='CCC' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='m.p Nagar' and hospital='OTHER HOSPITALS' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td></tr>";

/////////////////////////////////////////////////////////////
echo "<tr><td>CITY</td>";
/////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='city' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='city' ";
$query2="SELECT * from patient where admit='home isolation' and sdm='city' ";
$query4="SELECT * from patient where admit='Untraced' and sdm='city' ";
$query5= " SELECT * FROM `patient` WHERE sdm='city' ";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='city' and hospital='AIIMS' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='city' and hospital='CHIRAYU' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='city' and hospital='HAMIDIYA' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='city' and hospital='JP' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='city' and hospital='LNCT' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='city' and hospital='BANSAL' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='city' and hospital='RKDF' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='city' and hospital='BHOPAL CARE' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='city' and hospital='CCC' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='city' and hospital='OTHER HOSPITALS' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td></tr>";

/////////////////////////////////////////
echo "<tr><td>Berasiya</td>";
/////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='berasiya' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='berasiya'";
$query2="SELECT * from patient where admit='home isolation' and sdm='berasiya'";
$query4="SELECT * from patient where admit='Untraced' and sdm='berasiya'";
$query5= " SELECT * FROM `patient` WHERE sdm='berasiya'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and hospital='AIIMS' and  datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and hospital='CHIRAYU'  and  datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and hospital='HAMIDIYA'  and  datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and hospital='JP'  and  datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and hospital='LNCT'  and  datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and hospital='BANSAL'  and  datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and hospital='RKDF'  and  datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and hospital='BHOPAL CARE'  and  datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and hospital='CCC'  and  datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and hospital='OTHER HOSPITALS'  and  datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td></tr>";
///////////////////////////////////
echo "<tr><td>Govindpura</td>";
/////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='Govindpura' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='Govindpura'";
$query2="SELECT * from patient where admit='home isolation' and sdm='Govindpura'";
$query4="SELECT * from patient where admit='Untraced' and sdm='Govindpura'";
$query5= " SELECT * FROM `patient` WHERE sdm='Govindpura'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and hospital='AIIMS' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and hospital='CHIRAYU' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and hospital='HAMIDIYA' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and hospital='JP' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and hospital='LNCT' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and hospital='BANSAL' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and hospital='RKDF' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and hospital='BHOPAL CARE' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and hospital='CCC' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and hospital='OTHER HOSPITALS'and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td></tr>";
///////////////////////////////////////////////////

echo "<tr><td>Huzur</td>";
/////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='Huzur' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='Huzur'";
$query2="SELECT * from patient where admit='home isolation' and sdm='Huzur'";
$query4="SELECT * from patient where admit='Untraced' and sdm='huzur'";
$query5= " SELECT * FROM `patient` WHERE sdm='Huzur'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Huzur' and hospital='AIIMS' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Huzur' and hospital='CHIRAYU' and datek!='$newdate' ";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Huzur' and hospital='HAMIDIYA' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Huzur' and hospital='JP' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Huzur' and hospital='LNCT' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Huzur' and hospital='BANSAL' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Huzur' and hospital='RKDF' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Huzur' and hospital='BHOPAL CARE' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Huzur' and hospital='CCC' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Huzur' and hospital='OTHER HOSPITALS' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td></tr>";
//////////////////////////////////////////////
echo "<tr><td>kolar</td>";
/////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='kolar' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' and sdm='kolar'";
$query2="SELECT * from patient where admit='home isolation' and sdm='kolar'";
$query4="SELECT * from patient where admit='Untraced' and sdm='kolar'";
$query5= " SELECT * FROM `patient` WHERE sdm='kolar'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='kolar' and hospital='AIIMS' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='kolar' and hospital='CHIRAYU' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='kolar' and hospital='HAMIDIYA' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='kolar' and hospital='JP' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='kolar' and hospital='LNCT' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='kolar' and hospital='BANSAL' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='kolar' and hospital='RKDF' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='kolar' and hospital='BHOPAL CARE' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='kolar' and hospital='CCC' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='kolar' and hospital='OTHER HOSPITALS' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td></tr>";
/////////////////////////////////////
echo "<tr><td>tt Nagar</td>";
/////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where sdm='tt Nagar' and datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted' ";
$query2="SELECT * from patient where admit='home isolation' and sdm='tt Nagar'";
$query4="SELECT * from patient where admit='Untraced' and sdm='tt Nagar'";
$query5= " SELECT * FROM `patient` WHERE sdm='tt Nagar'";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and hospital='AIIMS' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and hospital='CHIRAYU' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and hospital='HAMIDIYA' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and hospital='JP' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and hospital='LNCT' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and hospital='BANSAL' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and hospital='RKDF' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and hospital='BHOPAL CARE' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and hospital='CCC' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and hospital='OTHER HOSPITALS' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td></tr><br>";

/////////////////////////////already admitted/////////////////////////
///////////////////grand total//////////////////
echo "<tr><td><b>Grand Total<b></td>";
///////////////////////////////////////////////
$newdate=(date("Y-m-d"));
$query3="SELECT * from patient where datek='$newdate'";
$query1= " SELECT * FROM `patient` WHERE admit='TO be Admitted'";
$query2="SELECT * from patient where admit='home isolation'";
$query4="SELECT * from patient where admit='Untraced' ";
$query5= " SELECT * FROM `patient`";
$data5=mysqli_query($con , $query5);
	$result=mysqli_num_rows($data5);
$data4=mysqli_query($con , $query4);
$dat4=mysqli_num_rows($data4);
$data3=mysqli_query($con , $query3);
$dat3=mysqli_num_rows($data3);
$data1=mysqli_query($con , $query1);
$dat1=mysqli_num_rows($data1);
$data2=mysqli_query($con , $query2);
$dat2=mysqli_num_rows($data2);
$Total=($dat1+$dat2+$dat3+$dat4);
$net=($result-$Total);
if ($net<0) {
	
	$net=0;
	echo "<td>".$net."</td>";
}
else
{
	echo "<td>".$net."</td>";
}


///////////////////////////////////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE hospital='AIIMS' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE hospital='CHIRAYU' and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE hospital='HAMIDIYA'and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE hospital='JP'and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE hospital='LNCT'and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE hospital='BANSAL'and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE hospital='RKDF'and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE hospital='BHOPAL CARE'and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE hospital='CCC'and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td>";
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE hospital='OTHER hospital'and datek!='$newdate'";
$data=mysqli_query($con , $query);
	$result=mysqli_num_rows($data);

echo " <td>".$result. "</td></tr></table><br>";
/////////////////////////third table/////////////////////
	 ?>

 <table class="table"><tr class="tr">
	<b><td>SDM</td></b><b><td>Admitted Today</td></b><b><td>AIIMS</td></b><b><td>CHIRAYU</td></b><b><td>HAMIDIA</td></b><b><td>PEAOPLES</td></b><b><td>LNCT</td></b><b><td>BANSAL</td></b><b><td>RKDF</td></b><b><td>BHOPAL CARE</td></b><b><td>CCC</td></b><b><td>Other Hospital</td></b>
	<tr><td>Bairagadh</td>
		<?php  

//////////////////////////////already admitted/////////////////////////
$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and datek='$newdate' and hospital='AIIMS'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and datek='$newdate' and hospital='CHIRAYU'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and datek='$newdate' and hospital='HAMIDIYA'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and datek='$newdate' and hospital='PEAOPLES'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and datek='$newdate' and hospital='LNCT'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and datek='$newdate' and hospital='BANSAL'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and datek='$newdate' and hospital='RKDF'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and datek='$newdate' and hospital='BHOPAL CARE'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and datek='$newdate' and hospital='CCC'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Bairagadh' and datek='$newdate' and hospital='OTHER hospital'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td></tr>";

echo "<tr><td><b>Berasiya</b></td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and datek='$newdate' and hospital='AIIMS'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
   $newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and datek='$newdate' and hospital='CHIRAYU'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and datek='$newdate' and hospital='HAMIDIYA'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and datek='$newdate' and hospital='PEAOPLES'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and datek='$newdate' and hospital='LNCT'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and datek='$newdate' and hospital='BANSAL'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and datek='$newdate' and hospital='RKDF'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and datek='$newdate' and hospital='BHOPAL CARE'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and datek='$newdate' and hospital='CCC'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='berasiya' and datek='$newdate' and hospital='OTHER hospital'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td></tr>";

echo "<tr><td><b>m.p. Nagar</b></td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='m.p. nagar' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='m.p. Nagar' and datek='$newdate' and hospital='AIIMS'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
   $newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='m.p. Nagar' and datek='$newdate' and hospital='CHIRAYU'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='m.p. Nagar' and datek='$newdate' and hospital='HAMIDIYA'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='m.p. Nagar' and datek='$newdate' and hospital='PEAOPLES'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='m.p. Nagar' and datek='$newdate' and hospital='LNCT'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='m.p. Nagar' and datek='$newdate' and hospital='BANSAL'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='m.p. Nagar' and datek='$newdate' and hospital='RKDF'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='m.p. Nagar' and datek='$newdate' and hospital='BHOPAL CARE'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='m.p. Nagar' and datek='$newdate' and hospital='CCC'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='m.p. Nagar' and datek='$newdate' and hospital='OTHER hospital'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td></tr>";

echo "<tr><td><b>KOLAR</b></td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='kolar' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='kolar' and datek='$newdate' and hospital='AIIMS'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
   $newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='kolar' and datek='$newdate' and hospital='CHIRAYU'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='kolar' and datek='$newdate' and hospital='HAMIDIYA'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='kolar' and datek='$newdate' and hospital='PEAOPLES'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='kolar' and datek='$newdate' and hospital='LNCT'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='kolar' and datek='$newdate' and hospital='BANSAL'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='kolar' and datek='$newdate' and hospital='RKDF'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='kolar' and datek='$newdate' and hospital='BHOPAL CARE'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='kolar' and datek='$newdate' and hospital='CCC'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='kolar' and datek='$newdate' and hospital='OTHER hospital'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td></tr>";

echo "<tr><td><b>Huzur</b></td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Huzur' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='huzur' and datek='$newdate' and hospital='AIIMS'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
   $newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='huzur' and datek='$newdate' and hospital='CHIRAYU'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='huzur' and datek='$newdate' and hospital='HAMIDIYA'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='huzur' and datek='$newdate' and hospital='PEAOPLES'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='huzur' and datek='$newdate' and hospital='LNCT'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='huzur' and datek='$newdate' and hospital='BANSAL'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='huzur' and datek='$newdate' and hospital='RKDF'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='huzur' and datek='$newdate' and hospital='BHOPAL CARE'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='huzur' and datek='$newdate' and hospital='CCC'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='huzur' and datek='$newdate' and hospital='OTHER hospital'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td></tr>";

echo "<tr><td><b>Govindpura</b></td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and datek='$newdate' and hospital='AIIMS'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
   $newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and datek='$newdate' and hospital='CHIRAYU'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and datek='$newdate' and hospital='HAMIDIYA'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and datek='$newdate' and hospital='PEAOPLES'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and datek='$newdate' and hospital='LNCT'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and datek='$newdate' and hospital='BANSAL'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and datek='$newdate' and hospital='RKDF'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and datek='$newdate' and hospital='BHOPAL CARE'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and datek='$newdate' and hospital='CCC'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='Govindpura' and datek='$newdate' and hospital='OTHER hospital'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td></tr>";

echo "<tr><td><b>tt Nagar</b></td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and datek='$newdate' and hospital='AIIMS'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
   $newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and datek='$newdate' and hospital='CHIRAYU'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and datek='$newdate' and hospital='HAMIDIYA'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and datek='$newdate' and hospital='PEAOPLES'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and datek='$newdate' and hospital='LNCT'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='tt nagar' and datek='$newdate' and hospital='BANSAL'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and datek='$newdate' and hospital='RKDF'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and datek='$newdate' and hospital='BHOPAL CARE'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and datek='$newdate' and hospital='CCC'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE sdm='tt Nagar' and datek='$newdate' and hospital='OTHER hospital'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td></tr>";
  

echo "<tr><td><b>Grand Total</b></td>";

$newdate=(date("Y-m-d"));
$query= " SELECT * FROM `patient`  where datek='$newdate'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";
		
$query= " SELECT * FROM `patient` WHERE  datek='$newdate' and hospital='AIIMS'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE  datek='$newdate' and hospital='CHIRAYU'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE  datek='$newdate' and hospital='HAMIDIYA'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE  datek='$newdate' and hospital='PEAOPLES'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE  datek='$newdate' and hospital='LNCT'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE  datek='$newdate' and hospital='BANSAL'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE  datek='$newdate' and hospital='RKDF'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE  datek='$newdate' and hospital='BHOPAL CARE'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE  datek='$newdate' and hospital='CCC'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

$query= " SELECT * FROM `patient` WHERE  datek='$newdate' and hospital='Other hospital'";
$data=mysqli_query($con , $query);
$result=mysqli_num_rows($data);
echo "<td>".$result."</td>";

		?>