<?php
session_start();
unset($_SESSION['isAdmin']);
header("Location:http://{$_SERVER['HTTP_HOST']}/paw/1170411100014_FITRI ANISA_Prak4/index.php");
