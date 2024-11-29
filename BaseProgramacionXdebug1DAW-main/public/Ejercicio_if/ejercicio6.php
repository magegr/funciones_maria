<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicios</title>
</head>
<body>
<h1>ahorro</h1>
<?php
$mes = 1;
$total = 0;
while ($mes <= 12){ 
   $dinero = rand(0,1000);
   $total+=$dinero;
   echo "este mes has ahorrado $dinero y llevas ahorrado $total <br>";
   $mes++;
}
?>
</body>
</html>