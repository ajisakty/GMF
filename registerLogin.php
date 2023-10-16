<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php
	require "koneksi.php"
	?>
</head>
<body>
    <h2>Form Pendaftaran</h2>
    <form action="#" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Register">
    </form>
	
	<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validasi data
    if(strlen($password) < 8) {
        echo "Password harus minimal 8 karakter. Silakan coba lagi.";
    } else {
        // Hash password (gunakan bcrypt atau metode hashing yang aman)
		echo "<script>alert('Register Success')</script>";
        // Query SQL untuk menyimpan data pengguna ke database
        $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
        mysqli_query($conn, $query);

        // Redirect ke halaman login atau halaman lain yang sesuai
        header("Location: login.php");
        exit();
    }
}
?>


	
	
	
</body>
</html>
