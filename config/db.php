<?php

require __DIR__ . '/../vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


    $db_host = $_ENV['DB_HOST'];
    $db_user = $_ENV['DB_USER'];
    $db_pass = $_ENV['DB_PASSWORD'];
    $db_name = $_ENV['DB_NAME'];


?>