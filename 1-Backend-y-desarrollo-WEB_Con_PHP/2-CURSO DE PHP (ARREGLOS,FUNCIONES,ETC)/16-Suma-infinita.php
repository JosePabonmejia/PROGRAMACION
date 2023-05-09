<?php
$veces= readline("Operaciones: ");
$ops=array();
for ($i=0; $i <$veces ; $i++) { 
    $num= readline("Introduce valor: ");
    array_push($ops,$num); 
};

suma_infinita($ops);
suma_infinita();

function suma_infinita(...$params){
    $suma=0;
    foreach ($params as $numero) {
        $suma += $numero;
    }
  echo "La sumatoria es: ".$suma;
};

