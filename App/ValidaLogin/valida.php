<?php

namespace App\ValidaLogin;

use App\Models\User;

if($_POST){
    $data = array();
    $data = $_POST;
    // var_dump($_POST);
    return User::ValidaLogin($data);
}

?>