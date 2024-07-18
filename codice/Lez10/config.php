<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB_NAME', 'webdev');

$connessione = mysqli_connect(HOST, USER, PASS, DB_NAME);

if ($connessione){
    //echo 'SEI CONNESSO';
} else {
    echo 'NON SEI CONNESSO PERCHE\' ' . mysqli_error($connessione);
}


?>