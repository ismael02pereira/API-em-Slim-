<?php

// namespace public\Controller;

use App\Models\User;

require "./bootstrap/bootstrap.php";



    class Controller
    {
        public function UserLogin($request, $response, $args) {

            $data = array();
            $data = $_POST;
           
            $obj = new App\Services\UserService();
            $return = $obj->post($data);
            $return = json_encode($return);
            $response->getBody()->write($return);
            return $response;
        }
        public function UserProfile($request, $response, $args) {
            $return = array();
            // $id = $args['id']; 
            $obj = new \App\Services\UserService();
            $return = $obj->get();
            $return = json_encode($return);
            $response->getBody()->write($return);
            return $response;
        }
    }

?>