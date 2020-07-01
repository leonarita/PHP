<?php

	$salario = 1567.76;
	$ajuste = 0;

	function AjustarSalario ($sal, &$valor) {
		$valor = 300.00;
		return ($sal + valor);
	}

	$valorFinal = AjustarSalario($salario, $ajuste); echo "O valor ajustado é de: <b>R$ {$valorFinal}</b>, com aumento de <b>R$ {$valor}</b>."