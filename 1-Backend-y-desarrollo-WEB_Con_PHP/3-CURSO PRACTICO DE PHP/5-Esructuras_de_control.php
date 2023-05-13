<?php


function if1 () 
{
    $valor1=rand(1,100);
    $valor2=rand(1,100);
     if ($valor1 > $valor2)
     {
        $respuesta="El $valor1 es mayor a $valor2";
     }
     else
     {
        $respuesta= "El $valor2 es mayor al $valor1";

     }
     return ($respuesta);
}

function while1()
{
    $contador=0;
    $valor=rand(1,10);
    while ($contador <= $valor) 
    {
        $contador++;
        $mensage= "Mensaje $contador";
        return($mensage);
    }
  
}

echo if1(); 
echo "\n";
echo while1();
echo "\n";

