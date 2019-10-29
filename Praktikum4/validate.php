<?php
function checkPassword()
{
    $query = new PDO('mysql:HOST=localhost;dbname=myapp', 'root', '');
    $statement = $query->prepare('SELECT * FROM admins WHERE username=:username and password=SHA2(:password,0)');
    $statement->bindValue(':username', $_POST['username']);
    $statement->bindValue(':password', $_POST['password']);
    $statement->execute();
    return $statement->rowCount() > 0;
}
