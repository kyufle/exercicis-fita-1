<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fita 1 - Ruth Romero Carretero</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0 0 4em 0;
    }
   
    table {
      border-collapse: collapse;
      margin: 20px auto;
    }
    td {
      text-align: center;
      padding: 6px 12px;
      border: 1px solid black;
    }
    .footer {
      background-color: blueviolet;
      color: white;
      width: 100%;
      height: 3em;
      position: fixed;
      bottom: 0;
      left: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <h1>Holis</h1>
  <p>Fita 1 - Ruth Romero</p>

  <?php
    echo "Això està fet amb PHP";
    echo "<h2>Exercici 1</h2>";
    echo "<table><tr>";
    for ($n = 0; $n <= 10; $n++) { 
      echo "<td>".$n."</td>";
    }
    echo "</tr></table>";

    echo "<h2>Exercici 2</h2>";
    echo "<table><tr>";
    for ($i = 65; $i <= 90; $i++) { 
      echo "<td>".chr($i)."</td>";
    }
    echo "</tr></table>";

    echo "<h2>Exercici 3</h2>";
    $n = 7;
    $m = 5;
    echo "<table>";
    for ($i = 0; $i <= $n; $i++) {
      echo "<tr>";
      for ($j = 0; $j <= $m; $j++) {
        echo "<td>" . ($i + $j) . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";

    echo "<h2>Exercici 4</h2>";
    echo "<table>";

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
  ?>

  <div class="footer">Footer</div>

</body>
</html>
