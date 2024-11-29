<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 1</title>
</head>
<body>
<p>
    Programa que pida la edad de 2 hermanos e informe de la diferencia de edad existente entre ambos.
    Debes utilizar una función diferenciaEdad, que reciba las dos edades y retorne en valor positivo la diferencia entre ambos.
</p>
    <form method="post">
        <label for=""><input type="number" name="hermano_1">Edad hermano 1</label>
        <label for=""><input type="number"name="hermano_2">Edad hermano 2</label>
        <input type="submit">
    </form>
</body>
</html>

<?php
function diferenciaEdad ($edad1,$edad2){ // Definimos la función para calcular la diferencia de edad, 
                                        //el nombre de la funcion es diferenciaEdad y tiene los parametros edad1 y edad2 que son dos variables sin valor asignado

    return ($edad1-$edad2);//queremos que nos devuelva el resultado de la diferencia
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){//le estamos diciendo que los datos los cogemos del method post
$edad1=$_POST['hermano_1'];//ahora tiene el valor que nos han pasado por el formulario
$edad2=$_POST['hermano_2'];
$diferencia = diferenciaEdad($edad1, $edad2);//llamamos a la funcion
echo"$diferencia";
}
?>