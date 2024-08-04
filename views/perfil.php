<?php 
include 'consultas/editor_perfil.php';
// include 'db_conexion.php';
?>

<div class="perfil-user">
    <h2>Editar Perfil</h2>
    <form id="perfil-form" method="post">
        <div class="contenedor-label">
            <div>
                <label class="label-title" for="nombre_apellidos">Usuario:</label>
                <input class="inputSize" type="text" id="nombre_apellidos" name="nombre_apellidos" value="<?php echo $user['nombre_apellidos']; ?>" required><br>
            </div>
            <div>
                <label class="label-title" for="email">Email:</label>
                <input class="inputSize" type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required><br>
            </div>
        </div>
        <div class="contenedor-label">
            <div>
                <label class="label-title" for="contrasena">Contraseña:</label>
                <input class="inputSize" type="password" id="contrasena" name="contrasena" value="<?php echo $user['contrasena']; ?>" required><br>
            </div>
            <div>   
                <label class="label-title" for="genero">Género:</label>
                <select class="inputSize" id="genero" name="genero" required>
                    <option value="M" <?php echo $user['genero'] == 'M' ? 'selected' : ''; ?>>Masculino</option>
                    <option value="F" <?php echo $user['genero'] == 'F' ? 'selected' : ''; ?>>Femenino</option>
                    <option value="O" <?php echo $user['genero'] == 'O' ? 'selected' : ''; ?>>Otro</option>
                </select><br>
            </div>
        </div>
        <div class="contenedor-label">
            <div>
                <label class="label-title" for="celular">Celular:</label>
                <input class="inputSize" type="text" id="celular" name="celular" value="<?php echo $user['celular']; ?>" required><br>
            </div>
            <div>
                <label class="label-title" for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input class="inputSize" type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $user['fecha_nacimiento']; ?>" required><br>
            </div>
        </div>
        <label class="label-title" for="numero_cliente_totalplay">Número Cliente Totalplay:</label>
        <input class="inputSize" type="text" id="numero_cliente_totalplay" name="numero_cliente_totalplay" value="<?php echo $user['numero_cliente_totalplay']; ?>" required><br>
        <label class="label-title" for="foto_perfil">Foto de Perfil:</label>
        <div class='img-label'>
            <?php
            for ($i = 1; $i <= 5; $i++) {
                $selected = $user['foto_perfil'] == "img/perfil/$numero_temporada/$i.png" ? 'checked' : '';
                echo "<label><input type='radio' name='foto_perfil' value='img/perfil/$numero_temporada/$i.png' $selected>
                    <img src='img/perfil/$numero_temporada/$i.png' class='imagen-label'></label>";
            }
            ?>
        </div>
        <br>
        <div id="mensaje"></div>
        <button type="submit">Guardar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#perfil-form').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: 'consultas/editor_perfil.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#mensaje').html(response);
            }
        });
    });
});
</script>
