<?php  
	// memanggil halaman functions.php
	require 'functions.php';

	// cek tombol register sudah ditekan
	if( isset( $_POST["register"] ) )
	{
		if( registrasi($_POST) > 0 )
		{
			echo 
				"<script>
				alert('data berhasil ditambahkan');
				</script>"
			;
		}
		else 
		{
			echo mysqli_error($conn);
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Registrasi</title>
	<style>
		label 
		{
			display: block;
		}
	</style>
</head>
<body>

	<h1>Halaman Registrasi</h1>
	
	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username</label>
				<input type="text" name="username" id="username" required autocomplete="off">
			</li>
			<li>
				<label for="password">password</label>
				<input type="password" name="password" id="password"required autocomplete="off">
			</li>
			<li>
				<label for="password2">Konfirmasi password</label>
				<input type="password" name="password2" id="password2" required autocomplete="off">
			</li>
			<button type="submit" name="register">Register !</button>
		</ul>
	</form>	
</body>
</html>