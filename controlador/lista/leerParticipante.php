<?php
require_once '../../modelo/conexion.php';
if(isset($_GET['id'])&& !empty(trim($_GET['id']))){
$query='SELECT * FROM partipante WHERE id_participante=?';
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
    $conn->close();
}else{
    echo 'Error, intente más tarde';
    exit();
}
}

?> 