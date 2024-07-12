<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Si no ha iniciado sesión, redirigir a la página de inicio (index.php)
    header('Location: index.php');
    exit;
}

// Incluir la conexión a la bas e de datos y obtener los puntajes
include 'db_conexion.php';
include 'obtener_puntajes.php'; // Importa el archivo que contiene el código para obtener los puntajes
include 'instructions.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/portada-juegos.css">
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="stylesheet" href="style/responsive/responsive-dashboard.css">
    <link rel="stylesheet" href="style/dashboard-section-games/dashboard-section-game.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>TotalPlayGaming</title>
    
</head>
<body>
    <div class="container">

        <div class="player-container">
            

            <!-- Sección con la fotografía y el puntaje del usuario -->
            <div class="info-player">
                <div class="photo-container">
                    <img src="img/perfil/temporada1-halo.png" alt="">
                </div>

                <div id="infoUsuarioContainer" class="info-usuario">
                    <h2><?php echo $_SESSION['nombre_apellidos']; ?></h2>
                    <p><?php echo 'Mi puntaje: ' . $puntaje_total_score; ?></p>
                    
                </div>

            </div>


                <!-- ======Puntajes Individuales de Juego=========== -->
            <div class="puntaje-individual-juego">
                <div class="titulo-puntaje-juego-individual">
                <p>Mi Score</p>
                </div>

                <!-- =====Juego 1===== -->
                <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-1.png" alt="">
                    <div class="texto-puntaje">
                    <h2><?php echo $nombre_game1?></h2>
                    <p><?php echo $puntaje_total1; ?></p>
                    </div>
                    
                </div>

                <!-- Puntaje Número 2  -->

                <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-2.png" alt="">
                    <div class="texto-puntaje">
                    <h2><?php echo $nombre_game2?></h2>
                    <p><?php echo $puntaje_total2; ?></p>
                    </div>

                </div>


                <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-4.png" alt="">
                    <div class="texto-puntaje">
                    <h2><?php echo $nombre_game4?></h2>
                    <p><?php echo $puntaje_total4; ?></p>
                    </div>

                </div>

                <!-- =========Juego 5========= -->
                <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-5.png" alt="">
                    <div class="texto-puntaje">
                    <h2><?php echo $nombre_game5?></h2>
                    <p><?php echo $puntaje_total5; ?></p>
                    </div>

                </div>
            </div>

        </div>
        
        <div class="dashboard-container">
            <div class="nav-dashboard">
                <a href="logout.php" class="logout-icon">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
            <div class="titulo-dashboard">
                 <h1>¡JUEGA AHORA!</h1>
            </div>
           
            <div class="catalogo-juegos">
                <!-- Seccion Principal que muestra el juego activo -->
                <div class="section_game_principal">
                    <div id="sectionGameImage" class="section_game_image">
                        <img src="img/juegos/portada/juego-portada-general-1.png" alt="">
                    </div>
                    <div id="sectionGameInformation" class="section_game_information">
                         <h3>Big Trivia</h3>
                        <div class="estrellas">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="descripcion-juego">
                            Juego de preguntas con ruleta. Cinco categorías. Acumula puntos por respuestas correctas.
                        </p>
                        <a href="game.php">Jugar</a>
                    </div>
                </div>

                <div class="section_game_selector">
                    <a id="game-1" href=""><img src="img/juegos/portada/juego-portada-general-1.png" alt=""></a>
                    <a id="game-2" href=""><img src="img/juegos/portada/juego-portada-general-2.png" alt=""></a>
                    <a id="game-4" href=""><img src="img/juegos/portada/juego-portada-general-4.png" alt=""></a>
                    <a id="game-5" href=""><img src="img/juegos/portada/juego-portada-general-5.png" alt=""></a>
                </div>
               

                    
            </div>

          
          
               


            </div>

        </div>

    </div>
    
</body>

<script src="main/sectionGameSelector.js"></script>

</html>