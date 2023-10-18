<?php
require "koneksi.php";
    
$authorizationNumberDB = $name = $idNumber = $birth = $employment = ''; // Inisialisasi variabel

if (isset($_POST["find-trainer"])) {
    $authorizationNumber = $_POST["find-trainer"];

    $query = "SELECT * FROM employment WHERE authorization_number = '$authorizationNumber'";
    $result = $conn->query($query);

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $authorizationNumberDB = $row['authorization_number'];
            $name = $row['employment_name'];
            $idNumber = $row['id_number'];
            $birth = $row['date_birth'];
            $employment = $row['date_employ'];
        }
    }
}


?>