<?php
$valores=array();
$num=rand(1,10);
for ($i=0; $i < $num ; $i++) { 
    $random= rand(1,100);
    array_push($valores,$random);

}
var_dump($valores);
echo "El valor maximo del array es: ".max($valores);
echo "\n";