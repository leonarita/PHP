<!DOCTYPE>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Modificando...</title>
</head>

<body>
	<div>
		<?php
			
			$c=1;

			do {
				echo "$c ";
				$c++;
			} while ($c <= 10)

			$c=10;
			echo "<br/>";

			do {
				echo "$c ";
				$c-=2;
			} while ($c >= 0)

		?>
	</div>
</body>

</html>