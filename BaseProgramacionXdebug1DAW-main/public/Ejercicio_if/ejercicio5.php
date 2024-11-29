<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicios</title>
</head>
<body>
<h1>precioCompañia viajes</h1>
<?php
$bus=$_GET["bus"];
$personas=$_GET["personas"];
$km=$_GET["km"];
switch($bus){
    case "a":
        $fijo = 2;
        break;
    case "b":
        $fijo = 2.5;
        break;
    case "c":
        $fijo = 2;
        break;
}
if ($personas>20){
    $total=$fijo*($km*$personas)/$personas;
}
echo "Precio total es" .$total. "€";
?>
</body>
</html>