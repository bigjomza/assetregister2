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
             <li class="nav-item active">
              <a class="nav-link" href="list_status.php" title="จัดการสินทรัพย์">
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
	if(empty($_POST['keyword'])){ //ถ้าไม่มีการส่งค่าค้นหามาจากไฟล์
		$keyword="";//กำหนดให้ตัวแปร $keyword ว่าง
	}
	else{
		$keyword=$_POST['keyword'];//รับค่าคำค้นมาจากฟอร์ม
	}
	$result = mysqli_query($con, "SELECT * FROM asset WHERE Asset_name  LIKE '%$keyword%'
		OR Asset_code LIKE '%$keyword%'OR brand LIKE '%$keyword%' OR Asset_serial LIKE '%$keyword%'
		OR asset_id LIKE '%$keyword%' OR active_point LIKE '%$keyword%'  ORDER BY Asset_id ASC")
	or die ("MySQL =>".mysqli_error($con));

	$rows = mysqli_num_rows($result); //จำนวนแถวที่คิวรี่ออกมาได้
	$rowpage = 5; //กำหนดจำนวนแถวที่จะแสดงในแต่ละหน้า
	$page = ceil($rows/$rowpage); //จำนวนหน้าทั้งหมดปัดเศษขึ้น (หมายเลขหน้า -1)* จำนวนแถวใน 1 หน้า
	if(empty($_GET['page_id'])){ //ตรวจสอบว่าตัวแปร $_GET['page_id'] ว่างหรือไม่
		$page_id = 1;		//กำหนดให้แสดงหน้า 1
	}
	else{
		$page_id = $_GET['page_id'];	//รับค่าหมายเลขหน้ามาจากลิ้งค์ ด้วยวิธี GET
	}
	
	$Star_row = ($page_id * $rowpage) - $rowpage;
	$result2 = mysqli_query($con, "SELECT Asset_id, Asset_code, Asset_serial ,Asset_name ,mac_address ,computer_name
		,brand ,Asset_date ,Asset_company ,Asset_price,Asset_barcode
		,Asset_Category ,Asset_photo ,Asset_time ,detail ,Asset_status ,active_point FROM asset WHERE Asset_name  LIKE '%$keyword%'
		OR Asset_code LIKE '%$keyword%'OR brand LIKE '%$keyword%' OR Asset_serial LIKE '%$keyword%'
		OR asset_id LIKE '%$keyword%' OR active_point LIKE '%$keyword%' LIMIT $Star_row , $rowpage")
	or die ("MySQL =>".mysqli_error($con));
	$num = 1;//กำหนดตัวแปรเพื่อนับแถว
	echo "<div class='row mb-2'>";
	echo "<div class='col-lg-12'>";
	echo "<div class='card'>";
	echo "<div class='card-body'>";
	echo "<h5 class='card-title mb-4'>ตารางแสดงสินทรัพย์ทั้งหมด</h5>";
	echo "<div class='table-responsive'>";	
	echo "<table align='center' class='table table-hover table-striped'>";
	echo "<th id='titletable'>รหัสสินทรัพย์</th>";
	echo "<th id='titletable'>หมายเลขทะเบียน</th>";
	echo "<th id='titletable'>Serial Number</th>";
	echo "<th id='titletable'>ชื่อสินทรัพย์</th>";
	echo "<th id='titletable'>รุ่น / ยี่ห้อ</th>";
	echo "<th id='titletable'>สถานะการใช้งาน</th>";
	echo "<th id='titletable'>จุดใช้งาน[ล่าสุด]</th>";
	echo "<th id='titletable'>เบิกสินทรัพย์</th>";
	
	while(list($Asset_id,$Asset_code ,$Asset_serial ,$Asset_name ,$mac_address,$computer_name
		,$brand,$Asset_date ,$Asset_company ,$Asset_price,$Asset_barcode
		,$Asset_Category ,$Asset_photo ,$Asset_time,$detail,$Asset_status,$active_point) = mysqli_fetch_row($result)){
	for($i=1;$i<=1;$i++)
	$result1 = mysqli_query($con,"SELECT Active_name FROM active_point WHERE Active_id = '$active_point' ")
	or die("SQL error2  ".mysqli_error($con));
    list($active_point) = mysqli_fetch_row($result1);

	$result2 = mysqli_query($con,"SELECT Status_id,Status_name FROM status")
	or die ("mysql error=>>".mysql_error($con));
	$Rent_time = date("d-M-Y"); 
		echo "<tr>";
		echo "<td align='center' id='titletable3'>$Asset_id</td>";
		echo "<td align='center' id='titletable3'>$Asset_code</td>";
		echo "<td align='center' id='titletable3'>$Asset_serial</td>";
		echo "<td align='center' id='titletable3'><a href='../Asset/asset_detail.php?id=$Asset_id'>$Asset_name</a></td>";
		echo "<td align='center' id='titletable3'>$brand</td>";
		/*----------------------------^------------------------------------*/
		echo "<td align='center' id='titletable3'>";
		echo "<form action=\"update_status.php\">";
		echo "<input type='hidden' name='Asset_id' value= '$Asset_id'> ";
		//echo "<input type='hidden' name='module' value= '6'> "; 
		//echo "<input type='hidden' name='action' value= '20'> ";
		echo "<select name='Asset_status' id='titletable2' class='custom-select-sm'>";
		while(list($Status_id,$Status_name)=mysqli_fetch_row($result2)){
			if($Status_id == $Asset_status){
				$select = "selected='selected=selected'";
			}
			else{
				$select = "";
			}
			echo "<option value='$Status_id'$select>$Status_name</option>";
		} //ปิด While Status_id
		echo "</select>&nbsp;&nbsp;";
		switch($Asset_status){
			case "04" : echo "<button type='submit' name='update' id='' value='บันทึก' 
			class='btn btn-primary btn-sm' disabled>บันทึก</button></form>"; break;
			default : echo "<button type='submit' name='update' id='' value='บันทึก' class='btn btn-primary btn-sm'>บันทึก
			</button></form>"; break;
		} //ปิด Switch
		echo "</td>";
		/*----------------------------v------------------------------------*/
		echo "<td align='center' id='titletable'>$active_point</td>";
		/*----------------------------^------------------------------------*/
		echo "<form action=\"index.php\" method='post'>";
		echo "<td align='center'>";
		switch($Asset_status){
			case "01" : echo "<img src='../../images/box.png' width='40' height='40'onClick=\"openModal('".$Asset_id."', '".$Asset_code."','".$Rent_time."')\" 
				title='ทำรายการเบิก'>"; break;
			case "02" : echo "<img src='../../images/02.png' width='40' height='40' title='สินทรัพย์เสีย'>"; break;
			case "03" : echo "<img src='../../images/03.png' width='40' height='40' title='รอการซ่อมแซม'>"; break;	
			case "04" : echo "<img src='../../images/04.png' width='40' height='40' title='รายการถูกเบิก'>"; break;	
			default : echo "Error Test $Asset_status"; break;
		} //ปิด Switch
		echo "</td>";
		echo "</form>";
		echo "</tr>";
			echo "</div>";
		echo "</div>";
		$num++;//เพิ่มค่าตัวแปรนับแถว
	} //ปิด fetch row 
	echo"</table>";
	echo "</div>";
	//วนลูปแสดงลิ้งค์หมายเลขหน้า ตามจำนวนหน้า
	echo "หน้า $page_id จากทั้งหมด $page ";
	for($id = 1 ;$id <= $page; $id++){
		//ถ้าเป็นหน้าปัจจุบัน ให้เป๋นตัวหนา สีแดง และไม่มีลิ้งค์
		if($id == $page_id){
			echo "<span style='font-weight: bold;color:green; border: solid 1px #444;background-color:Yellow;padding:5px; margin-right:5 px;'>[$id]</span>";
		}
		else{ //ถ้าไม่ใช่หน้าปัจจุบัน แสดงลิ้งค์ปกติ
		echo "<span style='font-weight: bold;color:red; border: soile 1px #444; padding: 5px;margin-right 5px;background-color:pink'>
		<A Href ='list_status.php?page_id=$id&keyword=$keyword'>[$id]</A></span>";
		}
	} //ปิด For
	if($page_id < $page){
		$Next = $page_id +1;
		echo "<span style='border: soile 1px #4444; padding: 5px;margin-right 5px;'>
		<a href='list_status.php?page_id=$Next'&$keyword'>หน้าถัดไป</a></span>";
	}
	else{
		$back =$page_id -1;
		echo "<span style='border: soile 1px #4444; padding: 5px;margin-right 5px;'>
		<a href='list_status.php?page_id=$back'&$keyword>ย้อนกลับ</a></span>";
	}
	
	
	//}
	//echo "<input type='submit' name='Submi' value=' PRINT ' onClick=\"javascript:this.style.display='none';window.print()\">";
?>
</div>
<div class="modal" tabindex="-1" role="dialog" id="id01">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <form class="modal-content animate" action="../Rent/Add_rent.php" method="post" name="FormRent" >
        	<center><div style="width: 128px; height:128px; text-align:center;">
             	<img src="../../images/packing.png" style="width: 100%;">
             </div></center>
             <input type="hidden" name="Rent_id" >
             <div align="center">
				<P>No : <input type="text" name="id_asset" id="id_asset" readonly ></P>
				<P>รหัสสินทรัพย์ : <input type="text" name="Rent_asset" id="Rent_assets" readonly></P>
				<P>รหัสพนักงาน <img src="../../images/if_asterisk.png" title="สำคัญ!" height="16px"> : <input type="text" name="Rent_emp" required></P>
				<P>จุดใช้งาน : <select name="Rent_active">
                            <?php 
                                  $result=mysqli_query($con,"SELECT Active_id,Active_name FROM active_point") 
									  or die ("mysql error=>>".mysql_error($con));
									  while(list( $Active_id,$Active_name)=mysqli_fetch_row($result)){
										  $select = $Active_id == $Active_name? "selected":"";
									  echo "<option value=$Active_id>$Active_name</option>";  
									  }
									  
									  mysqli_free_result($result);
									  mysqli_close($con);
                                ?>
                    </P></select>
				<P>วันที่ยืม : <input type="date" name="Rent_time" id="Rent_time"></P>
				<P>*หมายเหตุ : <textarea name="Rent_ect" ></textarea></P>
				</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal" style="size:100%;">Close</button>
			<button type="submit" class="btn btn-primary btn-lg">Save changes</button>
            
		</div>
        </form>
      </div>
    </div>
  </div>
</div>
</div> 
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