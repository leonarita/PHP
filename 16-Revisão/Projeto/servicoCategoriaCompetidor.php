<?php

function defineCategoriaCompetidor(string $nome, string $idade) {

	$categorias = [];
	$categorias[] = 'infantil';
	$categorias[] = 'adolescente';
	$categorias[] = 'adulto';

	if (validaNome($nome) && validaIdade($idade)) {

		removerMensagemErro();
		if ($idade>=6 && $idade<=12) {

			for($i=0; $i<=count($categorias); $i++) {
				if ($categorias[$i] == 'infantil') {
					//echo "O narrador " . $nome . " compete na categoria " . $categorias[$i];
					$_SESSION['mensagem-de-succeso'] = "O narrador " . $nome . " compete na categoria " . $categorias[$i];
					header('location: index.php');
					return;
				}
			}
		}
		else if ($idade>=6 && $idade<=12) {

			for($i=0; $i<=count($categorias); $i++) {
				if ($categorias[$i] == 'adolescente') {
					$_SESSION['mensagem-de-succeso'] = "O narrador " . $nome . " compete na categoria adolescente";
					header('location: index.php');
					return;
				}
			}
		}
		else{

			for($i=0; $i<=count($categorias); $i++) {
				if ($categorias[$i] == 'adulto') {
					$_SESSION['mensagem-de-succeso'] = "O narrador " . $nome . " compete na categoria adulto";
					header('location: index.php');
					return;
				}
			}
		}
	}
	else {
		removerMensagemSucesso();
		obterMensagemErro();
	}
}