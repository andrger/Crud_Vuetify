<?php
class Conexion{
    public static function Conectar(){
        $db_host = getenv('DB_HOST'); // Obtener el valor de la variable de entorno DB_HOST
        $db_name = getenv('DB_NAME'); // Obtener el valor de la variable de entorno DB_NAME
        $db_username = getenv('DB_USERNAME'); // Obtener el valor de la variable de entorno DB_USERNAME
        $db_pass = getenv('DB_PASS'); // Obtener el valor de la variable de entorno DB_PASS

        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

        try{
            $conexion = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_username, $db_pass, $opciones);
            return $conexion;                    
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}
    
?>

