Sintaxis  el iterable puede ser un arreglo  AS Valor que queremos mostar 
foreach($Iterable as $Valor){
    //Codigo a repetir
}
Otra menera de Sintaxis
foreach($Iterable as $Llave =>$Valor){
//Codigo a repetir
}
<?php
// $tiendita_de_cafes = array(
//     "Americano"=>24,
//     "Latte"=>14,
//     "Capuchino"=>30,
//     "Moca"=>22,
// );
// foreach ($tiendita_de_cafes as  $Cafes=>$Precio) {
//     echo "El cafe $Cafes cuesta $$Precio Bs\n";
// }
// echo "\n";
//Ejemplo con (breack);
// $tiendita_de_cafes = array(
//     "Americano"=>24,
//     "Latte"=>14,
//     "Recalentedo"=>10,
//     "Capuchino"=>30,
//     "Moca"=>22,
// );
// foreach ($tiendita_de_cafes as  $cafe=>$precio) {
//     echo "Actualemente encontre al cafe $cafe \n";
//     if ($cafe=="Latte"){
//         echo "Encontarmos a Latte";
//         break;
//     }

// }
// echo "\n";
//CONTINUE
$tiendita_de_cafes = array(
    "Americano"=>24,
    "Latte"=>14,
    "Recalentado"=>10,
    "Capuchino"=>30,
    "Moca"=>22,
);
foreach ($tiendita_de_cafes as  $cafe=>$precio) {
    
    if ($cafe=="Recalentado"){
        continue;     
    }
    echo "El cafe $cafe es muy rico \n";

}
echo "\n";
