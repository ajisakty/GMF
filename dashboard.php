<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        #sidebar {
            width: 150px;
            height: 90vh;
            background-color: #444;
            color: #fff;
            padding: 20px;
            float: left;
        }
        #content {
            margin-left: 220px;
            padding: 20px;
        }
        ul{
            list-style: none;
        }
    </style>
    <?php
    require "koneksi.php" 
    ?>
</head>
<body>
    <div id="header">
        <h1>Dashboard Sederhana</h1>
    </div>
    <div id="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Profil</a></li>
            <li><a href="#">Pesan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </div>
    <div id="content">
        <h2>Selamat datang di dashboard!</h2>
        <p>Selamat datang di dashboard sederhana. Ini adalah contoh dasar, Anda dapat menyesuaikannya sesuai kebutuhan Anda.</p>
    </div>
</body>
</html>
