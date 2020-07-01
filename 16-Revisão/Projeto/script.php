<?php

include "servicoMensagemSessao.php";
include "servicoValidacao.php";
include "servicoCategoriaCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);
//is_string($nome);

defineCategoriaCompetidor($nome, $idade);
header('location: index.php');

