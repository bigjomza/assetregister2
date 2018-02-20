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
  <link rel="shortcut icon" type="image/x-icon" href="../../images/icons/285690.ico" />
  <link rel="stylesheet" href="../../node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="../../css/style.css" />
  <link rel="shortcut icon" href="../../images/favicon.png" />
<!--  <link rel="stylesheet" href="../../css/bootstrap.min.css" crossorigin="anonymous">-->
<style>
	#centertable{
		text-align:center;	
	}
	#midter{
		padding-top:50px;
	}
	
	navbar{
	padding-botton:20px;
	}
	
</style>

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
                    <a class="nav-link" href="list_spare.php"  title="จัดการวัสดุ-อุปกรณ์">
                     <img src="../../images/icons/slice30-20.png" alt="">
                     <span class="menu-title">จัดการวัสดุ-อุปกรณ์</span>
                     </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="index_sp.php">
                     <img src="../../images/icons/cart_full.png" alt="">
                      <span class="menu-title">จัดทำรายการเบิก</span>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="take.php">
                    <img src="../../images/icons/download_5-24.png" alt="">
                    <span class="menu-title"> รายการรับเข้า</span>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="lend.php">
                    <img src="../../images/icons/credit-card.png" alt="">
                       <span class="menu-title">รายการเบิก</span>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="render.php">
                    <img src="../../images/icons/back-arrow.png" alt="">
                      <span class="menu-title">รับคืนวัสดุ-อุปกรณ์</span>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="send.php">
                    <img src="../../images/icons/clipboard (1).png" alt="">
                      <span class="menu-title">ประวัติรับคืนวัสดุ </span>
                    </a>
                  </li>
                  
                  
                    <li class="nav-item">
                    <a class="nav-link" href="report_spart1.php">
                    <img src="../../images/icons/analytics.png" alt="">
                      <span class="menu-title">รายงานยอดคงเหลือ</span>
                    </a>
                       </li>
                     
                     <li class="nav-item">
                    <a class="nav-link" href="report_take1.php">
                    <img src="../../images/icons/analytics.png" alt="">
                      <span class="menu-title">รายงานรับเข้าวัสดุ</span>
                    </a>
                       </li>
                       <li class="nav-item">
                    <a class="nav-link" href="report_lend1.php">
                    <img src="../../images/icons/analytics.png" alt="">
                      <span class="menu-title">รายงานการเบิก</span>
                    </a>
                       </li>
                        <li class="nav-item">
                    <a class="nav-link" href="report_send1.php">
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
	
	if(empty($_POST['keyword'])){ //ถ้าไม่มีการส่งค่าค้นหามาจากไฟล์
		$keyword="";//กำหนดให้ตัวแปร $keyword ว่าง
	}
	else{
		$keyword=$_POST['keyword'];//รับค่าคำค้นมาจากฟอร์ม
	}
	
	$result=mysqli_query($con,"SELECT No FROM lend_empsp WHERE rent_name LIKE '%$keyword%' OR rent_empID LIKE '%$keyword%' OR rent_department") or die("SQL Error1=>".mysqli_error($con));
	
	$row=mysqli_num_rows($result); 
	$rowspage=15;
	$page=ceil($row/$rowspage);
	
	 if(empty($_GET['page_id'])){
		$page_id=1; 
	}
	else{
			$page_id=$_GET['page_id'];
	}
	
	 $start_rows=($page_id*$rowspage)-$rowspage; 
	 
	  $result2= mysqli_query($con,"SELECT*FROM lend_empsp WHERE rent_name   LIKE '%$keyword%' OR rent_empID LIKE '%$keyword%' OR rent_department  ORDER BY No DESC LIMIT $start_rows,$rowspage")or die("SQL Error2".mysqli_error($con));

	$num=1;//กำหนดตัวแปรเพื่อนับแถว
	
	echo "<table border='0' align='center' width='90%' >";
	echo "<tr>";
	echo "<td>";
	echo "<table border='0' align='center' class='table table-striped' >";
	echo "<thead>";
	echo "<tr>";
	echo "<th>เลขที่ใบเบิก</th>";
	echo "<th>วันที่เบิก</th>";
	echo "<th>รหัสพนักงาน</th>";
	echo "<th>ชื่อผู้เบิก</th>";
	echo "<th>แผนก</th>";
	echo "<th>เบอร์โทร</th>";
	echo "<th>เลืกรายการรับคืน</th>";
	echo "</tr>";
	echo "</thead>";

	while(list($No,$rent_empID,$rent_name,$rent_phone,$rent_date,$lend_status,$rent_department) = mysqli_fetch_row($result2)){ 
	
	
	echo "<tr>";
	echo "<td align='left' width='10%'>$No</td>";
	echo "<td align='left'>$rent_date</td>";
	echo "<td align='left'>$rent_empID</td>";
	echo "<td align='left'>$rent_name</td>";
	echo "<td align='left'>$rent_department</td>";
	echo "<td align='left'>$rent_phone</td>";
	echo "<td align='left'><a href='render_list.php?id=$No'><button type='button' class='btn btn-success'><img src='../../images/Select.png'  width='27'  height='27'>เลือก</button></a></TD></tr>";
	
    $num++;
	}
	echo"</table>";
	echo "</td>";
	echo "</tr>";
	echo"</table>";
    echo"<hr>";

	echo"หน้า $page_id : จาก $page ";

	$go=$page_id+1;
	$back=$page_id-1;
	
 	if($page_id>1){
		echo "<span><a href='render.php?page_id=$back&keyword=$keyword'>ก่อนหน้า...</a></span>";
		}
		 for($id=1;$id<=$page;$id++){

 	 if($id==$page_id){  
     echo"<span style='font-weight:bold;color:red;'>[ $id ]</span>";
  }
  else{
  echo"<span style='color:back;'><a href='render.php?page_id=$id&keyword=$keyword'>[ $id ]</a></span> ";
      }
}

		if($page!=$page_id){
			    echo "<span><a href='render.php?page_id=$go&keyword=$keyword'>...หน้าถัดไป</a></span>";
			  }

	
	mysqli_free_result($result);
 	mysqli_free_result($result2);
	mysqli_close($con); 

?>
        </div>
        <!-- partial -->
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
<script>
	function openModal(Asset_id, Asset_code ,Rent_time){
		$('#id01').modal('show');
		document.getElementById('id_asset').value = Asset_id;
		document.getElementById('Rent_assets').value = Asset_code;
		document.getElementById('Rent_time').value = Rent_time;
		//document.getElementsByName('Rent_assets')[0].value = asset_code;
}
</script>
	<script src="../../js/jquery.min.js"></script>
    <script src="../../JS/bootstrap.min.js"></script>   
	<script src="../../node_modules/jquery/dist/jquery.min.js"></script>
	<script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
	<script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="../../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
	<script src="../../js/off-canvas.js"></script>
	<script src="../../js/hoverable-collapse.js"></script>
	<script src="../../js/misc.js"></script>
</body>
</html>