<?php

class Pessoa
{
	public $nome;
	public $sobrenome;
	public $dataNascimento;
	public $sexo;

	public function nomeCompleto(): string
	{
		return "{$this->nome} {$this->sobrenome}";
	}
}

class Funcionario extends Pessoa
{
	public $cargo;
	public $setor;
}

$f = new Funcionario();

// Atributos de Pessoa
$f->nome = 'Lucas';
$f->sobrenome = 'Ricciardi de Salles';

// Atributos de Funcionário
$f->cargo = 'Desenvolvedor';
$f->setor = 'Desenvolvimento';

echo $f->nomeCompleto();