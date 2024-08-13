<?php 
// Se realiza consulta de: 

// 1. Puntaje Total de un juego, consulta a base de datos
// 2. Obtiene los puntajes totales de los juegos
// 3. Suma total de los puntajes
// 4. Obtiene la foto de perfil del usuario

// Incluir la conexión a la base de datos
include 'db_conexion.php';
include 'instructions.php';

// Obtiene el ID del usuario actual
$id_usuario = $_SESSION['id'];

// Función para obtener el puntaje total de un juego
function obtener_puntaje_total($conexion, $id_usuario, $nombre_juego) {
    $sql = "SELECT SUM(puntaje) AS puntaje_total FROM $nombre_juego WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $puntaje_total = $row['puntaje_total'];
    $stmt->close();
    
    return $puntaje_total === NULL ? 0 : $puntaje_total;
}
for ($i = 1; $i < $cantidad_juegos; $i++){

}
// Obtiene los puntajes totales de los juegos
$puntaje_total1 = obtener_puntaje_total($conexion, $id_usuario, 'juego_1');
$puntaje_total2 = obtener_puntaje_total($conexion, $id_usuario, 'juego_2');
$puntaje_total3 = obtener_puntaje_total($conexion, $id_usuario, 'juego_3');
$puntaje_total4 = obtener_puntaje_total($conexion, $id_usuario, 'juego_4');
$puntaje_total5 = obtener_puntaje_total($conexion, $id_usuario, 'juego_5');
// Guarda el puntaje total de todos los juegos
$puntaje_total_score = $puntaje_total1 + $puntaje_total2 + $puntaje_total3 + $puntaje_total4 + $puntaje_total5;

// Obtiene la foto de perfil del usuario
$sql = "SELECT foto_perfil FROM usuarios WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$result = $stmt->get_result();
$fotoPerfil = $result->fetch_assoc()['foto_perfil'] ?? '';

// Ruta de imagen por defecto
$imagenSrc = "img/perfil/default.png";

if (!empty($fotoPerfil)) {
    $imagenSrc = $fotoPerfil;
}

// Cierra la conexión
$conexion->close();
?>
