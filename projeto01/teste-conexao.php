<?php 
$host = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "projeto01";

@$con = new mysqli($host, $user, $password, $dbname);

if ($con->connect_error) {
    echo "<p>ERRO: (" . $con->connect_errno . ") " . $con->connect_errno . "</p>";
    exit;
} else {
    echo "<p>Conexão realizada com sucesso!</p>";
}

$con->close();
?>