<?php

require_once "bootstrap.php";

use Curso\Loja\Entidades\Produto;

$produtos = [
	[ 'nome' => 'TV', 'preco' => 2500 ],
	[ 'nome' => 'Sound bar', 'preco' => 650 ],
	[ 'nome' => 'Suporte TV', 'preco' => 125 ],	
];

foreach ($produtos as $p)
{
	$produto = new Produto();

	$produto->setNome($p['nome']);
	$produto->setPreco($p['preco']);

	$entityManager->persist($produto);
}

$entityManager->flush();

$productRepository = $entityManager->getRepository('Curso\Loja\Entidades\Produto');

$produto = $productRepository->find(2);

echo "Id: {$produto->getId()}\n";
echo "Nome: {$produto->getNome()}\n";
echo "Id: {$produto->getPreco()}\n";

$produtos = $productRepository->findAll();

foreach($produtos as $p):
    echo "Id: {$produto->getId()}\n";
    echo "Nome: {$produto->getNome()}\n";
    echo "Id: {$produto->getPreco()}\n";
endforeach;