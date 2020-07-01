<?php

// A tipagem no php é opcional, pois é dinâmica

//declare("strict_types=1");		//Força tipagem mais forte

function validaNome(string $nome) : bool {
	
	if (empty($nome)) {
		//echo 'O nome não pode ser vazio!'
		setarMensagemErro('O nome não pode ser vazio. Por favor, preencha-o corretament'e);
		//header('location: index.php');
		return false;
	}
	else if (strlen($nome) < 3) {
		setarMensagemErro('O nome precisa ser válido. Por favor, preencha-o corretamente');
		//header('location: index.php');
		return false;
	}

	else if (strlen($nome) > 40) {
		setarMensagemErro('O nome precisa ser válido. Por favor, preencha-o corretamente');
		//header('location: index.php');
		return false;
	}
	return true;
}

function validaNome(string $idade) {
	
	if (!is_numeric($idade)) {
		setarMensagemErro('\nPrecisa ser a idade do RG. Por favor, preencha-o corretamente');
		//header('location: index.php');
		return false;
	}
	return true;
}
