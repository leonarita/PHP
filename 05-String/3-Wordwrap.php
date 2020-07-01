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

            $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap.";
            $r = wordwrap ($t);
            echo $r;

            echo '<br/><br/>';
            $r = wordwrap ($t, 8);
            echo $r;

            echo '<br/><br/>';
            $r = wordwrap ($t, 20);
            echo $r;

            echo '<br/><br/>';
            $r = wordwrap ($t, 20, "<br/>");
            echo $r;

            echo '<br/><br/>';
            $r = wordwrap ($t, 5, "<br/>", false);
            echo $r;
        ?>
    </div>
</body>

</html>