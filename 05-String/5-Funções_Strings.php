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

            $nome = "Gustavo Guanabara";
            echo "<br/> Seu nome é " . strtolower($nome);
            echo "<br/> Seu nome é " . ucfirst($nome);
            echo "<br/> Seu nome é " . ucwords($nome);

            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP");
            echo "<br/> $frase <br/> A string foi encontrada na posição $pos <br/>";

            $f = "Gosto de estudar Matemática";
            $newf = str_replace("Matemática", "PHP", $f);
            echo $newf;

        ?>
    </div>
</body>

</html>