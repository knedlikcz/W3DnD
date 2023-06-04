<?php
return [
    '/' => function() {
        require_once("ScoolPage/index.php");
    },  
    '/404' => function() {
        require_once("ScoolPage/404.php");
    },
    '/wiki' => function() {
        $url = 'https://www.dnd5eapi.co/api';
        $response = file_get_contents($url);
        $_SESSION['response'] = $response;
        require_once("ScoolPage/wikiTemplate.php");
    },
    '/login' => function(array $params = []) {
        require_once("ScoolPage/FunctionalPHP/login.php");
    },
    '/logout' => function() {
        session_destroy();
        
        header('Location: /login?success=1');
    },
    '/register' => function() {
        require_once("ScoolPage/FunctionalPHP/register.php");
    },
    $_SESSION['response'] => function() {
        require_once("ScoolPage/wikiTemplate.php");
    },
    '/blog' => function() {
        require_once("ScoolPage/blog.php");
    },
    '/aboutus' => function() {
        require_once("ScoolPage/aboutus.php");
    },
    '/faq' => function() {
        require_once("ScoolPage/faq.php");
    },
    '/roll' => function() {
        require_once("ScoolPage/diceRoll.php");
    }
];
 
?>