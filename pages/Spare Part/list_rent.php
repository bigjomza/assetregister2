<?php
	//include("../../Funtion/funtion.php");//include ไฟล์ที่เขียนฟังก์ชั่นไว้ใช้งาน
	$con=connect_db();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Rent</title>
    <link href="../../CSS/bootstrap.min.css" rel="stylesheet">

  </head>
<body style="background-color:#EBEBEB">
<div class="container">
<h1 align='center'>จัดการ ยืม/คืน สินทรัพย์</h1>
<form method ="post"  align='center' >
	<input type ="search" name='keyword' size="50" id="titletable2"> 
    <input type="submit" value="ค้นหา" id="titletable2" class="btn btn-info">
</form>
</div>
<?php
	echo "<div class='container'>";
    if(empty($_POST['keyword'])){ //ถ้าไม่มีการส่งค่าค้นหามาจากไฟล์
		$keyword="";//กำหนดให้ตัวแปร $keyword ว่าง
	}
	else{
		$keyword=$_POST['keyword'];//รับค่าคำค้นมาจากฟอร์ม
	}
	
	$result = mysqli_query($con,"SELECT * FROM rent WHERE Rent_log = 1") or die ("Error =>".mysqli_error($con));
	$rows = mysqli_num_rows($result); //จำนวนแถวที่คิวรี่ออกมาได้
	
	if($rows==0){ // ถ้านับจำนวนแถวที่คิวรี่ออกมาได้เท่ากับ 0 แสดงว่าไม่มีข้อมูลที่ตรงกับคำค้นหา
		echo"<p id='middlecenter' align='center'>ไม่พบข้อมูลที่ตรงกับคำค้น\"<b>$keyword</b>\"</p><hr>";
	}
	else{
		echo"<p id='middlecenter' align='center'>จำนวนสินทรัพย์ที่ตรงกับคำว่า \"<b>$keyword</b>\"
			ทั้งหมด $rows รายการ </p>";
	$num=1; //กำหนดตัวแปรเพื่อนับแถว
	echo "<table border='1' align='center' class='table table-striped'>";
	echo "<div class='row'>";
	echo "<div class='col-xl-12'";
	echo "<tr>";
	echo "<th>No</th>";
	echo "<th>ชื่อสินทรัพย์</th>";
	echo "<th>ชื่อพนักงาน</th>";
	echo "<th>จุดใช้งาน</th>";
	echo "<th>วันที่ยืม</th>";
	echo "<th>หมายเหตุ</th>";
	echo "<th id='titletablelist2'>คืน</th>";
	
	while(list($Rent_id,$Rent_asset,$Rent_emp,$Rent_active,$Rent_time,$Rent_ect) = mysqli_fetch_row($result)){
		
		$result1 = mysqli_query($con,"SELECT Asset_name FROM asset WHERE Asset_id = '$Rent_asset'") 
		or die ("Error =>".mysqli_error($con));
		list($Rent_asset) = mysqli_fetch_row($result1);
		
		$result2 = mysqli_query($con,"SELECT Emp_name FROM employee WHERE Emp_code = '$Rent_emp'") 
		or die ("Error =>".mysqli_error($con));
		list($Rent_emp) = mysqli_fetch_row($result2);
		
		$result3 = mysqli_query($con,"SELECT Active_name FROM active_point WHERE Active_id = '$Rent_active'") 
		or die ("Error =>".mysqli_error($con));
		list($Rent_active) =  mysqli_fetch_row($result3);
		echo "<tr>";
		echo "<td>$Rent_id</td>";
		echo "<td>$Rent_asset</td>";
		echo "<td>$Rent_emp</td>";
		echo "<td>$Rent_active</td>";
		echo "<td>$Rent_time</td>";
		echo "<td>$Rent_ect</td>";
		echo "<td id='titletablelist2'>
			<a href='index.php?module=5&action=34&Rent_id=$Rent_id'onclick='return confirm(\"กดปุ่ม ตกลงเพื่อยืนยันการลบข้อมูล\")'>
			<img src='img/cancel.png'  width='30'  height='30'></TD>";
		
		echo "</tr>";
		echo "</div>";
		echo "</div>";
		$num++;//เพิ่มค่าตัวแปรนับแถว
		}		
		echo "</table>";
		echo "</div>";
	mysqli_free_result($result);//คืนค่าหน่วยความจำให้กับระบบ
	mysqli_close($con); //ปิดฐานข้อมูล
	}
    
    
    
    
    
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
	<script src="../../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../JS/bootstrap.min.js"></script>
  </body>
</html>