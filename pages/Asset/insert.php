<?php 
	include("../../Funtion/funtion.php");
	$con = connect_db();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Asset Register</title>
</head>
<body>
<?php 
	if(empty($_FILES['Asset_photo']['name'])){
		$asset_photo = "";
	}
	else{		
		$sum_name = date("dmyhis")."ABC";
		$char = substr(str_shuffle($sum_name),0,10); //ตัดเหลือตัว 10
		$asset_photo = $char."_".$_FILES['Asset_photo']['name']; //ชื่อไฟล์
		$temp_file = $_FILES['Asset_photo']['tmp_name'];	//temp ไฟล์
		copy($temp_file,"images/$asset_photo"); //copy ไฟล์ไปไว้ใน Folder img
		//$time = date("dmyhis");	
		//$char = str_shuffle("ABC");
	}
	$Asset_status = "01";
	
	$sql="INSERT INTO asset (Asset_id,Asset_code ,Asset_serial ,Asset_name ,mac_address,computer_name
	,brand ,Asset_date ,Asset_company ,Asset_price,Asset_barcode
	,Asset_Category,Asset_photo,detail,Asset_status)
	 
	VALUES('',
	'$_POST[Asset_code]',
	'$_POST[Asset_serial]',
	'$_POST[Asset_name]',
	'$_POST[mac_address]',
	'$_POST[computer_name]',
	'$_POST[brand]',
	'$_POST[Asset_date]',
	'$_POST[Asset_company]',
	'$_POST[Asset_price]',
	'$_POST[Asset_barcode]',
	'$_POST[Asset_Category]',
	'$asset_photo',
	'$_POST[detail]',
	$Asset_status
	) ";
	//echo $sql;
	mysqli_query($con, $sql) or die("Error =" .mysqli_error($con));
	mysqli_close($con);
	echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
	echo "<script>window.location='List_Asset.php'</script>";
?>
</body>
</html>