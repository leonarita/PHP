<?php

	function AbrirConexao () {
		$conection = new PDO("mysql=localhost; dbname=teste; charset=utf8", 'root', '');
		return $conection;
	}

	try {
		AbrirConexao();
	}
	catch (Exception $ex) {
		echo "<b>Mensagem: </b>" . $ex->getMessage() . "<br>" . "<b>Linha: </b>" . $ex->getLine() . "<br>" . "<b>Arquivo: </b>" . $ex->getFile() . "<br>"
	}
	catch (PDOException $ex) {
		echo "<b>Mensagem: </b>" . $ex->getMessage() . "<br>" . "<b>Linha: </b>" . $ex->getLine() . "<br>" . "<b>Arquivo: </b>" . $ex->getFile() . "<br>"
	}
