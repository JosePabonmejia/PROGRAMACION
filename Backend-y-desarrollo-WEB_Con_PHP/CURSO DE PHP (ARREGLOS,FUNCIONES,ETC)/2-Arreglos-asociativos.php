 <?php

// $edades = array(
//     "Fernando" => 32,
//     "Michi" => 22,
//     "Jose" => 28,
//     "Marcelo" => 18,
// );
// echo "La edad de jose es" . $edades ["Jose"];
// echo "\n"; 

// $cafes = array(
//     "Capuchino" => 50,
//     "Late" => 65,
//     "Americano" => 70
// );
// echo "El precio del cafe Americano esta a   {$cafes ['Americano']
// }";


$personas = array(

    "Fernando" => array("Edad" => 39,
                        "Apellido" => "Parra"),

    "Jose" => array("Edad" => 28,
                        "Apellido" => "Pabon"),
);
echo "La informacion de jose es: Edad: " .$personas["Jose"]["Edad"];
echo "\n"; 
