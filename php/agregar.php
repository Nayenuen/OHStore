<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Agregar</title>
    <link rel="stylesheet" type="text/css" href="css/estiloA.css" media="screen">
</head>

<body>
    <center>
        <h1>Registro de Producto</h1>
        <form action = "guardar.php" method="POST" enctype="multipart/form-data"><br><br>

        <input type ="text" name="nombre" placeholder="Nombre" value=""/><br><br>
        <input type ="text" name="descripcion" placeholder="Descripcion" value=""/><br><br>
        <input type ="text" name="precio" placeholder="Precio" value=""/><br><br>
        <input type ="text" name="categoria" placeholder="Categoria" value=""/><br><br>
        <input type ="text" name="stockActual" placeholder="stockActual" value=""/><br><br>
        <input type ="text" name="stockMinimo" placeholder="stockMinimo" value=""/><br><br>
        <input type ="text" name="fechaLlegada" placeholder="fechaLlegada" value=""/><br><br>
    
        <input type="file" name="Imagen"/>
        <input type= "submit" value="Aceptar"/>
        </form>
        </center>
</body>
</html>