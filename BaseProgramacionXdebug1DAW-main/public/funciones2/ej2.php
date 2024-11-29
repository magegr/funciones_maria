<?php
function numRomano($num){//creamos la funcion y dentro vamos a poner el codigo
$romano= [1 => 'I',2 => 'II', 3=> 'III',4 => 'IV',5 => 'V',6 => 'VI',7 => 'VII',8 => 'VIII',9 => 'IX',10 => 'X'];//nos creamos la arry de donde vamos a sacar los numeros en romano
return $romano[$num];//le decimos que la funcion nos tiene que devolverla posicion del array que diga $num
}
$num=rand(1,10);//creamos/damos valor a la variable para el numero random
$numero= numRomano($num);//nos creamos optra variable para llamar la funcion 
echo "$numero";//la muestra

?>