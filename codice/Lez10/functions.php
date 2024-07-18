<?php

require_once './config.php';

function testConnessione(){
    global $connessione;
    var_dump($connessione);
}

function errore($stato, $messaggio){
    $data = [
        'status'=> $stato,
        'message' => $messaggio 
    ];

    header("HTTP/1.0 {$stato} {$messaggio}" );
    return $data;
}

function addLibro($libro){

    global $connessione;

    $titolo = mysqli_real_escape_string($connessione, $libro['titolo']);
    $autore = mysqli_real_escape_string($connessione, $libro['autore']);
    $prezzo = mysqli_real_escape_string($connessione, $libro['prezzo']);
    $pagine = mysqli_real_escape_string($connessione, $libro['pagine']);

    if (empty(trim($titolo))){
       return json_encode( errore(422, 'Titolo non corretto'));
    }

    if (empty(trim($autore))){
       return json_encode( errore(422, 'Autore non corretto'));
    }

    $update = "INSERT INTO libri (titolo, pagine, prezzo, autore) VALUES ('$titolo','$pagine','$prezzo','$autore') ";

    $res = mysqli_query($connessione, $update);

    if ($res){
        $data = [
            'status'=> 201,
            'message' => 'Resource created',
        ];

        header('HTTP/1.0 201 OK');
        return json_encode($data);
    } else {
        return json_encode(errore(500, 'non ce l\'ho fatta, scusa'));
    }


    //var_dump($libro);

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

        header('HTTP/1.0 200 OK');
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





