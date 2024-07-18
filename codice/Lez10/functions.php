<?php

require_once './config.php';

function testConnessione(){
    global $connessione;
    var_dump($connessione);
}

function getLibri(){
    global $connessione;
    $query = 'SELECT * FROM libri';

    $result = mysqli_query($connessione, $query);

    if($result){

        //la query è andata a buon fine

       if (mysqli_num_rows($result) > 0 ){
        //ci sono libri
        $res = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $data = [
            'status'=> 200,
            'message' => 'Book list fetched succesfully',
            'data' => $res 
        ];

        header('HTTP/1.0 200 Book list fetched succesfully');
        return json_encode($data);

       } else {
        $data = [
            'status'=> 404,
            'message' => 'Resource Not Found' 
        ];
    
        header('HTTP/1.0 404 Resource Not Found');
        return json_encode($data);
       }
        


    } else {
        $data = [
            'status'=> 500,
            'message' => 'Internal Server Error' 
        ];
    
        header('HTTP/1.0 500 Internal Server Error');
        return json_encode($data);
    }





}





