<?php

namespace Calculadora\Classes;

use Calculadora\Interfaces\ICalculadora;
use Calculadora\Traits\Operacoes;

require('Interfaces/ICalculadora.php');
require('Traits/Operacoes.php');

abstract class CalculadoraBase implements ICalculadora
{
	use Operacoes;
}