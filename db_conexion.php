<?php
$conexion = new mysqli('localhost', 'root', '', 'totalplay-dashboard');

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>