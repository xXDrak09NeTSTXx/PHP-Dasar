<?php 
	
	// untuk menjalakan $_SESSION yang ada di halaman2.php
	session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1><?= $_SESSION["nama"]; ?></h1>
</body>
</html>