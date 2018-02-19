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
	copy($temp_file,"../img/$photo");
	$update_photo=",photo='$photo'";
	
}
	$balance = ($_POST['stock'] + $_POST['acquire']) ; /*- $_POST['pay']*/
	$stock = $_POST['stock'] + $_POST['acquire'];
	

	$sql="UPDATE spare_part SET acquire = '$_POST[acquire]', balance = '$balance', stock = '$stock'  WHERE id= '$_POST[item_id]'";
	//echo $sql;
   mysqli_query($con,$sql)or die("ERROR1".mysqli_error($con));
	
	
	$sql2="INSERT INTO take (take_id,id_inventory,take_name,take_brand,take_pice,take_category,take_acquire,take_time)
	 VALUES ('','$_POST[item_id]'
					,'$_POST[name]'
					,'$_POST[brand]'
					,'$_POST[price]'
					,'$_POST[category]'
					,'$_POST[acquire]'
					,'$_POST[time]')";
	mysqli_query($con,$sql2)or die("ERROR2".mysqli_error($con));
	  
	//echo $sql2 ;
	
  mysqli_close($con);
 echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
 echo "<script>window.location='list_spare.php'</script>";
    
?>
