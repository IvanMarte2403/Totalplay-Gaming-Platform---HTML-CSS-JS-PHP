<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Si no ha iniciado sesión, redirigir a la página de inicio (index.php)
    header('Location: index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>TotalPlayGaming</title>
    
</head>
<body>
    <div class="container">
        <div class="player-container">

            <div class="info-player">
                <div class="photo-container">
                    <img src="img/perfil/temporada1-halo.png" alt="">
                </div>

                <div id="infoUsuarioContainer" class="info-usuario">
                    <h2><?php echo $_SESSION['nombre_apellidos']; ?></h2>
                    <p>#<?php echo $_SESSION['id']; ?></p>
                </div>

            </div>

            <div class="puntaje-player">
                <p>Mi Puntaje Total : </p>
                <h2> 10002</h2>
            </div>

        </div>
        
        <div class="dashboard-container">
            <div class="nav-dashboard">
                <a href="logout.php" class="logout-icon">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
            <div class="titulo-dashboard">
                 <h1>JUEGA AHORA</h1>
                 <p>¡Gana & Vive la experiencia de las Champions con <b>Totalplay!</b></p>
            </div>
           

            <!-- =========Lista de Personajes Por Jugador====== -->
            <div class="nuestros-juegos-personajes ">
                <div class="contenedor-juego-1">
                    <div class="imagen-juego-personajes">
                        <img src="img/juegos/portada-game-personaje-2.png" alt="">
                    </div>

                    <h3>
                        Soccer Invade
                    </h3>
                    <p>¡No dejes que lleguen al centro de la porteria! Ve aumentando tu puntaje</p>
                </div>

                <div class="contenedor-juego-1">
                    <div class="imagen-juego-personajes">
                        <img src="img/juegos/portada-game-personaje-1.png" alt="">
                    </div>

                    <h3>
                        Champions Platform
                    </h3>
                    <p>¡Vas tarde al partido! Salta para poder llegar </p>
                </div>

            
            </div>
        </div>
    </div>
</body>
</html>