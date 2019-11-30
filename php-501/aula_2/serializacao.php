<?php

$res = file_get_contents('https://gen-net.herokuapp.com/api/users');
$res = json_decode($res, true);

class User
{
	private $id;
	private $name;
	private $email;

	public function __construct($opts)
	{
		$this->id = $opts['id'];
		$this->name = $opts['name'];
		$this->email = $opts['email'];
	}

	public function __sleep()
	{
		return [ 
			'name', 
			'email', 
			'id' 
		];
	}
}

$fn = function($e) {
	return new User($e);
};

$users = array_map($fn, $res);

$user = $users[0];

var_dump($user);
echo '<br>';

$contents = '';

foreach ($users as $u) {
	$contents .= serialize($u) . '\n';
}

file_put_contents('users.txt', $contents);