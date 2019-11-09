<?php

$serial = require ('user.txt');

foreach ($serial as $key => $value) {
	echo unserialize($value);
}