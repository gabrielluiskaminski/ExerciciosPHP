<?php 
    $anoNascimento = readline("Digite seu ano de nascimento: ");
    $idade = 2025 - $anoNascimento;

    if ($idade < 16) {
        echo "Você não pode votar nem tirar a carteira de habilitação.";
    } else if ($idade >= 16 && $idade < 18) { 
        echo "Você pode votar mas não pode tirar a carteira de habilitação ainda.";
    } else {
        echo " Você pode votar e também tirar a carteira de habilitação.";
    }
?>