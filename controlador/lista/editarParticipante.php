<?php
require_once '../../modelo/conexion.php';
//Leer los datos y visualizarlos en los cuadros de texto para su edicion

if(isset($_GET['id'])&& !empty(trim($_GET['id']))){
    $id = $_GET['id'];
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
                $foto = $row['foto'];
               
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

$path_location ='';
//Tomar los datos editados y actualizarlos en la base  
if($_SERVER['REQUEST_METHOD'] == 'POST'){


    //Revisar imagen
    $revisar = getimagesize($_FILES["foto"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['foto']['tmp_name'];
        $foto = addslashes(file_get_contents($image));

            

        //Verificar si los datos de las variables estan enviadas
        if(isset($_POST['nombres'])  && isset($_POST['direccion'])  && isset($_POST['fecha_nacimiento'])) {

            //Variables
            $nombres= $_POST['nombres'];
            $direccion= $_POST['direccion'];
            $fecha_nacimiento= $_POST['fecha_nacimiento'];
            $fecha_aceptacioncristo= $_POST['fecha_aceptacioncristo'];
            $fecha_bautizo= $_POST['fecha_bautizo'];
            $discipulado= $_POST['discipulado'];
            $parentezco= $_POST['parentezco'];
            $nombres_personaiglesia= $_POST['nombres_personaiglesia'];
            $nombres_representante= $_POST['nombres_representante'];
            $contacto_representante= $_POST['contacto_representante'];   
            $alergia= $_POST['alergia']; 
            $detalle_alergia= $_POST['detalle_alergia']; 
            $medicamento= $_POST['medicamento']; 
            $detalle_medicamento=$_POST['detalle_medicamento'];
            $problema_salud=$_POST['problema_salud'];
            $detalle_problemasalud= $_POST['detalle_problemasalud'];
            $situacion_emocional= $_POST['situacion_emocional'];
           
             //Contruir la consulta
             $query_update = "UPDATE participante SET nombres='$nombres',direccion='$direccion',fecha_nacimiento='$fecha_nacimiento',fecha_aceptacioncristo='$fecha_aceptacioncristo',
             fecha_bautizo='$fecha_bautizo', discipulado=$discipulado, parentezco='$parentezco',nombres_personaiglesia='$nombres_personaiglesia',nombres_representante='$nombres_representante',
             contacto_representante='$contacto_representante',alergia=$alergia, detalle_alergia='$detalle_alergia', medicamento=$medicamento, detalle_medicamento='$detalle_medicamento',problema_salud=$problema_salud,
             detalle_problemasalud='$detalle_problemasalud',situacion_emocional='$situacion_emocional',
             foto= '$foto' WHERE id_participante='$id'";
 
              $conn->query($query_update); 

            //Redireccionar
            header('location: ../../vista/lista/leerParticipante.php');

        }else{
            echo "No se estan llenando todos los datos";
        }
        $conn -> close();
    }else{
        //echo "no llenaron los datos por el metodo POST";
    }
}

?>
