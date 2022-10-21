<?php
  

require "./bootstrap/bootstrap.php";

$app->post('/login', Controller::class . ':UserLogin' );
$app->post('/user-profile', Controller::class . ':UserProfile' );

// $app->post('/login', function ($request, $response, $args) {

//     $data = array();
//     $data = $_POST;
   
//     $obj = new App\Services\UserService();
//     $return = $obj->post($data);
//     $return = json_encode($return);
//     $response->getBody()->write($return);
//     return $response;

// });

// $app->any('/user-profile', function ($request, $response, $args) {
//     $return = array();
//     // $id = $args['id']; 
//     $obj = new \App\Services\UserService();
//     $return = $obj->get();
//     $return = json_encode($return);
//     $response->getBody()->write($return);
//     return $response;
// });


$app->get('/', function ($request, $response, $args) {
	$response->getBody()->write(' Hello ');

	return $response;
});
// $app->add( new Middlewarellogin ());
$app->run();
    