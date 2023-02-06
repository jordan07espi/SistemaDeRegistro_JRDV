<?php
require_once '../../modelo/conexion.php';
//Leer los datos y visualizarlos en los cuadros de texto para su edicion

if(isset($_GET['id'])&& !empty(trim($_GET['id']))){
    $query='SELECT * FROM participante WHERE id_participante=?';
    if($stmt=$conn-> prepare($query)){
        $stmt-> bind_param('i', $_GET['id']);
        if($stmt-> execute()){
            $result=$stmt -> get_result();
            if($result->num_rows==1){
                $row=$result-> fetch_array(MYSQLI_ASSOC);
                $nombres= $row['nombres'];
                $direccion= $row['direccion'];
                $fecha_nacimiento= $row['fecha_nacimiento'];
                $fecha_aceptacioncristo= $row['fecha_aceptacioncristo'];
                $fecha_bautizo= $row['fecha_bautizo'];
                $discipulado= $row['discipulado'];
                $parentezco= $row['parentezco'];
                $nombres_personaiglesia= $row['nombres_personaiglesia'];
                $nombres_representante= $row['nombres_representante'];
                $contacto_representante= $row['contacto_representante'];   
                $alergia= $row['alergia']; 
                $detalle_alergia= $row['detalle_alergia']; 
                $medicamento= $row['medicamento']; 
                $detalle_medicamento= $row['detalle_medicamento'];
                $problema_salud= $row['problema_salud'];
                $detalle_problemasalud= $row['detalle_problemasalud'];
                $situacion_emocional= $row['situacion_emocional'];
               
            }else {
                echo 'Error, no existen resultados para esta consulta';
                exit();
            }

        }else{
            echo 'No se ejecutó la consulta';
            exit();
        }
        $stmt->close();
      
    }else{
        echo 'Error, intente más tarde';
        exit();
    }
}else{
   
    header('location:  ../../vista/lista/leerParticipante.php');
    exit();
}

//Tomar los datos editados y actualizarlos en la base  

//verificar si los datos fueron enviados por el método post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //verificar que existen datos en las variales enviadas
    if (
        isset($_POST['nombres']) && isset($_POST['direccion']) && isset($_POST['fecha_nacimiento']) 
    ) {
       
    
        $query = "UPDATE participante set nombres=?, direccion=?,fecha_nacimiento=?,fecha_aceptacioncristo=?,
        fecha_bautizo=?,discipulado=?,parentezco=?,nombres_personaiglesia=?,nombres_representante=?,contacto_representante
        , alergia=?, detalle_alergia=?,medicamento=?,detalle_medicamento=?, problema_salud=?, detalle_problemasalud=?,situacion_emocional=?
         WHERE id_participante=?";

        //preparar la consulta
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param(
                'sssssssssssssssssi',
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

                $_GET['id']
            );

            //Ejecutar statement
            if ($stmt->execute()) {
                header('location:  ../../vista/lista/leerParticipante.php');
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
}

?>
