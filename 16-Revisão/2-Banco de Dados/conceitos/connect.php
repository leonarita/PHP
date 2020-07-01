<?php

declare(strict_types=1);

$pdo = null;

try {
	$pdo = new PDO('mysql:host=mysql; dbname=example', 'root', '123456');
}
catch (Exception $e) {
	echo $e->getMessage();
	die();
}

//var_dump($pdo);
return $pdo;


