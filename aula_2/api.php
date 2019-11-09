	<?php

$res = file_get_contents('https://gen-net.herokuapp.com/api/users');
$lista = json_decode($res, true);

class IteradorOrdemAlfabetica implements Iterator
{
	private $lista;
	private $currentIndex;

	public function __construct($lista, $chave, $ordem)
	{
		$this->lista = $lista;
		
		usort($this->lista, function($a, $b) use ($chave, $ordem) {
			if ($ordem) {
				return $a[$chave] > $b[$chave];
			} else {
				return $a[$chave] < $b[$chave];
			}
		});
	}

	public function rewind()
	{
		$this->currentIndex = 0;
	}

	public function current()
	{
		return $this->lista[$this->currentIndex];
	}

	public function key()
	{
		return $this->currentIndex;
	}

	public function next()
	{
		$this->currentIndex += 1;
	}

	public function valid()
	{
		return $this->currentIndex < count($this->lista);
	}
}

$obj = new IteradorOrdemAlfabetica($lista, 'name', true);

foreach($obj as $i => $k)
{
	echo $i . "=>" . $k;
}