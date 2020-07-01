<?php

//throw new Exception("Essa é uma exceção!");

function validarUsuario(array $usuario) {

	if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
		throw new Exception("É necessário preencher todos os campos!");
		
	return true;
}

$usuario = ['codigo' => 1, 'nome' => '', 'idade' => 57];
$status = false;

try {
	$status = validarUsuario($usuario);
}
catch (Exception $e) {
	echo $e->getMessage();
}
finally {
	echo "Status da operação: " . (int)$status;
	die();
}

echo "\n... executando ...\n";

