<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fibonacci</h1>
  <?php
     $cantidades= $_GET["cant"];
     $actual = 0;
     $sig = 1;
     $aux = 0;
     for ($i=1;$i<=$cantidades;$i++){
        echo $actual . " ";
        $aux =$actual+$sig;
        $actual = $sig;
        $sig= $aux;
        
     } 
  ?>  
</body>
</html>