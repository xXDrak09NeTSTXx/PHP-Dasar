<?php
	// array
	// array numerik
	// array = variable yang dapat menampung banyak nilai
	// eleman pada array boleh memiliki tipe yang berbeda
	// pasangan antara key dan velue 
	// key adalah index yang dimulai dari angka 0 

	// cara lama array
	// $hari = array("senin", "selasa", "Rabu");

	// // cara baru array
	// $bulan = ["Januari", "Febuari", "Maret"];
	// $arr1 = [123, "tulisan", false];

	// // menampilkan array
	// // var_dump() atau print_r()
	// // var_dump($hari);
	// // echo "<br>";
	// // print_r($bulan);
	// // echo "<br>";

	// // // menampilkan 1 elemen pada array
	// // echo $arr1[0];
	// // echo "<br>";
	// // echo $bulan[1];

	// // menambahkan eleman baru pada array
	// var_dump($hari);
	// $hari[] = "Kamis";
	// $hari[] = "Jumat";
	// echo "<br>";
	// var_dump($hari);
	
	// array umumnya tipe numerik
	// $mahasiswa = ["Mustofa", "13160447", "IT", "mustofa@gmail.com"];

	// array dalam array atau array 2 dimensi tipe numerik
	// catatan lengkapnya ada di pertemuana 5
	// $mahasiswa = 
	// [
	// 	["Mustofa", "13160447", "IT", "mustofa@gmail.com"],
	// 	["Dedi Kurniawan", "13160755", "IPS", "dedi@gmail.com"],
	// 	["Ruslan Godeater", "13164456", "IPA", "ruslan@gmail.com"]
	// ];
	// var_dump($mahasiswa);
	// print_r($mahasiswa);
	// echo $mahasiswa[0][0];
	// $angka = 
	// [
	// 	[1,2,3],
	//	[4,5,6],
	//	[7,8,9]
	// ];
	// echo $angka[1][1];
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan Array</title>
	<style>
		.kotak 
		{
			width: 30px;
			height: 30px;
			background-color: #BADA55;
			text-align: center;
			line-height: 30px;
			margin: 3px;
			float: left;
			transition: 1s;
		}
		.kotak:hover
		{
			transform: rotate(360deg);
			border-radius: 50%;
		}
	</style>
</head>
<body>
	
	<!-- cetak array 1 dimensi -->
	<!-- <?php $angka = [1,2,3,4,5,6,7,8,9]; ?>
	<?php foreach( $angka as $a ) : ?>
		<div class="kotak"><?= $a ;  ?></div>
	<?php endforeach; ?> -->

	<!-- cetak array 2 dimensi atau array dalam array -->
	<!-- <?php $angka = [[1,2,3],[4,5,6],[7,8,9]]; ?>
	<?php foreach( $angka as $a ) : ?>
		<?php foreach( $a as $b) : ?>
			<div class="kotak"><?= $b ;  ?></div>
		<?php endforeach; ?>
	<?php endforeach; ?> -->	
	
</body>
</html>