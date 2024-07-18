<?php

require_once './functions.php';


$requestMethod = $_SERVER['REQUEST_METHOD'];

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Method:GET');


if ($requestMethod == 'GET'){

    echo getLibri();

} else {

    $data = [
        'status'=> 405,
        'message' => $requestMethod . ' Method Not Allowed' 
    ];

    header('HTTP/1.0 405 Method Not Allowed');
    echo json_encode($data);

}


//var_dump($requestMethod);

//print_r(getLibri());
