<?php

    $ch = curl_init("https://qa-interface.mitsubishi-motors.co.id/qa-Auth/token");

    // $url = "https://qa-interface.mitsubishi-motors.co.id/qa-Auth/token";

    $headers = array(

        'content-type: application/x-www-form-urlencoded'

    );

    $body = array(

        'username' => 'BABM@dms.com',

        'password' => 'test123',

        'dealercode' => 'mks',

        'clientId' => '5734048f-3afc-4f3b-beb6-fdeeb9d46db9'

    );

    // $query = json_encode((object) []);

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // http_build_query() generates a URL encoded query strings from the associative (or indexed) array provided

    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($body));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($ch);

    if($e = curl_error($ch)){

        echo $e;

    }

    else {

        echo($data);

        // var_dump($data);

        // return $data;

    }

    curl_close($ch);

?>