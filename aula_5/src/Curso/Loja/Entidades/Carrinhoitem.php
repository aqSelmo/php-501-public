<?php
namespace Curso\Loja\Entidades;
/**
*	@Entity
*	@Table(name="tb_carrinho_items")
*/
class CarrinhoItem
{
	/**
	*	@Id
	*	@Column(type="integer")
	*	@GeneratedValue
	*/
	protected $id;

	/**
	*	@ManyToOne(targetEntity="Carrinho", inversedBy="itens")
	*/
	protected $carrinho;

	/**
	*	@ManyToOne(targetEntity="Produto")
	*/
	protected $produto;

	/**
	*	@Column(type="integer")
	*/
	protected $quantidade = 0;

	/**
	*	@Column(type="decimal", precision=10, scale=2)
	*/
	protected $total = 0.0;

	public function getId()
	{
		return $this->id;
	}

	public function setProduto(Produto $produto, int $quantidade) {
		$this->produto = $produto;
		$this->quantidade = $quantidade;
		$this->total = $this->produto->getPreco() * $this->quantidade;
	}

	public function getProduto()
	{
		return $this->produto;
	}

	public function getQuantidade()
	{
		return $this->quantidade;
	}

	public function getTotal()
	{
		return $this->total;
	}
}