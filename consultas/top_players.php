<?php
// Incluir el archivo de conexión a la base de datos
include 'db_conexion.php';

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