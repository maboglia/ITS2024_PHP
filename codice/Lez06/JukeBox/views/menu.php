<?php 

    // print_r($menu);

    // die();

    foreach ($menu as $voce) {

        $pagina = $voce['collegamento'];
        $etichetta = $voce['etichetta'];

        echo "<a href='?page={$pagina}' class='etichetta_menu' title='Vai alla pagina {$etichetta}'>{$etichetta}</a> ";
    }
    
?>

<!-- 
<?php foreach ($menu as $etichetta => $pagina) : ?>



    <a href="?page=<?=$pagina?>" class="" title="Vai alla pagina <?=$etichetta?>"><?=$etichetta?></a>


<?php endforeach; ?> -->