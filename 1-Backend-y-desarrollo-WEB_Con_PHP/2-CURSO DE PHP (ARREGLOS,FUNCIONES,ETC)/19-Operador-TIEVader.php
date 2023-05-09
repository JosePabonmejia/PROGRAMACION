
El operador nave espacial ¶
El operador nave espacial se emplea para comparar dos expresiones. Devuelve -1, 0 o 1 
cuando $a es respectivamente menor, igual, o mayor que $b . Las comparaciones se realizan 
según las reglas de comparación de tipos usuales de PHP.

<?php
$precios_de_cafes = array(12,34,54,76,12,43,54,1,22,11);
usort($precios_de_cafes,function($a,$b){
    return $a<=>$b;
});
var_dump($precios_de_cafes);
