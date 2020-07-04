<?php  

	// membuat cookie
	// ada 3 para meter
	// 1 key nya apa
	// 2 value nya apa
	// 3 mau sampai berapa cookie berthan di browser user
	setcookie('nama', 'Mustofa', time()+60);
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1><?= $_COOKIE['nama']; ?></h1>
</body>
</html>