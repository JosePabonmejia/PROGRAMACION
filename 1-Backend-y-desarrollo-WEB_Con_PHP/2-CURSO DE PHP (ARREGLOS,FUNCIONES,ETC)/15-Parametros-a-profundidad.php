Suma infinita   
<?php

function suma_infinita(...$params)
{
  $suma=0;
  foreach($params as $numero)
  {
    $suma +=$numero;
  }
  echo "La sumatoria es:  $suma \n";
}
$Introduce=readline("Introduce cuantos numeros quieres sumar: ");
for ($i=0; $i<$Introduce; $i++)
{
    $Introducenum=readline("Introduce el numero: ");
}

suma_infinita($Introducenum);

echo"\n";