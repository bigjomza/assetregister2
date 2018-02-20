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
  <title>Star Admin</title>
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
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block" method ="post">
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
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
<body class="bodyfont">
<div class="container">

	<!-- Static navbar -->
    	<div id="sizezi2" style="padding-top:20px; width:98%; padding-left:2%" > 
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand"  id="sizezi">รายการวัสดุ / อุปกรณ์ทั้งหมด</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
  				</button>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
       <button class="btn btn-outline-success my-2 my-sm-0" ><a href="add_spare.php"><img src='../../images/678092-sign-add-128.png'  width='30'  height='30'>เพิ่มรายการ</a></button>&nbsp;&nbsp;&nbsp;
                </form>
                
			</div>
		</nav>
	<?php
	if(empty($_POST['keyword'])){ 
		$keyword="";
	}
	else{
		$keyword=$_POST['keyword'];
	}
	$result1 = mysqli_query($con,"SELECT id FROM spare_part WHERE  name  LIKE '%$keyword%' OR name LIKE '%$keyword%'OR brand LIKE '%$keyword%'OR category =(SELECT Category_id FROM category_spare WHERE Category_name  LIKE '%$keyword%'  ORDER BY id DESC LIMIT 1)")or die(mysqli_error($con));
	
	$row=mysqli_num_rows($result1); //จำนวนแถวที่คิวรี่ออกมาได้
	$rowspage=10;//กำหนดจำนวนแถวที่จะแสดงในแต่ละหน้า
	$page=ceil($row/$rowspage); //จำนวนหน้าทั้งหมด = ปัดเศษขึ้น (จำนวนแถวทั้งหมด /จำนวนแถวใน 1 หน้า)

    if(empty($_GET['page_id'])){//ตรวจสอบว่าตัวแปร $_GET['page_id'] ว่างหรือไม่
		$page_id=1; //กำหนดให้แสดงหน้า 1
	}
	else{
			$page_id=$_GET['page_id'];//รับค่าหมายเลขหน้ามาจากลิ้งค์ด้วยวิธี GET /
	}
	
	 $start_rows=($page_id*$rowspage)-$rowspage; //แถวแรกที่จะแสดงในแต่ละหน้า(หมายเลขหน้า * จำนวนแถวใน 1 หน้า) จำนวนแถวใน 1 หน้า
	
	
	$result2 = mysqli_query($con,"SELECT * FROM spare_part WHERE  id LIKE '%$keyword%' OR category LIKE '%$keyword%'OR brand  LIKE '%$keyword%' OR category =(SELECT Category_id FROM category_spare WHERE Category_name  LIKE '%$keyword%' LIMIT 1) ORDER BY id DESC LIMIT $start_rows,$rowspage")or die("SQL Error2".mysqli_error($con));
	
	$result3 = mysqli_query($con,"SELECT * FROM category_spare")
	or die("SQL Error2".mysqli_error($con));
	$num=1;//กำหนดตัวแปรเพื่อนับแถว

