<?php

class SingletonPattern
{
	public $x;

	private function __construct($x)
	{
		$this->x = $x;
	}
}