<?php 
	//session_start();
	//include("function.php");
	//$con = connect_db();
?>
<!DOCTYPE html>
<html>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "TH Sarabun New", "Tw Cen MT"}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:250px;" id="mySidebar"><br>
  <form method="post" action="New_index2.php?module=7&action=3" class="menu" >
<!--<P><center><img src="img/if_user_accounts.png" style="width:118px;height:118px;" >
</center></P>-->
<h2 align="center">Login</h2>
<h4 align="center"><P>Username: <input type="text" name="username" id="uses" required="required" ></P>
<P>Password: <input type="password" name="passwd" id="pass" required="required" ></P>
<center><button type="submit" name="" value="Login" style="width:auto;">Login</button>
<button type="reset" name="" value="Cancel" class="b2" style="width:auto;">Cancel</button>
</h4></center>
</form>
</nav>
</body>
</html>
