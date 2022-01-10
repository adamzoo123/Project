<?php
require_once __DIR__ . '/vendor/autoload.php';

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


$app->db->applyMigrations();


?>
