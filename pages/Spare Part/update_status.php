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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
	$result="UPDATE asset SET status = '$_POST[status]'";
	
mysqli_query($con,	$result);
mysqli_close($con);
echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
echo "<script>window.location='list_status.php'</script>";
?>
</body>
</html>