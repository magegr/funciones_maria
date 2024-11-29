<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
<?php
$mm_hora=[random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),];
$mm_totales=0;
for($i=0;$i<count($mm_hora);$i++){
    $mm_totales+=$mm_hora[$i];
    if($mm_hora[$i]>50){
        echo "<b>Aviso de protección Civil<b><br>Aviso de protección Civil,nuevo episodio de fuertes lluvias<br>";
    }
}
echo "En 24 horas se han recogido $mm_totales mm";
?>
</body>
</html>
