<!DOCTYPE html>
<html>
<head>
    <title>EJEMPLOS SENCILLOS ARRAYS</title>
</head>
<body>
    <h1>EJEMPLOS SENCILLOS ARRAYS</h1>

    <?php
  echo "MINUTOS POR PARTIDO<br>";
  //Ejemplo bi-dimensional indexado
  //Array donde se muestran los minutos jugados por una jugadora por partido.  
  //Cada posición del array corresponde a un partido y a una jugadora.
  //Saca de cada jugadora los minutos totales, la media de minutos y cuántos partidos no ha jugado.
  $partidos = [ //array de minutos jugados por partido y jugadora
    /*maria*/[0, 15, 30, 45],
      [45, 23, 45, 2],
      [0, 42, 86, 70],
      [86, 90, 0, 0]
    ];
        $minutosTotales = [0, 0, 0, 0];
        $partidosNoJugados = [0, 0, 0, 0];
        $media = [0, 0, 0, 0];
        $totalm=0;
        $contador=0;
        $nojugados=0;

for($i=0; $i<count($partidos);$i++){
    for($j=0;$j<count($partidos[$i]);$j++){
        $minutosTotales[$i]=+$partidos[$i][$j];
        if($partidos[$i][$j] == 0){
            $partidosNoJugados[$i]++;
        }
    }
}



        /*foreach( $partidos as $jugadoras){
            
            foreach($jugadoras as $minutos){
                $totalm =+ $minutos;
                if( $minutos ==0){
                    $nojugados ++;
                }
            }
            array_splice($partidosNoJugados,$contador,1,[$nojugados]);
            $mediaj=$totalm/count($partidos[$contador]);
            array_splice($media,$contador,1,[$mediaj]);
            array_splice($minutosTotales,$contador,1,[$totalm]);
            $contador++;
            $totalm = 0;
            $nojugados=0;
        }
        var_dump($media);
        var_dump($minutosTotales);
        var_dump($partidosNoJugados);*/




    ?>
    </body>
    </html>