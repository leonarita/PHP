<!DOCTYPE>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Matemáticas</title>
</head>

<body>
    <?php

        $v1 = $_GET["x"];
        $v2 = $_GET["y"];

        /*  abs() : Retorna o valor absoluto de um número.
             pow() : Calcula uma potência.
             sqrt() : Calcula a raiz quadrada de um número.
             round() : Arredonda valores.
             intval() : Trunca um número. Retorna a parte inteira de um valor.
             number_format() : Formata um número Real.                           */        

        echo "<h2>Valores recebidos: $v1 e $v2 </h2>";

        echo "O valor absoluto de $v2 é ". abs($v2);
        echo "<br/>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);
        echo "<br/>A raiz de $v1 é ". sqrt($v1);
        echo "<br/>O valor de $v2 arredondado é ". round($v2);      //ceil  floor
        echo "<br/>A parte inteira de $v2 é ". intval($v2);
        echo "<br/>O valor de $v1 em moeda é R$". number_format($v1, 2, ",", ".");
    ?>
</body>

</html>