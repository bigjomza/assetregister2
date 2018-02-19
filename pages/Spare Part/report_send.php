<?php
	include("../../Funtion/funtion.php");
	$con = connect_db();
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>รายงานการรับคืนวัสดุ</title>
    <style>
@media print {
  @page { margin: 0; }
  body { 
  margin: 1.6cm; 
  }
}
#customers {
    border-collapse: collapse;
    width: 90%;
}

#customers td, #customers th {
    border: 2px solid #000;
    padding: 8px;
}

#customers tr:hover {background-color: #ddd;}
#customers th {
    padding-top: 2px;
    padding-bottom: 5px;
    text-align: center;
    color: #000;
	background-color:#999;
}
#customers td {
    padding-top: 2px;
    padding-bottom: 5px;
	color: #000;
}

</style>
</head>
<body style="font-family:'TH Sarabun New', 'Tw Cen MT'">
	<div class="row">
			<div class="col-1">
				<img src="../../images/h4GyY2823.png" style="width:205px; height:95px;">
			</div>
        	<div class="col-10" align="right">	<br><h4>Page 1
				<br><?php $date = date("d-m-Y"); 
				echo $date; ?></h4> </div>
            <div class="col-1" align="right"> </div>
		</div>      
	<div>
    <h3 align="center">รายงานการรับคืนวัสดุ/อุปกรณ์</h2>
    <h4 align="center"><P>ประจำเดือน<?php $date = date("m-Y"); 
				echo $date; ?></P></h4>
    </div>
    <?php
if(empty($_GET['keyword'])){ 
		$keyword="" ;
	}
	else{
		$keyword=$_GET['keyword'];
	}
?>
     <?php
	$result = mysqli_query($con, "SELECT * FROM send_sp  WHERE  send_id  LIKE '%$keyword%' OR send_bill LIKE '%$keyword%' OR send_nameSp  LIKE '%$keyword%' ") or die ("MySQL =>".mysqli_error($con));
	$num = 0;
	
	$result3 = mysqli_query($con,"SELECT rent_empID,rent_name,rent_department FROM lend_empsp WHERE rent_empID") 
		or die ("Error =>".mysqli_error($con));
		list($rent_empID,$rent_name,$rent_department) =  mysqli_fetch_row($result3);
	
	    echo "<table align=\"center\" id=\"customers\" >";
		echo "<tr>";
		echo "<th >ลำดับที่</th>";
	    echo "<th>เลขที่ใบเบิก</th>";
	    echo "<th>รหัสวัสดุ</th>";
	    echo "<th>รายการ</th>";
	   echo "<th>รุ่น / ยี่ห้อ</th>";
	   echo "<th>จำนวนที่เบิก</th>";
	   echo "<th>จำนวนที่คืน</th>";
	   echo "<th>รหัสพนักงาน</th>";
	   echo "<th>ชื่อผู้คืน</th>";
       echo "<th>แผนก</th>";
	   echo "<th>วันที่คืน</th>";
		echo "</tr>";
		echo "</tr>";
		
		while(list($send_id,$send_bill,$send_idSp,$send_nameSp,$send_brand,$send_number,$send_back,$send_name,$send_department,$send_date) = mysqli_fetch_row($result)){ 
		
 
	echo "<tr>";
	echo "<td align='left'>$send_id</td>";
	echo "<td align='left'>$send_bill</td>";
	echo "<td align='left'>$send_idSp</td>";
	echo" <td align='left'>$send_nameSp</td>";
	echo" <td align='left'>$send_brand</td>";
	echo "<td align='left'>$send_number</td>";
	echo "<td align='left'>$send_back</td>";
	echo "<td align='left'>$rent_empID</td>";
	echo "<td align='left'>$rent_name</td>";
	echo "<td align='left'>$rent_department</td>";
	echo "<td align='left'>$send_date</td>";
	echo "</tr>";
				$num++;
		}	
		echo "</table>";
		echo "<br>";
		echo "<div class='col-11' align='right'>";
		echo "<h4 >สรุปรายการรับวัสดุ/อุปกรณ์เข้าทั้งหมด จำนวน : $num รายการ</h4>";	
		echo "</div>";
		echo "<div class='col-1' align='right'>";
		echo "</div>";
	    echo "<div align='center' style='font-size:20px'>";
	    echo "<input type='submit' name='Submi' value=' PRINT '  align='center'  onClick=\"javascript:this.style.display='none';window.print()\">";
		echo "</div>";
		
			mysqli_free_result($result3);
	?>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>