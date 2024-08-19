<?php
// Iniciar la sesión
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    include 'db_conexion.php';

    $sql = "SELECT * FROM usuarios WHERE email = ? AND contrasena = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ss", $email, $contrasena);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso
        $user = $result->fetch_assoc();
        $_SESSION['loggedin'] = true;
        $_SESSION['nombre_apellidos'] = $user['nombre_apellidos'];
        $_SESSION['id'] = $user['id'];

        // Redirigir al usuario a dashboard.php
        header('Location: dashboard.php');
        exit;
    } else {
        // Establecer mensaje de error en la variable de sesión
        $_SESSION['error_login'] = 'Error: Datos de inicio de sesión equivocados.';
        // Redirigir de nuevo a index.php
        header('Location: index.php');
        exit;
    }

    $stmt->close();
    $conexion->close();
}
?>