<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เพิ่มข้อมูลรายละเอียดสินทรัพย์</title>
</head>
<body>
<?php 
	include("../function/db_function.php");// include ไฟล์ที่เขียนฟังก์ชันไว้เข้ามาใช้งาน
	$con=connect_db();//เรียกใช้ฟงัก์ชั่นในการติดต่อฐานข้อมูล
?>
<h2>ฟอร์มเพิ่มข้อมูลรายละเอียดสินทรัพย์</h2>
<form method="post" action="insert.php">
<p>รหัสสินทรัพย์ : <input type="text" name="Asset_id" disabled="disabled" size=20 required></p>
<p>Barcode: <input type="text" name="Asset_barcode" size=20 required></p>
<p>เลขทะเบียนสินทรัพย์  : <input type="text" name="Asset_code" size=20 required></p>
<p>Serial Number : <input type="text" name="Asset_serial" size=20 required></p>
<p>ชื่อสินทรัพย์ : <input type="text" name="Asset_name" size=20 required></p>
<p>Mac Address : <input type="text" name="mac_address" size=20 required></p>
<p>Computer name : <input type="text" name="computer_name" size=20 required></p>
<p>รุ่น / ยี่ห้อ : <input type="text" name="brand" size=20 required></p>
<p>จำนวน  : <input type="text" name="Asset_receivr_amout" size=20 required></p>
<p>วันที่ซื้อ : <input type="date" name="Asset_date" size=20 required></p>
<p>ซื้อจาก : <input type="text" name="Asset_company" size=20 required></p>
<p>ราคา : <input type="text" name="Asset_price" size=20 required></p>
<p>รูปภาพ : <input type="file" name="Asset_photo" id="button3" value=""></p>
<p>ประเภท : <select name="Category">
  <?php  
 
	$result=mysqli_query($con,"SELECT Category_id,Category_name FROM category") or die("SQL ERROR ==>" .mysqli_error()); 
   while(list( $Category_id,$Category_name)=mysqli_fetch_row($result)){
	echo "<option value=$Category_id>$Category_name</option>";
   }
	mysqli_free_result($result);//คืนหน่วยความจำให้กับระบบ
 	mysqli_close($con);//ปิดฐานข้อมูล
	
   ?>
</select>
<p>รายละเอียด : <textarea name="detail" cols=40 rows=5></textarea>
<hr>
<input type="submit" name="button" id="button" value="เพิ่มข้อมูล">
<input type="reset" name="button2" id="button2" value="ยกเลิก">
</form>
</body>
</html>