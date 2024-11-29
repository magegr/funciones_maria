<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <form method="POST">
        <label><input type="number" name="num" placeholder="Enter number"></label>
        <input type="submit" value= "GUARDAR" name="guardar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $num = (int)$_POST["num"];
        $fecha=0;
        $año=2024;
        $meses = ["Enero","Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        $dias=[31,28,31,30,31,30,31,31,30,31,30,31];
        
        for ($i=0;$i<=$num;$i++){
            for($j=0;$j<$i;$j++){
                $fecha=$meses[$i];
                $dia=rand(1,$dias[$j]);
                echo "fecha " . $i ." es: ". $dia . $fecha . $año ."<br>"; 
                break;
            }
            
        }
    }
    ?>
</html>

