<?php

$pagina = 'home';

if (isset($_GET['page'])  &&   !empty($_GET['page'])){
    $pagina = $_GET['page'];     
}

switch ($pagina) {
    case 'gallery':
        include './views/pages/gallery.php';
        break;
    
    default:
        include './views/pages/home.php';
        break;
}










?>