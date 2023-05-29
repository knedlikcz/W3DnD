<?php

require_once("login.php");
require_once("loginManager.php");

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if (empty($username) || empty($password) || empty($email)) {
    echo "Username or password or email is empty";
    header('Location: /');
}
if (SingletonConnection() === null) {
    echo "Connection failed";
    header('Location: /');
}
register($username, $password, $email);
header('Location: /')
?>