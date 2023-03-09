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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"   crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Asistencias</title>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand navbar-dark" id="navbar">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <img src="../../img/Logo.png" alt="" width="100" height="50">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active; text-white; fs-5" aria-current="page" href="../lista/leerParticipante.php" id="menu">Lista</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active; text-white; fs-5" aria-current="page" href="leerAsistencia.php" id="menu">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active; text-white; fs-5" href="nuevaAsistencia.php" id="menu">Asistencias</a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown; position-absolute top-0 end-0" id="botonBien">
                                <a class="nav-link dropdown-toggle; fs-5" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" id="menu">Bienvenido</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
        <h5 class="titulo">Registrar Asistencia</h5>
        <div id="bordeTable">
            <table class="table table-striped">
                <thead class="text-light" id="tabla">
                    <tr>
                        <th scope="col">Nombres</th>
                        <th scope="col">Devocional</th>
                        <th scope="col">Fecha </th>
                        <th scope="col">Asistió</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($result -> num_rows > 0) {
                            while($row = $result -> fetch_assoc()){
                            echo '<tr>';
                            echo ' <form action="'.$_SERVER['PHP_SELF'].'" method="post" >';
                            echo '<td>  <input type="text" name="id_participante" value='.$row['id_participante'].' hidden > '.$row['nombres'].'</td>'; 
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
                <a href="leerAsistencia.php"class="stretched-link text-danger" style="position: relative;">Cancelar</a>  
        </div>
</body>
</html>