<?php
    
if(isset($_GET['id'])&& !empty(trim($_GET['id']))){
    require_once '../../modelo/conexion.php';
    $query='DELETE FROM participante WHERE id_participante=?';
    if($stmt=$conn-> prepare($query)){
        $stmt-> bind_param('i',  $_GET['id']);
        
       try{ if($stmt->execute()){
            header('location: ../../vista/lista/leerParticipante.php');
            exit(); 

            }
        }catch(Exception $e){
            $_SESSION['msg-error-delete-auto'] = "Error. El estudiante ha sido registrado en la asistencia";
            header('location: ../../vista/lista/leerParticipante.php');
        }
    
    }

    
    $conn->close();

}else{
    echo "Error!, Por favor intente mas tarde";
}


?>