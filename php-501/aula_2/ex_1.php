<?php

// ##########################################################3
// # Adicionais
// ##########################################################3

class Adicional
{
	abstract public function getValor();
}

class Dicidio extends Adicional
{

}

class Bonus extends Adicional
{

}

class HorasExtras extends Adicional
{

}

class Comissao extends Adicional
{

}

// ##########################################################3
// # Funcionários
// ##########################################################3

class Funcionario
{
	private string $nome;
	private string $rg;
	private double $salario;

	private Array $adicionais;

	private function calcularTotal($total, $adicional)
	{
		return $total + $adicional->getValor();
	}

	public function calcularSalario(): double
	{	
		$totalAdicional = 0;

		foreach ($this->adicionais as $adicional) {
			$totalAdicional += $adicional->getValor();
		}

		return $this->salario + $totalAdicional;
	}
}

class Vendedor extends Funcionario
{

}

class VendedorJunior extends Vendedor
{

}

class VendedorPleno extends Vendedor
{

}

class Administrativo extends Funcionario
{

}

