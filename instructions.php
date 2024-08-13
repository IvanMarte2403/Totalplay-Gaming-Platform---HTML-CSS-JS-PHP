<?php 

// 1. Cambiar el nombre de los juegos

$nombre_game1 = 'BigTrivia';
$nombre_game2 = 'Fruit Ninja';
$nombre_game3 = 'Flappy Bird';
$nombre_game4 = 'Tower Stack';
$nombre_game5    = 'Memoria';

$nombre_personaje1 = 'Conocedor';
$nombre_personaje2 = 'Estratega';
$nombre_personaje3 = 'Ninja';
$nombre_personaje4 = 'Tirador';
$nombre_personaje5 = 'Genio';
// ============================================================================

// 2. Modo desarrollo - Conexión Servidor
//                      en caso de querer modificar ruta es en db_conexion.php

//          1. Prendido
//          0. Apagado

$dev_mode = 1;

// =============================================================================


// Define la Meta mensual de puntaje 

$meta = 100000;

// ============================================================================

//Definición de Base de Datos:

$tables = ['juego_1', 'juego_2', 'juego_3' ,'juego_4', 'juego_5'];

// Beta: Número de Temporada: 
//Sirve para solo tener activas las fotografías de la temporada disponible

$numero_temporada = 2; 

//Beta: Cantidad de Juegos:
$cantidad_juegos = 5;

//Variables de usuarios ================

//$fotoPerfil
//$puntaje_total_score = Puntaje de todas las bases de datos 
//$id_usuario = Id del usuario actual


?>