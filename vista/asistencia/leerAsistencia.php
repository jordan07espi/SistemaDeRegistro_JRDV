<?php

require_once '../../controlador/verAsistencia.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="../../css/formularios.css">
    <title>Document</title>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"   crossorigin="anonymous">
    <title>Lista Asistencia</title>
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
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
    <div>
        <a href="nuevaAsistencia.php">
            <button class="btn" id="boton">Agregar Asistencia</button>
        </a>
    </div>
    <div id="bordeTable">
        <table class="table table-striped">
            <thead class="text-light" id="tabla">
            <tr>
                <th scope="col">Nombres</th>
                <th scope="col">Devocional</th>
                <th scope="col">Fecha </th>
                <th scope="col">Asistió</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    if($result -> num_rows > 0) {
                        while($row = $result -> fetch_assoc()){
                            if ($row['devocional'] ==1){
                                $dev= "Si";
                            }else{
                                $dev = "No";
                            }
                            if ($row['asiste'] ==1){
                                $asi= "Si";
                            }else{
                                $asi = "No";
                            }
                        echo '<tr>';
                        echo '<td>'. $row['nombres'] .'</td>';
                        echo '<td>'.$dev  . '</td>';
                        echo '<td>'. $row['fecha_asistencia'] . '</td>';
                        echo '<td>'. $asi. '</td>';
                        echo '</td>';
                        echo '</tr>';
                        }
                        $result -> free();
                        } else {
                            echo'<p><em> No existen datos registrados</em></p>';
                    }
                    
                ?>
        </tbody>
        </table>
        <div class="col-md-4">
        <a href="reporte.php" target="_blank" >GENERAR REPORTE PDF</a>  
<br>
</div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

