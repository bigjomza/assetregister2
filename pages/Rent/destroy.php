<?php
session_start();
include("../../Funtion/Funtion.php");
$con = connect_db();

session_destroy();
?>