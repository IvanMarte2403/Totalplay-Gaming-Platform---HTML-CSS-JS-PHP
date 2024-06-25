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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/portada-juegos.css">
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="stylesheet" href="style/responsive/responsive-dashboard.css">
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
                <p>Mi puntaje total : </p>
                <h2><?php echo $puntaje_total1 + $puntaje_total5; ?></h2>
            </div>

                <!-- ======Puntajes Individuales de Juego=========== -->
            <div class="puntaje-individual-juego">
                <div class="titulo-puntaje-juego-individual">
                <p>SCORE</p>
                </div>

                <!-- =====Juego 1===== -->
                <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-1.png" alt="">
                    <div class="texto-puntaje">
                    <p><?php echo $puntaje_total1; ?></p>
                    </div>
                    
                </div>

                <!-- Puntaje Número 2  -->

                <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-2.png" alt="">
                    <div class="texto-puntaje">
                    <p><?php echo $puntaje_total2; ?></p>
                    </div>

                </div>

                <!-- =========Juego 3========= -->
                <!-- <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-3.png" alt="">
                    <div class="texto-puntaje">
                    <p>3000</p>
                    </div>

                </div> -->

                <!-- ===============Juego 3========== -->


                <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-4.png" alt="">
                    <div class="texto-puntaje">
                    <p><?php echo $puntaje_total4; ?></p>
                    </div>

                </div>

                <!-- =========Juego 5========= -->
                <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-5.png" alt="">
                    <div class="texto-puntaje">
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
                 <h1>JUEGA AHORA</h1>
                 <p>¡Gana & vive la experiencia con <b>Totalplay!</b></p>
            </div>
           
            <div class="catalogo-juegos">
                <figure class="icon-cards mt-3">
                <div class="icon-cards__content">


                <a href="game.php" class="icon-cards__item d-flex align-items-center justify-content-center juego-1"></a>

                 <a href="game2.php" class="icon-cards__item d-flex align-items-center justify-content-center juego-2"></a>

                 <!-- <a href="#" class="icon-cards__item d-flex align-items-center justify-content-center juego-3"></a> -->
                 <a href="game4.php"  class="icon-cards__item d-flex align-items-center justify-content-center juego-4"></a>
                 <a href="game5.php"  class="icon-cards__item d-flex align-items-center justify-content-center juego-5"></a>
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
                        <b class="black-juegos-personaje">¡Personaje Nuevo! </b>   en Misión
                    </h3>
                    <p>¡No permitas que lleguen al centro!</p>
                </div>

                <div class="contenedor-juego-1">
                    <div class="imagen-juego-personajes">
                        <img src="img/juegos/portada-game-personaje-1.png" alt="">
                    </div>

                    <h3>
                       <b class="black2-juegos-personaje">¡Nuevo Pool De Preguntas! </b>   
                    </h3>
                    <p>Juega en todas las categorías.</p>
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
                    <h1>OBTÉN EL PUNTAJE MÁS ALTO Y GANA INCREÍBLES PREMIOS</h1>
                </div>

    </div>

    <div class="explicacion-juegos">
        <div class="seccion-juegos">

        <div class="contenedor-seccion-juegos">
            
             <!-- ==============Juego 1 ============== -->
             <div class="contenedor-juego-explicacion">
                <a href="game.php" class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-1.png" alt="">
                </a>

                <div class="explicacion-texto">
                  
                    <h3>Big Trivia </h3>
                    <p>
                        Juego de preguntas con ruleta. Cinco categorías. Acumula puntos por respuestas correctas.                    </p>

                    <div class="calificacion-estrellas">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <a href="game.php" class="temporada-game">
                        <p>JUGAR</p>
                    </a>
                </div>
            </div>
            <!-- ==============Juego 2 ============== -->
            <div class="contenedor-juego-explicacion">
                <a  href="game2.php"  class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-2.png" alt="">
                </a>

                <div class="explicacion-texto">
                   
                    <h3>Te Reto</h3>
                    <p>
                       Detén enemigos, mejora cañonazos, acumula puntos.                  
                     </p>

                    <div class="calificacion-estrellas">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <a href="game2.php" class="temporada-game">
                        <p>JUGAR</p>
                    </a>
                </div>
            </div>
        </div>
         
        <div class="contenedor-seccion-juegos">
             <!-- ==============Juego 3 ============== -->
             <!-- <div class="contenedor-juego-explicacion">
                <a  href="#"  class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-3.png" alt="">
                </a>

                <div class="explicacion-texto">
                    <a href="#" class="temporada-game mantenimiento-game">
                        <p>Mantenimiento</p>
                    </a>
                    <h3>Platformer Game</h3>
                    <p>
                        Detén enemigos, mejora cañonazos, acumula puntos.
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
            </div> -->
            <!-- ==============Juego 4 ============== -->
            <div class="contenedor-juego-explicacion">
                <a   href="game4.php" class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-4.png" alt="">
                </a>
 
                <div class="explicacion-texto">
                   
                    <h3>Misión</h3>
                    <p>

                        ¡Obtén el puntaje mas alto, golpea y no dejes que lleguen al suelo!.
                    </p>

                    <div class="calificacion-estrellas">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <a href="game4.php" class="temporada-game">
                        <p>JUGAR</p>
                    </a>
                </div>
            </div>

                <!-- ==============Juego 5 ============== -->
            <div class="contenedor-juego-explicacion">
                <a  href="game5.php"  class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-5.png" alt="">
                </a>

                <div class="explicacion-texto">
                 
                    <h3>Memoria</h3>
                    <p>
                    Juego de memoria con tarjetas únicas sobre football soccer. 
                    </p>

                    <div class="calificacion-estrellas">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <a href="game5.php" class="temporada-game">
                        <p>JUGAR</p>
                    </a>
                </div>
            </div>  

        </div>
           

            


            
        </div>
        
    </div>


    </section>
    
</body>
<script src="main/casousel.js"></script>
</html>