<?php

include("config.php");

$username = $_POST['username'];
$password = $_POST['password'];

checkLogin($username, $password);