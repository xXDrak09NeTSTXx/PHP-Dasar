<?php  
	
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
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php">Tambah data Mahasiswa</a>
	<br><br>

	<form action="" method="post">
		<input type="text" name="keyword" size="30" autofocus="" placeholder="Masukan keyword pencariyan" autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form>
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
	
</body>
</html>