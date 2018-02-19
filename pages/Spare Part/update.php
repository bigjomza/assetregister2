<?php
	session_start();
	if(empty($_SESSION['user_Level']) == '1'){
		echo "<script>alert('คุณไม่มีสิทธิ์เข้าใช้งานในหน้านี้ กรุณา Login ก่อน')</script>";
		echo "<script>window.location='../User/Login.php'</script>";
		exit();	
	}
	include("../../Funtion/funtion.php");
	$con = connect_db();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update</title>
</head>
<body>
<?php
	
	if(empty($_FILES['Asset_price']['name'])){//ถ้าไฟล์รูปว่าง
	$Asset_price="";
	$Asset_price="";
}
else{
	$time=date("dmyhis");
	$sum_name=$time.("fefefefethyikeddw");
	$char=substr(str_shuffle($sum_name),0,10);//ตัดตัวอักษร
	$Asset_price=$char."_".$_FILES['Asset_price']['name'];
	$Asset_price=$_FILES['Asset_price']['name'];//ชื่อไฟล์
	$temp_file=$_FILES['Asset_price']['tmp_name']; 
	copy($temp_file,"../img/$Asset_price");
	$update_photo=",Asset_price='$Asset_price'";
	
}
	
	$result="UPDATE asset SET 
	Asset_barcode='$_POST[Asset_barcode]',
	Asset_code='$_POST[Asset_code]',
	Asset_serial='$_POST[Asset_serial]',
	Asset_name='$_POST[Asset_name]',
	mac_address='$_POST[mac_address]',
	computer_name='$_POST[computer_name]',
	brand= '$_POST[brand]',
	Asset_receivr_amout='$_POST[Asset_receivr_amout]',
	Asset_date='$_POST[Asset_date]',
	Asset_company='$_POST[Asset_company]',
	Asset_price='$_POST[Asset_price]',
	Category='$_POST[Category]',
	Asset_photo='$_POST[Asset_photo]',
    detail ='$_POST[detail]' ,
	$update_photo WHERE Asset_id= '$_POST[Asset_id]'";
	
	
mysqli_query($con,	$result)or die ("edit".mysqli_error($con));
mysqli_close($con);
echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
echo "<script>window.location='list_asset.php'</script>";
?>
</body>
</html>