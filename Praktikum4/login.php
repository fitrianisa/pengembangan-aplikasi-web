<?php
session_start();
include "validate.php";

if (isset($_POST['login'])) {
    if (checkPassword($_POST['username'], $_POST['password'])) {
        $_SESSION['isAdmin'] = true;
        header("Location:http://{$_SERVER['HTTP_HOST']}/paw/1170411100014_FITRI ANISA_Prak4/{$_POST['page']}.php");
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
    <title>Login</title>
</head>

<body>
    <div class="login">
        <form method="post" action="login.php">
            <h1>Login</h1>
            <input type="hidden" name="page" value="<?= $_GET['page']; ?>">
            <input type="text" name="username" placeholder="Masukkan Username.." class="email" />
            <input type="password" name="password" placeholder="Masukkan Password.." class="password" />
            <input type="submit" name="login" value="login" class="btn btn-primary">
        </form>
        <p style="text-align:center;">Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>
    </div>
</body>

</html>