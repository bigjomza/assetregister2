<?php
	session_start();
	include("../../Funtion/funtion.php");
	$con = connect_db();

$result = mysqli_query($con,"SELECT * FROM spare_part") or die ("Error =>".mysqli_error($con));
$action = isset($_GET['a'])? $_GET['a']: "";
$ItemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
// echo var_dump($_SESSION['Qty']);
if(isset($_SESSION['Qty'])){
	$myQty = 0;
	foreach ($_SESSION['Qty'] as $myItem) {
		if($myItem!=''){
			$myQty =$myQty + $myItem;
		}	
  	}
}else{
	$myQty = 0;
}
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="../../CSS/nava.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="CSS/bootstrap.min.css" crossorigin="anonymous">-->
<title>Spare Parts System</title>
<style>
	body{
		font-family:"TH Sarabun New", "Tw Cen MT";
		font-size:22px;
	}
	#sizezi{
		font-size:26px;
		
	}
	#sizezi2{
		font-size:22px;
	}
	#centertable{
		text-align:center;	
	}
	#midter{
		padding-top:50px;
	}
</style>
</head>
<body>
	<div class="container">
	<!-- Static navbar -->
    	<div id="sizezi2">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#" id="sizezi">Spare Parts System</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
  				</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index_spUi.php">หน้าแรกวัสดุ-อุปกรณ์</a>
				</li>
				<li class="nav-item">
					<!--<a class="nav-link" href="New_index2.php?module=9&action=50">รายการวัสดุที่ยืม <span class="badge badge-secondary">-->
                    <a class="nav-link" href="cart.php">รายการวัสดุที่ยืม <span class="badge badge-secondary">
					<?php echo $myQty; ?></span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">เพิ่มรายการวัสดุ</a>
				</li>
			</ul>
            </div>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="sizezi2">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="sizezi2">Search</button>
                </form>
			</div>
		</nav>
	
    <h3 align="center">หน้าแรกของวัสดุ-อุปกรณ์</h3>
    <?php
   if ($action == 'exists') {
     echo "<div class=\"alert alert-warning\">เพิ่มจำนวนวัสดุแล้ว</div>";

   }
   if ($action == 'add') {
     echo "<div class=\"alert alert-success\">เพิ่มรายการวัสดุเรียบร้อยแล้ว</div>";

   }
   if ($action == 'order') {
     echo "<div class=\"alert alert-success\">ทำรายการวัสดุเรียบร้อยแล้ว</div>";
   }
   if ($action == 'orderfail') {
     echo "<div class=\"alert alert-success\">ทำรายการไม่สำเร็จ กรุณาลองใหม่อีกครั้ง</div>";
   }
?>
<?php
?>
    <table class="table table-striped" id="centertable">
      <thead>
        <tr>
            <th id="centertable"></th>
            <th id="centertable">รหัสวัสดุ</th>
            <th id="centertable">ชื่อสินค้า</th>
            <th id="centertable">ประเภท</th>
            <th id="centertable">จำนวนที่เหลือ</th>
            <th> </th>
         <tr>
		</thead>
		<tbody>
		<?php 
		while ($myResult = mysqli_fetch_assoc($result)) {
			/*list($id,$photo,$name,$brand,$price,$category) = mysqli_fetch_row($result);
			$result2 = mysqli_query ($con,"SELECT Category_name FROM category_spare WHERE Category_id = '$category' ") 
			or die("SQL error2  ".mysqli_error(	$con));
			list($category) = mysqli_fetch_row($result2);
			*/
		?>
		<tr>
			<!--<td id="centertable"><img src="img/<?php echo $myResult['photo']; ?>" border="0"></td>-->
            <td id="centertable"><img src="../../img/<?php echo $myResult['photo']; ?>" border="0"></td>
			<td id="midter"><?php echo $myResult['id']; ?>
            	<input type="hidden" name="articles[]" value="<?php echo $item['id'];?>">
            </td>
			<td id="midter"><?php echo $myResult['name']; ?>
            	<input type="hidden" name="articles2[]" value="<?php echo $item['name'];?>">
            </td>
			<td id="midter"><?php echo $myResult['category'] ?> 
            	<input type="hidden" name="articles3[]" value="<?php echo $item['category'];?>">
            </td>
			<td id="midter"><?php echo $myResult['stock']; ?>
            	<input type="hidden" name="articles5[]" value="<?php echo $item['stock'];?>">
            </td>
			<td id="midter">
				<!--<a class="btn btn-primary btn-lg" href="New_index2.php?module=9&action=69&?ItemID=<?php echo $myResult['id']; ?>" role="button">-->
                <a class="btn btn-primary btn-lg" href="updatecart.php?ItemID=<?php echo $myResult['id']; ?>" role="button">
				<span></span>เลือกรายการ</a>
			</td>
		</tr>
			<?php
		//}
				}
			?>
		</tbody>
		</table>

        </div> <!-- /container -->
    <script src="../../JS/jquery-3.2.1.min.js"></script>
    <script src="../../JS/popper.min.js" ></script>
    <script src="../../JS/bootstrap.min.js" ></script>
</body>
</html>