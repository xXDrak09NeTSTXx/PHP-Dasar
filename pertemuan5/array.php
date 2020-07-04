<?php 
	// array
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

	// cara pengulangan pada array
	// menggunakan foreach dan for
	$angka = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22];
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar Array</title>
	<style>
	div
	{
		width: 50px;
		height: 50px;
		background-color: salmon;
		text-align: center;
		line-height: 50px;
		margin: 3px;
		float: left;
	}	
	</style>
</head>
<body>
	
	<!-- menggunakan for -->
	<!-- <?php for( $i = 0 ; $i < 15 ; $i++) : ?>
		<div><?= $angka[$i];  ?></div>
	<?php endfor; ?> -->

	<!-- <?php for( $i = 0 ; $i < count($angka) ; $i++) : ?>
		<div><?= $angka[$i];  ?></div>
	<?php endfor; ?> -->

	<!-- menggunakan foreach -->
	<!-- <?php foreach( $angka as $a ) : ?>
		<div><?= $a ; ?></div>
		<div><?= $a ; ?></div>
	<?php endforeach; ?> -->

</body>
</html>