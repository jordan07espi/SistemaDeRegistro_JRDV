<?php
require_once '../../controlador/lista/agregarParticipante.php';
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
    <title>Nuevo usuario</title>
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
    <br>
    <div class="container">
        <div class="title">Registrar nuevo adolescente</div>
            <div class="content">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details" for="">Nombre</span>
                            <input type="text" name="nombres" required class="form-control">
                        </div>
                        <div class="input-box">
                            <span class="details" for="">Direccion</span>
                            <input type="text" name="direccion" required class="form-control">
                        </div>
                        <div class="input-box">
                            <span class="details" for="">Fecha nacimiento</span>
                            <input type="date" name="fecha_nacimiento" required class="form-control">
                        </div>
                        <div class="input-box">
                            <span class="details" for="">Fecha que acepto a Cristo</span>
                            <input type="date" name="fecha_aceptacioncristo" required class="form-control">
                        </div>
                        <div class="input-box">
                            <span class="details" for="">Fecha de Bautizo</span>
                            <input type="date" name="fecha_bautizo" required class="form-control">
                        </div>
                        <div class="input-box">
                            <span class="details" for="">Discipulado</span>
                            <select name="discipulado"> <option value="1"> Si</option><option value="0"> No</option></select>
                        </div>
                        <div class="input-box">
                            <span class="details" for="">Parentezco con quien asiste</span>
                            <input type="text" name="parentezco" required class="form-control">
                        </div>
                        <div class="input-box">
                            <span class="details" for="">Persona con la que asiste a la iglesia</span>
                            <input type="text" name="nombres_personaiglesia" required class="form-control">
                        </div>
                        <div class="input-box">
                            <span class="details" for="">Representante</span>
                            <input type="text" name="nombres_representante" required class="form-control">
                        </div>
                        <div class="input-box">
                            <span for="" class="details">Contacto Representante</span>
                            <input type="text" name="contacto_representante" required class="form-control">
                        </div>
                        <div class="input-box">
                            <span for="">Alergia</span>
                            <select name="alergia"> <option value="1"> Si</option><option value="0"> No</option></select>
                        </div>
                        <div class="input-box">
                            <span class="details" for="">Detalle de la alergia</span>
                            <input type="text" name="detalle_alergia" class="form-control">
                        </div>
                        <div class="input-box">
                            <span class="details" for="">Medicameto</span>
                            <select name="medicamento"> <option value="1"> Si</option><option value="0"> No</option></select>
                        </div>
                        <div class="input-box">
                            <span class="details" for="">Detalle del medicamneto</span>
                            <input type="text" name="detalle_medicamento" class="form-control">
                        </div>
                        <div class="input-box">
                            <span class="details" for="">Problema de salud</span>
                            <select name="problema_salud"> <option value="1"> Si</option><option value="0"> No</option></select>
                        </div>
                        <div class="input-box">
                            <span class="details" for="">Detalle del problema</span>
                            <input type="text" name="detalle_problemasalud" class="form-control">
                        </div>
                        <div class="input-box">
                            <span class="details" for="">Situacion emocional</span>
                            <input type="text" name="situacion_emocional" class="form-control">
                        </div>
                        <div class="input-box"">
                            <span class="details" for="">Foto</span>
                            <input class="form-control" type="file" id="formFile" name="foto" >
                        </div>
                        <div class="buton">
                            <input type="submit" value="Agregar">
                        </div>
                            <a href="leerParticipante.php" class="stretched-link text-danger" style="position: relative;">Cancelar</a>  
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>