<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Tabuada de um número</title>
</head>
<body>
	<?php
		$n = 7;
        $m = 1;
        $cont = 10;
	?>
	<h1> Tabuada do número <?php echo $n; ?> </h1>
	<?php
    while ($m <= $cont){
        echo "<h3> $n * $m = ".($n*$m)."</h3>";
        $m++;

    }
	?>	
</body>
</html>