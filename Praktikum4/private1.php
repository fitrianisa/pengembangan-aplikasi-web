<?php
session_start();
if (!isset($_SESSION['isAdmin'])) {
    header("Location:http://{$_SERVER['HTTP_HOST']}/paw/1170411100014_FITRI ANISA_Prak4/login.php?page=private1");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Detil 1</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <h1>Biodata Detil 1</h1>
            </div>
            <div class="isi">
                <ul>
                    <li>Nama Panggilan : Fitri</li>
                    <li>Jenis Kelamin : Perempuan</li>
                    <li>Alamat : Jl. Sidingkap Kec.Bangkalan, Kel.Kemayoran</li>
                    <li>Email : <a href="mailto:fanisa632@gmail.com">fanisa632@gmail.com</a></li>
                </ul>
            </div>
            <div class="footer">
                <a class="btn btn-danger" href="logout.php">Logout</a>
                <a class="btn" href="private2.php">Detil 2</a>
                <a href="index.php" class="btn btn-primary">Home</a>
            </div>

        </div>
    </div>
</body>

</html>