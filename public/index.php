<?php
header('Content-Type: application/json');
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
// use Slim\App; 
// 
require_once '../vendor/autoload.php';
// require '../vendor/autoload.php';

$app = AppFactory::create();
// $app = new Slim\App();

?>