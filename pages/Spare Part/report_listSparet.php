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

	<title>รายงานวัสดุคงเหลือ</title>
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
<?php
$thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");
$thai_month_arr=array(
    "0"=>"",
    "1"=>"มกราคม",
    "2"=>"กุมภาพันธ์",
    "3"=>"มีนาคม",
    "4"=>"เมษายน",
    "5"=>"พฤษภาคม",
    "6"=>"มิถุนายน", 
    "7"=>"กรกฎาคม",
    "8"=>"สิงหาคม",
    "9"=>"กันยายน",
    "10"=>"ตุลาคม",
    "11"=>"พฤศจิกายน",
    "12"=>"ธันวาคม"                 
);
function thai_date($time){
    global $thai_day_arr,$thai_month_arr;
    $thai_date_return="วัน".$thai_day_arr[date("w",$time)];
    $thai_date_return.= "ที่ ".date("j",$time);
    $thai_date_return.=" เดือน".$thai_month_arr[date("n",$time)];
    $thai_date_return.= " พ.ศ.".(date("Yํ",$time)+543);
    $thai_date_return.= "  ".date("H:i",$time)." น.";
    return $thai_date_return;
}
?>
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
    <h3 align="center">รายงานสรุปยอดคงเหลือของวัสดุ/อุปกรณ์</h2>
    <h4 align="center"><P>ประจำเดือน  <?php $date = date("n-Y"); 
				echo $date; ?></P></h4>
    </div>
     <?php
	 if(empty($_GET['keyword'])){ 
		$keyword="" ;
	}
	else{
		$keyword=$_GET['keyword'];
	}

	 
    $result = mysqli_query($con,"SELECT id,name,brand,price,category,stock,Pay,balance,acquire FROM spare_part WHERE  name  LIKE '%$keyword%' OR name LIKE '%$keyword%' OR brand LIKE '%$keyword%' OR category =(SELECT Category_id FROM category_spare WHERE Category_name  LIKE '%$keyword%'  ORDER BY name)")or die(mysqli_error($con));
	$rows = mysqli_num_rows($result); //จำนวนแถวที่คิวรี่ออกมาได้
	$num = 0;	
	
	    echo "<table align=\"center\" id=\"customers\" >";
		echo "<tr>";
		echo "<th width='7%'>รหัสวัสดุ</th>"; 
		echo "<th>รายการ</th>";
		echo "<th>รุ่น / ยี่ห้อ</th>";
		echo "<th>ราคาซื้อ</th>";
		echo "<th>ประเภท</th>";
		echo "<th width='10%'>จำนวนทั้งหมด</th>";
		echo "<th width='10%'>จำนวนจ่าย</th>";
		echo "<th width='10%'>จำนวนคงเหลือ</th>";
		echo "</tr>";
		while(list($id,$name,$brand,$price,$category,$stock,$Pay,$balance  ) = mysqli_fetch_row($result)){ 
		
	    $sql=mysqli_query($con,"SELECT Category_name FROM category_spare  
	    WHERE Category_id='$category'")or die("SQL error2  ".mysqli_error($con));
        list($category)=mysqli_fetch_row($sql);
		
  		echo "<tr align=\"center\">";
				echo "<strong>";
				echo "<td>$id</td>";
				echo "<td>$name</td>";
				echo "<td>$brand</td>";
				echo "<td>$price</td>";
				echo "<td>$category</td>";
				echo "<td>$stock</td>";
				echo "<td>$Pay</td>";
				echo "<td>$balance</td>";
				echo "</strong>";
		        echo "</tr>";
				$num++;
		}	
		echo "</table>";
		echo "<br>";
		echo "<div class='col-11' align='right'>";
		echo "<h4 >สรุปรายการวัสดุคงเหลือหมด จำนวน : $num รายการ</h4>";	
		echo "</div>";
		echo "<div class='col-1' align='right'>";
		echo "</div>";
		echo "<div align='center' style='font-size:20px'>";
	    echo "<input type='button' name='Submi' value=' พิมพ์รายงาน'  align='center'  onClick=\"javascript:this.style.display='none';window.print()\">";
		echo "</div>";
	
	?>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

