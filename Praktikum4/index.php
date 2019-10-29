<?php
include "validate.php";
session_start();
if (isset($_POST['login'])) {
    if (checkPassword($_POST['username'], $_POST['password'])) {
        $_SESSION['isAdmin'] = true;
        header("Location:http://{$_SERVER['HTTP_HOST']}/paw/1170411100014_FITRI ANISA_Prak4/index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Biodata</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <div class="picture">
                <img src="assets/Fitri.jpg" alt="Fitritf">
            </div>
            <!-- HEADER -->
            <div class="header">
                <?php //session_start();
                if (!isset($_SESSION['isAdmin'])) : ?>
                    <div class="form-index">
                        <form action="index.php" method="POST">
                            <input class="form-input" type="text" name="username" placeholder="Masukkan Username..."></<input>
                            <input class="form-input" type="password" name="password" placeholder="Masukkan Password..."></<input>
                            <input type="submit" name="login" value="login" class="btn btn-primary form-input"></<input>
                        </form>
                    </div>
                <?php endif; ?>
                <h3>My Biodata</h3>
            </div>

            <!-- ISI -->
            <div class="isi">
                <table>
                    <tr>
                        <td>Nama<br>NIM<br>Program Studi<br>Fakultas<br>Universitas</td>
                        <td>:<br>:<br>:<br>:<br>:<br></td>
                        <td>Fitri Anisa <br>170411100014<br> Teknik Informatika<br>Teknik<br>Trunojoyo Madura</td>
                    </tr>
                </table>
            </div>

            <!-- FOOTER -->
            <div class="footer">
                <?php if (!isset($_SESSION['isAdmin'])) : ?>
                    <a class="btn btn-primary" href="login.php?page=index">Login</a>
                <?php else : ?>
                    <a class="btn btn-danger" href="logout.php">Log Out</a>
                <?php endif; ?>
                <a class="btn" href="private2.php">Detil 2</a><a class="btn" href="private1.php">Detil 1</a>
            </div>
        </div>
    </div>
</body>

</html>