<?php
	
	// array umumnya tipe numerik
	// $mahasiswa = ["Mustofa", "13160447", "IT", "mustofa@gmail.com"];

	// array dalam array atau array 2 dimensi tipe numerik
	$mahasiswa = 
	[
		["Mustofa", "13160447", "IT", "mustofa@gmail.com"],
		["Dedi Kurniawan", "13160755", "IPS", "dedi@gmail.com"],
		["Ruslan Godeater", "13164456", "IPA", "ruslan@gmail.com"]
	];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	
	<h1>Daftar Mahasiswa</h1>

	<!-- cara biasa -->
	<!-- <ul>
		<li><?= $mahasiswa[0] ; ?></li>
		<li><?= $mahasiswa[1] ; ?></li>
		<li><?= $mahasiswa[2] ; ?></li>
		<li><?= $mahasiswa[3] ; ?></li>
	</ul> -->

	<!-- pakai foreach -->
	<!-- <ul>
		<?php foreach($mahasiswa as $mhs ) : ?>
			<li><?= $mhs ;  ?></li>
		<?php endforeach;  ?>
	</ul> -->

	<!-- cara menampilkan array 2 dimensi atau array dalam array -->
	<?php foreach( $mahasiswa as $mhs) : ?>
		<ul>
			<li><?= $mhs[0] ; ?></li>
			<li><?= $mhs[1] ; ?></li>
			<li><?= $mhs[2] ; ?></li>
			<li><?= $mhs[3] ; ?></li>
		</ul>
	<?php endforeach; ?>

</body>
</html>