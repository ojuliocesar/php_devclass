<?php

$page = filter_input(INPUT_GET, 'page', FILTER_UNSAFE_RAW);

$pages = $_GET['page'];

if ($pages && $page && file_exists("pages/{$page}.php")): ?>
    <a href='/' class='btn btn-primary main-button'>Retornar a Home</a>
<?php  endif  ?>