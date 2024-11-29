<html lang="en">
<head>
    <title>Ejercicios IF</title>
</head>
<body>
    <h1>facturación minutos telefono </h1>
    <?php
    $tiempo = $_GET["tiempo"];
    $dia = $_GET["dia"];
    $precio1 = 1;
    $precio2 = 0.80;
    $precio3 = 0.70;
    $precio4 = 0.50; 
    switch($dia){
        case "domingo":
            $impuesto = 0.03;
            break;
        case "habil mañana":
            $impuesto = 0.15;
            break;
        case "habil tarde":
            $impuesto = 0.10;
            break;
    }
    if ($tiempo<=5){
            $total= $precio1 + ($precio1*$impuesto)*$tiempo;
    }else{
        if($tiempo>5 & $tiempo<=8){
            $total= $precio1 + ($precio2*$impuesto)*$tiempo;
        }else{
            if($tiempo>8 & $tiempo<=10){
                $total= $precio1 + ($precio3*$impuesto)*$tiempo;
            }else{
                $total= $precio1 + ($precio4*$impuesto)*$tiempo;
            }
        }
    }
    echo " El coste en céntimos es de $total el minuto";
    ?>
</body>
</html>