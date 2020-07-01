<?php
    
    $arrayNome = ["Valentina", "Fernanda", "Pedro", "Fernanda", "Lucas", "Marcos", "Joana"];

    $nome = filter_input(INPUT_GET, "txtNome", FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_GET, "txtEmail", FILTER_SANITIZE_STRING);
    $FuncionarioCod = filter_input(INPUT_GET, "slFuncionario", FILTER_SANITIZE_NUMBER_INT);
    $funcionario = "";

    if ($FuncionarioCod)
        $funcionario = $arrayNome[($FuncionarioCod - 1)];

    // http://localhost/_CodigosPhp/11-Complemento/6-Get.php?nome=Leo&email=leo@gmail.com
    // $nome = $_POST["nome"];
    // $email = $_POST["email"];
    // echo $nome . "<br>" . $email;

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
        <form method="get">
            <ul>
                <li> Nome: <input type="text" name="txtNome"/> </li>
                <li> Email: <input type="text" name="txtEmail"/> </li>

                <li> Funcionário: 

                    <select name="slFuncionario">
                        <?php
                            for ($i=0; $i < count($arrayNome); $i++) {
                        ?>
                        <option value="<?= ($i + 1); ?>"><?= $arrayNome[$i]; ?></option>
                        <?php
                            }
                        ?>
                    </select> 
                </li>
                
                <li> <input type="submit" name="btnSubmit" value="Cadastrar"> <a href="http://localhost/_CodigosPhp/11-Complemento/6-Get.php">Atualizar</a> </li>
            </ul>
        </form>

        <br> <hr> <hr>

        <p> Nome: <?= $nome; ?> </p>
        <p> Email: <?= $mail; ?> </p>
        <p> Funcionário: <?= $funcionario; ?> </p>
        
    </body>

</html>