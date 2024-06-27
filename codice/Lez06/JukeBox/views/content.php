<?php

$pagina = 'home';

if (isset($_GET['page'])  &&   !empty($_GET['page'])){
    $pagina = $_GET['page'];     
}

switch ($pagina) {
    case 'canzoni':
        $ctrl = new CanzoneCtrl();
        $canzoni = $ctrl->tutteLeCanzoni();
        include './views/pages/canzoni.php';
        break;
    
    default:
        include './views/pages/home.php';
        break;
}










?>