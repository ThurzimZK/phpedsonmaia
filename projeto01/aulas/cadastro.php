<?php 

    if (isset($_POST['bt_enviar'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $peso  = $_POST['peso'];

        // SANITIZAÇÃO
        require_once "sanitizar.php";

        echo "<p>Nome: $nome</p>";
        echo "<p>E-mail: $email</p>";
        echo "<p>Idade: $idade</p>";
        echo "<p>Peso: $peso</p>";

        // FILTROS SANITIZADOS 
        include_once "filtros-sanitizados.php";

        // EXIBE ERROS
        include_once "exibe-erros.php";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de dados</title>
    <style>
        input{
            margin: 5px;
        }
    </style>
</head>
<body>
    <form action="cadastro.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" autofocus><br>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="emal"><br>
        <label for="idade">Idade</label>
        <input type="number" name="idade" id="idade" min="1" max="120" step="1"> Anos<br>
        <label for="peso">Peso</label>
        <input type="number" name="peso" id="peso" min="1.0" max="220.0" step="0.1"> (Kg)<br>
        <input type="submit" value="Enviar" name="bt_enviar">

    </form>
</body>
</html>