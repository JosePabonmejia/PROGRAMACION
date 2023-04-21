<?php
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
//Funcion explode:  Sirve para convertir un string en un arreglo 
$lista_de_frutas="Fresa,Cereza,Manzana";
$lista_de_frutas_array = explode(",", $lista_de_frutas);
var_dump($lista_de_frutas_array);
//Funcion implode: Es lo opuesto a explode osea convierte arreglos en strings
$lista_de_frutas_array=["Fresa","Cereza","Manzana"];
$lista_de_frutas = implode(",", $lista_de_frutas_array);
var_dump($lista_de_frutas);
