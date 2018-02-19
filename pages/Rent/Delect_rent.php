<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delect Rent</title>
</head>

<body>
<?php 
	include("../../Funtion/funtion.php");
	$con = connect_db(); //เรียกไฟล์
	
	$result = mysqli_query($con, "SELECT * FROM rent WHERE Rent_id ='$_GET[Rent_id]' ") 
	or die(mysqli_error($con));
	list($Rent_id,$Rent_asset) = mysqli_fetch_row($result);
		
		$sql = "UPDATE rent SET Rent_log = 0 WHERE Rent_id ='$_GET[Rent_id]' ";
		mysqli_query($con, $sql) or die("Error Delete" . mysqli_error($con));
		
		$sql2 = "UPDATE asset SET Asset_status = '01'
		WHERE Asset_id = $Rent_asset ";
		mysqli_query($con, $sql2) or die("Error Delete" . mysqli_error($con));
		//echo $sql ."<br>". $sql2;
		
		echo "<script>alert('คืนรายการเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='List_rent.php'</script>";

		mysqli_close($con);
?>
</body>
</html>