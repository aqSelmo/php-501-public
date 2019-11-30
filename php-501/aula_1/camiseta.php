<?php

class Camiseta
{
	private $preco;
	private $tamanho;
	private $foto;

	static function getById()
	{
		return new Camiseta(10.0, 'GG', null);
	}

	public function __construct($preco, $tamanho, $foto)
	{
		$this->preco = $preco;
		$this->tamanho = $tamanho;
		$this->foto = $foto;
	}

	public function getPreco()
	{
		return $this->preco;
	}

	public function comprar($quantidade)
	{
		echo "Você comprou " . $quantidade . " camisetas";
	}

}

$template = "<ul>";

for ($i = 0; $i < 100; $i++) {

	$camiseta = new Camiseta(10 * $i, 'GG', null);

	$template .= "<li>";
	$template .= "<span>" . $camiseta->getPreco() . "</span>";
	$template .= "<button>Comprar</button>";
	$template .= "</li>";
	$template .= "<br>";
	$template .= "<br>";

}

$template .= "</ul>";


// Comprar camiseta
$camiseta = Camiseta::getById();


// PROIBIDO
// $camiseta->preco = 0;

echo $camiseta->getPreco();

$camiseta->comprar($quantidade);