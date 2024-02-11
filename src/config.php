<?php
// config.php

require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

$conn = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'port'     => '3306',
    'dbname'   => 'prova',
    'user'     => 'user',
    'password' => 'password',
);

$entityManager = EntityManager::create($conn, $config);


// require_once 'config.php';