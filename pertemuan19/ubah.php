<?php
	
	// mengaktigkan session 
 	session_start();


 	// memblok user masuk jika belum login
	if( !isset($_SESSION["login"]) )
	{
		header("Location: login.php");
		exit;
	}

	
	// memanggil file functions.php
	require 'functions.php';

	// ambil data di URL yang berada di file index
	$id = $_GET["id"];

	// query data mahasiswa berdasarkan ID dari $_GET[];
	// [0] adalah array utama
	$mhs = query( "SELECT * FROM mahasiswa WHERE id = $id" ) [0];

	// tombol submit ditekan atau belum
	if ( isset($_POST["submit"]) ) 
	{
		
		// cek apakah data berhasil atau tidak di tambah atau tidak
		// tambah($_POST) dapat dari function yang berada dari file functions.php 
		// document.location.href = 'index.php'; link versi javascript
		if ( ubah($_POST) > 0)
		{
			echo "
			<script>
				alert('data berhasil diubah');
				document.location.href = 'index.php';
			</script>"
			;	
		}
		else
		{
			echo "
			<script>
				alert('data tidak berhasil diubah');
				document.location.href = 'tambah.php';
			</script>"
			;
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah data Mahasiswa</title>
</head>
<body>
	<h1>Ubah data Mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
		<input type="hidden" name="id" value="<?= $mhs["id"];?>">
		<input type="hidden" name="gambarlama" value="<?= $mhs["gambar"];?>">
			<li>
				<!-- required berfungsi untuk melarang input kosong -->
				<label for="nim">NIM :</label>
				<input type="text" name="nim" id="nim" required 
				value="<?= $mhs["nim"]; ?>" autocomplete="off">
			</li>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama"required
				value="<?= $mhs["nama"]; ?>" autocomplete="off">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="email" name="email" id="email"required
				value="<?= $mhs["email"]; ?>" autocomplete="off">
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan"required
				value="<?= $mhs["jurusan"]; ?>" autocomplete="off">
			</li>
			<li>
				<label for="gambar">Gambar :</label><br>
				<img src="img/<?= $mhs["gambar"]; ?>" alt="" width="40" >
				<br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<button type="submit" name="submit">Ubah data !</button>
			<a href="index.php">Kembali</a>
		</ul>
	</form>
	
</body>
</html>