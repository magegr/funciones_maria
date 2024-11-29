<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicios IF</title>
</head>
<body>
    <h1>Coste alumnos viaje</h1>
    <?php
    $cantidadAlumnos = 29;
    $precioCompañia = 0;
    if($cantidadAlumnos>=100){
        echo "el coste por cada alumno es de 65.00€ ";
    }else{
        if ($cantidadAlumnos>=55){
            echo "el coste por cada alumno es de 70.00€";
        }else{
            if ($cantidadAlumnos>=30){
                echo "el coste por cada alumno es de 95.00€";
            }else{
                echo "el coste por cada alumno es de 4000.00€";
            }
        }
    }
    ?>
</body>
</html>