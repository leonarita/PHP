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

				$v = array ("A", "J", "M", "K", "X");
				print_r($v);

				echo "<br/>";
				var_dump($v);

				echo "<br/>";
				echo "O vetor tem " . count($v) . " elementos.";

				echo "<br/>";
				array_push($v, "O");	//$v[] = "R";
				echo "<br/>";
				print_r($v);

				array_pop($v);
				echo "<br/>";
				print_r($v);

				array_shift($v);
				echo "<br/>";
				print_r($v);

				sort($v);
				echo "<br/>";
				print_r($v);

				asort($v);
				echo "<br/>";
				print_r($v);

				rsort($v);
				echo "<br/>";
				print_r($v);

				krsort($v);
				echo "<br/>";
				print_r($v);

			?>
		</pre>
	</div>
</body>

</html>