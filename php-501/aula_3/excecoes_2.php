<?php

class NotFoundException extends Exception
{
	public function __construct($resource, $previous=null)
	{
		$message = $resource . ' not found';
		$statusCode = 404;

		parent::__construct($message, $statusCode, $previous);
	}
}

function findByEmail($email)
{
	try {

		throw new Exception('user not found');

	} catch (Exception $err) {

		throw new NotFoundException('user', $err);

	}
}

try {

	findByEmail('email');

} catch (NotFoundException $err) {

	echo $err->getMessage() . '<br>';
	echo $err->getCode() . '<br>';
	echo $err->getPrevious() . '<br>';
}