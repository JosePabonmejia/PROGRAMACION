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