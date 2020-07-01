<?php

	$s = sha1('Olá, mundo');
	echo $s;

	echo '<br>';

	$m = md5("PHP intermediário");
	echo $m;

	echo '<br>';
	echo '<br>';

	$b = base64_encode("Criptografia");
	echo $b . " = ";
	echo base64_decode($b);
?>