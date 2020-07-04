<?php
	// menghubungkan ke file functions.php
require 'functions.php';

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
                <input type="text" name="username" id="username" required autocomplete="off">
            </li>
            <li>
                <label for="password">password</label>
                <input type="password" name="password" id="password" required autocomplete="off">
            </li>
            <li>
                <button type="submit" name="login">Login !</button>
            </li>
        </ul>
    </form>
</body>

</html> 