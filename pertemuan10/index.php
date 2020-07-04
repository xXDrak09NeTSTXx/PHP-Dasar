<?php  
	
	// mengabil file yang lain
	require 'functions.php';

	// ini function untuk mengabil table mahasiswa
	$mahasiswa = query( "SELECT * FROM mahasiswa");
	
	
	



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
				<a href="">Ubah</a>
				<a href="hapus.php?id=<?= $row["id"]; ?>" 
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