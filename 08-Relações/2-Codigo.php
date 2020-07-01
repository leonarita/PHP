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

            require_once "2-Classe_Lutador.php";

            $l = array();
            $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 56.0, 14, 2, 3);
            $l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 92.7, 12, 2, 1);
            $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 83.1, 13, 0, 2);
            $l[4] = new Lutador("UFOCobol", "Brasil", 35, 1.70, 119.2, 6, 4, 3);
            $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.91, 105.7, 8, 2, 4);

            for ($i=0; $i<=5; $i++) {
                $l[$i]->apresentar();
                $l[$i]->status();
            }

        ?>
        </pre>
    </div>
</body>

</html>