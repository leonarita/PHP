// C:\xampp\htdocs\_CodigosPhp

<?php
$n1 = $_GET["a"];
$n2 = $_GET["b"];
$s = $n1 + $n2;
echo "Você digitou $n1 e $n2. A soma vale $s.";

//Ligar o apache no XAMPP; 
//depois digitar: localhost/<módulo>/<nomeCodigo>.php?a=4&b=5	->	localhost/_CodigosPhp/Teste.php?a=4&b=5  (a recebe 4, e b recebe 5)