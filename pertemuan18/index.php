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


	//pagenation
	$batas_halaman = 3;

	// jumlah halaman = total data / data per-halaman
	// cara pertama
	// $result = mysqli_query( $conn, "SELECT * FROM mahasiswa");
	// $jumlahdata = mysqli_num_rows($result);
	// var_dump($jumlahdata);

	// cara ke-2
	$jumlahData = count( query("SELECT * FROM mahasiswa") );

	// ceil(var); dia kebalikannya dari floor(var);
	$jumlahHalaman = ceil($jumlahData / $batas_halaman);
	
	// versi if
	// if( isset($_GET['halaman']) )
	// {
	// 	$halamanPertama = $_GET['halaman'];		
	// }
	// else
	// {
	// 	$halamanPertama = 1;
	// }

	// versi tenari
	// ? berfungsi atau nilai true
	// : berfungsi atau nilai false
	$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

	// rumus awal dan akhir halaman
	// halaman = 2, awalData = 2 karena dimulai dari index 0
	// halaman = 3, awalData = 4 karena akhir 2
	$awalData = ( $batas_halaman * $halamanAktif) - $batas_halaman;

	// membulatkan bilangan decimal
	// round(var); dia akan membulatkan dari yang terdekat
	// 1,5 akan dibulatkan menjadi 1, 1,6 akan dibulatkan menjadi 2
	
	// floor(var); dia akan membulatkan semunya ke bawah
	// 1,9 akan di bulatkan menjadi 1 

	


	// setelah LIMIT harus mempunyai 2 nilai
	// 1 memulai dari data keberapa melihat sesuai index angka yang 
	// dimulai dari (0-99);
	// 2 akhir dari data atau batas data yang mau tampil
	$mahasiswa = query( "SELECT * FROM mahasiswa LIMIT $awalData, $batas_halaman");




	// ini function dari functions.php untuk mengabil table mahasiswa
	// $mahasiswa = query( "SELECT * FROM mahasiswa");
	
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
	// else
	// {
	// 	query( "SELECT * FROM mahasiswa LIMIT 0, 2");
	// }



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php">Tambah data Mahasiswa</a>
	<br><br>

	<form action="" method="post">
		<input type="text" name="keyword" size="30" autofocus="" placeholder="Masukan keyword pencariyan" autocomplete="off">
		<button type="submit" name="cari">Cari</button>
		<button type="submit" name="exit" onclick="return confirm('yakin ingin keluar ?');">Keluar !</button>
	</form>
	<br>

	

	<br><br>

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

<center>
	<!-- pegenation -->

	<!-- back page -->
<?php if( $halamanAktif > 1) : ?>
	<a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php else : ?>
	<b>&laquo;</b>
<?php endif; ?>
	<!-- akhir back page -->

	<!-- page -->
<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
	<?php if( $i == $halamanAktif) : ?>
		<a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: green;" ><?= $i; ?></a>
	<?php else : ?>
		<a href="?halaman=<?= $i; ?>"><?= $i; ?></a>

	<?php endif; ?>
<?php endfor; ?>
	<!-- akhir page -->

	<!-- next page -->
<?php if( $halamanAktif < $jumlahHalaman) : ?>
	<a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php else : ?>
	<a>&raquo;</a>
<?php endif; ?>
	<!-- akhir next page -->

	<!-- akhir pagenation -->	
</center>
	
</body>
</html>