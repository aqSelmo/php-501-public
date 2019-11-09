<?php
class Fibonacci
{
	private $cache;
	private $contador;

	public function f($n)
	{
		if($n < 1){
			return 1;
		}
		while($this->contador >= $n){
			return $this($n+1) + $this($n+2);
			$this->contador =+ 1;
		}
	}

	public function __invoke($n)
	{
		if(!array_key_exists($n, $this->cache)){
			$this->cache[$n = $this->f($n)];
		}
		return $this->f($n);
	}
}

$obj = new Fibonacci;
$result = $obj->f(10);

foreach($result as $value){
	echo $value;
}