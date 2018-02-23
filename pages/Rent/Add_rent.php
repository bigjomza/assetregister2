
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert into Rent</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../images/icons/285690.ico" />
</head>

<body>
<?php
	include("../../Funtion/funtion.php");
	$con = connect_db();
	
	if(isset($_POST['salename'])){
	$ch = curl_init();
	// Disable SSL verification
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	// Will return the response, if false it print the response
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Set the url
	curl_setopt($ch, CURLOPT_URL,"http://venus.nopadol.com:3000/employees?access_token=&keyword=".$_POST['salename']."");
	// Execute
	$result=curl_exec($ch);
	// Closing
	curl_close($ch);
	// Will dump a beauty json :3
	//var_dump(json_decode($result, true));
	$data = json_decode($result, true);
	$datauser = $data['data'][0];
	(string)$empname = $datauser['sale_name'];
}
	
	$sql = "INSERT INTO rent (Rent_id,Rent_asset,Rent_emp,Rent_active,Rent_time,Rent_ect) 
	VALUES 
	('',
	'$_POST[id_asset]'
	,'$empname'
	,'$_POST[Rent_active]'
	,'$_POST[Rent_time]'
	,'$_POST[Rent_ect]'
	)";
	mysqli_query($con, $sql) or die("Error =" .mysqli_error($con));
	
	$sql2 = "UPDATE asset SET Asset_status = '04'
	,active_point = '$_POST[Rent_active]'
	WHERE Asset_id = '$_POST[id_asset]' ";
	mysqli_query($con, $sql2) or die("Error Delete" . mysqli_error($con));
/*	echo $sql;
	echo "<br>";
	echo $sql2;*/
	
	mysqli_close($con);
	echo "<script>alert('บันทึกข้อมูลการเบิกเรียบร้อยแล้ว')</script>";
	echo "<script>window.location='List_rent.php'</script>";
	
    ?>
</body>
</html>