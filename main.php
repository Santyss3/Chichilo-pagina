<?php
 
$conexion = new mysqli("localhost", "root", "", "chichilo");


$nombre = $_POST['nombre'];
$queja = $_POST['queja'];


$sql = "INSERT INTO usuarios (nombre, queja)
        VALUES ('$nombre','$queja')";

if ($conexion->query($sql) === TRUE) {
    echo " Usuario guardado correctamente";
} else {
    echo " Error: No se pudo guardar";
}

header('Location: index.php');

?>

