<?php

	// mengaktigkan session 
 	session_start();


 	// memblok user masuk jika belum login
	if( !isset($_SESSION["login"]) )
	{
		header("Location: login.php");
		exit;
	}


	// memanggil file functions.php
	require 'functions.php';

	// cara menghapus melalu $_GET
	// $id = $_GET["id"]; id dapat dari index.php bagian link hapus
	// document.location.href = 'index.php'; link versi javascript
	$id = $_GET["id"];

	if ( hapus($id) > 0 ) 
	{
		echo "
			<script>
				alert('data berhasil dihapus');
				document.location.href = 'index.php';
			</script>"
		;	
	}
	else
	{
		echo "
			<script>
				alert('data tidak dihapus');
				document.location.href = 'index.php';
			</script>"
		;
	}


 ?>