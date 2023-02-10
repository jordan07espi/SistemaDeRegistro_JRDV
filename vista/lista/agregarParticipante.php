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
    <title>Nuevo usuario</title>
</head>
<body>
    <div class="container">
        <div class="title">Agregar un adolescente</div>
        <div class="content">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="user-details">
                    <div class="input-box">
                        <span for="">Nombre</span>
                        <input type="text" name="nombres" required>
                    </div>
                    <div class="input-box">
                        <span for="">Direccion</span>
                        <input type="text" name="direccion" required>
                    </div>
                    <div class="input-box">
                        <span for="">Fecha nacimiento</span>
                        <input type="date" name="fecha_nacimiento" required>
                    </div>
                    <div class="input-box">
                        <span for="">Fecha que acepto a Cristo</span>
                        <input type="date" name="fecha_aceptacioncristo" required>
                    </div>
                    <div class="input-box">
                        <span for="">Fecha de Bautizo</span>
                        <input type="date" name="fecha_bautizo" required>
                    </div>
                    <div class="input-box">
                        <span for="">Discipulado</span>
                        <select name="discipulado"> <option value="1"> Si</option><option value="0"> No</option></select>
                    </div>
                    <div class="input-box">
                        <span for="">Parentezco con quien asiste</span>
                        <input type="text" name="parentezco" required>
                    </div>
                    <div class="input-box">
                        <span for="">Persona con la que asiste a la iglesia</span>
                        <input type="text" name="nombres_personaiglesia" required>
                    </div>
                    <div class="input-box">
                        <span for="">Representante</span>
                        <input type="text" name="nombres_representante" required>
                    </div>
                    <div class="input-box">
                        <span for="">Alergia</span>
                        <select name="alergia"> <option value="1"> Si</option><option value="0"> No</option></select>
                    </div>
                    <div class="input-box">
                        <span for="">Detalle de la alergia</span>
                        <input type="text" name="detalle_alergia">
                    </div>
                    <div class="input-box">
                        <span for="">Medicameto</span>
                        <select name="medicamento"> <option value="1"> Si</option><option value="0"> No</option></select>
                    </div>
                    <div class="input-box">
                        <span for="">detalle_medicamneto</span>
                        <input type="text" name="detalle_medicamento">
                    </div>
                    <div class="input-box">
                        <span for="">Problema de salud</span>
                        <input type="text" name="problema_sallud">
                    </div>
                    <div class="input-box">
                        <span for="">Detalle del problema</span>
                        <input type="text" name="detalle_problemasalud">
                    </div>
                    <div class="input-box">
                        <span for="">Situacion emocional</span>
                        <input type="text" name="situacion_emocional">
                    </div>
                    <div class="input-box">
                    <span for="">Foto</span>
                        <input type="file" name="foto" class="form-control" >
                    </div>
                    <div class="button">
                        <input type="submit" value="Agregar">
                    </div>
                    <a href="leerParticipante.php">Cancelar</a>  
                </div>
            </form>
        </div>
    </div>
</body>
</html>