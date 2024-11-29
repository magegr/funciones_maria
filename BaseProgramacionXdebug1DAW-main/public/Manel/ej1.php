<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
     
     switch($paquetes){
        case "1";
            $paquetes=1;
        break;
        case "2";
            $paquetes=2;
        break;
        case "3";
            $paquetes=3;
        break;
    }
    
     if ($tamano<=0.5){
        $precio=50;
     }else{
         if($tamano>0.5 & $tamano<=1){
             $precio=75;
         }else{
            $precio=100;
         }
     }
    if ($kilos>5){
        $incremento=0.25;
    }else{
        if($kilos>5 & $kilos<=15){
            $incremento=0.5;
        }else{
            echo "EL paquete pesa demasiado";
           exit;
        }
    }
    if ($zona){}
        
    
        
    ?>
    
    <form method="POST" action="">
        <label for="kilos">PAQUETES:</label>
        <input type="number" id="paquetes" name="paquetes" value="">
        <label for="tamano">TAMAÑO:</label>
        <input type="number" id="tamano" name="tamano" value="">
        <label for="peso">PESO:</label>
        <input type="number" id="peso" name="peso" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>