<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
<?php
$mm_hora=[
    "Valencia"=>["zona 1"=> random_int(0,100),"zona 2"=>random_int(0,100),"zona 3"=>random_int(0,100),"zona 4"=>random_int(0,100),"zona 5"=>random_int(0,100),"zona 6"=>random_int(0,100),"zona 7"=>random_int(0,100),"zona 8"=>random_int(0,100),"zona 9"=>random_int(0,100),"zona 10"=>random_int(0,100)]
];

foreach($mm_hora as $ciudad=>$datos){
    foreach($datos as $zonas=>$valor){
        if($valor <= 20){
            echo "La $zonas de $ciudad es de riesgo bajo. <br>";
        }elseif ($valor<50) {
            echo "La $zonas de $ciudad es de riesgo medio. <br>";
        }else{
            echo "La $zonas de $ciudad es de riesgo alto. <br>";
        }
    }
    
}

?>
</body>
</html>