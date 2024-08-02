<?php
// Incluir el archivo de conexión a la base de datos
include 'db_conexion.php';

// Obtener el ID del usuario que inició sesión (asumiendo que está almacenado en una variable de sesión)
$user_id = $_SESSION['id'];

// Obtener el mes y año actual
$current_month = date('m');
$current_year = date('Y');

// Inicializar la variable de progreso
$progreso = 0;

// Consultar y sumar los puntajes de las tablas juego_1, juego_2, juego_4, juego_5
$tables = ['juego_1', 'juego_2', 'juego_4', 'juego_5'];
foreach ($tables as $table) {
    $query = "SELECT SUM(puntaje) as total_puntaje FROM $table WHERE id = ? AND MONTH(fecha_hora) = ? AND YEAR(fecha_hora) = ?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param('iii', $user_id, $current_month, $current_year);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $progreso += $row['total_puntaje'];
    $stmt->close();
}

// Definir la meta
$meta = 100000;

// Calcular el porcentaje de progreso
$porcentaje = ($progreso / $meta) * 100;

// Consulta para obtener los usuarios con los puntajes más altos
$query = "SELECT nombre_apellidos, foto_perfil, puntaje_total FROM usuarios ORDER BY puntaje_total DESC LIMIT 3";
$result = $conexion->query($query);

// Inicializar variables para los jugadores
$nombre_1 = $foto_1 = $puntaje_1 = '';
$nombre_2 = $foto_2 = $puntaje_2 = '';
$nombre_3 = $foto_3 = $puntaje_3 = '';

// Verificar si la consulta devolvió resultados
if ($result->num_rows > 0) {
    $index = 1;
    // Recorrer los resultados y asignar los datos a las variables correspondientes
    while ($row = $result->fetch_assoc()) {
        $nombre = $row['nombre_apellidos'];
        $foto = !empty($row['foto_perfil']) ? $row['foto_perfil'] : 'img/perfil/default.png';
        $puntaje = $row['puntaje_total'];

        if ($index == 1) {
            $nombre_1 = $nombre;
            $foto_1 = $foto;
            $puntaje_1 = $puntaje;
        } elseif ($index == 2) {
            $nombre_2 = $nombre;
            $foto_2 = $foto;
            $puntaje_2 = $puntaje;
        } elseif ($index == 3) {
            $nombre_3 = $nombre;
            $foto_3 = $foto;
            $puntaje_3 = $puntaje;
        }
        $index++;
    }
} else {
    echo "No se encontraron jugadores.";
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>