<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cantidades</h1>
    <?php
    $cantidades= $_GET["cant"];
    $negativo= 0;
    $positivo= 0;
    $cero = 0;
    for ($i=1;$i<=$cantidades;$i++){
        $num = rand(-100,100);
        if ($num<0){
            $negativo++;
        }elseif($num>0){
            $positivo++;
        }else{
            $cero++;
        }
    }
    echo "$negativo <br>";
    echo "$positivo <br>";
    echo "$cero"
    ?>
</body>
</html>