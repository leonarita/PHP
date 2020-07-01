<!DOCTYPE>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Modificando...</title>
</head>

<body>
	<div>
		<pre>

		<?php

			$m = array ( array(6, 4), array(4, 9), array(3, 2) );
			echo "<br/>";
			print_r ($m);
			$m[0][1] = $m[2][0];
			echo "<br/>";
			print_r ($m);

		?>
		</pre>
	</div>
</body>

</html>