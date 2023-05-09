<?php
echo"Selecciona la operacion que queires realiar\n";
echo"(+)Para Sumar\n";
echo"(-) Para Restar\n";
echo"(*) Para Multiplicar\n";
echo"(/)Para Dividir\n";
$select=readline( );
switch ($select) {
    case '+':
        suma();
        break;
    default:
        echo "Esa operacion no existe";
        break;
}
function suma (){
$op= readline("Cuantas numeros quieres sumar?: ");
$valores = array();

for ($i=0; $i < $op; $i++) 
{ 
    $nu=readline("Introduce valor: ");
    array_push($valores,$nu);
    $suma= array_sum($valores);

}
echo "Resultado: ".$suma;
echo "\n";
}