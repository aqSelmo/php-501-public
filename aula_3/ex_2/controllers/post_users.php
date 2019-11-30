<?php

require('../services/return_json.php');

require('../models/user.php');


$name = $_POST['name'];
$email = $_POST['email'];

if (User::alreadyExists($email)) {

	echo returnJson([
		'message' => 'email já cadastrado'
	]);

} else {

	$user = new User($name, $email);
	$user->save();

	echo returnJson([
		'user' => $user->toJson()
	]);
}