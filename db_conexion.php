

<?php
$conexion = new mysqli('localhost', 'totalplaygamingc_admin', '{!)YY6E8dG?0', 'totalplaygamingc_totalplay-dashboard');

if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}
?> 