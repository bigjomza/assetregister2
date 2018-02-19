<?php
	include("../../Funtion/funtion.php");
	$con = connect_db();
	$sql = "UPDATE asset SET Asset_status = '$_GET[Asset_status]'
	WHERE Asset_id = '$_GET[Asset_id]'";
	
	mysqli_query($con,$sql)or die (mysqli_error($con));
	echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
	echo "<script>window.location='list_status.php'</script>";
	mysqli_close($con);
?>