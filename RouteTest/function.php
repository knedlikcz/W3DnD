<?php
$response = $_SESSION['response'];
function run(string $url, array $routes): void {
    $uri = parse_url($url);
    $path = $uri['path'];
    if (!array_key_exists($path, $routes)) {
        $urll = 'https://www.dnd5eapi.co/api' . $path;
        try {
            $response = file_get_contents($urll);
            $_SESSION['response'] = $response;
            if($response == false) {
                $path = '/404';
            }
            $response = (string)$response;
            $path = $response;
            $routes = [
                '/' => function() {
                    require_once("ScoolPage/index.php");
                },  
                '/404' => function() {
                    require_once("ScoolPage/404.php");
                },
                $_SESSION['response'] => function() {
                    require_once("ScoolPage/wikiTemplate.php");
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
                '/blog' => function() {
                    require_once("ScoolPage/blog.php");
                },
                'aboutus' => function() {
                    require_once("ScoolPage/aboutus.php");
                },
                '/faq' => function() {
                    require_once("ScoolPage/faq.php");
                }
            ];
        } catch (Exception $e) {
            $path = '/404';
        }
    }
    
    $callback = $routes[$path];
    $params = [];
    if(!empty($uri['query'])) {
        parse_str($uri['query'], $params);
    }
    try {
        $callback($params);
    } catch (Exception $e) {
        $callback();
    }
}

?>