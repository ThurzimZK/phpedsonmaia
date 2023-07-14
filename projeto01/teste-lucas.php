<?php

$host = "localhost";

$userr = "root";

$pass = "";

$bd= "sistema_unifeb";




$mysqli = new mysqli($host, $userr, $pass, $bd);




if($mysqli->connect_error) {

    echo "<p> Falha de conexão </p>" . $mysqli->connect_error;

    exit();

}

    ?>