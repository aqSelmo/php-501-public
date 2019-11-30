<?php

class NomeDaClasse
{
	public $nomeDaPropriedade = 'uma valor padrão';

	public function nomeDoMetodo()
	{
		echo $this->nomeDaPropriedade;
	}
}

$obj = new NomeDaClasse();

$obj->nomeDoMetodo();