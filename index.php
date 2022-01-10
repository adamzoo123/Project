<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once("config.php");
// require_once("backend/view/index.php");

// use \App\Controller\SiteController;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$config = [
    'db' => [
        'dbhost' => $_ENV['DB_DSN'],
        'dbuser' => $_ENV['DB_USER'],
        'dbpassword' => $_ENV['DB_PASSWORD']
    ]
    ];

$app = new \App\Core\Application( __DIR__ , $config);

$app->router->get('/', 'home');
$app->router->get('/contact', 'contact');
$app->router->get('/aboutus', 'aboutus');

$app->router->get('/cp', function(){
    include ( __DIR__ . '/backend/view/index.php');
});

// $app->router->get('/cp', [SiteController::class, 'cp']);


$app->run();

// echo '<pre>';
// var_dump();
// echo'</pre>';
// exit;

?>
