<?php

session_start();

setcookie('username', 'mauro', time() + 3600);

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';



?>

