<?php 

	// mengaktifkan session 
 	session_start();


 	// memblok user masuk jika belum login
	if( !isset($_SESSION["login"]) )
	{
		header("Location: login.php");
		exit;
	}


	// eksekusi tombol keluar
	if( isset($_POST["exit"]) )
	{
		// mematikan session
		// session_destroy();
		header("Location: logout.php");
		exit;	
	}


	// menghubungkan file functions.php
	require 'functions.php';

	// ini function dari functions.php untuk mengabil table mahasiswa
	$mahasiswa = query( "SELECT * FROM mahasiswa");
	
	// ini query untuk mengabil table mahasiswa mengurut dari kecil ke besar dengan key id
	// $mahasiswa = query( "SELECT * FROM mahasiswa ORDER BY id ASC");
	
	// ini query untuk mengabil table mahasiswa mengurut dari kecil ke besar dengan key id
	// $mahasiswa = query( "SELECT * FROM mahasiswa ORDER BY id DESC");
	
	// kondisi tag bottun dengan nama cari ditekan
	if ( isset( $_POST["cari"] ) ) 
	{
		// function cari dengan data keyword yang berada di tag input 
		// dengan method $_POST
		$mahasiswa = cari( $_POST["keyword"] );
	}
	else
	{
		$mahasiswa;
	}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
	<style>
		.loading
		{
			width: 100px;
			position: absolute;
			top: 77px;
			left: 180px; 
			z-index: -1;
			display: none;
		}
		
		/*membuat pdf menggunakan web browser*/
		@media print
		{
			.logout .tambah .form-cari
			{
				display: none;
			}
		}
	</style>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php" class="tambah">Tambah data Mahasiswa</a>
	<br><br>

	<form action="" method="post" class="form-cari">
		<input type="text" name="keyword" size="30" autofocus="" placeholder="Masukan keyword pencariyan" autocomplete="off" id="keyword">
		<button type="submit" name="cari" id="tombol-cari">Cari</button>
		<img src="img/loading.gif" class="loading">
		<br><br>
		<button type="submit" name="exit" onclick="return confirm('yakin ingin keluar ?');" class="logout">Keluar !</button>
	</form>
	<br><br>

	<div id="container">		

		<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>NO</th>
				<th>Aksi</th>
				<th>Gambar</th>
				<th>Nim</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jurusan</th>
			</tr>

	<?php $i = 1 ; ?>
	<?php foreach( $mahasiswa as $row) : ?>
			<tr>
				<td><?= $i ; ?></td>
				<td>
					<a href="ubah.php?id= <?= $row["id"]; ?>">
					Ubah</a>
					<a href="hapus.php?id= <?= $row["id"]; ?>" 
					onclick="return confirm('yakin?');"
					>Hapus</a>
				</td>
				<td>
					<img src="img/<?= $row["gambar"]; ?>" alt="" width="50">
				</td>
				<td><?= $row["nim"]; ?></td>
				<td><?= $row["nama"]; ?></td>
				<td><?= $row["email"]; ?></td>
				<td><?= $row["jurusan"]; ?></td>
			</tr>
	<?php $i++ ?>
	<?php endforeach; ?>		
		</table>
	</div>
	
</body>
</html>