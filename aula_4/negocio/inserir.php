<?php

abstract class Employee Extends \PDO{

	public $conn;
	public $id;
	public $salario = 1000.00;
	public $bonus;

	public function __construct()
	{
		$servidor = 'pgsql:host=localhost;dbname=blog';
		$usuario = 'postgres';
		$senha = '';

		try {
			$this->conn = new PDO($servidor, $usuario, $senha);
		} catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function saveProfile($conn, $salario)
	{
		$conn->query("INSERT INTO employee (salario) VALUES ($salario)");
		$id = $this->conn->lastInsertId();
		return $id;
	}

}

class Developer extends Employee {

	public static function saveDev($linhas)
	{
		$salario = 1000.00 + (500.00 * $linhas);
		$id = self::saveProfile($salario);
		$this->conn->query("INSERT INTO developer (e_id) VALUES ($id)");
	}

	public static function listDev($id=null)
	{
		if($id){
			$data = $this->conn->query("SELECT b.id, a.salario FROM employee a LEFT JOIN developers b ON a.id = b.e_id WHERE b.id = ". $id);
			return $data->fetch(PDO::FETCH_ASSOC);
		} else {
			$data = $this->conn->query("SELECT b.id, a.salario FROM employee a LEFT JOIN developers b ON a.id = b.e_id");
			return $data->fetch(PDO::FETCH_ASSOC);
		}
	}

}

Developer::saveDev(12);