<?php 
	
	// arrat 2 dimensi
	// $mahasiswa = 
	// [
	// 	["Mustofa", "13160447", "IT", "mustofa@gmail.com"],
	// 	["Dedi Kurniawan", "13160755", "IPS", "dedi@gmail.com"],
	// 	["Ruslan Godeater", "13164456", "IPA", "ruslan@gmail.com"]
	// ];

	// array asosiatif
	// definisinya atau pengertiannya seperti array numerik, kecuali
	// key-nya adalah string yang kita buat sendiri
	$mahasiswa = 
	[
		[
			"nama" 		=> "Mustofa",
			"nim" 		=> "13160447",
			"jurusan" 	=> "IT",
			"email" 	=> "mustofa@gmail.com",
			"gambar"	=> "1.jpg"
		],
		[
			"nama" 		=> "Dedi Kurniawan", 
			"nim" 		=> "13160755", 
			"jurusan" 	=> "IPS", 
			"email" 	=> "dedi@gmail.com",
			"gambar"	=> "2.jpg",
			// array 3 dimensi atau array dalam array dlam array
			"tugas"		=> [90,80,100]
		]
	];

	// echo $mahasiswa[1]["nama"];

	// menampilkan array 3 dimensi 
	// echo $mahasiswa[1]["tugas"][2];	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan Array asosiatif</title>
</head>
<body>
	
	<h1>Daftar Mahasiswa</h1>
	<!-- cara menampilkan array 2 dimensi atau array dalam array tipe asosiatif -->
	<?php foreach( $mahasiswa as $mhs) : ?>
		<ul>
			<img src="img/<?= $mhs["gambar"]; ?>">
			<li>Nama	:<?= $mhs["nama"] ; ?></li>
			<li>NIM		:<?= $mhs["nim"] ; ?></li>
			<li>Jurusan	:<?= $mhs["jurusan"] ; ?></li>
			<li>Email	:<?= $mhs["email"] ; ?></li>
		</ul>
	<?php endforeach; ?>
	
</body>
</html>