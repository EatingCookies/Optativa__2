<?php
    $nombre = $_POST['nombre'];
    include ("conexion.php");
    $conn = Conectarse();
    mysqli_connect_charset($conn, 'utf8');

    $sql = "insert into formulario (nombre, correo, asunto, mensaje) VALUES ('$nombre', '$correo','$asunto','$mensaje')";
    mysqli_query($conn, $sql);
?>