<?php

require_once '../services/config.php';
require_once '../services/connection.php';

session_start();

$id = $_REQUEST['id'];
$evento = $_REQUEST['id_evento'];
$estado = $_REQUEST['estado'];

if( $estado == 'des' ){
    mysqli_query($conn,"DELETE FROM `tbl_inscripcion` (`id`, `id_voluntario`, `id_evento`) VALUES (NULL, '$id', '$evento')");
    header("Location: ../view/index.php");
}else{
    mysqli_query($conn,"INSERT INTO `tbl_inscripcion` (`id`, `id_voluntario`, `id_evento`) VALUES (NULL, '$id', '$evento')");
    header("Location: ../view/index.php");
}