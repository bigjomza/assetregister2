<?php
    session_start();
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
                    <a class="nav-link" href="../Spare Part/list_spare.php">
                      จัดการวัสดุ-อุปกรณ์
                    </a>
                  </li>
                  <li class="nav-item active">
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


$action = isset($_GET['a']) ? $_GET['a'] : "";
$ItemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
$_SESSION['formid'] = sha1('google.co.th' .microtime());
if(isset($_SESSION['Qty'])){
	$myQty = 0;
	foreach($_SESSION['Qty'] as $myItem){
		if($myItem!=''){
			$myQty =$myQty + $myItem;
		}	
	}
}	else{
		$myQty = 0;
}
if (isset($_SESSION['cart']) and $ItemCount > 0){
	$itemIDs = "";
	foreach($_SESSION['cart'] as $ItemID){
		$itemIDs = $itemIDs . $ItemID . ",";
	}
	$inputItem = trim($itemIDs, ",");
		$inputItem = explode(",", $itemIDs);
		$inputItem = trim($inputItem[0]);
		//echo var_dump($_SESSION['cart'])."<br>".count($_SESSION['cart'])."<hr>";
		$cnt_list = $_SESSION['cart'];
		$sql = "SELECT * FROM spare_part WHERE id = '$inputItem'";
		// $sql = "SELECT * FROM spare_part";
		$myQuery = mysqli_query($con,$sql) or die ("Error =>".mysqli_error($con));
		$myCount = mysqli_num_rows($myQuery);
	}
	else{
		$myCount = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>รายการละเอียดการยืม</title>

    <!-- Bootstrap -->
    <link href="../../CSS/nava.css" rel="stylesheet">
    <link href="../../CSS/bootstrapv3.1.1.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <style>
		#centertable{
			text-align:center;	
	}
	</style>
    <script type="text/javascript">
	function updateSubmit(){
		if(document.formupdate.rent_empID.value == ""){
			alert('โปรดใส่รหัสพนักงาน!');
			document.formupdate.rent_empID.focus();
			return false;
		}
		if(document.formupdate.rent_name.value == ""){
			alert('โปรดใส่ชื่อผู้ยืมด้วย!');
			document.formupdate.rent_name.focus();
			return false;
		}
			if(document.formupdate.rent_phone.value == ""){
			alert('โปรดใส่เบอร์โทรด้วย!');
			document.formupdate.rent_phone.focus();
			return false;
		}
		document.formupdate.submit();
		return false;
	}
</script>
      <style>
#ccc {
    list-style-type: none;
	border-radius: 8px;
    margin: 0;
    padding: 3;
	font-family:"TH Sarabun New", "Tw Cen MT";
    font-size:20px;
    overflow: hidden;
    background-color: #4F4F4F;
}

#xx {
    float: left;
}

#xx a {
    display: block;
    color: white;
    text-align: center;
    padding: 12px 16px;
    text-decoration: none;
}

#xx a:hover {
    background-color: #111;
}
</style>
</head>
<body>

<ul id="ccc">
  <li id="xx"><a class="active" href="#home">Spare Parts System</a></li>
  <li id="xx"><a href="index_sp.php">หน้าแรกวัสดุ-อุปกรณ์</a></li>
  <li id="xx"><a href="cart.php">รายการวัสดุของฉัน &nbsp;
  <?php echo "<span class=\"badge badge-info\">$myQty</span>"; ?></a></li>
