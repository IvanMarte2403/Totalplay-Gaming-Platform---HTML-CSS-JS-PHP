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

// Sumar los puntajes de las tablas juego_1, juego_2, juego_4, juego_5 y encontrar los 3 más altos
$puntajes = [];
foreach ($tables as $table) {
    $query = "SELECT SUM(puntaje) as total_puntaje FROM $table";
    $result = $conexion->query($query);
    if ($result) {
        $row = $result->fetch_assoc();
        $puntajes[] = [
            'table' => $table,
            'total_puntaje' => $row['total_puntaje']
        ];
    }
}

// Ordenar los puntajes de mayor a menor
usort($puntajes, function($a, $b) {
    return $b['total_puntaje'] - $a['total_puntaje'];
});

// Crear las variables de los 3 puntajes más altos
for ($i = 0; $i < 3; $i++) {
    $table = $puntajes[$i]['table'];
    $table_number = substr($table, -1);
    $name_variable = 'nombre_game' . $table_number;
    ${'top_name_' . ($i + 1)} = $$name_variable;
    ${'top_img_' . ($i + 1)} = 'img/juegos/portada/juego-portada-general-' . $table_number . '.png';
    ${'top_puntaje_' . ($i + 1)} = $puntajes[$i]['total_puntaje'];
}

// Inicializar variables del personaje
$personaje_dashboard = '';
$personaje_nombre = '';

// Asignar el personaje basado en las condiciones dadas
if ($progreso < 1000) {
    $personaje_dashboard = 'img/dashboard/personajes/0.png';
    $personaje_nombre = 'Novato';
} else {
    $max_puntaje = 0;
    $max_table = '';
    foreach ($puntajes as $puntaje) {
        if ($puntaje['total_puntaje'] > $max_puntaje) {
            $max_puntaje = $puntaje['total_puntaje'];
            $max_table = $puntaje['table'];
        }
    }

    $table_number = substr($max_table, -1);
    $personaje_dashboard = 'img/dashboard/personajes/' . $table_number . '.png';
    $name_variable = 'nombre_personaje' . $table_number;
    $personaje_nombre = $$name_variable;
}

// Obtener las partidas con mayor puntaje para el usuario
$partidas = [];
foreach ($tables as $table) {
    $query = "SELECT puntaje, fecha_hora FROM $table WHERE id = ? ORDER BY puntaje DESC LIMIT 2";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $partidas[] = [
            'table' => $table,
            'puntaje' => $row['puntaje'],
            'fecha_hora' => $row['fecha_hora']
        ];
    }
    $stmt->close();
}

// Ordenar las partidas por puntaje en orden descendente y tomar las dos mejores
usort($partidas, function($a, $b) {
    return $b['puntaje'] - $a['puntaje'];
});
$top_partidas = array_slice($partidas, 0, 2);

// Crear las variables de las partidas
for ($i = 0; $i < count($top_partidas); $i++) {
    $table_number = substr($top_partidas[$i]['table'], -1);
    $name_variable = 'nombre_game' . $table_number;
    ${'juego_partida_' . ($i + 1)} = $$name_variable;
    ${'dia_partida_' . ($i + 1)} = date('d', strtotime($top_partidas[$i]['fecha_hora']));
    ${'hora_partida_' . ($i + 1)} = date('H:i', strtotime($top_partidas[$i]['fecha_hora']));
    ${'puntaje_partida_' . ($i + 1)} = $top_partidas[$i]['puntaje'];
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
