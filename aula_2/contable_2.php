<?php

$palavra = "teste";

class ContadorDeNumerosPares implements Countable
{
	private $texto;

	public function __construct($texto)
	{
		$this->texto = $texto;
	}

	public function count(): int
	{
		$contagem = 0;

		for($i =0;$i <= strlen($this->texto); $i++){
			if(in_array($this->texto[$i], array(
				"a","e","i","o","u"
				))){
				$contagem += 1;
			}
		}

		return $contagem;
	}
}

$contador = new ContadorDeNumerosPares($palavra);

echo count($contador);