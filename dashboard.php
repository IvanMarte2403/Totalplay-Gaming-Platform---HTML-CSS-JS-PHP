<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Si no ha iniciado sesión, redirigir a la página de inicio (index.php)
    header('Location: index.php');
    exit;
}

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

// Cierra la declaración y la conexión
$stmt5->close();
$conexion->close();
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
                <p>Mi Puntaje Total : </p>
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

                <!-- <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-2.png" alt="">
                    <div class="texto-puntaje">
                    <p>2500</p>
                    </div>

                </div> -->

                <!-- =========Juego 3========= -->
                <!-- <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-3.png" alt="">
                    <div class="texto-puntaje">
                    <p>3000</p>
                    </div>

                </div> -->

                <!-- ===============Juego 3========== -->


                <!-- <div class="contenedor-puntaje-juego">
                    <img src="img/juegos/portada/juego-portada-general-4.png" alt="">
                    <div class="texto-puntaje">
                    <p>2400</p>
                    </div>

                </div> -->

                <!-- =========Juego 4========= -->
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
                 <p>¡Gana & Vive la experiencia de las Champions con <b>Totalplay!</b></p>
            </div>
           
            <div class="catalogo-juegos">
                <figure class="icon-cards mt-3">
                <div class="icon-cards__content">


                <a href="game.php" class="icon-cards__item d-flex align-items-center justify-content-center juego-1"></a>

                 <a href="game2.php" class="icon-cards__item d-flex align-items-center justify-content-center juego-2"></a>

                 <a href="game3.php" class="icon-cards__item d-flex align-items-center justify-content-center juego-3"></a>
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
                        <b class="black-juegos-personaje">¡Personaje Nuevo! </b>   en Soccer Invade
                    </h3>
                    <p>¡No dejes que lleguen al centro de la porteria! Ve aumentando tu puntaje</p>
                </div>

                <div class="contenedor-juego-1">
                    <div class="imagen-juego-personajes">
                        <img src="img/juegos/portada-game-personaje-1.png" alt="">
                    </div>

                    <h3>
                       <b class="black2-juegos-personaje">¡Nuevo Nivel! </b>   
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

        <div class="contenedor-seccion-juegos">
             <!-- ==============Juego 1 ============== -->
             <div class="contenedor-juego-explicacion">
                <a href="game.php" class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-1.png" alt="">
                </a>

                <div class="explicacion-texto">
                    <a href="game.php" class="temporada-game">
                        <p>JUGAR</p>
                    </a>
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
                </div>
            </div>
            <!-- ==============Juego 2 ============== -->
            <div class="contenedor-juego-explicacion">
                <a  href="game2.php"  class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-2.png" alt="">
                </a>

                <div class="explicacion-texto">
                    <a href="game2.php" class="temporada-game">
                        <p>JUGAR</p>
                    </a>
                    <h3>Soccer Invade</h3>
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
                </div>
            </div>
        </div>
         
        <div class="contenedor-seccion-juegos">
             <!-- ==============Juego 3 ============== -->
             <div class="contenedor-juego-explicacion">
                <a  href="game3.php"  class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-3.png" alt="">
                </a>

                <div class="explicacion-texto">
                    <a href="game3.php" class="temporada-game mantenimiento-game">
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
            </div>
            <!-- ==============Juego 4 ============== -->
            <div class="contenedor-juego-explicacion">
                <a   href="game4.php" class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-4.png" alt="">
                </a>
 
                <div class="explicacion-texto">
                    <a href="game4.php" class="temporada-game">
                        <p>JUGAR</p>
                    </a>
                    <h3>Ball - Champions</h3>
                    <p>
                    Aventura de plataformas en estadio. Salta obstáculos, alcanza la meta.

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

        </div>
           

        <div class="contenedor-seccion-juegos">
            <!-- ==============Juego 5 ============== -->
            <div class="contenedor-juego-explicacion">
                <a  href="game5.php"  class="imagen-juego-explicacion">
                    <img src="img/juegos/portada/juego-portada-general-5.png" alt="">
                </a>

                <div class="explicacion-texto">
                    <a href="game5.php" class="temporada-game">
                        <p>JUGAR</p>
                    </a>
                    <h3>MEMORAMA</h3>
                    <p>
                    Juego de memoria con tarjetas únicas de la Champions League.
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
        
    </div>


    </section>
    
</body>

<script src="main/casousel.js"></script>
</html>