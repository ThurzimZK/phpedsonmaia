<?php 

    if (isset($_POST['bt_enviar'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $peso  = $_POST['peso'];

        $erros = [];

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

        $peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        echo "<p>Nome: $nome</p>";
        echo "<p>E-mail: $email</p>";
        echo "<p>Idade: $idade</p>";
        echo "<p>Peso: $peso</p>";

        if (!$email = filter_var('email', FILTER_VALIDATE_EMAIL)) {
            $erros[] = "E-mail inválido";
        }

        if (!$idade = filter_var('idade', FILTER_VALIDATE_INT)) {
            $erros[] = "Idade tem que ser um número inteiro";
        }

        if (!$peso = filter_var('peso', FILTER_VALIDATE_FLOAT)) {
            $erros[] = "Peso tem que ser um número real com casas decimais";
        }

        if (!empty($erros)) {
            echo "<ul>";
            foreach ($erros as $erro) {
                echo "<li>$erro</li>";
            } 
            echo "</ul>";
        } else {
            echo "Dados corretos.";
        }
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
    <form action="valida.php" method="post">
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