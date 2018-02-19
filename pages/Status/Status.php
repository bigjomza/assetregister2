<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Status</title>
</head>

<body>
<?php
	include("../../Funtion/funtion.php");
	$con = connect_db();
	
	$resulf = mysqli_query($con,"SELECT * FROM status") 
	or die ("MySQL Error =>".mysqli_error($resulf));
	
	echo "<table border = 1 >";
	echo "<th>รหัสสถานะ</th>";
	echo "<th>ชื่อสถานะ</th>";
		
	while(list($Status_id , $Status_name) = mysqli_fetch_row($resulf)){
		echo "<TR>";
		echo "<td>$Status_id</td>";
		echo "<td>$Status_name</td>";
		echo "</TR>";
		
	}
	echo "</table>";	
		
	




?>
</body>
</html>