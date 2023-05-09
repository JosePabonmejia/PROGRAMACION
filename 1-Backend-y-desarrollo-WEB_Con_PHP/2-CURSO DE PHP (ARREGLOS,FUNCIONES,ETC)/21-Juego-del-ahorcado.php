<?php
$posible_palabra=array("Ala","Dolor","Guitarra","Halo","Bolivia");
define("MAX_ATTEMPS",6);//DEFINIMOS CUANTOS INTENTOS TENDRA EL USUARIO
echo"Juego del ahorcado \n\n";

// le pedimos una palabra guardada de array

$palabra_elegida = $posible_palabra[rand(0,4)];//selecciona palabra aleatorea
$palabra_elegida = strtolower($palabra_elegida);//trasforma todo en minusculas
$longitud_palabra=strlen($palabra_elegida);//calcula cuantras letas hay en la palabra
$descubrir_letras=str_pad("",$longitud_palabra,"_");//Hace que las letras de las palabras aparezcan con guiones bajos
$intentos=0;

echo"Palabra de $longitud_palabra letras \n\n";
echo $descubrir_letras."\n\n";

$letra_jugador=readline("Introduce una letra: ");
$letra_jugador=strtolower($letra_jugador);

if (str_contains ($palabra_elegida, $letra_jugador)) //str_contains verifica letras del jugador dentro de la palabra del array 
    {
        $compensar=0;
        while ($posicion_letra=strpos($palabra_elegida,$letra_jugador,$compensar) !==false)
            {   
                $descubrir_letras[$posicion_letra]=$letra_jugador;
                $compensar=$posicion_letra+1;

            }    
        
    }
    else
    {
        $intentos++;
        echo "Palabra incorrecta";
        echo "Te quedan".(MAX_ATTEMPS - $intentos);
    };
echo"\n";