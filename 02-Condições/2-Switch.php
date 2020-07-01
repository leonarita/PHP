
<!DOCTYPE>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
	<div>
		<?php
			$n = isset ($_GET["num"]) ? $_GET["num"] : 0;
			$o = isset ($_GET["oper"]) ? $_GET["oper"] : 1;

			switch ($o) {

				case 1:
					$r = $n * 2;
					break;

				case 2:
					$r = $n * $n * $n;
					break;

				case 3:
					$r = sqrt($n);
					break;
			}

			echo "O resultado da operação solicitada foi <span class='foco'>$r</span>";
		?>

		<a href="2-Form.html">Voltar<a>
	</div>
</body>

</html>