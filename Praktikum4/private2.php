<?php
session_start();
if (!isset($_SESSION['isAdmin'])) {
    header("Location:http://{$_SERVER['HTTP_HOST']}/paw/1170411100014_FITRI ANISA_Prak4/login.php?page=private2");
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
    <title>Detil 2</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <h1>Biodata Detil 2</h1>
            </div>
            <div class="isi">
                <p>Riwayat Pendidikan:</p>
                <ul>
                    <li>SDN Kemayoran 3 Bangkalan : 2005-2011</li>
                    <li>SMPN 3 Bangkalan : 2011-2014</li>
                    <li>SMAN 3 Bangkalan : 2014-2017</li>
                    <li>Universitas Trunojoyo Madura : 2017-Sekarang</li>
                </ul>
                <p>Daftar Matakuliah Telah Diambil :</p>
                <ul>
                    <li>Algoritma Pemrograma</li>
                    <li>Logika Informatika</li>
                    <li>Matematika Diskrit</li>        
                    <li>Pendidikan Agama Islam</li>         
                    <li>Pancasila dan Kewarganegaraan</li>      
                    <li>Fisika Informatika</li>         
                    <li>Organisasi Komputer</li>        
                    <li>Dasar Pemrograman Web</li>      
                    <li>Struktur Data</li> 
                    <li>DLL</li>
                </ul>
            </div>
            <div class="footer">
                <a class="btn btn-danger" href="logout.php">Logout</a>
                <a class="btn" href="private1.php">Detil 1</a>
                <a href="index.php" class="btn btn-primary">Home</a>
            </div>

        </div>
    </div>
</body>

</html>