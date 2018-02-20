<?php
	include("../../Funtion/funtion.php");//include ไฟล์ที่เขียนฟังก์ชั่นไว้ใช้งาน
	$con=connect_db(); //เลือกใช้คำสั่งในการติดต่อฐานข้อมูล
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Star Admin</title>
	<link rel="stylesheet" href="../../node_modules/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="../../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
	<link rel="stylesheet" href="../../css/style.css" />
	<link rel="shortcut icon" href="../../images/favicon.png" />
	<link href="../../css/smart-forms.css" rel="stylesheet" type="text/css">
	<link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../../CSS/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../css/bootstrap-theme.min.css" crossorigin="anonymous">
    <!--<style type="text/css">
		@font-face { font-family: 'FontAwesome'; src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/fontawesome-webfontba72.eot?#iefix') 
		 format('embedded-opentype'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/fontawesome-webfontba72.woff') 
		 format('woff'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/fontawesome-webfontba72.ttf') 
		 format('truetype'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/fontawesome-webfontba72.svg#FontAwesome') 
		 format('svg'); 
		 font-weight: 
		 normal; 
		 font-style: normal; 
		 }
	 </style>-->
</head>

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
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
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
            <p class="name">Sittichai Wongfun</p>
            <p class="designation">Admin Manager</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
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
              <a class="nav-link" href="#">
                <img src="../../images/icons/10.png" alt="">
                <span class="menu-title">Settings</span>
              </a>
            </li>
          </ul>
        </nav>

        <!-- partial -->
        <div class="content-wrapper">
        <div class="container"> 
    	<div class="smart-wrap">
    	<div class="smart-forms smart-container wrap-2">
    	<div class="form-header header-primary"><h4>
    	<i class="fa fa-pencil-square"></i>Register Form</h4></div><!-- end .form-header section -->
                   
<form method="post" id="new_post" name="new_post"  action="../samples/index.php?module=2&action=7" class="wpcf7-form" 
enctype="mu ltipart/form-data">     	
			<div class="form-body">
					<div class="spacer-b30">
					<div class="tagline"><span>Add Asset</span></div><!-- .tagline -->
                        </div>
					<div class="frm-row"><!-- Start .frm-row section --> 
                        <div class="section colm colm6">
						<label for="Barcode" class="field prepend-icon">Barcode
							<input type="text" name="Asset_barcode" id="Barcode" class="gui-input" 
                            placeholder="Barcode">
							<label for="Barcode" class="field-icon"></label>  
						</label>
                        </div><!-- end section -->                     
					<div class="section colm colm6">
                            <label for="Asset_code" class="field prepend-icon">เลขทะเบียนสินทรัพย์
                            <img src="../../images/if_asterisk.png" style="width:14px;height:14px;" title="สำคัญ!" 
                            data-target=".bs-example-modal-sm">
                                <input type="text" name="Asset_code" id="Asset_code" class="gui-input" 
                                placeholder="เลขทะเบียนสินทรัพย์" required>
                                <label for="Asset_code" class="field-icon"></label>  
                            </label>
                        </div><!-- end section -->
                        <div class="section colm colm6">
                            <label for="Serial Number" class="field prepend-icon">Serial Number
                            <img src="../../images/if_asterisk.png" style="width:14px;height:14px;" title="สำคัญ!" 
                            data-target=".bs-example-modal-sm">
                                <input type="text" name="Asset_serial" id="Serial Number" class="gui-input" 
                                placeholder="Serial Number" required>
                                <label for="Serial Number" class="field-icon"></label>  
                            </label>
						</div><!-- end section -->
                        </div><!-- end .frm-row section -->   
                        <div class="section colm colm6">
                            <label for="Asset name" class="field prepend-icon">ชื่อสินทรัพย์
                            <img src="../../images/if_asterisk.png" style="width:14px;height:14px;" title="สำคัญ!" 
                            data-target=".bs-example-modal-sm">
                                <input type="text" name="Asset_name" id="Asset name" class="gui-input" placeholder="ชื่อสินทรัพย์" required>
                                <label for="Asset name" class="field-icon"></label>  
                            </label>
						</div><!-- end section 1-->
                        
                        <div class="frm-row"><!-- Start .frm-row section -->
                        <div class="section colm colm6">
                            <label for="mac_address" class="field prepend-icon">Mac Address
                                <input type="text" name="mac_address" id="mac_address" class="gui-input" placeholder="Mac Address">
                                <label for="mac_address" class="field-icon"></label>  
                            </label>
						</div><!-- end section 2-->
                        <div class="section colm colm6">
                            <label for="computer_name" class="field prepend-icon">
                            Computer name
                            <img src="../../images/if_Help_34586.png" style="width:20px;height:20px;" title="เช็ก Com-Name!" 
                            data-toggle="modal" 
                            data-target=".bs-example-modal-sm">
						<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" 
 						aria-labelledby="mySmallModalLabel">
						<div class="modal-dialog modal-sm" role="document">
						<div class="modal-content">
                                 <?php
										function get_browser_name($user_agent)
										{
											if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
											elseif (strpos($user_agent, 'Edge')) return 'Edge';
											elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
											elseif (strpos($user_agent, 'Safari')) return 'Safari';
											elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
											elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';	
											return 'Other';
										}
										//แสดง Browser ที่ใช้ 
										echo "Web Browser ที่ใช้ปัจจุบันคือ ==> ";
										echo  get_browser_name($_SERVER['HTTP_USER_AGENT']);
										echo "<br>";
										//แสดงชื่อคอมพิวเตอร์ที่ใช้
										echo "Computer name ==> ";
										echo gethostbyaddr($_SERVER['REMOTE_ADDR']);								
								?>
                                </div>
                              </div>
                            </div>
                                <input type="text" name="computer_name" id="computer_name" class="gui-input" 
                                placeholder="Computer name">
                                <label for="computer_name" class="field-icon"></label>  
                            </label>
						</div><!-- end section 3-->
                        <div class="section colm colm6">
                            <label for="Brand" class="field prepend-icon">รุ่น
                            <img src="../../images/if_asterisk.png" style="width:14px;height:14px;" title="สำคัญ!" 
                            data-target=".bs-example-modal-sm">
                                <input type="text" name="brand" id="Brand" class="gui-input" placeholder="รุ่น" required>
                                <label for="Brand" class="field-icon"></label>  
                            </label>
						</div><!-- end section 4-->
                        <div class="section colm colm6">
                            <label for="date" class="field prepend-icon">วันที่ซื้อ
                                <input type="date" name="Asset_date" id="date" class="gui-input" 
                                data-format="yyyy-mm-dd" placeholder="Date">
                                <label for="date" class="field-icon"></label>  
                            </label>
						</div><!-- end section 5-->
                        <div class="section colm colm6">
                            <label for="company" class="field prepend-icon">ซื้อมาจาก
                                <input type="text" name="Asset_company" id="company" class="gui-input" placeholder="ซื้อมาจาก?">
                                <label for="company" class="field-icon"></label>  
                            </label>
						</div><!-- end section 6-->
                        <div class="section colm colm6">
                            <label for="Price" class="field prepend-icon">ราคา
                                <input type="text" name="Asset_price" id="Price" class="gui-input" placeholder="ราคา">
                                <label for="Price" class="field-icon"></label>  
                            </label>
						</div><!-- end section 7-->
                    </div><!-- end .frm-row section -->                                    
                    <div class="section">
						ประเภท
                        <img src="../../images/if_asterisk.png" style="width:14px;height:14px;" title="สำคัญ!" 
                        data-target=".bs-example-modal-sm">
                        <label class="field select">
							<select id="language" name="Asset_Category">
                                <?php
									  $result=mysqli_query($con,"SELECT Category_id,Category_name FROM category") 
									  or die ("mysql error=>>".mysql_error($con));
									  while(list( $Category_id,$Category_name)=mysqli_fetch_row($result)){
										  $select = $Category_id == $Category_name? "selected":"";
									  echo "<option value=$Category_id>$Category_name</option>";  
									  }
									  
									  mysqli_free_result($result);
									  mysqli_close($con);
								?>
                            </select>
                            	<i class="arrow double"></i>                    
                        </label>  
                    </div><!-- end section -->                     
                    <div class="section">
                        รูปภาพ<label for="Asset_photo" class="field file">
                            <span class="button btn-primary"> Choose File </span>
                            <input type="file" class="gui-file" name="Asset_photo" id="Asset_photo" 
                            onChange="document.getElementById('uploader1').value = this.value;">
                            <input type="text" class="gui-input" id="uploader1" name="Asset_photo" 
                            placeholder="no file selected" readonly>
                        </label>
                    </div><!-- end  section UPLOAD-->
                	<div class="section">
                    	<label for="comment" class="field prepend-icon">
                        	<textarea class="gui-textarea" id="detail" name="detail" placeholder="หมายเหตุ"></textarea>
                            <label for="detail" class="field-icon"><i class="fa fa-comments"></i></label>
                            <span class="input-hint"> 
                            	<strong>หมายเหตุ:</strong> กรุณาใส่ข้อมูลรายละเอียดต่างๆไว้ กรณีป้องกันเหตุอื่นๆ...
                            </span>   
                        </label>
                    </div><!-- end section -->
                </div><!-- end .form-body section -->
                <div class="form-footer" align="center">
                	<button type="submit" class="button btn-primary"> Submit </button>
                    <button type="reset" class="button"> Cancel </button>
                </div><!-- end .form-footer section -->
            </form>
            
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->
    </div>
        </div>
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Star Admin</a> &copy; 2017
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
  </div>
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