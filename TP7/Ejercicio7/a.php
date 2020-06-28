<?php

$a=array(1,2,3);

$b=array(4,5,6);

$lista=array();

$lista['a']=$a;
$lista['b']=$b;





foreach ($lista as $fila) {
    echo $fila[0];
    echo '-';
    echo $fila[1];
    echo '-';
    echo $fila[2];
    echo '-';
}

$c=array();

if (empty($c)){
    echo 'VACIO';
} else {
    echo 'LLENO';
}



?>