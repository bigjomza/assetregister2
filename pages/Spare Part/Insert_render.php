<?php 
	include("../../Funtion/funtion.php");
	$con=connect_db();
	
	
	$sql="INSERT INTO send_sp (send_id,send_bill,send_idSp,send_nameSp,send_brand,send_number,send_back,send_date)
	
	 VALUES ('','$_POST[Order_lend]'
	 	              ,'$_POST[id_spare]'
	                  ,'$_POST[name]'
					  ,'$_POST[detail]'
					  ,'$_POST[amount]'
					  ,'$_POST[number]'
					  ,'$_POST[time]')";
					  
	mysqli_query($con,$sql)or die("ERROR2".mysqli_error($con));
	  
   // echo $sql ;
	
	mysqli_close($con);
   echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
   echo "<script>window.location='send.php'</script>";
    
?>
