<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once 'vendor/autoload.php';

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration([ __DIR__ . '/src' ], $isDevMode);

$configConn = new \Doctrine\DBAL\Configuration();

$connectionParams = [
	'dbname' => 'loja',
	'user' => 'postgres',
	'password' => '',
	'host' => 'localhost',
	'driver' => 'pdo_pgsql'
];

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $configConn);

$entityManager = EntityManager::create($conn, $config);