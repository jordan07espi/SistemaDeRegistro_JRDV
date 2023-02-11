<?php
require_once '../../modelo/conexion.php';
//construyo la consulta
$query = "SELECT * FROM asistencia INNER JOIN participante ON asistencia.id_participante=participante.id_participante";
$result = $conn -> query($query);
?>