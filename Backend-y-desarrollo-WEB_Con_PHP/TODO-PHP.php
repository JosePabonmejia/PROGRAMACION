                                    <!-- QUE ES UN ARREGLO -->
Un arreglo es una variable compuesta, o sea una varíale que contiene múltiples valores.
podemos acceder a esos valores haciendo referencia a sus respectivos subíndices, 
los subíndices en un arreglo siempre empiezan en cero.
<?php

$edades = [20,18,40];//esto es un arreglo 
$cursos = array(Matematicas,Sociales,Naturales); //Otra manera de hacer un arreglo 

echo "una de las edades dentro del arreglo es " .$edades [1];
echo "\n";

echo "una de las edades dentro del arreglo es " .$cursos [1];
echo "\n";//PARA EJECUTARLO: Solo por terminal (php nombrearch.php)

                                ///ARREGLOS ASOCIATIVOS QUE ES UN SUB-INDICE 
Es lo mismo pero con otros valores
Los arreglos asociatuvos puee usarse para guardr datos obtenidos de una base de datos, puede utilizarse para agrupar 
caracteristicas de elmentos como lo hecho con personas, pueden usarse para guardar las “piezas” de una URL incluso 
pueden guardarse en constantes, es decir un arraglo de varios PI… ok ok, no de varios PI pero su podría llegar a ser el 
nombre de un usuario que es el mismo durante una sesion.

<?php
$edades = array(

    "Fernando" => 32,
    "Michi" => 22,
    "Jose" => 28,
    "Marcelo" => 18,
);
echo "La edad de jose es" . $edades ["Jose"];
echo "\n"; 

$cafes = array(
    "Capuchino" => 50,
    "Late" => 65,
    "Americano" => 70
);
echo "El precio del cafe Americano esta a   {$cafes ['Americano']
}";

$personas = array(

    "Fernando" => array("Edad" => 39,
                        "Apellido" => "Parra"),

    "Jose" => array("Edad" => 28,
                        "Apellido" => "Pabon"),
);
echo "La informacion de jose es: Edad: " .$personas["Jose"]["Edad"];
echo "\n"; 
                            //MANIPULACION DE ARREGLOS FUNCIONES

<?php!ªº                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
$edades = [18, 22, 40, 60];
//Funcion count : Nos sirve para contar cuantos elementos hay dentro de un arreglo 
echo "Existen ".count($edades) ." Datos";
echo "\n"; //Son 4
//Funcion array_push: Permite añadir algun numero al final del arreglo 
array_push($edades,77);//Metera el numero 13 al final del arreglo
var_dump($edades);
//Funcion is_array: Nos sirve para definir o ver si alguna variable es realmente un arreglo osea contiene info
$esto_no_es_un_arreglo ="";
var_dump (is_array($esto_no_es_un_arreglo));//bool false
Funcion explode:  Sirve para convertir un string en un arreglo 
$lista_de_frutas="Fresa,Cereza,Manzana";
$lista_de_frutas_array = explode(",", $lista_de_frutas);
var_dump($lista_de_frutas_array);
//Funcion implode: Es lo opuesto a explode osea convierte arreglos en strings
$lista_de_frutas_array=["Fresa","Cereza","Manzana"];
$lista_de_frutas = implode(",", $lista_de_frutas_array);
var_dump($lista_de_frutas);

<!-- 
TAREA
escuela de michis 
3 mihis 
nombre 
ocupacion
color 
comidas favosritas y no 
quiere que hagamos un arreglo donde tengamos como centro la escuela de michis por lomenos tres michis, cada michi debe tener un nombre una ocupacion, color y comidas favoritas como comidas no favoritas 
--> 
<?php
$escuela = array(
    array("Nombre" => "Michi_Jose", "Ocupacion" =>"Camarografo", "Color" => "Rojo", "Comidas" => array("Favoritas"=>"Lasaña,Atun", "Aborrecidas"=>"Salteña,Sopa")),
    array("Nombre" => "Michi_Alfredo", "Ocupacion" =>"Ingeniero", "Color" => "Blanco", "Comidas" => array("Favoritas"=>"Papas,Pizza", "Aborrecidas"=>"Sopa,Pastel")),
    array("Nombre" => "Michi_Kiki", "Ocupacion" =>"Doctora", "Color" => "Verde", "Comidas" => array("Favoritas"=>"Tacos,Empanadas", "Aborrecidas"=>"Pike,Chanco")),
);

