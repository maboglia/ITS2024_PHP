<?php

$pokemon_pics = file('https://raw.githubusercontent.com/maboglia/ProgrammingResources/master/tabelle/games/pokemon_pics.csv');

$pokemon_array = [
    ["nome"=>"Bulbasaur",
    "img" => "http://-------------"   ], 
];

$pokemon_array_scalare = [
    
] ;

foreach ($pokemon_pics as $riga) {
     $parole = explode(",", $riga);
     $pokemon_array_scalare[] =  [$parole[0], $parole[1]]; 
}

$immagini = [
    'https://img.pokemondb.net/artwork/avif/charizard.avif',
    'https://img.pokemondb.net/artwork/avif/charizard-mega-x.avif',
    'https://img.pokemondb.net/sprites/home/normal/nidoqueen.png',
];



if (!isset($_SESSION['$contatore'])) 
    $_SESSION['$contatore'] = 0;

// if (isset($_SESSION['$contatore'])){
//     //$contatore = $_SESSION['$contatore'];
//     echo "sessione ok";
//     //echo $contatore;
// } else{
//     //è la prima volta che accedi
//     $_SESSION['$contatore'] = 0;
//     //$contatore = $_SESSION['$contatore'];
//     echo "sessione KO";
// }



if ( isset($_POST['azione'])  ) {

    if ($_POST['azione'] == 'incrementa')
        incrementa();
    if ($_POST['azione'] == 'decrementa')
        decrementa();
    
}


function incrementa() {
    global $pokemon_array_scalare;
    if($_SESSION['$contatore'] >= count($pokemon_array_scalare)-1 ){
        $_SESSION['$contatore'] = 0;
    } else {
        $_SESSION['$contatore']++;
    }
}

function decrementa() {
    global $pokemon_array_scalare;
    if($_SESSION['$contatore'] <= 0 ){
        $_SESSION['$contatore'] = count($pokemon_array_scalare)-1;
    } else {
        $_SESSION['$contatore']--;
    }
}
// incrementa();
// incrementa();
// incrementa();
// decrementa();
// incrementa();


?>

<form action="" method="post">
    <input type="hidden" name="azione" value="incrementa">
    <button>+</button>
</form>

<form action="" method="post">
    <input type="hidden" name="azione" value="decrementa">
    <button>-</button>
</form>


<?php

$num = $_SESSION['$contatore'];
$foto = $pokemon_array_scalare[$num][0];
$nomePokemon = $pokemon_array_scalare[$num][1];

?>

<h3><?=$nomePokemon?></h3>
<div class="fotocopertina">
    

    <img src="<?=$foto?>" alt="" class="foto">

</div>
