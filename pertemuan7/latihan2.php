<?php  
	// mengatsi $_GET dari url
	// cek apakah tidak ada data di $_GET di latihan 1
	if (   !isset($_GET["nama"]) 
		|| !isset($_GET["nim"])
		|| !isset($_GET["email"])
		|| !isset($_GET["jurusan"])
		|| !isset($_GET["gambar"])) 
	{
		// memaksa user kembali ke halaman sebelummnya
		// redirect
		header("Location: latihan1.php");
		// berfungsi supaya tidak di eksekusi kode yang di bawah atau sesudah
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail Mahasisawa</title>
</head>
<body>

<!-- menampilkan dari request $_GET yang BERADA DI LATIHAN 1 -->
	<ul>
		<li><img src="img/<?= $_GET["gambar"] ; ?>" alt=""></li>
		<li><?= $_GET["nama"] ; ?></li>
		<li><?= $_GET["nim"] ; ?></li>
		<li><?= $_GET["email"] ; ?></li>
		<li><?= $_GET["jurusan"] ; ?></li>
	</ul>

	<a href="latihan1.php">Kembali ke daftar</a>
	
</body>
</html>