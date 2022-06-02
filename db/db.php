<?php
class Conectar{

    

    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "sistema_remesas_dairy");
        //$conexion->query("SET NAMES 'utf8'");
        /* comprobar la conexión */
        if ($conexion->connect_errno) {
            //printf("Conexión fallida: %s\n", $conexion->connect_error);
            exit();
        }else{
            //printf("Conexión exitosa: %s\n", $conexion->connect_error);
            return $conexion;
        }
        
    }
}
?>
