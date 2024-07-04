<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>h1 {color:red; font-size:15em;}
</style>
</head>
<body>
    
<h1 id="contatore"></h1>

<h2>Stringhe</h2>

Esercizio 51: Lunghezza di una Stringa
Scrivi una funzione che accetta una stringa e restituisce la sua lunghezza.
Simone Ferretti
09:14
<code>

    
    function stringLen($string)
    {
        return strlen($string);
    }
    
    echo stringLen('ciao');
    
</code>

Esercizio 55: Contare le Parole in una Stringa
Scrivi una funzione che accetta una stringa e conta il numero di parole in essa.
Vincenzo Bonura
09:22

<code>

    function countWords($string){
        return str_word_count($string);
    }
    
    $string = "Scrivi una funzione che accetta una stringa e conta il numero di parole in essa";
    
    echo countWords($string);

    <!-- Vincenzo Bonura
09:23 -->
function countWords($string){
    $words = explode(" ", $string);
    return count($words);
}
<!-- Vincenzo Bonura
09:24 -->
function countWords($string){
    for($i = 0; $i < strlen($string); $i++){
        if($string[$i] == " "){
            $count++;
        }
    }
    return $count;
}

</code>
    
<h2>Date</h2>
<code>
Esercizio 41: Data e Ora Corrente
Scrivi uno script che stampa la data e l'ora corrente nel formato `Y-m-d H:i:s`.
Ambra Duca
09:36
<?php
echo "Date and current time is " . date('Y-m-d H:i:s');
?>
</code>

<code>

Ambra Duca
09:40
<?php
function differenzaDate($date1, $date2) {
    $dateTime1 = new DateTime($date1);
    $dateTime2 = new DateTime($date2);
    $$difference = $dateTime1->diff($dateTime2);
    return $difference->days;
}

$date1 = '2024-05-27';
$date2 = '2024-06-10';

echo "Difference in days between  " . $date1 . " and " . $date2 . " is " . differenzaDate( $date1, $date2 );
?>
</code>

<code>

Stefano Cherio
09:43
<?php

$date1 = new DateTime("2011-03-24");
$date2 = new DateTime("2024-06-26");
$interval = $date1->diff($date2);

echo "Differenza: " . $interval->y . " anni, " . $interval->m . " mesi, " . $interval->d . " giorni.";

</code>

<h2>Array</h2>

<?php
//simone
// function removeDupes($arr)
// {
//     $found = [];
//     foreach ($arr as $el) {
//         if (isset($found[$el])) {
//         } else {
//             $found[$el] = $el;
//         }
//     }

//     var_dump($found);
// }

// removeDupes([1, 1, 3, 4, 1, 1, 1, 2, 3, 4, 1, 3, 4, 1, 3, 4, 1, 5, 6]);


//////////////////////////////bonura

function distinct($list){
    $ret = [];
    for($i = 0; $i < count($list); $i++){
        if(!array_search($list[$i], $ret)){
            $ret[] = $list[$i];
        }
    }
    return $ret;
}

$list = [1,2,3,2,4,3,5,4,5,6,7,8,6,7,5,4,3,2,1,9,0,5,9,7,8];

print_r(distinct($list));
?>


<script>
    let intervallo = setInterval(aggiorna, 1000)
let counter = 100

function aggiorna(){
  counter -= 1
  
  document.getElementById('contatore').textContent = counter
}
</script>
</body>
</html>