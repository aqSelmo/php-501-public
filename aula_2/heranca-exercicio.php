<?php
abstract class Funcionario {

	public $salario = 4000;

}

class Vendedor extends Funcionario{

	private $comissao = 0.05;

	public function getVendedor($vendas)
	{
		$this->salario = ((($this->salario * 5/100) * $vendas) + $this->salario);

		return $this->salario;
	}

}

class Administrador extends Funcionario{

	public function getAdministrador($horas)
	{
		$acrescimo = (($this->salario * 0.01) * $horas);

		$this->salario = ($this->salario + $acrescimo);
		return $this->salario;
	}

}

$vendedor = new Vendedor;
$administrador = new Administrador;

$salario1 = $administrador->getAdministrador(3);
$salario2 = $vendedor->getVendedor(20);

echo "<strong>Administrador: </strong>" . "R$" . money_format('%i', $salario1) . "<br>" . "<strong>Vendedor: </strong>" . "R$" . money_format('%i', $salario2);