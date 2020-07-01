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

			$n = array (3, 5, 8, 2);
			$n[] = 7;
			print_r ($n);

			echo "<br/>";
			$c = range(5, 20, 2);
			print_r ($c);

			echo "<br/>";
			$v = array ( 0=>5, 1=>9, 2=>8, 3=>7 );
			print_r ($v);

			echo "<br/>";
			$v = array ( 3=>5, 1=>9, 0=>8, 7=>7 );
			print_r ($v);

			echo "<br/>";
			$v = array ( "nome"=>"Ana", "idade"=>23, "peso"=>65.2 );
			print_r ($v);

			echo "<br/>";
			foreach ($v as $k => $c) {
				echo "O campo $k possui o conteúdo $c <br/>";
			}

		?>
		</pre>
	</div>
</body>

</html>