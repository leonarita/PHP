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

            require_once "2-Classe_Peixe.php";
            require_once "2-Classe_Reptil.php";
            require_once "2-Classe_Mamifero.php";
            require_once "2-Classe_Ave.php";

            require_once "2-ClasseFilha_Canguru.php";
            require_once "2-ClasseFilha_Cachorro.php";
            require_once "2-ClasseFilha_Tartaruga.php";
            require_once "2-ClasseFilha_GoldFish.php";
            require_once "2-ClasseFilha_Arara.php";

            $m = new Mamifero();
            $r = new Reptil();
            $a = new Ave();
            $p = new Peixe();

            $m->setPeso(58.3);

            $m->locomover();
            $r->locomover();
            $a->locomover();
            $p->locomover();
            
            $canguru = new Canguru();
            $cachorro = new Cachorro();
            $tartaruga = new Tartaruga();

            $canguru->locomover();
            $cachorro->locomover();
            $tartaruga->locomover();

            $canguru->emitirSom();
            $cachorro->emitirSom();
            $tartaruga->emitirSom();

        ?>
        </pre>
    </div>
</body>

</html>