<?php
include("abre.php"); 
$id = $_REQUEST['id'];

// Recoge los datos del formulario
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];
$stockActual = $_POST['stockActual'];
$stockMinimo = $_POST['stockMinimo'];
$fechaLlegada = $_POST['fechaLlegada'];

/* Se guardan los bits de la imagen */
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

$consulta = "UPDATE minishop SET nombre = '$nombre', descripcion='$descripcion', precio='$precio', categoria='$categoria', stockActual='$stockActual', stockMinimo='$stockMinimo', fechaLlegada='$fechaLlegada', Imagen='$Imagen' WHERE id='$id'";
$resultado = $conexion->query($consulta);

if ($resultado) {
    header("Location: ../mostrar.php");
}else{
    echo "Error al actualizar el producto";
}

?>