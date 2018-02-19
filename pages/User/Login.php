<?php
	//session_start();
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
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3" ><center>Login</center></h3>
              <form action="Check_GLogin.php" method="post" name="FormLogin">
                <div class="form-group">
                  <input type="text" class="form-control p_input" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control p_input" placeholder="Password" name="passwd">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check"><label><input type="checkbox" class="form-check-input">Remember me</label></div>
                  <!--<a href="#" class="forgot-pass">Forgot password</a>-->
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">LOG IN</button>
                </div>
<!--                <p class="Or-login-with my-3">Or login with</p>
                <a href="#" class="facebook-login btn btn-facebook btn-block">Sign in with Facebook</a>
                <a href="#" class="google-login btn btn-google btn-block">Sign in with Google+</a>
                <a href="#" class="google-login btn btn-create-account btn-block">Create An Account</a>-->
              </form>
            </div>
            
		<footer align="center">
    	<a href="https://www.facebook.com/NopadolPanich/" target=_blank>
        <img src="../../images/fb.png" style="width:40px;height:40px;" ></a>
        <a href="http://www.nopadol.com" target=_blank>
        <img src="../../images/nopadol-logo.png" style="width:40px;height:40px;"></a>
        <a href="sale@nopadol.com" target=_blank>
        <img src="../../images/email-icon.png" style="width:40px;height:40px;"></a>
    	<div id="footer_top" class="fontcolor" align="center" style="padding:10px;"><p>©2014 Nopadol Panich Co., Ltd. All Rights Reserved</p></div>
		</footer>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="../../js/misc.js"></script>
</body>

</html>
