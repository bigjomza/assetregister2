<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Asset Register</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../images/icons/285690.ico" />
</head>
<body>
<?php
	include("../../Funtion/funtion.php");
	$con = connect_db();
mysqli_query($con,"DELETE FROM take WHERE take_id= '$_GET[take_id]' ")or die ("delete".mysqli_error($con));
mysqli_close($con);
echo "<script>alert('คุณต้องการลบข้อมูลหรือไม่')</script>";
echo "<script>window.location='take.php'</script>";
?>

</body>
</html>