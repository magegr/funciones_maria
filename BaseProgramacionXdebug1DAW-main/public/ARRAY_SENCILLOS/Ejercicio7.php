<!DOCTYPE html>
<html>
<head>
    <title>EJEMPLOS SENCILLOS ARRAYS</title>
</head>
<body>
    <h1>EJEMPLOS SENCILLOS ARRAYS</h1>

    <?php
echo "NOTAS POR ASIGNATURAS<br>";
//Ejemplo bi-dimensional asociativo.
//Array donde se muestran las notas de varios alumnos y alumnas por asignatura.
//Cada posición del array corresponde a una asignatura y a un alumno o alumna.
//Saca de cada alumno o alumna la nota media y cuántas asignaturas ha suspendido.
$notas = [ //array de notas por asignatura y alumno.
    'Juan'  => ['Matemáticas' => 5, 'Lengua' => 6, 'Inglés' => 7],
    'María' => ['Matemáticas' => 4, 'Lengua' => 5, 'Inglés' => 6],
    'Pedro' => ['Matemáticas' => 6, 'Lengua' => 7, 'Inglés' => 8]
];
$media = [];
$suspensos = [];
foreach ($notas as $nombre => $materias){
    $pepe=0;
    foreach($materias as $asignatura => $nota){
        echo "$nombre ha sacado en $asignatura un $nota <br>";
        $pepe+=$nota;
        if($nota<5){
            echo"Ha suspendido la asignatura  $asignatura <br>";
        }
    }
    $media[$nombre][]=$pepe/count($materias);
    echo "La media de $nombre es " . $pepe/count($materias)."<br><br>";
}
// foreach($media as $nombre => $posiciones){
// foreach ($posiciones as $key) {
//     echo "La media de $nombre es $key <br>";
// }
// }
    ?>
    </body>
    </html>