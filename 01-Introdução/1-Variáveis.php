<!--    localhost/_CodigosPhp/1-Introdução/1-Variáveis.php?    -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>

<body>
    <?php
        // Comentário 1
        /* Comentário 2 */
        #  Comentário 3

        // Todas as variáveis no PHP possuem um $ na frente
        $idade = 15;
        $salario = 1500.25;
        $nome = "Gustavo";
        $casado = true;

        // Os comandos ECHO, PRINT e PRINTF servem para gerar saídas na tela.
        echo $nome;
        echo $nome. " tem ". $idade. " anos ";
        echo "<br/>$nome tem $idade anos";

        /* Operadores:  +  -  *  /  %
           Operadores:  <  >  <=  >=  ==  !=  ===
           Operadores:  &&  ||
           Operador Ternário

        $c = $c + 5;      $c += 5;
        $c = $c - $a;     $c -= $a;
        $c = $c + 1;      $c += 1;

        $c = $c + 1;     $c += 1;    $c++;
        $c = $c - 1;     $c -= 1;    $c--;
        */
    ?>
</body>

</html>