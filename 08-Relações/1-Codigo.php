<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo</title>
</head>

<body>
    <div>
        <pre>
    	<?php

            require_once "1-Classe_ControleRemoto.php";

            $c = new ControleRemoto();

            $c->maisVolume();
            $c->ligar();
            $c->abrirMenu();

        ?>
        </pre>
    </div>
</body>

</html>