</ul>
       
    <?php
	if($action == 'removed'){
		echo "<div class=\"alert alert-warning\">ลบสินค้าเรียบร้อยแล้ว</";
	}
	if($myCount == 0){
		echo "<div class=\"alert alert-warning\">ยังไม่มีรายการวัสดุ";
	}else
	{	?>
    
    	<form action="updateSp_rent.php" method="post" name="formupdate" role="form" id="formupdate" onSubmit="JavaScript:return updateSubmit();">
        	<div class="form-group">
            <br>
            <table border="0" class"table" width="60%">
            <tr>
            <td><div class="form-group">
            <label for="exampleInputempID">รหัสพนักงาน</label>
            <input type="text" class="form-control" id="rent_empID" placeholder="ใส่รหัสพนักงาน" style="width:300px;" name="rent_empID">
            <?php //include("../../api.php") ?>
            </div></td>
        	
           <td><div class="form-group">
            <label for="exampleInputPhone">เบอร์โทรศัพท์</label>
            <input type="text" class="form-control" id="rent_phone" placeholder="ใส่เบอร์ติดต่อ" style="width:300px;" name="rent_phone">
            </div> </td>
            </tr>
            <tr>
           <td><div class="form-group"><label for="exampleInputFullname">ชื่อพนักงาน</label>
            <input type="text" class="form-control" id="rent_name" placeholder="ใส่ชื่อพนักงาน" style="width:300px;" name="rent_name">
            </div> </td>
          <td>  <div class="form-group" >
            <label for="exampleInputrent_department" >แผนก</label>
            <select class="form-control"  id="rent_department" style="width:300px;" name="rent_department">
   					   <option value="หอพักนพดล">หอพักนพดล</option>
                       <option value="สำนักงานใหญ่">สำนักงานใหญ่</option>
                       <option value="ฝ่ายพัฒนาธุรกิจ">ฝ่ายพัฒนาธุรกิจ</option>
                       <option value="Business Extension">Business Extension</option>
                       <option value="Information Technology">Information Technology</option>
                       <option value="การตลาด">การตลาด</option>
                       <option value="พัฒนาระบบปฏิบัติงาน">พัฒนาระบบปฏิบัติงาน</option>
                       <option value="ฝ่ายการเงิน">ฝ่ายการเงิน</option>
                       <option value="บัญชี">บัญชี</option>
                       <option value="สินเชื่อ">สินเชื่อ</option>
                       <option value="แคชเชียร์-การเงิน">แคชเชียร์-การเงิน</option>
                       <option value="Admin">Admin</option>
                       <option value="Human Resource">Human Resource</option>
                       <option value="ป้องกันความสูญเสีย">ป้องกันความสูญเสีย</option>
                       <option value="ฝ่ายกระจายสินค้า">ฝ่ายกระจายสินค้า</option>
                       <option value="แผนกจัดส่ง">แผนกจัดส่ง</option>
                       <option value="รถเทเลอร์ ขนส่งขาเข้า">รถเทเลอร์ ขนส่งขาเข้า</option>
                       <option value="ฝ่ายบริหารสินค้า">ฝ่ายบริหารสินค้า</option>
                       <option value="CAT1">CAT1</option>
                       <option value="CAT2">CAT2</option>
                       <option value="CAT3">CAT3</option>
                       <option value="CAT4">CAT4</option>
                       <option value="CAT5">CAT5</option>
                       <option value="CAT6">CAT6</option>
                       <option value="ฝ่ายบริหาร">ฝ่ายบริหาร</option>
                       <option value="ฝ่ายค้าปลีก">ฝ่ายค้าปลีก</option>
                        <option value="ค้าปลีกสาขา 1">ค้าปลีกสาขา 1</option>
  					   <option value="Sale Division A">Sale Division A</option>
  					   <option value="Section A1">Section A1</option>
                       <option value="Section A2">Section A2</option>
                       <option value="Section A3">Section A3</option>
                       <option value="Section A4">Section A4</option>
                       <option value="Warehouse ">Warehouse </option>
                       <option value="Sale Division B ">Sale Division B </option>
                       <option value="Section B1">Section B1</option>
                       <option value="Section B2">Section B2</option>
                       <option value="Section B3">Section B3</option>
                       <option value="Support Division">Support Division</option>
                       <option value="Good Receiving">Good Receiving</option>
                       <option value="House Keeping">House Keeping</option>
                       <option value="Inventory control coordinator">Inventory control coordinator</option>
                       <option value="Loss Prevention">Loss Prevention</option>
                       <option value="ค้าปลีกสาขา 1 -Service Division">ค้าปลีกสาขา 1 -Service Division</option>
                       <option value="Customer Relation">Customer Relation</option>
                       <option value="Customer Service">Customer Service</option>
                       <option value="Installer">Installer</option>
                       <option value="Service Admin">Service Admin</option>
                       <option value="ค้าปลีกสาขา 2">ค้าปลีกสาขา 2</option>
                       <option value="Sale Division A">Sale Division A</option>
                       <option value="Section A1">Section A1</option>
                       <option value="Section A2">Section A2</option>
                       <option value="Warehouse ">Warehouse </option>
                       <option value="Expertpaint">Expertpaint</option>
                       <option value="ค้าส่งและขายโครงการ">ค้าส่งและขายโครงการ</option>	
          </select> </div></td></tr>
          
             <td><div class="form-group"><label for="exampleInputFullname">วันที่ยืม</label>
            <input type="date" class="form-control" id="lend_data"  style="width:300px;" name="lend_data"  
            readonly value="<?php echo date("Y-m-d"); ?>"
            </div> </td>
            </table>
            <br>
           <table class="table table-striped table-bordered">
	<?php
	if(isset($_SESSION['Qty'])){
		$myQty = 0;
		foreach ($_SESSION['Qty'] as $myItem) {
			if($myItem!=''){
				$myQty =$myQty + $myItem;
			}
  		}
	}
	else{
		$myQty = 0;
	}
	$total_matter = 0; //จำนวนทั้งหมด
	$num = 0; //รับจำนวนที่กรอก
		foreach($cnt_list as $rows) {
			$sql = "SELECT * FROM spare_part WHERE id = '$rows'";
			$myQuery = mysqli_query($con,$sql) or die ("Error =>".mysqli_error($con));
			foreach($myQuery as $item) {
				$key = array_search($item['id'],$_SESSION['cart']);
				$total_matter = $_SESSION['Qty'][$key] ;
				//$total_matter + ($item['stock'] * $_SESSION['Qty'][$key]);
	?>
    <thead>
        <tr>
            <th>รายการ</th>
            <th id="centertable">รหัสสินค้า</th>
            <th id="centertable">ชื่อสินค้า</th>
            <th id="centertable">รุ่น / ยี่ห้อ</th>
            <th id="centertable">ประเภท</th>
            <th id="centertable">จำนวน</th>
            <th id="centertable">จำนวนคงเหลือ</th>
            <th id="centertable">จำนวนที่ยืม</th>
            <th>&nbsp;</th>
            </tr>
	</thead>
    <tbody>
    	<tr align='center'>       
			<td><img src="../../images/<?php echo $item['photo']; ?>" width='80'  height='80'></td>
			<td>	<?php echo $item['id'];?>
            		<input type="hidden" name="articles[]" value="<?php echo $item['id'];?>">
            </td>
			<td>	<?php echo $item['name']; ?>
            		<input type="hidden" name="articles2[]" value="<?php echo $item['name'];?>">
            </td>
			<td>	<?php echo $item['brand']; ?>
            		<input type="hidden" name="articles3[]" value="<?php echo $item['brand'];?>">
            </td>
             <td><?php echo $item['category'] ?>
            	<input type="hidden" name="articles4[]" value="<?php echo $item['category'];?>">
            </td>
			<td> <!---textbox จำนวน--->
				<input type="text" name="Qty[<?php echo $num; ?>]" value="<?php echo $_SESSION['Qty'][$key]; ?>"
				class="form-control" style="width:60px;text-align:center;" readonly>
                <input type="hidden" name="articles5[]" value="<?php echo $_SESSION['Qty'][$key]; ?>">
				<input type="hidden" name="arr_key_<?php echo $num; ?>" value="<?php echo $key; ?>">
			</td>
			<td><?php echo $item['balance']; ?>
            	<input type="hidden" name="stock[]" value="<?php echo $item['balance'];?>">
            </td> <!---โชว์จำนวนต๊อก--->
			<td><?php echo $total_matter; ?>
            	<input type="hidden" name="articles6[]" value="<?php echo $total_matter;?>">
            </td> <!---โชว์จำนวนที่ทำการยืม *ค่ามาจาก Key--->
            <td>
				<a class="btn btn-danger btn-lg" href="removecart.php?ItemID=<?php echo $item['id']; ?>" role="button">
				<span></span>ลบทิ้ง</a>
			</td>
        <?php  
			} 
			$num++;
		}
		
		 ?>
                            <tr>
                            	<td colspan="9" style="text-align:right;">
                                	<input type="hidden" name="formid" value="<?php echo $_SESSION['formid']; ?>"/>
                                    <a href="cart.php" type="button" class="btn btn-danger btn-lg">ย้อนกลับ</a>
                                    <button type="submit" class="btn btn-primary btn-lg">บันทึกการยืมวัสดุ-อุปกรณ์</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                  </form>
                  <?php  
	}    
    		?>
        </div> <!-- /container -->

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