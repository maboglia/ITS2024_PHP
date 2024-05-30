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

?>

<h1>Pagina segreta</h1>

<form action="?" method="post">

    <input type="text" name="todo" placeholder="todo">
    <input type="submit" value="Add">

</form>

<?php
    foreach ($_SESSION['todoList'] as $todo) {
        echo ''. $todo .'<br>';
    }

?>