<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sudoku</title>
	<style>
		table {
			border-collapse: collapse;
		}
		td, tr {
			border: solid 1px black;
			padding: 10px;
		}
		.negrita {
			border: solid 3px black;
		}
	</style>
</head>
<body>
	<?php
		echo "<table>";
		
		for ($i=0; $i < 9; $i++) {
			echo "<tr>";
			for ($j=0; $j < 9; $j++){
				
				echo "<td class='negrita'></td>";
			}
		echo "</tr>";
		}
		echo "</table>"
	?>
</body>
</html>