<!--    localhost/_CodigosPhp/<NomeFile>.php?    -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    
        function teste (&$x) {
            $x += 2;
            echo "<p> O valor de x é $x </p>";
        }

        $a = 3;
        teste($a);
        echo "<p> O valor de a é $a </p>";

    ?>
</body>

</html>