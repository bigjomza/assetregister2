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
	$time=date("YYYY/mm/dd");
	$sum_name=$time.("fefefefethyikeddw");
	$char=substr(str_shuffle($sum_name),0,10);//ตัดตัวอักษร
	$photo=$char."_".$_FILES['photo']['name'];
	$photo=$_FILES['photo']['name'];//ชื่อไฟล์
	$temp_file=$_FILES['photo']['tmp_name']; 
	copy($temp_file,"../img/$photo");
	$update_photo=",photo='$photo'";
	
}
		$sql="UPDATE take SET 
		take_name= '$_POST[take_name]',
		take_brand= '$_POST[take_brand]',
		take_pice= '$_POST[take_pice]',
		take_category= '$_POST[take_category]',
		take_acquire= '$_POST[take_acquire]',
		take_time= '$_POST[take_time]'
		$update_photo  WHERE take_id= '$_POST[take_id]'";
	    
		//echo $sql ;

    mysqli_query($con,$sql)or die("ERROR1".mysqli_error($con));
	mysqli_close($con);
echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
echo "<script>window.location='take.php'</script>";

?>