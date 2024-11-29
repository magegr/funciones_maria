<?php
/* Crear una función que reciba un carácter y un número, y visualice una figura formada
 por esa letra de forma que, empezando por la impresión de este carácter, llegue a visualizar tantas 
 filas como indica el número pasado incrementando en el número de caractéres por fila, 
 para finalmente decrecer hasta la visualización de un único carácter, en decrementos equivalentes de 2. 
 Por ejemplo, si la letra es * y el número es 4, debería escribir:

*
***
*****
*******
*****
***
*

*/
function visualizarForma ($caracter, $num){ 
    for ($i=0; $i < $num ; $i++) {
        $suma=str_repeat($caracter,($i*2)+1);
        echo "$suma <br>";
    }
    for ($i=$num-1; $i>0 ; $i--) {
        $resta=str_repeat($caracter,($i*2)-1);
        echo "$resta<br>";
    }
    return;
}
visualizarForma("*",6);

?>