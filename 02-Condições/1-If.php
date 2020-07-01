<!DOCTYPE>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Modificando...</title>
</head>

<body>
	<div>
		<?php
			$a = isset ($_GET["ano"]) ? $_GET["ano"] : 1900;
			$i = date("Y") - $a;

			echo "Você nasceu em $a e possui $i anos. <br/>";

			if ($i >= 18) {

				$v = "já pode votar";
				$d = "já pode dirigir";
			}
			else {

				$d = "não pode dirigir";

				if ($i>=16)
					$v = "pode votar caso queira";
				else
					$v = "não pode votar";
			}

			echo "Com essa idade, você $v e também $d !";
		?>
	</div>
</body>

</html>