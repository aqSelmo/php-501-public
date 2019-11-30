<?php

class User
{
	const DB = '../db/users.txt';

	private $name;
	private $email;

	public static function getAllUsers()
	{
		$res = file_get_contents(self::DB);

		$users = [];

		foreach (explode('\n', $res) as $c)
		{
			$user = unserialize($c);

			if ($user) 
			{
				$users[] = $user;
			}
		}

		return $users;
	}

	public static function alreadyExists($email)
	{
		foreach (self::getAllUsers() as $u)
		{
			if ($u->email == $email) 
			{
				return true;
			}
		}

		return false;
	}

	public function __construct($name, $email)
	{
		$this->name = $name;
		$this->email = $email;
	}

	public function toJson()
	{
		return [
			'name' => $this->name,
			'email' => $this->email
		];
	}

	public function save()
	{
		$res = file_get_contents(self::DB);

		$users = [];

		foreach (explode('\n', $res) as $c)
		{
			$users[] = unserialize($c);
		}

		$users[] = $this;

		$contents = '';

		foreach ($users as $u) {
			$contents .= serialize($u) . '\n';
		}

		file_put_contents(self::DB, $contents);
	}
}