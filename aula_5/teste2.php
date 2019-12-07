<?php

use Curso\Loja\Entidades\Produto;

$produtoRepository = $entityManager->getRepository(Produto::class);

$produto = $produtoRepository->find(3);

$entityManager->remove($produto);
$entityManager->flush();