<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เพิ่มจำนวน</title>
</head>
<body>
<?php
	include("../function/db_function.php");
	$con=connect_db();
	 
	$result=mysqli_query($con,"SELECT * FROM rent WHERE 
	rent_id='$_GET[rent_id]'")  or die("SQL Error=>".mysqli_error($con));

	list($rent_id,$name,$brand,$price,$stock) = mysqli_fetch_row($result);
?>

<h2>ฟอร์มเพิ่มจำนวน</h2>
<form method="post" action="insert_rent.php">
<p>รหัสวัสดุ : <input type="text" name="rent_id" disabled="disabled"  value="<?php echo $rent_id ?>"></p>
<p>รายการ: <input type="text" name="name" disabled="disabled" size=30 value="<?php echo $name ?>"></p>
<p>รุ่น/ยี่ห้อ : <input type="text" name="brand" disabled="disabled" size=30 value="<?php echo $brand ?>"></p>
<p>ราคา :  <input type="text" name="price" disabled="disabled" value="<?php echo $price ?>"></p>
<p>Stock :  <input type="text" name="stock" disabled="disabled" value="<?php echo $stock ?>"></p>
<p>จำนวนที่รับ: <input type="text" name="acquire" size=20 required></p>
<hr>
<input type="submit" name="button" id="button" value="เพิ่มข้อมูล">
<input type="reset" name="button2" id="button2" value="ยกเลิก">
</form>
</body>
</html>