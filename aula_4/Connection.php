<?php

$servidor = 'pgsql:host=localhost;dbname=blog';
$usuario = 'postgres';
$senha = '';

try {
	$connection = new PDO($servidor, $usuario, $senha);
	echo 'Conectado';
} catch(PDOException $e){
	echo $e->getMessage();
}