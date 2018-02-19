<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Report</title>
    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body style="background-color:#EBEBEB">
<h1>ค้นหาประวัติการเบิกทะเบียนสินทรัพย์</h1>
<form method ="post"  align='center' >
	<input type ="search" name='keyword' size="50" id="titletable2"> 
    <input type="submit" value="ค้นหา" id="titletable2" class="btn btn-info">
</form>
<?php	
	//include("../../Funtion/funtion.php");//include ไฟล์ที่เขียนฟังก์ชั่นไว้ใช้งาน
	$con=connect_db();
	echo "<div class='container'>";
	if(empty($_POST['keyword'])){ //ถ้าไม่มีการส่งค่าค้นหามาจากไฟล์
		$keyword="";//กำหนดให้ตัวแปร $keyword ว่าง
	}
	else{
		$keyword=$_POST['keyword'];//รับค่าคำค้นมาจากฟอร์ม
	}
	
	$result = mysqli_query($con,"SELECT * FROM rent WHERE Rent_log = 0 and 
	(Rent_id LIKE '%$keyword%' or Rent_asset LIKE '%$keyword%' OR Rent_emp LIKE '%$keyword%' 
	OR Rent_active LIKE '%$keyword%') ") 
	or die ("Error =>".mysqli_error($con));
	$rows = mysqli_num_rows($result); //จำนวนแถวที่คิวรี่ออกมาได้
	if($rows==0){ // ถ้านับจำนวนแถวที่คิวรี่ออกมาได้เท่ากับ 0 แสดงว่าไม่มีข้อมูลที่ตรงกับคำค้นหา
		echo"<p id='middlecenter' align='center'>ไม่พบข้อมูลที่ตรงกับคำค้น\"<b>$keyword</b>\"</p><hr>";
	}
	else{
		echo"<p id='middlecenter' align='center'>จำนวนสินทรัพย์ที่ตรงกับคำว่า \"<b>$keyword</b>\"
			ทั้งหมด $rows รายการ </p>";
	$num=1; //กำหนดตัวแปรเพื่อนับแถว
	
		echo "<div class='row'>";
			echo "<div class='col-xs-12'>";
		echo "<table border='1' align='center' class='table table-striped'>";
		echo "<tr>";
		echo "<th id='titletablelist2'>No</th>";
		echo "<th>ชื่อสินทรัพย์</th>";
		echo "<th id='titletablelist2'>ชื่อพนักงาน</th>";
		echo "<th>จุดใช้งาน</th>";
		echo "<th id='titletablelist2'>วันที่ยืม</th>";
		echo "<th>หมายเหตุ</th>";
		echo "<th id='titletablelist2'>เวลาคืน</th>";
	
	while(list($Rent_id,$Rent_asset,$Rent_emp,$Rent_active,$Rent_time,$Rent_ect,$Rent_log,$remand) = mysqli_fetch_row($result)){
		
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
		echo "<td id='titletablelist2'>$Rent_id</td>";
		echo "<td>$Rent_asset</td>";
		echo "<td id='titletablelist2'>$Rent_emp</td>";
		echo "<td>$Rent_active</td>";
		echo "<td id='titletablelist2'>$Rent_time</td>";
		echo "<td>$Rent_ect</td>";
		echo "<td id='titletablelist2'>$remand</TD>";
		
		echo "</tr>";
		$num++;//เพิ่มค่าตัวแปรนับแถว
		}		
		echo "</table>";
				echo "</div>";
			echo "</div>";
	echo "</div>";	
	mysqli_free_result($result);//คืนค่าหน่วยความจำให้กับระบบ
	mysqli_close($con); //ปิดฐานข้อมูล
	}
	
?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
	<script src="../../JS/bootstrap.min.js"></script>
  </body>
</html>