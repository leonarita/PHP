<!DOCTYPE>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Modificando...</title>
</head>

<body>
	<div>
		<?php
			
			for ($i=1; $i <= 10; $i++) { 
				echo "$i ";
			}

			echo "<br/>";

			for ($i=10; $i >= 1; $i--) { 
				echo "$i ";
			}

			echo "<br/>";

			for ($i=1; $i <= 10; $i+=5) { 
				echo "$i ";
			}

			echo "<br/>";

			for ($i=20; $i >= 1; $i-=2) { 
				echo "$i ";
			}

			echo "<br/>";

		?>
	</div>
</body>

</html>