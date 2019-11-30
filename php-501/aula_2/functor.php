<?php

class Fibonacci
{
	private $cache;

	public function __construct()
	{
		$this->cache = [
			0 => 1,
			1 => 1
		];
	}

	private function f($n)
	{
		if ($n < 1) {
			return 1;
		}

		return $this($n-1) + $this($n-2);
	}

	public function __invoke($n)
	{
		if (!array_key_exists($n, $this->cache)) {
			$this->cache[$n] = $this->f($n);
		}

		return $this->cache[$n];
	}
}

$f = new Fibonacci();

for ($i = 0; $i < 100; $i++) {
	echo $f($i) . '<br>';	
}


