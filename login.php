<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php
	require "koneksi.php"
	?>
</head>
<body>
    <h2>Form Login</h2>
    <form action="#" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
	
	<?php
		session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Selanjutnya, Anda perlu melakukan validasi dan perlindungan data jika perlu

    // Query SQL untuk mengambil data pengguna berdasarkan username
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row["password"];

        // Periksa apakah password yang dimasukkan sesuai dengan hash yang ada di database
        if ($password == $storedPassword) {
            // Login sukses
            $_SESSION["username"] = $username;
            header("Location: dashboard.php"); // Redirect ke halaman dashboard atau halaman lain yang sesuai
            exit();
        } else {
            echo "<script>alert('Password salah. Silakan coba lagi.')</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan. Silakan coba lagi atau daftar terlebih dahulu.')</script>";
    }
}
?>

	
	
</body>
</html>
