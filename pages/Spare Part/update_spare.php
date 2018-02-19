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
<?php 
	
if(empty($_FILES['photo']['name'])){//ถ้าไฟล์รูปว่าง
	$photo="";
	$update_photo = "";
}
else{
	$time=date("dmyhis");
	$sum_name=$time.("fefefefethyikeddw");
	$char=substr(str_shuffle($sum_name),0,10);//ตัดตัวอักษร
	$photo=$char."_".$_FILES['photo']['name'];
	$photo=$_FILES['photo']['name'];//ชื่อไฟล์
	$temp_file=$_FILES['photo']['tmp_name']; 
	copy($temp_file,"../../images/$photo");
	$update_photo=",photo='$photo'";
	
}
	
		$sql="UPDATE spare_part SET 
		name= '$_POST[name]',
		brand= '$_POST[brand]',
		category= '$_POST[category]',
		price= '$_POST[price]',
		stock= '$_POST[stock]'
		$update_photo  WHERE id= '$_POST[NewID]'";
	    

    mysqli_query($con,$sql)or die("ERROR1".mysqli_error($con));
	mysqli_close($con);
echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
echo "<script>window.location='list_spare.php'</script>";

?>