<?php

$res = file_get_contents('https://gen-net.herokuapp.com/api/users');
$res = json_decode($res, true);

class User 
{
	private $id;
	private $name;
	private $email;

	public function __construct($lista)
	{
		$this->id = $lista['id'];
		$this->name = $lista['name'];
		$this->email = $lista['email'];
	}
}

$fn = function($res){
	return new User($res);
};

$users = array_map($fn, $res);

$user = $users;

$content = serialize($user);

file_put_contents('user.txt', $content);