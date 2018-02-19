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
<title>ฟอร์มแก้ไขข้อมูลสินทรัพย์</title>
</head>

<body>
<?php
	 
	$result=mysqli_query($con,"SELECT * FROM asset WHERE 
	Asset_id='$_GET[Asset_id]'")  or die("SQL Error=>".mysqli_error($con));

	list($Asset_id,$Asset_code ,$Asset_serial ,$Asset_name ,$mac_address,$computer_name
	,$brand,$Asset_date ,$Asset_company ,$Asset_price,$Asset_barcode
	,$Category,$Asset_photo ,$Asset_time,$detail)=mysqli_fetch_row($result);
?>

<h1>ฟอร์มแก้ไขข้อมูลสินทรัพย์</h1>
<form action="update.php" method="post">

<p> Barcode: <input type="text"  name="Asset_barcode"  value="<?php echo $Asset_barcode ?>"></p>
<p>เลขทะเบียนสินทรัพย์  : <input type="text" name="Asset_code" size=20 value="<?php echo $Asset_code ?>"></p>
<p>Serial Number  : <input type="text" name="Asset_serial" size=20 value="<?php echo $Asset_serial?>"></p>
<p>ชื่อสินทรัพย์ : <input type="text" name="Asset_name" size=20 value="<?php echo $Asset_name ?>"></p>
<p>Mac Address : <input type="text" name="mac_address" size=20 value="<?php echo $mac_address?>"></p>
<p>Computer name : <input type="text" name="computer_name" size=20 value="<?php echo $computer_name ?>"></p>
<p>รุ่น/ยี่ห้อ : <input type="text" name="brand" value="<?php echo $brand ?>"></p>
<p>วันที่ซื้อ : <input type="date" name="Asset_date" size=20 value="<?php echo $Asset_date ?>"></p>
<p>ซื้อจาก : <input type="text" name="Asset_company" size=30 value="<?php echo $Asset_company ?>"></p>
<p>ราคา : <input type="text" name="Asset_price" size=20 value="<?php echo $Asset_price ?>"></p>
<p>รูปภาพ : <input type="file" name="Asset_photo" id="button3" value="<?php echo $Asset_photo ?>"></p>
<p>ประเภท : <select name="Category">
  <?php 
   
 	  $result=mysqli_query($con,"SELECT Category_id,Category_name FROM category") or die("SQL ERROR ==>" .mysqli_error()); 
   while(list( $Category_id,$Category_name)=mysqli_fetch_row($result)){ 
	    $select=$Category_id==$Category?"selected":"" ;	
		echo "<option value=$Category_id' $select>$Category_name</option>";
   }
	mysqli_free_result($result);//คืนหน่วยความจำให้กับระบบ
 	mysqli_close($con);//ปิดฐานข้อมูล
	
   ?>
   </select>
    <p>รายละเอียด : <textarea name="	detail"  cols="30" rows="10"><?php echo $detail?></textarea></p><hr>
<input type="submit" name="button" id="button" value="บันทึก">
<input type="reset" name="button2" id="button2" value="ยกเลิก">
</body>
</html>