<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/responsive/responsive-index.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300.900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">


    <title>Totalplay Gaming</title>
</head>
<body>


    <div class="container">
        <div class="totalplay-phase-register">

            <div class="nav-logo">
                <img src="img/logos/totalplay-logo.png" alt="">
            </div>

            <div class="dialogo-texto">
                ¡Hola, soy el Tio Totalplay! Bienvenido a TotalplayGaming. Tu oportunidad de ganar increibles premios
            </div>

            <div class="phase-totalplay">   
                <img class="banner-personajes" src="img/recursos/personajes/alex.png" alt="">
            </div>
        </div>

        <div class="container-register">

            <!-- =======Formulario de Inicio de Sesión======= -->

            <div id="login-form" class="container-forms" >
                <h2> Iniciar Sesión </h2>

                <form action="login.php" method="post">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required>
             
                    
                    <input class="boton-iniciar-sesion" type="submit" value="Iniciar sesión">
                </form>
               
            </div>

            <!-- =======Formulario de Registro ======= -->
            <div id="register-form" class="container-forms" style="display: none;">
                <h2> Registro </h2>

                <form id="registro" method="post" action="forms.php">
                    <input type="text" name="nombre_apellidos" placeholder="Nombre y apellidos" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="contrasena" placeholder="Contraseña" required>
                    <input type="text" name="genero" placeholder="Genero" required>
                    <input type="text" name="celular" placeholder="Celular" required>
                    <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
                    <input type="text" name="numero_cliente_totalplay" placeholder="Número de Cliente Totalplay" required>
                    <input type="submit" value="Registrarse">
                </form>
            </div>

            <!-- ========Enlace de Registro o Inicio de Sesión============ -->
          

            <div class="contenedor-animacion-personaje">
                <img src="img/recursos/personajes/cono.gif" alt="">
            </div>

        </div>
           
        </div>

    </div>

    <script src="main/formulario-change-forms.js"></script>
    <script src="main/animaciones.js"></script>
</body>
</html>