<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ฟอร์มเพิ่มจำนวนวัสดุ-อุปกรณ์</title>
</head>

<body>
<?php
	include("../function/db_function.php");
	$con=connect_db();
	 
	$result=mysqli_query($con,"SELECT * FROM spare_part WHERE 
	id='$_GET[id]'")  or die("SQL Error=>".mysqli_error($con));

	list($id,$photo,$name,$brand,$price,$category,$stock,$acquire,$Pay,$balance,$time) = mysqli_fetch_row($result);
	
	$sql=mysqli_query($con,"SELECT Category_name FROM category_spare  
	WHERE Category_id='$category' ")or die("SQL error2  ".mysqli_error($con));
    list($category)=mysqli_fetch_row($sql);
	 
	
?>

<h1>ฟอร์มเพิ่มจำนวนวัสดุ-อุปกรณ์</h1>
<form action="update_numspare.php" method="post" enctype="multipart/form-data">
<input hidden="id" name="Newid" value="<?php echo $id ?>">
<p>รหัสวัสดุ : <input type="text" name="id"  disabled="disabled" value="<?php echo $id ?>"></p>
<p>รูปภาพ : <img src='../img/<?php echo $photo ?>'  width='150'  height='150' ></p>
<p>รายการ : <input type="text" name="name" size=30 value="<?php echo $name ?>"></p>
<p>รุ่น/ยี่ห้อ : <input type="text" name="brand" size=30 value="<?php echo $brand ?>"></p>
<p>ประเภท : <select name="category">
  <?php 
 	  $result=mysqli_query($con,"SELECT Category_id,Category_name FROM category_spare") or die("SQL ERROR ==>" .mysqli_error()); 
   while(list( $Category_id,$Category_name)=mysqli_fetch_row($result)){ 
	    $select=$Category_id==$category?"selected":"" ;	
		echo "<option value=' $Category_id' $select>$Category_name</option>";
   }
	mysqli_free_result($result);//คืนหน่วยความจำให้กับระบบ
 	mysqli_close($con);//ปิดฐานข้อมูล
	
   ?>
 </select>
<p>ราคา :  <input type="text" name="price" value="<?php echo $price ?>"></p>
<p> Stock :  <input type="text" name="stock" value="<?php echo $stock ?>"></p><hr>
<p>วัน/เดือน/ปี  :  <input type="date" name="time" value="<?php echo date("Y-m-d"); ?>" readonly></p>

<p>จำนวนที่รับ: <input type="text" name="acquire" size=20 required></p>

<input type="submit" name="button" id="button" value="ตกลง">
<input type="reset" name="button2" id="button2" value="ยกเลิก">
</body>
</html>


