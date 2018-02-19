<?php
	//include("../../Funtion/funtion.php");
	$con = connect_db();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Edit Category</title>
</head>
<style type="text/css">
.fontmini2{ /*เปลี่ยนสีฟอร์นกับขนาด*/
	font-size:24px;
	color:#fc636b;	
}
</style>
<body>
<?php
	$Category_id = $_GET['id'];
	$result=mysqli_query($con,"SELECT Category_id,Category_name FROM category WHERE Category_id='$Category_id' ")
	or die ("error=>".mysqli_error($con));

	list( $Category_id,$Category_name)=mysqli_fetch_row($result);
?>    
<form action="index.php?module=3&action=11" method="post" enctype="multipart/form-data" name="Form" class="fontmini2">
<input type="hidden" name="Old_ID" value="<?php echo $Category_id ?>">
<H1>ฟอร์มแก้ไขข้อมูลประเภทสินทรัพย์</H1>
<P>รหัสประเภท : <?php echo $Category_id ?></P>
<P>ชื่อประเภทสินทรัพย์ : <input type="text" name="Category_name" size="40" 
								required value="<?php echo $Category_name ?>"></P>
<P>
    <input type="submit" name="save" id="save" value="save" />
    <input type="reset" name="cancle" id="cancle" value="cancle" />
</P>
</body>
</html>