<?php

namespace Curso\Loja\Entidades;

/**
*	@Entity 
*	@Table(name="tb_produtos")
*/
class Produto
{
	/**
	*	@Id
	*	@Column(type="integer")
	*	@GeneratedValue
	*/
	protected $id;

	/**
	*	@Column(type="string", length=50)
	*/
	protected $nome;

	/**
	*	@Column(type="decimal", precision=10, scale=2)
	*/
	protected $preco;

	public function getId()
	{
		return $this->id;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getPreco()
	{
		return $this->preco;
	}

	public function setPreco($preco)
	{
		$this->preco = $preco;
	}
}