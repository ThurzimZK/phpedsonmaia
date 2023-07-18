<?php 
    session_start();

    $_SESSION['nome'] = "Arthur";
    $_SESSION['idade'] = 19;

    echo "<h2>Sessão</h2>";
    
    echo "<p>Nome: {$_SESSION['nome']}, Idade: {$_SESSION['idade']} anos</p>";

    echo "ID " . session_id();
?>