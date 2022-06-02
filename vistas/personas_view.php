<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Personas</title>
    </head>
    <body>


    <h1>Personas del momento</h1>
        <?php

        require_once($_SERVER["DOCUMENT_ROOT"]."/sistema_remesas_dairy/db/db.php");

        require_once ($_SERVER["DOCUMENT_ROOT"]."/sistema_remesas_dairy/controladores/personas_controlador.php");

            foreach ($datos as $dato) {
                echo "<br/>".$dato["nombre"]."<br/>";
            }
        ?>
    

    </body>


</html>
