Suma infinita   
...trasforma un array en parametro
tenemos un array con 4 numeros que se convierten en la variable $params
<?php
function suma_infinita(...$params){
    $suma=0;
    foreach ($params as $numero) {
        $suma += $numero;
    }
  echo "La sumatoria es: ".$suma;
};

suma_infinita(1,2,3,4);