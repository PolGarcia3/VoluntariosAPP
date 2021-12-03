<?php
// 1. Conexión con la base de datos	
include '../services/connection.php';

$email = $_REQUEST['email'];
$psswd = $_REQUEST['password'];

$email=mysqli_real_escape_string($conn,$email);

$user = mysqli_query($conn,"SELECT * FROM tbl_voluntarios WHERE email='$email' and contraseña=MD5('{$psswd}')");

$id = mysqli_fetch_array($user);

if (mysqli_num_rows($user) == 1) {
    // Comprobamos si coincide el email y el password
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['id_voluntario'] = $id[0];
    //echo $_SESSION['id_voluntario'];
    header("location: ../view/index.php");
} else {
    // En caso de que falle volvemos al login
    header("location: ../view/login.php?error=errorinicio");
}

mysqli_free_result($user);