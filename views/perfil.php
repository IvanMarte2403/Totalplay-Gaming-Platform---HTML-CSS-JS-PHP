<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Perfil</title>
    <style>

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .image-preview-container {
            text-align: center;
            margin-bottom: 15px;
        }

        .image-preview {
            width: 100px;
            height: 100px;
            border: 1px solid #ccc;
            border-radius: 50%;
            object-fit: cover;
            margin-top: 10px;
        }

        .image-select-container {
            margin-bottom: 15px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="dashboard-user-container">
    <form action="consultas/modificar_perfil.php" method="post">
        <label for="nombre_apellidos">Nombre y Apellidos:</label>
        <input type="text" id="nombre_apellidos" name="nombre_apellidos" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>

        <label for="genero">Género:</label>
        <select id="genero" name="genero" required>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select>

        <label for="celular">Celular:</label>
        <input type="tel" id="celular" name="celular" pattern="[0-9]{10}" required>

        <div class="image-select-container">
            <label for="foto_perfil">Selecciona tu personaje</label>
            <select id="foto_perfil" name="foto_perfil" onchange="updateImagePreview()" required>
                <option value="img/perfil/Player1.png">Zolar</option>
                <option value="img/perfil/Player2.png">Geondry</option>
                <option value="img/perfil/Player3.png">Liberty</option>
                <option value="img/perfil/Player4.png">Jupiter</option>
                <option value="img/perfil/Player5.png">Loky</option>
                <option value="img/perfil/Player6.png">Miller</option>
                <option value="img/perfil/Player7.png">Kennnen</option>
                <option value="img/perfil/Player8.png">FastMan</option>
                
                <!-- Agrega más opciones según las imágenes disponibles en el servidor -->
            </select>
        </div>

        <div class="image-preview-container">
            <img id="imagePreview" src="img/perfil/default.png" alt="Previsualización de la imagen" class="image-preview">
        </div>

        <input type="submit" value="Actualizar">
    </form>
</div>

<script>
    function updateImagePreview() {
        const imageSelect = document.getElementById('foto_perfil');
        const imagePreview = document.getElementById('imagePreview');
        imagePreview.src = imageSelect.value;
    }
</script>

</body>
</html>
