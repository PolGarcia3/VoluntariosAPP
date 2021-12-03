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
    <title>Login</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <script src="../js/code.js"></script>
</head>

<body class="portada">

    <div class="flex"> 
        <div class="login">
            <h1>INICIA SESION CON TU CUENTA</h1>
            <br>
                <form action="../processes/login.proc.php" method="post" onsubmit="return validar();">
                    <input type="email" name="email" id="email" placeholder="Introduce el Email">
                    <br>
                    <br>
                    <input type="password" name="password" id="password" placeholder="Introduce la Contraseña">
                    <br>
                    <br>
                    <div id="mensaje"><?php
                    if(isset($_GET["error"])){
                    ?>
                        <p id ="errorinicio" class="erroruser">Los datos introducidos son incorrectos<p>
                    <?php
                    }
                    ?></div>
                    <input  class="boton-login" type="submit" value="INICIAR SESION">
                </form>

                    <br>
                    <br>
                    <br>
                    <h3>¿NO TIENES CUENTA? ¡CREA UNA!</h3>
                    <br>
                <form action="crear.php" method="post">
                    <input  class="boton-login" type="submit" value="CREAR CUENTA">
                </form>
                    <br>
        </div>
    </div>

</body>

</html>