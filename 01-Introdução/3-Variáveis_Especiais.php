<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Especiais</title>
</head>

<body>
    <?php
        /* Colocar um caractere & na frente de uma variável vai criar um ponteiro em PHP. 
           Ela não será uma variável de fato, mas será uma referência à variável original. */
        $x = 3;
        $y = $x;
        $z = &$x;
        
        echo $x;
        echo "<br/>";
        echo $y;
        echo "<br/>";
        echo $z;

        /* Colocar um segundo $ na frente de uma variável também possui um efeito bem peculiar. 
           Ele vai criar uma variável dinamicamente, dependendo do conteúdo da variável original. Essas são as variáveis de variáveis em PHP.

        Com essas linhas, teremos uma variável $nome, como o conteúdo “gustavo” e 
        a linha de baixo vai criar uma variável $gustavo, com o conteúdo professor”. */
        $nome = "gustavo";
        $$nome = "professor";
    ?>
</body>

</html>