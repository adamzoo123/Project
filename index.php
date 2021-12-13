<?php

include __DIR__ . "/frontend/view/home.php";
include __DIR__ . "/core/application.php";
require_once __DIR__ . '/vendor/autoload.php';


$app = new Application(dirname(__DIR__));


$app->router->get('/', 'home');

$app->router->get('/contact', 'contact');


$app->run();

// echo '<pre>';
// var_dump($app->router->get('/', 'home'));
// echo'</pre>';
// exit;

?>
