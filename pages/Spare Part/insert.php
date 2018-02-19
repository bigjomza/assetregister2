<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php 
	include("../function/db_function.php");
	$con=connect_db();
	
	if(empty($_FILES['Asset_price']['name'])){//ถ้าไฟล์รูปว่าง
	$student_photo="";
}
else{
	$time=date("dmyhis");
	$sum_name=$time.("fefefefethyikeddw");
	$char=substr(str_shuffle($sum_name),0,10);//ตัดตัวอักษร
	$Asset_price=$char."_".$_FILES['Asset_price']['name'];
	$Asset_price=$_FILES['Asset_price']['name'];//ชื่อไฟล์
	$temp_file=$_FILES['Asset_price']['tmp_name']; 
	copy($temp_file,"../img/$Asset_price");
	
}
	
	$sql="INSERT INTO asset (Asset_id,Asset_code,Asset_serial,Asset_name,mac_address,computer_name,brand,Asset_date,Asset_company,Asset_price,Asset_barcode,Category,Asset_photo,detail	)
	 
	 VALUES('$_POST[Asset_id]',
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
'$_POST[Category]',
'$_POST[Asset_photo]',
'$_POST[detail]')";
	 
	mysqli_query($con, $sql) or die("Error =" .mysqli_error($con));
	mysqli_close($con);
echo "<script>window.location='list_asset.php'</script>";
?>
</body>
</html>