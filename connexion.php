<?php

$servername = "localhost";
$username = "root@";
$password = "";
$dbname = "login_econ"; // para Cyril colocar greencart

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}



?>
