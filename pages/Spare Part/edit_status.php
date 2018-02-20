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
<title>ฟอร์มแก้ไขสถานะและจุดใช้งาน</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../images/icons/285690.ico" />
</head>

<body>
<?php
	 
	$result=mysqli_query($con,"SELECT * FROM asset WHERE 
	Asset_id='$_GET[Asset_id]'")  or die("SQL Error=>".mysqli_error($con));

	list($Asset_id,$Asset_code ,$Asset_serial ,$Asset_name ,$mac_address,$computer_name
	,$brand,$Asset_date ,$Asset_company ,$Asset_price,$Asset_barcode
	,$Category,$Asset_photo ,$Asset_time,$detail,$status,$active_point)=mysqli_fetch_row($result);
?>

<h1>ฟอร์มแก้ไขสถานะและจุดใช้งาน </h1>
<form action="update_status.php" method="post">
<p>สถานะ : <select name="status">
  <?php  
 
	$result=mysqli_query($con,"SELECT Status_id,Status_name FROM status") or die("SQL ERROR ==>" .mysqli_error()); 
   while(list( $Status_id,$Status_name)=mysqli_fetch_row($result)){ 
	    $select=$Status_id==$status?"selected":"" ;	
		echo "<option value=$Status_id' $select>$Status_name</option>";
   }
	mysqli_free_result($result);//คืนหน่วยความจำให้กับระบบ
 	mysqli_close($con);//ปิดฐานข้อมูล
	
   ?>
</select>
<hr>
<input type="submit" name="button" id="button" value="แก้ไขข้อมูล">
<input type="submit" name="button2" id="button2" value="ยกเลิก">
</body>
</html>