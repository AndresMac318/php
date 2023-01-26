<?php
include_once 'conexion.php';
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$data = json_decode(file_get_contents("php://input"));

$opcion = $data->opcion;
//$id_huella = $data->id_huella;
$nombre = $data->nombre;

switch($opcion){
    
    case 1: //Cargar
        $consulta = "SELECT * FROM huellas ORDER BY id DESC LIMIT 1";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;      

    case 2://Consultar
        $consulta = "SELECT * FROM huellas ORDER BY id DESC LIMIT 1";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC); 

        foreach ($data as $row => $id) {
            $id_huella_empleado =  $id['id_huella'];
        }
        
        $consulta = "SELECT * FROM persona WHERE id_huella = '$id_huella_empleado'";     
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS

$conexion = NULL;
