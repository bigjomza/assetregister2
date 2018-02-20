<?php
if(isset($_POST['user'])){
	$ch = curl_init();
	// Disable SSL verification
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	// Will return the response, if false it print the response
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Set the url
	curl_setopt($ch, CURLOPT_URL,"http://venus:9000/login?usercode=".$_POST['user']."&password=".$_POST['password']."&appid=6");
	// Execute
	$result=curl_exec($ch);
	// Closing
	curl_close($ch);
	// Will dump a beauty json :3
	//var_dump(json_decode($result, true));
	$data = json_decode($result, true);
	$datauser = $data['data'];
	$x = $data['data']['menu']['0']['is_create'];
	//$dataactive = $data['menu'];
	//$datacod = $data['menucode'];
	//echo $datauser['username'] ."<br>". $datauser['rolename']."<br>" ;
	echo $x;
	//echo $datauser['data']['menu'];
	//var_dump($data);
	//var_dump($data);
}
?>
<form method="post">
	<input type="text" name="user">
    <input type="password" name="password">
    <button type="submit">Submit</button>
</form>