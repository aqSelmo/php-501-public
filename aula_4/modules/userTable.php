<?php

$servidor = 'pgsql:host=localhost;dbname=blog';
$usuario = 'postgres';
$senha = '';

try {
	$connection = new PDO($servidor, $usuario, $senha);
} catch(PDOException $e){
	echo $e->getMessage();
}

$query = $connection->query("SELECT * FROM tb_users");


while ($u = $query->fetch(PDO::FETCH_ASSOC)){
	echo $u['name'] . '<br>';
}