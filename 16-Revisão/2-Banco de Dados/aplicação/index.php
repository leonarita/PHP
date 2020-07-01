<?php

declare(strict_types=1);

$produto = new Produto();

switch ($_GET['operacao']) {

	case 'list':
		//var_dump($produto->list());

		echo '<h3> Produtos: <h3>';

		foreach ($produto->list() as $value) {
			echo "Id: " . $value['id'] .'<br>Descrição: ' . $value['descricao'] . '<br><br>' ;
		}

		break;

	case 'insert':
		
		$status = $produto->insert('Produto teste');

		if(!$status) {
			echo "Não foi possível inserir...";
			return false;
		}

		echo "Registro inserido com sucesso!";

		break;

	case 'update':
		
		$status = $produto->update('Produto atualizado', 1);

		if(!$status) {
			echo "Não foi possível atualizar...";
			return false;
		}

		echo "Registro atualizado com sucesso!";

		break;

	case 'delete':
		
		$status = $produto->delete(1);

		if(!$status) {
			echo "Não foi possível deletar...";
			return false;
		}

		echo "Registro deletado com sucesso!";

		break;
}