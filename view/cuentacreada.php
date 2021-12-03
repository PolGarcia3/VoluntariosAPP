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
    <title>Cuenta creada</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <script src="../js/code.js"></script>
</head>

<body class="portada">

    <div class="flex"> 
        <div class="login">
            <h1>CUENTA CREADA CON EXITO</h1>
            <br>
                <form action="login.php" method="post">
                    <input type="submit" value="INICIAR SESION">
                </form>
            <br>
        </div>
    </div>

</body>

</html>