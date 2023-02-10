<?php
require_once '../../modelo/conexion.php';

//verificar si los datos fueron enviados por el método post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //verificar que existen datos en las variales enviadas
    if (
        isset($_POST['nombres'])  && isset($_POST['direccion'])  && isset($_POST['fecha_nacimiento'])
    ) {
        

 
    
        //construir la consulta
        $query = "INSERT INTO participante(nombres, direccion , fecha_nacimiento , fecha_aceptacioncristo,fecha_bautizo,discipulado, 
        parentezco, nombres_personaiglesia ,nombres_representante,contacto_representante,alergia,detalle_alergia,medicamento,
        detalle_medicamento,problema_salud,detalle_problemasalud,situacion_emocional, foto ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        //preparar la consulta
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param(
                'sssssssssssssssss',
                $POST['nombres'],
                $POST['direccion'],
                $POST['fecha_nacimiento'],
                $POST['fecha_aceptacioncristo'],
                $POST['fecha_bautizo'],
                $POST['discipulado'],
                $POST['parentezco'],
                $POST['nombres_personaiglesia'],
                $POST['nombres_representante'],
                $POST['contacto_representante'],
                $POST['alergia'], 
                $POST['detalle_alergia'],
                $POST['medicamento'],
                $POST['detalle_medicamento'],
                $POST['problema_salud'],
                $POST['detalle_problemasalud'],
                $POST['situacion_emocional'],
                $POST['foto']
            );

            //Ejecutar statement
            if ($stmt->execute()) {
                header('location: ../../vista/lista/leerParticipante.php');
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
