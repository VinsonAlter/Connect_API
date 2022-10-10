<?php

    // checking connection to mitsubishi api via curl

    $ch = curl_init("https://qa-interface.mitsubishi-motors.co.id/qa-api/DMSData/workorder/Read");

    $query = json_encode((object) []);

    $_POST = (array)json_decode(file_get_contents('php://input'));

    $headers = array(

        'Authorization: Bearer ' . $_POST['token'],

        'Content-Type: application/json',

        'Accept: application/json'

    );

    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($ch);

    if($e = curl_error($ch)){

        echo $e;

    }

    else {

        // $json = json_decode($data);

        echo($data);

    }

    curl_close($ch);

?>