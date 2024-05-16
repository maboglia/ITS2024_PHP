<?php

//variabile introdotta da $

$a = 7;
$b = 8;
$c = $a+$b;

echo $c;

/*
una costante
si definisce con una funzione: define()

*/
define('TITOLO', "Prima Pagina WEB");
//echo TITOLO;
var_dump(__FILE__);
echo substr(__FILE__, -10);

switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}




?>