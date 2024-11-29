
/*$arr = [
    [10,20,30,40,50]
    ["A","B","C","D","E"]
]
for ($i = 0; $i< count($arr);$i ++){
    for ($j=0;$j < count($arr[$i]);$j++){
        echo $arr[$i][$j];
    }
    echo "<br>";
}*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <form method="POST">
        <label><input type="number" name="num" placeholder="Enter number"></label>
        <input type="submit" value= "GUARDAR" name="guardar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $num = (int)$_POST["num"];
        $letra =["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
        $resto= $num%count($letra);
        echo "La letra de tu DNI es: " . $letra[$resto];
    }
    ?>
</html>








