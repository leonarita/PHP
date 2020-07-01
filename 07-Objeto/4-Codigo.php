<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo</title>
</head>

<body>
    <div>
        <pre>
    	<?php

            require_once "4-Classe_Conta.php";

            $p1 = new ContaBanco();
            $p2 = new ContaBanco();

            $p1->abrirConta("CC");
            $p1->setDono("Jubileu");
            $p1->setNumConta(1111);

            $p2->abrirConta("CP");
            $p2->setDono("Creuza");
            $p2->setNumConta(2222);

            $p1->depositar(300);
            $p1->depositar(500);

            $p1->sacar(100);
            $p1->sacar(50);

            $p1->pagarMensal();
            $p1->pagarMensal();

            $p1->fecharConta();
            $p2->fecharConta();

            print_r($p1);
            print_r($p2);

        ?>
        </pre>
    </div>
</body>

</html>