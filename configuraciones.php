<?php
        //Aqui incluimos el menu
        //echo $_SERVER["DOCUMENT_ROOT"]."/sistema_remesas_dairy/modelos/personas_modelo.php<br/>";
        //echo $_SERVER["DOCUMENT_ROOT"]."/vistas/menu.php<br/>";
        //echo getcwd(). "<br/>";

        //if()
        //echo "<br/><br/>directorio: ". __DIR__;
        //echo "<br/><br/>dirname: ". dirname(__FILE__);
        //echo "<br/><br/>archivo: ". __FILE__;
        //echo "<br/><br/>nombre directorio: ".basename(dirname(__FILE__))."<br>";
        
        if($_SERVER["DOCUMENT_ROOT"] != "/app"){

          
          //$ruta_fija = "/sistema_remesas_dairy";
          if(!isset($GLOBALS["ruta_fija"])){//si no esta definida la creamos

            $GLOBALS["ruta_fija"] = "/sistema_remesas_dairy";
          }
          

          
          
        }else{

            if(!isset($GLOBALS["ruta_fija"])){//si no esta definida la creamos

                $GLOBALS["ruta_fija"] = "";
              }

          
          
        }
        
        
        ?>