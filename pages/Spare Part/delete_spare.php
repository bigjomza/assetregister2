<?php
	include("../../Funtion/funtion.php");
	$con = connect_db();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Asset Register</title>
</head>
<body>
<?php
mysqli_query($con,"DELETE FROM spare_part WHERE id= '$_GET[id]' ")or die ("delete".mysqli_error($con));
mysqli_close($con);
echo "<script>alert('คุณต้องการลบข้อมูลหรือไม่')</script>";
echo "<script>window.location='list_spare.php'</script>";
?>

</body>
</html>