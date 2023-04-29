//Validacion de usuario 
Este ciclo es muy similar al while, con la particularidad de que no importa si tu conidición es 
verdadera o es falsa, tu ciclo se va a ejecutar por lo menos una vez, al menos una, ya si se 
vuelve a ejecutar o no dependerá de si la condición es verdadera o falsa, pero al menos una vez 
sí que se va a ejecutar.
<?php
$usernames=array("Pepito","Mr.Michi","Jpabon");
//otra manera $usernames= ["Pepito","Mr.Michi","Jpabon"];
do
{ 
    $username=readline("Ingrese el nombre de usuario: ");
    echo "\n";
}
while(in_array($username,$usernames));
echo "Felicidades ya estas registrado";
echo "\n";
