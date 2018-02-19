<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ฟอร์มขอเบิกวัสดุ-อุปกรณ์</title>
<!-- Latest compiled and minified CSS -->
<style style="text/css">
  	#hoverTable{
		width:100%; 
		border-collapse:collapse; 
	}
	#hoverTable td{ 
		padding:7px; border:#4e95f4 1px solid;
	}
	/* Define the default color for all the table rows */
	#hoverTable tr{
		background: #b8d1f3;
	}
	/* Define the hover highlight color for the table row */
    #hoverTable tr:hover {
          background-color: #ffff99;
    }
</style>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php
	include("../function/db_function.php");
	$con=connect_db();
	
?>
<script language="javascript">

	function OpenPopup(intLine)
	{
		window.open('list_lend.php?Line='+intLine,'myPopup','width=800,height=600,toolbar=0, menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
	}

</script>
<h1>ฟอร์มขอเบิกวัสดุ-อุปกรณ์</h1>
<form action="readData.php" method="post" enctype="multipart/form-data">
<p>รหัสใบเบิก : <input type="text" name=" idpay" disabled="disabled" value=" "></p>
<p>ชื่อผู้ขอเบิก : <input type="text" name="pay" value=" "></p>
<p>แผนก : <input type="text" name=" " value=""></p>
<p>วันที่เบิก  :  <input type="date" name="time" value=" "></p>
</form>

<form name="frmMain" method="post" action="list_lend.php">
<div class="col-sm-10">
<table class="table table-sm" id="hoverTable">
  <thead>
    <tr>
    <th><div align="center">รายการที่ </div></th>
    <th><div align="center">รหัสวัสดุ </div></th>
    <th><div align="center">รายการ</div></th>
    <th><div align="center">รุ่น / ยี่ห้อ</div></th>
   <th><div align="center">ประเภท</div></th>
	<th><div align="center">จำนวนเบิก </div></th>
	<th><div align="center">เลือกรายการ</div></th>
  </tr>
  </thead>
   <!-- Rows 1 -->
   <tbody>
   <tr>
    <td><div align="center">1 </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="10" NAME="id"  ID="id"  VALUE=""></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="10" NAME="name"  ID="name" VALUE=""></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="10" NAME="brand" ID="brand"  VALUE=""></center> </div></td>
    <td><div align="center"><center>
		<SELECT NAME="category" ID="category">
		<OPTION VALUE=""></OPTION>
		<?php
		$sql = "SELECT * FROM category_spare";
		$objQuery = mysql_query($sql);
		while($objResult = mysql_fetch_array($objQuery))
		{
		?>
		<OPTION VALUE="<?php echo $objResult["Category_id"];?>"><?php echo $objResult["Category_name"];?></OPTION>
		<?php
		}
		?>
		</SELECT></center> </div></td>
	<td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="Pay"  ID="txtUsed_1" VALUE=""></center> </div></td>
    <td><div align="center"><button type="button"  data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-success">เลือกรายการ</button>
    </div></td>
  </tr>
<tbody>



<!-- Rows 2 -->
   <tr>
    <td><div align="center">2</div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="10" NAME="id"  ID="id"  VALUE=""></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="10" NAME="name"  ID="name" VALUE=""></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="10" NAME="brand" ID="brand"  VALUE=""></center> </div></td>
    <td><div align="center"><center>
		<SELECT NAME="category" ID="category">
		<OPTION VALUE=""></OPTION>
		<?php
		$sql = "SELECT * FROM category_spare";
		$objQuery = mysql_query($sql);
		while($objResult = mysql_fetch_array($objQuery))
		{
		?>
		<OPTION VALUE="<?php echo $objResult["Category_id"];?>"><?php echo $objResult["Category_name"];?></OPTION>
		<?php
		}
		?>
		</SELECT></center> </div></td>
	<td><div align="center"><center><INPUT TYPE="Text" SIZE="5" NAME="Pay"  ID="txtUsed_1" VALUE=""></center> </div></td>
	<td><div align="center"><button type="button"  data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-success">เลือกรายการ</button></div></td>
  </tr>


<!-- Rows 3 -->
  <tr>
    <td><div align="center">3</div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="10" NAME="id"  ID="id"  VALUE=""></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="10" NAME="name"  ID="name" VALUE=""></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="10" NAME="brand" ID="brand"  VALUE=""></center> </div></td>
    <td><div align="center"><center>
		<SELECT NAME="category" ID="category">
		<OPTION VALUE=""></OPTION>
		<?php
		$sql = "SELECT * FROM category_spare";
		$objQuery = mysql_query($sql);
		while($objResult = mysql_fetch_array($objQuery))
		{
		?>
		<OPTION VALUE="<?php echo $objResult["Category_id"];?>"><?php echo $objResult["Category_name"];?></OPTION>
		<?php
		}
		?>
		</SELECT></center> </div></td>
	<td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="Pay"  ID="txtUsed_1" VALUE=""></center> </div></td>
	<<td><div align="center"><button type="button"  data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-success">เลือกรายการ</button></div></td>
  </tr>

</table>
  <input type="submit" name="button" id="button" value="ตกลง">
<input type="reset" name="button2" id="button2" value="ยกเลิก">
</div>




<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <h1 align='center'>รายการวัสดุ / อุปกรณ์</h1>
<form method ="post"  align='center'>
<div class="col-6" align="center">
   <input type ="search" name='keyword' size="50"  placeholder="ค้นหารายการวัสดุ-อุปกรณ์"> <input type="submit" value="ค้นหา">
  </div>
	
</form>
<?php

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
	echo "<td align='center'><a href='#' onclick='()' >เลือก</a></TD>";
	echo "</tr>";
	}
	
	}
	mysqli_free_result($result);//คืนค่าหน่วยความจำให้กับระบบ
	mysqli_close($con); //ปิดฐานข้อมูล
	
?>
    </div>
  </div>
</div>
</body>
</html>