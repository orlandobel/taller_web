<?php
require "variables.php"; // Importacion de archivos
/*
 *comentario1
 *comentario2
*/

$array1[0] = 0;
$array1[1] = 1;
$array1[2] = 2;
$array1[3] = 3;
$array1[4] = 4;

echo $array1[0]."<br/>";
echo $array2[1]."<br/>";

echo $saludo.'<br/>';

$suma = $n1+$n2;
echo $suma."<br/>";

if($bool) {
    echo "el booleano es verdadero<br/>";
}

for($i=0;$i<$suma;$i++) {
    $array2[] = $i;
}

echo $array2[5];

$metodo = $_SERVER['REQUEST_METHOD'];
echo $metodo;
    