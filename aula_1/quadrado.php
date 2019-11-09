<?php

class Quadrado
{

	private $lado;

	static instancia = null;

	static function getQuadrado($lado)
	{
		if (!Quadrado::instancia) {
			Quadrado::instancia = new Quadrado();
		}

		return Quadrado::instancia;
	}

	private function __construct()
	{
	}

	public function setLado($lado)
	{
		$this->lado = $lado;

		return $this;
	}

	public function getLado()
	{
		return $this->lado;
	}
}
