<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Category</title>
</head>

<body>
<?php
	//include("../../Funtion/funtion.php");
	$con = connect_db();
	
	$sql = "UPDATE category SET 
	Category_name = '$_POST[Category_name]'
	WHERE Category_id = '$_POST[Old_ID]' ";
	
	mysqli_query($con,$sql) or die(mysqli_error($con));
	mysqli_close($con);
	echo "<script>window.location='index.php?module=3&action=14'</script>";
?>


</body>
</html>