<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <form method="POST">
            <label><input type="number" name="num" placeholder="Enter number"></label>
            <input type="submit" value= "GUARDAR" name="guardar">
    </form>
<?php
    /* Crea un script para encontrar pares de números 
    que tienen un diferencia pasada por teclado, por ejemplo: 
    si la diferencia es 53, el par que cumple la condición es (39,92),
    tomando como array de datos [1, 15, 39, 75, 92].
    Puedes usar las funciones que quieras..*/

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $numeros=[1, 15, 39, 75, 92];
    $num = (int)$_POST["num"];
        for( $i=0;$i<count($numeros);$i++){
            
        }
}
?>
</body>
</html>