<?php

class Transacao
{
	private $quantidade;

	public function __construct($quantidade)
	{
		$this->quantidade = $quantidade;
	}
}

class Conta
{
	private $saldo;

	public function __construct()
	{
		$this->saldo = 0;
	}

	public function alterar($transacao)
	{
		return new Conta($this->saldo += $transacao->quantidade);
	}
}

const $conta = new Conta();

$conta = $conta->alterar(new Transacao(10.00))
$conta->alterar(new Transacao(-10.00))
