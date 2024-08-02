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

    <div class="dashboard-user-row">
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


        <div class="dashboard-total-puntaje contenedores-dashboards">

        </div>
    </div>
</div>


