<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>fita 1 - Ruth Romero Carretero</title>
	<style>
		.footer {
			background-color: blueviolet;
		 	width: 100%;
		    height: 3em;
		    position:absolute;
		    bottom: 0;
		    left: 0;
		    padding-top: 30px;
		    text-align: center;
		}
		table {
			border-collapse: collapse;
			margin-top: 20px;
		}
		td {
			text-align: center;
			padding: 3px;
			border: 1px solid black;
		}
	</style>
</head>
<body>

<h1>holis</h1>

<?php
	echo "això està fet amb PHP";

	// ---- TABLA EJERCICIO 1 ----
	echo "<h2>Exercici 1</h2>";
	echo "<table>";
	echo "<tr>";
	for ($n = 0; $n <= 10; $n++) { 
		echo "<td>".$n."</td>";
	}
	echo "</tr>";

	echo "<tr>";
	for ($i = 65; $i <= 90; $i++) { 
		$letra = chr($i);
		echo "<td>".$letra."</td>";
	}
	echo "</tr>";
	echo "</table>";

	echo "<h2>Exercici 3</h2>";
	echo "<table>";
	$n = 7;
	$m = 5;

	for ($i = 0; $i <= $n; $i++) {
	    echo "<tr>";
	    for ($j = 0; $j <= $m; $j++) {
	        echo "<td>" . ($i + $j) . "</td>";
	    }
	    echo "</tr>";
	}
	echo "</table>";
?>
<?php
	echo "<h2>Exercici 4</h2>";
	echo "<table>";
	echo "<tr><td></td>";
	for ($j=1; $j<=$n; $j++) {
	    echo "<td>".$j."</td>";
	}
	echo "</tr>";

	for ($i=0; $i<$m; $i++) {
	    echo "<tr>";
	    echo "<td>".chr(65+$i)."</td>";
	    for ($j=1; $j<=$n; $j++) {
	        echo "<td></td>";
	    }
	    echo "</tr>";
	}

	echo "</table>";
?>


<div class="footer">Footer</div>

</body>
</html>
