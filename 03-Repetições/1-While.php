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

			while ($c <= 10) {
				echo "$c ";
				$c++;
			}

			$c=10;
			echo "<br/>";

			while ($c >= 0) {
				echo "$c ";
				$c-=2;
			}

		?>
	</div>
</body>

</html>