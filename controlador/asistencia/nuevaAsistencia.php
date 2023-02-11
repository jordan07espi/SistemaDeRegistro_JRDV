<?php
require_once '../../modelo/conexion.php';

//verificar si los datos fueron enviados por el método post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //verificar que existen datos en las variales enviadas
    if (
        isset($_POST['id_participante'])  && isset($_POST['devocional'])  && isset($_POST['fecha_asistencia']) && isset($_POST['asiste']))
      
               
            
     {
        $id_participante=$_POST['id_participante'];
        $devocional= $_POST['devocional'];
        $fecha_asistencia=$_POST['fecha_asistencia'];
        $asiste= $_POST['asiste'];
        
    
        //construir la consulta
        $consulta = $conn->query ("INSERT INTO asistencia(id_participante, devocional , fecha_asistencia, asiste ) VALUES ($id_participante,$devocional,'$fecha_asistencia',$asiste)");

        //Redireccionar
        header('location: ../../vista/asistencia/leerAsistencia.php');

    }else{
        echo "No se estan llenando todos los datos";
    }
    $conn -> close();
}else{
    //echo "no llenaron los datos por el metodo POST";
}/*else{
    echo "No llegaron los datos del método POST";
}*/

?>