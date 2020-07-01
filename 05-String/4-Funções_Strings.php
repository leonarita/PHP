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

            $frase = "Eu vou estudar PHP agora.";
            $cont = str_word_count($frase);
            echo $cont;

        /*    $cont = str_word_count($frase, 1);
            echo $cont;
        */
            echo '<br/>';
            $site = "Curso em Video";
            $vetor = explode(" ", $site);
            print_r ($vetor);

            echo '<br/>';
            $sub = substr($site, 0, 5);
            echo "$sub ";

            echo '<br/>';
            $letra = chr(67);
            echo "A letra de codigo 67 é $letra";
        ?>
    </div>
</body>

</html>