<?php  

	// cara koneksi ke-data base nya
	// para meter pertama nama host data bases kedua username data base ketiga passwor username ke-empat nama data base nya
	// mysqli_connect("localhost", "root", "", "phpdasar");
	$conn = mysqli_connect("localhost", "root", "", "phpdasar");

	// mengembalikan nilai secara detail
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
			// mengisi array kosong
			$rows[] = $row;
		}
		// mengembalikan array yang sudah ada nilai
		return $rows ;
	}
?>