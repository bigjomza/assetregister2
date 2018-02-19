<?php
	session_start();
	include("../../Funtion/funtion.php");
	$con = connect_db();
	//print_r($_POST);
	?>
    <?php
	$Sql = "INSERT INTO lend_empsp (No, rent_empID, rent_name, rent_phone,rent_department,rent_date)
			VALUES 
			(''
			,'$_POST[rent_empID]'
			,'$_POST[rent_name]'
			,'$_POST[rent_phone]'
			,'$_POST[rent_department]'
			,'$_POST[lend_data]'
			)"; //เพิ่มในฐานข้อมูลพนักงานที่มายืมวัสดุ-อุปกรณ์
	$result = mysqli_query($con,$Sql) or die("Error =" .mysqli_error($con));;
	$rent_empID = $_POST['rent_empID'];
	$Order_lend = mysqli_insert_id($con);
	$Order_data = $_POST['lend_data'];
	for ($i = 0; $i < count($_POST['articles']); $i++){
		//foreach($_POST['articles'] as $row=>$art){
			//$row = mysqli_fetch_row($conn);
			$articles = $_POST['articles'][$i];
			$articles2 = $_POST['articles2'][$i];
			$articles3 = $_POST['articles3'][$i];
			$articles4 = $_POST['articles4'][$i];
	        $articles5 = $_POST['articles5'][$i];
			//$rent_empID = $_POST['rent_empID'][$i];
		$balance = $_POST['stock'][$i]- $_POST['articles5'][$i];
		
		$update_spare = "UPDATE spare_part SET pay= '$articles5',balance='$balance' WHERE id =  '$articles'";
		
		//echo $update_spare;
		
		$result2 = mysqli_query($con, $update_spare) or die ("Error in query: $update_spare " . mysqli_error($con));
			
		$sql = "INSERT INTO lend_spare (id_spare ,name ,detail ,category_lend,amount ,Order_lend ,lend_data ,rent_empID)  VALUES ('$articles' , 
				'$articles2' ,
				'$articles3' ,
				'$articles4' ,
				'$articles5' ,
				'$Order_lend',
				'$Order_data',
				'$rent_empID'
				) ";
				$Order_id = $rent_empID;
		 $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
			//}
		
	}
	//echo $sql;
	echo "<script>window.location='destroy.php'</script>";
	mysqli_close($con);
?>