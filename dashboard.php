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
    <link rel="stylesheet" href="style/portada-juegos.css">
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="stylesheet" href="style/casousel.css">

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
                <h2>9800</h2>
            </div>


            <div class="puntaje-individual-juego">
                <div class="titulo-puntaje-juego-individual">
                <p>SCORE</p>
                </div>

                <!-- =====Juego 1===== -->
                <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-1.png" alt="">
                    <div class="texto-puntaje">
                    <p>1000</p>
                    </div>

                </div>

                <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-2.png" alt="">
                    <div class="texto-puntaje">
                    <p>2500</p>
                    </div>

                </div>

                <!-- =========Juego 2========= -->
                <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-3.png" alt="">
                    <div class="texto-puntaje">
                    <p>3000</p>
                    </div>

                </div>

                <!-- ===============Juego 3========== -->
                <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-4.png" alt="">
                    <div class="texto-puntaje">
                    <p>2400</p>
                    </div>

                </div>

                <!-- =========Juego 4========= -->
                <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-5.png" alt="">
                    <div class="texto-puntaje">
                    <p>900</p>
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
                 <h1>JUEGA AHORA</h1>
                 <p>¡Gana & Vive la experiencia de las Champions con <b>Totalplay!</b></p>
            </div>
           
            <div class="catalogo-juegos">
                <figure class="icon-cards mt-3">
                <div class="icon-cards__content">
                  <div class="icon-cards__item d-flex align-items-center justify-content-center juego-1"></div>
                 <div class="icon-cards__item d-flex align-items-center justify-content-center juego-2"></div>

                 <div class="icon-cards__item d-flex align-items-center justify-content-center juego-3"></div>
                 <div class="icon-cards__item d-flex align-items-center justify-content-center juego-4"></div>
                 <div class="icon-cards__item d-flex align-items-center justify-content-center juego-5"></div>
                 </div>
                </figure>
             </div>

            <!-- =========Lista de Personajes Por Jugador====== -->
            <div class="nuestros-juegos-personajes ">
                <div class="contenedor-juego-1">
                    <div class="imagen-juego-personajes">
                        <img src="img/juegos/portada-game-personaje-2.png" alt="">
                    </div>

                    <h3>
                        <b class="black-juegos-personaje">¡Personaje Nuevo! </b>   en Soccer Invade
                    </h3>
                    <p>¡No dejes que lleguen al centro de la porteria! Ve aumentando tu puntaje</p>
                </div>

                <div class="contenedor-juego-1">
                    <div class="imagen-juego-personajes">
                        <img src="img/juegos/portada-game-personaje-1.png" alt="">
                    </div>

                    <h3>
                       <b class="black2-juegos-personaje">¡Nuevo Nivel! </b> Champions Platform
                    </h3>
                    <p>¡Vas tarde al partido! Salta para poder llegar </p>
                </div>

            
            </div>
          
               


            </div>

        </div>

    </div>


    <section class="premios">
         <div class="animacion-frame">
            <img src="img/recursos/personajes/cono.gif" alt="">
         </div>'

    <div class="seccion-premios">
                <div class="titulo-premios">
                    <h1>OBTEN EL PUNTAJE MAS ALTO Y GANA INCREIBLES PREMIOS</h1>
                </div>

    </div>

    <div class="explicacion-juegos">
        <div class="seccion-juegos">
            <!-- ==============Juego 1 ============== -->
            <div class="contenedor-juego-explicacion">
                <div class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-1.png" alt="">
                </div>

                <div class="explicacion-texto">
                    <div class="temporada-game">
                        <p>CHAMPIONS</p>
                    </div>
                    <h3>Big Trivia </h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore delectus quod a natus animi dolorum! Eligendi, voluptatem ex. Dolore vero quo recusandae odio aliquam nesciunt?
                    </p>

                    <div class="calificacion-estrellas">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
           
         
            <!-- ==============Juego 2 ============== -->
            <div class="contenedor-juego-explicacion">
                <div class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-2.png" alt="">
                </div>

                <div class="explicacion-texto">
                    <div class="temporada-game">
                        <p>CHAMPIONS</p>
                    </div>
                    <h3>Soccer Invade</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore delectus quod a natus animi dolorum! Eligendi, voluptatem ex. Dolore vero quo recusandae odio aliquam nesciunt?
                    </p>

                    <div class="calificacion-estrellas">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <!-- ==============Juego 3 ============== -->
            <div class="contenedor-juego-explicacion">
                <div class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-3.png" alt="">
                </div>

                <div class="explicacion-texto">
                    <div class="temporada-game">
                        <p>CHAMPIONS PLATFORM</p>
                    </div>
                    <h3>Big Trivia </h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore delectus quod a natus animi dolorum! Eligendi, voluptatem ex. Dolore vero quo recusandae odio aliquam nesciunt?
                    </p>

                    <div class="calificacion-estrellas">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <!-- ==============Juego 4 ============== -->
            <div class="contenedor-juego-explicacion">
                <div class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-4.png" alt="">
                </div>

                <div class="explicacion-texto">
                    <div class="temporada-game">
                        <p>CHAMPIONS</p>
                    </div>
                    <h3>Ball - Champions</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore delectus quod a natus animi dolorum! Eligendi, voluptatem ex. Dolore vero quo recusandae odio aliquam nesciunt?
                    </p>

                    <div class="calificacion-estrellas">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <!-- ==============Juego 5 ============== -->
            <div class="contenedor-juego-explicacion">
                <div class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-5.png" alt="">
                </div>

                <div class="explicacion-texto">
                    <div class="temporada-game">
                        <p>CHAMPIONS</p>
                    </div>
                    <h3>MEMORAMA</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore delectus quod a natus animi dolorum! Eligendi, voluptatem ex. Dolore vero quo recusandae odio aliquam nesciunt?
                    </p>

                    <div class="calificacion-estrellas">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>


            
        </div>
        
    </div>


    </section>
    
</body>

<script src="main/casousel.js"></script>
</html>