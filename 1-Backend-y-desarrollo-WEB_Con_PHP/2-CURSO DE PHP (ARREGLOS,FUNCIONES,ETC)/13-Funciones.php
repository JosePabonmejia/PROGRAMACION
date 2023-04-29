                                              ///Funciones   
Las funciones son bloques de código que creamos para realizar tareas especificas, cuando hay un proceso 
repetitivo en tu programa, en lugar de escribir las mismas líneas de código, puedes crear un función y luego 
invocarla cuantas veces desees.
PHP tiene funciones predeterminadas que ya podemos llamar (Rand)
<?php

function get_pokemon (){

    $numero_aleatoreo = rand(1,5);// Funcion predeterminada 
    switch ($numero_aleatoreo){
        case 1: 
            echo "Pikachu";
            break;
        case 2: 
            echo "Miu";
            break;
        case 3: 
            echo "Miaw";
            break;
        case 4: 
            echo "Bullbasur";
            break;
        default:
            echo "Lo hay pokemon para ti";
    }
}
get_pokemon();//Invocamos a la funcion
echo "\n";
