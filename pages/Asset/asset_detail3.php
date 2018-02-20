<?php
	session_start();
	if(empty($_SESSION['user_Level']) == '1'){
		echo "<script>alert('คุณไม่มีสิทธิ์เข้าใช้งานในหน้านี้ กรุณา Login ก่อน')</script>";
		echo "<script>window.location='pages/User/Login.php'</script>";
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
	<title>Asset Register Detail</title>
	<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="shortcut icon" href="images/favicon.png" />
	
</head>
<style>
#XD{
	color:#000;
	background-color:#FFC;
}
</style>
<body>
	<div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="../../images/logo_star_black.png" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../../images/logo_star_mini.jpg" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block" method="post">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search" name="keyword">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="../../images/face.jpg" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-th"></i></a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="../../images/face.jpg" alt="">
            <p class="name">Administrator</p>
            <p class="designation">Admin Manager</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">
                <img src="../../images/icons/1.png" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Asset/Form_Add.php" title="เพิ่มรายการสินทรัพย์">
                <img src="../../images/icons/007-star.png" alt="">
                <span class="menu-title">Add Asset</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="../Status/list_status.php" title="จัดการสินทรัพย์">
                <img src="../../images/icons/list.png" alt="">
                <span class="menu-title">Management Asset</span>
              </a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="../Asset/List_Asset.php" title="รายชื่อสินทรัพย์">
                <img src="../../images/icons/list-with-dots.png" alt="">
                <span class="menu-title">List Asset</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Rent/List_rent.php" title="คืนสินทรัพย์">
                <img src="../../images/icons/clipboard.png" alt="">
                <span class="menu-title">Repatriate</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="../Report/Asset.php" title="ประวัติการคืนสินทรัพย์">
                <img src="../../images/icons/history(1).png" alt="">
                <span class="menu-title">History</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="../../images/icons/9.png" alt="">
                <span class="menu-title">Spare Part<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/list_spare.php">
                      จัดการวัสดุ-อุปกรณ์
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/index_sp.php">
                      จัดทำรายการเบิก
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/take.php">
                      รายการรับเข้า
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/lend.php">
                      รายการเบิก
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/render.php">
                      รับคืนวัสดุ-อุปกรณ์
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/send.php">
                      ประวัติรับคืนวัสดุ-อุปกรณ์ 
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Search/Search_asset.php">
                <img src="../../images/icons/10.png" alt="">
                <span class="menu-title">Search asset</span>
              </a>
            </li>
          </ul>
        </nav>
        
	<div class="content-wrapper">
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
	
	echo "<div align='center'><table border='1'>";
	echo "<TH id='XD'>";
    echo"รหัสสินทรัพย์ : $Asset_id";
	$Asset_photo = empty($Asset_photo)?"proflie.png":$Asset_photo;
	echo "<P><img src='../../images/$Asset_photo' style='width:350px;height:350px;'></P>";
	echo"<P>เลขทะเบียนสินทรัพย์ : $Asset_code</p>";
	echo"<P>Serial Number : $Asset_seria</p>";
	echo"<P>ชื่อสินทรัพย์ : $Asset_name</p>";
	echo"<P>Mac Address : $mac_address</p>";
	echo"<P>Computer name : $computer_name</p>";
	echo"<P>รุ่น / ยี่ห้อ : $brand </p>";
	echo"<P>วันที่ซื้อ : $Asset_date</p>";
	echo"<P>ซื้อจาก : $Asset_company</p>";
	echo"<P>ราคา : $Asset_price</p>";
	echo"<P>Barcode: $Asset_barcode</p>";
	echo"<P>ประเภท : $Asset_Category</p>";
	echo"<P>รายละเอียด : $detail</p>";
	echo"<P>สถานะปัจจุบัน : $Status_name <img src='../../images/$Asset_status.png' style='width:35px;height:35px;'></p>";
 	echo"<P>แก้ไขข้อมูลล่าสุดเมื่อ : $Asset_remand </p>";
	echo"</hr>";
	echo "</div></table>";
	echo "</th>";
	
	mysqli_free_result($result);
	mysqli_close($con); //ปิดฐานข้อมูล
?>
	</div>
    </div>
    <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="http://www.nopadol.com" target="_blank">Nopadol Panich</a> &copy; 2018
            </span>
          </div>
        </footer>
        </div>
  </div>
	<script src="js/jquery.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>   
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
	<script src="js/off-canvas.js"></script>
	<script src="js/hoverable-collapse.js"></script>
	<script src="js/misc.js"></script>
</body>
</html>