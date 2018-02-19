<?php
	//include("../../Funtion/funtion.php");
	$con = connect_db();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Add Category</title>
</head>
<style type="text/css">
.fontmini{ /*เปลี่ยนสีฟอร์นกับขนาด*/
	font-size:24px;
	color:#fc636b;	
}
</style>
<body>
<form action="index.php?module=3&action=20" method="post" enctype="multipart/form-data" name="Form" class="fontmini">
<H1>ฟอร์มเพิ่มข้อมูลประเภทสินทรัพย์</H1>
<P>รหัสประเภท : </P>
<P>ชื่อประเภทสินทรัพย์ : <input type="text" name="Category_name" size="40"
								required value=""></P>
<P>
    <input type="submit" name="save" value="save" />
    <input type="reset" name="cancle" value="cancle" />
</P>
</body>
</html>