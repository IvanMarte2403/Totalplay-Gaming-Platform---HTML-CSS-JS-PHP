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
    <link rel="stylesheet" href="style/game.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style/memorama-game.css">


    <title>TotalplayGaming</title>

</head>
<body>
    <nav>
        <div>
            <a href="dashboard.php">
             <img src="img/logos/totalplay-logo.png" alt="">
            </a>
        </div>

        <div>
            <h2><?php echo $_SESSION['nombre_apellidos']; ?>
            </h2>

            <p>#<?php echo $_SESSION['id']; ?></p>
            <a href="logout.php">
                <i class="fas fa-sign-out-alt"></i>
            </a>

        </div>
    </nav>

    <section class="game-zone">
            <h1 class="mensaje-niveles">ESTAMOS TRABAJANDO EN NUEVOS NIVELES PARA TI</h1>
    </section>


    <section class="descripcion-game">

        <div class="instrucciones-juego">
            <div>
                 <h2>
                    Champions Platformer   
                </h2>
              </div>

             <div>
                    <p>
                    Champions Platformer te pone en la piel de un jugador de fútbol que debe atravesar el estadio en un emocionante juego de plataformas. Salta sobre la cancha, esquiva obstáculos en las butacas y supera diversos desafíos para llegar al final del estadio. Ideal para los aficionados al deporte que disfrutan de una aventura llena de acción y habilidad.


                    </p>
             </div>
        </div>

        <div class="catalogo-juegos">
            <div class="arriba-catalogo">
                <a href="game.php"><img src="img/juegos/portada/juego-portada-general-1.png" alt=""> </a>
                <a href="game2.php"><img src="img/juegos/portada/juego-portada-general-2.png" alt=""> </a>
            </div>
            <div class="arriba-catalogo">
                <a href="game5.php"><img src="img/juegos/portada/juego-portada-general-5.png" alt=""> </a>
                <!-- <a href="game4.php"><img src="img/juegos/portada/juego-portada-general-4.png" alt=""> </a> -->
            </div>
        </div>
        .
        
    </section>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="main/puntaje.js"></script>
</html>