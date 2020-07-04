<?php  

	// cara koneksi ke-data base nya
	// para meter pertama nama host data bases kedua username data base ketiga passwor username ke-empat nama data base nya
	// mysqli_connect("localhost", "root", "", "phpdasar");
	$conn = mysqli_connect("localhost", "root", "", "phpdasar");

	// mengambil nilai data dari table
	function query($query)
	{
		// mengambil variable di luar
		global $conn;
		// membuat prameter
		$result = mysqli_query($conn, $query);
		// membuat array kosong
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result) ) 
		{
			// mengisi nilai array kosong
			$rows[] = $row;
		}
		// mengembalikan array yang sudah ada nilai
		return $rows ;
	}

	// menambah data 
	function tambah($data)
	{
		global $conn;

		// ambil data dari tiap elment from html
		// htmlspecialchars($data["nim"]) berfungsi menolak data input tipe html
		$nim = htmlspecialchars($data["nim"]);
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);
		$jurusan = htmlspecialchars($data["jurusan"]);
		$gambar = htmlspecialchars($data["gambar"]);

		// query insert data
		$query = "INSERT INTO mahasiswa 
		VALUES 
		(
			'', 
			'$nama', 
			'$nim', 
			'$email', 
			'$jurusan', 
			'$gambar'
		)";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	// menghapus data
	function hapus($id)
	{
		global $conn;

		// sytank menghapus
		mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

		// jalankan kembali
		return mysqli_affected_rows($conn);
	}

	// mengubah data
	function ubah($data)
	{
		global $conn;

		// ambil data dari tiap elment from html yang di ubah.php
		// htmlspecialchars($data["nim"]) berfungsi menolak data input tipe html
		$id = $data["id"];
		$nim = htmlspecialchars($data["nim"]);
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);
		$jurusan = htmlspecialchars($data["jurusan"]);
		$gambar = htmlspecialchars($data["gambar"]);

		// query insert data
		$query = "UPDATE mahasiswa SET  
					nim 	= '$nim',
					nama 	= '$nama',
					email 	= '$email',
					jurusan = '$jurusan',
					gambar 	= '$gambar'
					WHERE id = '$id'
				";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}
?>