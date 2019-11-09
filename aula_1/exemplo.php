<?php

class Foo
{
	const X = 10;

	private $y = 20;

	public function f()
	{	
		var_dump(Foo::X);
		var_dump($this);

		echo $this::X;
		echo '<br>';
		echo $this->y;
	}
}

(new Foo())->f();