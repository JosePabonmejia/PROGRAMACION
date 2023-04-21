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
                            MANIPULACION DE ARREGLOS 
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
