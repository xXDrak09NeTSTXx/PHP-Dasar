<?php
	// menghubungkan ke file functions.php
require 'functions.php';




session_start();

// cek cookie dan amankan cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username
	$result = mysqli_query($conn, "SELECT username FROM user WHERE
			id = '$id' ");

	$row = mysqli_fetch_assoc($result);

	if ($key === hash('shas256', $row['username'])) {
		$_SESSION['login'] == true;
	}
}

// jika sudah login tidak boleh masuk ke halaman login.php
if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}




// eksekusi tombol register
if (isset($_POST["register"])) {
	header("Location: registrasi.php");
	exit;
}



// eksekusi tombol login
if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	// cek di database ada user sama atau tidak
	$result = mysqli_query($conn, "SELECT * FROM user WHERE 
			username = '$username'");

	// cek username
	// mysqli_num_rows(); berfungsi untuk mengecek user yang berada
	// di database kalau angka 0 tidak ada kalau 1 ada user
	if (mysqli_num_rows($result) === 1) {
		// cek password
		$row = mysqli_fetch_assoc($result);
		// var_dump($row);die;

		// password_verify(); berfungsi mengecek sebuah string pakah sama dengan yang sudah di encrip
		// mempunyai 2 parameter pertama password yang belu di encrip
		// yang kedua password yang sudah di encrip di database
		if (password_verify($password, $row["password"])) {
			// set session
			// berfungsi untuk memblokir user langsung masuk 
			// kehalaman index.php
			$_SESSION["login"] = true;

			// cek ingatkan saya cekbox
			if (isset($_POST['ingat'])) {
				// buat cookie
				// meng-enkripsi cookie
				setcookie('id', $row['id'], time() + 60);
				setcookie('key', hash('sha256', $row['username']), time() + 60);
			}


			header("Location: index.php");
			exit;
		}

		// var_dump(password_verify($password, $row["password"]));die;
	}
	// else
	$error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Login</title>
</head>

<body>

    <h1>Halaman Login</h1>
    <style>
        label {
            display: block;
            /*width: 100px;*/
        }
    </style>

    <?php if (isset($error)) : ?>
    <p style="color: red; font-style: italic;">Usernamae / Password salah</p>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" autocomplete="off">
            </li>
            <li>
                <label for="password">password</label>
                <input type="password" name="password" id="password" autocomplete="off">
            </li>
            <br>
            <li>
                <label for="ingat"><input type="checkbox" name="ingat" id="ingat"> Ingatkan Saya </label><br>
            </li>
            <li>
                <button type="submit" name="login">Login ! </button>
                <button type="submit" name="register">register !</button>
            </li>
        </ul>
    </form>
</body>

</html> 