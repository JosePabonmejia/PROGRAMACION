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