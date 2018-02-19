<?php
    session_start();
	include("../../Funtion/funtion.php");
	$con = connect_db();

	
	$ItemID = isset($_GET['ItemID']) ? $_GET['ItemID'] : "";
	if($_POST){
		for($i = 0; $i < count($_POST['Qty']); $i++)
		{
			$key = $_POST['arr_key_' .$i];
			$_SESSION['Qty'][$key] = $_POST['Qty'][$i];
			echo "<script>window.location='cart.php';</script>";	
		}			
	}else{
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart'] = array();
			$_SESSION['Qty'][] = array();	
		}
		if(in_array($ItemID,$_SESSION['cart'])){
			$key = array_search($ItemID,$_SESSION['cart']);
			$_SESSION['Qty'][$key] = $_SESSION['Qty'][$key] + 1;
			echo "<script>window.location='index_sp.php?a=exists'</script>";
		}else{
			array_push($_SESSION['cart'],$ItemID);	
				$key = array_search($ItemID,$_SESSION['cart']);
				$_SESSION['Qty'][$key] = 1;
				echo "<script>window.location='index_sp.php?a=add'</script>";
			}
	}
?>