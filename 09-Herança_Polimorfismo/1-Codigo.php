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

            require_once "1-Classe_Pessoa.php";
            require_once "1-Classe_Aluno.php";
            require_once "1-Classe_Professor.php";
            require_once "1-Classe_Funcionario.php";
            require_once "1-Classe_Visitante.php";
            require_once "1-Classe_Bolsista.php";

            $p1 = new Visitante();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome("Pedro");
            $p2->setNome("Maria");
            $p3->setNome("Claudio");
            $p4->setNome("Fabiana");

            $p1->setSexo("M");
            $p2->setSexo("F");
            $p3->setSexo("M");
            $p4->setSexo("F");

            $p2->setCurso("Informática");
            $p3->setSalario(2500.00);
            $p4->setSetor("Estoque");

            $p3->receberAumento(500.20);
            $p4->mudarTrabalho();

            $p2->pagarMensalidade();
            $p2->cancelarMatricula();

            $p5 = new Bolsista();

            $p5->setNome("Jubileu");
            $p5->setMatr(123);
            $p5->setBolsa(12.5);
            $p5->setCurso("Administração");
            $p5->setIdade(17);

            $p5->pagarMensalidade();

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
            print_r($p5);

        ?>
        </pre>
    </div>
</body>

</html>