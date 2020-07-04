<?php  
	
	// untuk menjalakan atau mengaktifkan $_SESSION
	session_start();

	// $_SESSION[] berfungsi untuk mengirim variable ke semua halaman
	$_SESSION["nama"] = "Mustofa";


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