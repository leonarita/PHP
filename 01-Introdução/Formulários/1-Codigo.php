<!DOCTYPE>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculando...</title>
</head>

<body>
	<div>
	    <?php
	    	$valor = $_GET["v"];
	    	echo "A raiz de $valor é " . number_format((float)sqrt($valor), 2);
	    ?>

	    <a href="1-Modelo.html"> Voltar </a>
	</div>
</body>

</html>