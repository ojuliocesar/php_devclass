<?php

function load() {
    
    $page = filter_input(INPUT_GET, 'page', FILTER_UNSAFE_RAW);

    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

    if (!file_exists($page)) {
        throw new \Exception("Opa, alguma coisa de errada aconteceu");
    }

    return $page;
}