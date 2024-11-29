<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <form method="POST">
        <label><input type="number" name="num_0"  placeholder="Enter number"></label>
        <label><input type="number" name="num_1"  placeholder="Enter number"></label>
        <label><input type="number" name="num_2"  placeholder="Enter number"></label>
        <label><input type="number" name="num_3"  placeholder="Enter number"></label>
        <label><input type="number" name="num_4"  placeholder="Enter number"></label>
        <input type="submit" value= "GUARDAR" name="guardar">
    </form>
    <?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $num = [];
        for ($i=0; $i<5; $i++) {
            $num[] = (int)$_POST["num_$i"];
        }
        $suma = array_sum($num) ;
        $media = $suma / count($num);
    }
    echo "$media";
    
    ?>
</body>
</html>