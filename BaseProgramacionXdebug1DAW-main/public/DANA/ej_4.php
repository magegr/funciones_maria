<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
<?php
$afectadas=0;
$calles=[];
$estado=[0=>"Sin daño",1=>"Dañado",2=>"Intransitable"];
for($i=1;$i<51;$i++){
    $nombreCalle = "calle_$i";//key
    $random = random_int(0,2);//value
    $calles[$nombreCalle]=$random;
    echo "La $nombreCalle esta $estado[$random] <br>";
    
}
var_dump($calles)

?>
</body>
</html>