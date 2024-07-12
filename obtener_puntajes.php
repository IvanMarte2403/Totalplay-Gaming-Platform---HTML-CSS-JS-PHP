<?php 
// Iniciar la sesión
 

// Incluir la conexión a la base de datos
include 'db_conexion.php';

// Obtiene el ID del usuario actual
$id_usuario = $_SESSION['id'];

// Prepara la consulta SQL para obtener la suma de los puntajes del usuario actual en el juego 1
$sql1 = "SELECT SUM(puntaje) AS puntaje_total FROM juego_1 WHERE id = ?";       

// Prepara la declaración
$stmt1 = $conexion->prepare($sql1);

// Vincula los parámetros
$stmt1->bind_param("i", $id_usuario);

// Ejecuta la declaración
$stmt1->execute();

// Obtiene el resultado
$result1 = $stmt1->get_result();

// Obtiene la fila del resultado
$row1 = $result1->fetch_assoc();

// Obtiene el puntaje total del juego 1
$puntaje_total1 = $row1['puntaje_total'];

// Si el puntaje total es NULL, lo establece a 0
if ($puntaje_total1 === NULL) {
    $puntaje_total1 = 0;
}

// Cierra la declaración
$stmt1->close();

// Prepara la consulta SQL para obtener la suma de los puntajes del usuario actual en el juego 2
$sql2 = "SELECT SUM(puntaje) AS puntaje_total FROM juego_2 WHERE id = ?";       

// Prepara la declaración
$stmt2 = $conexion->prepare($sql2);

// Vincula los parámetros
$stmt2->bind_param("i", $id_usuario);

// Ejecuta la declaración
$stmt2->execute();

// Obtiene el resultado
$result2 = $stmt2->get_result();

// Obtiene la fila del resultado
$row2 = $result2->fetch_assoc();

// Obtiene el puntaje total del juego 2
$puntaje_total2 = $row2['puntaje_total'];

// Si el puntaje total es NULL, lo establece a 0
if ($puntaje_total2 === NULL) {
    $puntaje_total2 = 0;
}

// Cierra la declaración
$stmt2->close();

// Prepara la consulta SQL para obtener la suma de los puntajes del usuario actual en el juego 5
$sql5 = "SELECT SUM(puntaje) AS puntaje_total FROM juego_5 WHERE id = ?";

// Prepara la declaración
$stmt5 = $conexion->prepare($sql5);

// Vincula los parámetros
$stmt5->bind_param("i", $id_usuario);

// Ejecuta la declaración
$stmt5->execute();

// Obtiene el resultado
$result5 = $stmt5->get_result();

// Obtiene la fila del resultado
$row5 = $result5->fetch_assoc();

// Obtiene el puntaje total del juego 5
$puntaje_total5 = $row5['puntaje_total'];

// Si el puntaje total es NULL, lo establece a 0
if ($puntaje_total5 === NULL) {
    $puntaje_total5 = 0;
}

// Prepara la consulta SQL para obtener la suma de los puntajes del usuario actual en el juego 4
$sql4 = "SELECT SUM(puntaje) AS puntaje_total FROM juego_4 WHERE id = ?";

// Prepara la declaración
$stmt4 = $conexion->prepare($sql4);

// Vincula los parámetros
$stmt4->bind_param("i", $id_usuario);

// Ejecuta la declaración
$stmt4->execute();

// Obtiene el resultado
$result4 = $stmt4->get_result();

// Obtiene la fila del resultado
$row4 = $result4->fetch_assoc();

// Obtiene el puntaje total del juego 4
$puntaje_total4 = $row4['puntaje_total'];

// Si el puntaje total es NULL, lo establece a 0
if ($puntaje_total4 === NULL) {
    $puntaje_total4 = 0;
}

// Cierra la declaración y la conexión
$stmt4->close(); // Asegúrate de cerrar stmt4 antes de stmt5
$stmt5->close();
$conexion->close();


//Guarda el puntaje de todos los juegos: 

$puntaje_total_score = $puntaje_total1 + $puntaje_total2 + $puntaje_total4 + $puntaje_total5;
?>