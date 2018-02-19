<?php
session_start();
if(isset($_POST['username'])){
	$ch = curl_init();
	// Disable SSL verification
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	// Will return the response, if false it print the response
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Set the url
	curl_setopt($ch, CURLOPT_URL,"venus:9000/login?usercode=".$_POST['username']."&password=".$_POST['passwd']."&appid=6");
	//app.nopadol.com
	// Execute
	$result=curl_exec($ch);
	// Closing
	curl_close($ch);
	// Will dump a beauty json :3
	//var_dump(json_decode($result, true));
	$data = json_decode($result, true);
	@$datauser = $data['data'];
	$x = $data['data']['menu']['0']['is_create'];
	
	$username = $_POST['username'];
	$passwd = $_POST['passwd'];
	$usercode = $datauser['usercode'];
	$password = $datauser['password'];
	$Level = (string)$x;
	@$datauser['username'];
	if($username == $usercode and $passwd == $password){
		$_SESSION['valid_user'] = $usercode;
		$_SESSION['user_Level'] = $Level;
		echo "<script>window.location='../../index.php'</script>";
		/*echo "<script>window.location='../../index.html'</script>";*/
	}
	else{
		echo "<script>alert('กรุณากรอก Username และ Password ให้ถูกต้อง')</script>";
		echo "<script>window.location='Login.php'</script>";
		/*echo "<script>window.location='index.php?module=7&action=2'</script>";*/
	}
}
?>