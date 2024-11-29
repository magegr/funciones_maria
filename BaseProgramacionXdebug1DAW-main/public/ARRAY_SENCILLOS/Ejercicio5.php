<!DOCTYPE html>
<html>
<head>
    <title>EJEMPLOS SENCILLOS ARRAYS</title>
</head>
<body>
    <h1>EJEMPLOS SENCILLOS ARRAYS</h1>

    <?php
    echo "MARCAS POR AÑO DE SALTO DE LONGITUD<br>";
    //Ejemplo uni-dimensional asociativo.
    //Array donde se muestran las mejores marcas del año de un saltador de longitud.
    //Cada posición del array corresponde a una año.
    //Obtén el año donde hace la mejor marca, la marca de ese año. Saca también la media de todos los años

    $anyos = ['2010'=>7.57, '2011'=>7.34, '2012'=>8.03, '2013'=>7.97]; //array de marcas por año
    $max=0;
    $mejoranio=0;
    $suma="";
    foreach($anyos as $key=>$value){
        echo $value . "<br>";
        if ($value>$max){
           $max=$value;
           $suma =+$value;
           $mejoranio= $key;
        }
    }
    $media=$suma/count($anyos);
    echo "La media es:". $media . $mejoranio . "<br>";
    echo "el numero mayor es " . $max;
    ?>
    </body>
    </html>