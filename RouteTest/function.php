<?php
$response = $_SESSION['response'];
function run(string $url, array $routes): void {
    $uri = parse_url($url);
    $path = $uri['path'];
    if (false === array_key_exists($path, $routes)) {
        //before defaulting to 404, check https://www.dnd5eapi.co/ for a match
        $url = 'https://www.dnd5eapi.co/api' . $path;
        try {
            $response = file_get_contents($url);
            $_SESSION['response'] = $response;
            $path = $response;
        } catch (Exception $e) {
            //if no match, default to 404
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