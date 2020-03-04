<?php
function inicializar_album($figus_total){
$album=array();
$i=0;
while ($i< $figus_total){
    $album = array_push($album,0);
    $i=$i+1;
}

return $album;
}

function comprar_una_figu($figus_total){
    return random_int(0, $figus_total-1);
}
function esta_lleno($album){
    return (!0 in_array $album);
}

