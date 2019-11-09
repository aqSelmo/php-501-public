<?php

$serial = require ('user.txt');
$lista = [];
foreach ($serial as $key => $value) {
	array_push($lista, array(
		$key => $value
	));
}

class Json 
{

	public $lista;

	public function __construct($lista)
	{
		$this->lista = $lista;
	}
	public function __toString()
	{
		return json_encode($this->lista);
	}
}

$obj = new Json($lista);

