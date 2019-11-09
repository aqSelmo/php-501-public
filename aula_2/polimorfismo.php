<?php

interface Entity
{
	public function init($args);
	public function done($args);
}

class One implements Entity {

	public function init($args)
	{
		$args++;
		return $this->done($args);
	}

	public function done($args)
	{
		for($i = 0;$i < $args;$i++){
			echo $i . "<br>";
		}
	}

}
$obj = new One;
$obj->init(10);