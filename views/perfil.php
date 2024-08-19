<div class="dashboard-user-container">
    <form action="procesar_formulario.php" method="post" enctype="multipart/form-data">
        <label for="nombre_apellidos">Nombre y Apellidos:</label>
        <input type="text" id="nombre_apellidos" name="nombre_apellidos" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>

        <label for="genero">Género:</label>
        <select id="genero" name="genero" required>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select><br><br>

        <label for="celular">Celular:</label>
        <input type="tel" id="celular" name="celular" pattern="[0-9]{10}" required><br><br>

        <label for="foto_perfil">Foto de Perfil:</label>
        <input type="file" id="foto_perfil" name="foto_perfil" accept="image/*" required><br><br>

        <input type="submit" value="Actualizar">
    </form>
</div>