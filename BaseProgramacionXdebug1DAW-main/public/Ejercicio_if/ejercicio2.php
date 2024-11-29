<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicios IF</title>
</head>
<body>
    <h1>Asociacion de vinicultores</h1>
    <?php
    $tipo = "A";
    $tamaño = 1;
    $precio = 0;
    if ($tipo == "A"){
        if($tamaño == 1){
            $precio = 0.20;
        }else{
            $precio = 0.30;
        }
    }else{
        if($tamaño == 1){
            $precio = 0.30;
        }else{
            $precio = 0.50;
        }
    }
    echo "El precio por kg de prodcto es : " . $precio  
    ?>
</body>
</html>