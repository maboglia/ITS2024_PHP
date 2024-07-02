<?php

//include_once './model/Todo.php';
class TodoCtrl {
    
    private $contenitore = [];

    public function addTodo($descrizione) {
        $todo = new Todo($descrizione);
        $this->contenitore[] = $todo;
    }

    function getTodos()  {
       return $this->contenitore; 
    }

    function getTodoById($id) {
        foreach ($this->contenitore as $todo) {
            if ($todo->id == $id){
                return $todo;
            }
        }
    }

}

