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

            require_once "1-Classe_Pessoa.php";
            require_once "1-Classe_Livro.php";

            $p[0] = new Pessoa ("Pedro", 22, "M");
            $p[1] = new Pessoa ("Maria", 19, "F");
            
            $l[0] = new Livro ("PHP Básico", "José da Silva", 300, $p[0]);
            $l[1] = new Livro ("POO com PHP", "Maria de Souza", 500, $p[0]);
            $l[2] = new Livro ("PHP Avançado", "Ana Paula", 800, $p[1]);

            for ($i=0; $i<=2; $i++){

            //    print_r($l[$i]);
                $l[$i]->detalhes();
            }

        ?>
        </pre>
    </div>
</body>

</html>