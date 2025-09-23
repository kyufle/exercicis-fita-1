<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$m = 10;
		$n = 10;

		echo "<table border='1' cellspacing='0' cellpadding='5'>";
		echo "<tr><td></td>"; 
		for ($j = 1; $j <= $n; $j++) {
		    echo "<td>".$j."</td>";
		}
		echo "</tr>";

		for ($i = 0; $i < $m; $i++) {
		    echo "<tr>";
		    echo "<td>".chr(65+$i)."</td>";
		    for ($j = 1; $j <= $n; $j++) {
		        echo "<td></td>";
		    }
		    echo "</tr>";
		}
		echo "</table>";

		$vaixells = array("fragata","submari","destructor","portaavions");
		$horizontalVertical = array(0,1);
		foreach ($vaixells as $values) {
			// code...
		}
		var_dump($vaixells);
	?>
</body>
</html>

