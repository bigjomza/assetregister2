<?php
	session_start();
	if(empty($_SESSION['user_Level']) == '1'){
		echo "<script>alert('คุณไม่มีสิทธิ์เข้าใช้งานในหน้านี้ กรุณา Login ก่อน')</script>";
		echo "<script>window.location='../User/Login.php'</script>";
		exit();	
	}
	include("../../Funtion/funtion.php");
	$con = connect_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Asset Register</title>
  <link rel="stylesheet" href="../../node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="../../css/style.css" />
  <link rel="shortcut icon" href="../../images/favicon.png" />

</head>

<body>
	<?php 
	$Asset_id=$_GET['id']; 
	$result=mysqli_query($con,"SELECT * FROM asset WHERE 
	 Asset_id = '$Asset_id' ") or die("SQL Error=>".mysqli_error($con));

	list($Asset_id,$Asset_code,$Asset_seria,$Asset_name,$mac_address,$computer_name,$brand,$Asset_date,$Asset_company,$Asset_price,$Asset_barcode,$Asset_Category,$Asset_photo,$Asset_time,$detail,$Asset_status,$active_point ,$Asset_log ,$Asset_remand	)=mysqli_fetch_row($result);
	
	$result = mysqli_query($con ,"SELECT Category_name FROM category WHERE Category_id = '$Asset_Category' ")
	or die("SQL Error2=>".mysqli_error($con)) ;
	list($Asset_Category) = mysqli_fetch_row($result);
	
	$result2 = mysqli_query($con ,"SELECT Status_name FROM status WHERE Status_id = '$Asset_status' ")
	or die("SQL Error2=>".mysqli_error($con)) ;
	list($Status_name) = mysqli_fetch_row($result2); 
	
	echo "<div class='row mb-2'>";
	echo "<div class='col-lg-12'>";
	echo "<div class='card'>";
	echo "<div class='card-body'>";
	echo "<div class='table-responsive'>";
	echo "<table class='table table-striped'>";
	echo "<th><center> รหัสสินทรัพย์ : $Asset_id</center>";
	$Asset_photo = empty($Asset_photo)?"maintenance.png":$Asset_photo;
	echo "<P><center><img src='../../images/$Asset_photo' style='width:350px;height:350px;'></center></P>";
	echo "<P><center>เลขทะเบียนสินทรัพย์ : $Asset_code</center></p>";
	echo "<P><center>Serial Number : $Asset_seria</center></p>";
	echo "<P><center>ชื่อสินทรัพย์ : $Asset_name</center></p>";
	echo "<P><center>Mac Address : $mac_address</center></p>";
	echo "<P><center>Computer name : $computer_name</center></p>";
	echo "<P><center>รุ่น / ยี่ห้อ : $brand </center></p>";
	echo "<P><center>วันที่ซื้อ : $Asset_date</center></p>";
	echo "<P><center>ซื้อจาก : $Asset_company</center></p>";
	echo "<P><center>ราคา : $Asset_price</center></p>";
	echo "<P><center>Barcode: $Asset_barcode</center></p>";
	echo "<P><center>ประเภท : $Asset_Category</center></p>";
	echo "<P><center>รายละเอียด : $detail</center></p>";
	echo "<P><center>สถานะปัจจุบัน : $Status_name <img src='../../images/$Asset_status.png' style='width:35px;height:35px;'></center></p>";
 	echo "<P><center>แก้ไขข้อมูลล่าสุดเมื่อ : $Asset_remand </center></p>";
	echo "</hr>";
	echo "</th>";
		echo "</table>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
	
	
	mysqli_free_result($result);
	mysqli_close($con); //ปิดฐานข้อมูล
	?>
      </div></div>  
    <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="http://www.nopadol.com" target="_blank">Nopadol Panich</a> &copy; 2018
            </span>
          </div>
        </footer>

  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/misc.js"></script>
</body>
</html>