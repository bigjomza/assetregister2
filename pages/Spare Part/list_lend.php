<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>รายการวัสดุ / อุปกรณ์</title>
</head>
<script language="javascript">
function test()
{ alert("test");
	}

	function selData(intLine,id,name,brand,Category_id,Pay)
	{
		var sid = self.opener.document.getElementById("id _" +intLine);
		sCustomerID.value = id;

		var sname = self.opener.document.getElementById("name_" +intLine);
		sname.value = name;

		var sbrand = self.opener.document.getElementById("brand_" +intLine);
		sbrand.value = brand;

		var sCategory_id = self.opener.document.getElementById("Category_id_" +intLine);
		sCategory_id.value = CountryCode;

		var sPay = self.opener.document.getElementById("Pay_" +intLine);
		sPay.value = Budget;


		window.close();
	}
</script>
<body>
<h1 align='center'>รายการวัสดุ / อุปกรณ์</h1>
<form method ="post"  align='center'>
	<input type ="search" name='keyword' size="50"  placeholder="ค้นหารายการวัสดุ-อุปกรณ์"> <input type="submit" value="ค้นหา">
</form>
<?php
include("../function/db_function.php");//include ไฟล์ที่เขียนฟังก์ชั่นไว้ใช้งาน
	$con=connect_db(); //เลือกใช้คำสั่งในการติดต่อฐานข้อมูล
	
	if(empty($_POST['keyword'])){ //ถ้าไม่มีการส่งค่าค้นหามาจากไฟล์
		$keyword="";//กำหนดให้ตัวแปร $keyword ว่าง
	}
	else{
		$keyword=$_POST['keyword'];//รับค่าคำค้นมาจากฟอร์ม
	}
	
	$result=mysqli_query($con,"SELECT*FROM spare_part WHERE  name  LIKE '%$keyword%' OR category LIKE '%$keyword%'OR brand ORDER BY id ASC  ") or die ("MySQL =>".mysqli_error($con));
	
	
	$rows=mysqli_num_rows($result); //จำนวนแถวที่คิวรี่ออกมาได้
	if($rows==0){ 
		echo"<p>ไม่พบข้อมูลที่ครงกับคำค้น\"<b>$keyword</b>\"</p><hr>";
	}
	else{
		echo"<p align='center'>รายการวัสดุ/อุปกรณ์ที่ตรงกับคำค้น \"<b>$keyword</b>\"
มีทั้งหมด $rows รายการ </p>";

	$num=1;//กำหนดตัวแปรเพื่อนับแถว
	echo "<table border = 1 align='center'>";
	echo "<th>รหัสวัสดุ</th>";
	echo "<th>รูปภาพ</th>";
	echo "<th>รายการ</th>";
	echo "<th>รุ่น / ยี่ห้อ</th>";
	echo "<th>ประเภท</th>";
	echo "<th>จำนวนทั้งหมด</th>";
	echo "<th>วัน/เดือน/ปี</th>";
	echo "<th>เลือกรายการ</th>";
    
	while(list($id,$photo,$name,$brand,$price,$category,$stock,$acquire,$Pay,$balance,$time) = mysqli_fetch_row($result)){ 
	
	$sql=mysqli_query($con,"SELECT Category_name FROM category_spare  
	WHERE Category_id='$category' ")or die("SQL error2  ".mysqli_error($con));
    list($category)=mysqli_fetch_row($sql);
		
	
	$balance = $acquire + $stock;
	
	echo "<tr>";
	echo "<td align='center'>$id</td>";
	echo "<td align='center'><img src='../img/$photo'  width='50'  height='50'></td>";
	echo "<td align='center'>$name</td>";
	echo "<td align='center'>$brand</td>";
	echo "<td align='center'>$category</td>";
	echo "<td align='center'>$balance</td>";
	echo "<td align='center'>$time</td>";
	echo "<td align='center'><a href='#'><img src='../img/flat.png'  width='30'  height='30'></a></TD>";
	echo "</tr>";
	}
	
	}
	mysqli_free_result($result);//คืนค่าหน่วยความจำให้กับระบบ
	mysqli_close($con); //ปิดฐานข้อมูล
	
?>
</body>
</html>