<?php 
// pertemuan 2 - PHP dasar
// Sintaks PHP

// Standar Output

// echo, print
// echo "Mustofa";
// print("Mustofa"); untuk string
// print(11); untuk int

// print_r
// print_r("Mustofa"); untuk string
// print_r(11); untuk int

// var_dump
// var_dump("Mustofa"); untuk memberi informasi yang berada di target yang di tulis
// $x = 1;
// var_dump($x);  variable pun juga bisa

// membuat variable dan tipe data
// tidak boleh diawali deangan angka, tapi boleh mengandung angka
// $nama1 = "Mustofa";
// $nama = "Mustofa";

// operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabungan string / concatentaion / concat
// . titik untuk menggabungkan
// $nama_depan = "Mustofa";
// $nama_belakang = "thalib";
// echo  $nama_depan." ".$nama_belakang;
// $nama = "Mustofa";
// $nama .= "";
// $nama .= "Thalib;"

// perbandingan 
// <, >, <=, >=, ==, !=
// var_dump(1 == "1"); 
// die; untuk menggakhiri eksekusi program

// indetitas
// // ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 || $x % 2 == 0);die;
// && = dan, || = atau, ! = bukan

$nama = "Mustofa";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pertemuan 2</title>
</head>
<body>
	<h1>Hallo, <?php echo $nama ?></h1>	
	
</body>
</html>