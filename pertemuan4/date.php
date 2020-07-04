<?php 

// function date atau waktu

	// l = menampilkan hari, m = bulan dalam bentuk angka, M = bulan dalam bentuk string, d = hari menurut tanggal, Y = menampilkan tahun.
	// d Hari dalam sebulan, 2 digit dengan angka nol terkemuka 01 hingga 31
	// D Representasi tekstual sehari, tiga huruf Mon hingga Sun
	// j Hari dalam sebulan tanpa memimpin angka 1 hingga 31
	// l (huruf kecil 'L') Representasi teks lengkap hari minggu Minggu hingga Sabtu
	// N ISO-8601 representasi numerik dari hari dalam seminggu (ditambahkan dalam PHP 5.1.0) 1 (untuk Senin) hingga 7 (untuk hari Minggu)
	// Sufiks ordinal S Inggris untuk hari dalam sebulan, 2 karakter st, nd, rd atau th. Bekerja dengan baik dengan j
	// Representasi numerik dari hari dalam minggu 0 (untuk hari Minggu) hingga 6 (untuk hari Sabtu)
	// z Hari dalam setahun (mulai dari 0) 0 hingga 365
	
	// echo date("l, d-M-Y");

// time
// unix timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970

	// echo time();

	// echo date("l", time()+172800);
	
	// echo date("l", time()+60*60*24*100); 100 ke-depan
	
	// echo date("l", time()-60*60*24*100); 100 ke-belakang

// mktime
// membuat sendiri waktu 
// mktime(0,0,0,0,0,0)
// mktime(jam, menit, detik, bulan, tanggal, tahun);

	// echo mktime(0,0,0,7,9,1997); mengecek detik
	
	// echo date("l", mktime(0,0,0,9,7,1997)) ; mencari tanggal lahir berdasarkan hari

// strtotime
	
	// echo strtotime("7 sep 1997");

	// echo date("l", strtotime("7 sep 1997")); 

?>