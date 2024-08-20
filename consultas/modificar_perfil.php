<?php
include '../db_conexion.php';
$nombre_apellidos = $_POST['nombre_apellidos'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$genero = $_POST['genero'];
$celular = $_POST['celular'];
$foto_perfil = $_POST['foto_perfil'];

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$user_id = $_SESSION['id'];

$sql = "UPDATE usuarios SET nombre_apellidos = '$nombre_apellidos', email= '$email' , contrasena = '$contrasena', genero = '$genero' , celular = $celular , foto_perfil ='$foto_perfil' WHERE id =$user_id";
echo $sql;
// Ejecuta la consulta
if ($conexion->query($sql) === TRUE) {
    // Redirige al usuario a dashboard.php
    header('Location: ../dashboard.php');
    exit();
} else {
    // Muestra el error
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>