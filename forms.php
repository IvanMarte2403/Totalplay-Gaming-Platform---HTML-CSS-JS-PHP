<?php
$nombre_apellidos = $_POST['nombre_apellidos'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$genero = $_POST['genero'];
$celular = $_POST['celular'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$numero_cliente_totalplay = $_POST['numero_cliente_totalplay'];

include 'db_conexion.php';

$sql = "INSERT INTO usuarios (nombre_apellidos, email, contrasena, genero, celular, fecha_nacimiento, numero_cliente_totalplay,puntaje) VALUES ('$nombre_apellidos', '$email', '$contrasena', '$genero', '$celular', '$fecha_nacimiento', '$numero_cliente_totalplay',0)";

if ($conexion->query($sql) === TRUE) {
    // Redirigir al usuario a dashboard.php
    header('Location: dashboard.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>