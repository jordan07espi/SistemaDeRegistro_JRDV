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
          
            <table class="table table-striped">
            <thead class="text-light" id="tabla">
            <tr>
               
             
                <th scope="col">Nombres</th>
                <th scope="col">Devocional</th>
                <th scope="col">Fecha </th>
                <th scope="col">Asistió</th>
                <!-- <th scope="col">Foto</th>// -->
                
            </tr>
            </thead>
            <tbody>
           
                <?php
                    if($result -> num_rows > 0) {
                        while($row = $result -> fetch_assoc()){
                      
                        echo '<tr>';
                        echo ' <form action="'.$_SERVER['PHP_SELF'].'" method="post" >';
                        echo '<td>    <input type="text" name="id_participante" value='.$row['id_participante'].' hidden > '.$row['nombres'].'</td>'; 
                  
                      
                        echo '<td> <select name="devocional"> <option value="1"> Si</option><option value="0"> No</option></select></td>';
                        echo '<td>  <input type="date" name="fecha_asistencia" required></td>';
                        echo '<td>  <select name="asiste"> <option value="1"> Si</option><option value="0"> No</option></select></td>';
                        
                        echo '<td>';
                        echo  '<div class="button">
                        <input type="submit" value="Guardar">
                        </div>';
                       
                        echo '</td>';
                        
                       echo ' </form>';
                        echo '</tr>';
                        }
                      
                        } 
                        else {
                            echo'<p><em> No existen datos registrados</em></p>';
                    }
                    
                ?>
        </tbody>

        </table>
                   
                    <a href="leerAsistencia.php">Cancelar</a>  
           
        </div>
    </div>
</body>
</html>