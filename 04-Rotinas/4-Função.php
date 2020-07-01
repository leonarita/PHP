<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo</title>
</head>

<body>
    <div>
    	<?php
        //  require "funcs.php";        ->  interrompe ao ver erro
            include "funcs.php";    //  ->  prossegue ao ver erro

            echo "<h1> Testando novas funções! </h1";

            ola();
            mostraValor(4);

            echo "<h2> Finalizando programa... </h2>";
        ?>
    </div>
</body>

</html>