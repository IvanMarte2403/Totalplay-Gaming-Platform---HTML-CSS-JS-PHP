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

                <div class="slider-container">
                    <button class="slider-arrow left-arrow">&#9664;</button>
                    <div class="section_game_selector">
                                    <?php
                    // Define la cantidad de juegos
                    $cantidad_juegos = 5;

                    // Genera los enlaces dinámicamente
                    for ($i = 1; $i <= $cantidad_juegos; $i++) {
                        echo '<a id="game-' . $i . '" href=""><img src="img/juegos/portada/juego-portada-general-' . $i . '.png" alt=""></a>';
                    }
    ?>
                    </div>
                    <button class="slider-arrow right-arrow">&#9654;</button>
                </div>
               

                    
            </div>
             
</div>