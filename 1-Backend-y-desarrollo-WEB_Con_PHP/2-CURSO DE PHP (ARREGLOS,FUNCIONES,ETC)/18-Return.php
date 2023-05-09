///RETURN
Una instrucción return termina la ejecución de una función y devuelve el control a la función de 
llamada. La ejecución se reanuda en la función de llamada, en el punto que sigue inmediatamente a 
la llamada.
<?php
function message (){
$aleatoreo =rand(1,4);
$frase = "";
switch ($aleatoreo) 
    {
        case '1':
            $frase = "No te rindas \n";
            break;
        
        case '2':
            $frase = "No me jodas \n";
            break;
        
        case '3':
            $frase = "Gana plata \n";
            break;
        
        case '4':
            $frase = "No te cases \n";
            break;
        
        default:
            # code...
            break;
    }
    return $frase;
}
echo message();
echo "\n";
