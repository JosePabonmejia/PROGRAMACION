<?php
$pisos=readline("De cuantos pisos quieres que sea tu arbol?: ");
{
    if ($pisos>100)
    echo"Solo se permiten arboles de menos de 100 pisos";
    else
    for ($i=0; $i <=$pisos ; $i++) 
    { 
        echo str_repeat("*",$i)."\n";
    }
}
