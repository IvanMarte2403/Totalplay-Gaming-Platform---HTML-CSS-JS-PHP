<?php
include 'consultas/top_players.php';

?>

<div class="dashboard-user-container">
    <div class="dashboard-user-row">

        <div class="imagen-new-portada contenedores-dashboards">
        
            <img src="img/dashboard/new-temporada.png" alt="">
        </div>

        <div class="best-players contenedores-dashboards">
        <h2><i class="fas fa-lightbulb" "></i> Top   3     Jugadores</h2>            
        
        <!-- Contenedor Best Player -->
            <div class="contenedor-player">
                <div class="contenedor-imagen-perfil">
                    <img id ="foto-perfil" src="<?php echo $foto_1?>" alt="">
                </div>
                <p id="nombre-jugador"><?php echo $nombre_1?></p>
                <p id="puntaje"><?php echo $puntaje_1?></p>
            </div>
        <!-- Contenedor Best Player -->
            <div class="contenedor-player">
                <div class="contenedor-imagen-perfil">
                    <img id ="foto-perfil" src="<?php echo $foto_2?>" alt="">
                </div>
                <p id="nombre-jugador"><?php echo $nombre_2?></p>
                <p id="puntaje"><?php echo $puntaje_2?></p>
            </div>
        <!-- Contenedor Best Player -->
            <div class="contenedor-player">
                <div class="contenedor-imagen-perfil">
                    <img id ="foto-perfil" src="<?php echo $foto_1?>" alt="">
                </div>
                <p id="nombre-jugador"><?php echo $nombre_3?></p>
                <p id="puntaje"><?php echo $puntaje_3?></p>
            </div>
           
        </div>
    </div>

    <!-- Objetivo Mensual & Top Games  -->
    <div class="dashboard-user-row">
        <!-- ========Objetivo Mensual========= -->
        <div class="dashboard-objetivo-mensual contenedores-dashboards">

            <h2><i class="fa fa-star"></i> Tu objetivo mensual</h2>
            <div class="container-numero-proceso">
                <p> <?php echo number_format($progreso); ?> </p>
                
                <p><?php echo number_format($meta); ?></p>
            </div>
            
            <div class="progress-bar-container">
                
                <div class="progress-bar" style="width: <?php echo $porcentaje;?>%;"></div>
               

            </div>
        </div>

        <!-- ============Top Games============= -->
         <div class="dashboard-top-games contenedores-dashboards">
            <div class="top-games-title">
                <h2><i class="fas fa-trophy"></i> Tus Top Games</h2>            
            </div>
            
            <div class="contenedor-top-juegos">

                <!-- Contenedor Top Juegos -->

                <div class="games-top">
                      <!-- ===============Top Game============ -->
                    <div class="contenedor-juego-top">
                        <div>
                            <h2><?php echo $top_name_1?></h2>
                        </div>
                        <div class="imagen-juego-top">
                            <img src="<?php echo $top_img_1?>" alt="">
                        </div>
                        <div>
                            <p><?php echo $top_puntaje_1?></p>
                        </div>
                    </div>
                    
                    <!-- ===============Top Game 2============ -->
                    <div class="contenedor-juego-top">
                        <div>
                            <h2><?php echo $top_name_2?></h2>
                        </div>
                        <div class="imagen-juego-top">
                            <img src="<?php echo $top_img_2?>" alt="">
                        </div>
                        <div>
                            <p><?php echo $top_puntaje_2?></p>
                        </div>
                    </div>
                    <!-- =============TopGame 3================= -->
                    <div class="contenedor-juego-top">
                        <div>
                            <h2><?php echo $top_name_3?></h2>
                        </div>
                        <div class="imagen-juego-top">
                            <img src="<?php echo $top_img_3?>" alt="">
                        </div>
                        <div>
                            <p><?php echo $top_puntaje_3?></p>
                        </div>
                    </div>

                </div>

                <!-- Personaje Top  -->

                <div class="personaje-top">
                    <div class="titulo-personaje-top">
                        <h2><?php echo $personaje_nombre?></h2>
                    </div>
                    
                    <div class="imagen-personaje-top">
                        <img src="<?php echo $personaje_dashboard?>" alt="">
                    </div>
                </div>
              

            </div>

        </div>

    </div>

    <!-- Top Partidas -->
    <div class="dashboard-user-row">
        <div class="top-gameplays contenedores-dashboards">
            <div class="title-top-gameplays">
            <h2><i class="fas fa-circle"></i> Top Partidas</h2>
            </div>

            <div class="partidas">
            <table>
                <thead>
                    <tr>
                        <th>Juego</th>
                        <th>Día</th>
                        <th>Hora</th>
                        <th>Puntaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $juego_partida_1?></td>
                        <td><?php echo $dia_partida_1?></td>
                        <td><?php echo $hora_partida_1?></td>
                        <td><?php echo $puntaje_partida_1?></td>
                    </tr>
                    <tr>
                        <td><?php echo $juego_partida_2?></td>
                        <td><?php echo $dia_partida_2?></td>
                        <td><?php echo $hora_partida_2?></td>
                        <td><?php echo $puntaje_partida_2?></td>
                    </tr>
                </tbody>
        </table>
            </div>
        </div>
    </div>
</div>


