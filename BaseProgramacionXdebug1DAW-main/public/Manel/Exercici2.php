<?php
/* SUMA DELS VALORS D'UN ARRAY */ 
//El resultat hauria de ser: 10. Per què no funiona?
 

echo "<br/><b>Exercici 1</b> SUMA DELS VALORS D'UN ARRAY";

$numeros=[1,2,3,4];
$suma=0;
$tamany = count($numeros);
for ($i=0;$i<$tamany;$i++){
    $suma+=$numeros[$i];
}
var_dump($suma , $numeros);


/* 
FACTORIAL de n:  n! = n x (n-1) x (n-2) x ..... x 3 x 2 x 1
    exemple:  5! = 5 x 4 x 3 x 2 x 1 = 120
    Per que no funciona com cal?
*/


echo "<br/><b>Exercici 2</b> FACTORIAL de n</br />";
$limit=5;
$factorial=1;

for ($i=$limit;$i>1;$i--){
    $factorial*=$i;
}
echo 'Resultat: '.$factorial;

//--------------------------------------------

/* 
FACTORIAL de n:  5! = n x (n-1) x (n-2) x ..... x 3 x 2 x 1
Volem que mostre un literal com el següent 5! = 5 x 4 x 3 x 2 x 1 = 120
*/


echo "<br/><b>Exercici 2.1 Modificació per a que mostre el literal</b></br/>";
$limit=5;
$factorial=1;
$literal=$limit."! = ";

for ($i=$limit;$i>0;$i--){
    if ($i>1){
        $literal .= $i."x";
    }else{
        $literal .= $i;
    }
    $factorial*=$i;
}

echo 'El resultat de '. $literal ." és ".$factorial."<br/>";
//Este echo hauria de mostrar alguna cosa com "El resultat de 5! = 5x4x3x2x1 és 120"


echo "<br/><b>Exercici 3</b></br />";
//--------------------------------------------

// QUADRAT DE NOMBRES ALEATÒRIS
// 1r.- Construir un array de 10 elements anomenat $nombres, que tinga valors aleatòris 
// entre 1 i 15. Utilitzeu el bucle for
$nombres=[];
for ($i=0;$i<10;$i++){
    $numero=random_int(1,15);
    $nombres[$i]=$numero;
}
var_dump($nombres);
//Creem un array anomenat $quadrat que calcularà el quadrat dels nombres anteriors i el mostrem. És a dir nombre * nombre
$quadrat=[];
for ($i=0;$i<10;$i++){
    $multi=$nombres[$i]*$nombres[$i];
    $quadrat[$i]=$multi;
}
var_dump($quadrat);
//Creem un array anomenat $cub que calcularà el cub dels nombres anteriors i el mostrem. És a dir nombre * nombre * nombre
$cub=[];
for ($i=0;$i<10;$i++){
    $multi2=$quadrat[$i]*$nombres[$i];
    $cub[$i]=$multi2;
}
var_dump($cub);
//var_dump($nombre,"<br/>",$quadrat,"<br/>",$cub,"<br/>");
// Modifiqueu el codi per a utilitzar el foreach i emplenar els arrays $quadrat i $cub
foreach($nombres as $key => $num){}
foreach($quadrat as $key => $value){
    foreach($cub as $key2 => $value2){
        $value2 = $value*$num;
    }
}
var_dump($cub);
echo "<br/><b>Exercici 4</b></br />";
$mesos = ['Gener','Febrer','Març','Abril','Maig','Juny','Juliol','Agost','Setembre','Octubre','Novembre','Desembre'];
$dies_mesos = [31,28,31,30,31,30,31,31,30,31,30,31];

//Crea una funció que torne en un string, separat per comes, els mesos que ténen 31 dies
// Hauria de tornar: "Gener,Març,Maig,Juliol,Agost,Octubre,Desembre,"
function llistatMesos31 (array $arrayDeMesos, array $arrayDeDiesDeCadaMes){
    $meses31=[];

foreach($arrayDeDiesDeCadaMes as $key  => $value){
    if ($value == 31){
            $meses31[]=$arrayDeMesos[$key];    
    }
}
return implode(",", $meses31) . ",";
}
echo llistatMesos31($mesos, $dies_mesos);
//Crea una funció que torne en un un string, separat per comes, els mesos que tenen 30 dies

// crea una funció que a partir d'un mes rebut per paràmetre, em torne els dies que té eixe mes.
//Indica els dies que té el més de Juny.



?>   

