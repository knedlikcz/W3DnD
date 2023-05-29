<?php
include_once 'loginManager.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)) {
    echo "Username or password is empty";
    header('Location: /');
}
if (SingletonConnection() === null) {
    echo "Connection failed";
    header('Location: /');
}
login($username, $password);
header('Location: /')
?>