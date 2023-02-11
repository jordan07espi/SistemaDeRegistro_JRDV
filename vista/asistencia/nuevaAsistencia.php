<?php
require_once '../../controlador/asistencia/datosAsistencia.php';
require_once '../../controlador/asistencia/nuevaAsistencia.php';
?>


<!-- FORMULARIO -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="../../css/formularios.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo usuario</title>
</head>
<body>
    <div class="container">
        <div class="title">Registrar Asistencia</div>
        <div class="content">
    
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" >


                
                 <div class="input-box">
                        <span for="">Nombre</span>
                        <select name="id_participante">
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                            echo '<option value="' . $row['id_participante'] .'">'.$row['nombres'].'</option>';
                        }
                        $result->free();
                    } else {
                        echo '<p><em> No existen datos registrados</em></p>';
                    }
                    ?>


                </select>
                      
                    </div>

                  
                    <div class="input-box">
                        <span for="">Devocional</span>
                        <select name="devocional"> <option value="1"> Si</option><option value="0"> No</option></select>
                    </div>
                    <div class="input-box">
                        <span for="">Fecha</span>
                        <input type="date" name="fecha_asistencia" required>
                    </div>
                    <div class="input-box">
                        <span for="">Asiste</span>
                        <select name="asiste"> <option value="1"> Si</option><option value="0"> No</option></select>
                    </div>
                   
                 <div class="button">
                                    <input type="submit" value="Guardar">
                 </div>
                    <a href="leerAsistencia.php">Cancelar</a>  
            </form>
     
                   
        </div>
    </div>
</body>
</html>