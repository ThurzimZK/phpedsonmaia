<?php 
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de controle</title>
</head>
<body>
    <h1>Painel de Controle</h1>
    <?php 
        echo "<p>Usuário: {$_SESSION['email']} logado</p>"
    ?>
    <p><a href="logout.php">Sair</a></p>
</body>
</html>