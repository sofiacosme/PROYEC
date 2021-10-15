<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//css/registro.css" class="rel">
    <title>Registro</title>
</head>
<body>
    <form method="post">
        <h1 class="titulo">------Formulario de registro------</h1>
        <input class="controls" type="text" name="name" placeholder="Nombre completo">
        <input class="controls" type="text" name="usuario" placeholder="Usuario">
        <input class="controls" type="email" name="email" placeholder="Email">
        <input class="controls" type="password" name="password"placeholder="Contraseña">
        <input class="controls" type="text" name="direccion"placeholder="direccion">
        <input class="controls" type="Int" name="telefono"placeholder="Telefono">
        <input type="submit" name="register">
    </form>
    <?php
    include("registrar.php");
    ?>
  
</body>
</html>