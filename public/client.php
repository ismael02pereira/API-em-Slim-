<?php

    $url = 'http://localhost/API-em-Slim-/public_html/';

    $class = '/user';
    $param = '';

    $response = file_get_contents($url.$class.$param);

    //echo $response;

    //
    //$response = json_decode($response, 1);
    //var_dump($response['data'][1]['email']);