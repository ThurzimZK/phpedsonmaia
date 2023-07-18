<?php 
    $senha = 123;

    // base 64 codifica - decodifica = nao recomendavel
    $senha_base64 = base64_encode($senha);
    $senha_decodificada = base64_decode($senha_base64);

    echo "<p>Senha base64: $senha_base64</p>";
    echo "<p>Senha decodificada: $senha_decodificada</p>";

    // MD5 - codifica 
    $senha_md5 = md5($senha);
    echo "<p>Senha md5: $senha_md5</p>";

    // sha1 - codifica
    $senha_sha1 = sha1($senha);
    echo "<p>Senha shai1: $senha_sha1</p>";

    // PASSWORD COM HASH - RECOMENDAVEL
    $senha_com_hash = password_hash($senha, PASSWORD_DEFAULT);
    echo "<p>Senha base64: $senha_base64</p>";
?>