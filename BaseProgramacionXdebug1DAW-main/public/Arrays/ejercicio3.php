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
        if($_SERVER["REQUEST_METHOD"]== "POST"){
            $numero_pantalla = (int)$_POST["num"];
            $numeros_primos = [];
            for($i = 1;count($numeros_primos)<$numero_pantalla;$i++){
                for($j=1;$j<$i;$j++){
                    if($j !== 1 && ($i%$j==0)){
                        break;
                    }
                }
                
                if($i == $j){
                    $numeros_primos[] = $i;
                }
            }
        
            var_dump($numeros_primos);
        }
    ?>
</body>
</html>
