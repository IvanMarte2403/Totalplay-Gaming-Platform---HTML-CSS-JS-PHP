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
</div>