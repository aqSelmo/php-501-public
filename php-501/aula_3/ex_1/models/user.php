<?php


class User
{

	private $db = '../controllers/users.txt';

	public $name;
	public $email;
	public $age;
	public $password;

	public static function findByEmail($email)
	{
		$res = file_get_contents('../controllers/users.txt');

		foreach (explode('\n', $res) as $c)
		{
			$user = unserialize($c);

			if ($user && $user->email == $email) 
			{
				return $user;
			}
		}

		return null;
	}

	public function __construct($name, $email, $age, $password)
	{
		$this->name = $name;
		$this->email = $email;
		$this->age = $age;
		$this->password = $password;
	}

	public function save()
	{
		$res = file_get_contents($this->db);

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

		file_put_contents($this->db, $contents);
	}
}