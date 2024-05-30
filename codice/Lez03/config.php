<?php
session_start();

if (!isset($_SESSION['loggato'])) {
    header('location:login.html');
}

if (!isset($_SESSION['todoList'])   ){
    $_SESSION['todoList'] = [];
} 

if ( isset($_POST['todo'])){
    $_SESSION['todoList'][] = $_POST['todo'];
}

function checkLogin($username, $password) {
    
    if ($username == 'mauro' && $password == '12345') {
    
        $_SESSION['loggato'] = $username;
        
        header('location:pagina_segreta.php');
    } else {
        session_destroy();
        header('location:login.html');
        //echo 'Mi dispiace non puoi entrare ' . $username;
        
    }


}





?>
