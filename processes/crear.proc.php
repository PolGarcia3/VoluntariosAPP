<?php 
include '../services/config.php';
include '../services/connection.php';

session_start();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['passwd'];

$resultado = mysqli_query($conn, "INSERT INTO `tbl_voluntarios` (`id_voluntario`, `email`, `nombre`, `apellido`, `contraseña`) VALUES (NULL, '$email', '$nombre', '$apellido', MD5('".$password."'))");

if($resultado == FALSE){
    echo "Error en el registro";
    ?>
    <br>
    <div class="logout">
        <b><a style="text-decoration:none" href="../view/login.php" class="user">VOLVER</a></b>
    </div>
    <?php
} else {
    header('Location: ../view/cuentacreada.php');
}