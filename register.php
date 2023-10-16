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
        <label for="authorizationNumber">Authorization Number :</label>
        <input type="number" id="authorizationNumber" name="authorizationNumber" required><br><br>

        <label for="name">Name :</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="IDNumber">ID Number :</label>
        <input type="Number" id="IDNumber" name="IDNumber" required><br><br>

        <label for="birth">Date Of Birth :</label>
        <input type="date" id="birth" name="birth" required><br><br>
		
		<label for="employment">Date Of Employment :</label>
        <input type="date" id="birth" name="employment" required><br><br>

        <input type="submit" value="Register">
    </form>
	
	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $authorizationNumber = $_POST["authorizationNumber"];
    $name = $_POST["name"];
    $idNumber = $_POST["IDNumber"];
    $birth = $_POST["birth"];
    $employment = $_POST["employment"];
    
    $formattedBirth = date('Y-m-d', strtotime($birth));
    $formattedEmployment = date('Y-m-d', strtotime($employment));

    // Query SQL untuk menyimpan data pendaftaran ke database
    $sql = "INSERT INTO employment (authorization_number, employment_name, id_number, date_birth, date_employ) VALUES ('$authorizationNumber', '$name', '$idNumber', '$formattedBirth', '$formattedEmployment')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Register Success')</script>";
        // Redirect pengguna ke halaman lain jika perlu
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Tutup koneksi ke database (jika Anda mau)
     mysqli_close($conn);
}
?>


	
	
	
</body>
</html>