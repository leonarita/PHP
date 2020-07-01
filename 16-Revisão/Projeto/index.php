<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário de Inscrição</title>
    </head>

    <body>

        <p> FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES </p>

        <form action="script.php" method="post">
            <?php
                //$mensagemSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
                $mensagemSucesso = setarMensagemSucesso();

                if(!empty($mensagemSucesso)) {
                    echo $mensagemSucesso;
                }

                //$mensagemErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
                $mensagemSucesso = setarMensagemErro();

                if(!empty($mensagemErro)) {
                    echo $mensagemErro;
                }
            ?>

            <p> Seu nome: <input type="text" name="nome"></p>
            <p> Sua idade: <input type="text" name="idade"></p>
            <p><input type="submit"> Cadastrar </p>
        </form>
    </body>

</html>