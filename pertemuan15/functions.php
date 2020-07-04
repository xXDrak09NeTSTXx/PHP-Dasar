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
		
		// fungsi upload gambar
		$gambar = upload();
		if (!$gambar)
		{
			return false;
		}

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











	// meng-upload
	function upload()
	{
		// $_FILES['gambar']['nama'] = gambar nama di tag input yang berda di tambah.php 
		// ['nama'] mencari atribut nama yang ada di ['gambar']
		$namafile = $_FILES['gambar']['name'];
		$ukuranfile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpnama = $_FILES['gambar']['tmp_name'];


		// cek apakah ada gambar yang di upload
		if ( $error === 4)
		{
			echo "<script>
				alert('gambar wajib di upload');
				</script>";
			return false;
		}

		// cek apakah yang di upload apakah gambar
		$ekstensigambarfaild = ['jpg', 'jpeg', 'png'];

		// fungsi explode adalah untuk memecah sebuah string menjadi array
		$ekstensigambar = explode('.', $namafile);
		
		// untuk mengambil nama paling terakhir menggunakan fungsi end();
		// strtolower(); berfungsi semua string menjadi huruf kecil
		$ekstensigambar = strtolower( end( $ekstensigambar ) );

		// mengecek ekstensi gambar apakah ada di $ekstensigambar 
		// in_array() berfungsi apakah ada string di dalam array
		if ( !in_array( $ekstensigambar, $ekstensigambarfaild ) )
		{
			echo "<script>
				alert('yang anda upload bukan gambar');
				</script>";
			return false;
		}

		// cek ukuran file dan membatasi ukuran file dalam bentuk byte
		if ( $ukuranfile > 1000000 )
		{
			echo "<script>
				alert('ukuran minimal 1 MB');
				</script>";
			return false;
		}

		// mengubah nama gambar menjadi string random dari komputer 
		// uniqid(); mengubah nama data secara random
		$namafilebaru  = $_POST["nama"];
		$namafilebaru .= '.';
		$namafilebaru .= uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensigambar;
		// var_dump($namafilebaru);die;


		// lolos pengecekan, gambar baru bisa di upload
		// move_uploaded_file(); berfungsi memindahkan dari tempat sementara menuju tempat yang di inginkan dan membaut nama file
		move_uploaded_file( $tmpnama, 'img/'. $namafilebaru );

		return $namafilebaru;
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

		$gambarlama =htmlspecialchars($data["gambarlama"]);
		// cek apakah user pilih gambar baru atau tidak
		if( $_FILES['gambar']['error'] === 4)
		{
			$gambar = $gambarlama;
		}
		else
		{
			$gambar = upload();
		}
		

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










	// mencari data
	function cari($keword)
	{
		$query = "SELECT * FROM mahasiswa
				WHERE
				nama LIKE '%$keword%' OR
				nim LIKE '%$keword%' OR
				email LIKE '%$keword%' OR
				jurusan LIKE '%$keword%'
				";
		return query($query);	
	}





	// registrasi untuk login
	function registrasi($data)
	{
		global $conn;

		// stripcslashes(); berfungsi membersihkan "/, -, ,"
		$username = strtolower( stripcslashes( $data["username"] ) )  ;

		// mysqli_real_escape_string(); berfungsi memperbolehkan memasukan karakter selain alfabet 
		// dan mempunyai 2 parameter yaitu kondisi koneksi ke data base
		// dan target nya apa
		$password = mysqli_real_escape_string( $conn, $data["password"] );

		$password2 = mysqli_real_escape_string( $conn, $data["password2"] );


		// cek user name sudah ada belum
		$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");

		if ( mysqli_fetch_assoc($result) ) 
		{
			echo 
			"<script>
				alert('username sudah ada');
			</script>"
			;
			return false;
		}




		// cek konfirmasi password tidak sesuai
		if ( $password !== $password2 ) 
		{
			echo 
				"<script>
				alert('konfirmasi password tidak sesuai');
				</script>"
			;
			return false;
		}
		
		// enskripsi password
		$password = password_hash( $password, PASSWORD_DEFAULT );
		// var_dump($password);


		// tambahkan userbaru ke database
		mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password') ");

		return mysqli_affected_rows($conn);
	}

?>	