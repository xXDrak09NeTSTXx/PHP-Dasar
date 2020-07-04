<?php  
	// cara koneksi ke-data base nya
	// para meter pertama nama host data bases kedua username data base ketiga passwor username ke-empat nama data base nya
	// mysqli_connect("localhost", "root", "", "phpdasar");
	$conn = mysqli_connect("localhost", "root", "", "phpdasar");

	// ambil data dari tabel mahasiswa atau query data mahasiswa
	// para meter pertama ambil koneksi kedua perintah sql 
	$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
	
	// cek apakah berhasil koneksi nya
	// if ( !$result) 
	// {
	// 	echo mysqli_error($conn);
	// }

	// ambil data dari object $result, tabel mahasiswa  secara detail
	// ada 4 cara
	
	// mysqli_fetch_row(); // mengembalikan array numerik
	// $mhs = mysqli_fetch_row($result);
	// var_dump($mhs[2]);

	// mysqli_fetch_assoc(); // mengembalikan array associatif
	// $mhs = mysqli_fetch_assoc($result);
	// var_dump($mhs["jurusan"]);

	// mysqli_fetch_array(); // mengembalikan 2 tipe array yaitu numerik dan associatif 
	// $mhs = mysqli_fetch_array($result);
	// var_dump($mhs["4"]);

	// mysqli_fetch_object(); // mengembalikan sesuai object
	// $mhs = mysqli_fetch_object($result);
	// var_dump($mhs->email);

	// mengabil semua data yang ada di feal
	// while ( $mhs = mysqli_fetch_assoc($result) )
	// {
	// 	var_dump($mhs);
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
<?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
		<tr>
			<td><?= $i ; ?></td>
			<td>
				<a href="">Ubah</a>
				<a href="">Hapus</a>
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
<?php endwhile; ?>		
	</table>
	
</body>
</html>