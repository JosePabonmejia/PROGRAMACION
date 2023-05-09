<?php
function obtener_hora(){
    return date("h:i a");
}
echo "Hola me puedes decir la hora? ";
echo "Claro son las" .obtener_hora();
