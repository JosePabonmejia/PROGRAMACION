///Parametros en las functiones 
Los parámetros son los datos que reciben las funciones y que utilizan para realizar las operaciones de esa 
función. Una función puede recibir cualquier número de parámetros, incluso ninguno.

Queremos que la funcion predeterminada (rand) genere numeros aleatoreos entre 1 y 10: echo rand(1,10);

<?php
function FuncionAprobacion($notas){
    if ($notas<51)
    {
      echo "Lo siento mucho reprovaste";
    }
    else
    {
        echo "Felicidades Aprovaste";
    }
}

$Introduce=readline("Introduce tu nota: ");
FuncionAprobacion($Introduce);
echo "\n";