?>

	<table border='0' align='center' width='96%' >
	<tr><td>
	<table border='0' align='center' class='table'  >
	<thead>
    <tr>
	<th>รหัสวัสดุ</th>
	<th>รูปภาพ</th>
	<th>รายการ</th>
	<th>รุ่น / ยี่ห้อ</th>
	<th>ราคาซื้อ</th>
	<th>ประเภท</th>
	<th>จำนวนสินค้าทั้งหมด</th>
    <th>จำนวนจ่าย</th>
	<th>คงเหลือ</th>
	<th>จำนวนรับล่าสุด</th>
	<th>เพิ่มจำนวน</th>
	<th>แก้ไข</th>
	<th>ลบ</th>
	</tr>
	</thead>
	
	<?php
	while(list($id,$photo,$name,$brand,$price,$category,$stock,$acquire,$Pay,$balance,$time) = mysqli_fetch_row($result2)){ 
	
	$sql=mysqli_query($con,"SELECT Category_name FROM category_spare  
	WHERE Category_id='$category' ")or die("SQL error2  ".mysqli_error($con));
    list($category)=mysqli_fetch_row($sql);

	echo "<tr>";
	echo "<td align='center' style='padding-top:3%' >$id</td>";
	echo"<td align='center'><img src='../../images/$photo'  width='60'  height='60' ></td>";
	echo "<td align='center'  style='padding-top:3%' >$name</td>";
	echo "<td align='center'  style='padding-top:3%' >$brand</td>";
	echo "<td align='center'  style='padding-top:3%' >$price</td>";
	echo "<td align='center'  style='padding-top:3%' >$category</td>";
	echo "<td align='center'  style='padding-top:3%' >$stock</td>";
	echo "<td align='center'  style='padding-top:3%' >$Pay</td>";
	echo "<td align='center'  style='padding-top:3%' >$balance</td>";
	echo "<td align='center'  style='padding-top:3%' >$acquire</td>";
	
	echo"<td align='center'  style='padding-top:2%;cursor:pointer;'><img src='../../images/11.png'  width='35'  height='35' onClick=\"Omd('$id', '$name', '$brand', '$price', '$category', '$stock', '$Pay', '$balance', '$acquire')\"></TD>";
	
	echo "<td align='center'  style='padding-top:2%' ><a href='edit_spare.php?id=$id'><img src='../../images/if_pencil_10550.png'  width='35'  height='35'></TD>";
	
	echo "<td align='center'  style='padding-top:2%' ><a href='delete_spare.php?id=$id' onclick='return confirm(\"กดปุ่ม ตกลงเพื่อยืนยันการลบข้อมูล\")'><img src='../../images/cancel.png'  width='35'  height='35'></TD>";
	echo "</tr>"; 
	$num++;//เพิ่มค่าตัวแปรนับแถว
	
	}
	echo"</table>";
	echo"</form>";
	
//วนลูปแสดงลิงค์หมายเลขหน้า ตามจำนวนหน้า
	echo"หน้า $page_id : จาก $page ";


	$go=$page_id+1;
	$back=$page_id-1;
 	if($page_id>1){//ถ้า$page มากกว่า 1 ให้แสดงหน้าก่อนหน้า
		echo "<span><a href='list_spare.php?page_id=$back&keyword=$keyword'>ก่อนหน้า...</a></span>";
		}
		 for($id=1;$id<=$page;$id++){

 	 if($id==$page_id){  //ถ้าเป็นหน้าปัจจุบัน ให้แสดงเลขหน้าเป็นตัวหนาสีแดงและไม่มีลิ้งค์
     echo"<span style='font-weight:bold;color:red;'>[ $id ]</span>";
  }
  else{//ถ้าไม่ใช่หน้าปัจจุบันให้แสดงลิ้งค์ปกติ
  echo"<span style='color:back;'><a href='list_spare.php?page_id=$id&keyword=$keyword'>[ $id ]</a></span> ";
      }
}

		if($page!=$page_id){//ถ้า$page ไม่เท่ากับ $page_id ให้แสดงหน้าถัดไป
			    echo "<span><a href='list_spare.php?page_id=$go&keyword=$keyword'>...หน้าถัดไป</a></span>";
			  }
	
?>
</div>
<div class="modal" tabindex="-1" role="dialog" id="id">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <div class="form-group">          
             <form action="update_numspare.php" method="post" enctype="multipart/form-data">
           
           <P>รหัสวัสดุ : <input type="text" class="form-control" name="item_id" id="item_id" readonly ></P>
            <P>รายการ : <input type="text" class="form-control" name="name" id="name" readonly ></P>

            <label for="recipient-name" class="control-label">
            
            <label for="recipient-name" class="control-label">รุ่น/ยี่ห้อ :
            <input type="text" class="form-control" name="brand" id="brand" readonly></label>
            
            <label for="recipient-name" class="control-label">ประเภท :
            <input type="select" class="form-control" name="category" id="category" readonly>
           </label>
       
            <label for="recipient-name" class="control-label">ราคา :
            <input type="text" class="form-control" id="price" name="price" readonly ></label>
            <label for="recipient-name" class="control-label">จำนวนที่มีอยู่ :
            <input type="text" class="form-control" id="stock" name="stock" readonly ></label><p><hr>
            
             <label for="recipient-name" class="control-label">วันที่เพิ่มจำนวน :</label>
            <input type="date" class="form-control" name="time" readonly  value="<?php echo date("Y-m-d") ?>" > </label>
            <input type="hidden" name="pay" id="Pay">
                       
            <label for="recipient-name" class="control-label">จำนวนที่รับเข้า :</label>
            <input type="text" class="form-control" name="acquire"></label>
           
          </div>
      </div>
      <div class="modal-footer">
      <input type="submit" value="เพิ่มจำนวน" class="btn btn-success"  >
      <button type="reset" class="btn btn-danger" data-dismiss="modal" >ยกเลิก</button>  
        </form>
      </div>
    </div>
  </div>
</div>

    
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
	<script type="text/javascript">
	function Omd(id, name, brand, price, category, stock, balance, acquire,time,Pay){
		 $("#id").modal('show');
		 
		  document.getElementById("item_id").value = id;
		  document.getElementById("name").value = name;
		  document.getElementById("brand").value = brand;
		  document.getElementById("category").value = category;
		  document.getElementById("price").value = price;
		  document.getElementById("stock").value = stock; 
		  document.getElementById("time").value = time;
		  document.getElementById("Pay").value = Pay;
	}
</script>
        
      </div>
    </div>
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