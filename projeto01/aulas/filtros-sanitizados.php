<?php 
    if (!$email = filter_var('email', FILTER_VALIDATE_EMAIL)) {
    $erros[] = "E-mail inválido";
    }

    if (!$idade = filter_var('idade', FILTER_VALIDATE_INT)) {
    $erros[] = "Idade tem que ser um número inteiro";
    }

    if (!$peso = filter_var('peso', FILTER_VALIDATE_FLOAT)) {
    $erros[] = "Peso tem que ser um número real com casas decimais";
    }