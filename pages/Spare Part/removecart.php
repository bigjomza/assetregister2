<?php
session_start();

$ItemID = isset($_GET['ItemID']) ? $_GET['ItemID'] : "";
if (!isset($_SESSION['cart']))
{
    $_SESSION['cart'] = array();
    $_SESSION['Qty'][] = array();
}

$key = array_search($ItemID, $_SESSION['cart']);
$_SESSION['Qty'][$key] = "";

$_SESSION['cart'] = array_diff($_SESSION['cart'], array($ItemID));
echo "<script>window.location='cart.php?a=remove'</script>";