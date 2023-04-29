El ciclo while es uno de los ciclos más famosos en programación, es conocido como un “ciclo 
indefinido” porque no sabemos cuando va a terminar, debe contener valores booleanos.
Para parar un contador infinito es la clasica (Ctrl+C)
<!-- Sintaxis -->
while (*Condicion* ){
//Le decimos que imprima el mensaje hata que el contador llegue a ser mayor a 3 luego el while termina

<?php
$contador = 0;      
while ($contador<3){//Condicion para parar el cliclo 
   echo "El contador dio: ".$contador. " Vueltas \n";
   $contador++;
};

echo "\n";

//Reto: le pedire al usuario cuantas veces quiere que le muestre un mensaje
$vueltas= readline("Cuantas veces quieres que tu mensje se reproduzca?: ");
$contador=0;

if ($vueltas > 100)
{
  echo "Estas loco carajo";
}
else
{
    $mensaje =readline("Introduce el mensaje: "); 
    while ($contador<$vueltas){
    $contador++;
    echo $mensaje." ".$contador." Veces: "."\n";
    }
}    