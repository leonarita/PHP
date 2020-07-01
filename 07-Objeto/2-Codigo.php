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

            require_once "2-Classe_Caneta.php";

            $c1 = new Caneta;
            $c1->modelo = "BIC Cristal";
            $c1->cor = "Azul";

            echo "<br/><br/>";
            var_dump($c1);

            echo "<br/><br/>";
            $c1->rabiscar();
            
            $c1->tampar();

        ?>
        </pre>
    </div>
</body>

</html>