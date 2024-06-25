<?php
// Iniciar la sesión
session_start();

// Incluir la conexión a la base de datos
include '../../db_conexion.php';

// Recibe el puntaje desde la solicitud AJAX
$puntaje = $_POST['puntaje'];
$id_usuario = $_SESSION['id'];

// Prepara la consulta SQL para insertar el puntaje en la base de datos
$sql = "INSERT INTO juego_4 (id, puntaje, fecha_hora) VALUES (?, ?, NOW())";

// Prepara la declaración
$stmt = $conexion->prepare($sql);

// Vincula los parámetros
$stmt->bind_param("ii", $id_usuario, $puntaje);

// Ejecuta la declaración
$stmt->execute();

if ($stmt->affected_rows > 0) {
    $stmt->close();
    $conexion->close();
    echo json_encode(['success' => true]);
    exit();
} else {
    $stmt->close();
    $conexion->close();
    echo json_encode(['success' => false, 'error' => 'Error al guardar el puntaje.']);
    exit();
}

// Cierra la declaración y la conexión
$stmt->close();
$conexion->close();
?>