<?php

namespace Calculadora\Interfaces;


interface ICalculadora
{
	public function somar(float ...$valores): float;
	public function subtrair(float ...$valores): float;
}