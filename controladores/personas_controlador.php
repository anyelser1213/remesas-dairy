<?php
//Llamada al modelo
require_once($_SERVER["DOCUMENT_ROOT"]."/sistema_remesas_dairy/modelos/personas_modelo.php");
$per=new personas_model();
$datos=$per->get_personas();
 
?>
