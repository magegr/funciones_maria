<?php
/* Teniendo como referencia la página php.net - String Functions, investiga el funcionamiento 
de las funciones nativas de tratamiento de Strings y realiza un programa en PHP que, 
en base al texto proporcionado, realice las siguientes acciones, cada uno a través de una función diferente:

Busque una palabra concreta introducida por teclado y diga si existe o no, y en caso afirmativo, 
cuantas coincidencias se han encontrado . Reemplace la palabra por su versión en mayúsculas*/

$texto="Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Nullam egestas tempor lacus, eu ornare erat aliquet at. 
Nulla arcu lectus, bibendum non arcu vel, fermentum mollis felis. 
Nam eget imperdiet justo, at tristique leo. Donec luctus lacinia dolor et suscipit. 
Aliquam felis nunc, fringilla ac metus in, tincidunt vulputate erat. 
Suspendisse euismod hendrerit nisl. Morbi consequat est id erat porttitor, 
ut posuere massa condimentum. Morbi vitae nisi id magna tincidunt condimentum nec vel metus.
Sed ac dignissim neque. Nam nunc tellus, malesuada sit amet nulla sed, scelerisque ullamcorper libero. 
Sed venenatis eu urna ut auctor. Fusce sollicitudin id nulla luctus varius.
Ut tincidunt justo sem, et vehicula diam feugiat eu.Quisque quis velit ex.
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.Ut erat mauris, 
condimentum a nulla et, iaculis elementum nisl.Mauris justo dui, sollicitudin sed lacus in, 
rhoncus volutpat mauris.Duis commodo, erat ac feugiat egestas, neque elit auctor nunc, quis varius eros dolor 
eu neque.Aliquam erat volutpat.Nunc facilisis, libero eu feugiat gravida, lorem neque gravida diam, nec gravida
lacus nulla et ex.Integer at consequat diam.Suspendisse potenti.Nam sed nisi ultrices, consequat ante vehicula,
posuere felis.Morbi vitae diam tempus, egestas neque vitae, maximus risus.Etiam id tempus libero.Etiam urna dui,
vestibulum sit amet eleifend id, lacinia vitae mi.Aenean in nisi venenatis enim malesuada efficitur.
Nam non eleifend erat, vel tempor purus.Quisque consectetur, tellus id tincidunt consectetur, augue quam vehicula tortor, et laoreet quam magna sit amet risus.Proin sollicitudin sagittis nibh, at aliquam lorem rutrum sed.Morbi tellus magna, suscipit eget sapien ut, varius tempor velit.Etiam eu iaculis velit.Ut a rhoncus nisl.Quisque ut condimentum est.Phasellus auctor mauris vitae nisl vestibulum, in lacinia erat tincidunt.Vestibulum sit amet mi vitae purus eleifend sagittis in ac mi.Sed in mi facilisis, interdum eros non, tristique neque.Donec finibus pellentesque velit.Donec sed lorem eget nisl aliquam suscipit.Nunc fermentum, sapien a bibendum vehicula, mi nisl scelerisque lectus, ac euismod mi augue nec arcu.Praesent laoreet diam sit amet sodales efficitur.\nPhasellus nec felis sollicitudin, pulvinar risus non, euismod neque.Aenean ultricies rhoncus neque, sed tempor quam consequat vel.Donec finibus, eros sed tincidunt varius, eros magna ornare lectus, quis consequat ex nulla et lacus.Suspendisse vitae enim eget felis faucibus vestibulum.Maecenas a ligula massa.Integer nec scelerisque odio.Etiam vel aliquam neque, sit amet semper lectus.\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis iaculis leo vel pharetra ornare.Vestibulum mi nunc, sollicitudin iaculis vulputate in, 
egestas a orci.Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
per inceptos himenaeos.Cras sit amet gravida risus.Vivamus dignissim dapibus metus, in convallis eros.
Phasellus id purus tellus.Vestibulum rutrum libero sapien, non gravida odio varius sit amet.
Curabitur tristique velit eu laoreet aliquam.Phasellus vel justo felis.";

$palabra="non";
if (strstr($texto,$palabra)==true){
    $str = strtoupper($palabra);
    echo "la palabra $palabra existe y hay ";
    echo substr_count($texto,$palabra)." repeticiones y su version en mayusculas es: ";
    echo $str;
}else{
    echo "la palabra $palabra no existe";
}


?>