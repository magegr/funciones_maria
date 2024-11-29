<?php
$dado1 = rand(2,12);
$resultado_rondas= [];
for ($i=0;$i<5;$i++){
    $jugador1 = rand(2,12);
    $jugador2 = rand(2,12);
    if($jugador1>$jugador2){
        $resultado_rondas[$i] = 1;
    }elseif($jugador1 < $jugador2){
        $resultado_rondas[$i] =2;
    }else{$resultado_rondas[$i] ="x";
    }
}
for ($i=0 ; $i < count($resultado_rondas);$i++){
    if ($resultado_rondas[$i]==1){
        $jugador1gana[] =$resultado_rondas;
    }elseif($resultado_rondas[$i]==2){
        $jugador2gana[] =$resultado_rondas;
    }else{ $resultado_rondas [$i] ="x";
        return;
    }
}
  //recorro el array
  for ($i=0;$i<count($resultado_rondas);$i++){
    if ($resultado_rondas[$i] == 1){
        $jugador1gana++;
    }elseif($resultado_rondas[$i] == 2){
        $jugador2gana++;
    }else{
        $empatan++;
    }
}
echo "El 1 gana un " . $jugador1gana/$resultado_rondas*100 . " % de las veces<br>";
echo "El 2 gana un " . $jugador2gana/$resultado_rondas*100 . " % de las veces<br>";
echo "Empatan un " . $empatan/$resultado_rondas*100 . " % de las veces<br>";
   

?>