<?php
require_once '../../controlador/verlista.php';
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
    <title>Lista Adolescentes</title>
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
                            <a class="nav-link active; text-white; fs-5" aria-current="page" href="leerParticipante.php" id="menu">Lista</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active; text-white; fs-5" aria-current="page" href="../Asistencia/leerAsistencia.php" id="menu">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active; text-white; fs-5" href="../Asistencia/nuevaAsistencia.php" id="menu">Asistencias</a>
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
        <a href="agregarParticipante.php">
            <button class="btn" id="boton">Agregar Adolescente</button>
        </a>
    </div>
    <div id="bordeTable">
        <table class="table table-striped">
            <thead class="text-light" id="tabla">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Nombres</th>
                <th scope="col">Tel??fono</th>
                <th scope="col">Representante</th>
                <!-- <th scope="col">Foto</th>// -->
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    if($result -> num_rows > 0) {
                        while($row = $result -> fetch_assoc()){
                        echo '<tr>';
                        echo '<td>' . $row['id_participante'] . '</td>';
                        echo '<td> <img  width="100" height="100" src="data:image/jpg;base64,'. base64_encode($row["foto"]). '" ></td>';
                        echo '<td>' . $row['nombres'] .'</td>';
                        echo '<td>' . $row['contacto_representante'] . '</td>';
                        echo '<td>' . $row['nombres_representante'] . '</td>';
                        echo '<td>';
                        echo '<a href="editarParticipante.php?id=' . $row['id_participante'] . '"> 
                        <button type="button" class="btn btn-primary">
                        <i class="bi bi-pencil-square" ></i>
                        </button>
                        </a>';
                        echo '<a href="../../controlador/lista/eliminarParticipante.php?id=' . $row['id_participante'] . '"> 
                        <button type="button" class="btn btn-danger">
                        <i class="bi bi-trash-fill"></i>
                        </button>
                        </a>';
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
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>