<?php
include 'db_conexion.php';

// Recibe el puntaje y el ID del usuario desde la solicitud AJAX
$puntaje = $_POST['puntaje'];
$id_usuario = $_POST['id_usuario'];

// Prepara la consulta SQL para insertar el puntaje en la base de datos
$sql = "INSERT INTO juego_1 (id_puntaje, id, fecha_hora) VALUES (?, ?, NOW())";

// Prepara la declaración
$stmt = $conexion->prepare($sql);

// Vincula los parámetros
$stmt->bind_param("ii", $puntaje, $id_usuario);

// Ejecuta la declaración
$stmt->execute();

echo "Puntaje guardado: " . $puntaje;
?>