<!DOCTYPE html>
<html>
<head>
    <title>EJEMPLOS SENCILLOS ARRAYS</title>
</head>
<body>
    <h1>EJEMPLOS SENCILLOS ARRAYS</h1>

    <?php
      echo "MINUTOS POR PARTIDO<br>";
      //Ejemplo uni-dimensional indexado
      //Array donde se muestran los minutos jugados por un jugador por partido.
      //Cada posición del array corresponde a un partido.
      //Saca los minutos totales, la media de minutos y cuántos partidos no ha jugado.
      $partidos = [0, 15, 30, 45]; //array de minutos jugados por partido
      $minutosTotales = 0;
      $partidosNoJugados = 0;
     /*for($i=0;$i<count($partidos);$i++){
        $numero = $partidos[$i];
        $suma = $numero;
      }*/
      echo "Los minutos totales son: ". array_sum($partidos) ."<br>";

      
      $mediaminutos= array_sum($partidos)/count($partidos);
      echo "La media de los minutos es: " . $mediaminutos . "<br>";

      for($i=0;$i<count($partidos);$i++){
        if ($partidos[$i]==0){
            $partidosNoJugados++;
            break;
        }
      }
      echo "Hay $partidosNoJugados partidos sin realizarse";

       
    ?>
    </body>
    </html>