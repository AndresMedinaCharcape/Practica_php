<?php

$mysqli = new mysqli('127.0.0.1','root','','db_estadocivil');

if ($mysqli->connect_error)
{
    echo "Error de Conexion: " .$mysqli->connect_error();
}

$resultado = $mysqli->query('SELECT id_estado,nombre_estado FROM estados_civiles');

echo '<h1> Bienvenido!</h1>';
echo '<p>Debe Seleccionar su estado civil actual</p>';
echo '<select>';

while ( $fila = $resultado->fetch_assoc())
{
    echo "<option value= '" . $fila['id'] . "'> "  .
        $fila['nombre_estado'] . "</option>";
}

echo '</select>';

$resultado->free();
$mysqli->close();
?>