<?php

$servidor = 'pgsql:host=localhost;dbname=blog';
$usuario = 'postgres';
$senha = '';

try {
	$connection = new PDO($servidor, $usuario, $senha);
} catch(PDOException $e){
	echo $e->getMessage();
}

class User 
{
	public $id;
	public $name;
	public $age;
	public $email;

	public static function getByEmail($email)
	{
		global $connection;

		$result = $connection->query("SELECT * FROM tb_users WHERE email = '{$email}'");

		$userData = $result->fetch(PDO::FETCH_ASSOC);

		return new User($userData['name'],$userData['age'],$userData['email'], $userData['id']);
	}

	public function saveProfile($id, $foto, $site)
	{
		global $connection;

		return $connection->query("INSERT INTO tb_profile (user_id, foto, site) VALUES ($id, '{$foto}', '{$site}')");
	}

	public static function getCalls($id)
	{

		global $connection;

		$data = $connection->query("SELECT * FROM problems WHERE user_id = " . $id);

		return $data->fetchall(PDO::FETCH_ASSOC);

	}

	public static function saveUser($name, $age, $email, $foto, $site, $developer)
	{

		global $connection;

		if($connection->query("INSERT INTO tb_users (name, email, age) VALUES ('{$name}', '{$email}', $age)")){
			$id = $connection->lastInsertId();
			self::saveProfile($id, $foto, $site);
			echo "Dados cadastrados";
		}
	}

	public function __construct($name, $age, $email, $id=null)
	{
		$this->name = $name;
		$this->email = $email;
		$this->age = $age;
	}
}

# User::saveUser("Falcão", 18, 'guilusa25@gmail.com', 'foto.png', 'guilhermefalcao.com.br');
$results = User::getCalls(39);

foreach($results as $result){
	echo "<b>" . $result['titulo'] . "</b>" . "<br>" . $result['subtitulo'] . "<br><br>" . $result['descricao'] . "<br><br>";
}