<?php
	session_start();
	if(empty($_SESSION['user_Level']) == '1'){
		echo "<script>alert('คุณไม่มีสิทธิ์เข้าใช้งานในหน้านี้ กรุณา Login ก่อน')</script>";
		echo "<script>window.location='pages/User/Login.php'</script>";
		exit();	
	}
	include("Funtion/funtion.php");
	$con = connect_db();
?>

<!DOCTYPE html>
<html lang="en">
<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Asset Register</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="images/favicon.png" />
<!--  <link rel="stylesheet" href="../../css/bootstrap.min.css" crossorigin="anonymous">-->

</head>
<body>
 <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.php"><img src="images/Nopadol LOGO-1--05.png" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/Nopadol LOGO-1--03.png" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="images/face.jpg" alt=""></a>
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
            <img src="images/face.jpg" alt="">
            <p class="name">Administrator</p>
            <p class="designation">Admin Manager</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <img src="images/icons/house.png" alt="">
                <span class="menu-title">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/Asset/Form_Add.php" title="เพิ่มรายการสินทรัพย์" target="_blank">
                <img src="images/icons/007-star.png" alt="">
                <span class="menu-title">Add Asset</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="pages/Status/list_status.php" title="จัดการสินทรัพย์">
                <img src="images/icons/list.png" alt="">
                <span class="menu-title">Management Asset</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="pages/Asset/List_Asset.php" title="รายชื่อสินทรัพย์">
                <img src="images/icons/list-with-dots.png" alt="">
                <span class="menu-title">List Asset</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/Rent/List_rent.php" title="คืนสินทรัพย์">
                <img src="images/icons/clipboard.png" alt="">
                <span class="menu-title">Repatriate</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="pages/Report/Asset.php" title="ประวัติการคืนสินทรัพย์">
                <img src="images/icons/history(1).png" alt="">
                <span class="menu-title">History</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="images/icons/9.png" alt="">
                <span class="menu-title">Spare Part<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/Spare Part/list_spare.php"  title="จัดการวัสดุ-อุปกรณ์">
                     <img src="images/icons/slice30-20.png" alt="">
                     <span class="menu-title">จัดการวัสดุ-อุปกรณ์</span>
                     </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/Spare Part/index_sp.php">
                     <img src="images/icons/cart_full.png" alt="">
                      <span class="menu-title">จัดทำรายการเบิก</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/Spare Part/take.php">
                    <img src="images/icons/download_5-24.png" alt="">
                    <span class="menu-title"> รายการรับเข้า</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/Spare Part/lend.php">
                    <img src="images/icons/credit-card.png" alt="">
                       <span class="menu-title">รายการเบิก</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/Spare Part/render.php">
                    <img src="images/icons/back-arrow.png" alt="">
                      <span class="menu-title">รับคืนวัสดุ-อุปกรณ์</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/Spare Part/send.php">
                    <img src="images/icons/clipboard (1).png" alt="">
                      <span class="menu-title">ประวัติรับคืนวัสดุ </span>
                    </a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/Spare Part/report_spart1.php">
                    <img src="images/icons/analytics.png" alt="">
                      <span class="menu-title">รายงานยอดคงเหลือ</span>
                    </a>
                       </li>
                     <li class="nav-item">
                    <a class="nav-link" href="pages/Spare Part/report_take1.php">
                    <img src="images/icons/analytics.png" alt="">
                      <span class="menu-title">รายงานรับเข้าวัสดุ</span>
                    </a>
                       </li>
                       <li class="nav-item">
                    <a class="nav-link" href="pages/Spare Part/report_lend1.php">
                    <img src="images/icons/analytics.png" alt="">
                      <span class="menu-title">รายงานการเบิก</span>
                    </a>
                       </li>
                        <li class="nav-item">
                    <a class="nav-link" href="pages/Spare Part/report_send1.php">
                    <img src="images/icons/analytics.png" alt="">
                      <span class="menu-title">รายงานคืนวัสดุ</span>
                    </a>
                       </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages\Search\Search_asset.php">
                <img src="images/icons/search.png" alt="">
                <span class="menu-title">Search asset</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages\User\Logout.php">
                <img src="images/icons/exit.png" alt="">
                <span class="menu-title">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
    <!--<link rel="stylesheet" href="pages/Spare Part/css/css/bootstrap.min.css">-->
<body class="bodyfont">
<div class="container">
	<!-- Static navbar -->
  <style>
#ccc {
    list-style-type: none;
	border-radius: 5px;
    margin: 0;
    padding: 3;
	font-family:"TH Sarabun New", "Tw Cen MT";
    font-size:30px;
    overflow: hidden;
    background-color:#FFFF00;
	text-align: center;
}

#xx {
    float: center;
}

#xx a {
    display: block;
    color: #000000;
    text-align: center;
    padding: 6px 16px;
    text-decoration: none;
	
}

</style>
</head>
<body>
  <ul id="ccc">
  <li id="xx"><a class="active">ระบบการจัดการทะเบียนสินทรัพย์บริษัทนพดลพาณิชย์</a></li>
</ul>
<STYLE>
A:link { 
	color: rgb(54, 42, 68); 
	text-decoration:none;
}
A:visited {
	color: #091da6; 
	text-decoration: none;
}
A:hover {
	color: rgb(232, 76, 26);
}
#textaling{
	text-align:center;	
}
</STYLE>

<img src="images/h4GyY2823.png" style="width:900px;height:400px;"></a>

 <div class="clearfloat"></div>
		<div class="clearfloat"></div>
    <footer id="textaling">
    	<a href="https://www.facebook.com/NopadolPanich/" target=_blank>
        <img src="images/fb.png" style="width:40px;height:40px;" ></a>
        <a href="http://www.nopadol.com" target=_blank>
        <img src="images/nopadol-logo.png" style="width:40px;height:40px;"></a>
        <a href="sale@nopadol.com" target=_blank>
        <img src="images/email-icon.png" style="width:40px;height:40px;"></a>
    	<div id="footer_top" class="fontcolor" align="center"><p>©2014 Nopadol Panich Co., Ltd. All Rights Reserved</p></div>
    	<div id="footer_bottom" class="fontcolor2">392 Chiang Mai - Lampang Road, t.Fah Ham a. Muang Chiang Mai ,Thailand</p>
        </div>
    </footer>
</div>
<a style="position: fixed; bottom: 10px; right: 10px;color:#CCC" </a>
</header>
</body>
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