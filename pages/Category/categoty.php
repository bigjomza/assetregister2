<?php
	//include("../../Funtion/funtion.php");
	$con = connect_db();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Category</title>
</head>
<style type="text/css">
.fontmini{ /*เปลี่ยนสีฟอร์นกับขนาด*/
	font-size:24px;
	color:#fc636b;
}
</style>
<body>
<?php
	$resulf = mysqli_query($con,"SELECT * FROM category")
	or die ("MySQL Error =>".mysqli_error($con));

	echo "<TD><a href='index.php?module=3&action=16' onclick='return confirm(\"กดปุ่ม ตกลงเพื่อยืนยัน\")'>
	<img src='img/if_Plus_377948.png'  width='30'  height='30'></a></TD>";

	echo "<table border = 1  class='fontmini' align='center'>";
	echo "<TH>รหัสประเภท</TH>";
	echo "<TH>ชื่อประเภท</TH>";
	echo "<TH>แก้ไข</TH>";
	echo "<TH>ลบ</TH>";
	while(list($Category_id , $Category_name) = mysqli_fetch_row($resulf)){

		echo "<TR align='center'>";
		echo "<TD>$Category_id</TD>";
		echo "<TD>$Category_name</TD>";
		echo "<TD><a href='index.php?module=3&action=12&id=$Category_id' onclick='return confirm(\"กดปุ่ม ตกลงเพื่อยืนยัน\")'>
		<img src='img/if_brush-pencil.png'  width='30'  height='30'></a></TD>";
		echo "<TD><a href='index.php?module=2&action=10&id=$Category_id' onclick='return confirm(\"กดปุ่ม ตกลงเพื่อยืนยัน\")'>
		<img src='img/if_58_Cross.png'  width='30'  height='30'></a></TD>";
		echo "</TR>";
	}
	echo "</table>";

?>
</body>
</html>
