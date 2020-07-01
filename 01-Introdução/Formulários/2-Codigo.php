<!DOCTYPE>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculando...</title>
</head>

<body>
	<div>
	    <?php
	    	$nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não identificado]";
	    	$ano = isset($_GET["ano"]) ? $_GET["ano"] : (int) 0;
	    	$sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]" ;
	    	$idade = date("Y") - $ano;

	    	echo "$nome, cujo sexo é $sexo, possui $idade anos."
	    ?>

	    <a href="2-Modelo.html"> Voltar </a>
	</div>
</body>

</html>