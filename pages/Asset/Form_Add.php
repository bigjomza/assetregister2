<?php
	include("../../Funtion/funtion.php");
	$con = connect_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ทดสอบฟอร์มใหม่ New Form</title>
    <link href="css/smart-forms.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/bootstrap-theme.min.css" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->
</head>
<style type="text/css">
	@font-face { font-family: 'FontAwesome'; src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/fontawesome-webfontba72.eot?#iefix') 
	 format('embedded-opentype'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/fontawesome-webfontba72.woff') 
	 format('woff'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/fontawesome-webfontba72.ttf') 
	 format('truetype'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/fontawesome-webfontba72.svg#FontAwesome') 
	 format('svg'); 
	 font-weight: 
	 normal; 
	 font-style: normal; 
 }
 </style>
<body>
		<div class="container"> 
    	<div class="smart-wrap">
    	<div class="smart-forms smart-container wrap-2">
    	<div class="form-header header-primary"><h4>
    	<i class="fa fa-pencil-square"></i>Register Form</h4></div><!-- end .form-header section -->
                   
<form method="post" id="new_post" name="new_post"  action="insert.php" class="wpcf7-form" 
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
                                data-format="yyyy-mm-dd" placeholder="Date" required>
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
    <script src="js/jquery.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    </div>
</body>
</html>