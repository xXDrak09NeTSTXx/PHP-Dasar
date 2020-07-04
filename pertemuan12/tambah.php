<?php
	// memanggil file functions.php
	require 'functions.php';


	// tombol submit ditekan atau belum
	if ( isset($_POST["submit"]) ) 
	{
		
		// cek apakah data berhasil atau tidak di tambah atau tidak
		// tambah($_POST) dapat dari function yang berada dari file functions.php 
		// document.location.href = 'index.php'; link versi javascript
		if ( tambah($_POST) > 0)
		{
			echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>"
			;	
		}
		else
		{
			echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'tambah.php';
			</script>"
			;
		}


		// var_dump( mysqli_affected_rows($conn) );
		// if ( mysqli_affected_rows($conn) > 0 )
		// {
		// 	echo "berhasil";
		// }
		// else 
		// {
		// 	echo "gagal";
		// 	echo "<br>";
		// 	echo mysqli_error($conn);
		// }
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah data Mahasiswa</title>
</head>
<body>
	<h1>Tambah data Mahasiswa</h1>

	<form action="" method="post">
		<ul>
			<li>
				<!-- required berfungsi untuk melarang input kosong -->
				<label for="nim">NIM :</label>
				<input type="text" name="nim" id="nim" required autocomplete="off">
			</li>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama"required autocomplete="off">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="email" name="email" id="email"required autocomplete="off">
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan"required autocomplete="off">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar"required autocomplete="off">
			</li>
			<button type="submit" name="submit">Tambah data !</button>
			<a href="index.php">Kembali</a>
		</ul>
	</form>
	
</body>
</html>