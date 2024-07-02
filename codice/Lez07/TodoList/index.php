<?php
    include_once './model/Todo.php';
    include_once './controller/TodoCtrl.php';
    session_start();
    //sunset($_SESSION['controller']);
    //  if (isset($_SESSION['controller'])){
    //      echo "c'è";
    //      //var_dump($_SESSION['controller']);
    //  } else {
    //      echo "NON c'è";
    //      $controller = new TodoCtrl();
    //      $_SESSION['controller']  = $controller;

    //  }
    // $controller = $_SESSION['controller'];

    if (isset($_POST['svuota'])){
        unset($_SESSION['controller']);
    }

    $controller = $_SESSION['controller'] ?? $_SESSION['controller'] = new TodoCtrl();
    $desc = $_POST['descrizione'] ?? '';

    if (!empty($desc)){
        $controller->addTodo($desc);
    }
    
    $todos = $controller->getTodos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <h1>Add todo</h1>
    <?php include './view/form.html'; ?>
    
    <h2>Lista di cose da fare</h2>
    <?php include './view/table.php'; ?>

    </div>
    <?=Todo::counter();?>

</body>
</html>