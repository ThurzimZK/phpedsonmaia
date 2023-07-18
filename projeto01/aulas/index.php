<?php 
    // fazer conexão, consulta no banco de dados
    $email_bd = "arthur@gmail.com";
    $senha_bd = 123;

    if (isset($_POST['bt_logar'])) {
        session_start();
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $_SESSION['email'] = $email;
        // verificar se os dados do form sao iguais aos do banco de dados
        if ($email == $email_bd && $senha == $senha_bd) {
            //login
            header('Location: dashboard.php');
        } else{
            //falha no login
            echo "<p>E-mail e/ou senha incorretos!</p>";
        } // fim if verificação
    } // fim if isset
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Logar" name="bt_logar">
    </form>

</body>
</html>