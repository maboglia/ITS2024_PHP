<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'mauro' && $password == '12345') {
    
    $_SESSION['loggato'] = $username;
    
    header('location:pagina_segreta.php');
} else {
    session_destroy();
    header('location:login.html');
    //echo 'Mi dispiace non puoi entrare ' . $username;
    
}