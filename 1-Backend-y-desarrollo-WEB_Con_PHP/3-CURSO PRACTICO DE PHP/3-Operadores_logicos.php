<?php

$valor1=true;
$valor2=true;
$valor3=true;
$valor4=false;
$valor5=false;
$valor6=true;
$valor7=false;
$valor8=false;

// and 
$and1= ($valor1 and $valor4);
$and2= ($valor3 and $valor4);
$and3= ($valor5 and $valor6);
$and4= ($valor7 and $valor8);
// or
$or1= ($valor1 or $valor2);
$or2= ($valor3 or $valor4);
$or3= ($valor5 or $valor6);
$or4= ($valor7 or $valor8);
// xor
$xor1= ($valor1 xor $valor2);
$xor2= ($valor3 xor $valor4);
$xor3= ($valor5 xor $valor6);
$xor4= ($valor7 xor $valor8);


var_dump($resultado);
echo"\n";
echo "====================================================\n";
echo"ǁ  valor:1 ǁ valor:2 ǁ and ǁ  or ǁ xor ǁ not ǁ\n";
echo "====================================================\n";
echo "ǁ  True    ǁ  False  ǁ.."."$and1"."..ǁ.."."$or1"."..ǁ.."."$xor1"."..ǁ.."."\n";
echo "====================================================\n";

echo"\n";


