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
<title>ฟอร์มแก้ไขประวัติรายการรับการวัสดุ / อุปกรณ์</title>
<link rel="shortcut icon" type="image/x-icon" href="../../images/icons/285690.ico" />
</head>

<body>
<?php
	 
	$result=mysqli_query($con,"SELECT * FROM take WHERE 
	take_id='$_GET[take_id]'")  or die("SQL Error=>".mysqli_error($con));

	list($take_id,$id_inventory,$take_name,$take_brand,$take_pice,$take_category,$take_acquire,$take_time) = mysqli_fetch_row($result);
	
?>

<h1>ฟอร์มแก้ไขประวัติรายการรับการวัสดุ / อุปกรณ์</h1>
<form action="update_take.php" method="post" enctype="multipart/form-data">
<p>ลำดับที่: <input type="text" name="take_id" readonly  value="<?php echo $_GET['take_id'] ?>"></p
><p>รหัสวัสดุ : <input type="text" name="id_inventory" readonly  value="<?php echo $id_inventory?>"></p>
<p>รายการ : <input type="text" name="take_name" size=30 value="<?php echo $take_name ?>"></p>
<p>รุ่น/ยี่ห้อ : <input type="text" name="take_brand" size=30 value="<?php echo $take_brand ?>"></p>
<p>ราคาซื้อ :  <input type="text" name="take_pice" value="<?php echo $take_pice ?>"></p>
<p>ประเภท : <select name="take_category">
  <?php 
 	  $result=mysqli_query($con,"SELECT Category_id,Category_name FROM category_spare") or die("SQL ERROR ==>" .mysqli_error()); 
   while(list( $Category_id,$Category_name)=mysqli_fetch_row($result)){ 
	    $select=$Category_id==$take_category?"selected":"" ;	
		echo "<option value=' $Category_id' $select>$Category_name</option>";
   }
	mysqli_free_result($result);//คืนหน่วยความจำให้กับระบบ
 	mysqli_close($con);//ปิดฐานข้อมูล
	
   ?>
   </select>
<p> จำนวนที่รับ :  <input type="text" name="take_acquire" value="<?php echo $take_acquire ?>"></p>
<p>วัน/เดือน/ปี  :  <input type="date" name="take_time"  value="<?php echo $take_time ?>"></p><hr>


<input type="submit" name="button" id="button" value="ตกลง">
<input type="reset" name="button2" id="button2" value="ยกเลิก">
</body>
</html>