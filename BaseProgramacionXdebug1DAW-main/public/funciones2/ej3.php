<?php

//Los números no se pueden repetir
$loteria=[];
function dameNumero($num){ //me declaro la funcion que se  llama dameNumero y  tiene una variable $num
return $num;//decimos que la funcion va a ddevolver $num
}

for ($i=0;$i<6;$i++){//añadirlo a un array
$num=rand(1,49);
    if(in_array($num,$loteria)==false){//que no sew repita
        $loteria[]=dameNumero($num);//con la funcion
    }else{
         $i--;// Si el número ya está en el array,le ponemos $i-- para repetir la iteración
        }
};
var_dump($loteria);
?>