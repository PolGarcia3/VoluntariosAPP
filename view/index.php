<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Inicio</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <script src="../js/code.js"></script>
</head>

<body class="portada">
        <?php
            include '../services/connection.php';
            session_start();
            $id = $_SESSION['id_voluntario'];

            /* Controla que la sesión esté iniciada */
            if (!isset($_SESSION['email'])) {
                header('Location: login.php');
            }
            $cadena = substr ( $_SESSION['email'], 0, -10);

            $eventos = mysqli_query($conn,"SELECT * from tbl_eventos");

            $inscripciones = mysqli_query($conn,"SELECT * from tbl_inscripcion where id_voluntario = ".$id);

            $array_eventos=[];
            
            foreach($inscripciones as $inscrip){
                array_push($array_eventos,$inscrip['id_evento']);
            }

        ?>
        <div class="seccion1">
            <div class="bienvenido">
                <b><a class="user">Bienvenido, <?php echo $cadena;?></a></b>
            </div>

            <div class="logout">
                <b><a style="text-decoration:none" href="../processes/logout.proc.php" class="user">LOGOUT</a></b>
            </div>
        </div>

    <div class="flex">        
        
            <div class="contenido">

                <div class="eventos">

                    <?php

                    //$nodisponible = $inscrip();

                        foreach($eventos as $evento){
                    ?>
                            <h1><td><?php echo"{$evento['nombre']}";?></td><br/></h1>
                            <h4><td><?php echo"{$evento['descripcion']}";?></td><br/></h4>

                                <br>
                            <div class="boton">
                                <?php

                                if(in_array($evento['id_evento'],$array_eventos)){
                                ?>
                                <form method="POST" action="../processes/inscribirse.php">
                                    <input type="hidden" value="<?php echo $id ?>" name="id">
                                    <input type="hidden" value="<?php echo $evento['id_evento'] ?>" name="id_evento">
                                    <input type="hidden" value="des" name="estado">
                                    <input type="submit" value="INSCRITO" name="Desinscribirse">
                                </form>
                                <?php
                                }else{ 
                                ?>
                                <form method="POST" action="../processes/inscribirse.php">
                                    <input type="hidden" value="<?php echo $id ?>" name="id">
                                    <input type="hidden" value="<?php echo $evento['id_evento'] ?>" name="id_evento">
                                    <input type="hidden" value="ins" name="estado">
                                    <input type="submit" value="Inscribirse" name="Inscribirse">
                                </form>
                                <?php
                                }
                                ?>
                            </div>
                        <br>
                    <?php
                        }
                    ?>                    
                
                </div>   
            </div>
    </div>
</body>

</html>