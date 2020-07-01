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

            require_once "2-Classe_Video.php";
            require_once "2-Classe_Gafanhoto.php";
            require_once "2-Classe_Visualizacao.php";

            $v[0] = new Video ("Aula 1 de POO");
            $v[1] = new Video ("Aula 12 de PHP");
            $v[2] = new Video ("Aula 15 de HTML5");

            $g[0] = new Gafanhoto ("Jubileu", 22, "M", "Juba");
            $g[1] = new Gafanhoto ("Creuza", 12, "M", "Creuzita");

            $vis[0] = new Visualizacao ($v[0], $g[0]);
            $vis[1] = new Visualizacao ($v[0], $g[1]);

            $vis[0]->avaliar();
            $vis[1]->avaliarPorc(85);

            print_r($v);
            print_r($g);
            print_r($vis);

        ?>
        </pre>
    </div>
</body>

</html>