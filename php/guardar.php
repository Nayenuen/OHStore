<?php

include("abre.php"); 
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];
$stockActual = $_POST['stockActual'];
$stockMinimo = $_POST['stockMinimo'];
$fechaLlegada = $_POST['fechaLlegada'];

$consulta = "INSERT INTO minishop (nombre, descripcion, precio, categoria, stockActual, stockMinimo, fechaLlegada,Imagen) 
             VALUES ('$nombre', '$descripcion', '$precio', '$categoria', '$stockActual', '$stockMinimo','$fechaLlegada', '$Imagen')";

// Ejecuta la consulta
if ($conexion->query($consulta) === TRUE) {
    header("Location: ../mostrar.php");
} else {
    echo "Error: " . $consulta . "<br>" . $conexion->error;
}

// Cierra la conexión
$conexion->close();
?>