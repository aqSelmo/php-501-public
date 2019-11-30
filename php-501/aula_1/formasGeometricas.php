<?php

abstract class FormaGeometrica
{
	public function __construct()
	{

	}
	
	abstract public function area(): double;
}

class Retangulo extends FormaGeometrica
{	
	private $base;
	private $altura;

	public function __construct($base, $altura)
	{
		$this->base = $base;
		$this->altura = $altura;
	}

	public function area(): double
	{
		return $base * $altura;
	}
}

class Quadrado extends Retangulo
{
	public function __construct($lado)
	{
		parent::__construct($lado, $lado);
	}
}

class Circunferencia extends FormaGeometrica
{
	private $raio;

	public function __construct($raio)
	{
		$this->raio = $raio;
	}

	public function area(): double
	{
		return $this->raio * $this->raio * 3.1415;
	}
}

$f = new FormaGeometrica();

function calcularPrecoDoImovel($formaGeometrica) 
{
	return $formaGeometrica->area() * 12.00;
}