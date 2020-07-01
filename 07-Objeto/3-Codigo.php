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

            require_once "3-Classe_Caneta.php";

            $c = new Caneta("BIC", "azul", 0.5);

            print_r($c);
            echo "<br/>";

            $c->setModelo("BIC");
            $c->setPonta(1.2);
            
            print_r($c);
            echo "<br/>";

            print "Eu tenho uma caneta {$c->getModelo()} de ponta {$c->getPonta()}"

        ?>
        </pre>
    </div>
</body>

</html>