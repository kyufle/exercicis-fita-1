<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla Naval</title>
    <style>
        table, tr, td{
            border: 1px solid black;
        }

        table{
            border-collapse: collapse;
        }

        td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
    // creo el diccionario con todos los barcos
        $vaixells = array(
            "fragata"=> 1,
            "submari"=> 2,
            "destructor"=> 3,
            "portaavions"=> 4,
        );
    //ramdon localizar barcos, ponerlos en la mesa, intentar que no se superpongan e intentar que no salgan de la cuadricula
    $n = 20;
    $m = 20;
    $f = null;
    $fragataPositionX;
    $fragataPositionY;
    $s = null;
    $d;
    $p;
    $arrayLetras = array("A","B","C","D","E","F","G","H","I","J","K","L","M","Ñ","O","P","Q","R","S","M");
    function random($array){
        $random = rand(1,count($array));
        return $random;
    }
    function positionExist($i, $j, $submariPositionX, $submariPositionY){
        for ($z = 0; $z < count($submariPositionX); $z++) {
            if ($submariPositionX[$z] === $j && $submariPositionY[$z] === $i){
                return true;
            }
        }

        return false;
    }
    echo "<table>";
    $matrix = array(array());
    // Logica de generacion de posiciones
    if ($f == null) {
        $fragataPositionX = random($arrayLetras);
        $fragataPositionY = random($arrayLetras);
        $f = "posición cogida x".$fragataPositionX.", y".$fragataPositionY;
        $matrix[$fragataPositionX][$fragataPositionY] = true;
    } 
    if ($s == null) {
        $flag_encontrado = false;
        while (!$flag_encontrado) {
            $submariPositionX = array(random($arrayLetras));
            $submariPositionY = array(random($arrayLetras));
            $positionContinue = rand(1,4);
            if ($positionContinue == 1){
                //arriba
                if ($submariPositionY[0]-1 <= 0){
                    continue;
                } else{
                    array_push($submariPositionX, $submariPositionX[0]);
                    array_push($submariPositionY, $submariPositionY[0]-1);
                }
            } else if ($positionContinue == 2){
                if ($submariPositionX[0]+1 > 20){
                    continue;
                }  else{//derecha
                       array_push($submariPositionX, $submariPositionX[0]+1);
                       array_push($submariPositionY, $submariPositionY[0]);
                }
            } else if ($positionContinue == 3){
                //abajo
                if ($submariPositionY[0]+1 > 20){
                    continue;
                } else{
                    array_push($submariPositionX, $submariPositionX[0]);
                    array_push($submariPositionY, $submariPositionY[0]+1);
                }
                
            } else if ($positionContinue == 4){
                //izquierda
                if ($submariPositionX[0]-1 <= 0){
                    continue;
                } else{
                    array_push($submariPositionX, $submariPositionX[0]-1);
                    array_push($submariPositionY, $submariPositionY[0]);
                }
            }
            // comprueba si cualquiera de las posiciones ya esta usada
            break;
        }
    }
    // Logica de render
        for ($i = 0; $i <= $n; $i++){
            echo "<tr>";
            for ($j = 0; $j <= $m; $j++){
                if ($i == 0 && $j == 0) {
                    echo "<td></td>";
                } else if ($i == 0 && $j != 0) {
                    echo "<td>".$j."</td>";
                } else if ($i != 0 && $j == 0) {
                    //es j == 0 porque es en la primera iteración
                    echo "<td>".$arrayLetras[$i-1]."</td>";
                } else{
                    if ($j == $fragataPositionX && $i == $fragataPositionY){
                        echo "<td> F </td>";
                    }
                    else if (positionExist($i, $j, $submariPositionX, $submariPositionY)){
                        echo "<td> S".$submariPositionX[0]. $submariPositionY[0]." </td>";
                    } else{
                        echo "<td></td>";
                    }
                }
            }
            echo "</tr>";
        }
    ?>
</body>
</html>