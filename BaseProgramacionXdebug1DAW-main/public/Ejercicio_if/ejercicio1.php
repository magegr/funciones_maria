<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicios IF</title>
</head>
<body>
    <h1>Crustaceo crujiente</h1>
    <?php
        $personas = 500;
        $costePlato = 0;
        if ($personas > 300){
            $costePlato=75;
        }else{
            if ($personas > 200){
                $costePlato = 85;
            }else{
                $costePlato = 95;
            }     
        }
        echo "El coste del plato es :" . $costePlato; 
    ?>
</body>
</html>