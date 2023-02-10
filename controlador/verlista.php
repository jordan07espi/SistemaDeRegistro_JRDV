<?php
require_once '../../modelo/conexion.php';
//construyo la consulta
$query = "SELECT * From participante";
$result = $conn -> query($query);

?>