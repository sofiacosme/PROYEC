<?php
include("con_db.php");
if(isset($_POST['register'])) {
    if (strlen($_POST['name'])>=1 && strlen($_POST['usuario'])>=1 && strlen($_POST['email'])>=1 && strlen($_POST['password'])>=1 && strlen($_POST['direccion'])>=1 && strlen($_POST['telefono'])>=1){
        $name=trim($_POST['name']);
        $usuario=trim($_POST['usuario']);
        $email=trim($_POST['email']);
        $password=trim($_POST['password']);
        $direccion=trim($_POST['direccion']);
        $telefono=trim($_POST['telefono']);
        $consulta="INSERT INTO usuarios(Nombre, Usuario, Email, Contraseña, Direccion, Telefono) VALUES ('$name','$usuario','$email','$password','$direccion','$telefono')";
        $resultado=mysqli_query($conex,$consulta);
        if($resultado){
            ?>
            <h3 class="ok">¡Te has registrado correctamente!</h3>
            <?php
        }else{
            ?>
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
            <?php
        }
    }   else{
        ?>
        <h3 class="bad">¡Por favor complete todos los campos!</h3>
        <?php
    }
}
?>