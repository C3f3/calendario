<?php
    $servidor = "localhost";
    $utilizador = "root";
    $password = "caveolina";
    $namebd = "PHP_EVENTO";

    $conn = new mysqli($servidor,$utilizador,$password,$namebd);

    if ($conn->connect_error) die("Falla de conexion a base de datos: " . $conn->connect_error);

    $conn->set_charset("utf8");
?>