<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
		include("../function/db_function.php");//include ไฟล์ที่เขียนฟังก์ชั่นไว้ใช้งาน
	    $con=connect_db(); //เลือกใช้คำสั่งในการติดต่อฐานข้อมูล


 		if(empty($_POST['Category_name'])){
 			echo "<script language='javascript'>alert('กรุณากรอกชื่อหมวดหมูสินทรัพย์')</script>";
 			echo "<script language='javascript'>window.location='list_category_spare.php'</script>";
 			
 		}

	
			$sql="SELECT Category_id  FROM category_spare";
		$curr=mysqli_query($con,$sql) or die(mysqli_error($con));


		$result = mysqli_num_rows($curr);
		$Category_id = $result+1;

		$Category_name=$_POST['Category_name'];


			$sql1="INSERT INTO category_spare  VALUES('$Category_id','$Category_name')";
			mysqli_query($con,$sql1) or die(mysqli_error($con));

			echo "<script language='javascript'>alert('บันทึกเรียบร้อย')</script>";
			echo "<script language='javascript'>window.location='list_category_spare.php'</script>";

		mysqli_free_result($curr);
		mysqli_close($con);

		
?>
</body>
</html>