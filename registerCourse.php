<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="style.css" rel="stylesheet" style="text/css"> -->
    <?php
    require "koneksi.php"
        ?>

    <style>
        /* .container-trainer{
        display: flex;
        flex-direction: column;
        align-items: center;
        
    }

    .input-trainer{
    width: 80%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    } */

        .hasil-trainer {
            margin-top: 20px;
        }

        /* .form-trainer {
            max-width: 80%;
            margin: 0 auto;
            background: red;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        } */
    </style>


</head>

<body>
    <form>
        <div class="container-trainer">
            <label>Author Number :</labe><br>
                <div class="input-trainer">
                    <input type="number" id="find-trainer" name="find-trainer">
                    <input type="submit" value="Search">
                </div>
        </div>
    </form>

    <!-- <div class="hasil-trainer">
        <form class="form-trainer">
            <label>Name :</label>
            <input type="text">
        </form>
    </div> -->
    <table border="1">
        <tr>
            <td>Authorization Number </td>
            <td><php>echo $authorizationNumberDB</php></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><php>echo $name</php></td>
        </tr>
        <tr>
            <td>ID Number</td>
            <td><php>echo $idNumber</php></td>
        </tr>
        <tr>
            <td>Date Of Birth</td>
            <td><php>echo $birth</php></td>
        </tr>
        <tr>
            <td>Date Of Employment</td>
            <td><php>echo $employment</php></td>
        </tr>
    </table>


    <?php
    $authorizationNumber = $_POST["find-trainer"];

    $query = "SELECT * FROM employment WHERE authorization_number = '$authorizationNumber'";
    $result = $conn -> query($query);

    if($result){
        while($row = $resukt -> fetch_assoc()){
        $authorizationNumberDB = $row['authorization_number'];
        $name = $row['employment_name'];
        $idNumber = $row['id_number'];
        $birth = $row['date_birth'];
        $employment = $row['date_employ'];
        }
    }
    
    ?>






</body>

</html>