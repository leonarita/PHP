
<!DOCTYPE>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
	<div>
		<?php
			$d = isset ($_GET["ds"]) ? $_GET["ds"] : 0;

			switch ($d) {

				case 2:
				case 3:
				case 4:
				case 5:
				case 6:
					echo 'Vamos estudar!';
					break;

				case 7:
				case 8:
					echo 'Vá descansar!';
					break;

				default:
					echo 'Dia da semana inválido!';
					break;
			}
		?>

		<br/>
		<a href="javascript:history.go(-1)">Voltar<a>
	</div>
</body>

</html>