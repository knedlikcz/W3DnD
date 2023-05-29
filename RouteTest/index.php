<?php
session_start();

include_once 'function.php';

$routes = include_once 'routes.php';

run($_SERVER['REQUEST_URI'], $routes);

?>