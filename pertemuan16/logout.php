<?php  
	
	session_start();
	

	// memblok user masuk jika belum login
	if( !isset($_SESSION["login"]) )
	{
		header("Location: login.php");
		exit;
	}


	// untuk memastikan session menjadi kosong
	$_SESSION = [];
	session_unset();

	// untuk menghancurkan session
	session_destroy();

	header("Location: login.php");
	exit;

?>