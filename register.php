<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Form Pendaftaran</h2>
    <form action="proses_register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirm_password">Konfirmasi Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>

        <input type="submit" value="Daftar">
    </form>
</body>
</html>
