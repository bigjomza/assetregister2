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
            <a class="nav-link" href="##"><i class="fa fa-th"></i></a>
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
	if(empty($_POST['keyword'])){
		$keyword="";
	}
	else{
		$keyword=$_POST['keyword'];
	}
	$result = mysqli_query($con, "SELECT * FROM asset WHERE Asset_log = 1 and (asset_id LIKE '%$keyword%' or
		Asset_name LIKE '%$keyword%' OR Asset_code LIKE '%$keyword%' OR brand LIKE '%$keyword%'
		OR Asset_Category LIKE '%$keyword%' OR Asset_serial) ORDER BY Asset_time ASC")
	or die ("MySQL =>".mysqli_error($con));
	
	$rows = mysqli_num_rows($result); //จำนวนแถวที่คิวรี่ออกมาได้
	if($rows==0){ // ถ้านับจำนวนแถวที่คิวรี่ออกมาได้เท่ากับ 0 แสดงว่าไม่มีข้อมูลที่ตรงกับคำค้นหา
		echo"<p id='middlecenter'>ไม่พบข้อมูลที่ตรงกับคำค้น\"<b>$keyword</b>\"</p><hr>";
	}
	/*else{
		echo"<p id='middlecenter'>จำนวนสินทรัพย์ที่ตรงกับคำว่า \"<b>$keyword</b>\"
			ทั้งหมด $rows รายการ </p>";*/
	$num=1; //กำหนดตัวแปรเพื่อนับแถว
		echo "<div class='row mb-2'>";
		echo "<div class='col-lg-12'>";
		echo "<div class='card'>";
		echo "<div class='card-body'>";
		echo "<h5 class='card-title mb-4'>ตารางแสดงสินทรัพย์ทั้งหมด</h5>";
		echo "<div class='table-responsive'>";
		echo "<table class='table table-striped'>";
		//echo "<thead>";
		echo "<tr>";
		echo "<th>#</th>";
		echo "<th>หมายเลขทะเบียน</th>";
		echo "<th>Serial Number</th>";
		echo "<th>สินทรัพย์</th>";
		echo "<th>ยี่ห้อ</th>";
		echo "<th>แก้ไข</th>";
		echo "<th>ลบ</th>";
		echo "<th>สถานะ</th>";
		echo "</tr>";
		//echo "</thead>";
	
	while(list($Asset_id,$Asset_code ,$Asset_serial ,$Asset_name ,$mac_address,$computer_name
		,$brand,$Asset_date ,$Asset_company ,$Asset_price,$Asset_barcode
		,$Asset_Category ,$Asset_photo ,$Asset_time,$detail,$Asset_status) = mysqli_fetch_row($result)){
			
		$result2 = mysqli_query($con ,"SELECT Status_name FROM status WHERE Status_id = '$Asset_status' ")
		or die("SQL Error2=>".mysqli_error($con)) ;
		list($Status_name) = mysqli_fetch_row($result2); 
		
		//echo "<tbody>";
		echo "<tr class=''>";
		echo "<td scope='row'>$Asset_id</td>";
		echo "<td>$Asset_code</td>";
		echo "<td>$Asset_serial</td>";
		echo "<td><a href='asset_detail.php?id=$Asset_id' title='รายละเอียด!'>$Asset_name</td>";
		echo "<td>$brand</td>";
		echo "<td><a href='Form_edit.php?Asset_id=$Asset_id' onclick='return confirm(\"กดปุ่ม ตกลงเพื่อยืนยันการแก้ไขข้อมูล\")'>
		<img src='../../images/if_brush-pencil.png'  width='30'  height='30'></td>";
		echo "<td><a href='Delect_asset.php?Asset_id=$Asset_id' onclick='return confirm(\"กดปุ่ม ตกลงเพื่อยืนยันการลบข้อมูล\")'>
		<img src='../../images/cancel.png'  width='30'  height='30'></td>";
		echo "<td><img src='../../images/$Asset_status.png' style='width:35px;height:35px;' title='$Status_name!'></td>";
		echo "</tr>";
		//echo "</tbody>";
		$num++;//เพิ่มค่าตัวแปรนับแถว
		}
		echo "</table>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		
		/*echo "<nav aria-label='...'>";
		echo "<ul class='pagination'>";
		echo "<li class='page-item disabled'>";
		echo "<a class='page-link' href='#' tabindex='-1'>Previous</a>";
		echo "</li>";
		echo "<li class='page-item'><a class='page-link' href='#'>1</a></li>";
		echo "<li class='page-item active'>";
		echo "<a class='page-link' href='#'>2 <span class='sr-only'>(current)</span></a>";
		echo "</li>";
		echo "<li class='page-item'><a class='page-link' href='#'>3</a></li>";
		echo "<li class='page-item'>";
		echo "<a class='page-link' href='#'>Next</a>";
		echo "</li>";
		echo "</ul>";
		echo "</nav>";*/
		echo "</div>";
	//}
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
