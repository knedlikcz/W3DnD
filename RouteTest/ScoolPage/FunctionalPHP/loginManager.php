<?php
$servername = "127.0.0.1";
$port = "3306";
$username = "root";
$password = "";
$dbname = "login";

function SingletonConnection()
{
    global $servername, $port, $username, $password, $dbname;
    static $conn = null;
    if ($conn === null) {
        $conn = new mysqli($servername, $username, $password, $dbname, $port);
    }
    return $conn;
}

if (SingletonConnection()->connect_error) {
    die("Connection failed: " . SingletonConnection()->connect_error);
}

function hashPassword($password)
{
    $salt = "scoolsalt";
    $password = $password . $salt;
    $password = hash('sha256', $password);
    return $password;
}

function login($username, $password)
{
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = hashPassword('$password')";
    $result = SingletonConnection()->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['role'] = $row['role'];
        header('Location: /');
    } else {
        echo "Wrong username or password";
    }
}

function register($username, $password, $email)
{
    $sql = "INSERT INTO user (username, password, email) VALUES ('$username', hashPassword('$password'), '$email')";
    if (SingletonConnection()->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Location: /');
    } else {
        echo "Error: " . $sql . "<br>" . SingletonConnection()->error;
    }
}

//logout function
function logout()
{
    session_destroy();
    header('Location: /');
}

function isLoggedIn()
{
    if (isset($_SESSION['username'])) {
        return true;
    } else {
        return false;
    }
}
?>