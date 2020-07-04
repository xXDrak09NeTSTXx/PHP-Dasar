<?php  

	// varibale scope atau linkungan variable
	// varibale global dan varibale local di function
	// $x = 10 ; // ini varibale global

	// function tampilx()
	// {
	// 	$x = 20 ; // ini varible local yang di function
	// 	echo $x;
	// }

	// cara mengabil variable global masuk kevariable local
	// $x = 10 ; // ini varibale global

	// function tampilx()
	// {
	// 	global $x;
	// 	echo $x;
	// }
	// tampilx(); // memanggil function

	// varibale superglobal
	// varibale yang sudah disiapkan oleh PHP 
	// merupakan varibale tipe array assosiatif
	// macam-macam varibale superglobal
	// var_dump($_GET); 	// rata-rata huruf besar
	// var_dump($_POST);	// rata-rata huruf besar
	// var_dump($_SERVER); 	// rata-rata huruf besar
	// echo $_SERVER["SERVER_NAME"] // menampilkan

	//$_GET
	// $_GET["nama"] = "Mustofa" ;
	// $_GET["nim"] = "13160447" ;
	// var_dump($_GET) ;
	// cara dengan URL
	// perrtama harus ada requst $_GET
	// lalu ketik di URL seperti ini di akhir URL
	// ?nama=Mustofa

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

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

<!-- Metode request $_GET -->
<?php foreach( $mahasiswa as $mhs) : ?>
	<ul>
		<li><img src="img/<?= $mhs["gambar"]; ?>" alt=""></li>
		<li>
			<a href="latihan2.php?nama=<?= $mhs["nama"] ;?>
			&nim=<?= $mhs["nim"] ;?>
			&email=<?= $mhs["email"] ;?>
			&jurusan=<?= $mhs["jurusan"] ;?>
			&gambar=<?= $mhs["gambar"] ;?>
				">
				<?= $mhs["nama"] ; ?>
			</a>	
		</li>
		<li><?= $mhs["nim"] ; ?></li>
	</ul>
<?php endforeach; ?>
	
</body>
</html>