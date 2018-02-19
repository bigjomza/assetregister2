<html>
<head>
<title>ThaiCreate.Com</title>
</head>
<body>
<?php
for($i=1;$i<=(int)$_POST["hdnMaxLine"];$i++)
{
	echo $_POST["id".$i];
	echo "<br>";
	echo $_POST["name".$i];
	echo "<br>";
	echo $_POST["brand".$i];
	echo "<br>";
	echo $_POST["category".$i];
	echo "<br>";
	echo $_POST["Pay".$i];
	echo "<br>";
	echo "<hr>";
}
?>
</body>
</html>