<?php
require_once '../services/config.php';
require_once '../services/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Crear Cuenta</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <script src="../js/code.js"></script>
</head>

<body class="portada">

        <div class="seccion1">
            <div class="logout">
                <b><a style="text-decoration:none" href="../view/login.php" class="user">VOLVER</a></b>
            </div>
        </div>

    <div class="flex"> 
        <div class="login">
            <h1>CREA UNA NUEVA CUENTA</h1>
            <br>
                <form action="../processes/crear.proc.php" method="post" onsubmit="return crear();">
                    <input type="nombre" name="nombre" id="nombre" placeholder="Introduce un nombre">
                    <br>
                    <br>
                    <input type="apellido" name="apellido" id="apellido" placeholder="Introduce un apellido">
                    <br>
                    <br>
                    <input type="email" name="email" id="email" placeholder="Introduce un email">
                    <br>
                    <br>
                    <input type="password" name="passwd" id="passwd1" placeholder="Introduce una contraseña">
                    <br>
                    <br>
                    <div id="mensaje"><?php
                    if(isset($_GET["error"])){
                    ?>
                        <p id ="errorinicio" class="erroruser">Faltan datos por introducir<p>
                    <?php
                    }
                    ?></div>
                    <br>
                    <br>
                    <input class="boton-login" type="submit" value="CREAR CUENTA" onsubmit="return comprobarClave();">
                </form>
        </div>
    </div>

</body>

</html>