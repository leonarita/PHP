<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    
    	function soma ($a, $b) {
    		$s = $a + $b;

    		return $s;
    	}

    	$r = soma(3, 4);
    	echo "<p> A soma vale $r </p>";

    	$x = 9;
    	$y = 10;

    	$r = soma ($x, $y);
    	echo "<p> A soma vale $r </p>";
    ?>
</body>

</html>