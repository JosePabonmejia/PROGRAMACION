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




  