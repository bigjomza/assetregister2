<?php
	include("../../Funtion/funtion.php");
	$con = connect_db();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Form Asset</title>
<link href="css/smart-forms.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
<?php
	$result=mysqli_query($con,"SELECT * FROM asset WHERE 
	Asset_id='$_GET[Asset_id]'")  or die("SQL Error=>".mysqli_error($con));

	list($Asset_id,$Asset_code ,$Asset_serial ,$Asset_name ,$mac_address,$computer_name
	,$brand ,$Asset_date ,$Asset_company ,$Asset_price,$Asset_barcode
	,$Asset_Category,$Asset_photo ,$Asset_time,$detail)=mysqli_fetch_row($result);
?>
    <div class="smart-wrap">
    <div class="smart-forms smart-container wrap-2">
    <div class="form-header header-primary"><h4>
    <i class="fa fa-pencil-square"></i>Edit Register Form</h4></div><!-- end .form-header section -->            
		<form method="post" id="new_post" name="new_post"  action="Asset_update.php" class="wpcf7-form" 
        enctype="mu ltipart/form-data">
        <input type="hidden" name="Old_ID" value="<?php echo $Asset_id ?>">
			<div class="form-body">
					<div class="spacer-b30">
					<div class="tagline"><span>Add Asset</span></div><!-- .tagline -->
                        </div>
					<div class="frm-row"><!-- Start .frm-row section --> 
                        <div class="section colm colm6">
						<label for="Barcode" class="field prepend-icon">Barcode
							<input type="text" name="Asset_barcode" id="Barcode" class="gui-input" 
                            value="<?php echo $Asset_barcode ?>"/>
							<label for="Barcode" class="field-icon"></label>  
						</label>
                        </div><!-- end section -->                     
					<div class="section colm colm6">
                            <label for="Asset_code" class="field prepend-icon">เลขทะเบียนสินทรัพย์
                                <input type="text" name="Asset_code" id="Asset_code" class="gui-input" 
                                value="<?php echo $Asset_code ?>"/>
                                <label for="Asset_code" class="field-icon"></label>  
                            </label>
                        </div><!-- end section -->
                        <div class="section colm colm6">
                            <label for="Serial Number" class="field prepend-icon">Serial Number
                                <input type="text" name="Asset_serial" id="Serial Number" class="gui-input" 
                                value="<?php echo $Asset_serial ?>"/>
                                <label for="Serial Number" class="field-icon"></label>  
                            </label>
						</div><!-- end section -->
                        </div><!-- end .frm-row section -->   
                        <div class="section colm colm6">
                            <label for="Asset name" class="field prepend-icon">ชื่อสินทรัพย์
                                <input type="text" name="Asset_name" id="Asset name" class="gui-input" 
                                value="<?php echo $Asset_name ?>"/>
                                <label for="Asset name" class="field-icon"></label>  
                            </label>
						</div><!-- end section 1-->
                        
                        <div class="frm-row"><!-- Start .frm-row section -->
                        <div class="section colm colm6">
                            <label for="mac_address" class="field prepend-icon">Mac Address
                                <input type="text" name="mac_address" id="mac_address" class="gui-input" 
                                value="<?php echo $mac_address?>"/>
                                <label for="mac_address" class="field-icon"></label>  
                            </label>
						</div><!-- end section 2-->
                        <div class="section colm colm6">
                            <label for="computer_name" class="field prepend-icon">Computer name						
                                <input type="text" name="computer_name" id="computer_name" class="gui-input" 
                                value="<?php echo $computer_name ?>"/>
                                <label for="computer_name" class="field-icon"></label>  
                            </label>
						</div><!-- end section 3-->
                        <div class="section colm colm6">
                            <label for="Brand" class="field prepend-icon">รุ่น
                                <input type="text" name="brand" id="Brand" class="gui-input" value="<?php echo $brand ?>"/>
                                <label for="Brand" class="field-icon"></label>  
                            </label>
						</div><!-- end section 4-->
                        <div class="section colm colm6">
                            <label for="date" class="field prepend-icon">วันที่ซื้อ
                                <input type="date" name="Asset_date" id="date" class="gui-input" 
                                data-format="yyyy-mm-dd" value="<?php echo $Asset_date ?>"/>
                                <label for="date" class="field-icon"></label>  
                            </label>
						</div><!-- end section 5-->
                        <div class="section colm colm6">
                            <label for="company" class="field prepend-icon">ซื้อมาจาก
                                <input type="text" name="Asset_company" id="company" class="gui-input" 
                                value="<?php echo $Asset_company ?>"/>
                                <label for="company" class="field-icon"></label>  
                            </label>
						</div><!-- end section 6-->
                        <div class="section colm colm6">
                            <label for="Price" class="field prepend-icon">ราคา
                                <input type="text" name="Asset_price" id="Price" class="gui-input" 
                                value="<?php echo $Asset_price ?>"/>
                                <label for="Price" class="field-icon"></label>  
                            </label>
						</div><!-- end section 7-->
                    </div><!-- end .frm-row section -->                                    
                    <div class="section">
						ประเภท<label class="field select">
							<select id="language" name="Asset_Category">
                               <?php
				  $result=mysqli_query($con,"SELECT Category_id,Category_name FROM category ") 
				  or die ("mysql error=>>".mysql_error($con));
				  while(list($Category_id,$Category_name)=mysqli_fetch_row($result)){
					  $select = $Category_id == $Asset_Category? "selected":"";
				  echo "<option value='$Category_id' $select>$Category_name</option>";  
				  }
				  
				  mysqli_free_result($result);
				  mysqli_close($con);
				?>
                            </select><i class="arrow double"></i> 
                        </label>  
                    </div><!-- end section -->                     
                    <div class="section">
                        รูปภาพ<label for="Asset photo" class="field file">
                            <span class="button btn-primary"> Choose File </span>
                            <input type="file" class="gui-file" name="Asset_photo" id="Asset_photo"
                            onChange="document.getElementById('uploader1').value = this.value;" >
                            <input type="text" class="gui-input" id="uploader1" name="Asset_photo"
                            placeholder="no file selected" readonly >
                        </label>
                    </div><!-- end  section UPLOAD-->
                	<div class="section">
                    	<label for="comment" class="field prepend-icon">
                        	<textarea class="gui-textarea" id="detail" name="detail"><?php echo $detail?>
                            </textarea>
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
    
<script>
function Photo(Asset_photo){
	document.getElementById('uploader1').value = this.value;
	document.getElementById('uploader1').value = Asset_photo;
}
</script>
</body>
</html>