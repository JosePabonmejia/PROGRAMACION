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
