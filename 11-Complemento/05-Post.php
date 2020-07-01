<?php
    
    $arrayNome = ["Valentina", "Fernanda", "Pedro", "Fernanda", "Lucas", "Marcos", "Joana"];

    $nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_STRING);
    $FuncionarioCod = filter_input(INPUT_POST, "slFuncionario", FILTER_SANITIZE_NUMBER_INT);
    $funcionario = "";

    if ($FuncionarioCod)
        $slFuncionario = $arrayNome[$FuncionarioCod];

    if (isset($_POST["txtNome"])) {
        $nome = $_POST["txtNome"];
    }

    if (isset($_POST["txtEmail"])) {
        $mail = $_POST["txtNome"];
    }

    if (isset($_POST["slFuncionario"])) {
        $funcionario = $arrayNome[$_POST["slFuncionario"]];
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário</title>

        <style>
            ul {
                list-style: none;
            }

            input, select {
                padding: 5px;
                margin-top: 10px;
            }
        </style>

    </head>

    <body>
        <form method="post">
            <ul>
                <li> Nome: <input type="text" name="txtNome"/> </li>
                <li> Email: <input type="text" name="txtEmail"/> </li>

                <li> Funcionário: 

                    <select name="slFuncionario">
                        <?php
                            for ($i=0; $i < count($arrayNome); $i++) {
                        ?>
                        <option value="<?= $i; ?>"><?= $arrayNome[$i]; ?></option>
                        <?php
                            }
                        ?>
                    </select> 
                </li>
                
                <li> <input type="submit" name="btnSubmit" value="Cadastrar"> </li>
            </ul>
        </form>

        <br> <hr> <hr>

        <p> Nome: <?= $nome; ?> </p>
        <p> Email: <?= $mail; ?> </p>
        <p> Funcionário: <?= $funcionario; ?> </p>
        
    </body>

</html>