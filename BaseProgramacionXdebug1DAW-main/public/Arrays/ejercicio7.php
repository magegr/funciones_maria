<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <?php
   $nomb=""; 
   $nomb2="";
   $nomb3="";
   $nomb4="";
   $concurso=['1'=>'Ana','2'=>'Oswaldo','3'=>'Raúl','4'=>'Celia','5'=>'María','6'=>'Antonio'];
   foreach ($concurso as $key => $value){
        $nomb.=" ".$value;
   };
   Echo "La clasificacion inicial es: " . $nomb . "<br>";

foreach($concurso as $posicion => $nombre){
    if( $nombre=='Raúl'){
        $Raul= $posicion;
    }elseif($nombre=='Celia'){
        $Celia= $posicion;
    }
}
$concurso[$Raul] = 'Celia';
$concurso[$Celia] = 'Raúl';

foreach ($concurso as $key => $value){
    $nomb2.=" ".$value;
};
    echo "Celia adelanta a Raúl y la nueva posicion es: " . $nomb2 ."<br>";


   array_splice($concurso,5,5);
   foreach ($concurso as $key => $value){
    $nomb3.=" ".$value;
};
   Echo "Antonio es descalificado y se elimina del concurso, ahora la clasificacion es: " . $nomb3 . "<br>";

  array_splice($concurso,1,0,"Roberto");
  array_splice($concurso,2,0,"Amaya");

foreach ($concurso as $key => $value){
$nomb4.=" ".$value;
};
echo "Detrás de Ana y antes de Oswaldo se clasifican dos nuevos concursantes: Roberto y Amaya, en ese orden, ahora la clasificacion es: " . $nomb4 ;


    ?>
</html>