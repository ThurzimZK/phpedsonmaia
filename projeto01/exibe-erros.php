<?php 

    $erros = [];
    
    if (!empty($erros)) {
        echo "<ul>";
        foreach ($erros as $erro) {
            echo "<li>$erro</li>";
        } 
        echo "</ul>";
    } else {
        echo "Dados corretos.";
    }