<?php
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
<!--  <link rel="stylesheet" href="../../css/bootstrap.min.css" crossorigin="anonymous">-->
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="../../index.php"><img src="../../images/Nopadol LOGO-1--05.png" /></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../images/Nopadol LOGO-1--03.png" alt=""></a>
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
                <img src="../../images/icons/house.png" alt="">
                <span class="menu-title">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Asset/Form_Add.php" title="เพิ่มรายการสินทรัพย์" target="_blank">
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
             <li class="nav-item">
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
             <li class="nav-item active">
              <a class="nav-link" href="../Report/Asset.php" title="ประวัติการคืนสินทรัพย์">
                <img src="../../images/icons/history(1).png" alt="">
                <span class="menu-title">History</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#Spare" aria-expanded="false" aria-controls="Spare">
                <img src="../../images/icons/9.png" alt="">
                <span class="menu-title">Spare Part<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="Spare">
                <ul class="nav flex-column sub-menu">
                
<li class="nav-item">
                    <a class="nav-link" href="../Spare Part/list_spare.php"  title="จัดการวัสดุ-อุปกรณ์">
                     <img src="../../images/icons/slice30-20.png" alt="">
                     <span class="menu-title">จัดการวัสดุ-อุปกรณ์</span>
                     </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/index_sp.php">
                     <img src="../../images/icons/cart_full.png" alt="">
                      <span class="menu-title">จัดทำรายการเบิก</span>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/take.php">
                    <img src="../../images/icons/download_5-24.png" alt="">
                    <span class="menu-title"> รายการรับเข้า</span>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/lend.php">
                    <img src="../../images/icons/credit-card.png" alt="">
                       <span class="menu-title">รายการเบิก</span>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/render.php">
                    <img src="../../images/icons/back-arrow.png" alt="">
                      <span class="menu-title">รับคืนวัสดุ-อุปกรณ์</span>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/send.php">
                    <img src="../../images/icons/clipboard (1).png" alt="">
                      <span class="menu-title">ประวัติรับคืนวัสดุ </span>
                    </a>
                  </li>
                  
                  
                    <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/report_spart1.php">
                    <img src="../../images/icons/analytics.png" alt="">
                      <span class="menu-title">รายงานยอดคงเหลือ</span>
                    </a>
                       </li>
                     
                     <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/report_take1.php">
                    <img src="../../images/icons/analytics.png" alt="">
                      <span class="menu-title">รายงานรับเข้าวัสดุ</span>
                    </a>
                       </li>
                       <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/report_lend1.php">
                    <img src="../../images/icons/analytics.png" alt="">
                      <span class="menu-title">รายงานการเบิก</span>
                    </a>
                       </li>
                        <li class="nav-item">
                    <a class="nav-link" href="../Spare Part/report_send1.php">
                    <img src="../../images/icons/analytics.png" alt="">
                      <span class="menu-title">รายงานคืนวัสดุ</span>
                    </a>
                       </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Search/Search_asset.php">
                <img src="../../images/icons/search.png" alt="">
                <span class="menu-title">Search asset</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../User/Logout.php">
                <img src="../../images/icons/exit.png" alt="">
                <span class="menu-title">Logout</span>
              </a>
            </li>
          </ul>
        </nav>

        <!-- partial -->
	<div class="content-wrapper">
	<?php 
		//$result = mysqli_query($con,"SELECT * FROM category ") or die ("Error => ".mysqli_error($con));	
		$result = mysqli_query($con,"SELECT * FROM asset GROUP BY Asset_Category") or die ("Error => ".mysqli_error($con));

		$num = 0;
		echo "<div class='row mb-2'>";
		echo "<div class='col-lg-12'>";
		echo "<div class='card'>";
		echo "<div class='card-body'>";
		echo "<h5 class='card-title mb-4' align=\"center\">ตารางแสดงการสรุปยอดสินทรัพย์ทั้งหมด</h5>";
		echo "<div class='table-responsive'>";
		echo "<table class='table table-striped'>";
		echo "<tr align=\"center\">";
		echo "<th>ชื่อสินทรัพย์</th>";
		echo "<th>จำนวนทั้งหมด</th>";
		echo "<th>จำนวนเบิก</th>";
		echo "<th>ซ่อม</th>";
		echo "<th>เสีย</th>";
		echo "<th>เหลือ</th>";
		echo "</tr>";
		
	while(list($Asset_id,$Asset_code ,$Asset_serial ,$Asset_name ,$mac_address,$computer_name
		,$brand,$Asset_date ,$Asset_company ,$Asset_price,$Asset_barcode
		,$Asset_Category ,$Asset_photo ,$Asset_time,$detail,$Asset_status,$active_point) = mysqli_fetch_row($result)){
		//while(list($Category_id ,$Category_name) = mysqli_fetch_row($result)){	
			
			$sql = mysqli_query($con, "SELECT COUNT(Asset_Category) AS total_asset FROM asset WHERE Asset_Category = '".$Asset_Category."'") 
			or die ("Error => ".mysqli_error($con));
			$row=mysqli_num_rows($sql); 
			$rown=mysqli_fetch_array($sql); 
			
			$sql2 = mysqli_query($con, "SELECT COUNT(Asset_status) AS Remaining FROM asset WHERE Asset_status = '04' AND 
			Asset_Category ='".$Asset_Category."'") 
			or die ("Error => ".mysqli_error($con));
			$row2=mysqli_num_rows($sql2); 
			$rown2=mysqli_fetch_array($sql2);
			
			$sql3 = mysqli_query($con, "SELECT COUNT(Asset_status) AS total_rent FROM asset WHERE Asset_status = '01' AND 
			Asset_Category ='".$Asset_Category."'") 
			or die ("Error => ".mysqli_error($con));
			$row3=mysqli_num_rows($sql3); 
			$rown3=mysqli_fetch_array($sql3);
			
			$sql4 = mysqli_query($con, "SELECT COUNT(Asset_status) AS total_repair FROM asset WHERE Asset_status = '02' AND 
			Asset_Category ='".$Asset_Category."'") 
			or die ("Error => ".mysqli_error($con));
			$row4=mysqli_num_rows($sql4); 
			$rown4=mysqli_fetch_array($sql4);
			
			$sql5 = mysqli_query($con, "SELECT COUNT(Asset_status) AS total_waste FROM asset WHERE Asset_status = '03' AND 
			Asset_Category ='".$Asset_Category."'") 
			or die ("Error => ".mysqli_error($con));
			$row5=mysqli_num_rows($sql5); 
			$rown5=mysqli_fetch_array($sql5);
		
		echo "<tr align=\"center\">";
		//echo "<td scope='row'><a href='detail.php?id=$Category_id'>$Category_name</td>";
		//echo "<td>".$rown['total_asset']."</td>";
		//echo "<td>".$rown2['total_rent']."</td>";
		
		echo "<td><a href='detail.php?id=$Asset_Category'>$Asset_name</td>";
		echo "<td>".$rown['total_asset']."</td>";
		echo "<td>".$rown2['Remaining']."</td>";
		echo "<td>".$rown5['total_waste']."</td>";
		echo "<td>".$rown4['total_repair']."</td>";
		echo "<td>".$rown3['total_rent']."</td>";
		
			$num++;
		}
		echo "</table>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		
	?>
        </div>
        <!-- partial -->   
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

  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/misc.js"></script>
</body>
</html>