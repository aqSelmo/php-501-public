<?php

use Curso\Loja\Entidades\Produto;

$produtoRepository = $entityManager->getRepository(Produto::class);

$produtos = $produtoRepository->findAll();

$carrinho = new Carrinho();

$carrinho->setDataVenda(new \DateTime('now'));

foreach($produtos as $p) {
    $carrinho = addItem($p, 2);
}