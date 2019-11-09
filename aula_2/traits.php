<?php

$enunciado = <<<HEAD
ESCREVER UMA TRAIT (TRAIT_1) QUE CONTENHA OS MÉTODOS:
- foo()
- bar()
E OUTRA (TRAIT_2) QUE CONTENHA OS METODOS
- qux()
- foo()
E IMPLEMENTAR UMA CLASSE (CLASSE_1) QUE UTILIZE O MÉTODO foo
DA TRAIT2 sob o alias corinthians
HEAD;

trait TRAIT_1
{
	public function foo()
	{
		echo 'foo from TRAIT_1';
	}

	public function bar()
	{
		echo 'bar from TRAIT_1';
	}
}

trait TRAIT_2
{
	public function foo()
	{
		echo 'foo from TRAIT_2';
	}

	public function qux()
	{
		echo 'qux from TRAIT_2';
	}
}

class CLASSE_1
{
	use TRAIT_1, TRAIT_2
	{
		TRAIT_1::foo insteadof TRAIT_2;
		TRAIT_2::foo as corinthians;
	}
}

$c = new CLASSE_1();

$c->foo();
echo '<br>';
$c->corinthians();
echo '<br>';
$c->bar();
echo '<br>';
$c->qux();
echo '<br>';
