<?php
$num1=[random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100)];
$num2=[random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100)];
$tam= count($num1);
$tam2= count($num2);
var_dump($num1);
var_dump($num2);
if ($tam == $tam2){
    for($i=0;$i<$tam;$i++){
        $mult= $num1[$i]*$num2[$i];
        echo "Los números son :"."$num1[$i]"." y "."$num2[$i]"." y el resultado de la multiplicación es :"."$mult"."<br>";
    }
}else{
    echo "Los Arrays no tienen la misma longitud";
    exit;
}
?>