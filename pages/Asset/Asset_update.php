<?php 
	include("../../Funtion/funtion.php");
	$con = connect_db();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Asset</title>
</head>

<body>
<?php
	if(empty($_FILES['Asset_photo']['name'])){
		$asset_photo = "";
		$Update_photo = "";
	}
	else{
		$time = date("dmyhis");	
		$char = str_shuffle("ABC");
		$sum_name = date("dmyhis")."ABC";
		$char = substr(str_shuffle($sum_name),0,10); //ตัดเหลือตัว 10
		$asset_photo = $char."_".$_FILES['Asset_photo']['name']; //ชื่อไฟล์
		$temp_file = $_FILES['Asset_photo']['tmp_name'];	//temp ไฟล์
		copy($temp_file,"img/$asset_photo"); //copy ไฟล์ไปไว้ใน Folder img
		$Update_photo = ",Asset_photo = '$asset_photo'";
	}
	
	$sql = "UPDATE asset SET
	Asset_code = '$_POST[Asset_code]'
	,Asset_serial = '$_POST[Asset_serial]'
	,Asset_name = '$_POST[Asset_name]'
	,mac_address = '$_POST[mac_address]'
	,computer_name = '$_POST[computer_name]'
	,brand = '$_POST[brand]'
	,Asset_date = '$_POST[Asset_date]'
	,Asset_company = '$_POST[Asset_company]'
	,Asset_price = '$_POST[Asset_price]'
	,Asset_barcode = '$_POST[Asset_barcode]'
	,Asset_Category = '$_POST[Asset_Category]'
	$Update_photo
	,detail = '$_POST[detail]'
	WHERE Asset_id = '$_POST[Old_ID]' ";
		/*$test = $_POST['Asset_code'];
		$test2 = $_POST['Asset_photo'];
		echo $test ,"<br>", $test2;
		echo $Update_photo;*/
	mysqli_query($con,$sql) or die(mysqli_error($con));
	mysqli_close($con);
	echo "<script>alert('แก้ไขข้อมูลสำเร็จ!')</script>";
	echo "<script>window.location='List_Asset.php'</script>";
?>
</body>
</html>