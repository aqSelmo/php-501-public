<?php

abstract class AbstractUser
{
	abstract public function getCredits(): float;
}

abstract class AbstractCourse
{
	abstract public function getPrice(): float;
	abstract public function getVacancy(): int;
}

function venderCurso($usuario, $curso)
{
	if ($usuario->getCredits() < $curso->getPrice()) {
		throw new Exception('Saldo insuficiente');
	}

	if ($curso->getVacancy() == 0) {
		throw new Exception('Vagas acabaram');
	}

	echo 'Cadastrou o usuário';

}

$userWith10Credits = new class extends AbstractUser
{
	public function getCredits(): float
	{
		return 10.0;
	}
};

echo $userWith10Credits->getCredits();

$v = [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 ];

usort($v, function($a, $b) {
	if ($a % 2 == 0) {
		return true;
	} else if ($b % 2 == 0) {
		return false;
	} else {
		return $a > $b;
	}
});