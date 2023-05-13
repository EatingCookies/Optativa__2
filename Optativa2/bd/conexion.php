<?php
    function Conectarse(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "contacto_bd";

        $conn = mysqli_connect($servername,$username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . myqsli_connect_error());
        }
        return $conn
    }
?>