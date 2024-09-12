<?php


$logout = $_POST['logout'] ?? '';

if ($logout == '123456'){
    session_unset();
}

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username == 'mauro' && $password == 'admin'){
    $_SESSION['user_logged'] = $username;
    $_SESSION['logged'] = true;
}

