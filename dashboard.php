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

    <!-- Estilos Generales -->
    <link rel="stylesheet" href="style/portada-juegos.css">
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="stylesheet" href="style/responsive/responsive-dashboard.css">
    <link rel="stylesheet" href="style/responsive/dropdown-score-mobile.css">
    <link rel="stylesheet" href="style/dashboard-section-games/dashboard-section-game.css">
    <link rel="stylesheet" href="style/views/dashboard-user.css">

    <!-- ---Fonts----- -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
    <!-- Animations -->
    <link rel="stylesheet" href="animations/css/animationDashboardGames.css">

    <!-- Global Class  -->

    <link rel="stylesheet" href="style/global-class.css">
    <title>TotalPlayGaming</title>
    
</head>
<body>
    <div class="container">

        <div class="player-container">
            

            <!-- Sección con la fotografía y el puntaje del usuario -->
            <div class="info-player">
                <div class="photo-container">
                    <img src="<?php echo htmlspecialchars($imagenSrc); ?>" alt="">
                </div>

                <div id="infoUsuarioContainer" class="info-usuario">
                    <h2><?php echo $_SESSION['nombre_apellidos']; ?></h2>
                    <p><?php echo 'Mi puntaje: ' . $puntaje_total_score; ?></p>
                    
                </div>

            </div>

            <!-- Botones de Navegacion entre las vistas -->
            <div class="navigation-views">
                <a href="?view=home"><i class="fas fa-gamepad"></i> Home</a>
                <a href="?view=dashboard"><i class="fas fa-chart-bar"></i> Dashboard</a>
                <a href="?view=perfil"><i class="fas fa-user"></i> Perfil</a>
            </div>
                <!-- ======Puntajes Individuales de Juego=========== -->

            <div class="puntaje-individual-juego">
                <button class="dropdown-btn" onclick="toggleDropdown()">
                    <i class="fas fa-chevron-down"></i> Mis Puntajes
                </button>
                
                <div id="puntajesDropdown" class="dropdown-content">
                    
                    <!-- <div class="titulo-puntaje-juego-individual">
                         <p>Mi Score</p>
                    </div>
                    <div class="contenedor-puntaje-juego">
                        <img src="img/juegos/portada/juego-portada-general-1.png" alt="">
                        <div class="texto-puntaje">
                        <h2><?php echo $nombre_game1?></h2>
                        <p><?php echo $puntaje_total1; ?></p>
                        </div>
                        
                    </div>


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

                    <div class="contenedor-puntaje-juego">
                        <img src="img/juegos/portada/juego-portada-general-5.png" alt="">
                        <div class="texto-puntaje">
                        <h2><?php echo $nombre_game5?></h2>
                        <p><?php echo $puntaje_total5; ?></p>
                        </div>

                    </div> -->

                </div>

            </div>

        </div>
        
        <div class="dashboard-container">
            
        <?php
        // Determinar qué vista incluir en función del parámetro de URL 'view'
        $view = isset($_GET['view']) ? $_GET['view'] : 'home';

            switch ($view) {
                case 'dashboard':
                    include 'views/dashboard-user.php';
                    break;
                case 'perfil':
                    include 'views/perfil.php';
                    break;
                case 'home':
                default:
                    include 'views/home.php';
                    break;
            }
    ?>

        </div>

    </div>
    
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>

<!-- Animations -->
<script src="animations/animationDashboardGames.js"></script>

<!-- Interacciones -->
<script src="main/sectionGameSelector.js"></script> 
<script src="main/mobileTogglePuntajes.js"></script>
</html>