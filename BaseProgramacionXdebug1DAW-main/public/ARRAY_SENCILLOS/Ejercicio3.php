<!DOCTYPE html>
<html>
<head>
    <title>EJEMPLOS SENCILLOS ARRAYS</title>
</head>
<body>
    <h1>EJEMPLOS SENCILLOS ARRAYS</h1>

    <?php
    echo "PROFESOR ENROLLADO<br>";
    //Ejemplo uni-dimensional indexado
    //Array donde se muestran las notas de los alumnos de clase.
    //El examen ha ido fatal y el profesor ha decidido aumentar un punto a cada alumno.
    $notas = [5, 6, 7, 8, 9]; //array de notas
    for($i=0;$i<count($notas);$i++){
       $suma= $notas[$i] + 1;
        echo $suma . "<br>";
    }
       
    ?>
    </body>
    </html>