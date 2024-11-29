<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
<?php
$mm_hora=[
    "estacion1"=>[random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100)],
    "estacion2"=>[random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100)],
    "estacion3"=>[random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100)],
    "estacion4"=>[random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100)],
    "estacion5"=>[random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100)]
];
foreach($mm_hora as $estaciones=>$datos){
    $mm_totales=0;
    foreach($datos as $value){
        $mm_totales+=$value;
    }
    $compara[]=$mm_totales;
    echo "El valor total de $estaciones es $mm_totales<br>";
}
var_dump($compara);
?>
</body>
</html>
