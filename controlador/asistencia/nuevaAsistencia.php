<?php
require_once '../../modelo/conexion.php';

//verificar si los datos fueron enviados por el método post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //verificar que existen datos en las variales enviadas
    if (
        isset($_POST['id_participante'])  && isset($_POST['devocional'])  && isset($_POST['fecha_asistencia'])
       
    ) {
        

 
    
        //construir la consulta
        $query = "INSERT INTO asistencia(id_participante, devocional , fecha_asistencia ) VALUES (?,?,?)";

        //preparar la consulta
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param(
                'sss',
                $POST['id_participantebres'],
                $POST['devocional'],
                $POST['fecha_asistencia'],
               
        
        
            );

            //Ejecutar statement
            if ($stmt->execute()) {
                header('location: ../../vista/lista/leerAsistencia.php');
                exit();
            } else {
                echo "Error! El statement no se ejecutó";
            }
            $stmt->close();
        } else {
            echo "Error en la preparación del statement";
        }
    } else {
        echo "No se están llenando todos los datos";
    }
}/*else{
    echo "No llegaron los datos del método POST";
}*/

?>