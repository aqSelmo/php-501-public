<?php

require('../models/user.php');

$email = $_GET['email'];

$user = User::findByEmail($email);

$html = <<<HTML
<html>
<body>
	<ul>
		<li>Nome: $user->name</li>
		<li>Email: $user->email</li>
		<li>Idade: $user->age</li>
	</ul>
</body>
</html>
HTML;

echo $html;