$Michi_Jose = $escuela[0];//Para poder imprimir datos mas internos del array debemos primero definirla como veriable 
echo "Las comidas favoritas de Michi Jose son : ". $Michi_Jose['Comidas']['Favoritas']; 
echo "\n"; 

                                                 ///IF Y ELSE 
<!-- Podras ver la pelicula? -->
<?php
//Ve si tiene disponibilidad de entradas pero no tiene reserva y no entrega el boleto entonces se va 
//Para cada caso se debe hacer una pregunta diferente pero concatenado
$asientos = 0;
$reserva = true;
$entrega = true;

if ($asientos > 0)
    echo "Existen boletos disponibles";
else if ($reserva==false)
    echo "Perfecto muestrame el boleto";
else if ($entrega == false)
    echo "Pase caballero";
else 
    echo "No tienes boleto FUERA";

echo "\n";
                                                 ///SWITCH
Switch es otra estructura de control que nos ayuda a tomar decisiones, pero… ¿cuál es la diferencia con if y else? 
La principal diferencia es que switch funciona con casos, es decir, dependiendo de un caso tomaremos una decición u otra.
Mientras que if y else te permiten hacer comparaciones, switch te ayuda a decidir qué hacer dependiendo del caso que tengas presente.
QUEREMOS SABER LOS NUMEROS FAVORITOS DE LOS MICHIS 

<?php
$michi = 3;

switch($michi)
{
   case 1:
       echo "Su numero favorito es el 9 ";
       break;
   case 2:
       echo "Su numero favorito es el 3 ";
       break;
   case 3:
       echo "Su numero favorito es el 5 ";
       break;
   case 4:
       echo "Su numero favorito es el 7 ";
       break;
   case 5:
       echo "Su numero favorito es el 1 ";
       break;
   default://DATO POR DEFECTO
       echo "Ese michi no existe:c"; 
};
echo "\n";
                                                        //RETO
Puedo retirar tus donaciones de Twitch?
Recuerda que debes mantener 100 dolares en tu cuenta para retirar tu Money
<?php
$Money = readline("Streamer por favor ingresa el numero de saldo que tienes: ");

if ($Money>=100)
{
    $Money=$Money-100;
    echo "Tu saldo es de: ". $Money;
}
else 
{
    echo "No posees lo minimo de saldo loco: ". $Money;
}
echo "\n";

<!-- Calculadora con if y switch -->
<?php
echo "Selecciona 1 para Sumar (+) ";
echo"\n";
echo "Selecciona 2 para Restar (-) ";
echo "\n";
echo "Selecciona 3 para Multiplicar (*) ";
echo"\n";
echo "Selecciona 4 para Dividir (%) ";
$operacion = readline("Seleccion (?): ");
 
if ($operacion > 4)
    echo "Solo puedes seleccionar un avalor del 1 al 4  " .$operacion." no es un valor del 1 al 4"; 
else 
switch($operacion){
    case 1:
        echo "seleccionaste Suma ";
        $primero = readline("Introduce un numero: ");
        $segundo = readline("Introduce otro numero: ");
        $suma = $primero + $segundo;
        echo "La suma es igual a: ". $suma;
     break;
         
    case 2:
        echo "seleccionaste Resta ";
        $primero = readline("Introduce un numero: ");
        $segundo = readline("Introduce otro numero: ");
        $suma = $primero - $segundo;
        echo "La resta es igual a: ". $suma;
     break;
         
    case 3:
        echo "seleccionaste Multiplicacion ";
        $primero = readline("Introduce un numero: ");
        $segundo = readline("Introduce otro numero: ");
        $suma = $primero * $segundo;
        echo "La multiplicacion es igual a: ". $suma;
     break;
         
    case 4:
        echo "seleccionaste Divicion ";
        $primero = readline("Introduce un numero: ");
        $segundo = readline("Introduce otro numero: ");
        $suma = $primero / $segundo;
        echo "La divicion es igual a: ". $suma;
     break;
}
echo"\n";