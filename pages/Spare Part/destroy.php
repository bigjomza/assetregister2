<?php
	session_start();
	include("../../Funtion/funtion.php");
	$con = connect_db();
	
echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
echo "<script>window.location='index_sp.php'</script>";

?>