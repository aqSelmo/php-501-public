<?php

class SingletonPattern
{
	private static $instance = null;
	public $x;

	public function getSingleton()
	{
		if(!self::instance){
			$this->instance = new SingletonPattern(10);
		}

		return self::instance;
	}

	private function __construct($x)
	{
		$this->x = $x;
	}

	private function __clone()
	{}
}