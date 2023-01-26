<?php

class Conexion{	  
  public static function Conectar() {        
    define('servidor', 'ls-2c7c10122ce807738c3a83d761dbe4ce45dbc5a5.calrgacor2x0.us-east-1.rds.amazonaws.com');
    define('nombre_bd', 'dbpass');
    define('usuario', 'admin');
    define('password', '12345678');						        
      $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
      try{
          $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);	
          	
          return $conexion;
      }catch (Exception $e){
          die("El error de Conexión es: ". $e->getMessage());
      }
  }
}
?>
