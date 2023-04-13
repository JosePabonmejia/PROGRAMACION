<?php
// En este progrma el usuario introducira los segundos y este le mostrara cuanstas horas y minutos existen 
// para ello debemos saber cuantos segundos existen en una hora : 3600 
// $segundos= readline("Ingresa el tiempo en segundos: ");// variable para obtener segundos 

// $horas= (int)($segundos /3600);// Concatenacion x`
// $segundos = (int)($segundos % 3600);// % Modulo residuo modulo residuo, como ya no me interesan las horas agarro cuantos segundos le sobran y calculo los minutos
// $minutos = (int)($segundos / 60); 
// $segundos = (int)($segundos % 60);

// echo "Son $horas Horas, $minutos Minutos, $segundos Segundos";//Operador relacional de concatenacion 

 
// echo "\n"; //salto de linea 


$horas = readline("Ingrese el tiempo en horas: ");// no funcionara ya que no existe residuo solo para divicion 

$segundos = (int)($horas * 3600);
$horas = (int)($horas % 3600);
$minutos = (int)($horas * 60);
$horas = (int)($horas % 60);
 
echo "Hay $segundos Segundos,$minutos Minutos ";
echo "\n";
