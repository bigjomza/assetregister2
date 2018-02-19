<?php
	include("../../Funtion/funtion.php");//include ไฟล์ที่เขียนฟังก์ชั่นไว้ใช้งาน
	$con = connect_db();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ยืม/คืน สินทรัพย์</title>
</head>
<body>
<form method="post" action="Add_rent.php" name="FormRent">
<input  type="hidden" name="Rent_id" value="" />
		<P>No : <input type="text" name="Rent_id" disabled="disabled"/></P>
		<P>รหัสสินทรัพย์ : <select name="Rent_asset">
        <?php
				  $result = mysqli_query($con,"SELECT Asset_id,Asset_name FROM asset")
				  or die ("mysql error=>>".mysql_error($con));
				  while(list($Asset_id,$Asset_name)=mysqli_fetch_row($result)){
					  $select = $Asset_id == $Asset_name? "selected":"";
				  echo "<option value=$Asset_id>$Asset_name</option>";
				  }
				  
				  mysqli_free_result($result);
				  mysqli_close($con);
				?>
        
        </select></P>
        
        <P>รหัสพนักงาน : <select ="Rent_emp">
        <?php
				  $result = mysqli_query($con,"SELECT Category_id,Category_name FROM category")
				  or die ("mysql error=>>".mysql_error($con));
				  while(list($Category_id,$Category_name)=mysqli_fetch_row($result)){
					  $select = $Category_id == $Category_name? "selected":"";
				  echo "<option value=$Category_id>$Category_name</option>";
				  }
				  
				  mysqli_free_result($result);
				  mysqli_close($con);
				?>
        </select></P>
        <P>จุดใช้งาน : <select ="Rent_active">
        <?php
				  $result2 = mysqli_query($con,"SELECT Active_id,Active_name FROM active_point")
				  or die ("mysql error=>>".mysql_error($con));
				  while(list($Active_id,$Active_name)=mysqli_fetch_row($result2)){
					  $select = $Active_id == $Active_name? "selected":"";
				  echo "<option value=$Active_id>$Active_name</option>";
				  }
				  
				  mysqli_free_result($result);
				  mysqli_close($con);
				?>
        </select></P>
        <P>วันที่ยืม : <input type="date" name="Rent_time" /></P>
        <P>*หมายเหตุ : <textarea name="Rent_ect" ></textarea></P>


<input type="submit" value="เพิ่มข้อมูล" />
<input type="reset" value="Reset" />
</form>
</body>
</html>