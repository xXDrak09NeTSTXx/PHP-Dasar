<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Request POST</title>
</head>
<body>
	
<!-- menggunakan metode requst $_POST -->
<!-- action untuk nglink atau mengirim -->
<!-- method tipe requst mau apa -->
	<!-- <form action="latihan4.php" method="post">
		Masukan nama :
		<input type="text" name="nama">
		<br>
		<button type="submit" name="submit">Kirim</button>
	</form> -->
	
<!-- jika action mengembalikan kembali ke latihan 3 -->	
<!-- 	$_POST["submit"] -->
<!-- dapat dari di name tag button -->
<!-- 	$_POST["nama"] -->
<!-- dapat dari di name tag input -->

<?php if(isset($_POST["submit"]))  :?>
	<h1>Selamat datang, <?= $_POST["nama"] ;?></h1>
<?php endif; ?>
	<form action="" method="post">
		Masukan nama :
		<input type="text" name="nama">
		<br>
		<button type="submit" name="submit">Kirim</button>
	</form>
</body>
</html>