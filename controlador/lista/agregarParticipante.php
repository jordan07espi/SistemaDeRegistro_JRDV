<?php 
//Verificar si los canpos son enviados
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $for_update = array_filter($_POST,function($k){
        return $k!=='Agregar';
        },ARRAY_FILTER_USE_KEY);

    //Revisar imagen
    $revisar = getimagesize($_FILES["foto"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['foto']['tmp_name'];
        $foto = addslashes(file_get_contents($image));

        //Conexion a la base de datos
        include_once('../../modelo/conexion.php');             

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
            $consulta = $conn->query("INSERT INTO participante(nombres, direccion , fecha_nacimiento , fecha_aceptacioncristo,fecha_bautizo,discipulado, 
            parentezco, nombres_personaiglesia ,nombres_representante,contacto_representante,alergia,detalle_alergia,medicamento,
            detalle_medicamento,problema_salud,detalle_problemasalud,situacion_emocional, foto )
            VALUES ('$nombres', '$direccion', ' $fecha_nacimiento', '$fecha_aceptacioncristo', '$fecha_bautizo',  $discipulado,'$parentezco','$nombres_personaiglesia',
            '$nombres_representante', '$contacto_representante',$alergia,'$detalle_alergia',$medicamento,'$detalle_medicamento',$problema_salud,'$detalle_problemasalud',
            '$situacion_emocional','$foto ')");

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
