<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <title>Totalplay Gaming</title>
</head>
<body>


    <div class="container">
        <div class="totalplay-phase-register">

            <div class="nav-logo">
                <img src="img/logos/totalplay-logo.png" alt="">
            </div>

            <div class="phase-totalplay">   
                <img class="banner-personajes" src="img/recursos/banner-personajes.png" alt="">
            </div>
        </div>

        <div class="container-register">
            <div class="container-forms">
                <h2> Iniciar Sesión </h2>

                <form action="login.php" method="post">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required>
                    <div class="terminos-condiciones">
                        <label for="terminos">He leído los términos y condiciones</label>
                        <input type="checkbox" id="terminos" name="terminos" required>    
                    </div>
                    
                    <input class="boton-iniciar-sesion" type="submit" value="Iniciar sesión">
                </form>
                <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a>.</p>
            </div>
        </div>
           
        </div>

    </div>

  
</body>
</html>