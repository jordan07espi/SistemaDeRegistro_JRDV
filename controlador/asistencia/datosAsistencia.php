<?php
require_once '../../modelo/conexion.php';
//construyo la consulta
$query = "SELECT * FROM participante;";
$result = $conn -> query($query);

?>