<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
    require "koneksi.php";
    require "searchProses.php";
    $nameUP = strtoupper($name)
    ?>
</head>

<body>

<div id="header">
        <h1>Dashboard</h1>
    </div>
    <div id="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="#">Beranda</a></li>
          
        </ul>
    </div>
    <div id="content">
    <form method="post">
            <label>Author Number :</label><br>
            <input type="number" name="find-trainer">
            <input type="submit" value="Search">
        </form>
        <label>Authorization Number :</label><br>
        <?php echo '<input type="text" value="' . $authorizationNumberDB . '" readonly><br>' ?>
        <label>Name :</label><br>
        <?php echo '<input type="text" value="' . $nameUP . '" readonly><br>' ?>
        <label>ID Number :</label><br>
        <?php echo '<input type="text" value="' . $idNumber . '" readonly><br>' ?>
        <label>Date Of Birth :</label><br>
        <?php echo '<input type="text" value="' . $birth . '" readonly><br>' ?>
        <label>Date Of Birth :</label><br>
        <?php echo '<input type="text" value="' . $employment . '" readonly><br>' ?>
        </div>
  

       

</body>

</html>
